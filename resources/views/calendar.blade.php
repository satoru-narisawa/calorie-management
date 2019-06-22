<?php
    
    if(isset($_POST["y"])){
    $y = intval($_POST["y"]);
    $m = intval($_POST["m"]);
}
else {
    $ym_now = date("Ym");
    $y = substr($ym_now,0,4);
    $m = substr($ym_now,4,2);
}



print "<form method='POST' action=''>";
?>      {{ csrf_field() }} 
<?php
        print "<select name='y'>";
        for($i=$y-2; $i<=$y+2; $i++){
        print "<option";
        if($i == $y){
            print " selected";
        }
        print ">$i</option>";
    }
    print "</select>年";

    print "<select name='m'>";
        for($i = 1;$i <= 12; $i++){
        echo "<option";
        if($i == $m){
            print " selected";
        }
        print ">$i</option>";
        }
        
        
    print "</select>月".PHP_EOL;
print '<input type="submit" value="表示" name="sub1">';
print "</form>";

print<<< EOL
<table border="1">
<tr>
    <th>日</th>
    <th>月</th>
    <th>火</th>
    <th>水</th>
    <th>木</th>
    <th>金</th>
    <th>土</th>
</tr>
EOL;

$d = 1;
print $y."年".$m."月".PHP_EOL;//現在の年月を表示（２０１９年６月）

//１日の曜日を取得
$wd1 = date("w",mktime(0,0,0,$m,1,$y));
//その数だけ空白を表示
for($i = 1;$i <= $wd1; $i++){
    print "<td> </td>";
}
//checkdate関数　引数の年月日から存在する日付をだす　ここではとある年月の存在する日をプリントしている
while(checkdate($m,$d,$y)){
    $link = "schedule?ymd=%04d%02d%02d";
    $datelink = sprintf($link,$y,$m,$d);
    print "<td><a href={$datelink}>{$d}</a></td>";
    if(date("w",mktime(0,0,0,$m,$d,$y)) == 6){
        print "</tr>";
        if(checkdate($m,$d+1,$y)){
            print "<tr>";
        }
    }
    $d++;
}
//最後の週の土曜まで空白作る
$wdx = date("w",mktime(0,0,0,$m+1,0,$y));//翌月の0日
//そこまで空白作る
for($i = 1;$i<7-$wdx; $i++){
    print "<td> </td>";
}