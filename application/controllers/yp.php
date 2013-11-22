<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
error_reporting(E_ALL);
ini_set('display_errors', '1');
class Yp extends CI_Controller {
        public function Yp()
        {
                parent::__construct();
                $this->load->database();
                $this->load->model('yp_model');
                $this->load->helper(array('form','url'));
        }
        public function index()
        {
                $data['title'] = 'Welcome to YP Test Page!';
                if(isset($_COOKIE['key']) && isset($_COOKIE['location']))
                {
                        $data['result'] = $this->yp_model->getAllData();
                }
                $this->load->view('yp_view',$data);
        }
        public function submit()
        {
                $result = $this->yp_model->submitPostData();
                redirect('yp');
        }
}
