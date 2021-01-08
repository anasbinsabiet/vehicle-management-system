<?php
$connect = "";

include('../database_connection.php');

if (!isset($_SESSION['user_name'])) {
    header("Location: ../logout.php");
}

////////////////////////////////////////////////////////////// IMAGE / FILE MOVE


//////////////////////////////////////////////////////////////// ADD TO DB vehicle details

if (isset($_POST['btn_action'])) {
  if ($_POST['btn_action'] == 'Add') {
    // echo "<pre>";print_r($_POST);
    date_default_timezone_set("Asia/Dhaka");
    $create_date = date("Y-m-d H:i:s");

    $name = trim($_POST['vehicle_condition_ok']);

    if(empty($name))
    {
      echo '<div class="alert alert-danger">Please enter your vehicle_condition_ok</div>';
      exit;
    }


    $query = "INSERT INTO `inspection_history_vehicle_condition_ok`(`user_id`, `vehicle_condition_ok`, `create_date`, `delete_status`) VALUES ( :user_id ,  :vehicle_condition_ok ,  :create_date , :delete_status)";

    $statement = $connect->prepare($query);
    $statement->execute(
      array(

//        ':user_id' => $_SESSION['user_id'],

        
      ':user_id' => 1,
      ':vehicle_condition_ok' => $_POST['vehicle_condition_ok'],
      ':create_date' => $create_date,
      ':delete_status' => 0


      )
        

    );

    // if (!$statement->execute()) {
    //   print_r($statement->errorInfo());
    // }


    $result = $statement->fetchAll();
    if (isset($result)) {
      echo '<div class="alert alert-success">Vehicle Condition Ok Added</div>';

    }
}
////////////////////////////////////////////////////////// Edit Data Show

  if ($_POST['btn_action'] == 'fetch_single') {
    $query = "SELECT * FROM inspection_history_vehicle_condition_ok WHERE vehicle_condition_ok_id = :vehicle_condition_ok_id";
    $statement = $connect->prepare($query);
    $statement->execute(
      array(
        ':vehicle_condition_ok_id' => $_POST["vehicle_condition_ok_id"]
      )
    );
    $result = $statement->fetchAll();
//     print_r($result);die();
    foreach ($result as $row) {

      $output['vehicle_condition_ok_id'] = $row['vehicle_condition_ok_id'];
      $output['vehicle_condition_ok'] = $row['vehicle_condition_ok'];

    }
    echo json_encode($output);
  }


////////////////////////////////////////////////////////// UPDATE TO DB


  if ($_POST['btn_action'] == 'Edit') {

    date_default_timezone_set("Asia/Dhaka");
    $create_date = date("Y-m-d H:i:s");

    $name = trim($_POST['vehicle_condition_ok']);

    if(empty($name))
    {
      echo '<div class="alert alert-danger">Please enter your vehicle_condition_ok</div>';
      exit;
    }


    $query = "UPDATE  inspection_history_vehicle_condition_ok  SET user_id =:user_id, vehicle_condition_ok = :vehicle_condition_ok, vehicle_condition_ok_id =:vehicle_condition_ok_id  WHERE vehicle_condition_ok_id = :vehicle_condition_ok_id";
    $statement = $connect->prepare($query);
    $statement->execute(
      array(

//        ':user_id' => $_SESSION['user_id'],

      ':user_id' => 1,
      ':vehicle_condition_ok' => $_POST['vehicle_condition_ok'],
      ':update_date' => $create_date,
      ':vehicle_condition_ok_id' => $_POST['vehicle_condition_ok_id']


      )
    );
    $result = $statement->fetchAll();
    if (isset($result)) {
      echo '<div class="alert alert-success">Vehicle Condition Ok Edited</div>';

    }
  }


///////////////////////////////////////////// DELETE
  if ($_POST['btn_action'] == 'delete') {
    date_default_timezone_set("Asia/Dhaka");
    $create_date = date("Y-m-d H:i:s");
    $vehicle_condition_ok_id = $_POST["vehicle_condition_ok_id"];

    $status = 0;
    if ($_POST["status"] == 0) {
      $status = 1;
    }
    $query = "UPDATE  inspection_history_vehicle_condition_ok  SET  user_id = :user_id , update_date = :update_date ,  delete_status = :delete_status  WHERE vehicle_condition_ok_id = :vehicle_condition_ok_id";
    $statement = $connect->prepare($query);
    $statement->execute(
      array(
        ':user_id' => 1,
        ':update_date' => $create_date,
        ':delete_status' => $status,
        ':vehicle_condition_ok_id' => $_POST['vehicle_condition_ok_id']
      )
    );
    $result = $statement->fetchAll();
    if (isset($result)) {
      echo 'Vehicle Condition Ok Deleted';
    }
  }
}

?>
