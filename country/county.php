<?php
require "connectDB.php";
$sel = "select code,id from state";
$re = $obj->select($sel);
$count = 1;
for($i=0;$i<count($re);$i++)
{
	$code = $re[$i]['code'];
	$id = $re[$i]['id'];
	$sel = "select distinct county from cities_extended where state_code='$code'";
	$rec = $obj->select($sel);
	for($k=0;$k<count($rec);$k++)
	{
		$county = trim($rec[$k]['county']);
		$insert = "insert into county (id,name,state_id) values($count,'$county',$id)";
		$obj->mysql_query($insert);
		$count++;
	}
}
?>
