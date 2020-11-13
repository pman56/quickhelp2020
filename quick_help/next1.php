<?php
error_reporting(0); 
?>



<?php

session_start();
include ('authenticate.php');
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




.category_post2{
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
.category_post2:hover {
background: orange;
color:black;
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
<img style="max-height:60px;max-width:60px;" class="img-circle" width="60px" height="60px" src="<?php echo $photo_sess_data; ?>"  title='User Image'>

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

.bbo{
background:red;
color:white;
}
.bbo:hover{
background:orange;
color: white;
}


.support_css{
border-radius:25%;min-width:25vw;background:#c1c1c1; border-bottom: 2px dashed purple;
}

.support_css:hover{
background:purple;color:white;
}

.senddata_css{
background:#3b5998;
color:white;
cursor:pointer;
border:none;
padding:6px;
border-radius:10%;
width:80px;
text-align:center

}


.senddata1_css{
background:#800000;
color:white;
cursor:pointer;
border:none;
padding:4px;
border-radius:20%;
width:100px;
text-align:center

}


.senddata_css:hover{
background:orange;color:white;

}
.senddata1_css:hover{
background:orange;color:white;

}




.post_category1{
background:#ec5574;
color:white;
cursor:pointer;
border:none;
padding:10px;
border-radius:20%;
width:100%;
text-align:center

}


.post_category1:hover{
background:orange;color:white;

}



.post_category2{
background:purple;
color:white;
cursor:pointer;
border:none;
padding:10px;
border-radius:20%;
width:100%;
text-align:center

}


.post_category2:hover{
background:orange;color:white;

}




.senddata_css2{
background:#34BB0C;
color:white;
cursor:pointer;
border:none;
padding:6px;
border-radius:20%;
min-width:100px;
text-align:center

}


.senddata_css2:hover{
background:orange;color:white;

}


</style>



<br><br><br>

<br><br><br>

<div style="min-width:27vw;text-align:center; border-style: dashed; border-width:2px; border-color: orange;background:#eeeeee;padding:10px;color:black" class="">

<center><h4 style='color:black;background:#ddd;padding:12px;'><a title='Back to Dashboard' style='color:black' href='dashboard.php'>Back to Dashboard</a></h4></center>










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
background: #ec5574;
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



<style>
.point_count { color: #FFF; display: block; float: right; border-radius: 12px; border: 1px solid #2E8E12; background: <?php echo $color6; ?>; padding: 2px 6px;font-size:20px; }
.point_count1 { color:#FFF; display: block; float: right; border-radius: 12px; border: 1px solid #2E8E12; background: purple; padding: 2px 6px;font-size:20px; }


</style>


<!--load post call starts here -->



            <?php
$title_seo = strip_tags($_GET['title']);
$postID_call = strip_tags($_GET['pid']);
$postid= $postID_call;


//$post_Userid_call = strip_tags($_GET['uid']);


//$title = strip_tags($_GET['tit']);
//$title_seo = strip_tags($_GET['title']);
//$points_encrypted =strip_tags($_GET['points_encrypted']);

$post_title_seo_field= 7;
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

 "where": "{'.$post_title_seo_field.'.CT.'.$title_seo.'}"

 
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
//$id_for_updates  = $json['data'][0]['3']['value'];


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
echo "<div style='background:red;color:white;padding:10px;'>Searched Post does not exist</div>";
exit();
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

                //$post_shortened = substr($content, 0, 90)."...";

$total_likes =$v1['20']['value'];
$total_unlikes =$v1['21']['value'];
 $total_comments =$v1['22']['value'];

	
	

                

   // }





            ?>


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



        <script src="publish_post.js" type="text/javascript"></script>


<div class='well'>



<div>

<?php
if($post_type){
?>
<img class='' style='border-style: solid; border-width:3px; border-color:<?php echo $color6; ?>; width:80px;height:80px; 
max-width:80px;max-height:80px;border-radius: 50%;' src='<?php echo $photo; ?>'  title='User Image'><br>
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
<b >Descriptions:</b><br><?php echo $content; ?> ....<br>
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
&nbsp;<span id="<?php echo $postid; ?>" style="cursor:pointer;" title="Comments" />Comments</span>
(<span id="comment_<?php echo $postid; ?>"><?php echo $total_comments; ?></span>)


<br>
</div>




                </div>

            <?php
            }
            ?>



//


<!--load post call ends here -->








<!-- Main comments Database query starts here -->


       
       <script>



$(document).ready(function(){


    $('.loadComment').click(function(){
        var postRow = Number($('#postRow').val());
        var postCount = Number($('#pCounter').val());
 var pid ='<?php echo $postid; ?>';
        postRow = postRow + 5;

        if(postRow <= postCount){
            $("#postRow").val(postRow);

            $.ajax({
                url: 'comment_loadmoreData.php',
                type: 'post',
                data: {postRow:postRow, pid:pid},
                beforeSend:function(){
                    //$(".loadComment").text("Loading More Comments...");
$(".loadComment").html("<span class='loader_comment'></span> Loading More Comments...");
                    $('.loader_comment').fadeIn(400).html('<span><img src="loader.gif"></span>');

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
                            $('.loadComment').text("No More Content to Load");
                              $('.loader_comment').hide();
                        }else{
                            $(".loadComment").text("Load more");
                           $('.loader_comment').hide();
                        }
                    }, 2000);
                   


                }
            });
        }

    });

});



</script>


        <div class="content">




            <?php



//include quickbase token
//include('quickbase_token.php');
//include('quickbase_tables.php');

$row_per_page = 5;
$post_field_c= 6;


$url_c = "https://api.quickbase.com/v1/records/query";
$ch_c = curl_init();
curl_setopt($ch_c,CURLOPT_URL, $url_c);
$useragent_c ='Mozilla/5.0 (Macintosh; Intel Mac OS X 10.7; rv:7.0.1) Gecko/20100101 Firefox/7.0.1';
// query commnts record

$post_c ='{
  "from": "'.$table_comments.'",
  "select": [
3,
6,
7,
8,
9,
10,
11


  ],

 
  
"where": "{'.$post_field_c.'.CT.'.$postid.'}",

 "sortBy": [
    {
      "fieldId": 3,
      "order": "ASC"
    },
    {
      "fieldId": 4,
      "order": "ASC"
    }
  ],



"options": {
    "skip": 0,
    "top": '.$row_per_page.',
    "compareWithAppLocalTime": false
  }

}
';




