<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="UTF-8">
<title>2-1 result of calculate</title>
</head>

<body>
<?php
 $usingSolutionVolume = mb_convert_kana($_POST['usingSolutionVolume'],'a');
 $actualUsingSolutionVolume = 0;
 $currentAbsorbance = mb_convert_kana($_POST['currentAbsorbance'],'a');
 $targetAbsorbance = mb_convert_kana($_POST['targetAbsorbance'],'a');
 
 $usingSolutionVolumeUnit = $_POST['usingSolutionVolumeUnit'];
    switch($usingSolutionVolumeUnit){
         case 1:
           $actualUsingSolutionVolume = $usingSolutionVolume * 1;
           break;				

         case 2:		
           $actualUsingSolutionVolume = $usingSolutionVolume * 10**-3;
           break;
						
         case 3:
           $actualUsingSolutionVolume = $usingSolutionVolume * 10**-6;  
           break;						

         case 4:			
           $actualUsingSolutionVolume = $usingSolutionVolume * 10**-9;
           break; 
      }
 $volumeMagnification = $currentAbsorbance / $targetAbsorbance ;
 $finalSolutionVolume = $actualUsingSolutionVolume * $volumeMagnification ;
 $addSolventVolume = $finalSolutionVolume - $actualUsingSolutionVolume ;

?>
<p> 加える溶媒の量 : 
<?php
  if($addSolventVolume >=1){  //105行目
     echo $addSolventVolume * 1 ."(L)";}
   elseif($addSolventVolume <1 & $addSolventVolume >=10**-3){
     echo $addSolventVolume * 10**3 ."(mL)";}
   elseif($addSolventVolume <10**-3  & $addSolventVolume >=10**-6){
     echo $addSolventVolume * 10**6 ."(μL)";}				//110行目
   elseif($addSolventVolume <10**-6  & $addSolventVolume >=10**-9){  
     echo $addSolventVolume * 10**9 ."(nL)";}
   elseif($addSolventVolume <10**-9 & $addSolventVolume >=10**-12){
     echo $addSolventVolume * 10**12 ."(pL)";}
   else{									//115行目
     echo "計算できません";}
?></p>
<p>※単位に気を付けてください </p>

</body>
</html>