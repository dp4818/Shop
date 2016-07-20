<?php require_once('function.php'); ?>
<?php
if(!isset($_SESSION))
	session_start();
?>

<html>
	<head>
		<link rel="stylesheet" type="text/css" href="Home.css"/>
		<script src="Spry/SpryData.js" type="text/javascript"></script>
		<script src="JS/insertcheck.js" type="text/javascript"></script>
	</head>
	<body>
	
		<table class="maintable">
			<tr id="HeadTableRow">
				<td class="trborder">
					加入會員
				</td>
			</tr>
			
			<tr class="trborder">
				<td class="trborder">
					注意事項
					為方便您購物時能確實收到商品，請務必正確填寫以下資料。
					<br/>
					<br/>
				</td>
			</tr>
	
			<tr class="trborder">
				<td class="trborder">
				<form action="<?php echo $_SERVER['PHP_SELF'];?>" method="POST">
					<table>
						<tr>
							<td>
								<span>帳	號</span>
								<input name="account" id="account" type="text"/>
							</td>
						</tr>	
						<tr>	
							<td>
								<span>密	碼</span>
								<input type="text" id="password" name="password"/>
							</td>
						</tr>
						<tr>
							<td>
								<span>姓	名</span>
								<input type="text" name="name"/>
							</td>
						</tr>
						<tr>
							<td>
								<span>性	別</span>
								<input type="radio" name="sex" value="男" />男
								<input type="radio" name="sex" value="女" />女
							</td>
						</tr>
						<tr>
							<td>
								<span>信	箱</span>
								<input type="text" name="email"/>
							</td>
						</tr>
						<tr>
							<td>
								<span>出生日期</span>
								<input type="text" name="bitrhday"/>
							</td>	
						</tr>
						<tr>
							<td>
								<span>電	話</span>
								<input type="text" name="phone"/>
							</td>	
						</tr>
						<tr>
							<td>
								<span>地	址</span>
								<input type="text" name="address"/>
							</td>
						</tr>
						<tr>
							<td>
								<span>統	編</span>
								<input type="text" name="uniform"/>
							</td>
						</tr>
						<tr>
							<td>
								<span>發票名稱</span>
								<input type="text" name="untitle"/>
							</td>
						</tr>
				</table>
				
				</td>
			</tr>
			<tr>
				<td>
					<input type="submit" onclick="checkexist();"/>
				</td>
			</tr>
					<input type="hidden" name="checkfield" value="ok"/>
			</form>
		</table>
	</body>
</html>