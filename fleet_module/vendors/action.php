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

    if (empty($_POST['fuel'])) {
      $_POST['fuel'] = "off";
    }else{
      $_POST['fuel'] = "on";
    }
    
    if (empty($_POST['service'])) {
      $_POST['service'] = "off";
    }else{
      $_POST['service'] = "on";
    }

    if (empty($_POST['vehicle'])) {
      $_POST['vehicle'] = "off";
    }else{
      $_POST['vehicle'] = "on";
    }

    $query = "INSERT INTO  vendors ( user_id ,  name ,  phone ,  website ,  labels ,  address ,  address_line_2 ,  city ,  state ,  zip_postal_code ,  country ,  contact_name ,  phone_2 ,  email ,  fuel ,  service ,  vehicle ,  create_date , delete_status ) VALUES ( :user_id ,  :name ,  :phone ,  :website ,  :labels ,  :address ,  :address_line_2 ,  :city ,  :state ,  :zip_postal_code ,  :country ,  :contact_name ,  :phone_2 ,  :email ,  :fuel ,  :service ,  :vehicle ,  :create_date , :delete_status)";

    $statement = $connect->prepare($query);
    $statement->execute(
      array(

//        ':user_id' => $_SESSION['user_id'],

        
      ':user_id' => 1,
      ':name' => $_POST['name'],
      ':phone' => $_POST['phone'],
      ':website' => $_POST['website'],
      ':labels' => $_POST['labels'],
      ':address' => $_POST['address'],
      ':address_line_2' => $_POST['address_line_2'],
      ':city' => $_POST['city'],
      ':state' => $_POST['state'],
      ':zip_postal_code' => $_POST['zip_postal_code'],
      ':country' => $_POST['country'],
      ':contact_name' => $_POST['contact_name'],
      ':phone_2' => $_POST['phone_2'],
      ':email' => $_POST['email'],
      ':fuel' => $_POST['fuel'],
      ':service' => $_POST['service'],
      ':vehicle' => $_POST['vehicle'],
      ':create_date' => $create_date,
      ':delete_status' => 0


      )
        

    );

    // if (!$statement->execute()) {
    //   print_r($statement->errorInfo());
    // }


    $result = $statement->fetchAll();
    if (isset($result)) {
      echo 'Vendors Added';
    }
}
////////////////////////////////////////////////////////// Edit Data Show

  if ($_POST['btn_action'] == 'fetch_single') {
    $query = "
    SELECT * FROM vendors WHERE vendors_id = :vendors_id
    ";
    $statement = $connect->prepare($query);
    $statement->execute(
      array(
        ':vendors_id' => $_POST["vendors_id"]
      )
    );
    $result = $statement->fetchAll();
    // print_r($result);die();
    foreach ($result as $row) {
      $output['vendors_id'] = $row['vendors_id'];

      $output['name'] = $row['name'];
      $output['phone'] = $row['phone'];
      $output['website'] = $row['website'];
      $output['labels'] = $row['labels'];
      $output['address'] = $row['address'];
      $output['address_line_2'] = $row['address_line_2'];
      $output['city'] = $row['city'];
      $output['state'] = $row['state'];
      $output['zip_postal_code'] = $row['zip_postal_code'];
      $output['country'] = $row['country'];
      $output['contact_name'] = $row['contact_name'];
      $output['phone_2'] = $row['phone_2'];
      $output['email'] = $row['email'];
      $output['fuel'] = $row['fuel'];
      $output['service'] = $row['service'];
      $output['vehicle'] = $row['vehicle'];
      $output['contact_name'] = $row['contact_name'];
      $output['phone_2'] = $row['phone_2'];

    }
    echo json_encode($output);
  }


////////////////////////////////////////////////////////// UPDATE TO DB


  if ($_POST['btn_action'] == 'Edit') {

    date_default_timezone_set("Asia/Dhaka");
    $create_date = date("Y-m-d H:i:s");

    if (empty($_POST['fuel'])) {
      $_POST['fuel'] = "off";
    }else{
      $_POST['fuel'] = "on";
    }
    
    if (empty($_POST['service'])) {
      $_POST['service'] = "off";
    }else{
      $_POST['service'] = "on";
    }

    if (empty($_POST['vehicle'])) {
      $_POST['vehicle'] = "off";
    }else{
      $_POST['vehicle'] = "on";
    }

    $query = "UPDATE  vendors  SET user_id =:user_id, name = :name , phone = :phone , website = :website , labels = :labels , address = :address , address_line_2 = :address_line_2, city =:city, state = :state , zip_postal_code = :zip_postal_code , country = :country , contact_name = :contact_name , phone_2 = :phone_2 , email = :email, fuel =:fuel, service =:service, vehicle =:vehicle, update_date =:update_date, vendors_id =:vendors_id  WHERE vendors_id = :vendors_id";
    $statement = $connect->prepare($query);
    $statement->execute(
      array(

//        ':user_id' => $_SESSION['user_id'],

      ':user_id' => 1,
      ':name' => $_POST['name'],
      ':phone' => $_POST['phone'],
      ':website' => $_POST['website'],
      ':labels' => $_POST['labels'],
      ':address' => $_POST['address'],
      ':address_line_2' => $_POST['address_line_2'],
      ':city' => $_POST['city'],
      ':state' => $_POST['state'],
      ':zip_postal_code' => $_POST['zip_postal_code'],
      ':country' => $_POST['country'],
      ':contact_name' => $_POST['contact_name'],
      ':phone_2' => $_POST['phone_2'],
      ':email' => $_POST['email'],
      ':fuel' => $_POST['fuel'],
      ':service' => $_POST['service'],
      ':vehicle' => $_POST['vehicle'],
      ':update_date' => $create_date,
      ':vendors_id' => $_POST['vendors_id']


      )
    );
    $result = $statement->fetchAll();
    if (isset($result)) {
      echo 'Vendors Edited';
    }
  }


///////////////////////////////////////////// DELETE


 if ($_POST['btn_action'] == 'delete') {

    date_default_timezone_set("Asia/Dhaka");
    $create_date = date("Y-m-d H:i:s");

    // $vendors_id = $_POST["vendors_id"]; 


    $query = "UPDATE  vendors  SET  user_id = :user_id , update_date = :update_date ,  delete_status = :delete_status  WHERE vendors_id = :vendors_id";
    $statement = $connect->prepare($query);
    $statement->execute(
      array(

//        ':user_id' => $_SESSION['user_id'],
        ':user_id' => 1,
        ':update_date' => $create_date,
        ':delete_status' => 1,
         
        ':vendors_id' => $_POST['vendors_id']

      )
    );

    $result = $statement->fetchAll();
    if (isset($result)) {
      echo 'Vendors Deleted';
    }
  }

}

?>
