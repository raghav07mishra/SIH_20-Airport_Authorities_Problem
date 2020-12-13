<?php
$s=mysqli_connect('localhost','root','','mydb');
if(!$s)
	 echo "<script type='text/javascript'>
                alert('Sorry!! not connected to database');
            </script>";

$airline_name=$_POST['airline_name'];
$flight_no=$_POST['flight_no'];
$dcode=$_POST['dcode'];
$acode=$_POST['acode'];
$chck=$_POST['check'];
$on_pass=$_POST['on_pass'];
$off_pass=$_POST['off_pass'];
$fuel_capacity=$_POST['fuel_capacity'];
$bagg_capacity=$_POST['bagg_capacity'];
$wind_dir=$_POST['wind_dir'];
$tyre_p=$_POST['tyre_p'];
$waste=$_POST['waste'];
$radar=$_POST['radar'];
$check1=$_POST['check1'];
$check2=$_POST['check2'];
$check3=$_POST['check3'];
$check4=$_POST['check4'];
$check5=$_POST['check5'];
$check6=$_POST['check6'];


$sql="insert into airlines(airline_name,flight_no,dcode,acode,chck,on_pass,off_pass,fuel_capacity,bagg_capacity,wind_dir,tyre_p,waste,radar,check1,check2,check3,check4,check5,check6) 
values('$airline_name','$flight_no','$dcode','$acode','$chck','$on_pass','$off_pass',
'$fuel_capacity','$bagg_capacity','$wind_dir','$tyre_p','$waste','$radar','$check1','$check2','$check3','$check4','$check5','$check6')";
$store=mysqli_query($s,$sql);
echo "<br>";
if($store)
	 echo "<script type='text/javascript'>
                alert('Data have been successfully inserted');
            </script>";
else
	 echo "<script type='text/javascript'>
                alert('Data have not been inserted');
            </script>";
header("refresh:3;url=index.html");
?>