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
	$blue_unit_array;
	$red_unit_array;
	$blue_unit_hp_array;
	$red_unit_hp_array;
	
	$MAX_HP = 10;
	$DAMAGE_ARRAY = array(0,1,2,3,4,5,6);
	
	$battle_turn = 0;
	
	// POSTデータ格納
	for($i=0;$i<3;$i++){
		for($j=0;$j<3;$j++){
			if($_POST["blue_".($i+3*$j)]=="on"){
				$blue_unit_array[$i+3*$j]=1;
				$blue_unit_hp_array[$i+3*$j]=$MAX_HP;
			}else{
				$blue_unit_array[$i+3*$j]=0;
			}
			if($_POST["red_".($i+3*$j)]=="on"){
				$red_unit_array[$i+3*$j]=1;
				$red_unit_hp_array[$i+3*$j]=$MAX_HP;
			}else{
				$red_unit_array[$i+3*$j]=0;
			}
		}
	}
	drowMap();
	
	// シミュレーター
	do{
	++$battle_turn;
	battleStartLog($battle_turn);
	battle();
	drowMap();
	$end_point=checkHp();
	}while($end_point>0);
	
	function checkHp(){
		global $blue_unit_hp_array;
		global $red_unit_hp_array;
		$blue=0;
		for($i=0;$i<9;$i++){
			$blue += $blue_unit_hp_array[$i];
		}
		$red=0;
		for($i=0;$i<9;$i++){
			$red += $red_unit_hp_array[$i];
		}
		echo("<p>blue：".$blue." 対 red：".$red."</p>");
		
		if($blue<=0){
			return 0;
		}else if($red<=0){
			return 0;
		}
		return 1;
	}
	
	function battleStartLog($turn){
		echo("<h2>ターン：".$turn."</h2>");
	}
	
	function battleLog($atkTeamName,$atkPlayer,$defTeamName,$defPlayer,$damage,$hp){
		echo("<p>".$atkTeamName.$atkPlayer."が".$defTeamName.$defPlayer."に".$damage."のダメージ。残りHP=".$hp."</p>");
	}
	
	function battle(){
		// 変数の定義
		global $blue_unit_array;
		global $red_unit_array;
		global $blue_unit_hp_array;
		global $red_unit_hp_array;
		
		$unit_num=0;
		$blue_turn_bool=0;
		$tmp_priority_blue_unit_num=0;
		$tmp_priority_red_unit_num=0;
		$priority_blue_unit_array = array(2,5,8,1,4,7,0,3,6);
		$priority_red_unit_array = array(2,5,8,1,4,7,0,3,6);
		$priority_array["short"] = array(0,3,6,1,4,7,2,5,8);
		$priority_array["middle"] = array(1,4,7,0,3,6,2,5,8);
		$priority_array["long"] = array(2,5,8,1,4,7,0,3,6);
		
		// ユニット全体の数
		for($i=0;$i<count($blue_unit_array);$i++){
			$unit_num+=$blue_unit_array[$i];
		}
		for($i=0;$i<count($red_unit_array);$i++){
			$unit_num+=$red_unit_array[$i];
		}
		//echo("<p>unit_num:".$unit_num."</p>");
		
		// 攻撃
		for($battleturn=0;$battleturn<$unit_num;$battleturn++){
			if($blue_turn_bool){
				for($i=$tmp_priority_blue_unit_num;$i<count($priority_blue_unit_array);$i++){
					if(($blue_unit_hp_array[$priority_blue_unit_array[$i]]>0)&&($blue_unit_array[$priority_blue_unit_array[$i]]==1)){
						echo('<div class="blue">['.$battleturn.'] 青:'.$priority_blue_unit_array[$i].'の攻撃</div>');
						battleLogic($blue_turn_bool,$priority_blue_unit_array[$i],$priority_array[unitDistance($priority_blue_unit_array[$i])],unitDistance($priority_blue_unit_array[$i]));
						// 状態保存と対戦者切り替え
						$tmp_priority_blue_unit_num=$i+1;
						$blue_turn_bool=0;
						break;
					}
				}
				$blue_turn_bool=0;
			}
			if(!$blue_turn_bool){
				for($j=$tmp_priority_red_unit_num;$j<count($priority_red_unit_array);$j++){
					if(($red_unit_hp_array[$priority_red_unit_array[$j]]>0)&&($red_unit_array[$priority_red_unit_array[$j]]==1)){
						echo('<div class="red">['.$battleturn.'] 赤:'.$priority_red_unit_array[$j].'の攻撃</div>');
						battleLogic($blue_turn_bool,$priority_red_unit_array[$j],$priority_array[unitDistance($priority_red_unit_array[$j])],unitDistance($priority_blue_unit_array[$i]));
						// 状態保存と対戦者切り替え
						$tmp_priority_red_unit_num=$j+1;
						$blue_turn_bool=1;
						break;
					}
				}
				$blue_turn_bool=1;
			}
		}
	}
	
	function unitDistance($unit_num){
		$distance_num=0;
		$distance=array("short","middle","long");
		$unit_distance["short"]=array(0,3,6);
		$unit_distance["middle"]=array(1,4,7);
		$unit_distance["long"]=array(2,5,8);
		for($i=0;$i<3;$i++){
			if($unit_num==$unit_distance["short"][$i]){
				$distance_num=0;
				break;
			}
			if($unit_num==$unit_distance["middle"][$i]){
				$distance_num=1;
				break;
			}
			if($unit_num==$unit_distance["long"][$i]){
				$distance_num=2;
				break;
			}
		}
		return $distance[$distance_num];
	}
	
	function battleLogic($blue_turn_bool,$atk_unit_num,$priority_array,$distance){
		global $blue_unit_array;
		global $red_unit_array;
		global $blue_unit_hp_array;
		global $red_unit_hp_array;
		global $DAMAGE_ARRAY;

		$tmp_hit_effect=0;
		$damage=0;
		
		for($i=0;$i<count($priority_array);$i++){
			
			if($distance=="short"){
				if($i<3){
					$tmp_hit_effect=6;
				}else if($i<6){
					$tmp_hit_effect=4;
				}else if($i<9){
					$tmp_hit_effect=1;
				}
			}else if($distance=="middle"){
				if($i<3){
					$tmp_hit_effect=4;
				}else if($i<6){
					$tmp_hit_effect=4;
				}else if($i<9){
					$tmp_hit_effect=4;
				}
			}else if($distance=="long"){
				if($i<3){
					$tmp_hit_effect=6;
				}else if($i<6){
					$tmp_hit_effect=4;
				}else if($i<9){
					$tmp_hit_effect=2;
				}
			}
			
			if($blue_turn_bool){
				if($red_unit_hp_array[$priority_array[$i]]>0){
					// ダメージ数算出
					$damage = subtraction($blue_turn_bool,unitDistance($priority_array[$i]),$priority_array[$i],$DAMAGE_ARRAY[$tmp_hit_effect]);
					echo("赤：".$priority_array[$i]."に");
					echo($damage."のダメージ！");
					$red_unit_hp_array[$priority_array[$i]] -= $damage;
					$red_unit_hp_array[$priority_array[$i]] = isDeath($red_unit_hp_array[$priority_array[$i]]);
					break;
				}
			}
			if(!$blue_turn_bool){
				if($blue_unit_hp_array[$priority_array[$i]]>0){
					// ダメージ数算出
					$damage = subtraction($blue_turn_bool,unitDistance($priority_array[$i]),$priority_array[$i],$DAMAGE_ARRAY[$tmp_hit_effect]);
					echo("青：".$priority_array[$i]."に");
					echo($damage."のダメージ！");
					$blue_unit_hp_array[$priority_array[$i]] -= $damage;
					$blue_unit_hp_array[$priority_array[$i]] = isDeath($blue_unit_hp_array[$priority_array[$i]]);
					break;
				}
			}
		}
	}
	
	function subtraction($blue_turn_bool,$distance,$unit_num,$damage){
		
		global $blue_unit_hp_array;
		global $red_unit_hp_array;
		
		$tmp_num=0;
		
		if($blue_turn_bool){
			switch($distance){
				case "short":
					break;
				case "middle":
					$tmp_num=$unit_num-1;
					if($tmp_num>=0){
						if($red_unit_hp_array[$tmp_num]>0){
							echo("前に居る敵に攻撃を防がれた!!ダメージ-1<br>");
							--$damage;
						}
					}
					break;
				case "long":
					$tmp_num=$unit_num-1;
					if($tmp_num>=0){
						if($red_unit_hp_array[$tmp_num]>0){
							echo("前に居る敵に攻撃を防がれた!!ダメージ-1<br>");
							--$damage;
						}
					}
					$tmp_num=$unit_num-1;
					if($tmp_num>=0){
						if($red_unit_hp_array[$tmp_num]>0){
							echo("前に居る敵に攻撃を防がれた!!ダメージ-1<br>");
							--$damage;
						}
					}
					break;
			}
		}else if(!$blue_turn_bool){
			switch($distance){
				case "short":
					break;
				case "middle":
					$tmp_num=$unit_num-1;
					if($tmp_num>=0){
						if($blue_unit_hp_array[$tmp_num]>0){
							echo("前に居る敵に攻撃を防がれた!!ダメージ-1<br>");
							--$damage;
						}
					}
					break;
				case "long":
					$tmp_num=$unit_num-1;
					if($tmp_num>=0){
						if($blue_unit_hp_array[$tmp_num]>0){
							echo("前に居る敵に攻撃を防がれた!!ダメージ-1<br>");
							--$damage;
						}
					}
					$tmp_num=$unit_num-1;
					if($tmp_num>=0){
						if($blue_unit_hp_array[$tmp_num]>0){
							echo("前に居る敵に攻撃を防がれた!!ダメージ-1<br>");
							--$damage;
						}
					}
					break;
			}
		}
		
		return $damage;
	}
	
	function isDeath($hp){
		if($hp<=0){
			echo("　(✖_✖)死亡");
			return 0;
		}else{
			echo("　残りHP ".$hp);
		}
		return $hp;
	}
	
	function drowMap(){
		global $blue_unit_array;
		global $red_unit_array;
		global $blue_unit_hp_array;
		global $red_unit_hp_array;
		echo('
			<div id="map">
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
				<td>');
						if($blue_unit_array[2]==1){
							if($blue_unit_hp_array[2]>0){
								echo("▲");
							}else{
								echo("×");
							}
						}else{
							echo("□");
						}
					echo('
				</td>
				<td>');
						if($blue_unit_array[1]==1){
							if($blue_unit_hp_array[1]>0){
								echo("■");
							}else{
								echo("×");
							}
						}else{
							echo("□");
						}
					echo('
				</td>
				<td>
					');
						if($blue_unit_array[0]==1){
							if($blue_unit_hp_array[0]>0){
								echo("●");
							}else{
								echo("×");
							}
						}else{
							echo("□");
						}
					echo('
				</td>
				<td>
					');
						if($red_unit_array[0]==1){
							if($red_unit_hp_array[0]>0){
								echo("●");
							}else{
								echo("×");
							}
						}else{
							echo("□");
						}
					echo('
				</td>
				<td>
					');
						if($red_unit_array[1]==1){
							if($red_unit_hp_array[1]>0){
								echo("■");
							}else{
								echo("×");
							}
						}else{
							echo("□");
						}
					echo('
				</td>
				<td>
					');
						if($red_unit_array[2]==1){
							if($red_unit_hp_array[2]>0){
								echo("▲");
							}else{
								echo("×");
							}
						}else{
							echo("□");
						}
					echo('
				</td>
			</tr>
			<tr>
				<td>
					');
						if($blue_unit_array[5]==1){
							if($blue_unit_hp_array[5]>0){
								echo("▲");
							}else{
								echo("×");
							}
						}else{
							echo("□");
						}
					echo('
				</td>
				<td>
					');
						if($blue_unit_array[4]==1){
							if($blue_unit_hp_array[4]>0){
								echo("■");
							}else{
								echo("×");
							}
						}else{
							echo("□");
						}
					echo('
				</td>
				<td>
					');
						if($blue_unit_array[3]==1){
							if($blue_unit_hp_array[3]>0){
								echo("●");
							}else{
								echo("×");
							}
						}else{
							echo("□");
						}
					echo('
				</td>
				<td>
					');
						if($red_unit_array[3]==1){
							if($red_unit_hp_array[3]>0){
								echo("●");
							}else{
								echo("×");
							}
						}else{
							echo("□");
						}
					echo('
				</td>
				<td>
					');
						if($red_unit_array[4]==1){
							if($red_unit_hp_array[4]>0){
								echo("■");
							}else{
								echo("×");
							}
						}else{
							echo("□");
						}
					echo('
				</td>
				<td>
					');
						if($red_unit_array[5]==1){
							if($red_unit_hp_array[5]>0){
								echo("▲");
							}else{
								echo("×");
							}
						}else{
							echo("□");
						}
					echo('
				</td>
			</tr>
			<tr>
				<td>
					');
						if($blue_unit_array[8]==1){
							if($blue_unit_hp_array[8]>0){
								echo("▲");
							}else{
								echo("×");
							}
						}else{
							echo("□");
						}
					echo('
				</td>
				<td>
					');
						if($blue_unit_array[7]==1){
							if($blue_unit_hp_array[7]>0){
								echo("■");
							}else{
								echo("×");
							}
						}else{
							echo("□");
						}
					echo('
				</td>
				<td>
					');
						if($blue_unit_array[6]==1){
							if($blue_unit_hp_array[6]>0){
								echo("●");
							}else{
								echo("×");
							}
						}else{
							echo("□");
						}
					echo('
				</td>
				<td>
					');
						if($red_unit_array[6]==1){
							if($red_unit_hp_array[6]>0){
								echo("●");
							}else{
								echo("×");
							}
						}else{
							echo("□");
						}
					echo('
				</td>
				<td>
					');
						if($red_unit_array[7]==1){
							if($red_unit_hp_array[7]>0){
								echo("■");
							}else{
								echo("×");
							}
						}else{
							echo("□");
						}
					echo('
				</td>
				<td>
					');
						if($red_unit_array[8]==1){
							if($red_unit_hp_array[8]>0){
								echo("▲");
							}else{
								echo("×");
							}
						}else{
							echo("□");
						}
					echo('
				</td>
			</tr>
		</table>
	</div>
</div>
						');
	}
?>
</body>
</html>