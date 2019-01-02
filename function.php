<?php
require "data_base.php";
function getcatr()
{
	global $con;
	$getcatquery="select * from catageries";
	$result=mysqli_query($con,$getcatquery);

	while($row=mysqli_fetch_assoc($result))
	{
		$title=$row['cat_tittle'];
		$id=$row['cat_id'];
		echo"<li> <a class='nav-link' href='#'> $title</a></li>";
	}
}
function getbrand()
{
	global $con;
	$getbrand="select * from brand";
	$result=mysqli_query($con,$getbrand);

	while($row=mysqli_fetch_assoc($result))
	{
		$title=$row['brand_tittle'];
		$id=$row['b_id'];
		echo"<li> <a class='nav-link' href='#'> $title</a></li>";
	}
}