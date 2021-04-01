<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width,initial-scale=1.0">
<title>1-5_calculate_contained_substance_amount_in_solution_from_mass_percent_concentration.php</title>
</head>

<body>
<form action ="http://localhost/chemical_calculation/1-5_result_of_calculate.php" method="POST">


<p class="causion">溶媒が水の場合のみ使用できます</p>
<?php
 require_once 'input_of_atomicWeight.php';
?>
<p>溶液の重さと質量パーセント濃度を入力してください</p>
<p><label>　　　　　　　溶液の重さ <input type="text" name="solutionWeight" required>
    <select name="solutionWeightUnit">
      <option value = "1" selected> g</option>
      <option value = "2">mg</option>
    </select></label>
<br>
     質量パーセント濃度(wt%) <input type="text" name="massPercentConcentration"> (wt%)
</p>

<p><input type="submit" value="計算する">　<input type="reset" value="数値をリセット"></p>

<?php
 require_once 'table_of_atomicWeight.php';
?>

</form>
</body>
</html>

<style>
  .causion {
    color: hsla(0,100%,50%,1);
    font-size: 24px;
    text-decoration: underline red double;
  }

  input[type="text"]:focus{
     background-color: #ffffdd;}
  .a{color: hsla(0,100%,50%,1)}
</style>
