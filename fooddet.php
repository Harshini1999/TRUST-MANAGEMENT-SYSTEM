<?php
$name=$_POST['name'] ;
$food=$_POST['food'];
$quan=$_POST['quan'];
$phone=$_POST['phone'];
$add=$_POST['add'];
  if (empty($_POST['name'])) {
   echo "NAME IS REQUIRED!!! ".'<br>';
  } else {
    $name = test_input($_POST['name']);
    // check if name only contains letters and whitespace
    if (!preg_match("/^[a-zA-Z  ]*$/",$name)) {
      echo "ONLY LETTERS AND WHITE SPACE ALLOWED IN NAME , NO NUMBERS !!!!!!".'<br>'; 
    }
  }
 if (empty($_POST['food'])) {
   echo "FOOD ITEM  NAME IS MUST TO DONATE !!! ".'<br>';
  }
if($quan<0){
echo "QUANTITY OF FOOD CAN'T BE NEGATIVE VALUE";
}
function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
$x=$quan+5;
if(($quan>0)&&(!empty($_POST['food']))&&(!empty($_POST['name']))) {
echo  "$name    Offered   $food   for about  approximately $x persons".'<br>';
echo "Contact details :".'<br>';
echo "$phone".'<br>';
echo "Address :".'<br>';
echo "$add";
}
?>