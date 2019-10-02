<?php
$username=$_POST['username'];
$email=$_POST['email'];
$phone=$_POST['phone'];
$add=$_POST['add'];
$amount=$_POST['amount'];


if(strlen($phone)>10)
{
echo "Phone number should be 10 digits<br>"; 
}
else if(strlen($phone)==0)
{
echo "please fill phone number<br>";
}

if( $amount < 1000)
{
echo "donate greather than rs.1000<br>";
}
else if($amount == 0)
{
echo "please donate<br>";
}



echo  "Username:".$username.'<br>' ;

echo "Phone:".$phone.'<br>';

echo "Address:".$add.'<br>';

echo "Amount:".$amount.'<br>';




?>
