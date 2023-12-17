<?php 

class Project_model extends CI_Model {

      public function get_projects() 
      {
      $query = $this->db->query('SELECT * FROM projects');
      return $query->result();
      }
//     $this->db->where('id', $user_id);
//     $query = $this->db->get('users');
//     return $query->result();


//     // return $query->num_fields();
//     // return $query->num_rows();
    
//     // $query = $this->db->get('users');
//     //return as array of objects!

//

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