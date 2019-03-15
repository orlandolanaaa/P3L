<?php
class home_model extends CI_Model{
 
  function validate_user($username,$password)
  {
    $this->db->where('username',$username);
    $this->db->where('password',$password);
    $result_user = $this->db->get('tbl_user',1);
    return $result_user;
  }

  function validate_user_role($level)
  {
    $this->db->where('urid',$level);
    $result_user_role = $this->db->get('tbl_user_role',1);
    return $result_user_role;
  }
 
}