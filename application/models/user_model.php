<?php
error_reporting(E_ALL);
ini_set('display_errors', '1');
        class User_Model extends CI_Model
        {
                public function User_Model()
                {
                        parent::__construct();
                }
		public function get($id)
		{
			$id = "Testing rest api";
			return $id;
		}
		public function get_all()
                {
                        $id = "Testing rest api";
                        return $id;
                }
	}
?>
