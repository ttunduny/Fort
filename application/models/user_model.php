<?php
class User_model extends CI_Model{

	var $username ="";
	var $password = "";

	function __construct(){
			//Call the Model Constructor

		parent::__construct();
	}

	public function check_user_exists($username, $password){
		$this->username = $username;
		$this->password = $password;			
		$query = $this->db->get_where('users', array('username' => $this->username,'password' => $this->password), 1);			
		$result = array();
		foreach ($query->result() as $row)
		{
			echo $row->fname;
		}
		//return $fname;			

	}
}
?>