<?php
/*
$url = "http://www.bls.gov/web/laus/lauhsthl.htm";
                        $ch = curl_init( $url );
                        curl_setopt($ch, CURLOPT_URL,$url);
                        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, FALSE);
                        curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, false);
                        curl_setopt ($ch, CURLOPT_HEADER, true);
                        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
                        $data = curl_exec($ch);
                        curl_close($ch);
			file_put_contents("/tmp/unem.log",$data);

exit;
*/
/*
<TD>Alabama</TD>
<TD ALIGN=center>   6.3</TD>
*/
$data = file_get_contents("/tmp/unem.log");
$data = str_replace("\n", " ",$data);
$count = 1;
if(preg_match_all('/<TD>(.*?)<\/TD>.*?<TD ALIGN=center>(.*?)<\/TD>/',$data,$ma))
{
	for($i=0;$i<count($ma[1]) && $count < 51;$i++)
	{
		$state = trim($ma[1][$i]);
		$ratio = trim($ma[2][$i]);
		$update = "update state set unemployment_rate='$ratio' where name='$state'";
		print "$update\n";
		`mysql -uroot learning -e "$update"`;
		//$count++;
	}
}
?>
