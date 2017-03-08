<?php
include('db.php');
?>
<html>
<table width="300" border="2">
  <tr>
    <td colspan="7" style="text-align: center">Index page</td>
  </tr>
  <tr><td colspan="7" style="text-align: center"><a href="addblock.php">Addblock</a></td></tr>
  <tr>
    <td>sr_no</td>
    <td>name</td>
    <td>address</td>
    <td>city</td>
    <td>salary</td>
    <td>Delete</td>
    <td>Edit </td>
  </tr>

<?php
error_reporting(0);
$sel=mysqli_query($link,"select * from fatch order by salary desc");
if(mysqli_num_rows($sel)>0)
{
	
	while($row=mysqli_fetch_array($sel))
	{
		$id=$row['sr_no'];
		echo"<tr>
		
			<td>".$row['sr_no']."</td>
				<td>".$row['name']."</td>
					<td>".$row['address']."</td>
					<td>".$row['city']."</td>
					<td>".$row['salary']."</td>
					<td><a href='del.php?id=$id'> delete</a></td>
					<td><a href='editt.php?id=$id'> edit </a></td>
		</tr>";
	
	}
}
		else
		{
			echo " <tr><td colspan='7'><center> Not data found </center></td></tr> ";
			}
		
	

?>
</table>
</html>