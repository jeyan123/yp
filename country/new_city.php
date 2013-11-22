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
$sel = "select id,name,state_id,state_code from county";
$re = $obj->select($sel);
$id = 1;
for($i=0;$i<count($re);$i++)
{
	$cname = $re[$i]['name'];
        $cid = $re[$i]['id'];
	$sid = $re[$i]['state_id'];
	$state_code = $re[$i]['state_code'];
	$sel = "select city,latitude,longitude from cities_extended where state_code='$state_code' and county='$cname' group by city";
	$rec = $obj->select($sel);
	for($k=0;$k<count($rec);$k++)
	{
		$city = trim($rec[$k]['city']);
		$lati = trim($rec[$k]['latitude']);
		$longi = trim($rec[$k]['longitude']);
	
		$insert = "insert into city (id,name,latitude,longitude,county_id,state_id,state_code) values ($id,'$city','$lati','$longi','$cid','$sid','$state_code')";
		print "$insert\n";
		$obj->mysql_query($insert);
		$id++;
	}
}
?>
