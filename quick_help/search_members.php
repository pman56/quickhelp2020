

<script>
//hide serach result starts here


$(document).ready(function(){
$('.search_hide_btn1').click(function(){

$('.search_hide').hide();
});
});


</script>





<?php

if($_POST)
{

$search=strip_tags($_POST['search_data']);



//echo "<br><br>";


session_start();
include('authenticate.php');
include('session.php');


//include quickbase token
include('quickbase_token.php');
include('quickbase_tables.php');


$username_field_query = 6;
$fullname_field_query = 8;
$email_field_query = 9;
$url3 = "https://api.quickbase.com/v1/records/query";
$ch3 = curl_init();
curl_setopt($ch3,CURLOPT_URL, $url3);
$useragent3 ='Mozilla/5.0 (Macintosh; Intel Mac OS X 10.7; rv:7.0.1) Gecko/20100101 Firefox/7.0.1';



$data_params3 ='{
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
13
  ],

  "where": "{'.$username_field_query.'.HAS.'.$search.'}OR{'.$fullname_field_query.'.HAS.'.$search.'}OR{'.$email_field_query.'.HAS.'.$search.'}"

}
';




curl_setopt($ch3, CURLOPT_HTTPHEADER, array(
"QB-Realm-Hostname: $quickbase_domain",
"User-Agent: $useragent3",
"Authorization: QB-USER-TOKEN $access_token",
'Content-Type:application/json'
));  

//curl_setopt($ch3,CURLOPT_CUSTOMREQUEST,'GET');
curl_setopt($ch3,CURLOPT_CUSTOMREQUEST,'POST');

//curl_setopt($ch3,CURLOPT_CUSTOMREQUEST,'DELETE');
curl_setopt($ch3,CURLOPT_POSTFIELDS, $data_params3);
curl_setopt($ch3,CURLOPT_SSL_VERIFYPEER,0);
curl_setopt($ch3,CURLOPT_SSL_VERIFYHOST,0);
curl_setopt($ch3,CURLOPT_RETURNTRANSFER, true);
$response3 = curl_exec($ch3);

curl_close($ch3);

//print_r($response3);
$json3 = json_decode($response3, true);

$count = $json3["metadata"]["numRecords"];



if (strlen($search)< 2) {
    //echo "less than 2";
echo "<div class='searching_res_p search_hide'>Enter Username, FullName or Email Address to Search Members<br>

<span class='search_hide_btn1 btn btn-sm btn-warning pull-right'>close</span>
</div>";
}


elseif ($count > 0)
{

foreach($json3['data'] as $v1){

ini_set('max_execution_time', 300); //300 seconds = 5 minutes
// temporarly extend time limit
set_time_limit(300);



$id = $v1['3']['value'];
$name = $v1['8']['value'];
$photo = $v1['10']['value'];
$status = $v1['11']['value'];		    

$d_name ="Searched members";

        echo "
<div class='searching_res_p search_hide'>
<a href='profile.php?id=$id'>
<img class='img-circle' src='$photo' style='width:40px;height:40p; float:left; margin-right:6px' />
<span style='font-size:16px; color:white'>Name: $name</span><br>
<span style='font-size:12px; color:grey'>Profession: $status</span><br>
<span class='search_hide_btn1 btn btn-sm btn-warning pull-right'>close</span>
</a>
</div>";

    }       

// while ends here


}else{

echo "<div id='alerts_search' class='alerts alert-danger searching_res_p1 search_hide'>Searched Members not Found... 
<span class='search_hide_btn1 btn btn-sm btn-warning pull-right'>close</span>
</div>";

}





}
?>
