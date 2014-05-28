<?php
$stage="";
if($_GET["stage"]){
	$stage=$_GET["stage"];
}

if($_GET["red"]){
	$red_unit_array = array(
		$_GET["red"][0],$_GET["red"][1],$_GET["red"][2],
		$_GET["red"][3],$_GET["red"][4],$_GET["red"][5],
		$_GET["red"][6],$_GET["red"][7],$_GET["red"][8]
		);
}
if($_GET["text"]){
	$text=$_GET["text"];
}

$boss_bool=0;
if($_GET["isBoss"]){
	$boss_bool=$_GET["isBoss"];
}
$boss_num=0;
if($_GET["boss"]){
	$boss_num=$_GET["boss"];
}

function isChecked($num){
	if($num==1){
		echo('checked');
	}
}
?>

<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">
<title></title>
<meta name="description" content="">
<meta name="keywords" content="">
<link href="./layout.css" rel="stylesheet" type="text/css">
<!--[if lt IE 9]>
<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
<script src="http://css3-mediaqueries-js.googlecode.com/svn/trunk/css3-mediaqueries.js"></script>
<![endif]-->
</head>
<body>

<p><a href="./index.php">戻る</a></p>

<h2><?php echo("ステージ ".$stage); ?></h2>
<div id="map">
	<form method="post" action="result3.php">
	<div>
		<table>
			<tr>
				<th class="blue">遠</th>
				<th class="blue">中</th>
				<th class="blue">近</th>
				<th class="red">近</th>
				<th class="red">中</th>
				<th class="red">遠</th>
			</tr>
			<tr>
				<td>
					<input type="checkbox" name="blue_2">
				</td>
				<td>
					<input type="checkbox" name="blue_1">
				</td>
				<td>
					<input type="checkbox" name="blue_0">
				</td>
				<td>
					<input type="checkbox" name="red_0" <?php isChecked($red_unit_array[0]) ?>>
				</td>
				<td>
					<input type="checkbox" name="red_1" <?php isChecked($red_unit_array[1]) ?>>
				</td>
				<td>
					<input type="checkbox" name="red_2" <?php isChecked($red_unit_array[2]) ?>>
				</td>
			</tr>
			<tr>
				<td>
					<input type="checkbox" name="blue_5">
				</td>
				<td>
					<input type="checkbox" name="blue_4">
				</td>
				<td>
					<input type="checkbox" name="blue_3">
				</td>
				<td>
					<input type="checkbox" name="red_3" <?php isChecked($red_unit_array[3]) ?>>
				</td>
				<td>
					<input type="checkbox" name="red_4" <?php isChecked($red_unit_array[4]) ?>>
				</td>
				<td>
					<input type="checkbox" name="red_5" <?php isChecked($red_unit_array[5]) ?>>
				</td>
			</tr>
			<tr>
				<td>
					<input type="checkbox" name="blue_8">
				</td>
				<td>
					<input type="checkbox" name="blue_7">
				</td>
				<td>
					<input type="checkbox" name="blue_6">
				</td>
				<td>
					<input type="checkbox" name="red_6" <?php isChecked($red_unit_array[6]) ?>>
				</td>
				<td>
					<input type="checkbox" name="red_7" <?php isChecked($red_unit_array[7]) ?>>
				</td>
				<td>
					<input type="checkbox" name="red_8" <?php isChecked($red_unit_array[8]) ?>>
				</td>
			</tr>
		</table>
	</div>
	<div>制限【　<?php echo($text) ?>　】</div>
	<div>
		<input type="hidden" value="<?php echo($boss_bool) ?>" name="boss_bool">
		<?php
			if($boss_num){
				echo('<input type="hidden" value="'.$boss_num.'" name="boss_num">');
			}
		?>
		<input type="submit" value="バトルスタート">
	</div>
	</form>
</div>

<h2>バージョン</h2>
<ul>
	<li>ver.3 : 同一ライン優先攻撃</li>
	<li>ver.2 : 配置でダメージ減少</li>
</ul>
</body>
</html>