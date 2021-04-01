<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width,initial-scale=1.0">
<title>0_list of chemical calculation</title>
</head>

<body>
<div id="wrapper">
<div id="titleImage">
<img src="images/experiment_room.jpg" alt="化学計算ツール">
<p id=title>化学計算ツール</p>
</div>
<h1>①溶液調製</h1>

<p><a target="_blank" href="http://localhost/chemical_calculation/1-1_calculate_weight_from_concentration_and_solution_volume.php">
1. 溶液を作る際に必要な物質の量(重さ)を求める</a></p>

<p><a target="_blank" href="http://localhost/chemical_calculation/1-2_calculate_required_solvent_volume_from_substance_weight.php">
2. 測った物質の重さから溶液調製に必要な溶媒の量を求める</a></p>

<p><a target="_blank" href="http://localhost/chemical_calculation/1-3_calculate_required_solvent_when_dilute_solution.php">
3. 溶液の希釈に必要な溶媒の量を求める</a></p>

<p><a target="_blank" href="http://localhost/chemical_calculation/1-4_calculate_contained_substance_amount_in_solution_from_volume_molarity.php">
4. 体積モル濃度[mol/L]から溶液に含まれている物質量を求める</a></p>


<p><a target="_blank" href="http://localhost/chemical_calculation/1-5_calculate_contained_substance_amount_in_solution_from_mass_percent_concentration.php">
5. 質量パーセント濃度[wt%]から溶液に含まれている物質量を求める</a>
<br>
<span class="causion">　※ 溶媒が水の場合 </span>
</p>

<p><a target="_blank" href="http://localhost/chemical_calculation/1-6_calculate_contained_required_substance_amount_solution_volume.php">
6. 濃度の異なる溶液と同じ物質量を含む溶液量を求める </a><br>
　<span id="1-6Explanation">C<sub>A</sub>(mol/L) × V<sub>A</sub>(L) = C<sub>B</sub>(mol/L) × <span id="X">X (L)</span></span></p>
<p id=explanation1-6>6. の説明図</p>
<img src="images/1-6.jpg" alt="1-6説明図" id="img1-6" width="400">

<h1>②吸収測定</h1>
<p><a target="_blank" href="http://localhost/chemical_calculation/2-1_calculate_solvent_volume_when_adjust_absorbance_of_solution.php">1. 溶液の吸光度を特定の値にする際に必要な溶媒の量を求める </a></p>

<style>
img[src="images/experiment_room.jpg"]{
     width: 60vw;}

#titleImage{
  position: relative;
}
#title{
  position: absolute;
  top  :  80px;
  width: 60vw;
  text-align: center;
  color : black;
  font: bold 7vw sans-serif;
}
.causion {color: hsla(0,100%,50%,1)}

span[id="1-6Explanation"] {line-height: 1;}

span[id="X"] { text-decoration: underline wavy;}

#explanation1-6{
   color: hsla(120,100%,30%,1)}

img[id="img1-6"]{
  border-style: solid;
  border-width: 2px;}

a:link    {color: hsla(240,100%,50%,1)}
a:visited {color: hsla(240,100%,50%,1)}

#wrapper{
  width:  70vw;
  margin: auto;
}
</style>


</body>
</html>
