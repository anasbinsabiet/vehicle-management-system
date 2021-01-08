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
    $name = trim($_POST['labels']);

    if(empty($name))
    {
      echo '<div class="alert alert-danger">Please enter your labels</div>';
      exit;
    }
    $query = "INSERT INTO `vendors_labels`(`user_id`, `labels`, `create_date`, `delete_status`) VALUES ( :user_id ,  :labels ,  :create_date , :delete_status)";

    $statement = $connect->prepare($query);
    $statement->execute(
      array(

//        ':user_id' => $_SESSION['user_id'],

        
      ':user_id' => 1,
      ':labels' => $_POST['labels'],
      ':create_date' => $create_date,
      ':delete_status' => 0


      )
        

    );

    // if (!$statement->execute()) {
    //   print_r($statement->errorInfo());
    // }


    $result = $statement->fetchAll();
    if (isset($result)) {
    echo '<div class="alert alert-success">Vendors Label Added</div>';

    }
}
////////////////////////////////////////////////////////// Edit Data Show

  if ($_POST['btn_action'] == 'fetch_single') {
    $query = "SELECT * FROM vendors_labels WHERE labels_id = :labels_id";
    $statement = $connect->prepare($query);
    $statement->execute(
      array(
        ':labels_id' => $_POST["labels_id"]
      )
    );
    $result = $statement->fetchAll();
//     print_r($result);die();
    foreach ($result as $row) {

      $output['labels_id'] = $row['labels_id'];
      $output['labels'] = $row['labels'];

    }
    echo json_encode($output);
  }


////////////////////////////////////////////////////////// UPDATE TO DB


  if ($_POST['btn_action'] == 'Edit') {

    date_default_timezone_set("Asia/Dhaka");
    $create_date = date("Y-m-d H:i:s");

    $name = trim($_POST['labels']);

    if(empty($name))
    {
      echo '<div class="alert alert-danger">Please enter your labels</div>';
      exit;
    }

    $query = "UPDATE  vendors_labels  SET user_id =:user_id, labels = :labels, labels_id =:labels_id  WHERE labels_id = :labels_id";
    $statement = $connect->prepare($query);
    $statement->execute(
      array(

//        ':user_id' => $_SESSION['user_id'],

      ':user_id' => 1,
      ':labels' => $_POST['labels'],
      ':update_date' => $create_date,
      ':labels_id' => $_POST['labels_id']


      )
    );
    $result = $statement->fetchAll();
    if (isset($result)) {
      echo '<div class="alert alert-success">Vendors Label Edited</div>';

    }
  }


///////////////////////////////////////////// DELETE
  if ($_POST['btn_action'] == 'delete') {
    date_default_timezone_set("Asia/Dhaka");
    $create_date = date("Y-m-d H:i:s");
    $labels_id = $_POST["labels_id"];

    $status = 0;
    if ($_POST["status"] == 0) {
      $status = 1;
    }
    $query = "UPDATE  vendors_labels  SET  user_id = :user_id , update_date = :update_date ,  delete_status = :delete_status  WHERE labels_id = :labels_id";
    $statement = $connect->prepare($query);
    $statement->execute(
      array(
        ':user_id' => 1,
        ':update_date' => $create_date,
        ':delete_status' => $status,
        ':labels_id' => $_POST['labels_id']
      )
    );
    $result = $statement->fetchAll();
    if (isset($result)) {
      echo 'Vendors Label Deleted';
    }
  }
}

?>
