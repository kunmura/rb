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

<?php
	// 変数定義
	$blue_short_array;
	$blue_middle_array;
	$blue_long_array;
	$blue_short_array_hp;
	$blue_middle_array_hp;
	$blue_long_array_hp;
	$red_short_array;
	$red_middle_array;
	$red_long_array;
	$red_short_array_hp;
	$red_middle_array_hp;
	$red_long_array_hp;
	
	$MAX_HP = 5;
	$DAMAGE_ARRAY = array(1,2,3);
	
	$battle_turn = 0;
	
	// POSTデータ格納
	for($i=0;$i<3;$i++){
		if($_POST["short_".$i]=="on"){
			$blue_short_array[$i] = 1;
			$blue_short_array_hp[$i] = $MAX_HP;
		}else{
			$blue_short_array[$i] = 0;
			$blue_short_array_hp[$i] = 0;
		}
		if($_POST["red_short_".$i]=="on"){
			$red_short_array[$i] = 1;
			$red_short_array_hp[$i] = $MAX_HP;
		}else{
			$red_short_array[$i] = 0;
			$red_short_array_hp[$i] = 0;
		}
		
		if($_POST["middle_".$i]=="on"){
			$blue_middle_array[$i] = 1;
			$blue_middle_array_hp[$i] = $MAX_HP;
		}else{
			$blue_middle_array[$i] = 0;
			$blue_middle_array_hp[$i] = 0;
		}
		if($_POST["red_middle_".$i]=="on"){
			$red_middle_array[$i] = 1;
			$red_middle_array_hp[$i] = $MAX_HP;
		}else{
			$red_middle_array[$i] = 0;
			$red_middle_array_hp[$i] = 0;
		}
		
		if($_POST["long_".$i]=="on"){
			$blue_long_array[$i] = 1;
			$blue_long_array_hp[$i] = $MAX_HP;
		}else{
			$blue_long_array[$i] = 0;
			$blue_long_array_hp[$i] = 0;
		}
		if($_POST["red_long_".$i]=="on"){
			$red_long_array[$i] = 1;
			$red_long_array_hp[$i] = $MAX_HP;
		}else{
			$red_long_array[$i] = 0;
			$red_long_array_hp[$i] = 0;
		}
	}
	
	// シミュレーター
	++$battle_turn;
	checkHp();
	battleLong();
	
	function checkHp(){
		global $blue_short_array_hp;
		global $blue_middle_array_hp;
		global $blue_long_array_hp;
		global $red_short_array_hp;
		global $red_middle_array_hp;
		global $red_long_array_hp;
		$blue=0;
		for($i=0;$i<3;$i++){
			$blue += $blue_short_array_hp[$i] + $blue_middle_array_hp[$i] + $blue_long_array_hp[$i];
		}
		$red=0;
		for($i=0;$i<3;$i++){
			$red += $red_short_array_hp[$i] + $red_middle_array_hp[$i] + $red_long_array_hp[$i];
		}
		echo("blue:".$blue." vs red:".$red);
	}
	
	function battleLong(){
		global $blue_short_array;
		global $blue_middle_array;
		global $blue_long_array;
		global $red_short_array;
		global $red_middle_array;
		global $red_long_array;
		global $blue_short_array_hp;
		global $blue_middle_array_hp;
		global $blue_long_array_hp;
		global $red_short_array_hp;
		global $red_middle_array_hp;
		global $red_long_array_hp;
		global $DAMAGE_ARRAY;
		
		if($blue_long_array[0]==1){
			if($red_long_array[0]==1){
				$red_long_array_hp[0] -= $DAMAGE_ARRAY[2];
				battleLog("青遠距離",0,"赤遠距離",0,$DAMAGE_ARRAY[2],$red_long_array_hp[0]);
			}else if($red_long_array[1]==1){
				$red_long_array_hp[1] -= $DAMAGE_ARRAY[2];
				battleLog("青遠距離",0,"赤遠距離",1,$DAMAGE_ARRAY[2],$red_long_array_hp[1]);
			}else if($red_long_array[2]==1){
				$red_long_array_hp[2] -= $DAMAGE_ARRAY[2];
				battleLog("青遠距離",0,"赤遠距離",2,$DAMAGE_ARRAY[2],$red_long_array_hp[2]);
			}
		}
		if($blue_long_array[1]==1){
			if($red_long_array[1]==1){
				$red_long_array_hp[1] -= $DAMAGE_ARRAY[2];
				battleLog("青遠距離",1,"赤遠距離",1,$DAMAGE_ARRAY[2],$red_long_array_hp[1]);
			}else if($red_long_array[0]==1){
				$red_long_array_hp[0] -= $DAMAGE_ARRAY[2];
				battleLog("青遠距離",1,"赤遠距離",0,$DAMAGE_ARRAY[2],$red_long_array_hp[0]);
			}else if($red_long_array[2]==1){
				$red_long_array_hp[2] -= $DAMAGE_ARRAY[2];
				battleLog("青遠距離",1,"赤遠距離",2,$DAMAGE_ARRAY[2],$red_long_array_hp[2]);
			}
		}
		if($blue_long_array[2]==1){
			if($red_long_array[2]==1){
				$red_long_array_hp[2] -= $DAMAGE_ARRAY[2];
				battleLog("青遠距離",2,"赤遠距離",2,$DAMAGE_ARRAY[2],$red_long_array_hp[2]);
			}else if($red_long_array[1]==1){
				$red_long_array_hp[1] -= $DAMAGE_ARRAY[2];
				battleLog("青遠距離",2,"赤遠距離",1,$DAMAGE_ARRAY[2],$red_long_array_hp[1]);
			}else if($red_long_array[0]==1){
				$red_long_array_hp[0] -= $DAMAGE_ARRAY[2];
				battleLog("青遠距離",2,"赤遠距離",0,$DAMAGE_ARRAY[2],$red_long_array_hp[0]);
			}
		}

		if($red_long_array[0]==1){
			if($blue_long_array[0]==1){
				$blue_long_array_hp[0] -= $DAMAGE_ARRAY[2];
				battleLog("赤遠距離",0,"青遠距離",0,$DAMAGE_ARRAY[2],$blue_long_array_hp[0]);
			}else if($blue_long_array[1]==1){
				$blue_long_array_hp[1] -= $DAMAGE_ARRAY[2];
				battleLog("赤遠距離",0,"青遠距離",1,$DAMAGE_ARRAY[2],$blue_long_array_hp[1]);
			}else if($blue_long_array[2]==1){
				$blue_long_array_hp[2] -= $DAMAGE_ARRAY[2];
				battleLog("赤遠距離",0,"青遠距離",2,$DAMAGE_ARRAY[2],$blue_long_array_hp[2]);
			}
		}
		if($red_long_array[1]==1){
			if($blue_long_array[1]==1){
				$blue_long_array_hp[1] -= $DAMAGE_ARRAY[2];
				battleLog("赤遠距離",0,"青遠距離",1,$DAMAGE_ARRAY[2],$blue_long_array_hp[1]);
			}else if($blue_long_array[0]==1){
				$blue_long_array_hp[0] -= $DAMAGE_ARRAY[2];
				battleLog("赤遠距離",0,"青遠距離",0,$DAMAGE_ARRAY[2],$blue_long_array_hp[0]);
			}else if($blue_long_array[2]==1){
				$blue_long_array_hp[2] -= $DAMAGE_ARRAY[2];
				battleLog("赤遠距離",0,"青遠距離",2,$DAMAGE_ARRAY[2],$blue_long_array_hp[2]);
			}
		}
		if($red_long_array[2]==1){
			if($blue_long_array[2]==1){
				$blue_long_array_hp[2] -= $DAMAGE_ARRAY[2];
				battleLog("赤遠距離",0,"青遠距離",2,$DAMAGE_ARRAY[2],$blue_long_array_hp[2]);
			}else if($blue_long_array[0]==1){
				$blue_long_array_hp[0] -= $DAMAGE_ARRAY[2];
				battleLog("赤遠距離",0,"青遠距離",0,$DAMAGE_ARRAY[2],$blue_long_array_hp[0]);
			}else if($blue_long_array[1]==1){
				$blue_long_array_hp[1] -= $DAMAGE_ARRAY[2];
				battleLog("赤遠距離",0,"青遠距離",1,$DAMAGE_ARRAY[2],$blue_long_array_hp[1]);
			}
		}
	}
	
	function battleLog($atkTeamName,$atkPlayer,$defTeamName,$defPlayer,$damage,$hp){
		echo("<p>".$atkTeamName.$atkPlayer."が".$defTeamName.$defPlayer."に".$damage."のダメージ。残りHP=".$hp."</p>");
	}