curl_setopt($ch_c, CURLOPT_HTTPHEADER, array(
"QB-Realm-Hostname: $quickbase_domain",
"User-Agent: $useragent_c",
"Authorization: QB-USER-TOKEN $access_token",
'Content-Type:application/json'
));  

//curl_setopt($ch_c,CURLOPT_CUSTOMREQUEST,'GET');
curl_setopt($ch_c,CURLOPT_CUSTOMREQUEST,'POST');

//curl_setopt($ch_c,CURLOPT_CUSTOMREQUEST,'DELETE');
curl_setopt($ch_c,CURLOPT_POSTFIELDS, $post_c);
curl_setopt($ch_c,CURLOPT_SSL_VERIFYPEER,0);
curl_setopt($ch_c,CURLOPT_SSL_VERIFYHOST,0);
curl_setopt($ch_c,CURLOPT_RETURNTRANSFER, true);
$response_c = curl_exec($ch_c);

curl_close($ch_c);

//print_r($response_c);
$json_c = json_decode($response_c, true);


//echo "<br><br>num field: "  .$json_c["metadata"]["numFields"]. "<BR><br>";
//echo "<br><br>num rec: "  .$json_c["metadata"]["numRecords"]. "<BR><br>";

$total_count_c = $json_c["metadata"]["totalRecords"];

