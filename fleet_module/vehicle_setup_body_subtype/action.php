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

    $name = trim($_POST['body_subtype']);

    if(empty($name))
    {
      echo '<div class="alert alert-danger">Please enter your body_subtype</div>';
      exit;
    }


    $query = "INSERT INTO `vehicle_details_body_subtype`(`user_id`, `body_subtype`, `create_date`, `delete_status`) VALUES ( :user_id ,  :body_subtype ,  :create_date , :delete_status)";

    $statement = $connect->prepare($query);
    $statement->execute(
      array(

//        ':user_id' => $_SESSION['user_id'],

        
      ':user_id' => 1,
      ':body_subtype' => $_POST['body_subtype'],
      ':create_date' => $create_date,
      ':delete_status' => 0


      )
        

    );

    // if (!$statement->execute()) {
    //   print_r($statement->errorInfo());
    // }


    $result = $statement->fetchAll();
    if (isset($result)) {
      echo '<div class="alert alert-success">Vehicle Body Subtype Added</div>';

    }
}
////////////////////////////////////////////////////////// Edit Data Show

  if ($_POST['btn_action'] == 'fetch_single') {
    $query = "SELECT * FROM vehicle_details_body_subtype WHERE body_subtype_id = :body_subtype_id";
    $statement = $connect->prepare($query);
    $statement->execute(
      array(
        ':body_subtype_id' => $_POST["body_subtype_id"]
      )
    );
    $result = $statement->fetchAll();
//     print_r($result);die();
    foreach ($result as $row) {

      $output['body_subtype_id'] = $row['body_subtype_id'];
      $output['body_subtype'] = $row['body_subtype'];

    }
    echo json_encode($output);
  }


////////////////////////////////////////////////////////// UPDATE TO DB


  if ($_POST['btn_action'] == 'Edit') {

    date_default_timezone_set("Asia/Dhaka");
    $create_date = date("Y-m-d H:i:s");

    $name = trim($_POST['body_subtype']);

    if(empty($name))
    {
      echo '<div class="alert alert-danger">Please enter your body_subtype</div>';
      exit;
    }

    $query = "UPDATE  vehicle_details_body_subtype  SET user_id =:user_id, body_subtype = :body_subtype, body_subtype_id =:body_subtype_id  WHERE body_subtype_id = :body_subtype_id";
    $statement = $connect->prepare($query);
    $statement->execute(
      array(

//        ':user_id' => $_SESSION['user_id'],

      ':user_id' => 1,
      ':body_subtype' => $_POST['body_subtype'],
      ':update_date' => $create_date,
      ':body_subtype_id' => $_POST['body_subtype_id']


      )
    );
    $result = $statement->fetchAll();
    if (isset($result)) {
      echo '<div class="alert alert-success">Vehicle Body Subtype Edited</div>';

    }
  }


///////////////////////////////////////////// DELETE
  if ($_POST['btn_action'] == 'delete') {
    date_default_timezone_set("Asia/Dhaka");
    $create_date = date("Y-m-d H:i:s");
    $body_subtype_id = $_POST["body_subtype_id"];

    $status = 0;
    if ($_POST["status"] == 0) {
      $status = 1;
    }
    $query = "UPDATE  vehicle_details_body_subtype  SET  user_id = :user_id , update_date = :update_date ,  delete_status = :delete_status  WHERE body_subtype_id = :body_subtype_id";
    $statement = $connect->prepare($query);
    $statement->execute(
      array(
        ':user_id' => 1,
        ':update_date' => $create_date,
        ':delete_status' => $status,
        ':body_subtype_id' => $_POST['body_subtype_id']
      )
    );
    $result = $statement->fetchAll();
    if (isset($result)) {
      echo 'Vehicle Body Subtype Deleted';
    }
  }
}

?>
