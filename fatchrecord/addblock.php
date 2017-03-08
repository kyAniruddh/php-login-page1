<?php
error_reporting(1);
extract($_POST);
	if(isset($sub))
	{
include('db.php');
if(mysqli_query($link,"insert into fatch(name,address,city,salary) values('$t1','$t2','$t3','$t4')"))
{
	$msg="record inserted";

	}
	else
	{
		 $msg="record not inserted";
		}
	}
?>

<form name="form1" method="post" action="">
<center><?php echo $msg; ?> </center>
  <table width="300" border="" align="center">
    <tr>
      <td colspan="2" style="text-align: center">Record page</td>
    </tr>
    <tr>
      <td width="126">Name</td>
      <td width="158"><input type="text" name="t1" id="t1"></td>
    </tr>
    <tr>
      <td>Address</td>
      <td><input type="text" name="t2" id="t2"></td>
    </tr>
    <tr>
      <td>city</td>
      <td><input type="text" name="t3" id="t3"></td>
      </tr>
      <tr>
      <td> Salary</td>
       <td><input type="text" name="t4" id="t4"></td>
    </tr>
    <tr>
      <td colspan="2" style="text-align: center"><input type="submit" name="sub" id="sub" value="Submit"></td>
    </tr>
  </table>
  <div align="center"></div>
</form>
