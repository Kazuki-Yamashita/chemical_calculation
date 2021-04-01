<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="UTF-8">
<title>1-6_result of calculate</title>
</head>

<body>

<?php  //10行目
 $originalConcentration = mb_convert_kana($_POST['originalConcentration'],'a');
 $actualOriginalConcentration = 0;
 $originalVolume = mb_convert_kana($_POST['originalVolume'],'a');
 $actualOriginalVolume = 0;
 $convertedConcentration = mb_convert_kana($_POST['convertedConcentration'],'a'); // 15行目
 $actualConvertedConcentration = 0;

 $originalConcentrationUnit = $_POST['originalConcentrationUnit'];
  switch($originalConcentrationUnit){
   case 1:  //20行目
     $actualOriginalConcentration = $originalConcentration * 1;
      break;				

   case 2:		
     $actualOriginalConcentration = $originalConcentration * 10**-3; //25行目
      break;
						
   case 3:
     $actualOriginalConcentration = $originalConcentration * 10**-6;  
      break;

   case 4:			
     $actualOriginalConcentration = $originalConcentration * 10**-9;
     break; 

   case 5:
     $actualOriginalConcentration = $originalConcentration * 10**-12;
     break;
      } 

 $originalVolumeUnit = $_POST['originalVolumeUnit'];
  switch($originalVolumeUnit){				
        case 1:
         $actualOriginalVolume = $originalVolume * 1; 
         break;	
						
        case 2:							
         $actualOriginalVolume = $originalVolume * 10**-3;
         break; 

        case 3:					
         $actualOriginalVolume = $originalVolume * 10**-6;  
         break;
		       
        case 4:
         $actualOriginalVolume = $originalVolume * 10**-9;
         break;							
       }
 $convertedConcentrationUnit = $_POST['convertedConcentrationUnit'];
  switch($convertedConcentrationUnit){
   case 1:
     $actualConvertedConcentration = $convertedConcentration * 1;
      break;				

   case 2:		
     $actualConvertedConcentration = $convertedConcentration * 10**-3;
      break;
						
   case 3:
     $actualConvertedConcentration = $convertedConcentration * 10**-6;  
      break;

   case 4:			
     $actualConvertedConcentration = $convertedConcentration * 10**-9;
     break; 

   case 5:
     $actualConvertedConcentration = $convertedConcentration * 10**-12;
     break;
      } 

 $convertedVolume = $actualOriginalConcentration * $actualOriginalVolume / $actualConvertedConcentration;
?>

<p> 変換後の溶液の体積 : 
<?php
   if($convertedVolume >=1){
     echo $convertedVolume * 1 ."(L)";}
   elseif($convertedVolume <1 & $convertedVolume >=10**-3){
     echo $convertedVolume * 10**3 ."(mL)";}
   elseif($convertedVolume  <10**-3  & $convertedVolume >=10**-6){
     echo $convertedVolume * 10**6 ."(μL)";}
   elseif($convertedVolume  <10**-6  & $convertedVolume >=10**-9){  
     echo $convertedVolume * 10**9 ."(nL)";}
   elseif($convertedVolume  <10**-9 & $convertedVolume >=10**-12){
     echo $convertedVolume * 10**12 ."(pL)";}
   else{
     echo "計算できません";}
?></p>
<p>※単位に気を付けてください </p>

</body>
</html>