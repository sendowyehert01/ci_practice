<?php 

class Project_model extends CI_Model {

    public function get_project($id) 
    {
    $this->db->where('id', $id);
    $query = $this->db->get('projects');
    return $query->row();
    }

      public function get_projects() 
      {
      $query = $this->db->query('SELECT * FROM projects');
      return $query->result();
      }
      
      public function create_project($data)
      {
        $insert_project = $this->db->insert('projects', $data);
        return $insert_project;
      }

      public function edit_project($project_id, $data) {
        $this->db->where(['id' => $project_id]);
        $this->db->update('projects', $data);
        return true;
     }  

     public function get_project_data($project_id) {
        $this->db->where('id', $project_id);
        $query_data = $this->db->get('projects');
        return $query_data->row();
     }

    public function delete_project($project_id) {
        $this->db->where(['id' => $project_id]);
        $this->db->delete('projects');
    }
    
    public function get_all_projects($user_id) 
      {
      $this->db->where('project_user_id', $user_id);
      $query = $this->db->get('projects');
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