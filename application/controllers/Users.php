<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Users extends CI_Controller {

    public function login() {
        // echo $this->input->post('username');
        $this->form_validation->set_rules('username', 'Username', 'trim|required|min_length[3]');
        $this->form_validation->set_rules('password', 'Password', 'trim|required|min_length[3]');
        $this->form_validation->set_rules('confirm_password', 'Confirm Password', 'trim|required|min_length[3]|matches[password]');

        if ($this->form_validation->run() == FALSE) {
            $data = array(
                'errors' => validation_errors(),
            );
            $this->session->set_flashdata($data);
            redirect('home');
        } else {
            $username = $this->input->post('username');
            $password = $this->input->post('password');

            $user_id = $this->user_model->login_user($username,$password);

            if ($user_id) {
                $user_data = array(
                    'user_id' => $user_id,
                    'username' => $username,
                    'logged_in' => true
                );
                $this->session->set_userdata($user_data);
                $this->session->set_flashdata('login_success', 'You are now logged in!');
                $data['main_view'] = 'admin_view';
		            $this->load->view('layouts/main', $data);
                //redirect('home/index');
            } else {
                $this->session->set_flashdata('login_failed', 'Sorry! You are not logged in!');
                redirect('home/index');
            }
        }
    }

    public function logout() {
        $this->session->sess_destroy();
        redirect('home/index');
    }
    
    public function register() {
      
       $this->form_validation->set_rules('username', 'Username', 'trim|required|min_length[3]');
        $this->form_validation->set_rules('password', 'Password', 'trim|required|min_length[3]');
        $this->form_validation->set_rules('confirm_password', 'Confirm Password', 'trim|required|min_length[3]|matches[password]');
       $this->form_validation->set_rules('first_name', 'First', 'trim|required|max_length[50]');
        $this->form_validation->set_rules('last_name', 'Lastname', 'trim|required|max_length[50]');
        $this->form_validation->set_rules('email', 'Email', 'trim|required|max_length[50]');
        
        if ($this->form_validation->run() == FALSE) {
           $data['main_view'] = 'users/register_view';
           $this->load->view('layouts/main', $data);
        } else {
            if ($this->user_model->register_user()) {
              redirect('home/index');
            } else {
              redirect('https://facebook.com');
            }
    }
    }

    // public function show($user_id) {
    //     //manual load of db and user model!
    //     // $this->load->model('user_model');

    //     $data['results'] = $this->user_model->get_users($user_id);
    //     $this->load->view('user_view', $data);

    //     //add the header here
    //     //return data as JSON!
    //     // header('Content-Type: application/json');
    //     // echo json_encode( $res );
    // }

    // public function insert() {
    //     $username = 'Sendo';
    //     $password = 'Galang';
    //     $this->user_model->create_users(['username' => $username, 'password' => $password]);
    // }

    // public function update() {
    //     $id = 6;
    //     $username = 'Mang Kanor';
    //     $password = 'XB';
    //     $this->user_model->update_users(['username' => $username, 'password' => $password], $id);
    // }

    // public function delete() {
    //     $id = 7;
    //     $this->user_model->delete_users($id);
    // }

}

?>