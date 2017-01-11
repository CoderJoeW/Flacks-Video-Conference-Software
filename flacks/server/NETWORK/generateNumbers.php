<?
	require_once("../connect.php");
    
	$number = GenerateNumber();
    
    $sql = "SELECT * FROM numbers WHERE number='$number'";
    $query = mysql_query($sql) or die(mysql_error());
    $row = mysql_fetch_object($query);
    
    $id = $row->id;
    
    if(empty($id)){
    	$sql2 = "INSERT INTO numbers SET number='$number', username='',taken='false'";
        $query = mysql_query($sql2);
    }else{
    	exit;
    }
    
    function GenerateNumber(){
        $num = rand(1111111111,9999999999);
        
        return $num;
    }
?>
