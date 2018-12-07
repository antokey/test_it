<meta charset="utf-8"/></head>
<div style="text-align:-webkit-right; height: 25px;">
    <form method=GET name=frm1 action='index.php' class = "search">
    <select name="store_select" style="height:20px;">
        <option value="전체" selected="selected">지점선택</option>
        <option value="학도점">학도점</option>
        <option value="상대점" >상대점</option>
        <option value="중도점">중도점</option>
    </select>
    <label > [물품 검색]</label>
    <input type=text size=45 name=search placeholder="검색어를 입력해주세요." style="width: 203px; height: 28px;">
    <input type=button name=byn1 onclick="search1()" class="btn btn-info btn-sm" value="찾기" style="margin-bottom: 5px;" >
    </form>
</div>

<?php

function select(){ if($_POST["store_select"]=="전체")
echo "전체선택" ; }
if($_POST["store_select"]=="전체")
echo "전체선택" ;

 ?>
