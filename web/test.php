<?php
	function aaa($temp){
	$max=max(count(temp[0]),count(temp[1]),count(temp[2]));
	for ($i=0;$i<3;$i++)
		if($max==count[$temp[$i]])
		{
			$max_tel=$i;
			break;
		}
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
		for($t=0;$t<3;$t++)
		{	
			if($t==$max_tel) continue
			for($j = 0 ; $j < count(temp[$t]) ; $j++){
				if($temp[$t][$j][3] == $temp[$max_tel][$i][3]){
					$flag = TRUE;
					break;
				}
			}
		}
		$list = array('', '', '', '출고가(a)', '공시지원금(b)', '추가지원금(c)', '단말대금(a-b-c)', '공시일자');
			for($col = 3 ; $col < 8 ; $col++){
				echo "<tr align=center>
						<td bgcolor = '#4374D9'><font color = 'white'>".$list[$col]."</td>";
				echo "<td>".$temp[$max_tel][$i][$col]."</td>";

				for($t=0;$t<3;$t++)
				{	
					if($t==$max_tel) continue
					if($flag){
						for($j = 0 ; $j < count(temp[$t]) ; $j++)
							echo "<td>".$temp[$t][$j][$col]."</td>";
					}
					else
						{echo "<td>0</td>";}
					echo "</tr>";
				}
		}
	echo "</table>";
	}

}

?>