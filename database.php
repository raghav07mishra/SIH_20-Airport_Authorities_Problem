<?php
$con=mysqli_connect('localhost','root','','mydb');
$sql="select * from airlines";
$data=mysqli_query($con,$sql);
$total=mysqli_num_rows($data);
//echo $result['id']." ".$result['name']." ".$result['marks'];
?>
<style>
table, th, td {
  border: 2px solid orange;
  border-collapse: collapse;
}
th,td{padding:10px;}
body {color:#fff;
background-image: linear-gradient(rgba(0,0,0,0.9),rgba(0,0,0,0.2)), url(air.png);
	 height:100vh;
	 background-repeat:no-repeat;
	 background-position:center;
}
</style>
<h1><center><b>AIR AUTHORITY DATABASE</b></center></h1>
<marquee behavior="scroll" scrollamount="4" direction="left" style="color:#fff;">THIS DATABASE IS HIGHLY CONFIDENTIAL!! &nbsp  &nbsp  &nbsp ONLY AIRPORT AUTHORITY OWNS THE READ RIGHT...</marquee><br><br>
<table>
	<tr>
		<td><font color="yellow">Airline Name</font></td>
		<td><font color="yellow">Flight No.</font></td>
		<td><font color="yellow">Depa_Code</font></td>
		<td><font color="yellow">Arr_Code</font></td>
		<td><font color="yellow">F_Duration</font></td>
		<td><font color="yellow">OnBP</font></td>
		<td><font color="yellow">OfBP</font></td>
		<td><font color="yellow">Fuel_c</font></td>
		<td><font color="yellow">bagg_cap</font></td>
		<td><font color="yellow">wind_dir</font></td>
		<td><font color="yellow">tyre_p</font></td>
		<td><font color="yellow">radar</font></td>
		<td><font color="yellow">sys_check</font></td>
		<td><font color="yellow">FICheck</font></td>
		<td><font color="yellow">FData_c</font></td>
		<td><font color="yellow">breakSC</font></td>
	</tr>


<?php
//displaying the result in tabular form
while($result=mysqli_fetch_assoc($data))
	echo"<tr>
		<td>".$result['airline_name']."</td>
		<td>".$result['flight_no']."</td>
		<td>".$result['dcode']."</td>
		<td>".$result['acode']."</td>
		<td>".$result['chck']."</td>
		<td>".$result['on_pass']."</td>
		<td>".$result['off_pass']."</td>
		<td>".$result['fuel_capacity']."</td>
		<td>".$result['bagg_capacity']."</td>
		<td>".$result['wind_dir']."</td>
		<td>".$result['tyre_p']."</td>
		<td>".$result['radar']."</td>
		<td>".$result['check1']."</td>
		<td>".$result['check3']."</td>
		<td>".$result['check4']."</td>
		<td>".$result['check5']."</td>
		</tr>";


?>
</table>
