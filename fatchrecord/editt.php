

<html>
<body>
<table border="1">
<form method="post">
<tr>
<td colspan="5"> <center> Edit here </center></td>

</tr>
<tr> 
<td><center>sr_no</center> </td>
<td><center>name</center> </td>
<td><center>address</center> </td>
<td><center>city</center> </td>
<td><center>salary</center> </td>
</tr>
<?php
include('db.php');
if(isset($_GET['id']))
   {
if(!empty($_GET['id']))
    {
		$id=$_GET['id'];
	$res=mysqli_query($link,"select * from fatch where sr_no='$id'");
	
	if(mysqli_num_rows($res)>0)
	{
		
		$row=mysqli_fetch_array($res);
		
	
	//	
	
			echo "
			<tr>
			
		<td> <input type='text' name='sr_no' value=".$row['sr_no']." /></td>
				<td> <input type='text' name='name' value=".$row['name']." /></td>
					<td> <input type='text' name='address' value=".$row['address']." /></td>
					<td> <input type='text' name='city' value=".$row['city']." /></td>
					<td><input type='text' name='salary' value=".$row['salary']." /> </td>
			
			</tr>
			";
			extract($_POST);
	if(isset($sub))
		{
		
		
		if(mysqli_query($link,"update fatch set sr_no='$sr_no',name='$name',address='$address',city='$city',salary='$salary'"))
			{
			
			header('location:index.php');
			}
		}
	
	}
	}
	}
?>



<tr><td colspan="5"> <center><input type="submit" name="sub" value="Edit" /></center></td></tr>
</table>
</form>
</body>
</html>
