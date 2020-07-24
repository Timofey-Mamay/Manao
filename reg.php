<!DOCTYPE html>
<html lang="en">
<head>
	<title>Регистрация</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->
	<link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
<!--===============================================================================================-->
</head>
<body>


	<div class="container-contact100" style="background-image: url('images/bg-01.jpg');">
		<div class="wrap-contact100">
			<form class="contact100-form validate-form" method="POST" action="reg_xml.php">
				<span class="contact100-form-title">
					<center>
					Регистрация
				</center>
				</span>

				<div class="wrap-input100 rs1-wrap-input100 validate-input" data-validate="Поле не может быть пустым">
					<span class="label-input100">Имя:</span>
					<input class="input100" type="text" name="name" placeholder="Введите имя">
				</div>

				<div class="wrap-input100 rs1-wrap-input100 validate-input" data-validate = "Поле не может быть пустым">
					<span class="label-input100">Логин:</span>
					<input class="input100" type="text" name="log" placeholder="Введите логин">
				</div>

				<div class="wrap-input100  validate-input"  data-validate = "Введите почту в указанном формате qwerty@qwe.qw">
					<span class="label-input100">Email:</span>
					<input class="input100" type="email" name="email" placeholder="Введите email">
				</div>

				<div class="wrap-input100 rs1-wrap-input100 validate-input" data-validate="Поле не может быть пустым">
					<span class="label-input100">Пароль:</span>
					<input class="input100" type="password" id="txtNewPassword" name="pass" placeholder="Введите пароль">
				</div>


   

				<div class="wrap-input100 rs1-wrap-input100 validate-input" data-validate = "Поле не может быть пустым">
					<span class="label-input100">Подтвердите пароль:</span>
					<input class="input100" type="password" id="txtConfirmPassword" onChange="checkPasswordMatch();" name="pass_bonus" placeholder="Введите пароль">
					<div class="registrationFormAlert" id="divCheckPasswordMatch">
</div>
				</div>

				<div class="container-contact100-form-btn">
					<div class="wrap-contact100-form-btn">
						<div class="contact100-form-bgbtn"></div>
						<button type="submit" name="submit" class="contact100-form-btn">
							Отправить
						</button>
					</div>
				</div>
			</form>
			<br>
			<center><a href="index.php" class="stretched-link">Вернуться</a></center>
		</div>

		
	</div>



	<div id="dropDownSelect1"></div>

<!--===============================================================================================-->
	<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/bootstrap/js/popper.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="js/main.js"></script>

<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-23581568-13"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-23581568-13');
</script>





<!-- проврека пароля -->
<script type="text/javascript">
	function checkPasswordMatch() {
    var password = $("#txtNewPassword").val();
    var confirmPassword = $("#txtConfirmPassword").val();

    if (password != confirmPassword)
        $("#divCheckPasswordMatch").html("Пароль не совпадает!");
    else
        $("#divCheckPasswordMatch").html("");
}

$(document).ready(function () {
   $("#txtNewPassword, #txtConfirmPassword").keyup(checkPasswordMatch);
});
</script>

</body>
</html>
