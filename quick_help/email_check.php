
<?php
error_reporting(0);


//include quickbase token
include('quickbase_token.php');
include('quickbase_tables.php');

//$table_users;
//echo $access_token;
//echo $quickbase_domain;



// check if username already exist in users table in quickbase.

if(isset($_POST['token']) && $_POST['token'] == '101201')
    {
$email = strip_tags($_POST['email']);


$url = "https://api.quickbase.com/v1/records/query";
$ch = curl_init();
curl_setopt($ch,CURLOPT_URL, $url);
$useragent ='Mozilla/5.0 (Macintosh; Intel Mac OS X 10.7; rv:7.0.1) Gecko/20100101 Firefox/7.0.1';


$email_field= 9;


$post ='{
  "from": "'.$table_users.'",
  "select": [
3,
    9
  ],

  "where": "{'.$email_field.'.CT.'.$email.'}"

}
';

//"where": "{'.$email_field.'.EX.'.$email.'}"

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

echo $num_rec;




}

?>

