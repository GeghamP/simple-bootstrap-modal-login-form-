<?php
$login=$_POST['login'];
$password=$_POST['password'];
$res=[];
$users=[
	[
		'login'=>'gexam',
		'password'=>'123456'
	],
	[
		'login'=>'anna',
		'password'=>'456789'
	],
	[
		'login'=>'some',
		'password'=>'789123'
	],
	[
		'login'=>'james',
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