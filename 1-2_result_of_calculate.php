<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="UTF-8">
<title>1-2_result of calculate </title>
</head>

<body>
<?php
 $atomicWeight = mb_convert_kana($_POST['atomicWeight'],'a'); //10行目
 $measuredWeight = mb_convert_kana($_POST['measuredWeight'],'a');
 $actualMeasuredWeight = 0;
 $targetSolutionVolume = mb_convert_kana($_POST['targetSolutionVolume'],'a');
 $actualTargetSolutionVolume = 0;
 $otherAtomicWeight = mb_convert_kana($_POST['otherAtomicWeight'],'a');

 require_once 'case_of_atomicWeight.php';

 $measuredWeightUnit = $_POST['measuredWeightUnit'];
  switch($measuredWeightUnit){
   case 1:
    $actualMeasuredWeight = $measuredWeight * 10**3;
     break;  //20行目

   case 2:
    $actualMeasuredWeight = $measuredWeight * 1;
     break;

   case 3:
    $actualMeasuredWeight = $measuredWeight * 10**-3;
     break;
   }

 $targetConcentrationUnit = $_POST['targetConcentrationUnit'];
  switch($targetConcentrationUnit){
   case 1:
     $actualTargetSolutionVolume = $targetSolutionVolume * 1;
      break;

   case 2:
     $actualTargetSolutionVolume = $targetSolutionVolume * 10**-3;
      break;

   case 3:
     $actualTargetSolutionVolume = $targetSolutionVolume * 10**-6;
      break;

   case 4:
     $actualTargetSolutionVolume = $targetSolutionVolume * 10**-9;
      break;

   case 5:
     $actualTargetSolutionVolume = $targetSolutionVolume * 10**-12;
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
   $indicate1 = "hidden";
   $indicate2 = NULL;
   $indicate3 = "hidden";
  }
 $substanceAmount = $actualMeasuredWeight / $actualAtomicWeight ;
 $requiredSolventVolume = $substanceAmount / $actualTargetSolutionVolume ;
?>

<p <?php echo $indicate1 ?> >必要な溶媒の量 :
<?php
   if($requiredSolventVolume >=1){
     echo $requiredSolventVolume * 1 ."(L)";}
   elseif($requiredSolventVolume <1 & $requiredSolventVolume >=10**-3){
     echo $requiredSolventVolume * 10**3 ."(mL)";}
   elseif($requiredSolventVolume <10**-3  & $requiredSolventVolume >=10**-6){
     echo $requiredSolventVolume * 10**6 ."(μL)";}
   elseif($requiredSolventVolume <10**-6  & $requiredSolventVolume >=10**-9){  
     echo $requiredSolventVolume * 10**9 ."(nL)";}
   elseif($requiredSolventVolume <10**-9 & $requiredSolventVolume >=10**-12){
     echo $requiredSolventVolume * 10**12 ."(pL)";}
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