


<?php
/* 
 * using for the login functionality.
 */
	Class User extends CI_Model
	{
	 function login($username, $password)
	 {
	   $this -> db -> select('id, username, password');//pilih att dlm db
	   $this -> db -> from('users');//nma db
	   $this -> db -> where('username', $username);
	   $this -> db -> where('password', MD5($password));
	   $this -> db -> limit(1);
	 
	   $query = $this -> db -> get();
	 
	   if($query -> num_rows() == 1)
	   {
	     return $query->result();
	   }
	   else
	   {
	     return false;
	   }
	 }
	}
	?>

