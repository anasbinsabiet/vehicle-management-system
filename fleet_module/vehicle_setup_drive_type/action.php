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


    $name = trim($_POST['drive_type']);

    if(empty($name))
    {
      echo '<div class="alert alert-danger">Please enter your drive_type</div>';
      exit;
    }


    $query = "INSERT INTO `vehicle_details_drive_type`(`user_id`, `drive_type`, `create_date`, `delete_status`) VALUES ( :user_id ,  :drive_type ,  :create_date , :delete_status)";

    $statement = $connect->prepare($query);
    $statement->execute(
      array(

//        ':user_id' => $_SESSION['user_id'],

        
      ':user_id' => 1,
      ':drive_type' => $_POST['drive_type'],
      ':create_date' => $create_date,
      ':delete_status' => 0


      )
        

    );

    // if (!$statement->execute()) {
    //   print_r($statement->errorInfo());
    // }


    $result = $statement->fetchAll();
    if (isset($result)) {
      echo '<div class="alert alert-success">Vehicle Drive Type Added</div>';

    }
}
////////////////////////////////////////////////////////// Edit Data Show

  if ($_POST['btn_action'] == 'fetch_single') {
    $query = "SELECT * FROM vehicle_details_drive_type WHERE drive_type_id = :drive_type_id";
    $statement = $connect->prepare($query);
    $statement->execute(
      array(
        ':drive_type_id' => $_POST["drive_type_id"]
      )
    );
    $result = $statement->fetchAll();
//     print_r($result);die();
    foreach ($result as $row) {

      $output['drive_type_id'] = $row['drive_type_id'];
      $output['drive_type'] = $row['drive_type'];

    }
    echo json_encode($output);
  }


////////////////////////////////////////////////////////// UPDATE TO DB


  if ($_POST['btn_action'] == 'Edit') {

    date_default_timezone_set("Asia/Dhaka");
    $create_date = date("Y-m-d H:i:s");

    $name = trim($_POST['drive_type']);

    if(empty($name))
    {
      echo '<div class="alert alert-danger">Please enter your drive_type</div>';
      exit;
    }


    $query = "UPDATE  vehicle_details_drive_type  SET user_id =:user_id, drive_type = :drive_type, drive_type_id =:drive_type_id  WHERE drive_type_id = :drive_type_id";
    $statement = $connect->prepare($query);
    $statement->execute(
      array(

//        ':user_id' => $_SESSION['user_id'],

      ':user_id' => 1,
      ':drive_type' => $_POST['drive_type'],
      ':update_date' => $create_date,
      ':drive_type_id' => $_POST['drive_type_id']


      )
    );
    $result = $statement->fetchAll();
    if (isset($result)) {
      echo '<div class="alert alert-success">Vehicle Drive Type Edited</div>';

    }
  }


///////////////////////////////////////////// DELETE
  if ($_POST['btn_action'] == 'delete') {
    date_default_timezone_set("Asia/Dhaka");
    $create_date = date("Y-m-d H:i:s");
    $drive_type_id = $_POST["drive_type_id"];

    $status = 0;
    if ($_POST["status"] == 0) {
      $status = 1;
    }
    $query = "UPDATE  vehicle_details_drive_type  SET  user_id = :user_id , update_date = :update_date ,  delete_status = :delete_status  WHERE drive_type_id = :drive_type_id";
    $statement = $connect->prepare($query);
    $statement->execute(
      array(
        ':user_id' => 1,
        ':update_date' => $create_date,
        ':delete_status' => $status,
        ':drive_type_id' => $_POST['drive_type_id']
      )
    );
    $result = $statement->fetchAll();
    if (isset($result)) {
      echo 'Vehicle Drive Type Deleted';
    }
  }
}

?>
