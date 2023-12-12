<?php 

class Users extends CI_Controller {

    public function show() {

        //manual load of db and user model!
        // $this->load->model('user_model');

        $res = $this->user_model->get_users();
        $data['results'] = $res;
        $this->load->view('user_view', $data);

        //add the header here
        //return data as JSON!
        // header('Content-Type: application/json');
        // echo json_encode( $res );

    }

}

?>