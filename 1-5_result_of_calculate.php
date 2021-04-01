<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width,initial-scale=1.0">
<title>1-5_calculate_contained_substance_amount_in_solution_from_mass_percent_concentration.php</title>
</head>

<body>
<?php
  $atomicWeight = mb_convert_kana($_POST['atomicWeight'],'a');
  $solutionWeight = mb_convert_kana($_POST['solutionWeight'],'a');
  $actualSolutionWeight = 0;
  $massPercentConcentration = mb_convert_kana($_POST['massPercentConcentration'],'a');
  $otherAtomicWeight = mb_convert_kana($_POST['otherAtomicWeight'],'a');
  $actualAtomicWeight = 0;

 require_once 'case_of_atomicWeight.php';

  $solutionWeightUnit = $_POST['solutionWeightUnit'];
   switch($solutionWeightUnit){
     case 1:
       $actualSolutionWeight = $solutionWeight * 1;
       break;

     case 2:
       $actualSolutionWeight = $solutionWeight * 10**-3;
       break;
     }

   $indicate1 = NULL;
   $indicate2 = "hidden";
   $indicate3 = "hidden";

  if($atomicWeight == 'select' && $otherAtomicWeight == NULL){
   $actualAtomicWeight = 1;
   $indicate1 = "hidden";
   $indicate2 = "hidden";
   $indicate3 = NULL;
  }
  if($atomicWeight !== 'select' && $otherAtomicWeight !== ""){
   $actualAtomicWeight = 1;
   $indicate1 = "hidden";
   $indicate2 = NULL;
   $indicate3 = "hidden";
  }

   $substanceWeight = $actualSolutionWeight /100 * $massPercentConcentration;

   $containedSubstanceAmount = $substanceWeight / $actualAtomicWeight;
?>
<p <?php echo $indicate1 ?> > 溶液に含まれている物質量:
<?php
   if($containedSubstanceAmount >=1){
     echo $containedSubstanceAmount * 1 ."(mol)";}
   elseif($containedSubstanceAmount <1 & $containedSubstanceAmount >=10**-3){
     echo $containedSubstanceAmount * 10**3 ."(m mol)";}
   elseif($containedSubstanceAmount <10**-3  & $containedSubstanceAmount >=10**-6){
     echo $containedSubstanceAmount * 10**6 ."(μ mol)";}
   elseif($containedSubstanceAmount  <10**-6  & $containedSubstanceAmount >=10**-9){  
     echo $containedSubstanceAmount * 10**9 ."(n mol)";}
   elseif($containedSubstanceAmount  <10**-9 & $containedSubstanceAmount >=10**-12){
     echo $containedSubstanceAmount * 10**12 ."(p mol)";}
   else{
     echo "計算できません";}
?></p>
 <p id="caution" <?php echo $indicate2 ?> > 原子量を入力した場合、選択肢で物質を選択しないでください</p>
 <p <?php echo $indicate3 ?> > 分子量を選択または入力してください </p>

<style>
 #caution{color: hsla(0,100%,50%,1)}
</style>

</body>
</html>