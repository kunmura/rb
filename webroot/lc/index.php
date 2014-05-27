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
					<input type="checkbox" name="red_0" checked="checked">
				</td>
				<td>
					<input type="checkbox" name="red_1" checked="checked">
				</td>
				<td>
					<input type="checkbox" name="red_2">
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
					<input type="checkbox" name="red_3" checked="checked">
				</td>
				<td>
					<input type="checkbox" name="red_4" checked="checked">
				</td>
				<td>
					<input type="checkbox" name="red_5">
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
					<input type="checkbox" name="red_6">
				</td>
				<td>
					<input type="checkbox" name="red_7" checked="checked">
				</td>
				<td>
					<input type="checkbox" name="red_8">
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
	<p>HPは全員5</p>
	<p>青先行で攻撃はAGIに基づき交互に行う</p>
	<p>近（●） = 近距離の同じラインの敵もしくは近くの敵（同じ距離とライン優先）を攻撃</p>
	<p>与ダメージ（近：3pt 中：2pt 遠：1pt） / AGI：1</p>
	<p>中（■） = 中距離の同じラインの敵もしくは近くの敵（同じ距離とライン優先）を攻撃</p>
	<p>与ダメージ（近：2pt 中：2pt 遠：2pt） / AGI：2</p>
	<p>遠（▲） = 遠距離の同じラインの敵もしくは近くの敵（同じ距離とライン優先）を攻撃</p>
	<p>与ダメージ（近：1pt 中：2pt 遠：3pt） / AGI：3</p>
	<hr>
	<p>距離によるダメージ減算ありません</p>
</div>

</body>
</html>