?>

<h2>バトル</h2>
<div id="map">
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
					<?php
						if($blue_long_array[0]==1){
							echo("▲");
						}else{
							echo("□");
						}
					?>
				</td>
				<td>
					<?php
						if($blue_middle_array[0]==1){
							echo("■");
						}else{
							echo("□");
						}
					?>
				</td>
				<td>
					<?php
						if($blue_short_array[0]==1){
							echo("●");
						}else{
							echo("□");
						}
					?>
				</td>
				<td>
					<?php
						if($red_short_array[0]==1){
							echo("●");
						}else{
							echo("□");
						}
					?>
				</td>
				<td>
					<?php
						if($red_middle_array[0]==1){
							echo("■");
						}else{
							echo("□");
						}
					?>
				</td>
				<td>
					<?php
						if($red_long_array[0]==1){
							echo("▲");
						}else{
							echo("□");
						}
					?>
				</td>
			</tr>
			<tr>
				<th>1</th>
				<td>
					<?php
						if($blue_long_array[1]==1){
							echo("▲");
						}else{
							echo("□");
						}
					?>
				</td>
				<td>
					<?php
						if($blue_middle_array[1]==1){
							echo("■");
						}else{
							echo("□");
						}
					?>
				</td>
				<td>
					<?php
						if($blue_short_array[1]==1){
							echo("●");
						}else{
							echo("□");
						}
					?>
				</td>
				<td>
					<?php
						if($red_short_array[1]==1){
							echo("●");
						}else{
							echo("□");
						}
					?>
				</td>
				<td>
					<?php
						if($red_middle_array[1]==1){
							echo("■");
						}else{
							echo("□");
						}
					?>
				</td>
				<td>
					<?php
						if($red_long_array[1]==1){
							echo("▲");
						}else{
							echo("□");
						}
					?>
				</td>
			</tr>
			<tr>
				<th>2</th>
				<td>
					<?php
						if($blue_long_array[2]==1){
							echo("▲");
						}else{
							echo("□");
						}
					?>
				</td>
				<td>
					<?php
						if($blue_middle_array[2]==1){
							echo("■");
						}else{
							echo("□");
						}
					?>
				</td>
				<td>
					<?php
						if($blue_short_array[2]==1){
							echo("●");
						}else{
							echo("□");
						}
					?>
				</td>
				<td>
					<?php
						if($red_short_array[2]==1){
							echo("●");
						}else{
							echo("□");
						}
					?>
				</td>
				<td>
					<?php
						if($red_middle_array[2]==1){
							echo("■");
						}else{
							echo("□");
						}
					?>
				</td>
				<td>
					<?php
						if($red_long_array[2]==1){
							echo("▲");
						}else{
							echo("□");
						}
					?>
				</td>
			</tr>
		</table>
	</div>
</div>

<h2>バトルログ</h2>
<div id="box">
	<p>▲ = 遠距離の同じラインの敵もしくは近くの敵（同じライン優先）を攻撃</p>
</div>

</body>
</html>