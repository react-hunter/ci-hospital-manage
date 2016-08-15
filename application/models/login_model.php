<?php
Class Login_model extends CI_Model
{
    
 function login($username, $password)
 {
   $this -> db -> select('_id, username, password');
   $this -> db -> from('users');
   $this -> db -> where('username', $username);
   $this -> db -> where('password', $password);
   $this -> db -> limit(1);
   
   // query
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