<?php
session_start();
$con	=	mysqli_connect("localhost","sleekyeh_sleekye","Khaleeq!@#123");
if($con){
	mysqli_select_db($con, "sleekyeh_socialnet");	
}
 //$_SESSION['logged_in'];
//echo rand(0,200);
//   $frindslists="select frn.*,u.fname,u.points,u.pic from tbl_messages frn,tbl_fbuser u where frn.touser_id='".$_SESSION['logged_in']."' and frn.status=0 and frn.read='0' and u.fb_id=frn.sender_id";

   $frindslists="update tbl_messages set tbl_messages.read='1' where tbl_messages.touser_id='".$_SESSION['logged_in']."' and tbl_messages.read='0'";
  mysqli_query($con, $frindslists);
?>