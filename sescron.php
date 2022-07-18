<?php
session_start();
$con	=	mysqli_connect("localhost","sleekyeh_sleekye","Khaleeq!@#123");
if($con){
	mysqli_select_db($con, "sleekyeh_socialnet");	
}
 //$_SESSION['logged_in'];
//echo rand(0,200);
   $frindslists="select frn.*,u.fname,u.points,u.pic from tbl_messages frn,tbl_fbuser u where frn.touser_id='".$_SESSION['logged_in']."' and frn.status=0 and frn.read='0' and u.fb_id=frn.sender_id";

  $msgsrowss = mysqli_query($con, $frindslists);
   $counts = mysqli_num_rows($msgsrowss);
	
	if($counts!=0) {
?>
<div style="background-color:#F00; width:20px; height:20px; margin-top:-18px;margin-right:0px;border-radius:10px; float:right; color:#FFF" align="center" id="countmsgs">
<?php echo $counts; ?>
</div>
<?php
	}
?>