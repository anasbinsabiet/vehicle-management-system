<?php

//vehicle name
function filled_vehicle_name($connect)
{
  $statement = $connect->prepare("SELECT * FROM vehicle_details WHERE delete_status = '0' ");
  $statement->execute();
  $result = $statement->fetchAll();
  $output = "<option value=''>Select</option>";

  foreach ($result as $row) {
    $output .= '<option value="' . $row['vehicle_details_id'] . '" >' . $row['vehicle_name'] . '</option>';
  }

  return $output;
}

function get_vehicle_name($connect, $vehicle)
{
  $statement = $connect->prepare("SELECT * FROM vehicle_details WHERE vehicle_details_id = '$vehicle' ");
  $statement->execute();
  $result = $statement->fetchAll();
  foreach ($result as $row) {
    return $row['vehicle_name'];
  }
}

//operator name
function filled_operator_name($connect)
{
  $statement = $connect->prepare("SELECT * FROM basic_information WHERE delete_status = '0' ");
  $statement->execute();
  $result = $statement->fetchAll();
  $output = "<option value=''>Select</option>";

  foreach ($result as $row) {
    $output .= '<option value="' . $row['bi_id'] . '" >' . $row['first_name'] .' '. $row['middle_name'] .' '.$row['last_name'] . '</option>';
  }

  return $output;
}

function get_operator_name($connect, $operator)
{
  $statement = $connect->prepare("SELECT * FROM basic_information WHERE bi_id = '$operator' ");
  $statement->execute();
  $result = $statement->fetchAll();
  foreach ($result as $row) {
    return $row['first_name'] .' '. $row['middle_name'] .' '.$row['last_name'];
  }
}

//vendor name

function filled_vendor_name($connect)
{
  $statement = $connect->prepare("SELECT * FROM vendors WHERE delete_status = '0' ");
  $statement->execute();
  $result = $statement->fetchAll();
  $output = "<option value=''>Select</option>";

  foreach ($result as $row) {
    $output .= '<option value="' . $row['vendors_id'] . '" >' .' '.$row['name'] . '</option>';
  }

  return $output;
}

function get_vendor_name($connect, $operator)
{
  $statement = $connect->prepare("SELECT * FROM vendors WHERE vendors_id = '$operator' ");
  $statement->execute();
  $result = $statement->fetchAll();
  foreach ($result as $row) {
    return $row['name'];
  }
}

//vehicle details type

function filled_type_name($connect)
{
  $statement = $connect->prepare("SELECT * FROM vehicle_details_type WHERE delete_status = '0' ");
  $statement->execute();
  $result = $statement->fetchAll();
  $output = "<option value=''>Select</option>";

  foreach ($result as $row) {
    $output .= '<option value="' . $row['type_id'] . '" >' .' '.$row['type'] . '</option>';
  }

  return $output;
}

function get_type_name($connect, $type)
{
  $statement = $connect->prepare("SELECT * FROM vehicle_details_type WHERE type_id = '$type' ");
  $statement->execute();
  $result = $statement->fetchAll();
  foreach ($result as $row) {
    return $row['type'];
  }
}

//vehicle details make

function filled_make_name($connect)
{
  $statement = $connect->prepare("SELECT * FROM vehicle_details_make WHERE delete_status = '0' ");
  $statement->execute();
  $result = $statement->fetchAll();
  $output = "<option value=''>Select</option>";

  foreach ($result as $row) {
    $output .= '<option value="' . $row['make_id'] . '" >' .' '.$row['make'] . '</option>';
  }

  return $output;
}

function get_make_name($connect, $make)
{
  $statement = $connect->prepare("SELECT * FROM vehicle_details_make WHERE make_id = '$make' ");
  $statement->execute();
  $result = $statement->fetchAll();
  foreach ($result as $row) {
    return $row['make'];
  }
}


//vehicle details model

function filled_model_name($connect)
{
  $statement = $connect->prepare("SELECT * FROM vehicle_details_model WHERE delete_status = '0' ");
  $statement->execute();
  $result = $statement->fetchAll();
  $output = "<option value=''>Select</option>";

  foreach ($result as $row) {
    $output .= '<option value="' . $row['model_id'] . '" >' .' '.$row['model'] . '</option>';
  }

  return $output;
}

function get_model_name($connect, $model)
{
  $statement = $connect->prepare("SELECT * FROM vehicle_details_model WHERE model_id = '$model' ");
  $statement->execute();
  $result = $statement->fetchAll();
  foreach ($result as $row) {
    return $row['model'];
  }
}

//vehicle details status

