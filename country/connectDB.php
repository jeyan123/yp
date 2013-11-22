<?php
class connectDB
{
  //Need to set these constant variables:
 	var $DBASE             = "learning";       // Set name of database to use         online:    "dphs_dphs"
 	var $USER             = "root";          // Set database username            online:    "dphs" 	
 	var $PASS             = "";              // Set darabase R/W password      online:    "jaydev"
 	var $SERVER         = "localhost";  // Set server name                online:    "localhost" 
    
    	function connectDB() 
    	{
        	$user = $this->USER;
        	$pass = $this->PASS;
        	$server = $this->SERVER;
	        $dbase = $this->DBASE;
        	$conn = mysql_connect($server,$user,$pass);
		if(!$conn) 
		{
			echo "<br>Connection attempt failed<br>";
        	}
	        if(!mysql_select_db($dbase,$conn)) 
		{
	        	$this->error("Dbase Select failed");
        	}
	        $this->CONN = $conn; 
		
        	return true;
    	}
    
    	function close()
    	{
        	$conn = $this->CONN ;
	        $close = mysql_close($conn);
        	if(!$close) 
		{
            		$this->error("Connection close failed"); 
        	}
        	return true;
    	}
    
    	function error($text)
    	{
        	$no = mysql_errno();
	        $msg = mysql_error();
        	return;
    	}
    
    	function select($sql="") 
    	{
	        if(empty($sql)) 
		{ 
			return false; 
		}
	        if(!preg_match("/^select/i",$sql))
        	{
            		echo "wrong query<br>$sql<p>";
	            	echo "<H2>Wrong function silly!</H2>\n"; 
            		return false;
        	}
        	if(empty($this->CONN)) { return false; }
        		$conn = $this->CONN;
        	$results = @mysql_query($sql,$conn);
        	if( (!$results) or (empty($results)) ) 
		{ 
            		return false;
        	}
        	$count = 0;
        	$data = array();
        	while ( $row = mysql_fetch_array($results))
        	{
            		$data[$count] = $row;
            		$count++; 
        	}
        	mysql_free_result($results);
        	return $data;
    	}
    
    	function affected($sql="")
    	{
        	if(empty($sql)) 
		{ 
			return false; 
		}
	        if(!preg_match("/^select/i",$sql)) 
        	{
            		echo "wrongquery<br>$sql<p>";
            		echo "<H2>Wrong function silly!</H2>\n";
            		return false;
        	}
        	if(empty($this->CONN)) { return false; } 
        		$conn = $this->CONN;
        	$results = @mysql_query($sql,$conn);
        	if( (!$results) or (empty($results)) ) 
		{
            		return false;
        	}
        	$tot=0;
        	$tot=mysql_affected_rows(); 
        	return $tot;
    	}
    
    	function insert ($sql="")
    	{
        	if(empty($sql)) 
		{ 
			return false; 
		}
        	if(!preg_match("/^insert/i",$sql))
        	{
            		return false; 
        	}
        	if(empty($this->CONN))
        	{
            		return false;
        	}
        	$conn = $this->CONN;
        	$results = mysql_query($sql,$conn);
        	if(!$results) 
        	{	 
            		$this->error("<H2>No results!</H2>\n");
            		return false;
        	}
        	$id = mysql_insert_id();
        	return $id;
    	}
    
    	function edit($sql="") 
    	{
        	if(empty($sql)) 
		{ 
			return false; 
		}
	        if(!preg_match("/^update/i",$sql))
        	{
            		return false;
        	}
        	if(empty($this->CONN))
        	{
            		return false; 
        	}
        	$conn = $this->CONN;
	        $results = mysql_query($sql,$conn);
        	if(!$results) 
	        {
            		$this->error("<H2>No results!</H2>\n");
            		return false; 
        	}
	        $rows = 0;
        	$rows = mysql_affected_rows();
	        return $rows;
    	}
    
