<?php

class User_model extends CI_Model
{
    private $_table = "users";

    public $user_id;
    public $username;
    public $password;
    public $role;

    public function rules()
    {
        return [
            ['field' => 'username',
            'label' => 'Username',
            'rules' => 'required'],
			
            ['field' => 'password',
            'label' => 'Password',
            'rules' => 'required|min_length[3]']
        ];
    }

    public function getAll()
    {
        return $this->db->get($this->_table)->result();
    }
    
    public function getById($id)
    {
        return $this->db->get_where($this->_table, ["user_id" => $id])->row();
    }

    public function save()
    {
        $post = $this->input->post();
        $this->username = $post["username"];
        $this->password = password_hash($post["password"], PASSWORD_DEFAULT);
        $this->role = $post["role"] ?? "customer";
        $this->db->insert($this->_table, $this);
    }

    public function update()
    {
        $post = $this->input->post();
        $this->username = $post["username"];
        $this->password = $post["password"];
        $this->db->update($this->_table, $this, array('user_id' => $post['id']));
    }

    public function doLogin(){
		$post = $this->input->post();

        $this->db->where('username', $post["username"]);
        $user = $this->db->get($this->_table)->row();

        if($user){
            $isPasswordTrue = password_verify($post["password"], $user->password);
            $isMahasiswa = $user->role == "mahasiswa";
            if($isPasswordTrue && $isMahasiswa){ 
                $this->session->set_userdata(['user_logged' => $user]);
                return true;
            }
		}
		return false;
    }

    public function isNotLogin(){
        return $this->session->userdata('user_logged') === null;
    } 

    public function get($id)
    {
        $this->db->from('users');
        if($id != null){
            $this->db->where('user_id', $id);
        }
        $query = $this->db->get();
        return $query;
    }   

    public function getb($id)
    {
        $this->db->from('biodata');
        if($id != null){
            $this->db->where('user_id', $id);
        }
        $query = $this->db->get();
        return $query;
    }  
}