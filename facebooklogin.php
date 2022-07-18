<?php 
session_start();
				$username="sleekyeh_sleekye"; //------------your username usually root
				$password="Khaleeq!@#123";//---------your password
				$database="sleekyeh_socialnet";//----the name of the database
				$mysqli = mysql_connect("localhost",$username,$password);
				$condb=mysql_select_db($database);

		///////////////checking in server db////////////////
				
					$email=$_REQUEST['email'];
					$first_name=$_REQUEST['first_name'];
					$user=$_REQUEST['user_id'];
					$pic=$_REQUEST['pic'];
					$date=date('Y-m-d');
					
					
					if(isset($_REQUEST['refferal_id']) and $_REQUEST['refferal_id']!=0)
					{
						$getcheck=mysql_query("SELECT * FROM tbl_friendslist WHERE user_id='".$user."' and friend_id='".$_REQUEST['refferal_id']."'");
						if(mysql_num_rows($getcheck)==0) 
						{
						
						$query=mysql_query("INSERT INTO tbl_friendslist(user_id,friend_id) 
						VALUES (
						'".$user."',
						'".$_REQUEST['refferal_id']."')");
						$getcheck1=mysql_query("SELECT * FROM tbl_fbuser WHERE fb_id='".$_REQUEST['refferal_id']."'");
						$getdata=mysql_fetch_array($getcheck1);
						
						$uppoints=$getdata['points']+1;
						$referalpoints=$getdata['referalpoints']+1;
						mysql_query("update tbl_fbuser set points='".$uppoints."',referalpoints='".$referalpoints."' where fb_id='".$_REQUEST['refferal_id']."'");
						
						}
						
						
						$getcheck=mysql_query("SELECT * FROM tbl_friendslist WHERE user_id='".$_REQUEST['refferal_id']."' and friend_id='".$user."'");
						if(mysql_num_rows($getcheck)==0) 
						{
						
						$query=mysql_query("INSERT INTO tbl_friendslist(user_id,friend_id) 
						VALUES (
						'".$_REQUEST['refferal_id']."',
						'".$user."')");
						}
						
							
					}
					
					
					$getcheck=mysql_query("SELECT * FROM tbl_fbuser WHERE email='".$email."'");
					$table = mysql_fetch_array($getcheck);
					
					
					
					
					if(mysql_num_rows($getcheck)==0) 
					{
						$_SESSION['last_logged_in']=$date;
						$query="INSERT INTO tbl_fbuser(fname,email,fb_id,date) 
						VALUES (
						'".$first_name."',
						'".$email."',
						'".$user."',
						'".$date."'
						
						)";
						
						$addticks=mysql_query($query) or die(mysql_error()); 
						
						//echo "record inserted";
						
					}
					else
					{
					$_SESSION['last_logged_in']=$table['lasttimelogin'];	
					mysql_query("update tbl_fbuser set pic='".$pic."',lasttimelogin='".$date."' where fb_id='".$user."'");
					$getcheck=mysql_query("SELECT * FROM tbl_fbuser WHERE fb_id='".$user."'");
					$table = mysql_fetch_array($getcheck);	
					
					//echo "already exist record";
					} 
					
					
					
					
					//$last_id=mysql_insert_id();
					
					
					$_SESSION['logged_in']=$user;
					?>
           
					
	