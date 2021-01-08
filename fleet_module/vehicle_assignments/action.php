<?php
$connect = "";

include('../database_connection.php');
if (!isset($_SESSION['user_name'])) {
    header("Location: ../logout.php");
}

//////////////////////////////////////////////////////////////// ADD TO DB vehicle assignments

if (isset($_POST['btn_action'])) {
  if ($_POST['btn_action'] == 'Add') {
    // echo "<pre>";print_r($_POST);
    date_default_timezone_set("Asia/Dhaka");
    $create_date = date("Y-m-d H:i:s");

    $query = "INSERT INTO  vehicle_assignments ( user_id ,  vehicle ,  operator ,  start_date_time ,  start_time ,  end_date_time ,  end_time ,  comment ,  create_date , delete_status ) VALUES ( :user_id ,  :vehicle ,  :operator ,  :start_date_time ,  :start_time ,  :end_date_time ,  :end_time ,  :comment ,  :create_date , :delete_status)";

    $statement = $connect->prepare($query);
    $statement->execute(
      array(

//        ':user_id' => $_SESSION['user_id'],


      ':user_id' => 1,
      ':vehicle' => $_POST['vehicle'],
      ':operator' => $_POST['operator'],
      ':start_date_time' => $_POST['start_date_time'],
      ':start_time' => $_POST['start_time'],
      ':end_date_time' => $_POST['end_date_time'],
      ':end_time' => $_POST['end_time'],
      ':comment' => $_POST['comment'],
      ':create_date' => $create_date,
      ':delete_status' => 0   

      )
    );

    // if (!$statement->execute()) {
    //   print_r($statement->errorInfo());
    // }


    $result = $statement->fetchAll();
    if (isset($result)) {
      echo 'Vehicle Assignments Added';
    }
}

////////////////////////////////////////////////////////// Edit Data Show

  if ($_POST['btn_action'] == 'fetch_single') {
     $query = "
    SELECT * FROM vehicle_assignments WHERE vehicle_assignments_id = :vehicle_assignments_id
    ";
    $statement = $connect->prepare($query);
    $statement->execute(
      array(
        ':vehicle_assignments_id' => $_POST["vehicle_assignments_id"]
      )
    );
    $result = $statement->fetchAll();
    // print_r($result);die();
    foreach ($result as $row) {
      $output['vehicle_assignments_id'] = $row['vehicle_assignments_id'];

      $output['vehicle'] = $row['vehicle'];
      $output['operator'] = $row['operator'];
      $output['start_date_time'] = $row['start_date_time'];
      $output['start_time'] = $row['start_time'];
      $output['end_date_time'] = $row['end_date_time'];
      $output['end_time'] = $row['end_time'];
      $output['comment'] = $row['comment'];

    }
    echo json_encode($output);
  }


////////////////////////////////////////////////////////// UPDATE TO DB


  if ($_POST['btn_action'] == 'Edit') {

    date_default_timezone_set("Asia/Dhaka");
    $create_date = date("Y-m-d H:i:s");

    $query = "UPDATE  vehicle_assignments  SET  user_id =:user_id, vehicle = :vehicle , operator = :operator , start_date_time = :start_date_time , start_time = :start_time , end_date_time = :end_date_time , end_time = :end_time , comment = :comment , update_date = :update_date WHERE vehicle_assignments_id = :vehicle_assignments_id";
    $statement = $connect->prepare($query);
    $statement->execute(
      array(

//        ':user_id' => $_SESSION['user_id'],
        ':user_id' => 1,
        ':vehicle' => $_POST['vehicle'],
        ':operator' => $_POST['operator'],
        ':start_date_time' => $_POST['start_date_time'],
        ':start_time' => $_POST['start_time'],
        ':end_date_time' => $_POST['end_date_time'],
        ':end_time' => $_POST['end_time'],
        ':comment' => $_POST['comment'],
        ':update_date' => $create_date, 
        ':vehicle_assignments_id' => $_POST['vehicle_assignments_id']

      )
    );
    $result = $statement->fetchAll();
    if (isset($result)) {
      echo 'Vehicle Assignments Edited';
    }
  }


///////////////////////////////////////////// DELETE


 if ($_POST['btn_action'] == 'delete') {

    date_default_timezone_set("Asia/Dhaka");
    $create_date = date("Y-m-d H:i:s");

    $vehicle_assignments_id = $_POST["vehicle_assignments_id"]; 

        // $status = 0;

        // if ($_POST["status"] == 0) {
        //     $status = 1;
        // }

    $query = "UPDATE  vehicle_assignments  SET  user_id = :user_id , update_date = :update_date ,  delete_status = :delete_status  WHERE vehicle_assignments_id = :vehicle_assignments_id";
    $statement = $connect->prepare($query);
    $statement->execute(
      array(

//        ':user_id' => $_SESSION['user_id'],
        ':user_id' => 1,
        ':update_date' => $create_date,
        ':delete_status' => 1,
         
        ':vehicle_assignments_id' => $_POST['vehicle_assignments_id']

      )
    );


    $result = $statement->fetchAll();
    if (isset($result)) {
      echo 'Vehicle Assignments Deleted';
    }
  }

}

?>
