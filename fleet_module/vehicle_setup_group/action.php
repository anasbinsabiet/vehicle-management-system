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

    $name = trim($_POST['group']);

    if(empty($name))
    {
      echo '<div class="alert alert-danger">Please enter your group</div>';
      exit;
    }
    $query = "INSERT INTO `vehicle_details_group`(`user_id`, `group`, `create_date`, `delete_status`) VALUES ( :user_id ,  :group ,  :create_date , :delete_status)";

    $statement = $connect->prepare($query);
    $statement->execute(
      array(

//        ':user_id' => $_SESSION['user_id'],

        
      ':user_id' => 1,
      ':group' => $_POST['group'],
      ':create_date' => $create_date,
      ':delete_status' => 0


      )
        

    );

    // if (!$statement->execute()) {
    //   print_r($statement->errorInfo());
    // }


    $result = $statement->fetchAll();
    if (isset($result)) {
      echo '<div class="alert alert-success">Vehicle Group Added</div>';

    }
}
////////////////////////////////////////////////////////// Edit Data Show

  if ($_POST['btn_action'] == 'fetch_single') {
    $query = "SELECT * FROM vehicle_details_group WHERE group_id = :group_id";
    $statement = $connect->prepare($query);
    $statement->execute(
      array(
        ':group_id' => $_POST["group_id"]
      )
    );
    $result = $statement->fetchAll();
//     print_r($result);die();
    foreach ($result as $row) {

      $output['group_id'] = $row['group_id'];
      $output['group'] = $row['group'];

    }
    echo json_encode($output);
  }


////////////////////////////////////////////////////////// UPDATE TO DB


  if ($_POST['btn_action'] == 'Edit') {

    date_default_timezone_set("Asia/Dhaka");
    $create_date = date("Y-m-d H:i:s");
//    $group_id = $_POST["group_id"];

//    echo "<pre>";print_r($_POST);die();
    $name = trim($_POST['group']);

    if(empty($name))
    {
      echo '<div class="alert alert-danger">Please enter your group</div>';
      exit;
    }
    $query = "UPDATE `vehicle_details_group` SET `user_id`=:user_id,`group`=:group,`update_date`=:update_date WHERE `group_id` =:group_id";
    $statement = $connect->prepare($query);
    $statement->execute(
      array(

//        ':user_id' => $_SESSION['user_id'],

        ':user_id' => 1,
        ':group' => $_POST['group'],
        ':update_date' => $create_date,
        ':group_id' => $_POST['group_id']


      )
    );
    if (!$statement->execute()) {
       print_r($statement->errorInfo());
     }
    $result = $statement->fetchAll();
    if (isset($result)) {
      echo '<div class="alert alert-success">Vehicle Group Edited</div>';

    }
  }


///////////////////////////////////////////// DELETE
  if ($_POST['btn_action'] == 'delete') {
    date_default_timezone_set("Asia/Dhaka");
    $create_date = date("Y-m-d H:i:s");
    $group_id = $_POST["group_id"];

    $status = 0;
    if ($_POST["status"] == 0) {
      $status = 1;
    }
    $query = "UPDATE  vehicle_details_group  SET  user_id = :user_id , update_date = :update_date ,  delete_status = :delete_status  WHERE group_id = :group_id";
    $statement = $connect->prepare($query);
    $statement->execute(
      array(
        ':user_id' => 1,
        ':update_date' => $create_date,
        ':delete_status' => $status,
        ':group_id' => $_POST['group_id']
      )
    );

    $result = $statement->fetchAll();
    if (isset($result)) {
      echo 'Vehicle Group Deleted';
    }
  }
}

?>
