<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title></title>
</head>
<body>
<?php

$my_string = "Hello lulu !!";
$my_int = 10;
$my_state = TRUE;
$b = "</br>";
$my_users = array(0 => 'JP',
                  1 => 'DD',
                  2 => 'MC',
                  3 => 'JFK'
 );
//tableau associatif
$users  = array(
	0 => array(
	'id'   => 1,
	'name' => 'JF',
	'email' => 'jf@v.com'
	
	),
	1 => array(
	'id'   => 2,
	'name' => 'JB',
	'email' => 'jB@v.com',
	),
    2 => array(
	'id'   => 3,
	'name' => 'JC',
	'email' => 'jc@v.com',
	)
	);

print $my_string;  echo $b;
print $my_users[3]; echo $b;
print $my_state;
foreach ($my_users  as $id => $name) {
	$markup = $id . ' => ' . $name . '<br>';
	print $markup;
}
echo $b;
foreach ($my_users as  $name) {
	print $name . '<br>';
}
echo $b;
print'<pres>';
print_r ($users);
print'</pres>';
foreach ($users as  $user) {
	print 'Nom: '. $user['name'] .'<br>';
	print 'Email: '. $user['email'] .'<br>';
}

?>
</body>
</html>

