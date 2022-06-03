<?php
/*date_default_timezone_set('Asia/Tokyo');
function funcWeek(){
    return array('日', '月', '火', '水', '木', '金', '土');
}
$w = funcWeek()[date("w")];
*/
?>

<?php
 /* $week = array('日', '月', '火', '水', '木', '金', '土');
 
  // date関数の場合
  $w = $week[date('w')].'曜日';
 echo $w;
*/
?>

<?php    
   
$month = "07";
$year = "2022";

$start_date = "01-".$month."-".$year;
$start_time = strtotime($start_date);

$end_time = strtotime("+1 month", $start_time);

for($i=$start_time; $i<$end_time; $i+=86400)
{
   $list[] = date('Y-m-d-D', $i);
}

//print_r($list);
?>

