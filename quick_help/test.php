<?PHP 

//include quickbase token
include('quickbase_token.php');
include('quickbase_tables.php');


$url="https://api.quickbase.com/v1/records";
$ch = curl_init();
curl_setopt($ch,CURLOPT_URL, $url);
$useragent ='Mozilla/5.0 (Macintosh; Intel Mac OS X 10.7; rv:7.0.1) Gecko/20100101 Firefox/7.0.1';




$tableId='bqxfc48m5';
$file = 'private.png'; 
$encode_file = base64_encode(file_get_contents($file)); 


$post = json_encode(array( "to" => $tableId, "data" => array( array( "20" => array( "value" => array( "fileName" => $file, "data" => $encode_file ) ) ) ) ));
 

$file_field =20;

$post1='

{
  "to": "'.$tableId.'",
  "data": [
    {

      
"'.$file_field.'": {
        "value": "'.$encode_file.'"
      }




    }
  ],

 "fieldsToReturn": [
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
17,
18,
19
  ]

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

print_r($response);
$json = json_decode($response, true);

//$num_field = $json["metadata"]["numFields"];
//$num_rec = $json["metadata"]["numRecords"];







 ?>?