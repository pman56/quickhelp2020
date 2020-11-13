<?php
//error_reporting(0); 
?>


<?php
session_start();
include ('authenticate.php');
include ('session.php');
?>


<!DOCTYPE html>
<html lang="en">

<head>
 <title>
<?php include('header_title.php'); echo $header_tit; ?> - Welcome <?php echo $fullname_sess_data; ?> </title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="keywords" content="landing page, website design" />

  <link rel="stylesheet" href="bootstrap.min.css">
    <script src="jquery.min.js"></script>
    <script src="bootstrap.min.js"></script>

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















.marquee_button{
background-color: <?php echo $color6; ?>;
padding: 6px;
color:white;
font-size:14px;
//border-radius: 50%;
transform: skew(15deg);
border: none;
cursor: pointer;
text-align: center;



}
.marquee_button:hover {
background: black;
color:white;
}


.marquee_image{ 
width:60px;height:60px;
border-radius: 50%;
border-style: solid; border-width:2px; border-color: <?php echo $color6; ?>;
}





.contactme_btn{
background-color: <?php echo $color6; ?>;
padding: 6px;
color:white;
font-size:14px;
//border-radius: 50%;
border: none;
cursor: pointer;
text-align: center;
}
.contactme_btn:hover {
background: black;
color:white;
}





.invite_btn{
background-color: <?php echo $color6; ?>;
padding: 6px;
color:white;
font-size:14px;
//border-radius: 50%;
border: none;
cursor: pointer;
text-align: center;
}
.invite_btn:hover {
background: black;
color:white;
}