if($total_count_c == 0){
echo "<div style='background:red;color:white;padding:10px;'>No Comments has been Posted Yet by members</div>";
}

 foreach($json_c['data'] as $v2){

                $id2 = $v2['3']['value'];
$comment_id = $id2;
                $postid2 = $v2['6']['value'];
                $comment2 = $v2['7']['value'];
                $timing2 = $v2['8']['value'];
                $userid2 = $v2['9']['value'];
                $fullname2 = $v2['10']['value'];
                $photo2 = $v2['11']['value'];
                

	
	

                

   // }





            ?>
                
                <div class="post <?php echo $color_alerts; ?> comments_hovering" id="post_<?php echo $comment_id; ?>">


<style>

.comments_hovering:hover{
background: <?php echo $color_comments_hovering; ?>;
color:<?php echo $color_comments_hovering1; ?>;


}


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


<img class='' style='border-style: solid; border-width:3px; border-color:<?php echo $color6; ?>; width:60px;height:60px; 
max-width:60px;max-height:60px;border-radius: 50%;' src='<?php echo $photo2; ?>' alt='User Image'><br>
<b style='color:<?php echo $color6; ?>;font-size:18px;' >Name: <?php echo $fullname2; ?> </b><br><br>

</div>


<div style='float:right;top:0px;right:0;margin-top:-90px;right:0px;'>
<button class='post_css1'>
<a title='Click to access users Profile page' style='color:black;' href='profile.php?id=<?php echo $userid2; ?>'>
<span style='font-size:20px;color:<?php echo $color6; ?>;' class='fa fa-user'></span> View Users Profile</a></button><br>

                        <div class="loader-request_<?php echo $comment_id; ?>"></div>
                        <div class="result-request_<?php echo $comment_id; ?>"></div>

<button class='post_css1'>
<a title=' Send Friends Request' style='color:black;' id="request_<?php echo $comment_id; ?>_<?php echo $userid2; ?>" class="send_request"><span style='font-size:20px;color:<?php echo $color6; ?>;' class='fa fa-comments-o'></span> Send Friends Request</a></button>

</div>






<b>Comments:</b> <?php echo $comment2; ?> &nbsp; &nbsp; &nbsp;

<br>
<span><b> <span style='color:<?php echo $color6; ?>;' class='fa fa-calendar'></span>Time:</b>  <span data-livestamp="<?php echo $timing2;?>"></span></span>






                </div><p></p>

            <?php
            }
            ?>

<!--START comment result form-->

<div id="commentsubmissionResult_<?php echo $postid; ?>"></div>

<!--end comment result form-->


            <h1 class="loadComment  category_post" title='Load More Comments!'> Load More Comments</h1>


<?php
if($total_count_c < 5 || $total_count_c == 5){
?>
(<span class="no_of_row_loaded"><?php echo $total_count_c; ?></span> out of <span class="p"><?php echo $total_count_c; ?></span>)
 <?php } ?>

<?php
if($total_count_c > 5){
?>
(<span class="no_of_row_loaded">5</span> out of <span class="p"><?php echo $total_count_c; ?></span>)
 <?php } ?>

            <input type="hidden" id="postRow" value="0">
            <input type="hidden" id="pCounter" value="<?php echo $total_count_c; ?>">

        </div>




<!-- Main comments Database query ends here-->



<!--START comment form-->

<div id="commentsubmissionResult_<?php echo $postid; ?>"></div>


<div class="col-sm-12 form-group">
 <textarea  id="comdesc<?php echo $postID_call; ?>"  class="form-control" style="color:black;"  placeholder="Enter Comments"></textarea>
<div class='loader_comments'></div>

<br>
 <input data-color='<?php echo $color_comments_hovering; ?>' data-color1='<?php echo $color_comments_hovering1; ?>' data-pe='<?php echo $points_encrypted; ?>' data-title='<?php echo $title; ?>' data-titleseo='<?php echo $title_seo; ?>' type="button" value="comment Now" id="<?php echo $postID_call; ?>" class="comment category_post2 pull-left" />


</div>
<br><br><p class='col-sm-12'></p>





<!--end comment form -->


</div>
<!--all post section ends-->




<?php


// update table notification_posts with Unread for read Updates starts

