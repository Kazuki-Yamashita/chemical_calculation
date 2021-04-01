<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="UTF-8">
<title>1-6_calculate contained required substance amount solution volume </title>
</head>

<body>
<form action ="http://localhost/chemical_calculation/1-6_result_of_calculate.php" method="POST"> 

<p>変換前の溶液の濃度と溶液量を入力してください</p>
<p><label> 濃度　 <input type="text" name="originalConcentration" autofocus required>
     <select name = "originalConcentrationUnit">
     <option value = "1" >  M</option>
     <option value = "2" selected> mM</option>
     <option value = "3" >μM</option>
     <option value = "4" > nM</option>
     <option value = "5" > pM</option>
   </select></label>
<br>
   <label> 溶液量 <input type="text" name="originalVolume" required>
   <select name = "originalVolumeUnit">
     <option value = "1" >  L</option>
     <option value = "2" selected> mL</option>
     <option value = "3" >μL</option>
     <option value = "4" > nL</option>
   </select></label>
</p>
<hr>

<p>変換後の溶液の濃度を指定してください</p>
<p><label> 濃度 <input type="text" name="convertedConcentration" required>
     <select name = "convertedConcentrationUnit">
     <option value = "1" >  M</option>
     <option value = "2" selected> mM</option>
     <option value = "3" >μM</option>
     <option value = "4" > nM</option>
     <option value = "5" > pM</option>
   </select></label>
</p>
<p><input type="submit" value="計算する">　<input type="reset" value="数値をリセット"></p>
<style>
 input[type="text"]:focus{
   background-color: #ffffdd;}
</style>
</form>
</body>
</html>