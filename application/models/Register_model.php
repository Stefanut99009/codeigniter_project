<?php
class Register_model extends CI_Model
{
 function insert($data)
 {
  // Assuming $data['password'] is already encrypted using OpenSSL before being passed to this function
  $this->db->insert('codeigniter_register', $data);
  return $this->db->insert_id();
 }

 
}
?>
