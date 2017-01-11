<?
if(isset($_POST['register'])){
	$username = $_POST['username'];
    $password = $_POST['password'];
    $email = $_POST['email'];
    
  	//Username Iteration
    
    $sql = "SELECT * FROM users WHERE username='$username'";
    $query = mysql_query($sql) or die(mysql_error());
    $row = mysql_fetch_object($query);
    
    $id = $row->id;
    
    if(empty($id)){
    	//Email Iteration
    	$sql2 = "SELECT * FROM users WHERE email='$email'";
        $query2 = mysql_query($sql2) or die(mysql_error());
        $row2 = mysql_fetch_object($query2);
        
        $id2 = $row2->id;
        
        if(empty($id2)){
        	//Register Iteration
            
        	//Get A Number
    		$sql3 = "SELECT * FROM numbers WHERE taken='false' ORDER BY Rand() LIMIT 1";
    		$query3 = mysql_query($sql3) or die(mysql_error());
        	$row3 = mysql_fetch_object($query3);
        
        	$num = $row3->number;
        
        	$sql4 = "UPDATE numbers SET username='$username',taken='true' WHERE number='$num'";
        	$query4 = mysql_query($sql4) or die(mysql_error());
            
            //Register the user and set number to taken
        	$sql5 = "INSERT INTO users SET username='$username',password='$password',email='$email',number='$num'";
        	$query5 = mysql_query($sql5) or die(mysql_error());
        
        	echo "<script>alert('Registration Success');</script>";
        }else{
        	echo "<script>alert('An account with that email already exists');</script>";
        }
    }else{
    	echo "<script>alert('An account with that username already exists');</script>";
    }
}
?>