function filled_status_name($connect)
{
  $statement = $connect->prepare("SELECT * FROM vehicle_details_status WHERE delete_status = '0' ");
  $statement->execute();
  $result = $statement->fetchAll();
  $output = "<option value=''>Select</option>";

  foreach ($result as $row) {
    $output .= '<option value="' . $row['status_id'] . '" >' .' '.$row['status'] . '</option>';
  }

  return $output;
}

function get_status_name($connect, $status)
{
  $statement = $connect->prepare("SELECT * FROM vehicle_details_status WHERE status_id = '$status' ");
  $statement->execute();
  $result = $statement->fetchAll();
  foreach ($result as $row) {
    return $row['status'];
  }
}

//vehicle details group

function filled_group_name($connect)
{
  $statement = $connect->prepare("SELECT * FROM vehicle_details_group WHERE delete_status = '0' ");
  $statement->execute();
  $result = $statement->fetchAll();
  $output = "<option value=''>Select</option>";

  foreach ($result as $row) {
    $output .= '<option value="' . $row['group_id'] . '" >' .' '.$row['group'] . '</option>';
  }

  return $output;
}

function get_group_name($connect, $group)
{
  $statement = $connect->prepare("SELECT * FROM vehicle_details_group WHERE group_id = '$group' ");
  $statement->execute();
  $result = $statement->fetchAll();
  foreach ($result as $row) {
    return $row['group'];
  }
}

//vehicle details ownership

function filled_ownership_name($connect)
{
  $statement = $connect->prepare("SELECT * FROM vehicle_details_ownership WHERE delete_status = '0' ");
  $statement->execute();
  $result = $statement->fetchAll();
  $output = "<option value=''>Select</option>";

  foreach ($result as $row) {
    $output .= '<option value="' . $row['ownership_id'] . '" >' .' '.$row['ownership'] . '</option>';
  }

  return $output;
}

function get_ownership_name($connect, $ownership)
{
  $statement = $connect->prepare("SELECT * FROM vehicle_details_ownership WHERE ownership_id = '$ownership' ");
  $statement->execute();
  $result = $statement->fetchAll();
  foreach ($result as $row) {
    return $row['ownership'];
  }
}


//vehicle details body_type

function filled_body_type_name($connect)
{
  $statement = $connect->prepare("SELECT * FROM vehicle_details_body_type WHERE delete_status = '0' ");
  $statement->execute();
  $result = $statement->fetchAll();
  $output = "<option value=''>Select</option>";

  foreach ($result as $row) {
    $output .= '<option value="' . $row['body_type_id'] . '" >' .' '.$row['body_type'] . '</option>';
  }

  return $output;
}

function get_body_type_name($connect, $body_type)
{
  $statement = $connect->prepare("SELECT * FROM vehicle_details_body_type WHERE body_type_id = '$body_type' ");
  $statement->execute();
  $result = $statement->fetchAll();
  foreach ($result as $row) {
    return $row['body_type'];
  }
}

//vehicle details body_subtype

function filled_body_subtype_name($connect)
{
  $statement = $connect->prepare("SELECT * FROM vehicle_details_body_subtype WHERE delete_status = '0' ");
  $statement->execute();
  $result = $statement->fetchAll();
  $output = "<option value=''>Select</option>";

  foreach ($result as $row) {
    $output .= '<option value="' . $row['body_subtype_id'] . '" >' .' '.$row['body_subtype'] . '</option>';
  }

  return $output;
}

function get_body_subtype_name($connect, $body_subtype)
{
  $statement = $connect->prepare("SELECT * FROM vehicle_details_body_subtype WHERE body_subtype_id = '$body_subtype' ");
  $statement->execute();
  $result = $statement->fetchAll();
  foreach ($result as $row) {
    return $row['body_subtype'];
  }
}


//vehicle details drive_type

function filled_drive_type_name($connect)
{
  $statement = $connect->prepare("SELECT * FROM vehicle_details_drive_type WHERE delete_status = '0' ");
  $statement->execute();
  $result = $statement->fetchAll();
  $output = "<option value=''>Select</option>";

  foreach ($result as $row) {
    $output .= '<option value="' . $row['drive_type_id'] . '" >' .' '.$row['drive_type'] . '</option>';
  }

  return $output;
}

function get_drive_type_name($connect, $drive_type)
{
  $statement = $connect->prepare("SELECT * FROM vehicle_details_drive_type WHERE drive_type_id = '$drive_type' ");
  $statement->execute();
  $result = $statement->fetchAll();
  foreach ($result as $row) {
    return $row['drive_type'];
  }
}


//vehicle details brake_system

