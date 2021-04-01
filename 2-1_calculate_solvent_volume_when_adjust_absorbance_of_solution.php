<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="UTF-8">
<title>2-1 calculate solvent volume when adjust absorbance of solution</title>
</head>

<body>
<form action ="http://localhost/chemical_calculation/2-1_result_of_calculate.php" method="POST">

<p> 希釈する溶液の量を入力してください</p>
<p><label> 溶液量 <input type="text" name="usingSolutionVolume" autofocus required>
    <select name="usingSolutionVolumeUnit">
     <option value = "1" >  L</option>
     <option value = "2" selected> mL</option>
     <option value = "3" >μL</option>
     <option value = "4" > nL</option>
   </select></label>
</p>

<p> 現在の溶液の吸光度を入力してください</p>
<p><label> 現在の吸光度(Abs.) <input type="text" name="currentAbsorbance" required></label></p>
<hr>

<p> 目標の吸光度を指定してください</p>
<p><label> 目標の吸光度(Abs.) <input type="text" name="targetAbsorbance" required></label></p>

<p> ※「現在の吸光度」>「目標の吸光度」としてください(希釈のみ)<br>
※「現在の吸光度」と「目標の吸光度」は、ともに同じ波長の吸光度を入力してください<br>
 ※「現在の吸光度」と「目標の吸光度」は、同じ光路長のセルを使用してください</p>

<input type="submit" value="計算する">　<input type="reset" value="数値をリセット">
<style>
 input[type="text"]:focus{
   background-color: hsla(75,100%,80%,0.5)}
</style>
</form>
</body>
</html>


