<p>使用する物質の分子量(原子量)
  <select name="atomicWeight">

<?php
 $atomicWeights =['select'=>"選択してください", 'NaN3'=>"アジ化ナトリウム(NaN3)", 'AA'=>"アスコルビン酸(AA)", 'KCl'=>"塩化カリウム(KCl)", 'AgCl'=>"塩化銀(AgCl)", 'CuCl'=>"塩化銅(Ⅰ)(CuCl)", 'CuCl2_2a'=>"塩化銅(Ⅱ)(無水和物)(CuCl2)", 'CuCl2_2b'=>"塩化銅(Ⅱ)(二水和物)(CuCl2)", 'NaCl'=>"塩化ナトリウム(NaCl)", 'CitNa3'=>"クエン酸三ナトリウム(CitNa3)", 'グルコース'=>"グルコース(C6H12O6)", 'グリシン'=>"グリシン(C2H5NO2)", 'AgNO3'=>"硝酸銀(AgNO3)", 'KOH'=>"水酸化カリウム(KOH)", 'NaOH'=>"水酸化ナトリウム(NaOH)", 'NaBH4'=>"水素化ホウ素ナトリウム(NaBH4)", 'スクロース'=>"スクロース(C12H22O11)", 'ヒドロキノン'=>"ヒドロキノン( C6H4(OH)2 )", 'NaHCO3'=>"炭酸水素ナトリウム(NaHCO3)", 'H3BO3'=>"ホウ酸(H3BO3)", 'Na2HPO4'=>"リン酸水素二ナトリウム(Na2HPO4)",'KH2PO4'=>"リン酸二水素カリウム(KH2PO4)", 'NaH2PO4'=>"リン酸二水素ナトリウム(NaH2PO4)", 'CTAB'=>"CTAB", 'CTAC'=>"CTAC", 'PSS'=>"PSS"
];
  foreach($atomicWeights as $key=>$atomicWeightList){
   echo '<option value="', $key, '">', $atomicWeightList, '</option>';
 }
?>
</select>
<p>
<span class="a">※選択肢にない場合、下記をクリックしてください
<br>
※下の表の分子量と異なる場合は数値で入力してください<span></p>

<details>
 <summary>分子量を数値で入力する</summary>
<input type="text" name="otherAtomicWeight"> (g/mol)
<br>
<p><span class="a">※選択肢から選んだ場合、入力しないでください</span></p>
</details>

<hr>
