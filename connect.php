<?php
namespace database;
class connection {
	
	public function con (){
	 $db_name="training";
	 $user="root";
	 $pass="";
	 $ser="localhost";
		try {
			$conn = new PDO("mysql:host=$servername;dbname='training'", $username, $password);
			// set the PDO error mode to exception
			$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
			echo "Connected successfully"; 
			}
		catch(PDOException $e){
			
			echo "Connection failed: " . $e->getMessage();
			}
	return $conn;
}
	
	public function infosupervisor ($id) {
		$conn = $this->con();
		$stmt = $conn->prepare("select supFName, OfficeNO from supervisor ");
		$row =$stmt->fetch( PDO::FETCH_ASSOC);
			if (! $row){
				die('لايوجد مستخدم بهذا الاسم ');
			}
			var_dump($row);
				die();
		
	}
	}
	

?>