function filled_brake_system_name($connect)
{
  $statement = $connect->prepare("SELECT * FROM vehicle_details_brake_system WHERE delete_status = '0' ");
  $statement->execute();
  $result = $statement->fetchAll();
  $output = "<option value=''>Select</option>";

  foreach ($result as $row) {
    $output .= '<option value="' . $row['brake_system_id'] . '" >' .' '.$row['brake_system'] . '</option>';
  }

  return $output;
}

function get_brake_system_name($connect, $brake_system)
{
  $statement = $connect->prepare("SELECT * FROM vehicle_details_brake_system WHERE brake_system_id = '$brake_system' ");
  $statement->execute();
  $result = $statement->fetchAll();
  foreach ($result as $row) {
    return $row['brake_system'];
  }
}

//vehicle details fuel_type

function filled_fuel_type_name($connect)
{
  $statement = $connect->prepare("SELECT * FROM vehicle_details_fuel_type WHERE delete_status = '0' ");
  $statement->execute();
  $result = $statement->fetchAll();
  $output = "<option value=''>Select</option>";

  foreach ($result as $row) {
    $output .= '<option value="' . $row['fuel_type_id'] . '" >' .' '.$row['fuel_type'] . '</option>';
  }

  return $output;
}

function get_fuel_type_name($connect, $fuel_type)
{
  $statement = $connect->prepare("SELECT * FROM vehicle_details_fuel_type WHERE fuel_type_id = '$fuel_type' ");
  $statement->execute();
  $result = $statement->fetchAll();
  foreach ($result as $row) {
    return $row['fuel_type'];
  }
}


//vehicle details expense_type

function filled_expense_type_name($connect)
{
  $statement = $connect->prepare("SELECT * FROM vehicle_details_expense_type WHERE delete_status = '0' ");
  $statement->execute();
  $result = $statement->fetchAll();
  $output = "<option value=''>Select</option>";

  foreach ($result as $row) {
    $output .= '<option value="' . $row['expense_type_id'] . '" >' .' '.$row['expense_type'] . '</option>';
  }

  return $output;
}

function get_expense_type_name($connect, $expense_type)
{
  $statement = $connect->prepare("SELECT * FROM vehicle_details_expense_type WHERE expense_type_id = '$expense_type' ");
  $statement->execute();
  $result = $statement->fetchAll();
  foreach ($result as $row) {
    return $row['expense_type'];
  }
}

//vehicle details frequency

function filled_frequency_name($connect)
{
  $statement = $connect->prepare("SELECT * FROM vehicle_details_frequency WHERE delete_status = '0' ");
  $statement->execute();
  $result = $statement->fetchAll();
  $output = "<option value=''>Select</option>";

  foreach ($result as $row) {
    $output .= '<option value="' . $row['frequency_id'] . '" >' .' '.$row['frequency'] . '</option>';
  }

  return $output;
}

function get_frequency_name($connect, $frequency)
{
  $statement = $connect->prepare("SELECT * FROM vehicle_details_frequency WHERE frequency_id = '$frequency' ");
  $statement->execute();
  $result = $statement->fetchAll();
  foreach ($result as $row) {
    return $row['frequency'];
  }
}

//vehicle details fuel_level

function filled_fuel_level_name($connect)
{
  $statement = $connect->prepare("SELECT * FROM inspection_history_fuel_level WHERE delete_status = '0' ");
  $statement->execute();
  $result = $statement->fetchAll();
  $output = "<option value=''>Select</option>";

  foreach ($result as $row) {
    $output .= '<option value="' . $row['fuel_level_id'] . '" >' .' '.$row['fuel_level'] . '</option>';
  }

  return $output;
}

function get_fuel_level_name($connect, $fuel_level)
{
  $statement = $connect->prepare("SELECT * FROM inspection_history_fuel_level WHERE fuel_level_id = '$fuel_level' ");
  $statement->execute();
  $result = $statement->fetchAll();
  foreach ($result as $row) {
    return $row['fuel_level'];
  }
}

//vehicle details vehicle_condition_ok

function filled_vehicle_condition_ok_name($connect)
{
  $statement = $connect->prepare("SELECT * FROM inspection_history_vehicle_condition_ok WHERE delete_status = '0' ");
  $statement->execute();
  $result = $statement->fetchAll();
  $output = "<option value=''>Select</option>";

  foreach ($result as $row) {
    $output .= '<option value="' . $row['vehicle_condition_ok_id'] . '" >' .' '.$row['vehicle_condition_ok'] . '</option>';
  }

  return $output;
}

