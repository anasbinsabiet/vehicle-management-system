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

    $name = trim($_POST['color']);

    if(empty($name))
    {
      echo '<div class="alert alert-danger">Please enter your color</div>';
      exit;
    }


    $query = "INSERT INTO `inspection_forms_color`(`user_id`, `color`, `create_date`, `delete_status`) VALUES ( :user_id ,  :color ,  :create_date , :delete_status)";

    $statement = $connect->prepare($query);
    $statement->execute(
      array(

//        ':user_id' => $_SESSION['user_id'],

        
      ':user_id' => 1,
      ':color' => $_POST['color'],
      ':create_date' => $create_date,
      ':delete_status' => 0


      )
        

    );

    // if (!$statement->execute()) {
    //   print_r($statement->errorInfo());
    // }


    $result = $statement->fetchAll();
    if (isset($result)) {
      echo '<div class="alert alert-success">Color Added</div>';

    }
}
////////////////////////////////////////////////////////// Edit Data Show

  if ($_POST['btn_action'] == 'fetch_single') {
    $query = "SELECT * FROM inspection_forms_color WHERE color_id = :color_id";
    $statement = $connect->prepare($query);
    $statement->execute(
      array(
        ':color_id' => $_POST["color_id"]
      )
    );
    $result = $statement->fetchAll();
//     print_r($result);die();
    foreach ($result as $row) {

      $output['color_id'] = $row['color_id'];
      $output['color'] = $row['color'];

    }
    echo json_encode($output);
  }


////////////////////////////////////////////////////////// UPDATE TO DB


  if ($_POST['btn_action'] == 'Edit') {

    date_default_timezone_set("Asia/Dhaka");
    $create_date = date("Y-m-d H:i:s");

    $name = trim($_POST['color']);

    if(empty($name))
    {
      echo '<div class="alert alert-danger">Please enter your color</div>';
      exit;
    }


    $query = "UPDATE  inspection_forms_color  SET user_id =:user_id, color = :color, color_id =:color_id  WHERE color_id = :color_id";
    $statement = $connect->prepare($query);
    $statement->execute(
      array(

//        ':user_id' => $_SESSION['user_id'],

      ':user_id' => 1,
      ':color' => $_POST['color'],
      ':update_date' => $create_date,
      ':color_id' => $_POST['color_id']


      )
    );
    $result = $statement->fetchAll();
    if (isset($result)) {
      echo '<div class="alert alert-success">Color Edited</div>';

    }
  }


///////////////////////////////////////////// DELETE
  if ($_POST['btn_action'] == 'delete') {
    date_default_timezone_set("Asia/Dhaka");
    $create_date = date("Y-m-d H:i:s");
    $color_id = $_POST["color_id"];

    $status = 0;
    if ($_POST["status"] == 0) {
      $status = 1;
    }
    $query = "UPDATE  inspection_forms_color  SET  user_id = :user_id , update_date = :update_date ,  delete_status = :delete_status  WHERE color_id = :color_id";
    $statement = $connect->prepare($query);
    $statement->execute(
      array(
        ':user_id' => 1,
        ':update_date' => $create_date,
        ':delete_status' => $status,
        ':color_id' => $_POST['color_id']
      )
    );
    $result = $statement->fetchAll();
    if (isset($result)) {
      echo 'Color Deleted';
    }
  }
}

?>
