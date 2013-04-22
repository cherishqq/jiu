<?php
require_once('MysqliDb.php');


$db = new MysqliDb('localhost', 'root', 'root', 'dingcan3');   

if($db){
  echo 'success';
}


?>
<!DOCTYPE html>

<html lang="en">
<head>
	<meta charset="utf-8">
	<title>untitled</title>
</head>
<body>
	
<?php

/**
$insertData = array(
	'`key`' => 'hello',
	'`answer`' => 'hello',
	'`devId`'  => '123321'
);
**/

$a = array (1, 2, array ("a", "b", "c"));

print_r($a);

//$results = $db->insert('user_regular', $insertData);
//print_r($results);

//$params = array(iconv('UTF-8', 'GB2312', '���'),'123');

  $dd = iconv('GB2312','UTF-8','你好');
  echo $dd;
  $params = array($dd);
//$results = $db->get('user_regular');
//$params = array("123");
//$results = $db->rawQuery("select * FROM user_regular WHERE `key` = ? and `devId` = ? ",$params);
$results = $db->rawQuery("select * FROM `user_regular`  where `key` = ? ", $params);
echo "count:".count($results);

foreach($results as $keys => $values ){
	echo $keys;
	echo $values['answer'];
}




?>

</body>
</html>