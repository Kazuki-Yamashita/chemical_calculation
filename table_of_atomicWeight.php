<table border="1">
 <caption>選択肢の物質の分子量</caption>

  <tr><th>物質名</th><th>分子量(原子量)</th></tr>
<?php
 $substances=['アジ化ナトリウム(NaN3)'=>"65.01", 'アスコルビン酸(AA)'=>"176.12", '塩化カリウム(KCl)'=>"74.55", '塩化銀(AgCl)'=>"143.32", '塩化銅(Ⅰ)(CuCl)'=>"98.99", '塩化銅(Ⅱ)(CuCl2)'=>"134.45(無水和物)　170.48(二水和物)", '塩化ナトリウム(NaCl)'=>"58.44", 'クエン酸三ナトリウム(CitNa3)'=>"294.10", 'グルコース(C6H12O6)'=>"180.16", 'グリシン(C2H5NO2)'=>"75.07", '硝酸銀(AgNO3)'=>"169.87", '水酸化カリウム(KOH)'=>"56.105", '水酸化ナトリウム(NaOH)'=>"39.99", '水素化ホウ素ナトリウム(NaBH4)'=>"37.83", 'スクロース(C12H22O11)'=>"342.30", 'ヒドロキノン( C6H4(OH)2 )'=>"110.11", '炭酸水素ナトリウム(NaHCO3)'=>"84.01", 'ホウ酸(H3BO3)'=>"61.83", 'リン酸水素二ナトリウム(Na2HPO4)'=>"141.96",'リン酸二水素カリウム(KH2PO4)'=>"136.09", 'リン酸二水素ナトリウム(NaH2PO4)'=>"119.98", 'CTAB'=>"364.45", 'CTAC'=>"320.00", 'PSS'=>"約500,000(50万)"
];
 foreach($substances as $key=>$substanceTable) {
  echo '<tr><td>', $key, '</td><td>', $substanceTable, '</td></tr>';
 }
?>

</table>
