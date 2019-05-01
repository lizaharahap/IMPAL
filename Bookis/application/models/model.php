<?php
/**
 * 
 */
class model extends CI_Model
{
	
	public function getAllUsers()
    {
        //use query builder to get data in table "mahasiswa"
        return $this->db->get('pelanggan')->result_array();
    }
    
    public function login()//(id)
    {
        // $this->db->where('id', $this->input->post('id'));
        $username = $this->input->post('username', true);
        $pass = $this->input->post('Password', true);
        return $this->db->query("SELECT username, password FROM pelanggan WHERE username='" . $username . "' AND password='" . $pass . "'");
    }

    public function tambah_user()
    {
        $data = [
        	"email" => $this->input->post('email', true),
            "Nama_Pelanggan" => $this->input->post('name', true),
            "username" => $this->input->post('username', true),
            "password" => $this->input->post('pass', true),
            // "re_pass" => $this->input->post('re_pass', true),
            "Alamat_Pelanggan" => $this->input->post('addres', true),
            "NoHP_Pelanggan" => $this->input->post('phoneno', true),
            "gender" => $this->input->post('gender', true),
            "age" => $this->input->post('age', true),
        ];
        return $this->db->insert('pelanggan', $data);
    }
}
?>