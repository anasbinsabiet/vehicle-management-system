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

    $name = trim($_POST['brake_system']);

    if(empty($name))
    {
      echo '<div class="alert alert-danger">Please enter your brake_system</div>';
      exit;
    }


    $query = "INSERT INTO `vehicle_details_brake_system`(`user_id`, `brake_system`, `create_date`, `delete_status`) VALUES ( :user_id ,  :brake_system ,  :create_date , :delete_status)";

    $statement = $connect->prepare($query);
    $statement->execute(
      array(

//        ':user_id' => $_SESSION['user_id'],

        
      ':user_id' => 1,
      ':brake_system' => $_POST['brake_system'],
      ':create_date' => $create_date,
      ':delete_status' => 0


      )
        

    );

    // if (!$statement->execute()) {
    //   print_r($statement->errorInfo());
    // }


    $result = $statement->fetchAll();
    if (isset($result)) {
      echo '<div class="alert alert-success">Vehicle Brake System Added</div>';

    }
}
////////////////////////////////////////////////////////// Edit Data Show

  if ($_POST['btn_action'] == 'fetch_single') {
    $query = "SELECT * FROM vehicle_details_brake_system WHERE brake_system_id = :brake_system_id";
    $statement = $connect->prepare($query);
    $statement->execute(
      array(
        ':brake_system_id' => $_POST["brake_system_id"]
      )
    );
    $result = $statement->fetchAll();
//     print_r($result);die();
    foreach ($result as $row) {

      $output['brake_system_id'] = $row['brake_system_id'];
      $output['brake_system'] = $row['brake_system'];

    }
    echo json_encode($output);
  }


////////////////////////////////////////////////////////// UPDATE TO DB


  if ($_POST['btn_action'] == 'Edit') {

    date_default_timezone_set("Asia/Dhaka");
    $create_date = date("Y-m-d H:i:s");

    $name = trim($_POST['brake_system']);

    if(empty($name))
    {
      echo '<div class="alert alert-danger">Please enter your brake_system</div>';
      exit;
    }


    $query = "UPDATE  vehicle_details_brake_system  SET user_id =:user_id, brake_system = :brake_system, brake_system_id =:brake_system_id  WHERE brake_system_id = :brake_system_id";
    $statement = $connect->prepare($query);
    $statement->execute(
      array(

//        ':user_id' => $_SESSION['user_id'],

      ':user_id' => 1,
      ':brake_system' => $_POST['brake_system'],
      ':update_date' => $create_date,
      ':brake_system_id' => $_POST['brake_system_id']


      )
    );
    $result = $statement->fetchAll();
    if (isset($result)) {
      echo '<div class="alert alert-success">Vehicle Brake System Edited</div>';

    }
  }


///////////////////////////////////////////// DELETE
  if ($_POST['btn_action'] == 'delete') {
    date_default_timezone_set("Asia/Dhaka");
    $create_date = date("Y-m-d H:i:s");
    $brake_system_id = $_POST["brake_system_id"];

    $status = 0;
    if ($_POST["status"] == 0) {
      $status = 1;
    }
    $query = "UPDATE  vehicle_details_brake_system  SET  user_id = :user_id , update_date = :update_date ,  delete_status = :delete_status  WHERE brake_system_id = :brake_system_id";
    $statement = $connect->prepare($query);
    $statement->execute(
      array(
        ':user_id' => 1,
        ':update_date' => $create_date,
        ':delete_status' => $status,
        ':brake_system_id' => $_POST['brake_system_id']
      )
    );
    $result = $statement->fetchAll();
    if (isset($result)) {
      echo 'Vehicle Brake System Deleted';
    }
  }
}

?>
