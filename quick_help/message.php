<?php
error_reporting(0); 


ini_set('max_execution_time', 300); //300 seconds = 5 minutes
// temporarly extend time limit
set_time_limit(300);

session_start();
include('authenticate.php');
include('session.php');


//include quickbase token
include('quickbase_token.php');
include('quickbase_tables.php');

?>


<!DOCTYPE html>
<html lang="en">

<head>
 <title>
<?php include('header_title.php'); echo $header_tit; ?> - Welcome <?php echo $fullname; ?> </title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="keywords" content="landing page, website design" />

  <link rel="stylesheet" href="bootstrap.min.css">
    <script src="jquery.min.js"></script>
    <script src="bootstrap.min.js"></script>
<script src="moment.js"></script>
	<script src="livestamp.js"></script>

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">







<style>






/* navigation */


.left-column-all {
    overflow-x: hidden;
    position: fixed;
    z-index: 9999;
    width:50vw;
    height: 100vh;
    background: url(environment3.jpg) center no-repeat <?php echo $color6; ?>;
    background-size: cover;
    -webkit-background-size: cover;
    -moz-background-size: cover;
    -ms-background-size: cover;
    -o-background-size: cover;

/*
    margin-top: 0px;
    margin-left: 0px;
    */
}



@media screen and (max-width: 1440px) {
.left-column-all {
width:100vw;
width:100vh;

}

}
	
.right-column-all {
 margin-left:40vw;
/*
margin-left:47vw;
*/
}

@media screen and (max-width: 800px) {
.left-column-all {
    width: 100vw;
    position: inherit;
    background-position: inherit;
}

.right-column-all {
    margin-top: 0px;
margin-left: 0px;

}
}




/*ensure that category button does not jam about us or event section when on mobile start here. you can remove it if you
like. this will make product contain maximum of 8 categories button*/
@media screen and (max-width: 768px) {
.left-column-all {
   padding-bottom:700px;
}
}

@media screen and (max-width: 600px) {
.left-column-all {
   padding-bottom:700px;

}
}

/*ensure that category button does not jam about us or product section when on mobile ends here.*/




.section_padding {
padding: 60px 40px;
}

.imagelogo_li_remove {
list-style-type: none;
margin: 0;
 padding: 0;
}

.imagelogo_data{
 width:120px;
 height:80px;
}



  .navbar {
    letter-spacing: 1px;
    font-size: 14px;
    border-radius: 0;
    margin-bottom: 0;
   background-color: <?php echo $color6; ?>;

    z-index: 9999;
    border: 0;
    font-family: comic sans ms;
//color:white;
  }



  
.navbar-toggle {
background-color:orange;
  }

.navgate {
padding:16px;color:white;

}

.navgate:hover{
 color: black;
 background-color: orange;

}


.navbar-header{
height:60px;
}

.navbar-header-collapse-color {
background:white;
}

.dropdown_bgcolor{

background: #ec5574;
color:white;
}

.dropdown_dashedline{
 border-bottom: 2px dotted white;
}

.navgate101:hover{
background:purple;
color:white;

}





/* home starts */
  
.home_image {	
width:100%;
/*
height:500px;
max-height:500px;
*/
height:100vh;
max-height:100vh;
       
        
}

.home_content_head {
        color: white;
        font-size:40px;
        font-weight:bold;
	font-family:comic sans ms; 
width:40vw;
margin-left:-110px;
  
}

.home_content_text {
        color: white;
        font-size:20px;
        font-weight:bold;
	box-sizing: border-box;
      //position: relative;
        
}

.home{
background:#ec5574;
}

.home:hover{
box-shadow: inset 0 0 0 25px  <?php echo $color6; ?>;

}


.home_text_transparent_home {
border-style: solid; border-width:1px; border-color: orange;
  width: 100%;
  padding: 90px;
  position: absolute;
  bottom: 0px;
  background: rgba( 0, 0, 0, 0.50);

  color: white;
  height:100%;
text-align: center;

}



@media screen and (max-width: 768px) {
  .home_text_transparent_home{

  width: 100%;
  padding: 20px;
  }
}



@media screen and (max-width: 600px) {
  .home_content_home{
  width: 100%;
  padding: 20px  
  }
}





.creator_imagelogo_data{
 width:60px;
 height:60px;
}

