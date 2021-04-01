<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="UTF-8">
<title>1-4_calculate_contained_substance_amount_in_solution_from_volume_molarity</title>
</head>

<body>
<form action ="http://localhost/chemical_calculation/1-4_result_of_calculate.php" method="POST">

<p>溶液の濃度と体積を入力してください</p>
<p><label>　濃度 <input type="text" name="concentration" autofocus required>
   <select name="concentrationUnit">
     <option value = "1" >  M</option>
     <option value = "2" selected> mM</option>
     <option value = "3" >μM</option>
     <option value = "4" > nM</option>
     <option value = "5" > pM</option>
   </select></label>
<br>
  <label> 溶液量 <input type-"text" name="solutionVolume" required>
    <select name = "solutionVolumeUnit">
     <option value = "1" >  L</option>
     <option value = "2" selected> mL</option>
     <option value = "3" >μL</option>
     <option value = "4" > nL</option>
   </select></label>
</p>

<p><input type="submit" value="計算する">　<input type="reset" value="数値をリセット"></p>

</form>
</body>
</html>

<style>
  input[type="text"]:focus{
    background-color: #ffffdd;}
</style>