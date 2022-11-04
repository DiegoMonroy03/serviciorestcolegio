<?php
class Database{

    private $host  = 'ec2-52-5-110-35.compute-1.amazonaws.com';
    private $user  = 'cdugikbeyrxwjg';
    private $password   = "b4764ae2f46227168d10f315942244aec75abf4bfc551b788e0f08569e84bd46";
    private $database  = "d37q2uvtud99o3";

    public function getConnection(){
		$conn = new mysqli($this->host, $this->user, $this->password, $this->database);
		if($conn->connect_error){
			die("Error failed to connect to MySQL: " . $conn->connect_error);
		} else {
			return $conn;
		}
    }
}
?>
