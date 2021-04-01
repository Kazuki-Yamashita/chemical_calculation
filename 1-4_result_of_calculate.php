<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="UTF-8">
<title>1-4_calculate contained substance amount in solution</title>
</head>

<body>
<?php
 $concentration = mb_convert_kana($_POST["concentration"],'a');
 $actualConcentration = 0;
 $solutionVolume = mb_convert_kana($_POST["solutionVolume"],'a');
 $actualSolutionVolume = 0;

 $concentrationUnit = $_POST["concentrationUnit"];
  switch($concentrationUnit){
    case 1:
     $actualConcentration = $concentration * 1;
     break;

    case 2:
     $actualConcentration = $concentration * 10**-3;
     break;

    case 3:
     $actualConcentration = $concentration * 10**-6;
     break;

    case 4:
     $actualConcentration = $concentration * 10**-9;
     break;

    case 5:
     $actualConcentration = $concentration * 10**-12;
     break;
     }
 $solutionVolumeUnit = $_POST["solutionVolumeUnit"];
  switch($solutionVolumeUnit){
   case 1:
    $actualSolutionVolume = $solutionVolume * 1;
    break;
						
    case 2:
     $actualSolutionVolume = $solutionVolume * 10**-3;
     break;

    case 3:					
     $actualSolutionVolume = $solutionVolume * 10**-6;
     break;
        
    case 4:
     $actualSolutionVolume = $solutionVolume * 10**-9;
     break;
    }
  $substanceAmount = $actualConcentration * $actualSolutionVolume ;
?>
<p>溶液に含まれる物質量 :
<?php 
   if($substanceAmount  >=1){
     echo $substanceAmount  * 1 ."(mol)";}	//90行目
   elseif($substanceAmount  <1 & $substanceAmount  >=10**-3){
     echo $substanceAmount  * 10**3 ."(m mol)";}
   elseif($substanceAmount  <10**-3  & $substanceAmount  >=10**-6){
     echo $substanceAmount  * 10**6 ."(μ mol)";}
   elseif($substanceAmount  <10**-6  & $substanceAmount  >=10**-9){  //95行目
     echo $substanceAmount  * 10**9 ."(n mol)";}
   elseif($substanceAmount  <10**-9 & $substanceAmount  >=10**-12){
     echo $substanceAmount  * 10**12 ."(p mol)";}
   else{
     echo "計算できません";} //100行目
?>


</p>