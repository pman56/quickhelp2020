<?php
$userid_sess_data =  htmlentities(htmlentities($_SESSION['uid1'], ENT_QUOTES, "UTF-8"));
$fullname_sess_data =  htmlentities(htmlentities($_SESSION['fullname1'], ENT_QUOTES, "UTF-8"));
$username_sess_data =   htmlentities(htmlentities($_SESSION['username1'], ENT_QUOTES, "UTF-8"));
$photo_sess_data =  htmlentities(htmlentities($_SESSION['photo1'], ENT_QUOTES, "UTF-8"));
$email_sess_data =  htmlentities(htmlentities($_SESSION['email1'], ENT_QUOTES, "UTF-8"));
$user_rank_sess_data = strip_tags($_SESSION['user_rank1']);
$session_points_data = strip_tags($_SESSION['points1']);
?>