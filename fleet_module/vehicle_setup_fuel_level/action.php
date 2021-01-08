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

    $name = trim($_POST['fuel_level']);

    if(empty($name))
    {
      echo '<div class="alert alert-danger">Please enter your fuel_level</div>';
      exit;
    }

    $query = "INSERT INTO `inspection_history_fuel_level`(`user_id`, `fuel_level`, `create_date`, `delete_status`) VALUES ( :user_id ,  :fuel_level ,  :create_date , :delete_status)";

    $statement = $connect->prepare($query);
    $statement->execute(
      array(

//        ':user_id' => $_SESSION['user_id'],

        
      ':user_id' => 1,
      ':fuel_level' => $_POST['fuel_level'],
      ':create_date' => $create_date,
      ':delete_status' => 0


      )
        

    );

    // if (!$statement->execute()) {
    //   print_r($statement->errorInfo());
    // }


    $result = $statement->fetchAll();
    if (isset($result)) {

      echo '<div class="alert alert-success">Fuel Level Added</div>';

    }
}
////////////////////////////////////////////////////////// Edit Data Show

  if ($_POST['btn_action'] == 'fetch_single') {
    $query = "SELECT * FROM inspection_history_fuel_level WHERE fuel_level_id = :fuel_level_id";
    $statement = $connect->prepare($query);
    $statement->execute(
      array(
        ':fuel_level_id' => $_POST["fuel_level_id"]
      )
    );
    $result = $statement->fetchAll();
//     print_r($result);die();
    foreach ($result as $row) {

      $output['fuel_level_id'] = $row['fuel_level_id'];
      $output['fuel_level'] = $row['fuel_level'];

    }
    echo json_encode($output);
  }


////////////////////////////////////////////////////////// UPDATE TO DB


  if ($_POST['btn_action'] == 'Edit') {

    date_default_timezone_set("Asia/Dhaka");
    $create_date = date("Y-m-d H:i:s");

    $name = trim($_POST['fuel_level']);

    if(empty($name))
    {
      echo '<div class="alert alert-danger">Please enter your fuel_level</div>';
      exit;
    }

    $query = "UPDATE  inspection_history_fuel_level  SET user_id =:user_id, fuel_level = :fuel_level, fuel_level_id =:fuel_level_id  WHERE fuel_level_id = :fuel_level_id";
    $statement = $connect->prepare($query);
    $statement->execute(
      array(

//        ':user_id' => $_SESSION['user_id'],

      ':user_id' => 1,
      ':fuel_level' => $_POST['fuel_level'],
      ':update_date' => $create_date,
      ':fuel_level_id' => $_POST['fuel_level_id']


      )
    );
    $result = $statement->fetchAll();
    if (isset($result)) {
      echo '<div class="alert alert-success">Fuel Level Edited</div>';

    }
  }


///////////////////////////////////////////// DELETE
  if ($_POST['btn_action'] == 'delete') {
    date_default_timezone_set("Asia/Dhaka");
    $create_date = date("Y-m-d H:i:s");
    $fuel_level_id = $_POST["fuel_level_id"];

    $status = 0;
    if ($_POST["status"] == 0) {
      $status = 1;
    }
    $query = "UPDATE  inspection_history_fuel_level  SET  user_id = :user_id , update_date = :update_date ,  delete_status = :delete_status  WHERE fuel_level_id = :fuel_level_id";
    $statement = $connect->prepare($query);
    $statement->execute(
      array(
        ':user_id' => 1,
        ':update_date' => $create_date,
        ':delete_status' => $status,
        ':fuel_level_id' => $_POST['fuel_level_id']
      )
    );
    $result = $statement->fetchAll();
    if (isset($result)) {
      echo 'Fuel Level Deleted';
    }
  }
}

?>
