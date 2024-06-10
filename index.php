<html>

<body>
	<center>
		<head>
			<link rel="stylesheet" href="style.css">
		</head>
		<div class="container">
			<div class="back"></div>
			<div class="frm-container">
				<h1>محاسه کالری</h1>
				<form method="post">
					جنسیت:
					<Select name="gender"><br>
						<div class="frm">
							<option>مرد</option>
							<option>زن</option>
					</select><br><br>
					<label for="age">سن : </label>
					<input name="age" type="text"><br><br>
					وزن:
					<input name="weight" type="text"><br><br>
					قد:
					<input name="height" type="text"><br><br>
					<br><input type="Submit" value="محاسبه کالری">




					<?php
					//دریافت داده ها از فرم
					$age = $_POST['age']; //سن
					$weight = $_POST['weight']; // وزن
					$height = $_POST['height']; // قد
					$gender = $_POST['gender']; //جنسیت

					//محاسه کالری یا BMR از طریق جنسیت
					switch ($gender) {
						case 'زن':
							//فرمول و محاسبه برای زن
							$mbr_result = 655 + (9.6 * $weight) + (1.8 * $height) - (4.7 * $age);
							echo "<p>میزان متابولیسم روزانه شما  $mbr_result تخمین زده می شود  </p>";
							echo "<p>این بدان معنی است که شما به $mbr_result کالری برای حفظ وزن فعلی خود نیاز دارید</p>";

							break;
						case 'مرد':
							//فرمول و محاسبه برای مرد
							$mbr_result =  66 + (13.7 * $weight) + (5 * $height) - (6.8 * $age);
							echo "<p>میزان متابولیسم روزانه شما  $mbr_result تخمین زده می شود  </p>";
							echo "<p>این بدان معنی است که شما به $mbr_result کالری برای حفظ وزن فعلی خود نیاز دارید</p>";
					}
					?>
				</form>
				<div class="copy_right">
					<button><a id="copy_link">Telegram</a>
						<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="#ffd700" class="bi bi-telegram" viewBox="0 0 16 16">
							<path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0M8.287 5.906q-1.168.486-4.666 2.01-.567.225-.595.442c-.03.243.275.339.69.47l.175.055c.408.133.958.288 1.243.294q.39.01.868-.32 3.269-2.206 3.374-2.23c.05-.012.12-.026.166.016s.042.12.037.141c-.03.129-1.227 1.241-1.846 1.817-.193.18-.33.307-.358.336a8 8 0 0 1-.188.186c-.38.366-.664.64.015 1.088.327.216.589.393.85.571.284.194.568.387.936.629q.14.092.27.187c.331.236.63.448.997.414.214-.02.435-.22.547-.82.265-1.417.786-4.486.906-5.751a1.4 1.4 0 0 0-.013-.315.34.34 0 0 0-.114-.217.53.53 0 0 0-.31-.093c-.3.005-.763.166-2.984 1.09" />
						</svg></button> mohammad &copy;
				</div>
			</div>
		</div>
	</center>
	<script>
		let link = document.getElementById('copy_link')
		link.addEventListener('click', newTab)

		function newTab() {
			link.href = 'https://t.me/root404'
		}
	</script>
</body>

</html>