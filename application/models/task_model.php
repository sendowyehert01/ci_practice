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

  public function get_task_data($task_id) {
    $this->db->where('id', $task_id);
    $query_data = $this->db->get('tasks');
    return $query_data->row();
 }
}

?>