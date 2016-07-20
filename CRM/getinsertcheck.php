<script type="text/javascript">
function return(){
	var count = "0";
	if(count > 0){
		alert(req.userData.username + "\r\n此帳號已被他人使用, 請您重新輸入"); 
		// 不要插入新的會員記錄
		document.getElementById("checkfield").value = "";
		alert("checkfield is"+document.getElementById("checkfield").value);
	}	
	else {
		document.getElementById("checkfield").value= 'ok';
		alert("checkfield is"+document.getElementById("checkfield").value);
	}
		
}
</script>

<?php require_once('function.php'); ?>
<?php
$constr = 'mysql:host=localhost;dbname=shopping;';
$account= "1"; //must have value
if(isset($GET['account']))
	$account = $GET['account'];

try{
	$db = new PDO($constr,'root');
	$sql = sprintf("SELECT username FROM member WHERE username=%s",GetSQLValue($account,"text"));
	//$sql = "SELECT * FROM member";
	$sth = $db->prepare($sql);
	$sth->execute(); //一定要execute才有資料
	echo $sth->rowCount();
	echo "<script type='text/javascript'>return()</script>";
}catch(PDOException $e){
	echo 'fail'.$account;
}

?>
