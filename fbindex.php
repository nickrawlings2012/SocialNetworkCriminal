<?php
  /**
   * Index
   *
   * @package Car Dealer Pro
   * @author wojoscripts.com
   * @copyright 2014
   * @version $Id: index.php, v 1.00 2014-01-10 21:12:05 gewa Exp $
   */
  define("_VALID_PHP", true);
  require_once ("init.php");

  //$home = $content->getHomePage();
  if(isset($_REQUEST['ranking']))
  {?>
	<?php require_once(THEMEDIR . "/fbheader.tpl.php");?>
    <?php require_once(THEMEDIR . "/fbranking_page.tpl.php");?>
    <?php require_once(THEMEDIR . "/fbfooter.tpl.php");

  }
  else
  {
?>
<?php require_once(THEMEDIR . "/fbheader.tpl.php");?>
<?php require_once(THEMEDIR . "/fbindex.tpl.php");?>
<?php require_once(THEMEDIR . "/fbfooter.tpl.php");

  }
?>