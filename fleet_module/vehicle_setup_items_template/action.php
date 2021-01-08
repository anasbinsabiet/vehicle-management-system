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

    $name = trim($_POST['items_template']);

    if(empty($name))
    {
      echo '<div class="alert alert-danger">Please enter your items_template</div>';
      exit;
    }

    $query = "INSERT INTO `inspection_forms_items_template`(`user_id`, `items_template`, `create_date`, `delete_status`) VALUES ( :user_id ,  :items_template ,  :create_date , :delete_status)";

    $statement = $connect->prepare($query);
    $statement->execute(
      array(

//        ':user_id' => $_SESSION['user_id'],

        
      ':user_id' => 1,
      ':items_template' => $_POST['items_template'],
      ':create_date' => $create_date,
      ':delete_status' => 0


      )
        

    );

    // if (!$statement->execute()) {
    //   print_r($statement->errorInfo());
    // }


    $result = $statement->fetchAll();
    if (isset($result)) {
      echo '<div class="alert alert-success">Items Template Added</div>';

    }
}
////////////////////////////////////////////////////////// Edit Data Show

  if ($_POST['btn_action'] == 'fetch_single') {
    $query = "SELECT * FROM inspection_forms_items_template WHERE items_template_id = :items_template_id";
    $statement = $connect->prepare($query);
    $statement->execute(
      array(
        ':items_template_id' => $_POST["items_template_id"]
      )
    );
    $result = $statement->fetchAll();
//     print_r($result);die();
    foreach ($result as $row) {

      $output['items_template_id'] = $row['items_template_id'];
      $output['items_template'] = $row['items_template'];

    }
    echo json_encode($output);
  }


////////////////////////////////////////////////////////// UPDATE TO DB


  if ($_POST['btn_action'] == 'Edit') {

    date_default_timezone_set("Asia/Dhaka");
    $create_date = date("Y-m-d H:i:s");

    $name = trim($_POST['items_template']);

    if(empty($name))
    {
      echo '<div class="alert alert-danger">Please enter your items_template</div>';
      exit;
    }


    $query = "UPDATE  inspection_forms_items_template  SET user_id =:user_id, items_template = :items_template, items_template_id =:items_template_id  WHERE items_template_id = :items_template_id";
    $statement = $connect->prepare($query);
    $statement->execute(
      array(

//        ':user_id' => $_SESSION['user_id'],

      ':user_id' => 1,
      ':items_template' => $_POST['items_template'],
      ':update_date' => $create_date,
      ':items_template_id' => $_POST['items_template_id']


      )
    );
    $result = $statement->fetchAll();
    if (isset($result)) {
      echo '<div class="alert alert-success">Items Template Edited</div>';

    }
  }


///////////////////////////////////////////// DELETE
  if ($_POST['btn_action'] == 'delete') {
    date_default_timezone_set("Asia/Dhaka");
    $create_date = date("Y-m-d H:i:s");
    $items_template_id = $_POST["items_template_id"];

    $status = 0;
    if ($_POST["status"] == 0) {
      $status = 1;
    }
    $query = "UPDATE  inspection_forms_items_template  SET  user_id = :user_id , update_date = :update_date ,  delete_status = :delete_status  WHERE items_template_id = :items_template_id";
    $statement = $connect->prepare($query);
    $statement->execute(
      array(
        ':user_id' => 1,
        ':update_date' => $create_date,
        ':delete_status' => $status,
        ':items_template_id' => $_POST['items_template_id']
      )
    );
    $result = $statement->fetchAll();
    if (isset($result)) {
      echo 'Items Template Deleted';
    }
  }
}

?>
