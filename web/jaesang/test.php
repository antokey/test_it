<?php
	function 
	$max=(count(temp[0]),count(temp[1]),count(temp[2]));
	for ($i=0;$i<3;$i++)
		if($max==count[$temp[$i]])
			$max_tel[$i]
	for($i = 0 ; $i < $max ; $i++){
		echo "
	<table align = center width = '800' border = '1' cellpadding = '10'>
    <tr align = center>
	  <td></td>
      <td bgcolor = '#4374D9'><font color = 'white'>LG</font></td>
      <td bgcolor = '#4374D9'><font color = 'white'>KT</font></td>
      <td bgcolor = '#4374D9'><font color = 'white'>SK</font></td>
    </tr>";
		$flag = FALSE;
		count($temp)

		for($j = 0 ; $j < $cnt_kt ; $j++){
			if($temp1[$j][3] == $temp3[$i][3]){
				$flag_kt = TRUE;
				break;
			}
		}
		for($k = 0 ; $k < $cnt_sk ; $k++){
			if($temp2[$k][3] == $temp3[$i][3]){
				$flag_sk = TRUE;
				break;
			}
		}
		
		$list = array('', '', '', '출고가(a)', '공시지원금(b)', '추가지원금(c)', '단말대금(a-b-c)', '공시일자');
		for($col = 3 ; $col < 8 ; $col++){
			echo "<tr align=center>
					<td bgcolor = '#4374D9'><font color = 'white'>".$list[$col]."</td>";
			echo "<td>".$temp3[$i][$col]."</td>";
			
			if($flag_kt){
				echo "<td>".$temp[1][$j][$col]."</td>";
			}else{echo "<td>0</td>";}
			if($flag_sk){
				echo "<td>".$temp[3][$k][$col]."</td>";
			}else{echo "<td>0</td>";}
			echo "</tr>";
		}
	echo "</table>";
}
?>