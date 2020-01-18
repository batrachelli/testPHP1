<?php
    session_start();
?>
    
<HTML>
    <HEAD>
        <TITLE>First PHP Script 2020</TITLE>
    </HEAD>
    <BODY>

    	<div style="border: 0px solid blue; position:relative; top:100px; left:400px; height:200px; width:300px;">
	
		<?php 
		echo $session_login;
	   if (isset($session_login) && $session_login !="") {echo "Welcome, ".$session_login;} 
	   else {?>
			<form action="/login.php" method="post">
   			<label>Login:</label><br/>
			<input name="login" type="text" size="15" maxlength="15"><br/>
			<label>Password:</label><br/>
			<input name="password" type="password" size="15" maxlength="15"><br/><br/>
			<input type="submit" value="Submit"><br/><br/>
    		</form><?php }?>    
		</div>
    </BODY>
</HTML>