/* make modal appear at center of the page */
.modal-appear-center {
margin-top: 25%;
//width:40%;
}


/* make modal appear at center of the page */
.modal-appear-center1 {
margin-top: 15%;
//width:40%;
}


.modal_head_color{
background-color: <?php echo $color6; ?>;
padding: 6px;
color:white;
}


.modal_footer_color{
background-color: <?php echo $color6; ?>;
padding: 6px;
color:white;
}

/*
modal_mobile_resize 

@media screen and (max-width: 600px) {
  .modal_mobile_resize {
    width: 100%;
    margin-top: 15%;
  }
}


*/



.btn_copyright{
//background: orange;
color:orange;
//padding:2px;
font-weight:200;
}


.btn_copyright:hover {
background: black;
color:pink;
font-weight:700;
}




/* footer */


  .navbar_footer {
letter-spacing: 1px;
    font-size: 14px;
    border-radius: 0;
    margin-bottom: 0;
    //background-color: <?php echo $color6; ?>;
    color:white;
    padding:20px;
    border: 0;
    font-family: comic sans ms;
  }


.footer_bgcolor{
background: black;
}

.footer_text1{
color:white;
font-size:20px;
border:none;
cursor:pointer;
}

.footer_text2{
color:grey;
font-size:14px;
border:none;
cursor:pointer;
}

.footer_text1:hover{
color:grey;
}


.footer_text2:hover{
color:orange;
}


.footer_dashedline{
 border-top: 1px dashed white;
}



.left_shifting{

width:40%;
}

@media screen and (max-width: 768px) {
.left-column-all {
width:100%;

}

.home_resize_padding {
padding-top:100px;
}


}



@media screen and (max-width: 600px) {
.left-column-all {
width:100%;

}

.home_resize_padding {
padding-top:100px;
}

}

.modaling_sizing{
width:59%;
}


@media screen and (max-width: 768px) {
.modaling_sizing {
width:99%;

}

.home_content_head {       
margin-left:0px; 
padding-top:10px;
width:100%;
text-align:center;
}


}

@media screen and (max-width: 600px) {
.modaling_sizing {
width:99%;
}

.home_content_head {       
margin-left:0px; 
padding-top:10px;
width:100%;
text-align:center; 
}



}

.category_post{
background-color: <?php echo $color6; ?>;
padding: 6px;
color:white;
font-size:14px;
border-radius: 15%;
border: none;
cursor: pointer;
text-align: center;
width:100%;
z-index: -999;
}
.category_post:hover {
background: black;
color:white;
}	







.e_search_form{
width: 38vw;
height:60px;
padding:10px;
cursor:pointer;
border:none;
border-radius:15%;
color:black;
font-size:16px;
background:white;

//transform: skew(-22deg);
margin-left:-90px;

}

.e_search_form:hover{

border-style: solid; border-width:4px; border-color: #824c4e;
background: #dddddd;
color: black;
}



@media screen and (max-width: 768px) {
  .e_search_form{

  width: 100%;
  padding: 20px;
margin-left:0px;
  }
}



@media screen and (max-width: 600px) {
  .e_search_form{
  width: 100%;
  padding: 20px 
margin-left:0px; 
  }
}





.readmore_btn{
background-color: <?php echo $color6; ?>;
padding: 6px;
color:white;
font-size:14px;
border-radius: 50%;
border: none;
cursor: pointer;
text-align: center;
//width:100%;
z-index: -999;
}
.readmore_btn:hover {
background: black;
color:white;
}	




</style>





    </head>
    <body>

 
</head>
<body>









<!--start left column all-->

    <div class="left-column-all left_shifting">

<!-- start column nav-->


<div class="text-center">
<nav class="navbar navbar-fixed-top">
  <div class="container">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navgator">
        <span class="navbar-header-collapse-color icon-bar"></span>
        <span class="navbar-header-collapse-color icon-bar"></span>
        <span class="navbar-header-collapse-color icon-bar"></span> 
        <span class="navbar-header-collapse-color icon-bar"></span>                       
      </button>
     
<li class="navbar-brand home_click imagelogo_li_remove" ><img class="img-rounded imagelogo_data" src="environment1.jpg"></li>
    </div>
    <div class="collapse navbar-collapse" id="navgator">

      <ul class="nav navbar-nav navbar-right">

 <li class="navgate_no">
