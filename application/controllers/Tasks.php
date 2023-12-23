<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Tasks extends CI_Controller {
  
    public function display($task_id) {
      $data['task'] = $this->task_model->get_task($task_id);
      $data['main_view'] = 'tasks/display';
      $this->load->view('layouts/main', $data);
    }

    public function create($project_id)
    {
          $this->form_validation->set_rules('task_name', 'Task Name', 'trim|required');
          $this->form_validation->set_rules('task_body', 'Task Desctiption', 'trim|required');
          
          if ($this->form_validation->run() == FALSE) 
            {
              $data['main_view'] = 'tasks/create_task';
              $this->load->view('layouts/main', $data);
            } else {
              $data = Array(
                'project_id' => $project_id,
                'task_name' => $this->input->post('task_name'),
                'task_body' => $this->input->post('task_body'),
                'due_date' => $this->input->post('due_date'),
                );
                
                if ($this->task_model->create_task($data)) {
                  $this->session->set_flashdata('task_created', 'Your task has been created');
                  redirect('projects/index');
                }
            }
    }

    public function edit($task_id)
    {
          $this->form_validation->set_rules('task_name', 'Task Name', 'trim|required');
          $this->form_validation->set_rules('task_body', 'Task Desctiption', 'trim|required');
          
          if ($this->form_validation->run() == FALSE) 
            {
              $data['task_data'] = $this->task_model->get_task_data($task_id);
              $data['main_view'] = 'tasks/edit_task';
              $this->load->view('layouts/main', $data);
            } else {
              $data = Array(
                'project_id' => $task_id,
                'task_name' => $this->input->post('task_name'),
                'task_body' => $this->input->post('task_body'),
                'due_date' => $this->input->post('due_date'),
                );
                
                if ($this->task_model->edit_task($task_id, $data)) {
                  $this->session->set_flashdata('task_edited', 'Your task has been updated');
                  redirect('projects/display');
                }
            }
    }
}
?>