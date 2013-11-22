<?php
require "connectDB.php";
/*$sel = "select id,code from state";
$re = $obj->select($sel);
for($i=0;$i<count($re);$i++)
{
	$id = $re[$i]['id'];
	$code = trim($re[$i]['code']);
	$update = "update county set state_code='$code' where state_id='$id'";
	$obj->mysql_query($update);
}
exit;
*/
$id = 1;
	$sel = "select city,state_code,latitude,longitude from cities_extended order by zip";
	$rec = $obj->select($sel);
	for($k=0;$k<count($rec);$k++)
	{
		$city = trim($rec[$k]['city']);
		$lati = trim($rec[$k]['latitude']);
		$longi = trim($rec[$k]['longitude']);
		$state_code = trim($rec[$k]['state_code']);
		$insert = "insert into zipcode (id,state_code,city,latitude,longitude) values ($id,'$state_code','$city','$lati','$longi')";
		print "$insert\n";
		$obj->mysql_query($insert);
		$id++;
	}
?>
