<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="UTF-8">
<title>1-2_calculate required solvent volume from substance weight </title>
</head>

<body>
<form action ="http://localhost/chemical_calculation/1-2_result_of_calculate.php" method="POST">

<?php
 require_once 'input_of_atomicWeight.php';
?>

<p> 測りとった物質の重さを入力してください</p>
<p><label>  重さ <input type="text" name="measuredWeight" required>
    <select name = "measuredWeightUnit">
     <option value = "1" >  kg</option>
     <option value = "2" selected> g</option>
     <option value = "3" >mg</option>
   </select></label> </p>
<hr>
<p> 作る溶液の濃度を指定してください </p>
<p><label> 濃度 <input type="text" name="targetSolutionVolume" required>
   <select name = "targetConcentrationUnit">
     <option value = "1" >  M</option>
     <option value = "2" selected> mM</option>
     <option value = "3" >μM</option>
     <option value = "4" > nM</option>
     <option value = "5" > pM</option>
   </select></label>
</p>

<p><input type="submit" value="計算する">　<input type="reset" value="数値をリセット"></p>

<?php
 require_once 'table_of_atomicWeight.php';
?>
<style>
 input[type="text"]:focus{
   background-color: hsla(180,100%,80%,0.3)}
 .a{color: hsla(0,100%,50%,1)}
</style>
</form>
</body>
</html>