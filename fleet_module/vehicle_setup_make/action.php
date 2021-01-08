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

    $name = trim($_POST['make']);

    if(empty($name))
    {
      echo '<div class="alert alert-danger">Please enter your make</div>';
      exit;
    }

    $query = "INSERT INTO `vehicle_details_make`(`user_id`, `make`, `create_date`, `delete_status`) VALUES ( :user_id ,  :make ,  :create_date , :delete_status)";

    $statement = $connect->prepare($query);
    $statement->execute(
      array(

//        ':user_id' => $_SESSION['user_id'],

        
      ':user_id' => 1,
      ':make' => $_POST['make'],
      ':create_date' => $create_date,
      ':delete_status' => 0


      )
        

    );

    // if (!$statement->execute()) {
    //   print_r($statement->errorInfo());
    // }


    $result = $statement->fetchAll();
    if (isset($result)) {
      echo '<div class="alert alert-success">Make Added</div>';

    }
}
////////////////////////////////////////////////////////// Edit Data Show

  if ($_POST['btn_action'] == 'fetch_single') {
    $query = "SELECT * FROM vehicle_details_make WHERE make_id = :make_id";
    $statement = $connect->prepare($query);
    $statement->execute(
      array(
        ':make_id' => $_POST["make_id"]
      )
    );
    $result = $statement->fetchAll();
//     print_r($result);die();
    foreach ($result as $row) {

      $output['make_id'] = $row['make_id'];
      $output['make'] = $row['make'];

    }
    echo json_encode($output);
  }


////////////////////////////////////////////////////////// UPDATE TO DB


  if ($_POST['btn_action'] == 'Edit') {

    date_default_timezone_set("Asia/Dhaka");
    $create_date = date("Y-m-d H:i:s");

    $name = trim($_POST['make']);

    if(empty($name))
    {
      echo '<div class="alert alert-danger">Please enter your make</div>';
      exit;
    }

    $query = "UPDATE  vehicle_details_make  SET user_id =:user_id, make = :make, make_id =:make_id  WHERE make_id = :make_id";
    $statement = $connect->prepare($query);
    $statement->execute(
      array(

//        ':user_id' => $_SESSION['user_id'],

      ':user_id' => 1,
      ':make' => $_POST['make'],
      ':update_date' => $create_date,
      ':make_id' => $_POST['make_id']


      )
    );
    $result = $statement->fetchAll();
    if (isset($result)) {
      echo '<div class="alert alert-success">Vehicle details make Edited</div>';

    }
  }


///////////////////////////////////////////// DELETE
  if ($_POST['btn_action'] == 'delete') {
    date_default_timezone_set("Asia/Dhaka");
    $create_date = date("Y-m-d H:i:s");
    $make_id = $_POST["make_id"];

    $status = 0;
    if ($_POST["status"] == 0) {
      $status = 1;
    }
    $query = "UPDATE  vehicle_details_make  SET  user_id = :user_id , update_date = :update_date ,  delete_status = :delete_status  WHERE make_id = :make_id";
    $statement = $connect->prepare($query);
    $statement->execute(
      array(
        ':user_id' => 1,
        ':update_date' => $create_date,
        ':delete_status' => $status,
        ':make_id' => $_POST['make_id']
      )
    );
    $result = $statement->fetchAll();
    if (isset($result)) {
      echo 'Make Deleted';
    }
  }
}

?>
