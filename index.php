<HTML>
    <HEAD>
        <TITLE>First PHP Script</TITLE>
        </HEAD>
    <BODY>

    <div style="border: 0px solid blue; position:relative; top:100px; left:400px; height:200px; width:300px;">
	
     <form action="/login.php" method="post">
        <label>Login:</label><br/>
        <input name="login" type="text" size="15" maxlength="15"><br/>
        <label>Password:</label><br/>
        <input name="password" type="password" size="15" maxlength="15"><br/><br/>
        <input type="submit" value="Submit"><br/><br/>
    </form>
    
    <?php
    //$name="Alex";
    //echo "My name ".$name;
    //print_r($name);
    //print_r($GLOBALS['result']);
    if(isset($GLOBALS['result'])){
        echo $GLOBALS['result'];
    }else {echo "...";}
    ?>

	</div>
	
    </BODY>

</HTML>