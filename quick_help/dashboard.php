<?php
error_reporting(0); 
ini_set('max_execution_time', 300); //300 seconds = 5 minutes
// temporarly extend time limit
set_time_limit(300);
?>



<?php

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
 <title><?php include('header_title.php'); echo $header_tit; ?> - Welcome <?php echo $fullname_sess_data; ?> </title>
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
   background-color:<?php echo $color6; ?>;

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

background: <?php echo $color6; ?>;
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
background:<?php echo $color6; ?>;
}

.home:hover{
box-shadow: inset 0 0 0 25px <?php echo $color6; ?>;

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
    //background-color:<?php echo $color6; ?>;
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
border-radius: 20%;
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



<style>

.notify_count { color: #FFF; display: block; float: right; border-radius: 12px; border: 1px solid #2E8E12; background: #34BB0C; padding: 2px 6px;font-size:14px; }
.notify_count1 { color:#FFF; display: block; float: right; border-radius: 12px; border: 1px solid #2E8E12; background: purple; padding: 2px 6px;font-size:14px; }

</style>



<!--start left column all-->

    <div class="left-column-all left_shifting">

<!-- start column nav-->

<script>

// stopt all bootstrap drop down menu from closing on click inside
$(document).on('click', '.dropdown-menu', function (e) {
  e.stopPropagation();
});


</script>



<!--Load Total Post Counts starts here-->

<style>


.res_center_css{
position:absolute;top:50%;left:50%;margin-top: -50px;margin-left -50px;width:100px;height:100px;
}
</style>
<script>

$(document).ready(function(){

var userid_sess_data = 'post';
$("#loader_pcounts").fadeIn(400).html('<br><div style="color:black;background:white;padding:10px;">Please Wait. Informations Loadings.....<i class="fa fa-spinner fa-spin" style="font-size:20px"></i></div>');
var datasend = {userid_sess_data:userid_sess_data};

//alert(userid_sess_data);
	
		$.ajax({
			
			type:'POST',
			url:'post_counts.php',
			data:datasend,
                        crossDomain: true,
			cache:false,
			success:function(msg){


$("#loader_pcounts").hide();
$("#result-notify_pcounts").html(msg);
//setTimeout(function(){ $('#result_pcounts').html(''); }, 5000);	


			
	
}
			
		});
		
		

});


</script>




<div class='res_center_css' id="loader_pcounts"></div>
<div id="result_pcounts"></div>

<!--Load Total Post Counts ends here-->



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

<li>
<a>
<button class="category_post" data-toggle="modal" data-target="#myModal_search" 
title="Content Search" >
<i style='font-size:20px;color:orange;' class='fa fa-search'></i>Search Posts</button></a>


<span class="category_post" data-toggle="modal" data-target="#myModal_search_members" 
title="Members Search" class="">
<i style='font-size:20px;color:orange;' class='fa fa-user-plus'></i>Search Members</span>



</li>




             
 <li class="navgate_no">
<a title='Create New Post' href="create_post.php" style="color:white;font-size:14px;" ><button class="category_post">Create <?php echo $poster; ?></button></a>


<b style='font-family:comic sans ms;color:orange;'>(I am <?php echo $username_sess_data; ?>)</b>


</li>       
<li class="navgate_no"><a title='View Dashboard' href="dashboard.php" style="color:white;font-size:14px;"><button class="category_post">Dashboard</button></a></li>


<!--start Request call-->




<script>

$(document).ready(function(){

var userid_sess_data = '<?php echo $userid_sess_data; ?>';
$("#loader-notify_alert_friends").fadeIn(400).html('<br><div style="color:black;background:white;padding:10px;"><i class="fa fa-spinner fa-spin" style="font-size:20px"></i></div>');
var datasend = {userid_sess_data:userid_sess_data};

//alert(userid_sess_data);
	
		$.ajax({
			
			type:'POST',
			url:'notify_alert_friends.php',
			data:datasend,
                        crossDomain: true,
			cache:false,
			success:function(msg){


$("#loader-notify_alert_friends").hide();
$("#result-notify_alert_friends").html(msg);
//setTimeout(function(){ $('#result-notify_alert_friends').html(''); }, 5000);	


			
	
}
			
		});
		
		

});


</script>




<?php

/*
//nrt is notification request table

$nrt_reciever_id_field =11;
$nrt_status_field = 12;
$nrt_status_value = 0;

$url_nrt = "https://api.quickbase.com/v1/records/query";
$ch_nrt = curl_init();
curl_setopt($ch_nrt,CURLOPT_URL, $url_nrt);
$useragent_nrt ='Mozilla/5.0 (Macintosh; Intel Mac OS X 10.7; rv:7.0.1) Gecko/20100101 Firefox/7.0.1';

$data_params_nrt ='{
  "from": "'.$table_notification_request.'",
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

  "where": "{'.$nrt_reciever_id_field.'.CT.'.$userid_sess_data.'}"

}
';





curl_setopt($ch_nrt, CURLOPT_HTTPHEADER, array(
"QB-Realm-Hostname: $quickbase_domain",
"User-Agent: $useragent_nrt",
"Authorization: QB-USER-TOKEN $access_token",
'Content-Type:application/json'
));  

//curl_setopt($ch_nrt,CURLOPT_CUSTOMREQUEST,'GET');
curl_setopt($ch_nrt,CURLOPT_CUSTOMREQUEST,'POST');

//curl_setopt($ch_nrt,CURLOPT_CUSTOMREQUEST,'DELETE');
curl_setopt($ch_nrt,CURLOPT_POSTFIELDS, $data_params_nrt);
curl_setopt($ch_nrt,CURLOPT_SSL_VERIFYPEER,0);
curl_setopt($ch_nrt,CURLOPT_SSL_VERIFYHOST,0);
curl_setopt($ch_nrt,CURLOPT_RETURNTRANSFER, true);
$response_nrt = curl_exec($ch_nrt);

curl_close($ch_nrt);

//print_r($response_nrt);
$json_nrt = json_decode($response_nrt, true);
$count_nrt = $json_nrt["metadata"]["numRecords"];


*/


?>

<li>
<span style='color:white;' class="dropdown fa fa-user-plus">
  <a style="color:white;font-size:14px;cursor:pointer;" title='Friends Request List' class="btn1 btn-default1 dropdown-toggle" data-toggle="dropdown">
  <span class="notify_count"><span id='loader-notify_alert_friends'></span><span id='result-notify_alert_friends'></span></span>
</a>
<?php echo $count_nrt; ?>

<ul class="dropdown-menu" style='width:350px;height: 400px;overflow-y : scroll;'>
<h4 style='color:blue;'>Your Friends Request List</h4>



<script>

$(document).ready(function(){

var sender_id='<?php echo $userid_sess_data; ?>';
var sender_username='<?php echo $username_sess_data; ?>';

if(sender_id ==''){
alert('something is wrong with Senders Id');
}


else{


$("#loader-load-notify-friends-request1").fadeIn(400).html('<br><div style="color:black;background:#ddd;padding:10px;"><img src="ajax-loader.gif">&nbsp;Please Wait,Loading Your Friends Request Data...</div>');
var datasend = {sender_id:sender_id, sender_username:sender_username};


	
		$.ajax({
			
			type:'POST',
			url:'notification_request_load.php',
			data:datasend,
                        crossDomain: true,
			cache:false,
			success:function(msg){

$("#loader-load-notify-friends-request1").hide();
$("#result-load-notify-friends-request1").html(msg);
//setTimeout(function(){ $('#result-load-notify-friends-request').html(''); }, 5000);				

//location.reload();	
}
			
		});
		
		}


});




</script>



<!--form START-->
<div id="loader-load-notify-friends-request1"></div>
<div id="result-load-notify-friends-request1"></div>


<!--form ENDS-->


<p></p>

</ul></span>
&nbsp;&nbsp;&nbsp;

</li>

<!--end Request call-->






<script>

$(document).ready(function(){

var userid_sess_data = '<?php echo $userid_sess_data; ?>';
$("#loader-notify_alert_posts").fadeIn(400).html('<br><div style="color:black;background:white;padding:10px;"><i class="fa fa-spinner fa-spin" style="font-size:20px"></i></div>');
var datasend = {userid_sess_data:userid_sess_data};

//alert(userid_sess_data);
	
		$.ajax({
			
			type:'POST',
			url:'notify_alert_posts.php',
			data:datasend,
                        crossDomain: true,
			cache:false,
			success:function(msg){

//alert(msg);

$("#loader-notify_alert_posts").hide();
$("#result-notify_alert_posts").html(msg);
//setTimeout(function(){ $('#result-notify_alert_posts').html(''); }, 5000);	


			
	
}
			
		});
		
		

});


</script>


<?php
/*

//npt is notification post table

$npt_reciever_id_field =11;
$npt_status_field = 12;
$npt_status_value = 0;

$url_npt = "https://api.quickbase.com/v1/records/query";
$ch_npt = curl_init();
curl_setopt($ch_npt,CURLOPT_URL, $url_npt);
$useragent_npt ='Mozilla/5.0 (Macintosh; Intel Mac OS X 10.7; rv:7.0.1) Gecko/20100101 Firefox/7.0.1';

$data_params_npt ='{
  "from": "'.$table_notification_post.'",
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
16

  ],

  "where": "{'.$npt_reciever_id_field.'.CT.'.$userid_sess_data.'}"

}
';





curl_setopt($ch_npt, CURLOPT_HTTPHEADER, array(
"QB-Realm-Hostname: $quickbase_domain",
"User-Agent: $useragent_npt",
"Authorization: QB-USER-TOKEN $access_token",
'Content-Type:application/json'
));  

//curl_setopt($ch_npt,CURLOPT_CUSTOMREQUEST,'GET');
curl_setopt($ch_npt,CURLOPT_CUSTOMREQUEST,'POST');

//curl_setopt($ch_npt,CURLOPT_CUSTOMREQUEST,'DELETE');
curl_setopt($ch_npt,CURLOPT_POSTFIELDS, $data_params_npt);
curl_setopt($ch_npt,CURLOPT_SSL_VERIFYPEER,0);
curl_setopt($ch_npt,CURLOPT_SSL_VERIFYHOST,0);
curl_setopt($ch_npt,CURLOPT_RETURNTRANSFER, true);
$response_npt = curl_exec($ch_npt);

curl_close($ch_npt);

//print_r($response_npt);
$json_npt = json_decode($response_npt, true);
$count_npt = $json_npt["metadata"]["numRecords"];


*/


?>


<!--start post comments  Call-->
<li>
<span style='color:white;' class="dropdown fa fa-bell">
  <a style="color:white;font-size:14px;cursor:pointer;" title='Posts, Comments and Like Alerts' class="btn1 btn-default1 dropdown-toggle"  data-toggle="dropdown">
  <span class="notify_count"><span id='loader-notify_alert_posts'></span><span id='result-notify_alert_posts'></span></span>
</a>

<ul class="dropdown-menu" style='width:350px;height: 400px;overflow-y : scroll;'>
<h4 style='color:blue;'>Posts, Comments and Like Alerts</h4>


<script>

$(document).ready(function(){


var sender_id='<?php echo $userid_sess_data; ?>';
var sender_username='<?php echo $username_sess_data; ?>';

if(sender_id ==''){
alert('something is wrong with Senders Id');
}


else{


$("#loader-load-notify-post").fadeIn(400).html('<br><div style="color:white;background:<?php echo $color6; ?>;padding:10px;"><img src="ajax-loader.gif">&nbsp;Please Wait,Loading Your Notification Alerts...</div>');
var datasend = {sender_id:sender_id, sender_username:sender_username};


	
		$.ajax({
			
			type:'POST',
			url:'notification_post_load.php',
			data:datasend,
                        crossDomain: true,
			cache:false,
			success:function(msg){

$("#loader-load-notify-post").hide();
$("#result-load-notify-post").html(msg);
//setTimeout(function(){ $('#result-load-notify-post(''); }, 5000);				

//location.reload();	
}
			
		});
		
		}


});



</script>



<!-- form START-->
<div id="loader-load-notify-post"></div>
<div id="result-load-notify-post"></div>


<!--form ENDS-->

<p></p>

</ul></span>
&nbsp;&nbsp;
</li>


<!--end post comments Call-->










<li class="navgate">

<span class="dropdown">
  <a style="color:white;font-size:14px;cursor:pointer;" title='View More Data' class="btn1 btn-default1 dropdown-toggle"  data-toggle="dropdown">
<img alt='Users Image' style="max-height:60px;max-width:60px;" class="img-circle" width="60px" height="60px" src="<?php echo $photo_sess_data; ?>">

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





<div class="home_text_transparent_home_no" >
<div class="home_resize_padding"> 


<p class="home_content_head pull-left"><?php include('header_title.php'); echo $header_tit; ?></p>
<p class="home_content_text"></p>


<style>


.support_css{
//border-radius:25%;min-width:25vw;background:#c1c1c1; border-bottom: 2px dashed purple;
}

.support_css:hover{
background:white;color:black;
}



.senddata1_css{
background:<?php echo $color6; ?>;
color:white;
cursor:pointer;
border:none;
padding:2px;
border-radius:20%;
text-align:center

}


.senddata1_css:hover{
background:orange;color:white;

}

.chat_count { color: #FFF; display: block; float: right; border-radius: 12px; border: 1px solid #2E8E12; background: #34BB0C; padding: 2px 6px;font-size:14px; }
.chat_count1 { color:#FFF; display: block; float: right; border-radius: 12px; border: 1px solid #2E8E12; background: purple; padding: 2px 6px;font-size:14px; }


</style>



<br><br><br>

<br><br><br>

<div style="min-width:27vw;text-align:center; border-style: dashed; border-width:2px; border-color: orange;background:#eeeeee;padding:10px;color:black" class="">

<center><h4>Friends List</h4></center>




<script>



$(document).ready(function(){
$('.copy_btn').click(function(){

var copyData =  $(this).data('copylink');
    var $cp = $("<input>");
    $("body").append($cp);
    $cp.val(copyData).select();
    document.execCommand("copy");
    $cp.remove();

alert('Data Copied Successfully');

});
});









// load accepted Members starts here


$(document).ready(function(){
var user_email = "<?php echo $email_sess_data; ?>";

$('#loader_friends').fadeIn(400).html('<br><div class="well" style="color:white;padding:10px;background:#3b5998"><img src="ajax-loader.gif">&nbsp;Please Wait, Loading Connected Members Data...</div>');
$.ajax({
        url: 'request_members_accepted.php',
        type: 'get',
        dataType: 'JSON',
        data: {user_email:user_email},
        crossDomain: true,
        cache:false,
        success: function(response){

if(!response){
$('#loader_admin2a').hide();

//alert("You have not Accepted any Request Yet");

$("#result_friends").append("<div style='color:white;background:red;padding:10px;'>You have not Accepted any Request Yet.</div>");
$('#loader_friends').hide();




}

            var record_length = response.length;
            for(var i=0; i<record_length; i++){
                var id = response[i].id;
                var friend_fullname = response[i].sender_fullname;
                var friend_photo = response[i].sender_photo;
                var friend_email = response[i].sender_email;
                var friend_department = response[i].department;
                var friend_userid = response[i].sender_userid;
 var msg_counter = response[i].message_counter;

if(msg_counter ==''){
var msg_counter = 0;

}

if(msg_counter !=''){
var msg_counter = msg_counter;

}

var friend_dept = 'Members';
var friend_rec2 = "<div id='friendRecords' class='support_css'>" +


"<img src=" + friend_photo +"  style='border-radius:50%;width:40px;max-width:40px;height:40px;max-height:40px;'>" +


"<span style=''>&nbsp;&nbsp;" + friend_fullname + "</span>" +
"<span style=''>&nbsp;(" + friend_department + ")</span><br>" +



"<span style=''><a target='' href='profile.php?id="+ friend_userid +"&fullname="+ friend_fullname +"&userid="+ friend_userid +"'  class='senddata1_css col-sm-4' title='View Profile' alt='View Users Profile'>"+
"<span class='pull-right fa fa-eye'></span>View Profile</a></span>&nbsp;&nbsp;&nbsp;"+


"<span style=''><a target='' href='message.php?id="+ id +"&fullname="+ friend_fullname +"&userid="+ friend_userid +"'  class=' senddata1_css col-sm-7' title='Send Message' alt='Private Messages'>"+
"<span style='' class='chat_count'>"+ msg_counter +"</span><span class='pull-right s_icona fa fa-send'></span>Send Private Message</a></span>"+



                   "<br><br></div><p></p>";

                $("#result_friends").append(friend_rec2);

            }

$('#loader_friends').hide();
        }
    });
});


// load accepted members ends here

</script>



<div id="loader_friends"></div>
<div id="result_friends"></div>



</div>

<!--load A ends here-->





<br><br>











</div><br><br>

</div> 
</div>


    </div>
<!--end left column all-->














<!--start right column all-->
    <div class="right-column-all">




<style>
.post_padding{
padding-top:70px;
   
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



/* restrict responsive image to max size of 400px */
.responsive_image1 {
  width: 100%;
  max-width: 400px;
  height: auto;
}

.responsive_image2{
  width: 100%;
  height: auto;
}

.responsive_video {
  width: 100%;
height: 400px;
  max-width: 500px;
  max-height: 600px;
  //height: auto;
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
<br>
<div style="background:#eeeeee;color:black;padding:10px;border-style: dashed; border-width:2px; border-color: orange;"
 class="col-sm-12">

<?php


//echo "Your session points: " .$session_points_data;

?>

<a title='Offering Help' style='position:relative;overflow:auto;float:left; z-index:5' href="dashboard_section.php?data_type=Offering-Help" class='offering_css' >Offering Help</a>
<a title='Seeking Help' style='position:relative;overflow:auto;float:right; z-index:5'  href="dashboard_section.php?data_type=Seeking-Help" class='offering_css' >Seeking Help</a>


<script>

$(document).ready(function(){
var tt=1;
$("#loader-category1").fadeIn(400).html('<br><div style="color:black;background:white;padding:10px;"><img src="ajax-loader.gif">&nbsp;Please Wait,Loading Searched Help Category Data...</div>');
var datasend = {tt:tt};


	
		$.ajax({
			
			type:'POST',
			url:'category_data_search.php',
			data:datasend,
                        crossDomain: true,
			cache:false,
			success:function(msg){

$("#loader-category1").hide();
$("#result-category1").html(msg);
//setTimeout(function(){ $('#result-category1').html(''); }, 5000);				
	
}
			
		});
		
		

});


</script>

<div id="loader-category1"></div>
<div id="result-category1"></div>



</div>
<br><br>



</div>
<!--end blog post row-->


<!--start form post row-->
<div class="row">


<!--post start-->
<div class="blog_post_form col-sm-12 alerts alert-warning hide_this_form_on_submit_post" id="blog_tab1">

<!--form 1 starts-->
<div style="text-align:left;font-size:14px;font-family:verdana;color:black">


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
color:<?php echo $color6; ?>;
cursor:pointer;
font-size:24px;

}


.title_css:hover{
//background: purple;
color:purple;

}



.seeking_css{
background: #c1c1c1;
color:black
padding:10px;
cursor:pointer;
border:none;
border-radius:25%;
font-size:16px;
}

.seeking_css:hover{
background: black;
color:white;

}



.offering_css{
background: #c1c1c1;
color:black;
padding:10px;
cursor:pointer;
border:none;
border-radius:25%;
font-size:16px;
}

.offering_css:hover{
background: black;
color:white;

}



.cat_cssa{
background: <?php echo $color6; ?>;
color:white;
padding:10px;
cursor:pointer;
border:none;
border-radius:25%;
font-size:16px;
}

.cat_cssa:hover{
background: black;
color:white;

}



</style>
      
</div>
<!--form 1 ends-->


</div>

<!--post end-->


</div>
<!--end form post row-->









<!-- Main Post Database query starts here -->






        <script src="publish_post.js" type="text/javascript"></script>
       
       <script>



$(document).ready(function(){

//url: 'post_loadmore_hotspots.php',

    $('.loadPost').click(function(){
        var postRow = Number($('#postRow').val());
        var postCount = Number($('#pCounter').val());
        postRow = postRow + 5;

        if(postRow <= postCount){
            $("#postRow").val(postRow);

            $.ajax({
                url: 'post_loadmoreData.php',
                type: 'post',
                data: {postRow:postRow},
                beforeSend:function(){
                    //$(".loadPost").text("Loading Data...");
$(".loadPost").html("<span class='loader_post'></span> Loading Data...");
                    $('.loader_post').fadeIn(400).html('<span><img src="loader.gif"></span>');

                },
                success: function(response){
                    setTimeout(function() {
                        $(".post:last").after(response).show().fadeIn("slow");
 
                        var rowno = postRow + 5;

//check number of row loaded
if(rowno > postCount){

var pRow = Number($('#postRow').val());
var pCount = Number($('#pCounter').val());

var remaining_row = pCount - pRow;

var pRow1 = pRow + remaining_row;
$(".no_of_row_loaded").text(pRow1);

}else{

$(".no_of_row_loaded").text(rowno);
}

                   
                        if(rowno > postCount){
                            $('.loadPost').text("No More Content to Load");
                              $('.loader_post').hide();
                        }else{
                            $(".loadPost").text("Load more");
                           $('.loader_post').hide();
                        }
                    }, 2000);
                   


                }
            });
        }

    });

});



</script>











<style>
.point_count { color: #FFF; display: block; float: right; border-radius: 12px; border: 1px solid #2E8E12; background: <?php echo $color6; ?>; padding: 2px 6px;font-size:20px; }
.point_count1 { color:#FFF; display: block; float: right; border-radius: 12px; border: 1px solid #2E8E12; background: purple; padding: 2px 6px;font-size:20px; }


</style>






<!--start loading post-->




        <div class="content">




            <?php

$row_per_page = 5;


//include quickbase token
//include('quickbase_token.php');
//include('quickbase_tables.php');


$post_type_field= 13;
$post_value= 'post';

$url = "https://api.quickbase.com/v1/records/query";
$ch = curl_init();
curl_setopt($ch,CURLOPT_URL, $url);
$useragent ='Mozilla/5.0 (Macintosh; Intel Mac OS X 10.7; rv:7.0.1) Gecko/20100101 Firefox/7.0.1';
// query Posts record

$post ='{
  "from": "'.$table_posts.'",
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
17,
18,
19,
20,
21,
22


  ],

 "where": "{'.$post_type_field.'.CT.'.$post_value.'}",

 "sortBy": [
    {
      "fieldId": 4,
      "order": "DESC"
    },
    {
      "fieldId": 5,
      "order": "DESC"
    }
  ],

  



"options": {
    "skip": 0,
    "top": '.$row_per_page.',
    "compareWithAppLocalTime": false
  }

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


//echo "<br><br>num field: "  .$json["metadata"]["numFields"]. "<BR><br>";
//echo "<br><br>num rec: "  .$json["metadata"]["numRecords"]. "<BR><br>";

$total_count = $json["metadata"]["totalRecords"];

if($json == ''){
//if($total_count == ''){
echo "
<script>
function reloadPage() {
location.reload();
}
</script>
<div style='background:red;color:white;padding:10px;'>No Network. Refresh page and ensure there is Internet Connection <br><br> <center><button class='readmore_btn' style='' title='Refresh Page' onclick='reloadPage()'>Refresh Page</button></center> </div>";
exit();
}


if($total_count == 0){
echo "<div style='background:red;color:white;padding:10px;'>No Post  has been Created Yet by members</div>";
}

 foreach($json['data'] as $v1){


          //echo $v1['3']['value'];

$id = $v1['3']['value'];
                $postid = $v1['3']['value'];
                $title = $v1['6']['value'];
                $title_seo = $v1['7']['value'];
                $content = $v1['8']['value'];
                $timing = $v1['9']['value'];
                $userid = $v1['10']['value'];
                $fullname = $v1['11']['value'];
                $photo = $v1['12']['value'];
                $post_type = $v1['13']['value'];
                $video = $v1['14']['value'];
                $category = $v1['15']['value'];
                $points = $v1['16']['value'];
                $offering = $v1['17']['value'];
                $offering1 = $v1['18']['value'];
                $address = $v1['19']['value'];

                $post_shortened = substr($content, 0, 90)."...";

$total_likes =$v1['20']['value'];
$total_unlikes =$v1['21']['value'];
 $total_comments =$v1['22']['value'];

	/*
	
//encrypt points to avoid cheating before passing it in the URL
$your_encryption_secret ='iamayoungprogrammerplease';
$points_encrypt = $points;
$encrypted_points=openssl_encrypt($points_encrypt ,"AES-128-ECB",$your_encryption_secret);
//$decrypted_points=openssl_decrypt($encrypted_points,"AES-128-ECB",$your_encryption_secret);
*/


                

   // }





            ?>
                
                <div class="post well" id="post_<?php echo $postid; ?>">


<style>
.post_css1{
background:#ddd;
color:black;
border:none;
padding:10px;
border-radius:20%;
}


.post_css1:hover{
background:orange;
color:black;


}



.help_css{
background:#ddd;
color:black;
border:none;
padding:10px;
border-radius:20%;
font-size:20px;
}


.help_css:hover{
background:orange;
color:black;


}




</style>

<div>

<?php
if($post_type){
?>
<img class='' style='border-style: solid; border-width:3px; border-color:<?php echo $color6; ?>; width:80px;height:80px; 
max-width:80px;max-height:80px;border-radius: 50%;' src='<?php echo $photo; ?>' title='Image'><br>
<b style='color:<?php echo $color6; ?>;font-size:18px;' >Name: <?php echo $fullname; ?> </b><br><br>

<?php } ?>

</div>


<div style='float:right;top:0px;right:0;margin-top:-150px;right:0px;'>
<span class='point_count'><span>Awards: </span> <?php echo $points; ?> Points</span>
<button class='post_css1'>
<a title='Click to access users Profile page' style='color:black;' href='profile.php?id=<?php echo $userid; ?>'>
<span style='font-size:20px;color:<?php echo $color6; ?>;' class='fa fa-user'></span> View Users Profile</a></button><br>

                        <div class="loader-request_<?php echo $postid; ?>"></div>
                        <div class="result-request_<?php echo $postid; ?>"></div>

<button class='post_css1'>
<a title=' Send Friends Request' style='color:black;' id="request_<?php echo $postid; ?>_<?php echo $userid; ?>" class="send_request"><span style='font-size:20px;color:<?php echo $color6; ?>;' class='fa fa-comments-o'></span> Send Friends Request</a></button>

</div>




<?php
if($post_type == 'post'){
?>

<?php
if($offering1 == 'Seeking-Help'){
?>
<div class='help_css'>Seeking <?php echo $poster2; ?> on (<?php echo $category; ?>)</div><br>

<?php } ?>



<?php
if($offering1 == 'Offering-Help'){
?>
<div class='help_css'>Offering <?php echo $poster2; ?> on (<?php echo $category; ?>)</div><br>

<?php } ?>

<b class='title_css'>Title: <?php echo $title; ?></b><br><br>
<b >Descriptions:</b><br><?php echo $post_shortened; ?> ....<br>
<b>Location:</b> <?php echo $address; ?> &nbsp; &nbsp; &nbsp;

<?php } ?>



<br><br>
<span><b> <span style='color:<?php echo $color6; ?>;' class='fa fa-calendar'></span>Time:</b>  <span data-livestamp="<?php echo $timing;?>"></span></span>



                        <div class="pc2">
<br>
<span data-title="<?php echo $title; ?>"  data-titleseo= "<?php echo $title_seo; ?>"  data-userid ="<?php echo $userid; ?>" data-points= "<?php echo $points; ?>" title="Like"  id="like_<?php echo $postid; ?>" style="font-size:26px;color:<?php echo $color6; ?>;cursor:pointer;" class="like fa fa-thumbs-up"></span>
 <span class="loaderLike_<?php echo $postid; ?>"></span>


&nbsp;&nbsp;(<span id="likes_<?php echo $postid; ?>"><?php echo $total_likes; ?></span>)
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;



<span data-title="<?php echo $title; ?>"  data-titleseo= "<?php echo $title_seo; ?>"  data-userid ="<?php echo $userid; ?>" data-points= "<?php echo $points; ?>" title="UnLike" id="unlike_<?php echo $postid; ?>" style="font-size:26px;color:<?php echo $color6; ?>;cursor:pointer;" class="unlike fa fa-thumbs-down"></span>
 <span class="loaderunLike_<?php echo $postid; ?>"></span>
&nbsp;&nbsp;(<span id="unlikes_<?php echo $postid; ?>"><?php echo $total_unlikes; ?></span>)



&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<span style="font-size:26px;color:<?php echo $color6; ?>;" class="fa fa-comments"></span> 
&nbsp;<span id="<?php echo $postid; ?>" style="cursor:pointer;" title="Comments" /><a title='Comments' style='color:black' href='next1.php?title=<?php echo $title_seo; ?>&pid=<?php echo $postid; ?>&uid=<?php echo $userid; ?>&tit=<?php echo $title; ?>'>Comments</a></span>
(<span id="comment_<?php echo $postid; ?>"><?php echo $total_comments; ?></span>)


<br>
<br>
<button class='readmore_btn btn btn-warning'><a title='Click to Read More and Comments' style='color:white;' 
href='next1.php?title=<?php echo $title_seo; ?>&pid=<?php echo $postid; ?>'>Click to Read-More & Comments</a></button>
</div>




                </div>

            <?php
            }
            ?>

            <h1 class="loadPost  category_post" title='Load More Post!'> Load More Posts</h1>


<?php
if($total_count < 5 || $total_count == 5){
?>
(<span class="no_of_row_loaded"><?php echo $total_count; ?></span> out of <span class="p"><?php echo $total_count; ?></span>)
 <?php } ?>

<?php
if($total_count > 5){
?>
(<span class="no_of_row_loaded">5</span> out of <span class="p"><?php echo $total_count; ?></span>)
 <?php } ?>

            <input type="hidden" id="postRow" value="0">
            <input type="hidden" id="pCounter" value="<?php echo $total_count; ?>">

        </div>



<!--End loading posts-->




<!-- Main Post Database query ends here-->





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





















<!-- search members modal starts here -->


<div class="container_search_members_modal">

  <div class="modal fade " id="myModal_search_members" role="dialog">
    <div class="modal-dialog modal-lg modal-appear-center1 pull-right modaling_sizing">
      <div class="modal-content">
        <div class="modal-header" style="color:black;background:#c1c1c1">
 <button type="button" class="pull-right btn btn-default" data-dismiss="modal">Close</button>
      <h4 class="modal-title">Community Members Search Engine</h4>
        </div>
        <div class="modal-body">

<h4>Search Community Members by Username FullName, Email Address etc.</h4><br>


<div style='background:#ddd;color:black;padding:10px;border-style: dashed; border-width:2px; border-color: orange;'>

<!--form START-->



        <script>
/*

$(document).ready(function(){
$(".search_members_btn").keyup(function() {

	//$('.search_btn').click(function(){

		
var search_data_members = $(this).val();
//var search_data_members = $('#search_data').val();
var ss= 'ok';

if(search_data_members==""){
//alert('Search Content cannot be empty');	
		}
else{
$('#loader_search_members').fadeIn(400).html('<br><span class="well alerts alert-info"><img src="ajax-loader.gif" align="absmiddle">&nbsp;Please Wait, Community Members is being Searched..</span>');
var datasend = "search_data="+ search_data_members + "&ss=" + ss;
		
		$.ajax({
			
			type:'POST',
			url:'search_members.php',
			data:datasend,
                        crossDomain: true,
			cache:false,
			success:function(msg){
	                       //$('#search_data_members').val('');
				
                                $("#result_search_members").html(msg);
				$('#alerts_search_members').delay(5000).fadeOut('slow');
                                $('#loader_search_members').hide();			
			}
			
		});
		
		}
		
	})
					
});
*/







// start searching
$(document).ready(function(){
    $('.search_members_btn').keyup(function(){ 
     

var search_data_members = $(this).val();
//var search_data_members = $('#search_data').val();


 if(search_data_members.length < 2) {
// ensure that user must type something first at least 2 characters before fetching database records
return false;
}
       var token = 101201;
$('#loader_search_members').fadeIn(400).html('<div style="background:orange;color:black;padding:10px;">Please Waiting Searching Data... <img src="loader.gif"> </div>');

 var ShowResult = $('#search_text');
           var datasend = "search_data_members="+ search_data_members + "&token=" + token;
            $.ajax({
            type : 'POST',
            data : datasend,
            url  : 'search_new.php',
            success: function(data){
ShowResult.html('<br><span id="alertdata" class="well alert alert-success"><font color=green>Your Searched Text <b>('+search_data_members+')</b> </font></span>');
  

                                $("#result_search_members").html(data);
				//$('#alerts_search_members').delay(5000).fadeOut('slow');
                                $('#loader_search_members').hide();



            }

            });
    });
});

// end searching




        </script>






<style>


.search_members_btn{
width:100%;
height:60px;
border-radius:20%;

}
.searching_res{
position:absolute;
//position:fixed;
z-index:999;
}

@media screen and (max-width: 600px) {
  .searching_res{
  //width: 56%;
 //top: 2px; 
 top: 20px; 
margin-left:86px; 
  }
}

@media screen and (max-width: 700px) {
  .searching_res{ 
  //width: 56%;
top:20px;
margin-left:86px;
  }
}

.searching_res_p{
cursor: wait;
padding: 20px;
background: <?php echo $color6; ?>;
color: white;
border-style: dashed; border-width:2px; border-color: orange;
}
.searching_res_p:hover{
background: black;
color: white;
}


.searching_res_p1{
cursor: wait;
padding: 20px;
background: red;
color: white;
border-style: dashed; border-width:2px; border-color: orange;
}
.searching_res_p1:hover{
background: black;
color: white;
}

</style>

<input type="text" class="search_members_btn" name="search_data_members" id="search_data_members" placeholder="Search Members by Email, Usernames, Fullname etc." />

<div id="loader_search_members"></div>

<div id="search_text"></div>
<div id="result_search_members" class='searching_res_members'></div>



<br><br>


</div><br><br>

<br><br>

<!--form ENDS-->


        </div>
        <div class="modal-footer" style="color:black;background:#c1c1c1">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
  </div>
</div>



<!--  search members modal ends here -->












<!--   search engine modal starts here -->


<div class="container_search_modal">

  <div class="modal fade " id="myModal_search" role="dialog">
    <div class="modal-dialog modal-lg modal-appear-center1 pull-right modaling_sizing">
      <div class="modal-content" style="height:500px;">
        <div class="modal-header" style="color:black;background:#c1c1c1">
 <button type="button" class="pull-right btn btn-default" data-dismiss="modal">Close</button>
      <h4 class="modal-title">Post Search Engine</h4>
        </div>
        <div class="modal-body">

          
You can Search <?php echo $poster; ?> based on Categories Types.<br>



<div style='background:#ddd;color:black;padding:10px;border-style: dashed; border-width:2px; border-color: orange;'>

<div class="col-sm-12 form-group">


<div class="dropdown">
  <button class="btn btn-default dropdown-toggle" type="button" data-toggle="dropdown">Select Category Type
  <span class="caret"></span></button>

<ul class="dropdown-menu col-sm-12">
<li><a href="dashboard_category.php?data_type=Child-Care">Child-Care</a></li>
<li><a href="dashboard_category.php?data_type=Elderly-Care">Elderly-Care</a></li>
<li><a href="dashboard_category.php?data_type=Delivery">Delivery</a></li>
<li><a href="dashboard_category.php?data_type=Transportations">Transportations</a></li>
<li><a href="dashboard_category.php?data_type=Repair">Repair</a></li>
<li><a href="dashboard_category.php?data_type=HandyWork">HandyWork</a></li>
<li><a href="dashboard_category.php?data_type=Professional-Services">Professional Services</a></li>
<li><a href="dashboard_category.php?data_type=Technology-Help">Technology Help</a></li>
<li><a href="dashboard_category.php?data_type=Opportunities-Careers">Opportunities-Careers</a></li>
<li><a href="dashboard_category.php?data_type=Jobs">Jobs</a></li>
<li><a href="dashboard_category.php?data_type=Foods">Foods</a></li>
<li><a href="dashboard_category.php?data_type=Others">Others</a></li>


</ul></div>
</div>




</div>




        </div>
        <div style='display:none;' class="modal-footer" style="color:black;background:#c1c1c1">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
  </div>
</div>



<!--  search engine modal ends here -->














   
</body>
</html>



















