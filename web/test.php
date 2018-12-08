<?php
$str = 'hello';
$arr = array('my', 'friend');
?>
<script>

console.log(4 * 5);
</script>


<html>
<script>
var str = '<?= $str ?>';
var arr = <?= json_encode($arr) ?>;

//console.log(str); // hello
//console.log(arr); // ["my","friend"]
console.log(4 * 5);
</script>
</html>