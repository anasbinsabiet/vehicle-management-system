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

    $name = trim($_POST['frequency']);

    if(empty($name))
    {
      echo '<div class="alert alert-danger">Please enter your frequency</div>';
      exit;
    }


    $query = "INSERT INTO `vehicle_details_frequency`(`user_id`, `frequency`, `create_date`, `delete_status`) VALUES ( :user_id ,  :frequency ,  :create_date , :delete_status)";

    $statement = $connect->prepare($query);
    $statement->execute(
      array(

//        ':user_id' => $_SESSION['user_id'],

        
      ':user_id' => 1,
      ':frequency' => $_POST['frequency'],
      ':create_date' => $create_date,
      ':delete_status' => 0


      )
        

    );

    // if (!$statement->execute()) {
    //   print_r($statement->errorInfo());
    // }


    $result = $statement->fetchAll();
    if (isset($result)) {
      echo '<div class="alert alert-success">Vehicle Frequency Added</div>';

    }
}
////////////////////////////////////////////////////////// Edit Data Show

  if ($_POST['btn_action'] == 'fetch_single') {
    $query = "SELECT * FROM vehicle_details_frequency WHERE frequency_id = :frequency_id";
    $statement = $connect->prepare($query);
    $statement->execute(
      array(
        ':frequency_id' => $_POST["frequency_id"]
      )
    );
    $result = $statement->fetchAll();
//     print_r($result);die();
    foreach ($result as $row) {

      $output['frequency_id'] = $row['frequency_id'];
      $output['frequency'] = $row['frequency'];

    }
    echo json_encode($output);
  }


////////////////////////////////////////////////////////// UPDATE TO DB


  if ($_POST['btn_action'] == 'Edit') {

    date_default_timezone_set("Asia/Dhaka");
    $create_date = date("Y-m-d H:i:s");


    $name = trim($_POST['frequency']);

    if(empty($name))
    {
      echo '<div class="alert alert-danger">Please enter your frequency</div>';
      exit;
    }


    $query = "UPDATE  vehicle_details_frequency  SET user_id =:user_id, frequency = :frequency, frequency_id =:frequency_id  WHERE frequency_id = :frequency_id";
    $statement = $connect->prepare($query);
    $statement->execute(
      array(

//        ':user_id' => $_SESSION['user_id'],

      ':user_id' => 1,
      ':frequency' => $_POST['frequency'],
      ':update_date' => $create_date,
      ':frequency_id' => $_POST['frequency_id']


      )
    );
    $result = $statement->fetchAll();
    if (isset($result)) {
      echo '<div class="alert alert-success">Vehicle Frequency Edited</div>';

    }
  }


///////////////////////////////////////////// DELETE
  if ($_POST['btn_action'] == 'delete') {
    date_default_timezone_set("Asia/Dhaka");
    $create_date = date("Y-m-d H:i:s");
    $frequency_id = $_POST["frequency_id"];

    $status = 0;
    if ($_POST["status"] == 0) {
      $status = 1;
    }
    $query = "UPDATE  vehicle_details_frequency  SET  user_id = :user_id , update_date = :update_date ,  delete_status = :delete_status  WHERE frequency_id = :frequency_id";
    $statement = $connect->prepare($query);
    $statement->execute(
      array(
        ':user_id' => 1,
        ':update_date' => $create_date,
        ':delete_status' => $status,
        ':frequency_id' => $_POST['frequency_id']
      )
    );
    $result = $statement->fetchAll();
    if (isset($result)) {
      echo 'Vehicle Frequency Deleted';
    }
  }
}

?>
