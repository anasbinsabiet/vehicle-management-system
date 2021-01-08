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

    $name = trim($_POST['country']);

    if(empty($name))
    {
      echo '<div class="alert alert-danger">Please enter your country</div>';
      exit;
    }


    $query = "INSERT INTO `vendors_country`(`user_id`, `country`, `create_date`, `delete_status`) VALUES ( :user_id ,  :country ,  :create_date , :delete_status)";

    $statement = $connect->prepare($query);
    $statement->execute(
      array(

//        ':user_id' => $_SESSION['user_id'],

        
      ':user_id' => 1,
      ':country' => $_POST['country'],
      ':create_date' => $create_date,
      ':delete_status' => 0


      )
        

    );

    // if (!$statement->execute()) {
    //   print_r($statement->errorInfo());
    // }


    $result = $statement->fetchAll();
    if (isset($result)) {
      echo '<div class="alert alert-success">Users Country Added</div>';

    }
}
////////////////////////////////////////////////////////// Edit Data Show

  if ($_POST['btn_action'] == 'fetch_single') {
    $query = "SELECT * FROM vendors_country WHERE country_id = :country_id";
    $statement = $connect->prepare($query);
    $statement->execute(
      array(
        ':country_id' => $_POST["country_id"]
      )
    );
    $result = $statement->fetchAll();
//     print_r($result);die();
    foreach ($result as $row) {

      $output['country_id'] = $row['country_id'];
      $output['country'] = $row['country'];

    }
    echo json_encode($output);
  }


////////////////////////////////////////////////////////// UPDATE TO DB


  if ($_POST['btn_action'] == 'Edit') {

    date_default_timezone_set("Asia/Dhaka");
    $create_date = date("Y-m-d H:i:s");

    $name = trim($_POST['country']);

    if(empty($name))
    {
      echo '<div class="alert alert-danger">Please enter your country</div>';
      exit;
    }

    $query = "UPDATE  vendors_country  SET user_id =:user_id, country = :country, country_id =:country_id  WHERE country_id = :country_id";
    $statement = $connect->prepare($query);
    $statement->execute(
      array(

//        ':user_id' => $_SESSION['user_id'],

      ':user_id' => 1,
      ':country' => $_POST['country'],
      ':update_date' => $create_date,
      ':country_id' => $_POST['country_id']


      )
    );
    $result = $statement->fetchAll();
    if (isset($result)) {
      echo '<div class="alert alert-success">Users Country Edited</div>';

    }
  }


///////////////////////////////////////////// DELETE
  if ($_POST['btn_action'] == 'delete') {
    date_default_timezone_set("Asia/Dhaka");
    $create_date = date("Y-m-d H:i:s");
    $country_id = $_POST["country_id"];

    $status = 0;
    if ($_POST["status"] == 0) {
      $status = 1;
    }
    $query = "UPDATE  vendors_country  SET  user_id = :user_id , update_date = :update_date ,  delete_status = :delete_status  WHERE country_id = :country_id";
    $statement = $connect->prepare($query);
    $statement->execute(
      array(
        ':user_id' => 1,
        ':update_date' => $create_date,
        ':delete_status' => $status,
        ':country_id' => $_POST['country_id']
      )
    );
    $result = $statement->fetchAll();
    if (isset($result)) {
      echo 'Users Country Deleted';
    }
  }
}

?>
