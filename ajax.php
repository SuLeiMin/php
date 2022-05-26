<?php
	$fp = fopen("KEN_ALL.CSV", "r");
	
	while($arrData = fgetcsv($fp)){
		if ($arrData == $_GET['zipcode']){
			$arrRtn[0] = mb_convert_encoding($arrData[6] . $arrData[7] . $arrData[8], "UTF-8", "SJIS-win");
			break;
		}
	}
	fclose($fp);
	
	echo json_encode($arrRtn);
    
?>