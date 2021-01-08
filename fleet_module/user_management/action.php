<?php
$connect = "";

include('../database_connection.php');

if (!isset($_SESSION['user_name'])) {
  header("Location: ../logout.php");
}

////////////////////////////////////////////////////////////// IMAGE / FILE MOVE

if (isset($_FILES['photo'])) {


  if (is_array($_FILES)) {

    $src = $_FILES['photo']['tmp_name'];
    $targ = "images/" . $_FILES['photo']['name'];
    move_uploaded_file($src, $targ);

    echo $_SESSION['base_url'] . 'user_management/' . $targ;

  }

}


//////////////////////////////////////////////////////////////// ADD TO DB vehicle details

if (isset($_POST['btn_action'])) {
  if ($_POST['btn_action'] == 'Add') {
    // echo "<pre>";print_r($_POST);
    date_default_timezone_set("Asia/Dhaka");
    $create_date = date("Y-m-d H:i:s");

    if (empty($_POST['operator'])) {
      $_POST['operator'] = "off";
    } else {
      $_POST['operator'] = "on";
    }

    if (empty($_POST['employee'])) {
      $_POST['employee'] = "off";
    } else {
      $_POST['employee'] = "on";
    }


    $query = "INSERT INTO `basic_information`(`user_id`, `first_name`, `middle_name`, `last_name`, `group`, `email`, `operator`, `employee`, `photo`, `create_date`, `delete_status`) VALUES ( :user_id ,  :first_name ,  :middle_name ,  :last_name ,  :group ,  :email ,  :operator ,  :employee ,  :photo ,  :create_date ,  :delete_status)";

    $statement1 = $connect->prepare($query);
    $statement1->execute(
      array(

//        ':user_id' => $_SESSION['user_id'],


        ':user_id' => 1,
        ':first_name' => $_POST['first_name'],
        ':middle_name' => $_POST['middle_name'],
        ':last_name' => $_POST['last_name'],
        ':group' => $_POST['group'],
        ':email' => $_POST['email'],
        ':operator' => $_POST['operator'],
        ':employee' => $_POST['employee'],
        ':photo' => $_POST['photo_url'],
        ':create_date' => $create_date,
        ':delete_status' => 0

      )
    );

    if (empty($_POST['manage_user_roles'])) {
      $_POST['manage_user_roles'] = "off";
    } else {
      $_POST['manage_user_roles'] = "on";
    }

    if (empty($_POST['manage_subscription_billing'])) {
      $_POST['manage_subscription_billing'] = "off";
    } else {
      $_POST['manage_subscription_billing'] = "on";
    }

    if (empty($_POST['export_account_data'])) {
      $_POST['export_account_data'] = "off";
    } else {
      $_POST['export_account_data'] = "on";
    }

    if ($_POST['password'] == $_POST['confirm_password']) {
      $password = $_POST['confirm_password'];
      $password = password_hash($password, PASSWORD_DEFAULT);

    } else {
      echo '<div class="alert alert-danger">Password and confirm password doesnt match</div>';
      exit();
    }


    $query2 = "INSERT INTO `user_management`(`user_id`, `username`, `password`, `time_zone`, `user_type`, `user_operator`, `vehicle_view_update`, `vehicle_view`, `contact_view_update`, `contact_view`, `inspection_form_view`, `manage_user_roles`, `manage_subscription_billing`, `export_account_data`, `create_date`,  `delete_status`) VALUES ( :user_id ,  :username ,  :password ,  :time_zone ,  :user_type ,  :user_operator ,  :vehicle_view_update ,  :vehicle_view, :contact_view_update ,  :contact_view ,  :inspection_form_view ,  :manage_user_roles ,  :manage_subscription_billing ,  :export_account_data , :create_date , :delete_status)";

    $statement2 = $connect->prepare($query2);
    $statement2->execute(
      array(

//        ':user_id' => $_SESSION['user_id'],


        ':user_id' => 1,
        ':username' => $_POST['username'],
        ':password' => $password,
        ':time_zone' => $_POST['time_zone'],
        ':user_type' => $_POST['user_type'],
        ':user_operator' => $_POST['user_operator'],
        ':vehicle_view_update' => $_POST['vehicle_view_update'],
        ':vehicle_view' => $_POST['vehicle_view'],
        ':contact_view_update' => $_POST['contact_view_update'],
        ':contact_view' => $_POST['contact_view'],
        ':inspection_form_view' => $_POST['inspection_form_view'],
        ':manage_user_roles' => $_POST['manage_user_roles'],
        ':manage_subscription_billing' => $_POST['manage_subscription_billing'],
        ':export_account_data' => $_POST['export_account_data'],
        ':create_date' => $create_date,
        ':delete_status' => 0

      )
    );


    $query3 = "INSERT INTO `contact_information`(`user_id`, `phone_numbers`, `street_address`, `second_address`, `city`, `state_province_region`, `zip_postal_code`, `country`, `create_date`, `delete_status`) VALUES (  :user_id ,  :phone_numbers ,  :street_address ,  :second_address ,  :city ,  :state_province_region ,  :zip_postal_code ,  :country,  :create_date,  :delete_status)";

    $statement3 = $connect->prepare($query3);
    $statement3->execute(
      array(

//        ':user_id' => $_SESSION['user_id'],


        ':user_id' => 1,
        ':phone_numbers' => $_POST['phone_numbers'],
        ':street_address' => $_POST['street_address'],
        ':second_address' => $_POST['second_address'],
        ':city' => $_POST['city'],
        ':state_province_region' => $_POST['state_province_region'],
        ':zip_postal_code' => $_POST['zip_postal_code'],
        ':country' => $_POST['country'],
        ':create_date' => $create_date,
        ':delete_status' => 0

      )
    );


    $query4 = "INSERT INTO `personal_information`(`user_id`, `job_title`, `dob`, `employee_number`, `start_date`, `leave_date`, `license_number`, `license_class`, `license_state`, `hourly_labor_rate`, `create_date`, `delete_status`) VALUES (  :user_id ,  :job_title ,  :dob ,  :employee_number ,  :start_date ,  :leave_date ,  :license_number ,  :license_class ,  :license_state , :hourly_labor_rate,  :create_date,  :delete_status  )";

    $statement4 = $connect->prepare($query4);
    $statement4->execute(
      array(

//        ':user_id' => $_SESSION['user_id'],

        ':user_id' => 1,
        ':job_title' => $_POST['job_title'],
        ':dob' => $_POST['dob'],
        ':employee_number' => $_POST['employee_number'],
        ':start_date' => $_POST['start_date'],
        ':leave_date' => $_POST['leave_date'],
        ':license_number' => $_POST['license_number'],
        ':license_class' => $_POST['license_class'],
        ':license_state' => $_POST['license_state'],
        ':hourly_labor_rate' => $_POST['hourly_labor_rate'],
        ':create_date' => $create_date,
        ':delete_status' => 0

      )
    );


    $result4 = $statement4->fetchAll();
    if (isset($result4)) {
      echo '<div class="alert alert-success">User Added</div>';

    }


  }
// insert settings start from here

////////////////////////////////////////////////////////// Edit Data Show

  if ($_POST['btn_action'] == 'fetch_single') {
    $query1 = "SELECT * FROM basic_information WHERE bi_id = :bi_id";
    $statement1 = $connect->prepare($query1);
    $statement1->execute(
      array(
        ':bi_id' => $_POST["bi_id"]
      )
    );
    $result1 = $statement1->fetchAll();
    // print_r($result1);die();
    foreach ($result1 as $row1) {

      $output1['bi_id'] = $row1['bi_id'];

      $output1['first_name'] = $row1['first_name'];
      $output1['middle_name'] = $row1['middle_name'];
      $output1['last_name'] = $row1['last_name'];
      $output1['group'] = $row1['group'];
      $output1['email'] = $row1['email'];
      $output1['operator'] = $row1['operator'];
      $output1['employee'] = $row1['employee'];
      $output1['photo'] = $row1['photo'];

    }
    // echo json_encode($output1);


// vehicle lifecycles
    $query2 = "SELECT * FROM user_management WHERE um_id = :um_id";
    $statement2 = $connect->prepare($query2);
    $statement2->execute(
      array(
        ':um_id' => $_POST["bi_id"]
      )
    );
    $result2 = $statement2->fetchAll();
    // print_r($result2);die();
    foreach ($result2 as $row2) {


      $output1['um_id'] = $row2['um_id'];

      $output1['username'] = $row2['username'];
      $output1['password'] = $row2['password'];
      $output1['time_zone'] = $row2['time_zone'];
      $output1['user_type'] = $row2['user_type'];
      $output1['user_operator'] = $row2['user_operator'];
      $output1['vehicle_view_update'] = $row2['vehicle_view_update'];
      $output1['vehicle_view'] = $row2['vehicle_view'];
      $output1['contact_view_update'] = $row2['contact_view_update'];
      $output1['contact_view'] = $row2['contact_view'];
      $output1['inspection_form_view'] = $row2['inspection_form_view'];
      $output1['manage_user_roles'] = $row2['manage_user_roles'];
      $output1['manage_subscription_billing'] = $row2['manage_subscription_billing'];
      $output1['export_account_data'] = $row2['export_account_data'];

    }
    // vehicle specifications

    $query3 = "SELECT * FROM contact_information WHERE ci_id = :ci_id";
    $statement3 = $connect->prepare($query3);
    $statement3->execute(
      array(
        ':ci_id' => $_POST["bi_id"]
      )
    );
    $result3 = $statement3->fetchAll();
    // print_r($result3);die();
    foreach ($result3 as $row3) {


      $output1['ci_id'] = $row3['ci_id'];

      $output1['phone_numbers'] = $row3['phone_numbers'];
      $output1['street_address'] = $row3['street_address'];
      // $output1['length'] = $row3['length'];
      $output1['second_address'] = $row3['second_address'];
      $output1['city'] = $row3['city'];
      $output1['state_province_region'] = $row3['state_province_region'];
      $output1['zip_postal_code'] = $row3['zip_postal_code'];
      $output1['country'] = $row3['country'];
    }

    //end contact_information
    // personal_information

    $query4 = "SELECT * FROM personal_information WHERE pi_id = :pi_id";
    $statement4 = $connect->prepare($query4);
    $statement4->execute(
      array(
        ':pi_id' => $_POST["bi_id"]
      )
    );
    $result4 = $statement4->fetchAll();
    // print_r($result4);die();
    foreach ($result4 as $row4) {


      $output1['pi_id'] = $row4['pi_id'];

      $output1['job_title'] = $row4['job_title'];
      $output1['dob'] = $row4['dob'];
      $output1['employee_number'] = $row4['employee_number'];
      $output1['leave_date'] = $row4['leave_date'];
      $output1['license_number'] = $row4['license_number'];
      $output1['license_class'] = $row4['license_class'];
      $output1['license_state'] = $row4['license_state'];
      $output1['hourly_labor_rate'] = $row4['hourly_labor_rate'];

    }

    //end personal_information
    echo json_encode($output1);


  }


////////////////////////////////////////////////////////// UPDATE TO DB


  if ($_POST['btn_action'] == 'Edit') {

    date_default_timezone_set("Asia/Dhaka");
    $create_date = date("Y-m-d H:i:s");
// echo "<pre>";print_r($_POST);
// vehicle details

    if (empty($_POST['operator'])) {
      $_POST['operator'] = "off";
    } else {
      $_POST['operator'] = "on";
    }

    if (empty($_POST['employee'])) {
      $_POST['employee'] = "off";
    } else {
      $_POST['employee'] = "on";
    }


    $query1 = "UPDATE `basic_information` SET `user_id`=:user_id,`first_name`=:first_name,`middle_name`=:middle_name,`last_name`=:last_name,`group`=:group,`email`=:email,`operator`=:operator,`employee`=:employee,`photo`=:photo,`update_date`=:update_date WHERE `bi_id` =:bi_id";
    $statement1 = $connect->prepare($query1);
    $statement1->execute(
      array(

//        ':user_id' => $_SESSION['user_id'],
        ':user_id' => 1,
        ':first_name' => $_POST['first_name'],
        ':middle_name' => $_POST['middle_name'],
        ':last_name' => $_POST['last_name'],
        ':group' => $_POST['group'],
        ':email' => $_POST['email'],
        ':operator' => $_POST['operator'],
        ':employee' => $_POST['employee'],
        ':photo' => $_POST['photo_url'],
        ':update_date' => $create_date,
        ':bi_id' => $_POST['bi_id']

      )
    );

//    if (!$statement1->execute()) {
//      print_r($statement1->errorInfo());
//    }

    $result1 = $statement1->fetchAll();

    // user management
    if (empty($_POST['manage_user_roles'])) {
      $_POST['manage_user_roles'] = "off";
    } else {
      $_POST['manage_user_roles'] = "on";
    }

    if (empty($_POST['manage_subscription_billing'])) {
      $_POST['manage_subscription_billing'] = "off";
    } else {
      $_POST['manage_subscription_billing'] = "on";
    }

    if (empty($_POST['export_account_data'])) {
      $_POST['export_account_data'] = "off";
    } else {
      $_POST['export_account_data'] = "on";
    }

    if ($_POST['password'] == $_POST['confirm_password']) {
      $password = $_POST['confirm_password'];
      $password = password_hash($password, PASSWORD_DEFAULT);

    } else {
      echo '<div class="alert alert-danger">Password and confirm password doesnt match</div>';
      exit();
    }

    $query2 = "UPDATE  user_management  SET  user_id =:user_id, username = :username , password = :password , time_zone = :time_zone , user_type = :user_type , user_operator = :user_operator , vehicle_view_update = :vehicle_view_update , vehicle_view = :vehicle_view, contact_view_update = :contact_view_update, contact_view = :contact_view, inspection_form_view = :inspection_form_view, manage_user_roles = :manage_user_roles, manage_subscription_billing = :manage_subscription_billing, export_account_data = :export_account_data, update_date = :update_date WHERE um_id = :um_id";
    $statement2 = $connect->prepare($query2);
    $statement2->execute(
      array(

//        ':user_id' => $_SESSION['user_id'],
        ':user_id' => 1,
        ':username' => $_POST['username'],
        ':password' => $password,
        ':time_zone' => $_POST['time_zone'],
        ':user_type' => $_POST['user_type'],
        ':user_operator' => $_POST['user_operator'],
        ':vehicle_view_update' => $_POST['vehicle_view_update'],
        ':vehicle_view' => $_POST['vehicle_view'],
        ':contact_view_update' => $_POST['contact_view_update'],
        ':contact_view' => $_POST['contact_view'],
        ':inspection_form_view' => $_POST['inspection_form_view'],
        ':manage_user_roles' => $_POST['manage_user_roles'],
        ':manage_subscription_billing' => $_POST['manage_subscription_billing'],
        ':export_account_data' => $_POST['export_account_data'],
        ':update_date' => $create_date,
        ':um_id' => $_POST['um_id']

      )
    );


    $result2 = $statement2->fetchAll();

    // vehicle specifications
    $query3 = "UPDATE  contact_information  SET  user_id =:user_id, phone_numbers = :phone_numbers , street_address = :street_address , second_address = :second_address , city = :city , state_province_region = :state_province_region , zip_postal_code = :zip_postal_code , country = :country, update_date = :update_date WHERE ci_id = :ci_id";
    $statement3 = $connect->prepare($query3);
    $statement3->execute(
      array(

//        ':user_id' => $_SESSION['user_id'],
        ':user_id' => 1,
        ':phone_numbers' => $_POST['phone_numbers'],
        ':street_address' => $_POST['street_address'],
        ':second_address' => $_POST['second_address'],
        ':city' => $_POST['city'],
        ':state_province_region' => $_POST['state_province_region'],
        ':zip_postal_code' => $_POST['zip_postal_code'],
        ':country' => $_POST['country'],
        ':update_date' => $create_date,
        ':ci_id' => $_POST['ci_id']

      )
    );


    $result3 = $statement3->fetchAll();

    // vehicle settings
    $query4 = "UPDATE  personal_information  SET  user_id =:user_id, job_title = :job_title , dob = :dob , employee_number = :employee_number , start_date = :start_date , leave_date = :leave_date , license_number = :license_number , license_class = :license_class, license_state = :license_state, hourly_labor_rate = :hourly_labor_rate, update_date = :update_date WHERE pi_id = :pi_id";

    $statement4 = $connect->prepare($query4);
    $statement4->execute(
      array(

//        ':user_id' => $_SESSION['user_id'],
        ':user_id' => 1,
        ':job_title' => $_POST['job_title'],
        ':dob' => $_POST['dob'],
        ':employee_number' => $_POST['employee_number'],
        ':start_date' => $_POST['start_date'],
        ':leave_date' => $_POST['leave_date'],
        ':license_number' => $_POST['license_number'],
        ':license_class' => $_POST['license_class'],
        ':license_state' => $_POST['license_state'],
        ':hourly_labor_rate' => $_POST['hourly_labor_rate'],
        ':update_date' => $create_date,
        ':pi_id' => $_POST['pi_id']

      )
    );

    // if (!$statement4->execute()) {
    //   print_r($statement4->errorInfo());
    // }

    $result4 = $statement4->fetchAll();

    // end personal_information


    if (isset($result1)) {
      echo '<div class="alert alert-success">User Edited</div>';

    }

  }


///////////////////////////////////////////// DELETE


  if ($_POST['btn_action'] == 'delete') {

    date_default_timezone_set("Asia/Dhaka");
    $create_date = date("Y-m-d H:i:s");

    $bi_id = $_POST["bi_id"];
    $um_id = $_POST["um_id"];
    $ci_id = $_POST["ci_id"];
    $pi_id = $_POST["pi_id"];

    $status = 0;

    if ($_POST["status"] == 0) {
      $status = 1;
    }

    $query1 = "UPDATE  basic_information  SET  user_id = :user_id , update_date = :update_date ,  delete_status = :delete_status  WHERE bi_id = :bi_id";
    $statement = $connect->prepare($query1);
    $statement->execute(
      array(

//        ':user_id' => $_SESSION['user_id'],
        ':user_id' => 1,
        ':update_date' => $create_date,
        ':delete_status' => $status,

        ':bi_id' => $_POST['bi_id']

      )
    );

    // Lifecycle
    $query2 = "UPDATE  user_management  SET  user_id = :user_id , update_date = :update_date ,  delete_status = :delete_status  WHERE um_id = :um_id";
    $statement = $connect->prepare($query2);
    $statement->execute(
      array(

//        ':user_id' => $_SESSION['user_id'],
        ':user_id' => 1,
        ':update_date' => $create_date,
        ':delete_status' => $status,

        ':um_id' => $_POST['um_id']

      )
    );
// Specifications
    $query3 = "UPDATE  contact_information  SET  user_id = :user_id , update_date = :update_date ,  delete_status = :delete_status  WHERE ci_id = :ci_id";
    $statement = $connect->prepare($query3);
    $statement->execute(
      array(

//        ':user_id' => $_SESSION['user_id'],
        ':user_id' => 1,
        ':update_date' => $create_date,
        ':delete_status' => $status,

        ':ci_id' => $_POST['ci_id']

      )
    );

    // Settings
    $query4 = "UPDATE  personal_information  SET  user_id = :user_id , update_date = :update_date ,  delete_status = :delete_status  WHERE pi_id = :pi_id";
    $statement = $connect->prepare($query4);
    $statement->execute(
      array(

//        ':user_id' => $_SESSION['user_id'],
        ':user_id' => 1,
        ':update_date' => $create_date,
        ':delete_status' => $status,

        ':pi_id' => $_POST['pi_id']

      )
    );


    $result = $statement->fetchAll();
    if (isset($result)) {
      echo 'User Deleted';
    }
  }

}

?>