<a title='Create New Post' href="create_post.php" style="color:white;font-size:14px;" ><button class="category_post">Create <?php echo $poster; ?></button></a>


</button>

</li>       
<li class="navgate_no"><a class='img-circle' title='View Dashboard' href="dashboard.php" style="border-style: solid; border-width:4px; border-color:orange;color:white;font-size:14px;"><button class="category_post">Back to Dashboard</button></a></li>


<li class="navgate">

<span class="dropdown">
  <a style="color:white;font-size:14px;cursor:pointer;" title='View More Data' class="btn1 btn-default1 dropdown-toggle"  data-toggle="dropdown">
<img style="max-height:60px;max-width:60px;" class="img-circle" width="60px" height="60px" src="<?php echo $photo_sess_data; ?>" alt='User Image'>

More<span class="caret"></span></a>

<ul class="dropdown-menu">
<b style='color:black;'>(<?php echo $fullname_sess_data; ?>)</b><br><br>
<li><a title='My Profile' href="profile_base.php"><span style='font-size:30px;color:<?php echo $color6; ?>;' class='fa fa-user'></span> My Profile/Posts</a></li><p></p>





<li><a title='Logout' href="logout.php"><span style='font-size:30px;color:<?php echo $color6; ?>;' class='fa fa-sign-out'></span> Logout</a></li>

</ul></span>

</li>


      </ul>




    </div>
  </div>



</nav>


    </div><br /><br />

<!-- end column nav-->





<div class="home_text_transparent_home" >
<div class="home_resize_padding"> 


<p class="home_content_head pull-left">
<?php include('header_title.php'); echo $header_tit; ?></p>
<p class="home_content_text"></p>


<style>

.bbo{
background:red;
color:white;
}
.bbo:hover{
background:orange;
color: white;
}



</style>


<p><button class="category_post bbo" ><a style="color:white;" href="dashboard.php?token=<?php echo $token; ?>&username=<?php echo $usern; ?>">
Go Back to Dashboard</a></button></p>


</div> 
</div>


    </div>
<!--end left column all-->












<!--start right column all-->
    <div class="right-column-all">





<style>
.post_padding{
padding-top:120px;
   
}

.post_bgcolor{
background: #dddddd;
   
}


@media screen and (max-width: 600px) {
  .post_padding{
  padding-top:1px; 
 margin-top:-170px
  }
}

@media screen and (max-width: 700px) {
  .post_padding{
 padding-top:1px;
 margin-top:-170px
  }
}


.postbtn_dashedline{
  border-bottom: 2px dashed #ec5574;

}


.upload_progress{
padding:10px;
background:green;
color:white;
cursor:pointer;
min-width:30px;
}

#imageupload_preview
{
max-height:200px;
max-width:200px;
}



</style>
<!-- all post Section start -->
<div  class="post_padding section_padding post_bgcolor">


<!--start blog post row-->
 <div class="row">



<style>
.c_counter {
 padding:10px;
color:white;
background:purple;
border:none;
cursor:pointer;
}

.c_counter:hover {
color:white;
background:black;
}

.social_all{
 padding:6px;
color:white;
background:red;
border:none;
cursor:pointer;
border-radius:15%;

}

.s_icon {
color:white;
//background:black;
font-size:20px;
//border-radius:50%;
cursor:pointer;
}


.s_icon:hover {
color:white;
background:red;
}


</style>





















<style>

.post-css2{
background:<?php echo $color6; ?>;
color:white;
padding: 10px;
cursor:pointer;
border:none;
border-radius:50%;
}

.post-css2:hover{
background: orange;
color:black;
}

</style>

<h4>Private Messages between You and <?php echo htmlentities(htmlentities($_GET['fullname'])); ?></h4>

<div style="font-size:16px;color:black;background:white;padding:6px;border-radius:50%;" >
<center>Send Message to <?php echo htmlentities(htmlentities($_GET['fullname'])); ?></center></div><br>





<div style="border-style: dashed; border-width:2px; border-color: orange;background:#eeeeee;padding:10px;" class="row">



<?php 

$new_userid= htmlentities(htmlentities($_GET['userid']));
$new_id = htmlentities(htmlentities($_GET['id']));
$new_fullname = htmlentities(htmlentities($_GET['fullname']));
 ?>

        


<!--start form-->

<script>

