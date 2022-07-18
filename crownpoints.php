<?php 
				$username="sleekyeh_sleekye"; //------------your username usually root
				$password="Khaleeq!@#123";//---------your password
				$database="sleekyeh_socialnet";//----the name of the database
				$mysqli = mysql_connect("localhost",$username,$password);
				$condb=mysql_select_db($database);

		
									$endDate=date('Y-m-d G:i:s');
									
									$seluser=mysql_query("select * from tbl_fbuser");
									
									while($fbuser=mysql_fetch_array($seluser))
									{
									
									$beginDate=$fbuser['lasttimelogin'];
									$to_time=strtotime($endDate);
									$from_time=strtotime($beginDate);
									$time= round(abs($to_time - $from_time) / 60);
									
									$minutes = $time;
									$d = floor ($minutes / 1440);
									//$h = floor (($minutes - $d * 1440) / 60);
									//$m = $minutes - ($d * 1440) - ($h * 60);
									
									if($d>=10 and $fbuser['field_marshal']==0)
									{
										$crnpoints=$fbuser['points']-5	;
										mysql_query("update tbl_fbuser set points=$crnpoints where id=$fbuser[id]");
									}
									
									}
		
					?>
           
					
	