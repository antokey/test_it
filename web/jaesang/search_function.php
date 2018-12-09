<?php
	function lg_standard($rows_lg, $rows_kt, $rows_sk, $max, $cnt_kt, $cnt_sk){
		$j = 0;
		$k = 0;
		$l = 0;
		
		for($i = 0 ; $i < $max ; $i++){
			echo "
		<table align = center width = '800' border = '1' cellpadding = '10'>
		<tr align = center>
		  <td></td>
		  <td bgcolor = '#4374D9'><font color = 'white'>LG</font></td>
		  <td bgcolor = '#4374D9'><font color = 'white'>KT</font></td>
		  <td bgcolor = '#4374D9'><font color = 'white'>SK</font></td>
		</tr>";
			$flag_kt = FALSE;
			$flag_sk = FALSE;
			for($j = 0 ; $j < $cnt_kt ; $j++){
				if($rows_kt[$j][3] == $rows_lg[$i][3]){
					$flag_kt = TRUE;
					break;
				}
			}
			for($k = 0 ; $k < $cnt_sk ; $k++){
				if($rows_sk[$k][3] == $rows_lg[$i][3]){
					$flag_sk = TRUE;
					break;
				}
			}
			
			$list = array('', '', '', '출고가(a)', '공시지원금(b)', '추가지원금(c)', '단말대금(a-b-c)', '공시일자');
			for($col = 3 ; $col < 8 ; $col++){
				echo "<tr align=center>
						<td bgcolor = '#4374D9'><font color = 'white'>".$list[$col]."</td>";
				echo "<td>".$rows_lg[$i][$col]."</td>";
				
				if($flag_kt){
					echo "<td>".$rows_kt[$j][$col]."</td>";
				}else{echo "<td>0</td>";}
				if($flag_sk){
					echo "<td>".$rows_sk[$k][$col]."</td>";
				}else{echo "<td>0</td>";}
				echo "</tr>";
			}
		echo "</table>";
		}
	}
	
	function kt_standard($rows_lg, $rows_kt, $rows_sk, $max, $cnt_lg, $cnt_sk){
		$j = 0;
		$k = 0;
		$l = 0;
		
		for($i = 0 ; $i < $max ; $i++){
			echo "
		<table align = center width = '800' border = '1' cellpadding = '10'>
		<tr align = center>
		  <td></td>
		  <td bgcolor = '#4374D9'><font color = 'white'>KT</font></td>
		  <td bgcolor = '#4374D9'><font color = 'white'>LG</font></td>
		  <td bgcolor = '#4374D9'><font color = 'white'>SK</font></td>
		</tr>";
			$flag_lg = FALSE;
			$flag_sk = FALSE;
			for($j = 0 ; $j < $cnt_lg ; $j++){
				if($rows_lg[$j][3] == $rows_kt[$i][3]){
					$flag_kt = TRUE;
					break;
				}
			}
			for($k = 0 ; $k < $cnt_sk ; $k++){
				if($rows_sk[$k][3] == $rows_kt[$i][3]){
					$flag_sk = TRUE;
					break;
				}
			}
			
			$list = array('', '', '', '출고가(a)', '공시지원금(b)', '추가지원금(c)', '단말대금(a-b-c)', '공시일자');
			for($col = 3 ; $col < 8 ; $col++){
				echo "<tr align=center>
						<td bgcolor = '#4374D9'><font color = 'white'>".$list[$col]."</td>";
				echo "<td>".$rows_kt[$i][$col]."</td>";
				
				if($flag_lg){
					echo "<td>".$rows_lg[$j][$col]."</td>";
				}else{echo "<td>0</td>";}
				if($flag_sk){
					echo "<td>".$rows_sk[$k][$col]."</td>";
				}else{echo "<td>0</td>";}
				echo "</tr>";
			}
		echo "</table>";
		}
	}
	
	function sk_standard($rows_lg, $rows_kt, $rows_sk, $max, $cnt_kt, $cnt_lg){
		$j = 0;
		$k = 0;
		$l = 0;
			
		for($i = 0 ; $i < $max ; $i++){
			echo "
		<table align = center width = '800' border = '1' cellpadding = '10'>
		<tr align = center>
		  <td></td>
		  <td bgcolor = '#4374D9'><font color = 'white'>SK</font></td>
		  <td bgcolor = '#4374D9'><font color = 'white'>KT</font></td>
		  <td bgcolor = '#4374D9'><font color = 'white'>LG</font></td>
		</tr>";
			$flag_kt = FALSE;
			$flag_lg = FALSE;
			for($j = 0 ; $j < $cnt_kt ; $j++){
				if($rows_kt[$j][3] == $rows_sk[$i][3]){
					$flag_kt = TRUE;
					break;
				}
			}
			for($k = 0 ; $k < $cnt_sk ; $k++){
				if($rows_sk[$k][3] == $rows_lg[$i][3]){
					$flag_sk = TRUE;
					break;
				}
			}
			
			$list = array('', '', '', '출고가(a)', '공시지원금(b)', '추가지원금(c)', '단말대금(a-b-c)', '공시일자');
			for($col = 3 ; $col < 8 ; $col++){
				echo "<tr align=center>
						<td bgcolor = '#4374D9'><font color = 'white'>".$list[$col]."</td>";
				echo "<td>".$rows_sk[$i][$col]."</td>";
				
				if($flag_kt){
					echo "<td>".$rows_kt[$j][$col]."</td>";
				}else{echo "<td>0</td>";}
				if($flag_lg){
					echo "<td>".$rows_lg[$k][$col]."</td>";
				}else{echo "<td>0</td>";}
				echo "</tr>";
			}
		echo "</table>";
		}
	}
?>