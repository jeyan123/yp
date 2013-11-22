<?php
error_reporting(E_ALL);
ini_set('display_errors', '1');
class State_model extends CI_Model 
{  
  
    function State_Model()  
    {  
        // Call the Model constructor  
        parent::__construct(); 
    }  
      
    function getData($city,$state)  
    {
	$query = "select country.name as country, state.name as state, city.name as city,city.latitude,city.longitude,city.population from country, state, city where state.code='$state' and city.name='$city' and city.state_code='$state';";
	$result = $this->db->query($query)->result();
	//$this->db->last_query();   
	return $result;
    }  
  
}
?>
