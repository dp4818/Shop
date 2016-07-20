
function checkexist(){
	var account = document.getElementById("account").value;
	if(account != ""){
		var objUserdata = new Object;
		objUserdata.username = account;
		var req = Spry.Utils.loadURL("GET","getinsertcheck.php?account="+account,false);//,myCallback,{userData: objUserdata});
		alert("");
	}
	
}
function myCallback(req){
	
	var count = req.xhRequest.responseText; //讀取getinsertcheck.php的回傳值
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
