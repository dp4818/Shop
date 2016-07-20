<?php
function GetSQLValue($value,$type){
	if($type == "text"){
		$value = ($value != "") ? "'".htmlspecialchars($value,ENT_QUOTES)."'" : "NULL";
	}
	return $value;
}


?>