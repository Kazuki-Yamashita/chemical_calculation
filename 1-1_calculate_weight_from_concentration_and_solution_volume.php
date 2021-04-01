<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="UTF-8">
<title>1-1_calculate weight from concentration and solution volume</title>
</head>

<body>
<form action ="http://localhost/chemical_calculation/1-1_result_of_calculate.php" method="POST"> 

<?php
 require_once 'input_of_atomicWeight.php';
?>

<p>作りたい溶液の濃度と溶液量を指定してください </p>
<p><label>　濃度 <input type="text" name="concentration" required>
   <select name = "concentrationUnit">
     <option value = "1" >  M</option>
     <option value = "2" selected> mM</option>
     <option value = "3" >μM</option>
     <option value = "4" > nM</option>
     <option value = "5" > pM</option>
   </select></label>
<br>
   <label>  溶液量 <input type="text" name="solutionVolume" required>
   <select name = "solutionVolumeUnit">
     <option value = "1" >  L</option>
     <option value = "2" selected> mL</option>
     <option value = "3" >μL</option>
     <option value = "4" > nL</option>
   </select></label>
</p>

<p><input type="submit"  value="計算する">　<input type="reset" value="数値をリセット"></p>

<?php
 require_once 'table_of_atomicWeight.php';
?>

</form>
</body>
</html>

<style>
  input[type="text"]:focus{
     background-color: #ffffdd;}
  .a{color: hsla(0,100%,50%,1)}
</style>