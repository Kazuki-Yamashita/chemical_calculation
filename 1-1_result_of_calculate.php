<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="UTF-8">
<title>1-1_result of calculate</title>
</head>

<body>
 <?php
  $concentration  = mb_convert_kana($_POST['concentration'],'a');  //10行目
  $solutionVolume = mb_convert_kana($_POST['solutionVolume'],'a');
  $atomicWeight   = mb_convert_kana($_POST['atomicWeight'],'a');
  $otherAtomicWeight = mb_convert_kana($_POST['otherAtomicWeight'],'a');
  $actualConcentration  = 0 ;
  $actualSolutionVolume = 0 ;
  $actualAtomicWeight = 0;

 require_once 'case_of_atomicWeight.php';

  $concentrationUnit = $_POST['concentrationUnit'];
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

  $solutionVolumeUnit = $_POST['solutionVolumeUnit'];
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

   $substanceAmount = $actualConcentration * $actualSolutionVolume;

   $indicate1 = NULL;
   $indicate2 = "hidden";
   $indicate3 = "hidden";

  if($atomicWeight == 'select' && $otherAtomicWeight == NULL){
   $actualAtomicWeight = 0;
   $indicate1 = "hidden";
   $indicate2 = "hidden";
   $indicate3 = NULL;
  }
  if($atomicWeight !== 'select' && $otherAtomicWeight !== ""){
   $actualAtomicWeight = 0;
   $indicate1 = "hidden";
   $indicate2 = NULL;
   $indicate3 = "hidden";
  }

   $requiredAmount  = $actualAtomicWeight * $substanceAmount;
?>
 <p <?php echo $indicate1 ?> > 必要な量: <?php echo $requiredAmount ?>(g) </p>
 <p id="caution" <?php echo $indicate2 ?> > 原子量を入力した場合、選択肢で物質を選択しないでください</p>
 <p <?php echo $indicate3 ?> > 分子量を選択または入力してください </p>
 <p id="calculateWater"><a target="_blank" href="http://localhost/chemical_calculation/1-2_calculate_required_solvent_volume_from_substance_weight.php">
    必要な量より少ない、または多く量りとって水を加える量を求める場合、こちらをクリック</a></p>

<style>
 #caution  {color: hsla(0,100%,50%,1)}
 a:link    {color: hsla(240,100%,50%,1)}
 a:visited {color: hsla(240,100%,50%,1)}
</style>

</body>
</html>