function get_vehicle_condition_ok_name($connect, $vehicle_condition_ok)
{
  $statement = $connect->prepare("SELECT * FROM inspection_history_vehicle_condition_ok WHERE vehicle_condition_ok_id = '$vehicle_condition_ok' ");
  $statement->execute();
  $result = $statement->fetchAll();
  foreach ($result as $row) {
    return $row['vehicle_condition_ok'];
  }
}


//vehicle details items_template

function filled_items_template_name($connect)
{
  $statement = $connect->prepare("SELECT * FROM inspection_forms_items_template WHERE delete_status = '0' ");
  $statement->execute();
  $result = $statement->fetchAll();
  $output = "<option value=''>Select</option>";

  foreach ($result as $row) {
    $output .= '<option value="' . $row['items_template_id'] . '" >' .' '.$row['items_template'] . '</option>';
  }

  return $output;
}

function get_items_template_name($connect, $items_template)
{
  $statement = $connect->prepare("SELECT * FROM inspection_forms_items_template WHERE items_template_id = '$items_template' ");
  $statement->execute();
  $result = $statement->fetchAll();
  foreach ($result as $row) {
    return $row['items_template'];
  }
}

//vehicle details color

function filled_color_name($connect)
{
  $statement = $connect->prepare("SELECT * FROM inspection_forms_color WHERE delete_status = '0' ");
  $statement->execute();
  $result = $statement->fetchAll();
  $output = "<option value=''>Select</option>";

  foreach ($result as $row) {
    $output .= '<option value="' . $row['color_id'] . '" >' .' '.$row['color'] . '</option>';
  }

  return $output;
}

function get_color_name($connect, $color)
{
  $statement = $connect->prepare("SELECT * FROM inspection_forms_color WHERE color_id = '$color' ");
  $statement->execute();
  $result = $statement->fetchAll();
  foreach ($result as $row) {
    return $row['color'];
  }
}

//vehicle contacts and users user type

function filled_user_type_name($connect)
{
  $statement = $connect->prepare("SELECT * FROM user_management_user_type WHERE delete_status = '0' ");
  $statement->execute();
  $result = $statement->fetchAll();
  $output = "<option value=''>Select</option>";

  foreach ($result as $row) {
    $output .= '<option value="' . $row['user_type_id'] . '" >' .' '.$row['user_type'] . '</option>';
  }

  return $output;
}

function get_user_type_name($connect, $user_type)
{
  $statement = $connect->prepare("SELECT * FROM user_management_user_type WHERE user_type_id = '$user_type' ");
  $statement->execute();
  $result = $statement->fetchAll();
  foreach ($result as $row) {
    return $row['user_type'];
  }
}

//vendors labels

function filled_labels_name($connect)
{
  $statement = $connect->prepare("SELECT * FROM vendors_labels WHERE delete_status = '0' ");
  $statement->execute();
  $result = $statement->fetchAll();
  $output = "<option value=''>Select</option>";

  foreach ($result as $row) {
    $output .= '<option value="' . $row['labels_id'] . '" >' .' '.$row['labels'] . '</option>';
  }

  return $output;
}

function get_labels_name($connect, $labels)
{
  $statement = $connect->prepare("SELECT * FROM vendors_labels WHERE labels_id = '$labels' ");
  $statement->execute();
  $result = $statement->fetchAll();
  foreach ($result as $row) {
    return $row['labels'];
  }
}

//number of vehicles count

function get_vehicles_number($connect)
{
  $statement = $connect->prepare("SELECT * FROM vehicle_details WHERE delete_status = '0' ");
  $statement->execute();
  $result = $statement->fetchAll();
  return $number_of_vehicles = count($result);
}

//number of vehicles count

//number of driver count

function get_user_number($connect)
{
  $statement = $connect->prepare("SELECT * FROM basic_information WHERE delete_status = '0'");
  $statement->execute();
  $result = $statement->fetchAll();
  return $number_of_user = count($result);
}

//number of vehicles count

//country


//vendors labels

function filled_country_name($connect)
{
  $statement = $connect->prepare("SELECT * FROM vendors_country WHERE delete_status = '0' ");
  $statement->execute();
  $result = $statement->fetchAll();
  $output = "<option value=''>Select</option>";

  foreach ($result as $row) {
    $output .= '<option value="' . $row['country_id'] . '" >' .' '.$row['country'] . '</option>';
  }

  return $output;
}

function get_country_name($connect, $country)
{
  $statement = $connect->prepare("SELECT * FROM vendors_country WHERE country_id = '$country' ");
  $statement->execute();
  $result = $statement->fetchAll();
  foreach ($result as $row) {
    return $row['country'];
  }
}

?>