$notifyId = intval($_GET['notifyId']);
if($notifyId != ''){


$status_field = 12;

$url_update = "https://api.quickbase.com/v1/records";
$ch_update = curl_init();
curl_setopt($ch_update,CURLOPT_URL, $url_update);
$useragent_update ='Mozilla/5.0 (Macintosh; Intel Mac OS X 10.7; rv:7.0.1) Gecko/20100101 Firefox/7.0.1';

$post_updates='

{
  "to": "'.$table_notification_post.'",
  "data": [
    {


      "'.$status_field.'": {
        "value": "read"
      },

 "3": {
        "value": "'.$notifyId.'"
      }

    }
  ],

 "fieldsToReturn": [
3,
    6,
    8,
12,
14
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



}


// update table notification_posts with Unread for read Updates starts

?>






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
background: purple;
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

















<!-- search engine modal starts here -->


<div class="container_search_modal">

  <div class="modal fade " id="myModal_search" role="dialog">
    <div class="modal-dialog modal-lg modal-appear-center1 pull-right modaling_sizing">
      <div class="modal-content">
        <div class="modal-header" style="color:black;background:#c1c1c1">
 <button type="button" class="pull-right btn btn-default" data-dismiss="modal">Close</button>
      <h4 class="modal-title">Post Search Engine</h4>
        </div>
        <div class="modal-body">

          
You can Search <?php echo $poster; ?> Categories Types, locations and addresses etc.<br>



<div style='background:#ddd;color:black;padding:10px;border-style: dashed; border-width:2px; border-color: orange;'>
<h4>Option 1: Search <?php echo $poster; ?> By Category Types </h4>

<div class="col-sm-12 form-group">




<script>

$(document).ready(function(){
var t=1;
$("#loader-category").fadeIn(400).html('<br><div style="color:white;background:#800000;padding:10px;"><img src="ajax-loader.gif">&nbsp;Please Wait,Loading Category Data...</div>');
var datasend = {t:t};


	
		$.ajax({
			
			type:'POST',
			url:'category_data.php',
			data:datasend,
                        crossDomain: true,
			cache:false,
			success:function(msg){

$("#loader-category").hide();
$("#result-category").html(msg);
//setTimeout(function(){ $('#result-category').html(''); }, 5000);				
	
}
			
		});
		
		

});



</script>

<style>
.cat_css{
background:#f1f1f1;
color:black;
width:300px;
padding:6px;
border:none;
list-style-type: none;

}

.cat_css:hover{
background:orange;
color:black;


}

</style>


<div id="loader-category"></div>
<div id="result-category"></div>


<div style='background:#ddd;color:black;padding:10px;border-style: dashed; border-width:2px; border-color: orange;'>
<h4>Option 2: Search <?php echo $poster; ?> By Location Address </h4>




<!--form START-->



        <script>


$(document).ready(function(){
$(".search_btn").keyup(function() {
	//$('.search_btn').click(function(){
//alert('hey');
		
var search_data = $(this).val();
//var search_data = $('#search_data').val();
var ss= 'ok';

if(search_data==""){
//alert('Search Content cannot be empty');	
		}
else{
$('#loader_search').fadeIn(400).html('<br><span class="well alerts alert-info"><img src="ajax-loader.gif" align="absmiddle">&nbsp;Please Wait, Your Data is being Searched..</span>');
var datasend = "search_data="+ search_data + "&ss=" + ss;
		
		$.ajax({
			
			type:'POST',
			url:'search.php',
			data:datasend,
                        crossDomain: true,
			cache:false,
			success:function(msg){
	                       //$('#search_data').val('');
				
                                $("#result_search").html(msg);
				$('#alerts_search').delay(5000).fadeOut('slow');
                                $('#loader_search').hide();			
			}
			
		});
		
		}
		
	})
					
});


/*
//hide serach result starts here
$(document).ready(function(){
	$('.search_hide_btn').click(function(){

$('.search_hide').hide();
});
});


//hide serach result ends here


//hide search result div when click anywhere on a page
 $(document).mouseup(function (e) { 
            if ($(e.target).closest(".search_hide_now").length === 0) { 
                $(".search_hide_now").hide(); 
            } 


$(document).mouseup(function(e){
    var hidesearch_onpageClick = $("#hidesearch");
    if(!hidesearch_onpageClick.is(e.target) && hidesearch_onpageClick.has(e.target).length === 0){
        hidesearch_onpageClick.hide();
    }
});
*/


        </script>






<style>


.search_btn{
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
background: purple;
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

Eg: Search  <b>76 Wilford Street, Newtown, NSW</b><br>
<input type="text" class="search_btn" name="search_data" id="search_data" placeholder="Search by Location Addresses." />

<div id="loader_search"></div>
<div id="result_search" class='searching_res'></div>



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



<!--  search engine modal ends here -->













   
</body>
</html>



















