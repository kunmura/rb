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
<h2>バトル</h2>
<div id="map">
	<form method="post" action="result.php">
	<div>
		<table>
			<tr>
				<th></th>
				<th class="blue">遠</th>
				<th class="blue">中</th>
				<th class="blue">近</th>
				<th class="red">近</th>
				<th class="red">中</th>
				<th class="red">遠</th>
			</tr>
			<tr>
				<th>0</th>
				<td>
					<input type="checkbox" name="long_0">
				</td>
				<td>
					<input type="checkbox" name="middle_0">
				</td>
				<td>
					<input type="checkbox" name="short_0">
				</td>
				<td>
					<input type="checkbox" name="red_short_0">
				</td>
				<td>
					<input type="checkbox" name="red_middle_0">
				</td>
				<td>
					<input type="checkbox" name="red_long_0">
				</td>
			</tr>
			<tr>
				<th>1</th>
				<td>
					<input type="checkbox" name="long_1">
				</td>
				<td>
					<input type="checkbox" name="middle_1">
				</td>
				<td>
					<input type="checkbox" name="short_1">
				</td>
				<td>
					<input type="checkbox" name="red_short_1">
				</td>
				<td>
					<input type="checkbox" name="red_middle_1">
				</td>
				<td>
					<input type="checkbox" name="red_long_1">
				</td>
			</tr>
			<tr>
				<th>2</th>
				<td>
					<input type="checkbox" name="long_2">
				</td>
				<td>
					<input type="checkbox" name="middle_2">
				</td>
				<td>
					<input type="checkbox" name="short_2">
				</td>
				<td>
					<input type="checkbox" name="red_short_2">
				</td>
				<td>
					<input type="checkbox" name="red_middle_2">
				</td>
				<td>
					<input type="checkbox" name="red_long_2">
				</td>
			</tr>
		</table>
	</div>
	<div>
		<input type="submit" value="バトルスタート">
	</div>
	</form>
</div>

<h2>ルール</h2>
<div id="box">
	<p>HP = 5pt</p>
	<p>● = 近距離の同じラインの敵もしくは近くの敵（同じライン優先）を攻撃</p>
	<p>● = 与ダメージ（近：3pt 中：2pt 遠：1pt） / AGI：1</p>
	<p>■ = 中距離の同じラインの敵もしくは近くの敵（同じライン優先）を攻撃</p>
	<p>■ = 与ダメージ（近：2pt 中：2pt 遠：2pt） / AGI：2</p>
	<p>▲ = 遠距離の同じラインの敵もしくは近くの敵（同じライン優先）を攻撃</p>
	<p>▲ = 与ダメージ（近：1pt 中：2pt 遠：3pt） / AGI：3</p>
</div>

</body>
</html>