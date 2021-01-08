<?php

include "dashboard/info_store/info_address.php";

///////////////////////////////////////////////////// base url


function base_url(){
  return sprintf(
    "%s://%s%s",
    isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] != 'off' ? 'https' : 'http',
    $_SERVER['SERVER_NAME'],
    $_SERVER['REQUEST_URI']
  );
}

$_SESSION['url'] = base_url();
$_SESSION['user_id'] = 1;

// echo $_SESSION['base_url'];

$url = explode('/', $_SESSION['url']);

 array_pop($url);


// print_r($base_url);

// print_r($url);

$base_url = implode("/",$url);

$_SESSION['base_url'] = $base_url.'/';

// echo "<br>";
// print_r($base_url);


/////////////////////////////////////////////////////////////////

                    
if (!empty($_SERVER['HTTP_CLIENT_IP']))   
  {
    $ip_address = $_SERVER['HTTP_CLIENT_IP'];
  }
//whether ip is from proxy
elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR']))  
  {
    $ip_address = $_SERVER['HTTP_X_FORWARDED_FOR'];
  }
//whether ip is from remote address
else
  {
    $ip_address = $_SERVER['REMOTE_ADDR'];
  }

 $visitor_visit_time = $_SERVER['REQUEST_TIME'];

 $visitor_visit_time = date("Y-m-d", $visitor_visit_time);
 
 // $actual_link = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http") . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
// echo $actual_link;
 $visitor_location = "";

// print_r($_SERVER);

 $query1 = "
        SELECT * FROM login_log WHERE visitor_ip = '$ip_address' AND visitor_visit_time = '$visitor_visit_time' ORDER BY createdate DESC LIMIT 1
        ";

        $statement1 = $connect->prepare($query1);
        $statement1->execute();

        $result1 = $statement1->fetchAll();

        // print_r($result1);


        $rowcount = $statement1->rowCount();

if($rowcount == 0)
{

$res = file_get_contents('https://www.iplocate.io/api/lookup/'.$ip_address);
$res = json_decode($res);

 $visitor_location = "Zip Code : ".$res->postal_code.", City : ".$res->city.", Division : ".$res->subdivision2.", Country : ".$res->country.", Latitude : ".$res->latitude.", Longitude : ".$res->longitude;

 // echo $visitor_location;

}

if(empty($visitor_location))
{
         $visitor_location = $result1[0]['visitor_location'];
    
}

$message = '';

if (isset($_POST["submit"])) {
    $user_name = $_POST['user_name'];
    $user_password = $_POST['user_password'];
    // echo $mail."<br>".$pass;
    $query = "SELECT * FROM farm_user WHERE user_name = :user_name";
    $statement = $connect->prepare($query);
    $statement->execute(
        array(
            'user_name' => $_POST["user_name"]
        )
    );
    $count = $statement->rowCount();
    if ($count > 0) {
        $result = $statement->fetchAll();
        foreach ($result as $row) {
            if ($row['user_delete'] == '0') {
                if (password_verify($_POST["user_password"], $row["user_password"])) {
                    $_SESSION['user_id'] = $row['user_id'];
                    $_SESSION['user_name'] = $row['user_name'];
                    $_SESSION['user_role'] = $row['permission_id'];

    $query = "
            INSERT INTO login_log (user_id, user_name, user_role_id, user_role_name, visitor_ip, visitor_location, visitor_visit_time) VALUES('$user_id', '$user_name', '$role_id', '$role_name','$ip_address','$visitor_location','$visitor_visit_time' )
            ";

        $statement = $connect->prepare($query);
        $statement->execute();

        $login_log_id = $connect->prepare("SELECT LAST_INSERT_ID()");
        $login_log_id->execute();
        
        $login_log_id_result = $login_log_id->fetchAll();
        
        $_SESSION['login_log_id'] = $login_log_id_result[0]['LAST_INSERT_ID()'];
                        // $_SESSION["user_name"] = $_POST["user_name"];  
                        header("location:dashboard/index");

                    
                } else {

                    $message = "<label>Wrong Password</label>";

                }
            } else {

                $message = "<label>Your account is disabled,<br> Contact with a Higher Authority.</label>";

            }
        }
    } else {
        $message = "<label>Wrong Username</labe>";
    }
}
?>
 <!DOCTYPE html>  
 <html>  
      <head>  
           <title>Fleet</title>  
          <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">  
           <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
           <style type="text/css">
             .container.card {
                padding: 40px;
                width: 680px;
                background: #eeeeeead;
                border-radius: 10px;
                position: relative;
/*                margin-top: 150px;
                margin-right: 150px;*/
                margin-top: -20px;
                margin-right: 500px;
            }
            html {
                background-image: url(dist/img/fleet_8.jpg);
                background-size: 1366px;
            }
            body {
                background-color: transparent;
            }
           </style>

      </head>  
      <body>  
           <br />  
           <div class="container card" style="width:340px;">  
                <label class="text-danger"></label>  
                <h3 align="center" style="margin: 0;">Fleet Management</h3><br />  
                <form class="pt-4" action="" method="post">
                    <input type='hidden' name='submitted' id='submitted' value='1'/>
                    <div class="form-group">
                        <input type="text" class="form-control form-control-lg" id="user_name"
                               name="user_name" placeholder="Username">
                    </div>
                    <div class="form-group">
                        <input type="password" class="form-control form-control-lg" id="user_password"
                               name="user_password" placeholder="Password">
                    </div>
                    <div style="text-align: center;" class="mt-3">
                        <p><b style="color:red;"><?php echo $message; ?></b></p>
                        <input type="submit" value="Login" name="submit"
                               class="btn btn-outline-primary font-weight-medium auth-form-btn">
                    </div>
                </form>
           </div>   
           <br />  
      </body>  
 </html>