$(document).ready(function(){
$('#msg_btn').click(function(){
	

var messaging = $("#messaging").val();
var rid ='<?php echo htmlentities(htmlentities($_GET['userid'])); ?>';
var connection_id ='<?php echo htmlentities(htmlentities($_GET['id'])); ?>';

if(messaging==""){
alert('Message cannot be Empty');
return false;
}


else{
$('#loader_l2').fadeIn(400).html('<br><div style="color:black;background:white;padding:10px;"><img src="ajax-loader.gif">&nbsp;Please Wait, Message is being sent...</div>');
var datasend = "messaging="+ messaging+'&rid='+rid+'&connection_id='+connection_id;
		
		$.ajax({
			
			type:'POST',
			url:'message_action.php',
			data:datasend,
                        crossDomain: true,
			cache:false,
			success:function(msg){



if(msg == 1){
alert('Message Successfully Sent..');			
$('#loader_l2').hide();
$('#result_l2').html("<div style='color:white;background:green;padding:10px;'>Message Successfully Sent</div>");
setTimeout(function(){ $('#result_l2').html(''); }, 5000);

window.location='message.php?id=<?php echo $new_id; ?>&fullname=<?php echo $new_fullname; ?>&token2=14-13&userid=<?php echo $new_userid; ?>';

				

		
}else{

alert('message submission Failed.');			
$('#loader_l2').hide();
$('#result_l2').html("<div style='color:white;background:red;padding:10px;'>Message submission Failed</div>");
setTimeout(function(){ $('#result_l2').html(''); }, 5000);				
	

}




			
			}
			
		});
		
		}
		
	})
					
});




</script>





<div class="col-sm-12 form-group">
<label>Enter Message</label>
<textarea  class="form-control contact_input_color" id="messaging" name="messaging" placeholder="Send Message"  required></textarea>
</div>



<br>





<div class="col-sm-12 form-group">
                        <div id="loader_l2"></div>
                        <div id="result_l2"></div>
</div>


<button type="button" id="msg_btn" class="category_post"  /> Send Message</button>
</div>







<!--end form-->



</div>






<?php


$uid = $userid_sess_data;
$userid_sess_data = $uid;


$r_id= htmlentities(htmlentities($_GET['userid']));
$connection_id= htmlentities(htmlentities($_GET['id']));
$fname1= htmlentities(htmlentities($_GET['fullname']));

$final_count = '0';




// query table users_connection table in quickbase.

$url5 = "https://api.quickbase.com/v1/records/query";
$ch5 = curl_init();
curl_setopt($ch5,CURLOPT_URL, $url5);
$useragent5 ='Mozilla/5.0 (Macintosh; Intel Mac OS X 10.7; rv:7.0.1) Gecko/20100101 Firefox/7.0.1';


$id_field= 3;
$post5 ='{
  "from": "'.$table_users_connection.'",
  "select": [
3,
    6,
10,
14
  ],

  "where": "{'.$id_field.'.CT.'.$connection_id.'}"

}
';


curl_setopt($ch5, CURLOPT_HTTPHEADER, array(
"QB-Realm-Hostname: $quickbase_domain",
"User-Agent: $useragent5",
"Authorization: QB-USER-TOKEN $access_token",
'Content-Type:application/json'
));  

//curl_setopt($ch5,CURLOPT_CUSTOMREQUEST,'GET');
curl_setopt($ch5,CURLOPT_CUSTOMREQUEST,'POST');

//curl_setopt($ch5,CURLOPT_CUSTOMREQUEST,'DELETE');
curl_setopt($ch5,CURLOPT_POSTFIELDS, $post5);
curl_setopt($ch5,CURLOPT_SSL_VERIFYPEER,0);
curl_setopt($ch5,CURLOPT_SSL_VERIFYHOST,0);
curl_setopt($ch5,CURLOPT_RETURNTRANSFER, true);
$response5 = curl_exec($ch5);

curl_close($ch5);

//print_r($response5);
$json5= json_decode($response5, true);

$num_field5 = $json5["metadata"]["numFields"];
$num_rec5 = $json5["metadata"]["numRecords"];



if($json5 == ''){
//if($rec_List1 == ''){
echo "
<script>
function reloadPage() {
location.reload();
}
</script>
<div style='background:red;color:white;padding:10px;'>No Network. Refresh page and ensure there is Internet Connection <br><br> <center><button class='readmore_btn' style='' title='Refresh Page' onclick='reloadPage()'>Refresh Page</button></center> </div>";
exit();
}




