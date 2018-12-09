<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
  <div>

      <form method=GET name=frm1 action='1.php'> [물품 검색]
      <input type=text size=45 name=search>
      <input type=button name=byn1 onclick="search1()" value="찾기">
      </form>
  </div>

  </body>
  <script>
  	function search1(){
  		if(frm1.search.value ){

  			frm1.submit();


  		}else{

  			alert('값을 입력 해 주세요.');

  		}
  	}
  </script>

</html>
<?php
require("function.php");
require("config.php");
$conn= db_init($config['host'],$config['duser'],$config['dpasswd'],$config['dname']);



if(isset($_GET['search'])){ //값이 존재한다면

        $sel=$_GET['kind'];
				$search=$_GET['search'];
        $sql ="SELECT * FROM store_lib JOIN  product ON product.p_id = store_lib.p_id AND  product.p_name LIKE '%$search%'";
        print_article ($sql,$conn);

}

 ?>
			if($j < $cnt_kt){
				echo $temp1[$j][4];
			}
			else{
				echo "";
			}
		echo"</td>
		<td>";
			if($k < $cnt_sk){
				echo $temp2[$k][4];
			}
			else{
				echo "";
			}

for(k=0~kt_max)

  for(s=0~sk_max)
    if(sk[s][chulgo]==kt[i][chulgo])
        flag_sk=t

  for(s=0~sl_max)
    if(lg[l][chulgo]==kt[i][chulgo])
        flag_lg= t


  for(col=0,9)
    <td>>print(kt[k][col])<td>
    if(flag_sk)
    <td>print(sk[s][col)<td>
    if(flag_lg)
    <td>.lg[l][col].<td>



  <td> skt 
  for(s=0~sk_max)
   if(sk[s][chulgo]==kt[i][chulgo])
        <tr>print(sk[s][all])<tr>
  </td>
  for(l=0~lg_max)
    lg[l][chulgo]
  \n
