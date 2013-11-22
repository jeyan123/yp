<?php
error_reporting(E_ALL);
ini_set('display_errors', '1');
        class Yp_Model extends CI_Model
        {
                public function Yp_Model()
                {
                        parent::__construct();
                }
                public function submitPostData()
                {
                        $key = trim($_POST['key']);
                        $location = trim($_POST['location']);
                        setcookie('key',$key,time()+5,'/');
                        setcookie('location',$location,time()+5,'/');
                        //$array = array('firstname' => 'Jey','lastname' => 'Raj','username' => 'jey','password' => 'jey123' );
                        //$this->db->insert('userInfo',$_POST);
                }
                public function getAllData()
		{
			$location = $_COOKIE['location'];

                        if($first_key = str_replace(",","-",$location))
                        {
                                $first_key = str_replace(" ","",$first_key);
                        }
                        else
                        {
                                $first_key = str_replace(" ","-",$location);
                        }
                        $first_key = str_replace(" ","-",$location);
                        $first_key = str_replace(",","-",$first_key);
                        $first_key = strtolower($first_key);
                        $location = str_replace(" ","%20",$location);
                        $location = str_replace(",","%2C+",$location);
                        $key = $_COOKIE['key'];
                        $url = "http://www.yellowpages.com/$first_key/$key?g=$location&ic=lite&page=1";
                        $ch = curl_init( $url );
                        curl_setopt($ch, CURLOPT_URL,$url);
                        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, FALSE);
                        curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, false);
                        curl_setopt ($ch, CURLOPT_HEADER, true);
                        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
                        $data = curl_exec($ch);
                        curl_close($ch);
			return self::grepData($data);
		}
		public function getAllDataNew($key,$location)
                {
			//file_put_contents("/tmp/test.log","kee => $key => $location");
			//return "return $key $location";
                        if($first_key = str_replace(",","-",$location))
                        {
                                $first_key = str_replace(" ","",$first_key);
                        }
                        else
                        {
                                $first_key = str_replace(" ","-",$location);
                        }
                        $first_key = str_replace(" ","-",$location);
                        $first_key = str_replace(",","-",$first_key);
                        $first_key = strtolower($first_key);
                        $location = str_replace(" ","%20",$location);
                        $location = str_replace(",","%2C+",$location);
                        $url = "http://www.yellowpages.com/$first_key/$key?g=$location&ic=lite&page=1";
                        $ch = curl_init( $url );
                        curl_setopt($ch, CURLOPT_URL,$url);
                        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, FALSE);
                        curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, false);
                        curl_setopt ($ch, CURLOPT_HEADER, true);
                        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
                        $data = curl_exec($ch);
                        curl_close($ch);
                        return self::grepData($data);
                }
		public function grepData($data)
                {
                        $data = str_replace("\n"," ",$data);
                        $count = 0;
                        $result = "";
                        if(preg_match_all("/div class=\"track-listing\".*?href=\"(.*?)\".*?title=\"(.*?)\".*?street-address\">(.*?),.*?locality\">(.*?)<.*?region\">(.*?)<.*?postal-code\">(.*?)<.*?phone\">(.*?)</",$data,$ma) || preg_match_all("/srp-business-name\">.*?href=\"(.*?)\".*?title=\"(.*?)\".*?street-address\">(.*?),.*?locality\">(.*?)<.*?region\">(.*?)<.*?postal-code\">(.*?)<.*?phone\">(.*?)</",$data,$ma))
                        {
                                for($i=0;$i<count($ma[1]);$i++)
                                {
                                        $result[$count]['url'] = $ma[1][$i];
                                        $result[$count]['name'] = $ma[2][$i];
                                        $result[$count]['address'] = $ma[3][$i];
                                        $result[$count]['city'] = $ma[4][$i];
                                        $result[$count]['state'] = $ma[5][$i];
                                        $result[$count]['zip'] = $ma[6][$i];
                                        $result[$count]['phone'] = $ma[7][$i];
                                        $count++;
				}
                        }
                        if( preg_match_all("/srp-business-name\">.*?href=\"(.*?)\".*?title=\"(.*?)\".*?street-address\">(.*?),.*?locality\">(.*?)<.*?region\">(.*?)<.*?postal-code\">(.*?)<.*?phone\">(.*?)</",$data,$ma))
                        {
                                for($i=0;$i<count($ma[1]);$i++)
                                {
                                        $result[$count]['url'] = $ma[1][$i];
                                        $result[$count]['name'] = $ma[2][$i];
                                        $result[$count]['address'] = $ma[3][$i];
                                        $result[$count]['city'] = $ma[4][$i];
                                        $result[$count]['state'] = $ma[5][$i];
                                        $result[$count]['zip'] = $ma[6][$i];
                                        $result[$count]['phone'] = $ma[7][$i];
                                        $count++;
				}
                        }
                        return $result;
                }
        }
?>