$cid = $json5["data"][0]["3"]["value"];
$userid_to_be_updated = $cid;
$db_s_id =$json5["data"][0]["6"]["value"];
$db_r_id =$json5["data"][0]["10"]["value"];




// update table users connection with the Message_counter starts here

$message_counter_field = 16;
$sender_userid_field = 6;
$reciever_userid_field = 10;


$url_update = "https://api.quickbase.com/v1/records";
$ch_update = curl_init();
curl_setopt($ch_update,CURLOPT_URL, $url_update);
$useragent_update ='Mozilla/5.0 (Macintosh; Intel Mac OS X 10.7; rv:7.0.1) Gecko/20100101 Firefox/7.0.1';

$post_updates='

{
  "to": "'.$table_users_connection.'",
  "data": [
    {


      "'.$message_counter_field.'": {
        "value": "'.$final_count.'"
      },

 "3": {
        "value": "'.$userid_to_be_updated.'"
      }

    }
  ],

 "fieldsToReturn": [
3,
    6,
    7,
    8,
14,
15
  ]

}

';


curl_setopt($ch_update, CURLOPT_HTTPHEADER, array(
"QB-Realm-Hostname: $quickbase_domain",
"User-Agent: $useragent_update",
"Authorization: QB-USER-TOKEN $access_token",
'Content-Type:application/json'
));  

//curl_setopt($ch_update,CURLOPT_CUSTOMREQUEST,'GET');
curl_setopt($ch_update,CURLOPT_CUSTOMREQUEST,'POST');

//curl_setopt($ch_update,CURLOPT_CUSTOMREQUEST,'DELETE');
curl_setopt($ch_update,CURLOPT_POSTFIELDS, $post_updates);
curl_setopt($ch_update,CURLOPT_SSL_VERIFYPEER,0);
curl_setopt($ch_update,CURLOPT_SSL_VERIFYHOST,0);
curl_setopt($ch_update,CURLOPT_RETURNTRANSFER, true);
$response_update = curl_exec($ch_update);

curl_close($ch_update);

//print_r($response_update);
$json_update = json_decode($response_update, true);

$updated_rec_id = $json_update["data"][0]["3"]["value"];

/*
if ($updated_rec_id !=''){

echo "success";
}else{
echo "failed";
}
*/


// update table users connection with the message_counter ends here




// query table message so that u can make updates later with msg Id.

$url5 = "https://api.quickbase.com/v1/records/query";
$ch5 = curl_init();
curl_setopt($ch5,CURLOPT_URL, $url5);
$useragent5 ='Mozilla/5.0 (Macintosh; Intel Mac OS X 10.7; rv:7.0.1) Gecko/20100101 Firefox/7.0.1';


$sender_id_field= 8;
$reciever_id_field=11;

$post5 ='{
  "from": "'.$table_messages.'",
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
14
  ],

  "where": "{'.$sender_id_field.'.EX.'.$db_s_id.'}AND{'.$reciever_id_field.'.EX.'.$db_r_id.'}"

}
';


curl_setopt($ch5, CURLOPT_HTTPHEADER, array(
"QB-Realm-Hostname: $quickbase_domain",
"User-Agent: $useragent5",
"Authorization: QB-USER-TOKEN $access_token",
'Content-Type:application/json'
));  

//curl_setopt($ch5,CURLOPT_CUSTOMREQUEST,'GET');
curl_setopt($ch5,CURLOPT_CUSTOMREQUEST,'POST');

//curl_setopt($ch5,CURLOPT_CUSTOMREQUEST,'DELETE');
curl_setopt($ch5,CURLOPT_POSTFIELDS, $post5);
curl_setopt($ch5,CURLOPT_SSL_VERIFYPEER,0);
curl_setopt($ch5,CURLOPT_SSL_VERIFYHOST,0);
curl_setopt($ch5,CURLOPT_RETURNTRANSFER, true);
$response5 = curl_exec($ch5);

curl_close($ch5);

//print_r($response5);
$json5= json_decode($response5, true);

$num_field5 = $json5["metadata"]["numFields"];
$num_rec5 = $json5["metadata"]["numRecords"];


$msg_id = $json5["data"][0]["3"]["value"];
$msg_id_to_be_updated = $msg_id;



//update message table starts here


$status_field =14;