.course_btn{
background-color: <?php echo $color6; ?>;
padding: 6px;
color:white;
font-size:14px;
//border-radius: 50%;
border: none;
cursor: pointer;
text-align: center;
}
.course_btn:hover {
background: black;
color:white;
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


.contact_bgcolor{
background:#ddd;
}

.contact_input_color{
color:black;
font-size:16px;
}

.aboutus_bgcolor{
background:#f1f1f1;
//background:#4c8bf5;
color:black;

}

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



.contact_name_color{
color: <?php echo $color6; ?>;
font-weight:200px;
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


             
 <li class="navgate"><a title='Create New Post' href="create_post.php" style="color:white;font-size:14px;">Create New <?php echo $poster; ?></a></li>       
<li class="navgate"><a title='View Dashboard' href="dashboard.php" class='img-circle' style="border-style: solid; border-width:4px; border-color:orange;color:white;font-size:14px;">Dashboard</a></li>


<li class="navgate"><img style="max-height:60px;max-width:60px;" class="img-circle" width="60px" height="60px" title='User Image' src="<?php echo $photo_sess_data; ?>">


<span class="dropdown">
  <a style="color:white;font-size:14px;cursor:pointer;" title='View More Data' class="btn1 btn-default1 dropdown-toggle"  data-toggle="dropdown"><?php echo $fullname_sess_data; ?>
  <span class="caret"></span></a>

<ul class="dropdown-menu col-sm-12">
<li><a title='My Profile' href="profile_base.php">My Profile</a></li>
<li><a title='Logout' href="logout.php">Logout</a></li>

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
background:<?php echo $color6; ?>;
color:white;
}
.bbo:hover{
background:orange;
color: white;
}



</style>


<p><button class="category_post bbo" ><a style="color:white;" href="dashboard.php">
Go Back to Dashboard</a></button></p>


</div> 
</div>


    </div>
<!--end left column all-->












<!--start right column all-->
    <div class="right-column-all">





<style>


.post_padding{
padding-top:90px;
   
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





</style>
<!-- all post Section start -->
<div  class="post_padding section_padding post_bgcolor">


<!--start blog post row-->
 <div class="row">










<div style="font-size:18px;color:black;background:#c1c1c1;padding:10px;border-radius:15%;" >
<center>Create New <?php echo $poster; ?></center></div><br>





<!--create course form START here-->


<div style="border-style: dashed; border-width:2px; border-color: orange;background:#eeeeee;padding:10px;" class="row">




        



<!--start form-->

<script>

$(document).ready(function(){
$('#post_btn').click(function(){
		
var geo_address = $('#geo_address').val();
var title = $('#title').val();
var offering = $(".offering:checked").val();

var messaging = $("#messaging").val();
var help_category = $("#help_category").val();


if(offering==""){
alert('Please Select Either Seeking for Help or Offering for help');
return false;
}



if(help_category==""){
alert('Help Request Category cannot be Empty');
return false;
}


if(title==""){
alert('Post Title cannot be Empty');
return false;
}


if(messaging==""){
alert('Post Description cannot be Empty');
return false;
}



if(geo_address==""){
alert('Please Enter Address');
}

else{
$('#loader_l2').fadeIn(400).html('<br><div style="color:white;background:#3b5998;padding:10px;"><img src="ajax-loader.gif">&nbsp;Please Wait, Post is being sent...</div>');
var datasend = "geo_address="+ geo_address+'&title='+title+'&offering='+offering+'&messaging='+messaging+'&help_category='+help_category;
		
		$.ajax({
			
			type:'POST',
			url:'posts.php',
			data:datasend,
                        crossDomain: true,
			cache:false,
			success:function(msg){



if(msg == 1){
alert('Posts Successfully Sent..');			
$('#loader_l2').hide();
$('#result_l2').html("<div style='color:white;background:green;padding:10px;'>Posts  Successfully Sent</div>");
setTimeout(function(){ $('#result_l2').html(''); }, 5000);



window.location='dashboard.php';				
			
}else{

alert('Error: Could not send your post. Ensure there is network');			
$('#loader_l2').hide();
$('#result_l2').html("<div style='color:white;background:red;padding:10px;'>Error: Could not send your post. Ensure there is network</div>");
setTimeout(function(){ $('#result_l2').html(''); }, 5000);				
	

}




			
			}
			
		});
		
		}
		
	})
					
});




</script>




<div class="col-sm-12 form-group">
<input type="radio" class="offering" name="offering" value="Seeking Help" /> Seeking Help  <br><br>
<input type="radio" class="offering" name="offering" value="Offering Help" /> Offering Help
</div>
<br>
<div class="col-sm-12 form-group">
<label>Request Category Type</label>
<select class="form-control col-sm-12" id="help_category" name="help_category" required>
<option value="">-- Select Request Category Type --</option>
<option value="Child-Care">Child-Care</option>
<option value="Elderly-Care">Elderly-Care</option>
<option value="Delivery">Delivery</option>
<option value="Transportations">Transportations</option>
<option value="Repair">Repair</option>
<option value="HandyWork">HandyWork</option>
<option value="Professional-Services">Professional Services</option>
<option value="Technology-Help">Technology-Help</option>
<option value="Opportunities-Careers">Opportunities-Careers</option>
<option value="Jobs">Jobs</option>
<option value="Foods">Foods</option>
<option value="Others">Others</option>

</select>
</div>


<div class="form-group">
              <span for="fname">
<span class="fa fa-address"></span> Enter Geolocation Address Eg: <b>580 Darling Street, Rozelle, NSW</b></span>
              <input type="text" class="col-sm-12 form-control" id="geo_address" name="geo_address" 
placeholder="Enter Address">
            </div>



<div class="col-sm-12 form-group">
<label>Post Title</label>
<input  class="form-control contact_input_color" id="title" name="title" placeholder="Post Title" type="text" required>
</div>



<div class="col-sm-12 form-group">
<label>Post Description</label>
<textarea  class="form-control contact_input_color" id="messaging" name="messaging" placeholder="Post Description"  required></textarea>
</div>



<br>





<div class="col-sm-12 form-group">
                        <div id="loader_l2"></div>
                        <div id="result_l2"></div>
</div>


<button type="button" id="post_btn" class="category_post"  /> Create Post</button>
</div>







<!--end form-->



</div>





<!--create course form ENDS-->






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





<!--   search engine modal starts here -->


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


<div class="dropdown">
  <button class="btn btn-default dropdown-toggle" type="button" data-toggle="dropdown">Select Category Type
  <span class="caret"></span></button>

<ul class="dropdown-menu col-sm-12">
<li><a href="dashboard_requset.php?data_type=Child-Care">Child-Care</a></li>
<li><a href="dashboard_requset.php?data_type=Elderly-Care">Elderly-Care</a></li>
<li><a href="dashboard_requset.php?data_type=Delivery">Delivery</a></li>
<li><a href="dashboard_requset.php?data_type=Transportations">Transportations</a></li>
<li><a href="dashboard_requset.php?data_type=Repair">Repair</a></li>
<li><a href="dashboard_requset.php?data_type=HandyWork">HandyWork</a></li>
<li><a href="dashboard_requset.php?data_type=Professional Services">Professional Services</a></li>
<li><a href="dashboard_requset.php?data_type=Tech-Help">Tech Help</a></li>
<li><a href="dashboard_requset.php?data_type=Opportunities-Careers">Opportunities-Careers</a></li>
<li><a href="dashboard_requset.php?data_type=Sexual-Harrasment">Sexual-Harrasment</a></li>
<li><a href="dashboard_requset.php?data_type=Racism">Racism</a></li>
<li><a href="dashboard_requset.php?data_type=Police-Brutality">Police-Brutality</a></li>
<li><a href="dashboard_requset.php?data_type=Marginalized">Marginalized</a></li>

</ul></div>
</div>
<br><br><br>
</div><br>



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



















