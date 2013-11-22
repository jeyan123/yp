    <?php  
    require('/var/www/html/yp/application/libraries/REST_Controller.php');  
      
    class Api extends REST_Controller  
    {  
	public function Api()
	{
		parent::__construct();
		$this->load->database();
                $this->load->model('user_model');
                $this->load->model('yp_model');
		$this->load->model('state_model');
	}
	function city_get()
	{
	    if(!$this->get('id'))
            {
                $this->response(NULL, 400);
            }

            $data['result'] = $this->state_model->getData( $this->get('id'),$this->get('state') );

		//$this->load->view("state_view",$data);
            if($data)
            {
                $this->response($data, 200); // 200 being the HTTP response code
		//$this->load->view("state_view",$data);
            }

            else
            {
                $this->response(NULL, 404);
            }
	}
        function user_get()  
        {  
            if(!$this->get('id'))  
            {  
                $this->response(NULL, 400);  
            }  
      
            $user = $this->user_model->get( $this->get('id') );  
              
            if($user)  
            {  
                $this->response($user, 200); // 200 being the HTTP response code  
            }  
      
            else  
            {  
                $this->response(NULL, 404);  
            }  
        }  
        function key_get()
        {
		file_put_contents("/tmp/test.log","keee".$this->get('id')."=>".$this->get('location'));
            if(!$this->get('id'))
            {
                $this->response(NULL, 400);
            }
	
            $data['result'] = $this->yp_model->getAllDataNew( $this->get('id') ,$this->get('location'));
		if($data)
		{
			$this->load->view('yp_view2',$data);
		}
		else
		{
			$this->response(NULL, 404);
		}
		/*
            if($user)
            {
                $this->response($user, 200); // 200 being the HTTP response code
            }

            else
            {
                $this->response(NULL, 404);
            }
*/
        }  
        function user_post()  
        {  
            $result = $this->user_model->update( $this->post('id'), array(  
                'name' => $this->post('name'),  
                'email' => $this->post('email')  
            ));  
              
            if($result === FALSE)  
            {  
                $this->response(array('status' => 'failed'));  
            }  
              
            else  
            {  
                $this->response(array('status' => 'success'));  
            }  
              
        }  
          
        function users_get()  
        {  
            $users = $this->user_model->get_all();  
              
            if($users)  
            {  
                $this->response($users, 200);  
            }  
      
            else  
            {  
                $this->response(NULL, 404);  
            }  
        }  
    }  
    ?>  
