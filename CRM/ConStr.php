<?php
$connection = mysql_connect('localhost','daniel','123456') or trigger_error(mysql_errno(),E_USER_ERROR);
mysql_set_charset('utf8',$connection);

?>