$url_update2 = "https://api.quickbase.com/v1/records";
$ch_update2 = curl_init();
curl_setopt($ch_update2,CURLOPT_URL, $url_update2);
$useragent_update2 ='Mozilla/5.0 (Macintosh; Intel Mac OS X 10.7; rv:7.0.1) Gecko/20100101 Firefox/7.0.1';

$post_update2='

{
  "to": "'.$table_messages.'",
  "data": [
    {


      "'.$status_field.'": {
        "value": "seen"
      },

 "3": {
        "value": "'.$msg_id_to_be_updated.'"
      }

    }
  ],

 "fieldsToReturn": [
3,
6,
    7,
    8,
10,
16
  ]

}

';


curl_setopt($ch_update2, CURLOPT_HTTPHEADER, array(
"QB-Realm-Hostname: $quickbase_domain",
"User-Agent: $useragent_update2",
"Authorization: QB-USER-TOKEN $access_token",
'Content-Type:application/json'
));  

//curl_setopt($ch_update2,CURLOPT_CUSTOMREQUEST,'GET');
curl_setopt($ch_update2,CURLOPT_CUSTOMREQUEST,'POST');

//curl_setopt($ch_update2,CURLOPT_CUSTOMREQUEST,'DELETE');
curl_setopt($ch_update2,CURLOPT_POSTFIELDS, $post_update2);
curl_setopt($ch_update2,CURLOPT_SSL_VERIFYPEER,0);
curl_setopt($ch_update2,CURLOPT_SSL_VERIFYHOST,0);
curl_setopt($ch_update2,CURLOPT_RETURNTRANSFER, true);
$response_update2 = curl_exec($ch_update2);

curl_close($ch_update2);

//print_r($response_update2);
$json_update2 = json_decode($response_update2, true);

$updated_rec_id2 = $json_update2["data"][0]["3"]["value"];


// update table message table ends here




//finally display message results


// query table message so that u can make updates later with msg Id.

$url5 = "https://api.quickbase.com/v1/records/query";
$ch5 = curl_init();
curl_setopt($ch5,CURLOPT_URL, $url5);
$useragent5 ='Mozilla/5.0 (Macintosh; Intel Mac OS X 10.7; rv:7.0.1) Gecko/20100101 Firefox/7.0.1';


$sender_id_field= 8;
$reciever_id_field=11;

$post5 ='{
  "from": "'.$table_messages.'",
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
14
  ],

"where": "({'.$reciever_id_field.'.EX.'.$db_r_id.'}OR{'.$sender_id_field.'.EX.'.$db_r_id.'})AND({'.$reciever_id_field.'.EX.'.$db_s_id.'}OR{'.$sender_id_field.'.EX.'.$db_s_id.'})"

 
}
';


curl_setopt($ch5, CURLOPT_HTTPHEADER, array(
"QB-Realm-Hostname: $quickbase_domain",
"User-Agent: $useragent5",
"Authorization: QB-USER-TOKEN $access_token",
'Content-Type:application/json'
));  

//curl_setopt($ch5,CURLOPT_CUSTOMREQUEST,'GET');
curl_setopt($ch5,CURLOPT_CUSTOMREQUEST,'POST');

//curl_setopt($ch5,CURLOPT_CUSTOMREQUEST,'DELETE');
curl_setopt($ch5,CURLOPT_POSTFIELDS, $post5);
curl_setopt($ch5,CURLOPT_SSL_VERIFYPEER,0);
curl_setopt($ch5,CURLOPT_SSL_VERIFYHOST,0);
curl_setopt($ch5,CURLOPT_RETURNTRANSFER, true);
$response5 = curl_exec($ch5);

curl_close($ch5);

//print_r($response5);
$json5= json_decode($response5, true);

$num_field5 = $json5["metadata"]["numFields"];
$num_rec5 = $json5["metadata"]["numRecords"];


$msg_id = $json5["data"][0]["3"]["value"];
$msg_id_to_be_updated = $msg_id;


if($num_rec5 == 0){

echo "<div style='background:red;color:white;padding:10px;border:none'>No New Message Exist Yet Between <b>You</b> and  <b>($fname1)</b> .</div>";
}


