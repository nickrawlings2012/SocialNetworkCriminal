<?php
  /**
   * Header
   *
   * @package Car Dealer Pro
   * @author wojoscripts.com
   * @copyright 2014
   * @version $Id: header.tpl.php, v 1.00 2014-01-10 21:12:05 gewa Exp $
   */
  if (!defined("_VALID_PHP"))
      die('Direct access to this location is not allowed.');
	  $userinfo=$content->getuserinfo($_SESSION['logged_in']);
	  require SITEURL.'/fb/facebook.php';
  ?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<?php $row = isset($row) ? $row : null;?>
<?php //echo $content->getMeta($row);?>
<script type="text/javascript">
var SITEURL = "<?php echo SITEURL;?>";
</script>
<style>
ul li{
  display: inline; color:#FFF; margin:30px;
}
ul li a{ text-decoration:none; color:#FFF; }
.active{ background-color:#FFF; color:#06F; width:70px; height:40px}

</style>
    <!--<link rel="stylesheet" href="//code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css"/>
-->
      <link href="<?php echo SITEURL;?>/assets/ud/style.css" rel="stylesheet" type="text/css" />
        <script type="text/javascript" src="<?php echo SITEURL;?>/assets/jquery.js"></script>
      <script type="text/javascript" src="<?php echo SITEURL;?>/assets/jquery-ui.js"></script>

<?php /*?><script type="text/javascript" src="<?php echo SITEURL;?>/assets/jquery.js"></script>
<script type="text/javascript" src="<?php echo SITEURL;?>/assets/jquery-ui.js"></script>
<script type="text/javascript" src="<?php echo SITEURL;?>/assets/global.js"></script>
<script type="text/javascript" src="<?php echo SITEURL;?>/assets/popup.js"></script>
<script type="text/javascript" src="<?php echo SITEURL;?>/assets/jquery.ui.touch-punch.js"></script>
<script type="text/javascript" src="<?php echo THEMEURL;?>/js/master.js"></script><?php */?>
</head>
<body style="background-color:#FFF">

<div id="fb-root"></div>
<script>
  window.fbAsyncInit = function() {
    FB.init({
      appId      : '1729610940621661',
      xfbml      : true,
      version    : 'v2.6'
    });
	
	FB.Event.subscribe('auth.login', function(resp) {
        window.location = 'http://socialnetworkcriminal.com/';
    });
	
	FB.Event.subscribe("auth.logout", function() {
		window.location = 'http://socialnetworkcriminal.com/socialnetwork/index.php?logout';
		
		});
	
  };
  
  function FacebookInviteFriends()
		{
		FB.ui({
		method: 'apprequests',
		message: 'Your Message diaolog'
		});
		}
		
		

  (function(d, s, id){
     var js, fjs = d.getElementsByTagName(s)[0];
     if (d.getElementById(id)) {return;}
     js = d.createElement(s); js.id = id;
     js.src = "//connect.facebook.net/en_US/sdk.js";
     fjs.parentNode.insertBefore(js, fjs);
   }(document, 'script', 'facebook-jssdk'));
   
   
   function FBInvite(){
  FB.ui({
   method: 'apprequests',
   message: 'Invite your Facebook Friends'
  },function(response) {
   
  });
 }

$(document).ready(function() {
$(".tab").click(function () {
    $(".tab").removeClass("info-box");
   $(this).addClass("info-box");       
});




});
   
</script>

<header>
  <div class="wojo-grid" align="center">
  <div id="facebook_invite"></div>
    <div class="wojo-content main-header" style="background-color:#43baf4; height:116px">
    
        <div style="width:81%">
        
            <div style="float:left; width:90px; height:100px">
            	<img src="<?php echo SITEURL;?>/assets/images/sociallogo.png" alt="">
            </div>
            
            <div style="float:left; margin-left:50px; margin-top:30px;">
            
             		<div style="float:left;">
                    	<div class="fb-like" data-href="http://socialnetworkcriminal.com/" data-layout="button_count" data-action="like" data-show-faces="false" data-share="false"></div>
                   </div>
                    
                    <div style="float:left; margin-left:10px; margin-top:-10px">
                    	<img src="<?php echo SITEURL;?>/assets/images/likesocial.jpg" alt="">
                   </div>
                    
                    <div style="float:right; margin-left:150px; color:#000; font-size:12px">
                    <?php echo $userinfo->fname;?><br>
                   <a href="<?php echo SITEURL;?>/index.php?logout" ><img src="<?php echo SITEURL;?>/assets/images/logou.jpg"></a>
                  
                    	<!--<div class="fb-login-button" scope="public_profile,email,user_friends,user_photos,publish_actions"  data-size="small" data-show-faces="false" data-auto-logout-link="true"></div>-->
                        
                       Points: <span id="points"><?php echo $userinfo->points;?></span>
                    
                    </div>
                    <div class="clear"></div>
                    
                    
                    <div style="width:100%; margin-top:20px;">
                    
                    	<ul style="display:inline; list-style:none; width:100%">
                        	<li><a href="<?php echo SITEURL;?>/videopage.php" class="info-box tab">Play Video</a></li>
                            <li >My Teammates</li>
                            <li ><a onClick="FBInvite()" class="tab">Invite Friend</a></li>
                            <li >Earn Cash</li>
                            <li >Messages</li>
                        </ul>
                    </div>
                    
                    
             </div>
            
         </div> 
    </div>
  </div>
  
  
</header>
<script type="text/javascript">
$('.menu-button').click(function(){
	$('#menu').slideToggle()
	})
</script>