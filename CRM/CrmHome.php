<?php require_once('function.php'); ?>
<?php
if(!isset($_SESSION))
	session_start();
//$_SESSION['pre_page'] = "index.php";

?>
<?php
/*
$conn = mysqli_connect('localhost','root');
mysql_select_db('shopping',$conn) or die('conn db fail');
*/
if(isset($_POST['account']) && isset($_POST['password'])){
	$account = $_POST['account'];
	$password = $_POST['password'];

$constr = 'mysql:host=localhost;dbname=shopping';
try{
	$db = new PDO($constr,'root');
	$sql = sprintf("SELECT username, password,userlevel FROM member WHERE username=%s AND password=%s", //sprintf用於輸出指定格式.s%代表字串
GetSQLValue($account,"text"),GetSQLValue($password,"text"));
	$sth = $db->prepare($sql);
	$result = $sth->execute();
	//$db->query($sql);
}catch(PDOException $e){
	print "".$e->getMessage()."";
	die();
}//<?php if(isset($_SESSION['account'])) echo '歡迎你'.$_SESSION['account'];?
	
	if($sth->rowCount() > 0){
		//>0代表有回傳資料
		$_SESSION['account'] = $_POST['account'];
		$_SESSION['password'] = $_POST['password'];
		echo $sth->rowCount();
		//$resfetch = $result->fetch(PDO::FETCH_ASSOC);
		//$_SESSION['userlevel'] = $resfetch['userlevel']; //從$result第0列取userlevel欄位的值
		echo 'Success'.$account;
	}else
	{
		echo 'fail'.$account;
	}
}
?>
<html>
<head>
<link rel="stylesheet" href="Home.css" type="text/css">
</head>
<body>
	<form action="<?php echo $_SERVER['PHP_SELF'];?>" method="POST">
	<table>
		<tr>
			<td id=HeadTablerRow>
				AHAO's Shop -- Customer Center
			<td/>
		<tr>
		
		<tr>
			<td>
				<div id="Intro">
				<span>[Here is Customer Center]</span>
				<br/>
				<span>You can do register and login</span>
				<br/><br/><br/><br/><br/><br/>
				</div>
			</td>

			<td id="RightTable">
			
				<span class = "inputbox">帳號<input class="inputbox" type="text" name="account" value=""/></span>
				<br/>
				<span class = "inputbox">密碼<input class="inputbox" type="text" name="password" /></span>
				<br/>
				<input type="submit" value="登入">
				<br/>
				<a href = "">基本資料</a>
				<br/>
				<a href = "">登出</a> <!--如果有session才出現登出-->
				<br/>
				<a href = "new_member.php">加入會員</a>
				<br/>

			</td>
		</tr>
	</table>
	</form>
</body>

</html>