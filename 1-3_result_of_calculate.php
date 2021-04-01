<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="UTF-8">
<title>1-3_result of calculate</title>
</head>

<body>

<?php //10行目
   $beforeConcentration = mb_convert_kana($_POST['beforeConcentration'],'a');
   $afterSolutionVolume = mb_convert_kana($_POST['afterSolutionVolume'],'a');
   $afterConcentration  = mb_convert_kana($_POST['afterConcentration'],'a');
   $actualBeforeConcentration = 0;
   $actualAfterConcentration = 0; //15行目
   $actualAfterSolutionVolume = 0;

   $beforeConcentrationUnit = $_POST['beforeConcentrationUnit'];
       switch($beforeConcentrationUnit){
         case 1:				//20行目
           $actualBeforeConcentration = $beforeConcentration * 1;
           break;				

         case 2:		
           $actualBeforeConcentration = $beforeConcentration * 10**-3; //25行目
           break;
						
         case 3:
           $actualBeforeConcentration = $beforeConcentration * 10**-6;  
           break;						//30行目

         case 4:			
           $actualBeforeConcentration = $beforeConcentration * 10**-9;
           break; 
								//35行目
         case 5:
           $actualBeforeConcentration = $beforeConcentration * 10**-12;
           break;
      } 
								//40行目
     $afterSolutionVolumeUnit = $_POST['afterSolutionVolumeUnit'];
      switch($afterSolutionVolumeUnit){				
        case 1:
         $actualAfterSolutionVolume = $afterSolutionVolume * 1; 
         break;							//45行目
						
        case 2:							
         $actualAfterSolutionVolume = $afterSolutionVolume * 10**-3;
         break; 
								//50行目
        case 3:					
         $actualAfterSolutionVolume = $afterSolutionVolume * 10**-6;  
         break;
		       
        case 4:							//55行目
         $actualAfterSolutionVolume = $afterSolutionVolume * 10**-9;
         break;							
       }
		
      $afterConcentrationUnit = $_POST['afterConcentrationUnit']; //60行目
       switch($afterConcentrationUnit){
         case 1:
           $actualAfterConcentration = $afterConcentration * 1;
           break;				
								//65行目
         case 2:
           $actualAfterConcentration = $afterConcentration * 10**-3;
           break;
						
         case 3:						//70行目
           $actualAfterConcentration = $afterConcentration * 10**-6;
           break;

         case 4:				
           $actualAfterConcentration = $afterConcentration * 10**-9; //75行目
           break;

         case 5:
           $actualAfterConcentration = $afterConcentration * 10**-12;
           break;							//80行目
      }

     $diluteMagnification = $actualBeforeConcentration / $actualAfterConcentration;
     $requiredBeforeSolutionVolume = $actualAfterSolutionVolume / $diluteMagnification;
     $requiredSolventVolume = $actualAfterSolutionVolume - $requiredBeforeSolutionVolume; //85行目
?>
 <p> 必要な希釈前の溶液量:
<?php 
   if($requiredBeforeSolutionVolume >=1){
     echo $requiredBeforeSolutionVolume * 1 ."(L)";}	//90行目
   elseif($requiredBeforeSolutionVolume <1 & $requiredBeforeSolutionVolume >=10**-3){
     echo $requiredBeforeSolutionVolume * 10**3 ."(mL)";}
   elseif($requiredBeforeSolutionVolume <10**-3  & $requiredBeforeSolutionVolume >=10**-6){
     echo $requiredBeforeSolutionVolume * 10**6 ."(μL)";}
   elseif($requiredBeforeSolutionVolume <10**-6  & $requiredBeforeSolutionVolume >=10**-9){  //95行目
     echo $requiredBeforeSolutionVolume * 10**9 ."(nL)";}
   elseif($requiredBeforeSolutionVolume <10**-9 & $requiredBeforeSolutionVolume >=10**-12){
     echo $requiredBeforeSolutionVolume * 10**12 ."(pL)";}
   else{
     echo "計算できません";} //100行目
?></p>

 <p> 必要な溶媒の量:
<?php						
   if($requiredSolventVolume >=1){  //105行目
     echo $requiredSolventVolume * 1 ."(L)";}
   elseif($requiredSolventVolume <1 & $requiredSolventVolume >=10**-3){
     echo $requiredSolventVolume * 10**3 ."(mL)";}
   elseif($requiredSolventVolume <10**-3  & $requiredSolventVolume >=10**-6){
     echo $requiredSolventVolume * 10**6 ."(μL)";}				//110行目
   elseif($requiredSolventVolume <10**-6  & $requiredSolventVolume >=10**-9){  
     echo $requiredSolventVolume * 10**9 ."(nL)";}
   elseif($requiredSolventVolume <10**-9 & $requiredSolventVolume >=10**-12){
     echo $requiredSolventVolume * 10**12 ."(pL)";}
   else{									//115行目
     echo "計算できません";}
?></p>
<p>※単位に気を付けてください </p>
									
</body>
</html>										<!--120行目-->