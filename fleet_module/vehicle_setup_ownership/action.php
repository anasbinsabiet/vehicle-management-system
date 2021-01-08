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

    $name = trim($_POST['ownership']);

    if(empty($name))
    {
      echo '<div class="alert alert-danger">Please enter your ownership</div>';
      exit;
    }


    $query = "INSERT INTO `vehicle_details_ownership`(`user_id`, `ownership`, `create_date`, `delete_status`) VALUES ( :user_id ,  :ownership ,  :create_date , :delete_status)";

    $statement = $connect->prepare($query);
    $statement->execute(
      array(

//        ':user_id' => $_SESSION['user_id'],

        
      ':user_id' => 1,
      ':ownership' => $_POST['ownership'],
      ':create_date' => $create_date,
      ':delete_status' => 0


      )
        

    );

    // if (!$statement->execute()) {
    //   print_r($statement->errorInfo());
    // }


    $result = $statement->fetchAll();
    if (isset($result)) {
      echo '<div class="alert alert-success">Vehicle Ownership Added</div>';

    }
}
////////////////////////////////////////////////////////// Edit Data Show

  if ($_POST['btn_action'] == 'fetch_single') {
    $query = "SELECT * FROM vehicle_details_ownership WHERE ownership_id = :ownership_id";
    $statement = $connect->prepare($query);
    $statement->execute(
      array(
        ':ownership_id' => $_POST["ownership_id"]
      )
    );
    $result = $statement->fetchAll();
//     print_r($result);die();
    foreach ($result as $row) {

      $output['ownership_id'] = $row['ownership_id'];
      $output['ownership'] = $row['ownership'];

    }
    echo json_encode($output);
  }


////////////////////////////////////////////////////////// UPDATE TO DB


  if ($_POST['btn_action'] == 'Edit') {

    date_default_timezone_set("Asia/Dhaka");
    $create_date = date("Y-m-d H:i:s");

    $name = trim($_POST['ownership']);

    if(empty($name))
    {
      echo '<div class="alert alert-danger">Please enter your ownership</div>';
      exit;
    }


    $query = "UPDATE  vehicle_details_ownership  SET user_id =:user_id, ownership = :ownership, ownership_id =:ownership_id  WHERE ownership_id = :ownership_id";
    $statement = $connect->prepare($query);
    $statement->execute(
      array(

//        ':user_id' => $_SESSION['user_id'],

      ':user_id' => 1,
      ':ownership' => $_POST['ownership'],
      ':update_date' => $create_date,
      ':ownership_id' => $_POST['ownership_id']


      )
    );
    $result = $statement->fetchAll();
    if (isset($result)) {
      echo '<div class="alert alert-success">Vehicle Ownership Edited</div>';

    }
  }


///////////////////////////////////////////// DELETE
  if ($_POST['btn_action'] == 'delete') {
    date_default_timezone_set("Asia/Dhaka");
    $create_date = date("Y-m-d H:i:s");
    $ownership_id = $_POST["ownership_id"];

    $status = 0;
    if ($_POST["status"] == 0) {
      $status = 1;
    }
    $query = "UPDATE  vehicle_details_ownership  SET  user_id = :user_id , update_date = :update_date ,  delete_status = :delete_status  WHERE ownership_id = :ownership_id";
    $statement = $connect->prepare($query);
    $statement->execute(
      array(
        ':user_id' => 1,
        ':update_date' => $create_date,
        ':delete_status' => $status,
        ':ownership_id' => $_POST['ownership_id']
      )
    );
    $result = $statement->fetchAll();
    if (isset($result)) {
      echo 'Vehicle Ownership Deleted';
    }
  }
}

?>
