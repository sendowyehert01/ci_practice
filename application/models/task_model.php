<?php 

class Task_model extends CI_Model {
  public function get_task($task_id) {
    $this->db->where('id', $task_id);
    $query = $this->db->get('tasks');
    return $query->row();
  }

  public function create_task($data)
  {
    $insert_task = $this->db->insert('tasks', $data);
    return $insert_task;
  }

  public function edit_task($task_id, $data) {
    $this->db->where(['id' => $task_id]);
    $this->db->update('tasks', $data);
    return true;
  }  

  public function get_task_project_id($task_id) {
    $this->db->where('id', $task_id);
    $query_data = $this->db->get('tasks');
    return $query_data->row()->project_id;
  }
  
  public function get_task_project_name($project_id) {
    $this->db->where('id', $project_id);
    $query_data = $this->db->get('projects');
    return $query_data->row()->project_name;
  }
  
  public function get_task_data($task_id) {
    $this->db->where('id', $task_id);
    $query_data = $this->db->get('tasks');
    return $query_data->row();
 }
 
   public function delete_task($task_id) {
        $this->db->where(['id' => $task_id]);
        $this->db->delete('tasks');
    }
    
}

?>