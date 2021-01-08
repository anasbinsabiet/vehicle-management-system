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

    echo $_SESSION['base_url'] . 'vehicle_management/' . $targ;

  }

}


//////////////////////////////////////////////////////////////// ADD TO DB vehicle details

if (isset($_POST['btn_action'])) {
  if ($_POST['btn_action'] == 'Add') {
    // echo "<pre>";print_r($_POST);
    date_default_timezone_set("Asia/Dhaka");
    $create_date = date("Y-m-d H:i:s");

    $query = "INSERT INTO  vehicle_details (   `user_id`, `vehicle_name`, `vin_sn`, `license_plate`, `type`, `year`, `make`, `model`, `trims`, `registration_state`, `photo`, `service_program`, `status`, `group`, `operator`, `ownership`, `color`, `body_type`, `body_subtype`, `msrp`, `linked_vehicles`, `create_date`, `delete_status`  ) VALUES ( :user_id ,  :vehicle_name ,  :vin_sn ,  :license_plate ,  :type ,  :year ,  :make ,  :model ,  :trims ,  :registration_state ,  :photo ,  :service_program ,  :status ,  :group ,  :operator ,  :ownership ,  :color ,  :body_type ,  :body_subtype ,  :msrp ,  :linked_vehicles ,  :create_date, :delete_status)";

    $statement1 = $connect->prepare($query);
    $statement1->execute(
      array(

//        ':user_id' => $_SESSION['user_id'],

        ':user_id' => 1,
        ':vehicle_name' => $_POST['vehicle_name'],
        ':vin_sn' => $_POST['vin_sn'],
        ':license_plate' => $_POST['license_plate'],
        ':type' => $_POST['type'],
        ':year' => $_POST['year'],
        ':make' => $_POST['make'],
        ':model' => $_POST['model'],
        ':trims' => $_POST['trims'],
        ':registration_state' => $_POST['registration_state'],
        ':photo' => $_POST['photo_url'],
        ':service_program' => $_POST['service_program'],
        ':status' => $_POST['status'],
        ':group' => $_POST['group'],
        ':operator' => $_POST['operator'],
        ':ownership' => $_POST['ownership'],
        ':color' => $_POST['color'],
        ':body_type' => $_POST['body_type'],
        ':body_subtype' => $_POST['body_subtype'],
        ':msrp' => $_POST['msrp'],
        ':linked_vehicles' => $_POST['linked_vehicles'],
        ':create_date' => $create_date,
        ':delete_status' => 0
      )
    );

    // if (!$statement->execute()) {
    //   print_r($statement->errorInfo());
    // }


    // $result1 = $statement->fetchAll();
//     if (isset($result)) {
//       echo 'Vehicle Profile Added';
//     }
// }
//     // lifecycles

// if ($_POST['btn_action'] == 'Add_lifecycles') {
//     date_default_timezone_set("Asia/Dhaka");
//     $create_date = date("Y-m-d H:i:s");

    $query2 = "INSERT INTO vehicles_lifecycle (`user_id`, `in_service_date`, `in_service_odometer`, `estimated_service_life_months`, `estimated_service_life_miles`, `estimated_resale_value`, `out_of_service_date`, `out_of_service_odometer`, `create_date`, `delete_status`) VALUES ( :user_id ,  :in_service_date ,  :in_service_odometer ,  :estimated_service_life_months ,  :estimated_service_life_miles ,  :estimated_resale_value ,  :out_of_service_date ,  :out_of_service_odometer ,  :create_date , :delete_status)";

    $statement2 = $connect->prepare($query2);
    $statement2->execute(
      array(

//        ':user_id' => $_SESSION['user_id'],

        ':user_id' => 1,
        ':in_service_date' => $_POST['in_service_date'],
        ':in_service_odometer' => $_POST['in_service_odometer'],
        ':estimated_service_life_months' => $_POST['estimated_service_life_months'],
        ':estimated_service_life_miles' => $_POST['estimated_service_life_miles'],
        ':estimated_resale_value' => $_POST['estimated_resale_value'],
        ':out_of_service_date' => $_POST['out_of_service_date'],
        ':out_of_service_odometer' => $_POST['out_of_service_odometer'],
        ':create_date' => $create_date,
        ':delete_status' => 0
      )
    );

    // if (!$statement->execute()) {
    //   print_r($statement->errorInfo());
    // }


    // $result2 = $statement2->fetchAll();
//     if (isset($result2)) {
//       echo 'Vehicle Lifecycle Added';
//     }



//   }
//     // end lifecycles add

//     // start specifications add


// if ($_POST['btn_action'] == 'Add_specifications') {
//     // echo "<pre>";print_r($_POST);

//     date_default_timezone_set("Asia/Dhaka");
//     $create_date = date("Y-m-d H:i:s");

    $query3 = "INSERT INTO `vehicle_specifications`(`user_id`, `width`, `height`, `length`, `interior_volume`, `passenger_volume`, `cargo_volume`, `ground_clearence`, `bed_length`, `curv_weight`, `gross_vehicle_weight_rating`, `towing_capacity`, `max_payload`, `epa_city`, `epa_highway`, `epa_combined`, `engine_summary`, `engine_brand`, `aspiration`, `block_type`, `bore`, `cam_type`, `compression`, `cylinders`, `displacement`, `fuel_induction`, `max_hp`, `max_torque`, `redline_rpm`, `stroke`, `valves`, `transmission_summary`, `transmission_brand`, `transmission_type`, `transmission_gears`, `drive_type`, `brake_system`, `front_track_width`, `rear_track_width`, `wheelbase`, `front_wheel_diameter`, `rear_wheel_diameter`, `rear_axle`, `front_tire_type`, `front_tire_psi`, `rear_tire_type`, `rear_tire_psi`, `fuel_type`, `fuel_quality`, `fuel_tank_one_capacity`, `fuel_tank_two_capacity`, `oil_capacity`, `create_date`, `delete_status`) VALUES (  :user_id ,  :width ,  :height ,  :length ,  :interior_volume ,  :passenger_volume ,  :cargo_volume ,  :ground_clearence ,  :bed_length ,  :curv_weight ,  :gross_vehicle_weight_rating ,  :towing_capacity ,  :max_payload ,  :epa_city ,  :epa_highway ,  :epa_combined ,  :engine_summary ,  :engine_brand ,  :aspiration ,  :block_type ,  :bore ,  :cam_type ,  :compression ,  :cylinders ,  :displacement ,  :fuel_induction ,  :max_hp ,  :max_torque ,  :redline_rpm ,  :stroke ,  :valves ,  :transmission_summary ,  :transmission_brand ,  :transmission_type ,  :transmission_gears ,  :drive_type ,  :brake_system ,  :front_track_width ,  :rear_track_width ,  :wheelbase ,  :front_wheel_diameter ,  :rear_wheel_diameter ,  :rear_axle ,  :front_tire_type ,  :front_tire_psi ,  :rear_tire_type ,  :rear_tire_psi ,  :fuel_type ,  :fuel_quality ,  :fuel_tank_one_capacity ,  :fuel_tank_two_capacity ,  :oil_capacity ,  :create_date,  :delete_status)";

    $statement3 = $connect->prepare($query3);
    $statement3->execute(
      array(

//        ':user_id' => $_SESSION['user_id'],


      ':user_id' => 1,
      ':width' => $_POST['width'],
      ':height' => $_POST['height'],
      ':length' => $_POST['length'],
      ':interior_volume' => $_POST['interior_volume'],
      ':passenger_volume' => $_POST['passenger_volume'],
      ':cargo_volume' => $_POST['cargo_volume'],
      ':ground_clearence' => $_POST['ground_clearence'],
      ':bed_length' => $_POST['bed_length'],
      ':curv_weight' => $_POST['curv_weight'],
      ':gross_vehicle_weight_rating' => $_POST['gross_vehicle_weight_rating'],
      ':towing_capacity' => $_POST['towing_capacity'],
      ':max_payload' => $_POST['max_payload'],
      ':epa_city' => $_POST['epa_city'],
      ':epa_highway' => $_POST['epa_highway'],
      ':epa_combined' => $_POST['epa_combined'],
      ':engine_summary' => $_POST['engine_summary'],
      ':engine_brand' => $_POST['engine_brand'],
      ':aspiration' => $_POST['aspiration'],
      ':block_type' => $_POST['block_type'],
      ':bore' => $_POST['bore'],
      ':cam_type' => $_POST['cam_type'],
      ':compression' => $_POST['compression'],
      ':cylinders' => $_POST['cylinders'],
      ':displacement' => $_POST['displacement'],
      ':fuel_induction' => $_POST['fuel_induction'],
      ':max_hp' => $_POST['max_hp'],
      ':max_torque' => $_POST['max_torque'],
      ':redline_rpm' => $_POST['redline_rpm'],
      ':stroke' => $_POST['stroke'],
      ':valves' => $_POST['valves'],
      ':transmission_summary' => $_POST['transmission_summary'],
      ':transmission_brand' => $_POST['transmission_brand'],
      ':transmission_type' => $_POST['transmission_type'],
      ':transmission_gears' => $_POST['transmission_gears'],
      ':drive_type' => $_POST['drive_type'],
      ':brake_system' => $_POST['brake_system'],
      ':front_track_width' => $_POST['front_track_width'],
      ':rear_track_width' => $_POST['rear_track_width'],
      ':wheelbase' => $_POST['wheelbase'],
      ':front_wheel_diameter' => $_POST['front_wheel_diameter'],
      ':rear_wheel_diameter' => $_POST['rear_wheel_diameter'],
      ':rear_axle' => $_POST['rear_axle'],
      ':front_tire_type' => $_POST['front_tire_type'],
      ':front_tire_psi' => $_POST['front_tire_psi'],
      ':rear_tire_type' => $_POST['rear_tire_type'],
      ':rear_tire_psi' => $_POST['rear_tire_psi'],
      ':fuel_type' => $_POST['fuel_type'],
      ':fuel_quality' => $_POST['fuel_quality'],
      ':fuel_tank_one_capacity' => $_POST['fuel_tank_one_capacity'],
      ':fuel_tank_two_capacity' => $_POST['fuel_tank_two_capacity'],
      ':oil_capacity' => $_POST['oil_capacity'],
      ':create_date' => $create_date,
      ':delete_status' => 0

      )
    );

    // if (!$statement->execute()) {
    //   print_r($statement->errorInfo());
    // }


    // $result3 = $statement3->fetchAll();
//     if (isset($result3)) {
//       echo 'Vehicle Specifications Added';
//     }
//   }
//   // end specifications add
// // insert settings start from here
//   if ($_POST['btn_action'] == 'Add_settings') {
//     // echo "<pre>";print_r($_POST);
//     date_default_timezone_set("Asia/Dhaka");
//     $create_date = date("Y-m-d H:i:s");

    $query4 = "INSERT INTO `vehicle_settings`(`user_id`, `primary_meter`, `primary_current_reading`, `primary_avg_usage`, `secondary_meter`, `secondary_current_reading`, `secondary_avg_usage`, `fuel_unit`, `measurement_unit`, `create_date`, `delete_status`) VALUES (  :user_id ,  :primary_meter ,  :primary_current_reading ,  :primary_avg_usage ,  :secondary_meter ,  :secondary_current_reading ,  :secondary_avg_usage ,  :fuel_unit ,  :measurement_unit ,  :create_date,  :delete_status  )";

    $statement4 = $connect->prepare($query4);
    $statement4->execute(
      array(

//        ':user_id' => $_SESSION['user_id'],

        ':user_id' => 1,
        ':primary_meter' => $_POST['primary_meter'],
        ':primary_current_reading' => $_POST['primary_current_reading'],
        ':primary_avg_usage' => $_POST['primary_avg_usage'],
        ':secondary_meter' => $_POST['secondary_meter'],
        ':secondary_current_reading' => $_POST['secondary_current_reading'],
        ':secondary_avg_usage' => $_POST['secondary_avg_usage'],
        ':fuel_unit' => $_POST['fuel_unit'],
        ':measurement_unit' => $_POST['measurement_unit'],
        ':create_date' => $create_date,
        ':delete_status' => 0

      )
    );

    // if (!$statement->execute()) {
    //   print_r($statement->errorInfo());
    // }


    $result4 = $statement4->fetchAll();
    if (isset($result4)) {
      echo 'Vehicle Added';
    }



  }
// insert settings start from here

////////////////////////////////////////////////////////// Edit Data Show

  if ($_POST['btn_action'] == 'fetch_single') {
    $query1 = "
    SELECT * FROM vehicle_details WHERE vehicle_details_id = :vehicle_details_id
    ";
    $statement1 = $connect->prepare($query1);
    $statement1->execute(
      array(
        ':vehicle_details_id' => $_POST["vehicle_details_id"]
      )
    );
    $result1 = $statement1->fetchAll();
    // print_r($result1);die();
    foreach ($result1 as $row1) {
      $output1['vehicle_details_id'] = $row1['vehicle_details_id'];

      $output1['vehicle_name'] = $row1['vehicle_name'];
      $output1['vin_sn'] = $row1['vin_sn'];
      $output1['license_plate'] = $row1['license_plate'];
      $output1['type'] = $row1['type'];
      $output1['year'] = $row1['year'];
      $output1['make'] = $row1['make'];
      $output1['model'] = $row1['model'];
      $output1['trims'] = $row1['trims'];
      $output1['registration_state'] = $row1['registration_state'];
      $output1['photo'] = $row1['photo'];
      $output1['service_program'] = $row1['service_program'];
      $output1['status'] = $row1['status'];
      $output1['group'] = $row1['group'];
      $output1['operator'] = $row1['operator'];
      $output1['ownership'] = $row1['ownership'];
      $output1['color'] = $row1['color'];
      $output1['body_type'] = $row1['body_type'];
      $output1['body_subtype'] = $row1['body_subtype'];
      $output1['msrp'] = $row1['msrp'];
      $output1['linked_vehicles'] = $row1['linked_vehicles'];

    }
    // echo json_encode($output1);

// vehicle lifecycles
    $query2 = "
    SELECT * FROM vehicles_lifecycle WHERE vehicles_lifecycles_id = :vehicles_lifecycles_id
    ";
    $statement2 = $connect->prepare($query2);
    $statement2->execute(
      array(
        ':vehicles_lifecycles_id' => $_POST["vehicle_details_id"]
      )
    );
    $result2 = $statement2->fetchAll();
    // print_r($result2);die();
    foreach ($result2 as $row2) {



      $output1['vehicles_lifecycles_id'] = $row2['vehicles_lifecycles_id'];

      $output1['in_service_date'] = $row2['in_service_date'];
      $output1['in_service_odometer'] = $row2['in_service_odometer'];
      $output1['estimated_service_life_months'] = $row2['estimated_service_life_months'];
      $output1['estimated_service_life_miles'] = $row2['estimated_service_life_miles'];
      $output1['estimated_resale_value'] = $row2['estimated_resale_value'];
      $output1['out_of_service_date'] = $row2['out_of_service_date'];
      $output1['out_of_service_odometer'] = $row2['out_of_service_odometer'];

    }
    // vehicle specifications

    $query3 = "
    SELECT * FROM vehicle_specifications WHERE vehicle_specifications_id = :vehicle_specifications_id
    ";
    $statement3 = $connect->prepare($query3);
    $statement3->execute(
      array(
        ':vehicle_specifications_id' => $_POST["vehicle_details_id"]
      )
    );
    $result3 = $statement3->fetchAll();
    // print_r($result3);die();
    foreach ($result3 as $row3) {


      $output1['vehicle_specifications_id'] = $row3['vehicle_specifications_id'];

      $output1['width'] = $row3['width'];
      $output1['height'] = $row3['height'];
      $output1['length'] = $row3['length'];
      $output1['interior_volume'] = $row3['interior_volume'];
      $output1['passenger_volume'] = $row3['passenger_volume'];
      $output1['cargo_volume'] = $row3['cargo_volume'];
      $output1['ground_clearence'] = $row3['ground_clearence'];
      $output1['bed_length'] = $row3['bed_length'];
      $output1['curv_weight'] = $row3['curv_weight'];
      $output1['gross_vehicle_weight_rating'] = $row3['gross_vehicle_weight_rating'];
      $output1['towing_capacity'] = $row3['towing_capacity'];
      $output1['max_payload'] = $row3['max_payload'];
      $output1['epa_city'] = $row3['epa_city'];
      $output1['epa_highway'] = $row3['epa_highway'];
      $output1['epa_combined'] = $row3['epa_combined'];
      $output1['engine_summary'] = $row3['engine_summary'];
      $output1['engine_brand'] = $row3['engine_brand'];
      $output1['aspiration'] = $row3['aspiration'];
      $output1['block_type'] = $row3['block_type'];
      $output1['bore'] = $row3['bore'];
      $output1['cam_type'] = $row3['cam_type'];
      $output1['compression'] = $row3['compression'];
      $output1['cylinders'] = $row3['cylinders'];
      $output1['displacement'] = $row3['displacement'];
      $output1['fuel_induction'] = $row3['fuel_induction'];
      $output1['max_hp'] = $row3['max_hp'];
      $output1['max_torque'] = $row3['max_torque'];
      $output1['redline_rpm'] = $row3['redline_rpm'];
      $output1['stroke'] = $row3['stroke'];
      $output1['valves'] = $row3['valves'];
      $output1['transmission_summary'] = $row3['transmission_summary'];
      $output1['transmission_brand'] = $row3['transmission_brand'];
      $output1['transmission_type'] = $row3['transmission_type'];
      $output1['transmission_gears'] = $row3['transmission_gears'];
      $output1['drive_type'] = $row3['drive_type'];
      $output1['brake_system'] = $row3['brake_system'];
      $output1['front_track_width'] = $row3['front_track_width'];
      $output1['rear_track_width'] = $row3['rear_track_width'];
      $output1['wheelbase'] = $row3['wheelbase'];
      $output1['front_wheel_diameter'] = $row3['front_wheel_diameter'];
      $output1['rear_wheel_diameter'] = $row3['rear_wheel_diameter'];
      $output1['rear_axle'] = $row3['rear_axle'];
      $output1['front_tire_type'] = $row3['front_tire_type'];
      $output1['front_tire_psi'] = $row3['front_tire_psi'];
      $output1['rear_tire_type'] = $row3['rear_tire_type'];
      $output1['rear_tire_psi'] = $row3['rear_tire_psi'];
      $output1['fuel_type'] = $row3['fuel_type'];
      $output1['fuel_quality'] = $row3['fuel_quality'];
      $output1['fuel_tank_one_capacity'] = $row3['fuel_tank_one_capacity'];
      $output1['fuel_tank_two_capacity'] = $row3['fuel_tank_two_capacity'];
      $output1['oil_capacity'] = $row3['oil_capacity'];
    }

    //end vehicle_specifications
    // vehicle_settings

    $query4 = "
    SELECT * FROM vehicle_settings WHERE vehicle_settings_id = :vehicle_settings_id
    ";
    $statement4 = $connect->prepare($query4);
    $statement4->execute(
      array(
        ':vehicle_settings_id' => $_POST["vehicle_details_id"]
      )
    );
    $result4 = $statement4->fetchAll();
    // print_r($result4);die();
    foreach ($result4 as $row4) {



      $output1['vehicle_settings_id'] = $row4['vehicle_settings_id'];

      $output1['primary_meter'] = $row4['primary_meter'];
      $output1['primary_current_reading'] = $row4['primary_current_reading'];
      $output1['primary_avg_usage'] = $row4['primary_avg_usage'];
      $output1['secondary_meter'] = $row4['secondary_meter'];
      $output1['secondary_current_reading'] = $row4['secondary_current_reading'];
      $output1['secondary_avg_usage'] = $row4['secondary_avg_usage'];
      $output1['fuel_unit'] = $row4['fuel_unit'];
      $output1['measurement_unit'] = $row4['measurement_unit'];

    }

    //end vehicle_settings
    echo json_encode($output1);



  }


////////////////////////////////////////////////////////// UPDATE TO DB


  if ($_POST['btn_action'] == 'Edit') {

    date_default_timezone_set("Asia/Dhaka");
    $create_date = date("Y-m-d H:i:s");
// echo "<pre>";print_r($_POST);
// vehicle details 

    $query1 = "UPDATE `vehicle_details` SET `user_id`=:user_id,`vehicle_name`=:vehicle_name,`vin_sn`=:vin_sn,`license_plate`=:license_plate,`type`=:type,`year`=:year,`make`=:make,`model`=:model,`trims`=:trims,`registration_state`=:registration_state,`photo`=:photo,`service_program`=:service_program,`status`=:status,`group`=:group,`operator`=:operator,`ownership`=:ownership,`color`=:color,`body_type`=:body_type,`body_subtype`=:body_subtype,`msrp`=:msrp,`linked_vehicles`=:linked_vehicles,`update_date`=:update_date WHERE vehicle_details_id =:vehicle_details_id";

    $statement1 = $connect->prepare($query1);
    $statement1->execute(
      array(

//        ':user_id' => $_SESSION['user_id'],
        ':user_id' => 1,
        ':vehicle_name' => $_POST['vehicle_name'],
        ':vin_sn' => $_POST['vin_sn'],
        ':license_plate' => $_POST['license_plate'],
        ':type' => $_POST['type'],
        ':year' => $_POST['year'],
        ':make' => $_POST['make'],
        ':model' => $_POST['model'],
        ':trims' => $_POST['trims'],
        ':registration_state' => $_POST['registration_state'],
        ':photo' => $_POST['photo_url'],
        ':service_program' => $_POST['service_program'],
        ':status' => $_POST['status'],
        ':group' => $_POST['group'],
        ':operator' => $_POST['operator'],
        ':ownership' => $_POST['ownership'],
        ':color' => $_POST['color'],
        ':body_type' => $_POST['body_type'],
        ':body_subtype' => $_POST['body_subtype'],
        ':msrp' => $_POST['msrp'],
        ':linked_vehicles' => $_POST['linked_vehicles'],
        ':update_date' => $create_date, 
        ':vehicle_details_id' => $_POST['vehicle_details_id']

      )
    );

    // if (!$statement1->execute()) {
    //   print_r($statement1->errorInfo());
    // }

    $result1 = $statement1->fetchAll();

        // vehicle lifecycle
    $query2 = "UPDATE  vehicles_lifecycle  SET  user_id =:user_id, in_service_date = :in_service_date , in_service_odometer = :in_service_odometer , estimated_service_life_months = :estimated_service_life_months , estimated_service_life_miles = :estimated_service_life_miles , estimated_resale_value = :estimated_resale_value , out_of_service_date = :out_of_service_date , out_of_service_odometer = :out_of_service_odometer, update_date = :update_date WHERE vehicles_lifecycles_id = :vehicles_lifecycles_id";
    $statement2 = $connect->prepare($query2);
    $statement2->execute(
      array(

//        ':user_id' => $_SESSION['user_id'],
        ':user_id' => 1,
        ':in_service_date' => $_POST['in_service_date'],
        ':in_service_odometer' => $_POST['in_service_odometer'],
        ':estimated_service_life_months' => $_POST['estimated_service_life_months'],
        ':estimated_service_life_miles' => $_POST['estimated_service_life_miles'],
        ':estimated_resale_value' => $_POST['estimated_resale_value'],
        ':out_of_service_date' => $_POST['out_of_service_date'],
        ':out_of_service_odometer' => $_POST['out_of_service_odometer'],
        ':update_date' => $create_date,
        ':vehicles_lifecycles_id' => $_POST['vehicles_lifecycles_id']

      )
    );

    // if (!$statement2->execute()) {
    //   print_r($statement2->errorInfo());
    // }

    $result2 = $statement2->fetchAll();


    // vehicle specifications
    $query3 = "UPDATE  vehicle_specifications  SET  user_id =:user_id, width = :width , height = :height , length = :length , interior_volume = :interior_volume , passenger_volume = :passenger_volume , cargo_volume = :cargo_volume , ground_clearence = :ground_clearence, bed_length = :bed_length , curv_weight = :curv_weight , gross_vehicle_weight_rating = :gross_vehicle_weight_rating , towing_capacity = :towing_capacity , max_payload = :max_payload , epa_city = :epa_city , epa_highway = :epa_highway , epa_combined = :epa_combined , engine_summary = :engine_summary , engine_brand = :engine_brand , aspiration = :aspiration , block_type = :block_type , bore = :bore , cam_type = :cam_type , compression = :compression , cylinders = :cylinders , displacement = :displacement , fuel_induction = :fuel_induction , max_hp = :max_hp , max_torque = :max_torque, redline_rpm = :redline_rpm , stroke = :stroke , valves = :valves , transmission_summary = :transmission_summary , transmission_brand = :transmission_brand , transmission_type = :transmission_type , transmission_gears = :transmission_gears , drive_type = :drive_type , brake_system = :brake_system , front_track_width = :front_track_width , rear_track_width = :rear_track_width , wheelbase = :wheelbase , front_wheel_diameter = :front_wheel_diameter , rear_wheel_diameter = :rear_wheel_diameter , rear_axle = :rear_axle , front_tire_type = :front_tire_type , front_tire_psi = :front_tire_psi , rear_tire_type = :rear_tire_type , rear_tire_psi = :rear_tire_psi , fuel_type = :fuel_type, fuel_quality = :fuel_quality , fuel_tank_one_capacity = :fuel_tank_one_capacity , fuel_tank_two_capacity = :fuel_tank_two_capacity , oil_capacity = :oil_capacity, update_date = :update_date WHERE vehicle_specifications_id = :vehicle_specifications_id";
    $statement3 = $connect->prepare($query3);
    $statement3->execute(
      array(

//        ':user_id' => $_SESSION['user_id'],
        ':user_id' => 1,
        ':width' => $_POST['width'],
        ':height' => $_POST['height'],
        ':length' => $_POST['length'],
        ':interior_volume' => $_POST['interior_volume'],
        ':passenger_volume' => $_POST['passenger_volume'],
        ':cargo_volume' => $_POST['cargo_volume'],
        ':ground_clearence' => $_POST['ground_clearence'],
        ':bed_length' => $_POST['bed_length'],
        ':curv_weight' => $_POST['curv_weight'],
        ':gross_vehicle_weight_rating' => $_POST['gross_vehicle_weight_rating'],
        ':towing_capacity' => $_POST['towing_capacity'],
        ':max_payload' => $_POST['max_payload'],
        ':epa_city' => $_POST['epa_city'],
        ':epa_highway' => $_POST['epa_highway'],
        ':epa_combined' => $_POST['epa_combined'],
        ':engine_summary' => $_POST['engine_summary'],
        ':engine_brand' => $_POST['engine_brand'],
        ':aspiration' => $_POST['aspiration'],
        ':block_type' => $_POST['block_type'],
        ':bore' => $_POST['bore'],
        ':cam_type' => $_POST['cam_type'],
        ':compression' => $_POST['compression'],
        ':cylinders' => $_POST['cylinders'],
        ':displacement' => $_POST['displacement'],
        ':fuel_induction' => $_POST['fuel_induction'],
        ':max_hp' => $_POST['max_hp'],
        ':max_torque' => $_POST['max_torque'],
        ':redline_rpm' => $_POST['redline_rpm'],
        ':stroke' => $_POST['stroke'],
        ':valves' => $_POST['valves'],
        ':transmission_summary' => $_POST['transmission_summary'],
        ':transmission_brand' => $_POST['transmission_brand'],
        ':transmission_type' => $_POST['transmission_type'],
        ':transmission_gears' => $_POST['transmission_gears'],
        ':drive_type' => $_POST['drive_type'],
        ':brake_system' => $_POST['brake_system'],
        ':front_track_width' => $_POST['front_track_width'],
        ':rear_track_width' => $_POST['rear_track_width'],
        ':wheelbase' => $_POST['wheelbase'],
        ':front_wheel_diameter' => $_POST['front_wheel_diameter'],
        ':rear_wheel_diameter' => $_POST['rear_wheel_diameter'],
        ':rear_axle' => $_POST['rear_axle'],
        ':front_tire_type' => $_POST['front_tire_type'],
        ':front_tire_psi' => $_POST['front_tire_psi'],
        ':rear_tire_type' => $_POST['rear_tire_type'],
        ':rear_tire_psi' => $_POST['rear_tire_psi'],
        ':fuel_type' => $_POST['fuel_type'],
        ':fuel_quality' => $_POST['fuel_quality'],
        ':fuel_tank_one_capacity' => $_POST['fuel_tank_one_capacity'],
        ':fuel_tank_two_capacity' => $_POST['fuel_tank_two_capacity'],
        ':oil_capacity' => $_POST['oil_capacity'],
        ':update_date' => $create_date,
        ':vehicle_specifications_id' => $_POST['vehicle_specifications_id']

      )
    );

    // if (!$statement3->execute()) {
    //   print_r($statement3->errorInfo());
    // }

    $result3 = $statement3->fetchAll();


    // vehicle settings
    $query4 = "UPDATE  vehicle_settings  SET  user_id =:user_id, primary_meter = :primary_meter , primary_current_reading = :primary_current_reading , primary_avg_usage = :primary_avg_usage , secondary_meter = :secondary_meter , secondary_current_reading = :secondary_current_reading , secondary_avg_usage = :secondary_avg_usage , fuel_unit = :fuel_unit, measurement_unit = :measurement_unit, update_date = :update_date WHERE vehicle_settings_id = :vehicle_settings_id";

    $statement4 = $connect->prepare($query4);
    $statement4->execute(
      array(

//        ':user_id' => $_SESSION['user_id'],
        ':user_id' => 1,
        ':primary_meter' => $_POST['primary_meter'],
        ':primary_current_reading' => $_POST['primary_current_reading'],
        ':primary_avg_usage' => $_POST['primary_avg_usage'],
        ':secondary_meter' => $_POST['secondary_meter'],
        ':secondary_current_reading' => $_POST['secondary_current_reading'],
        ':secondary_avg_usage' => $_POST['secondary_avg_usage'],
        ':fuel_unit' => $_POST['fuel_unit'],
        ':measurement_unit' => $_POST['measurement_unit'],
        ':update_date' => $create_date,
        ':vehicle_settings_id' => $_POST['vehicle_settings_id']

      )
    );

    // if (!$statement4->execute()) {
    //   print_r($statement4->errorInfo());
    // }

    $result4 = $statement4->fetchAll();

    // end vehicle_settings


    if (isset($result1)) {
      echo 'Vehicle Edited';
    }


//     date_default_timezone_set("Asia/Dhaka");
//     $create_date = date("Y-m-d H:i:s");
// // print_r($_POST['vehicle_details_id']);
//  $query = "UPDATE  vehicle_details  SET  user_id =:user_id, vehicle_name = :vehicle_name , vin_sn = :vin_sn , license_plate = :license_plate , type = :type , year = :year , make = :make , model = :model , trims = :trims, registration_state =:registration_state, photo = :photo , service_program = :service_program , status = :status , group = :group , operator = :operator , ownership = :ownership , color = :color , body_type = :body_type, body_subtype = :body_subtype , msrp = :msrp , linked_vehicles = :linked_vehicles , update_date = :update_date WHERE vehicle_details_id = :vehicle_details_id";

//     $statement = $connect->prepare($query);
//     $statement->execute(
//       array(

// //        ':user_id' => $_SESSION['user_id'],
//         ':user_id' => 1,
//         ':vehicle_name' => $_POST['vehicle_name'],
//         ':vin_sn' => $_POST['vin_sn'],
//         ':license_plate' => $_POST['license_plate'],
//         ':type' => $_POST['type'],
//         ':year' => $_POST['year'],
//         ':make' => $_POST['make'],
//         ':model' => $_POST['model'],
//         ':trims' => $_POST['trims'],
//         ':registration_state' => $_POST['registration_state'],
//         ':photo' => $_POST['photo_url'],
//         ':service_program' => $_POST['service_program'],
//         ':status' => $_POST['status'],
//         ':group' => $_POST['group'],
//         ':operator' => $_POST['operator'],
//         ':ownership' => $_POST['ownership'],
//         ':color' => $_POST['color'],
//         ':body_type' => $_POST['body_type'],
//         ':body_subtype' => $_POST['body_subtype'],
//         ':msrp' => $_POST['msrp'],
//         ':linked_vehicles' => $_POST['linked_vehicles'],
//         ':update_date' => $create_date,
//         ':vehicle_details_id' => $_POST['vehicle_details_id']


//       )
//     );

  

//     $result = $statement->fetchAll();
//     if (isset($result)) {
//       echo 'Vehicle Edited';
//     }
  }


///////////////////////////////////////////// DELETE


 if ($_POST['btn_action'] == 'delete') {

    date_default_timezone_set("Asia/Dhaka");
    $create_date = date("Y-m-d H:i:s");

    $vehicle_details_id = $_POST["vehicle_details_id"]; 
    $vehicles_lifecycles_id = $_POST["vehicles_lifecycles_id"]; 
    $vehicle_specifications_id = $_POST["vehicle_specifications_id"]; 
    $vehicle_settings_id = $_POST["vehicle_settings_id"]; 

        $status = 0;

        if ($_POST["status"] == 0) {
            $status = 1;
        }

    $query1 = "UPDATE  vehicle_details  SET  user_id = :user_id , update_date = :update_date ,  delete_status = :delete_status  WHERE vehicle_details_id = :vehicle_details_id";
    $statement = $connect->prepare($query1);
    $statement->execute(
      array(

//        ':user_id' => $_SESSION['user_id'],
        ':user_id' => 1,
        ':update_date' => $create_date,
        ':delete_status' => $status,
         
        ':vehicle_details_id' => $_POST['vehicle_details_id']

      )
    );

    // Lifecycle
    $query2 = "UPDATE  vehicles_lifecycle  SET  user_id = :user_id , update_date = :update_date ,  delete_status = :delete_status  WHERE vehicles_lifecycles_id = :vehicles_lifecycles_id";
    $statement = $connect->prepare($query2);
    $statement->execute(
      array(

//        ':user_id' => $_SESSION['user_id'],
        ':user_id' => 1,
        ':update_date' => $create_date,
        ':delete_status' => $status,
         
        ':vehicles_lifecycles_id' => $_POST['vehicles_lifecycles_id']

      )
    );
// Specifications
    $query3 = "UPDATE  vehicle_specifications  SET  user_id = :user_id , update_date = :update_date ,  delete_status = :delete_status  WHERE vehicle_specifications_id = :vehicle_specifications_id";
    $statement = $connect->prepare($query3);
    $statement->execute(
      array(

//        ':user_id' => $_SESSION['user_id'],
        ':user_id' => 1,
        ':update_date' => $create_date,
        ':delete_status' => $status,
         
        ':vehicle_specifications_id' => $_POST['vehicle_specifications_id']

      )
    );

    // Settings
    $query4 = "UPDATE  vehicle_settings  SET  user_id = :user_id , update_date = :update_date ,  delete_status = :delete_status  WHERE vehicle_settings_id = :vehicle_settings_id";
    $statement = $connect->prepare($query4);
    $statement->execute(
      array(

//        ':user_id' => $_SESSION['user_id'],
        ':user_id' => 1,
        ':update_date' => $create_date,
        ':delete_status' => $status,
         
        ':vehicle_settings_id' => $_POST['vehicle_settings_id']

      )
    );


    $result = $statement->fetchAll();
    if (isset($result)) {
      echo 'Vehicle Deleted';
    }
  }

}

?>
