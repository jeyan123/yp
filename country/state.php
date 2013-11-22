<?php
/*
$url = "http://en.wikipedia.org/wiki/List_of_states_and_territories_of_the_United_States";
                        $ch = curl_init( $url );
                        curl_setopt($ch, CURLOPT_URL,$url);
                        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, FALSE);
                        curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, false);
                        curl_setopt ($ch, CURLOPT_HEADER, true);
                        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
                        $data = curl_exec($ch);
                        curl_close($ch);
			file_put_contents("/tmp/state.log",$data);
*/
/*

<tr>
<th scope="row"><span class="flagicon"><img alt="" src="//upload.wikimedia.org/wikipedia/commons/thumb/e/e6/Flag_of_Alaska.svg/21px-Flag_of_Alaska.svg.png" width="21" height="15" class="thumbborder" srcset="//upload.wikimedia.org/wikipedia/commons/thumb/e/e6/Flag_of_Alaska.svg/33px-Flag_of_Alaska.svg.png 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/e/e6/Flag_of_Alaska.svg/43px-Flag_of_Alaska.svg.png 2x" />&#160;</span><a href="/wiki/Alaska" title="Alaska">Alaska</a></th>
<td>AK</td>
<td><a href="/wiki/Juneau,_Alaska" title="Juneau, Alaska">Juneau</a></td>
<td><a href="/wiki/Anchorage,_Alaska" title="Anchorage, Alaska">Anchorage</a></td>
<td>January 3, 1959</td>
<td>731,449</td>
<td><span style="display:none">7005665384000000000</span>665,384 (1,723,337)</td>
<td><span style="display:none">7005570641000000000</span>570,641 (1,477,950)</td>
<td><span style="display:none">7004947430000000000</span>94,743 (245,383)</td>
<td>1</td>
</tr>
*/
$data = file_get_contents("/tmp/state.log");
$data = str_replace("\n", " ",$data);
$count = 1;
if(preg_match_all('/<tr>.*?<th scope="row"><span class="flagicon"><img.*?title=.*?>(.*?)<\/a>.*?<td>(.*?)<\/td>.*?">(.*?)<\/a>.*?title=.*?>(.*?)<\/a>.*?<td>(\d+.*?)<\/td>.*?<\/span>(\d+.*?)<\/td>.*?<\/span>(\d+.*?)<\/td>.*?<\/span>(\d+.*?)<\/td>.*?<td>(\d+)<\/td>/',$data,$ma))
{
	for($i=0;$i<count($ma[1]) && $count < 51;$i++)
	{
		$name = $ma[1][$i];
		$state = $ma[2][$i];
		$capi  = $ma[3][$i];
		$large = $ma[4][$i];
		$pou = $ma[5][$i];
		$area = $ma[6][$i];
		$land = $ma[7][$i];
		$water = $ma[8][$i];
		$seat = $ma[9][$i];
		$insert = "insert into state (id,code,name,capital,country_id,population,area,land_area,water_area,largest_city,seats) values ($count,'$state','$name', '$capi', 1,'$pou', '$area', '$land', '$water', '$large', $seat)";
		`mysql -uroot learning -e "$insert"`;
		$count++;
	}
}
?>
