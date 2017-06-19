<?php
class dbhelper{
	private $conn;
	private $dbname="notebook";
	private $username="root";
	private $password="123";
	private $host="localhost";

	public function __construct(){
		$this->conn=new mysqli($this -> host ,$this -> username, $this -> password,$this -> dbname);

		if($this ->conn->connect_error){
			die("msyql connection faild !".$this ->conn->connect_error);
		}

		

	}

	public function execute_select($sql){

		$res = $this->conn->query($sql);
		$row= $res->fetch_row();
		return $row;
	}

	public function execute_insert_updata($sql){
		$res = $this ->conn->query($sql)or $this ->conn->connect_error;
		return $res;
	}

	public function close(){
		$conn->close();
	}

}
