<?php
include('db.php');
if(isset($_GET['id']))
{
	if(!empty($_GET['id']))
	{
		$id=$_GET['id'];
		$del=mysqli_query($link,"delete from fatch where sr_no='$id'");
		if($del)
		{
			header('location:index.php');
			
			}
	         }
			else
			{
				echo "empty record";
				}
		}
	
	else
	{
		echo " invalid calling";
		}

?>