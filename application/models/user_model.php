<?php 

class User_model extends CI_Model {

    public function login_user($username, $password) {
        $this->db->where('username', $username);
        $this->db->where('password', $password);

        $result = $this->db->get('users');
        
        if ($result->num_rows() == 1) {
            return $result->row(0)->id;
        } else {
            return false;
        }
    }
    
    public function register_user() {
            
            $data = array(
              'username' => $this->input->post('username'),
              'password' => $this->input->post('password'),
              'first_name' => $this->input->post('first_name'),
              'last_name' => $this->input->post('last_name'),
              'email' =>  $this->input->post('email')
              );
      
        $result = $this->db->insert('users', $data);
        return $result;
    }

    // public function get_users($user_id) {
    //     $this->db->where('id', $user_id);
    //     $query = $this->db->get('users');
    //     return $query->result();

    //     // $query = $this->db->query('SELECT * FROM users');
    //     // return $query->num_fields();
    //     // return $query->num_rows();
        
    //     // $query = $this->db->get('users');
    //     //return as array of objects!
    //     // return $query->result();
    // }

    // public function create_users($data) {
    //     $this->db->insert('users', $data);
    // }

    // public function update_users($data, $id) {
    //     $this->db->where(['id' => $id]);
    //     $this->db->update('users', $data);
    // }

    // public function delete_users($id) {
    //     $this->db->where(['id' => $id]);
    //     $this->db->delete('users');
    // }

}

?>