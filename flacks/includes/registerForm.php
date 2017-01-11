<? require_once("server/registration.php"); ?>
<form method="post" action="#">
	<center>
    	<h1>Flacks Registration</h1>
        <tdb id="registerLinkClose"><a href="#">Close Registration</a></tdb>
    </center>
    *<input type="text" name="username" placeholder="Username" required><br>
    *<input type="text" name="password" placeholder="Password" required><br>
    *<input type="text" name="email" placeholder="Email" required><br>
    <center>
    	<input type="submit" name="register" value="Register">
    </center>
</form>