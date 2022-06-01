<?php
date_default_timezone_set('Asia/Tokyo');
function funcWeek(){
    return array('日', '月', '火', '水', '木', '金', '土');
}
$w = funcWeek()[date("w")];
?>