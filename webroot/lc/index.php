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
<h2>クエスト</h2>
<ul>
	<li>ステージ 1-1 (<a href="battle.php?stage=1-1&red[]=0&red[]=0&red[]=0&red[]=1&red[]=0&red[]=0&red[]=0&red[]=0&red[]=0&isBoss=0&text=中1,近1">GO</a>)</li>
	<li>ステージ 1-2 (<a href="battle.php?stage=1-2&red[]=0&red[]=0&red[]=0&red[]=1&red[]=0&red[]=0&red[]=0&red[]=0&red[]=0&isBoss=0&text=中1,近1">GO</a>)</li>
	<li>ステージ 1-3 (<a href="battle.php?stage=1-3&red[]=0&red[]=0&red[]=0&red[]=0&red[]=1&red[]=0&red[]=0&red[]=0&red[]=0&isBoss=1&boss=4&text=中1,近1">BOSS</a>)</li>
	<hr>
	<li>ステージ 2-1 (<a href="battle.php?stage=2-1&red[]=1&red[]=0&red[]=0&red[]=0&red[]=1&red[]=0&red[]=0&red[]=0&red[]=0&isBoss=0&text=遠1,中1,近1">GO</a>)</li>
	<li>ステージ 2-2 (<a href="battle.php?stage=2-2&red[]=1&red[]=0&red[]=0&red[]=0&red[]=1&red[]=0&red[]=0&red[]=0&red[]=0&isBoss=0&text=遠1,中1,近1">GO</a>)</li>
	<li>ステージ 2-3 (<a href="battle.php?stage=2-3&red[]=0&red[]=0&red[]=0&red[]=1&red[]=1&red[]=0&red[]=0&red[]=0&red[]=0&isBoss=1&boss=4&text=遠1,中1,近1">BOSS</a>)</li>
	<hr>
	<li>ステージ 3-1 (<a href="battle.php?stage=3-1&red[]=0&red[]=0&red[]=0&red[]=0&red[]=1&red[]=1&red[]=0&red[]=0&red[]=0&isBoss=0&text=遠1,中1,近1">GO</a>)</li>
	<li>ステージ 3-2 (<a href="battle.php?stage=3-2&red[]=0&red[]=0&red[]=0&red[]=1&red[]=0&red[]=1&red[]=0&red[]=0&red[]=0&isBoss=0&text=遠1,中1,近1">GO</a>)</li>
	<li>ステージ 3-3 (<a href="battle.php?stage=3-3&red[]=0&red[]=0&red[]=0&red[]=0&red[]=1&red[]=1&red[]=0&red[]=0&red[]=0&isBoss=1&boss=4&text=遠1,中1,近1">BOSS</a>)</li>
	<hr>
	<li>ステージ 4-1 (<a href="battle.php?stage=4-1&red[]=1&red[]=0&red[]=0&red[]=0&red[]=1&red[]=0&red[]=0&red[]=0&red[]=1&isBoss=0&text=遠1,中1,近2">GO</a>)</li>
	<li>ステージ 4-2 (<a href="battle.php?stage=4-2&red[]=1&red[]=0&red[]=1&red[]=0&red[]=1&red[]=0&red[]=0&red[]=0&red[]=0&isBoss=0&text=遠1,中1,近2">GO</a>)</li>
	<li>ステージ 4-3 (<a href="battle.php?stage=4-3&red[]=1&red[]=0&red[]=0&red[]=0&red[]=1&red[]=0&red[]=0&red[]=0&red[]=1&isBoss=1&boss=4&text=遠1,中1,近2">BOSS</a>)</li>
	<hr>
	<li>ステージ 5-1 (<a href="battle.php?stage=5-1&red[]=1&red[]=0&red[]=0&red[]=0&red[]=1&red[]=0&red[]=1&red[]=0&red[]=1&isBoss=0&text=遠1,中1,近2">GO</a>)</li>
	<li>ステージ 5-2 (<a href="battle.php?stage=5-2&red[]=1&red[]=1&red[]=1&red[]=0&red[]=1&red[]=0&red[]=0&red[]=0&red[]=0&isBoss=0&text=遠1,中1,近2">GO</a>)</li>
	<li>ステージ 5-3 (<a href="battle.php?stage=5-3&red[]=1&red[]=0&red[]=0&red[]=0&red[]=1&red[]=0&red[]=1&red[]=0&red[]=1&isBoss=1&boss=4&text=遠1,中1,近2">BOSS</a>)</li>
</ul>

<!--
<h2>ルール</h2>
<div id="box">
	<p>HPは全員<font color="red">10pt</font></p>
	<p><font color="red">赤</font>先行で攻撃はAGIに基づき交互に行う</p>
	<p>近（●） = 近距離の同じラインの敵もしくは近くの敵（同じ距離とライン優先）を攻撃</p>
	<p>与ダメージ（近：<font color="red">6pt</font> 中：<font color="red">4pt</font> 遠：<font color="red">1pt</font>） / AGI：1</p>
	<p>中（■） = 中距離の同じラインの敵もしくは近くの敵（同じ距離とライン優先）を攻撃</p>
	<p>与ダメージ（近：<font color="red">4pt</font> 中：<font color="red">4pt</font> 遠：<font color="red">2pt</font>） / AGI：2</p>
	<p>遠（▲） = 遠距離の同じラインの敵もしくは近くの敵（同じ距離とライン優先）を攻撃</p>
	<p>与ダメージ（近：<font color="red">2pt</font> 中：<font color="red">4pt</font> 遠：<font color="red">6pt</font>） / AGI：3</p>
</div>
-->
</body>
</html>