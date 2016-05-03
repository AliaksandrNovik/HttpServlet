<?php 

	if($_SERVER['REQUEST_METHOD']=='GET'){
		
		$id  = $_GET['id'];
		
		require_once('test.php');
		
		$sql = "SELECT * FROM person WHERE id='".$id."'";
		
		$r = mysqli_query($con,$sql);
		
		$res = mysqli_fetch_array($r);
		
		$result = array();
		
		array_push($result,array(
			"date"=>$res['date'],
			"name"=>$res['name'],
			"age"=>$res['age'],
			"gender"=>$res['gender']
			)
		);
		
		echo json_encode(array("result"=>$result));
		
		mysqli_close($con);
		
	}