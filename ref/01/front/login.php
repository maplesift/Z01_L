
			<div class="di"
				style="height:540px; border:#999 1px solid; width:53.2%; margin:2px 0px 0px 0px; float:left; position:relative; left:20px;">
				<marquee scrolldelay="120" direction="left" style="position:absolute; width:100%; height:40px;">
				</marquee>
				<div style="height:32px; display:block;"></div>
				<!--正中央-->
				<form method="post" action="./api/login.php" target="back">
					<p class="t botli">管理員登入區</p>
					<p class="cent">帳號 ： <input name="acc"  type="text" id="acc"></p>
					<p class="cent">密碼 ： <input name="pw" type="password" id="pw"></p>
					<p class="cent">
						<input value="送出" type="submit">
						<input type="reset" value="清除"></p>
				</form>
			</div>
		<script>
			// let user={
			// 	acc:$("#acc").val(),
			// 	pw:$("#pw").val(),
			// }
			// $.post("./api/login.php",user,(res)=>{
				
			// })
		</script>