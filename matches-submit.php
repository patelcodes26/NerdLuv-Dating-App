<?php // This file is used to get relevent matches for the user.?>

<?php 
// The header is defined in common.php and it is accessed by invoking the function.
	include('common.php');
	head();
?>

<?php
// This section checks if the input is empty or available in the file and returns output based on it.

if(!preg_match('/^.+$/',$_GET["name"])){
	noinput();
} else {
	$users=file("singles.txt");
	$count=0;
	foreach($users as $x){
	list($name)=explode(',',$x);
	
	if($_GET["name"]===$name) {
		$count+=1;
		break;
	}
}
if($count==1){
	$users=file("singles.txt");
	foreach($users as $x){
	list($name, $gender, $age, $personality, $os, $min, $max, $gpref)=explode(',',$x);
	
	if($_GET["name"]===$name){
	
		echo '<h3 class="user_name">Matches for '.$_GET["name"].'</h3>';
		$conn=array();
		$user_max=$max;
		$user_min=$min;
		$user_os=$os;
		$user_age=$age;
		$user_gen=$gender;
		$user_ptype=$personality;
		$user_pref=$gpref;
		break;
	}
}
	$user_check=str_split($user_ptype);
	foreach($users as $x)	{
		list($name, $gender, $age, $personality, $os, $min, $max, $gpref)=explode(',',$x);
		$ptype_check=str_split($personality);
		
		if($age>=$user_min && $age<=$user_max && $user_age>=$min && $user_age<=$max && $os===$user_os && array_intersect($user_check,$ptype_check) && str_contains($user_pref,$gender) && str_contains($gpref,$user_gen)){
			
			if($name!=$_GET["name"]) {
				$conn[]= ['name' => $name,
				'gen' => $gender,
				'age' => $age,
				'type' => $personality,
				'fav' => $os];
			}
		}
	}
?>
<?php foreach($conn as $match): // This section is used to display all the matches for the user along with their information.  ?>
		<div class="match">
		<div class="img"><img src="user.png" alt="<?= $match['name']; ?>"></div>
		<div class="data"><h4 class="user"><?= $match['name']; ?></h4>
		<ul>
		<li><pre><b>gender:</b>    <?= $match['gen']; ?></pre></li>
		<li><pre><b>age:</b>       <?= $match['age']; ?></pre></li>
		<li><pre><b>type:</b>      <?= $match['type']; ?></pre></li>
		<li><pre><b>OS:</b>        <?= $match['fav']; ?></pre></li>
		</ul>
		</div>
		</div>
		<br><br><br><br><br><br><br><br><br><br><br><br><br><br><?php endforeach; ?>
<?php 
// This part invokes the function when the user data is not available in the file.
}
	else {
	nodata();
	} 
}
?>
<div style="margin-left:20px;margin-top:30px;width:500px;">
<?php
// The footer information is accessed by invoking foot().
	foot();
?>
</div>
</body>
</html>
