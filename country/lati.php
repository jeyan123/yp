<?php
/*
$url = "http://www.inkplant.com/code/state-latitudes-longitudes.php";
                        $ch = curl_init( $url );
                        curl_setopt($ch, CURLOPT_URL,$url);
                        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, FALSE);
                        curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, false);
                        curl_setopt ($ch, CURLOPT_HEADER, true);
                        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
                        $data = curl_exec($ch);
                        curl_close($ch);
			file_put_contents("/tmp/latitude.log",$data);

exit;
*/
/*
<tr><td>Alabama</td><td>32.806673</td><td>-86.791133</td></tr><tr><td>Alaska</td><td>61.370717</td><td>-152.404420</td></tr>
*/
$data = file_get_contents("/tmp/latitude.log");
$data = str_replace("\n", " ",$data);
$count = 1;
if(preg_match_all('/<tr><td>(.*?)<\/td><td>(\d+.*?)<\/td><td>(.*?)<\/td>/',$data,$ma))
{
	for($i=0;$i<count($ma[1]) && $count < 51;$i++)
	{
		$state = $ma[1][$i];
		if(preg_match('/thead><tr><td>(.*)/',$state,$mat))
			$state = $mat[1];
		$latitude = $ma[2][$i];
		$longitude  = $ma[3][$i];
		$update = "update state set latitude=$latitude,longitude=$longitude where name='$state'";
		print "$update\n";
		`mysql -uroot learning -e "$update"`;
		//$count++;
	}
}
?>
