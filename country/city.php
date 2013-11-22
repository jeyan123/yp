<?php
require "connectDB.php";
$sel = "select id,code from state";
$re = $obj->select($sel);
$id = 1;
for($k=0;$k<count($re);$k++)
{
	$sid = $re[$k]['id'];
	$state = strtolower(trim($re[$k]['code']));
	$url = "http://www.usacitiesonline.com/$state.htm";
                        $ch = curl_init( $url );
                        curl_setopt($ch, CURLOPT_URL,$url);
                        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, FALSE);
                        curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, false);
                        curl_setopt ($ch, CURLOPT_HEADER, true);
                        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
                        $data = curl_exec($ch);
                        curl_close($ch);
			file_put_contents("/tmp/$state.log",$data);

exit;
//*/
/*
<tr itemscope="" itemtype="http://schema.org/City"><td class="ar" id="i12996"><a href="javascript:sym(12996)" class="info">i</a></td><td><span itemprop="name">Alabaster</span></td><td class="t">City</td><td class="n">7,079</td><td class="n">14,732</td><td class="n">23,965</td><td class="n">30,359</td><td class="n">30,991</td><td class="noviz">6486</td></tr>
*/
$data = file_get_contents("/tmp/$state.log");
$data = str_replace("\n", " ",$data);
if(preg_match_all('/itemscope="" itemtype="http:\/\/schema.org\/City">.*?itemprop="name">(.*?)<\/span>.*?<td class="n">.*?<\/td><td class="n">.*?<\/td><td class="n">.*?<\/td><td class="n">.*?<\/td><td class="n">(\d+.*?)<\/td>/',$data,$ma))
{
	for($i=0;$i<count($ma[1]);$i++)
	{
		$city = trim($ma[1][$i]);
		$pop = trim($ma[2][$i]);
		$insert = "insert into city (id,name,population,state_id) values ($id,'$city','$pop',$sid)";
		print "$insert\n";
		`mysql -uroot learning -e "$insert"`;
		$id++;
	}
}
}
?>
