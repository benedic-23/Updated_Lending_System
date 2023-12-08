<?php
Class dbObj{
	/* Database connection start */
	var $dbhost = "localhost";
	var $username = "root";
	var $password = "";
	var $dbname = "lending_system";
	var $conn;
	function getConnstring() {
		$con = mysqli_connect($this->dbhost, $this->username, $this->password, $this->dbname) or die("Connection failed: " . mysqli_connect_error());
		/* check connection */
		if (mysqli_connect_errno()) {
			printf("Connect failed: %s\n", mysqli_connect_error());
			exit();
		} else {
			$this->conn = $con;
		}
		return $this->conn;
	}
}
          $host = "localhost";
          $username = "root";
          $password = "";
          $db_name = "lending_system";

          $conn = mysqli_connect($host,$username,$password,$db_name);

          if (!$conn)
          {
            echo "Connection failed<br>";
            echo "Error number: " . mysqli_connect_errno() . "<br>";
            echo "Error message: " . mysqli_connect_error() . "<br>";
            die();
          }
          $DB_HOST = "localhost";
          $DB_USER = "root";
          $DB_PASS = "";
          $DB_NAME = "lending_system";
      
          try{
              $db_connect = new PDO("mysql:host=$DB_HOST;dbname=$DB_NAME",$DB_USER,$DB_PASS);
              $db_connect->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            } catch(PDOException $e) {
              echo "Connection failed: " . $e->getMessage();
            }
?>