    	function sql_query($sql="")
    	{    
		if(empty($sql)) 
		{ 
			return false; 
		}
        	if(empty($this->CONN)) 
		{ 
			return false; 
		} 
        	$conn = $this->CONN;
	        $results = mysql_query($sql,$conn) or die("");
        	if(!$results)
	        {   		
			$message = "Query went bad!";
	            	$this->error($message); 
        	    	return false;
	        }        
        	if(!preg_match("/^select/i",$sql))
		{
        	    	return true; 
		}
        	else 
		{
        	    	$count = 0;
            		$data = array();
	            	while ( $row = mysql_fetch_array($results))    
			{ 
                		$data[$count] = $row;
                		$count++;
	            	}
        	    	mysql_free_result($results);
            		return $data;
         	}
    	}
	function mysql_query($sql="")
        {
                if(empty($sql))
                {
                        return false;
                }
                if(empty($this->CONN))
                {
                        return false;
                }
                $conn = $this->CONN;
                $results = mysql_query($sql,$conn) or die("");
                if(!$results)
                {
                        $message = "Query went bad!";
                        $this->error($message);
                        return false;
                }
                if(!preg_match("/^select/i",$sql))
                {
                        return true;
                }
                else
                {
                        $count = 0;
                        $data = array();
                        while ( $row = mysql_fetch_array($results))
                        {
                                $data[$count] = $row;
                                $count++;
                        }
                        mysql_free_result($results);
                        return $data;
                }
        }
	function mysql_insert_id()
	{
		if(empty($this->CONN))
                {
                        return false;
                }
                $conn = $this->CONN;
                $id = mysql_insert_id();
                return $id;
	}   
	function nextavailable($server)
	{
        	$sql = "select ip from managers where ip!='$server' limit 1";
		$conn = $this->CONN;
                $results = @mysql_query($sql,$conn);
                if( (!$results) or (empty($results)) )
                {
                        return false;
                }
                $count = 0;
                $data = array();
                while ( $row = mysql_fetch_array($results))
                {
                        $data[$count] = $row;
                        $count++;
                }
                mysql_free_result($results);
        	$server = $data[0]['ip'];
        	if($count == 0)
        	{
                	$url = "https://127.0.0.1/cgi-bin/mail/sendalert.cgi?ip=$server";
			$ch = curl_init( $url );
                        curl_setopt($ch, CURLOPT_URL,$url);
                        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, FALSE);
                        curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, false);
                        curl_setopt ($ch, CURLOPT_HEADER, false);
                        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
                        curl_setopt($ch, CURLOPT_NOBODY,false);
                        curl_setopt($ch, CURLOPT_TIMEOUT, 2);
                        $data = curl_exec($ch);
                        curl_close($ch);
                	return 0;
        	}
        	else
        	{
                	$ping = `ping $server -c 1`;
	                $url = "http://$server:8888";
			$ch = curl_init( $url );
			curl_setopt($ch, CURLOPT_URL,$url);
    			curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, FALSE);
   			curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, false);
    			curl_setopt ($ch, CURLOPT_HEADER, false);
    			curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    			curl_setopt($ch, CURLOPT_NOBODY,false);
    			curl_setopt($ch, CURLOPT_TIMEOUT, 2);
    			$data = curl_exec($ch);
    			curl_close($ch);
        		$body = $data;
        	        if(preg_match('/error/',$ping) || preg_match('/Unreachable/',$ping) || preg_match('/100% packet loss/',$ping) || preg_match('/500/',$body) || $body == " " || $body == "" || $body == null)
                	{
                        	$del = "delete from servers where ip='$server'";
                        	mysql_query($del);
                        	$del = "delete from managers where ip='$server'";
                        	mysql_query($del);
                        	nextavailable($server);
                        	$send = "https://127.0.0.1/cgi-bin/mail/sendalert.cgi?ip=$server";
                        	n84execute($send);
                	}
	                else
        	        {
                	        return $server;
	                }
        	}
	} 
	function nextavailable_as()
	{
		$sql = "select ip from addservers where transcode=0 limit 1";
		$conn = $this->CONN;
                $results = @mysql_query($sql,$conn);
                if( (!$results) or (empty($results)) )
                {
                        return false;
                }
                $count = 0;
                $data = array();
                while ( $row = mysql_fetch_array($results))
                {
                        $data[$count] = $row;
                        $count++;
                }
                mysql_free_result($results);
                $ip = $data[0]['ip'];
        	if($count == 1)
        	{
                	$sql = "update addservers set transcode=1 where ip='$ip'";
			$results = mysql_query($sql,$conn) or die("count 1");
        	}
		elseif($count == 0)
		{
			$sql = "update addservers set transcode=0";
			$results = mysql_query($sql,$conn) or die("count 0");
                	$sql = "select ip from addservers where transcode=0 limit 1";
			$results = @mysql_query($sql,$conn);
	                if( (!$results) or (empty($results)) )
        	        {
                	        return false;
	                }
        	        $count = 0;
                	$data = array();
	                while ( $row = mysql_fetch_array($results))
        	        {
                	        $data[$count] = $row;
                        	$count++;
	                }
        	        mysql_free_result($results);
                	$ip = $data[0]['ip'];
                	$sql = "update addservers set transcode=1 where ip='$ip'";
			$results = mysql_query($sql,$conn) or die("count 0");
		}
		$ping = `ping $ip -c 1`;
        	if(preg_match('/error/',$ping) || preg_match('/Unreachable/',$ping) || preg_match('/100% packet loss/',$ping))
        	{
                	$sql = "update addservers set transcode=1,available=0 where ip='$ip'";
			$results = @mysql_query($sql,$conn);
        	        nextavailable_as($obj);
        	}
        	else
        	{
                	$sel = "update addservers set available=1 where ip='$ip'";
	                $results = @mysql_query($sql,$conn);
        	        return $ip;
        	}

	}
//ends the class over here
}
if(!isSet($obj)){
    $obj = new connectDB();
}
?>
