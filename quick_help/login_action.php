

<?php
error_reporting(0); 
session_start();

$email = strip_tags($_POST['email']);
$password = strip_tags($_POST['password']);


if ($email == ''){
echo "<div class='alert alert-danger' id='alerts_login'><font color=red>Email is empty</font></div>";
exit();
}


if ($password == ''){
echo "<div class='alert alert-danger' id='alerts_login'><font color=red>password is empty</font></div>";
exit();
}


// honey pot spambots
$emailaddress_pot =$_POST['emailaddress_pot'];
if($emailaddress_pot !=''){
//spamboot detected.
//Redirect the user to google site

echo "<script>
window.setTimeout(function() {
    window.location.href = 'https://google.com';
}, 1000);
</script><br><br>";

exit();
}





//include quickbase token
include('quickbase_token.php');
include('quickbase_tables.php');

//$table_users
//$access_token
//$quickbase_domain


// log users in via Quickbase  users table

$url = "https://api.quickbase.com/v1/records/query";
$ch = curl_init();
curl_setopt($ch,CURLOPT_URL, $url);
$useragent ='Mozilla/5.0 (Macintosh; Intel Mac OS X 10.7; rv:7.0.1) Gecko/20100101 Firefox/7.0.1';


$email_field= 9;


$post ='{
  "from": "'.$table_users.'",
  "select": [
3,

6,
7,
8,
9,
10,
11,
12,
13,
14,
15,
16,
17

  ],

  "where": "{'.$email_field.'.CT.'.$email.'}"

}
';


curl_setopt($ch, CURLOPT_HTTPHEADER, array(
"QB-Realm-Hostname: $quickbase_domain",
"User-Agent: $useragent",
"Authorization: QB-USER-TOKEN $access_token",
'Content-Type:application/json'
));  

//curl_setopt($ch,CURLOPT_CUSTOMREQUEST,'GET');
curl_setopt($ch,CURLOPT_CUSTOMREQUEST,'POST');

//curl_setopt($ch,CURLOPT_CUSTOMREQUEST,'DELETE');
curl_setopt($ch,CURLOPT_POSTFIELDS, $post);
curl_setopt($ch,CURLOPT_SSL_VERIFYPEER,0);
curl_setopt($ch,CURLOPT_SSL_VERIFYHOST,0);
curl_setopt($ch,CURLOPT_RETURNTRANSFER, true);
$response = curl_exec($ch);

curl_close($ch);

//print_r($response);
$json = json_decode($response, true);
$num_field = $json["metadata"]["numFields"];
$num_rec = $json["metadata"]["numRecords"];


if($json == ''){
//if($num_rec == ''){
echo "<div style='background:red;color:white;padding:10px;'>No Network. Ensure there is Internet Connection and try again..</div>";
exit();
}




        if($num_rec == 1){




//start hashed passwordless Security verify
if(password_verify($password,$json["data"][0]["7"]["value"])){
            //echo "Password verified and ok";




//session_start();
session_regenerate_id();

// initialize session if things where ok.




$_SESSION['uid1'] = $json["data"][0]["3"]["value"];
$_SESSION['fullname1'] = $json["data"][0]["8"]["value"];
$_SESSION['username1'] = $json["data"][0]["6"]["value"];
$_SESSION['email1'] = $json["data"][0]["9"]["value"];
$_SESSION['photo1'] = $json["data"][0]["10"]["value"];
$_SESSION['user_rank1'] = $json["data"][0]["11"]["value"];
$_SESSION['token1'] = $json["data"][0]["16"]["value"];
$_SESSION['usern1'] = $json["data"][0]["17"]["value"];
$_SESSION['points1'] = $json["data"][0]["14"]["value"];
$_SESSION['levels1'] = $json["data"][0]["15"]["value"];
$_SESSION['created_time1'] = $json["data"][0]["12"]["value"];


echo "<div class='alert alert-success'>Login sucessful <img src='ajax-loader.gif'></div>";
echo "<script>window.location='dashboard.php'</script>";



}
else{
echo "<div class='alert alert-danger' id='alerts_login'><font color=red>Password Does not Matched</font></div>";

}



}
else {
echo "<div class='alert alert-danger' id='alerts_login'><font color=red>User with This Email does not exist..</font></div>";
}






?>

<?php ob_end_flush(); ?>
