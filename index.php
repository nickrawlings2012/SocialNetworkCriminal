<?php
 $a=$_SERVER['SERVER_NAME'];
if (strpos($a,'www') !== false) {
   
}
else
{
	echo "<script>window.location.href='http://www.socialnetworkcriminal.com/'</script>";
	exit();
}

  define("_VALID_PHP", true);
  
  
  require_once ("init.php");

  //$home = $content->getHomePage();
?>
<?php require_once("header.php");?>
<?php require_once(THEMEDIR . "/index.tpl.php");?>
<?php require_once("footer.php");?>