foreach($json5['data'] as $v1){

$id = $v1['3']['value'];
$sender_photo = $v1['6']['value'];
$sender_name = $v1['7']['value']; 
$sender_id = $v1['8']['value'];
$reciever_photo = $v1['9']['value'];
$reciever_name = $v1['10']['value'];
$reciever_id = $v1['11']['value'];
$message = $v1['12']['value'];
$timing = $v1['13']['value'];
$status = $v1['14']['value'];







?>





<div class="notify_content_css col-sm-12" >
<?php 
if($sender_id == $uid){
?>


<p class="col-sm-12" style="color:black;padding:10px;background:#ddd">
<b>Sender Name:</b> You<br>
<a href='profile.php?id=<?php echo $reciever_id; ?>' class='pull-right post-css2' title='View Profile'>Profile</a>
<img style='max-height:60px;max-width:60px;' class='img-circle' src='<?php echo $reciever_photo; ?>'>
<br><b>Reciever Name:</b> <?php echo $reciever_name; ?><br>
<b> Message: </b> <?php echo $message;?>
<?php 
if($status == 'sent'){
echo "&nbsp;&nbsp;&nbsp;&nbsp;<i class='fa fa-check' style='font-size:30px;color:green;'></i>";
}

if($status == 'seen'){
echo "&nbsp;&nbsp;&nbsp;&nbsp;<i class='fa fa-check' style='font-size:30px;color:green;'></i><i class='fa fa-check' style='font-size:30px;color:blue;'></i>";
}

?>




<span style='color:#800000;'><b> Time: </b> <span data-livestamp="<?php echo $timing;?>"></span></span><br>
</p>
<?php
}
?>


<?php 
if($reciever_id == $uid){
?>


<p class="col-sm-12" style="color:black;padding:10px;background:#f1f1f1">
<b>Reciever Name:</b> You<br>
<a href='profile.php?id=<?php echo $sender_id; ?>' class='pull-right post-css2' title='View Profile'>Profile</a>
<img style='max-height:60px;max-width:60px;' class='img-circle' src='<?php echo $sender_photo; ?>'>
<br><b>Sender Name:</b> <?php echo $sender_name; ?><br>
<b> Message: </b> <?php echo $message;?>
<?php 
if($status == 'sent'){
echo "&nbsp;&nbsp;&nbsp;&nbsp;<i class='fa fa-check' style='font-size:30px;color:green;'></i>";
}
if($status == 'seen'){
echo "&nbsp;&nbsp;&nbsp;&nbsp;<i class='fa fa-check' style='font-size:30px;color:green;'></i><i class='fa fa-check' style='font-size:30px;color:blue;'></i>";
}
?>

<span style='color:#800000;'><b> Time: </b> <span data-livestamp="<?php echo $timing;?>"></span></span><br>
</p>
<?php
}
?>








</div>



<?php
}
?>



<style>

.map_css{
background: #ec5574;
color:white;
padding:4px;
cursor:pointer;
border:none;
border-radius:10%;
}

.map_css:hover{
background: black;
color:white;

}


.map_css1{
background: green;
color:white;
padding:6px;
cursor:pointer;
border:none;

}


.map_css1:hover{
background: purple;
color:white;

}





.title_css{
//background: green;
color:green;
cursor:pointer;
font-size:24px;

}


.title_css:hover{
//background: purple;
color:purple;

}



.seeking_css{
background: purple;
color:white;
padding:10px;
cursor:pointer;
border:none;
border-radius:25%;
font-size:20px;
}

.seeking_css:hover{
background: black;
color:white;

}



.offering_css{
background: green;
color:white;
padding:10px;
cursor:pointer;
border:none;
border-radius:25%;
font-size:20px;
}

.offering_css:hover{
background: black;
color:white;

}

</style>








</div>
<!--end blog post row-->
</div>
<!--all post section ends-->









<!-- footer Section start -->

<footer class=" navbar_footer text-center footer_bgcolor">

<div class="row">
        <div class="col-sm-12">

<p class="footer_text1"><?php echo $header_tit; ?></p>
<p class="footer_text2"><?php include('footer_title.php'); echo $footer_tit1; ?></p>
<br>

<p><?php echo $footer_tit2; ?><a class="btn_copyright" href="<?php echo $footer_tit3; ?>"><?php echo $footer_tit3; ?></a></p>
        </div>



        </div>

<br/>
  <p></p>
</footer>

<!-- footer Section ends -->
	




<div>
  <!--end right column all-->    







   
</body>
</html>


















