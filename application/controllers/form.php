<?php
class Form extends CI_Controller {
function Form(){
// load Controller constructor
parent::__construct();
// load the model we will be using
$this->load->model('form_model');
// load the database and connect to MySQL
$this->load->database();
// load the needed helpers
$this->load->helper(array('form','url'));
}
//Display the posted entries
function index() {
$data['title']='Form Data';
//use the model to get all entries
$data['result'] = $this->form_model->get_all_data();
// load 'forms_view' view
$this->load->view('form_view',$data);
}
//Process the posted form
function submit() {
//use the model to submit the posted data
//$this->form_model->submit_posted_data();
redirect('form');
}
}
?>

