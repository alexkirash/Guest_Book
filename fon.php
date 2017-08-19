
<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
	<head>
			<meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>		
			<script src="jquery-3.2.1.min.js"></script>
			<link href="style.css" rel="stylesheet">
			<link href="styles.css" rel="stylesheet">
		
		<title> Program for SIBIS</title>
		
	</head>
	
		<body>
		
		<?php

		$dbhost = 'localhost';		
		$dbname = 'guest_book';		
		$dbuser = 'root';			
		$dbpasswd = '';		

		$title = 'Program for SI BIS';
		$description = ' About my site';
		$info = '<p>&copy Alex Kirash';

		?>
			<div class="header">
				<div class="wrapper">
				<div class="welcome">
					<div class="item">				
							<img href="http://www.sibis.com.ua/" src="sibis.jpg" />
					</div>
					<div class="item">
						<h2>
							<strong>  WELCOME</strong>
						</h2>		
					</div>
					<div class="item">
									<img href="http://www.sibis.com.ua/" src="sibis.jpg" />
					</div>
				</div>	
				</div>
				
			</div>
			
			<?php require_once "include/config.php";

			@mysql_connect($dbhost, $dbuser, $dbpasswd) or
			die("Could not connect to the database!");

			@mysql_select_db($dbname) or die("I can not find a database with this name!");

			mysql_query('SET NAMES cp1251;');

			$N = 25;
			?>
			
			<div class="shoutbox">
            <?php $r1=mysql_query("select count(*) as rec from guest_book where id");
				$f = mysql_fetch_row($r1);
				$rec = $f[0];             
				
				if (!isset($_GET['page'])) $page=0;
				else $page = $_GET['page'];

				$records = $page * $N;

				
				$q="select * from guest_book where id limit ".$records.", $N";

				echo "Total records: $rec<br>";

				$r=mysql_query($q);				 
				$n = mysql_num_rows($r);				

				if ($page > 0) {
				$p = $page - 1;
				
				echo "<a href=fon.php?page=$p>Back</a>&nbsp";
				}
				$page++;
				?>

            <h1>Guest book </h1>
            
            <ul class="shoutbox-content"></ul>
           
		   <?php
			if ($records+$N < $rec)
			echo "<a href=fon.php?page=$page>Next Page</a>";

			for ($i=0; $i<$n; $i++)
			{
				$f=mysql_fetch_array($r);

				echo "<p><table width=100%>
					  <tr><td bgcolor=navy width=10%>
					  <font name=alex size=2 color=white>$f[name]</font></td>";

				echo "<td colspan=2 bgcolor=#9ACBF5>
					  <font name=alex size=2 color=black>$f[message]</td>
					  </tr></table>";
			}
			?>
			
            <div class="shoutbox-form" >
                <h2> Write a message <span>×</span></h2>
                
				<?php
                echo '
					<form action=add_msg.php method=post>
					<label for="shoutbox-name">nickname </label> <input type="text" id="shoutbox-name" name="name" required pattern=" |^[a-zA-Z0-9]+$|i"/>

					<form action=add_msg.php method=post>
					<label for="shoutbox-name">email </label>  <input type="email" id="shoutbox-name" name="email" required placeholder="Enter a valid email address"/>				

					<form action=add_msg.php method=post>
					<label for="shoutbox-name">homepage </label>  <input type="URL" id="shoutbox-name" name="homepage"  required pattern="https?://.+" required placeholder="Enter a valid URL "/>

					<form method="post" >
					<label for="shoutbox-name"> CAPTCHA </label><input class="input" type="text" name="captcha" required/>
					<img src="captcha.php" />			
					
					<p><label class="shoutbox-comment-label" for="shoutbox-comment">message </label>  <textarea id="shoutbox-comment" name="message" > </textarea>

					<input type="submit" value="SEND!"/>
					';
				?>
            </div>
            
			
            
            <div class="shoutbox-form2" >
			<ul class="shoutbox-content"></ul>
			
			<?php
	
					$result=mysql_query("SELECT * FROM guest_book ORDER BY name "); 
					
					$n=mysql_num_rows($result); 
					echo "<table border=1> 
					<tr><th>ID</th><th>name</th><th>email</th><th>homepage</th><th>message</th></tr>"; 
			?>
                <h2> All information <span>×</span></h2>
			
			<?php
			
					for($i=0;$i<$n;$i++) 
					 echo  
					"<tr><td>",mysql_result($result,$i,id), 
					"</td><td>",mysql_result($result,$i,name), 
					"</td><td>",mysql_result($result,$i,email), 
					"</td><td>",mysql_result($result,$i,homepage),
					"</td><td>",mysql_result($result,$i,captcha), 					
					"</td><td>",mysql_result($result,$i,message), 
					"</td></tr>";
					
					echo "</table>"; 
				
			/* echo '
			<form action=add_msg.php method=GET>
			echo '<form action=add_msg.php method=POST><input type="submit" value="SHOW!"/>';
			<input type="submit" value="SHOW!"/>
			';*/
			?>
		
			</div>
        </div>
			
			<div class="footer">
				<div class="wrapper">
					&copy;  Alex Kirash, a person who wants to work in SIBIS
				</div>
			</div>			
			
        <script src="jstest.js"></script>
		<script src="jstest2.js"></script>
			
		</body>
</html>
