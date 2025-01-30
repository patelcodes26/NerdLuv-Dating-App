<?php // This file is used to validate the signup information of the user.?>

<?php 
// The header is defined in common.php and it is accessed by invoking the function.
	include('common.php');
	head();
?>

<?php
// This section is used to check if the data input by the user is invalid or already existing and returns output based on it.
$OS = ['Windows', 'Mac', 'Linux'];
if(!preg_match('/^.+$/',$_POST["fullname"]) || !preg_match('/^(?:[0-9]|[1-9][0-9])$/', $_POST["age"]) || !preg_match('/^(M|F)$/', $_POST["gen"]) || !preg_match('/^[IE][NS][FT][JP]$/',$_POST["ptype"]) || !in_array($_POST["fav"], $OS) || !preg_match('/^(?:[0-9]|[1-9][0-9])$/', $_POST["minage"]) || empty($_POST["genpref"]) || !preg_match('/^(?:[0-9]|[1-9][0-9])$/', $_POST["maxage"]) && ($_POST["minage"] > $_POST["maxage"])) {
	
	invalidinput();

} else {
	
	$users=file("singles.txt");
	$count=0;
	$user_pref=implode('',$_POST["genpref"]);
		foreach($users as $x)	{
		list($name, $gender, $age, $personality, $os, $min, $max, $gpref)=explode(',',$x);
		
		if($name==$_POST["fullname"] && $gender==$_POST["gen"] && $age==$_POST["age"] && $personality==$_POST["ptype"] && $os==$_POST["fav"] && $min==$_POST["minage"] && $max==$_POST["maxage"] && $gpref==$user_pref){
			$count=$count+1;
			dataexist();
			break;
		}
	}
	
// This part gets executed if there is no existing data in file for the input given and the user data gets stored in the text file.

if($count==0)	{
?>
	<h2>Thank You!</h2>
	
<?php $user=$_POST["fullname"]; ?>

	<div style="margin-left:18px;width:500px;">
	<p>Welcome to NerdLuv, <?= $user ?>!</p>
	<p>Now <a href="matches.php">log in to see your matches!</a></p>
	</div>
	
<?php 
// The form data is stored in a text file seperated by comma.
	$gen=$_POST["gen"];
	$age=$_POST["age"];
	$ptype=$_POST["ptype"];
	$fav=$_POST["fav"];
	$min=$_POST["minage"];
	$max=$_POST["maxage"];
	$gpref=implode("",$_POST["genpref"]);
	$data="\n".$user.",".$gen.",".$age.",".$ptype.",".$fav.",".$min.",".$max.",".$gpref;
	
		if(isset($user,$gen,$age,$ptype,$fav,$min,$max,$gpref))	{
			file_put_contents("singles.txt",$data,FILE_APPEND);
		}
?>

<?php
}
}
?>

<div style="margin-left:18px;margin-top:30px;width:500px;">
<?php
// The footer information is accessed by invoking foot().
foot();
?>

</body>
</html>