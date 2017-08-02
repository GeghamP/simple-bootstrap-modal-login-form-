<?php
$login=$_POST['login'];
$password=$_POST['password'];
$res=[];
$users=[
	[
		'login'=>'aram',
		'password'=>'123456'
	],
	[
		'login'=>'ani',
		'password'=>'456789'
	],
	[
		'login'=>'karen',
		'password'=>'789123'
	],
	[
		'login'=>'milena',
		'password'=>'1111'
	]
];

foreach($users as $user){
	if($login===$user['login'] && $password===$user['password']){
		$res['success']='Barev '.$login;
		break;
	}
}
if(!isset($res['success'])){
	$res['error']='Sxal login kam parol';
}
echo json_encode($res);
?>
