<?
	require_once("../connect.php");
    
	$number = GenerateNumber();
    
    $sql = "SELECT * FROM numbers WHERE number='$number'";
    $query = mysql_query($sql);
    $row = mysql_fetch_object($query);
    
    $id = $row->id;
    
    if(empty($id)){
    	$sql2 = "INSERT INTO numbers SET number='$number', username='',taken='false'";
        $query = mysql_query($sql2);
    }else{
    	exit;
    }
    
    function GenerateNumber(){
    	$a1 = rand(1,9);
    	$a2 = rand(1,9);
    	$a3 = rand(1,9);
    	$f1 = rand(1,9);
    	$f2 = rand(1,9);
    	$f3 = rand(1,9);
    	$l1 = rand(1,9);
    	$l2 = rand(1,9);
    	$l3 = rand(1,9);
    	$l4 = rand(1,9);
        
        $num = $a1.$a2.$a3.$f1.$f2.$f3.$l1.$l2.$l3.$l4;
        
        return $num;
    }
?>