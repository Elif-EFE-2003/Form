<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Kayıt Formu</title>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
	<script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.min.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/inputmask@5.0.7/dist/jquery.inputmask.min.js"></script>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>/assets/style.css">
</head>
<body>
<div class="container" style="overflow: auto;">
	<form action="http://localhost/codeigniter/formislem/submit" id="registrationForm" class="form border-0 needs-validation " method="post" novalidate>
		<div class="needs-validation">
			<div class="UyeBilgisi border-top border-2">
				<h2 class="my-2">Üye Bilgisi</h2>
				<div class="row d-flex justify-content-between">
					<div class="col-md-6" style="position: relative;">
						<i class="bi bi-person" style="position: absolute; left: 20px; top: 7px;background-color: aqua; padding: 3px 8px;"></i>
						<span class="p-2" style="width: 100%; display: block; padding-left: 60px;">
                                <input type="text" id="firstName" name="firstName" required placeholder="İsim" style="width: 100%; padding-left: 40px; border-radius: 5px;">
                            </span>
					</div>
					<div class="col-md-6" style="position: relative;">
						<i class="bi bi-person" style="position:absolute; left: 20px; top: 7px; background-color: aqua; padding: 3px 8px;"></i>
						<span class="p-2" style="width: 100%; display: block; padding-left: 60px;">
                                <input type="text" id="lastName" name="lastName" required placeholder="Soyisim" style="width: 100%; padding-left: 40px; border-radius: 5px;">
                            </span>
					</div>
				</div>
				<div class="row d-flex justify-content-between">
					<div class="col-md-6" style="position: relative;">
                            <span class="p-2">
                                <i class="bi bi-shield"></i>
                                <input type="password" id="password" name="password" placeholder="Şifre" required>
                                <span id="passwordStrengthMessage"></span>
                            </span>
					</div>
					<div class="col-md-6" style="position: relative;">
                            <span class="p-2">
                                <i class="bi bi-shield"></i>
                                <input type="password" id="passwordConfirim" name="passwordConfirim" placeholder="Şifre (Tekrar)" required>
                            </span>
					</div>
				</div>
				<div class="row d-flex justify-content-between">
					<div class="col-md-6" style="position: relative;">
						<i class="bi bi-envelope"></i>
						<span class="p-2" style="width: 100%; display: block; padding-left: 60px;">
                                <input type="email" id="email" name="email" placeholder="Mail" style="width: 100%; padding-left: 40px; border-radius: 5px;" required>
                            </span>
					</div>
					<div class="col-md-6" style="position: relative;">
						<i class="bi bi-telephone"></i>
						<span class="p-2">
                                <input type="tel" id="phone" name="phone" placeholder="Telefon" required>
                            </span>
					</div>
				</div>
			</div>
			<div class="PersonelBilgisi border-top border-2 my-2">
				<h2 class="my-2">Personel Bilgisi</h2>
				<div class="row d-flex">
					<div class="col-md-6" style="position: relative;">
						<i class="bi bi-gender-ambiguous" style="position: absolute; left: 20px; top: 15px; background-color: aqua; padding:2px 8px;"></i>
						<span class="p-2" style="width: 100%; display: block; padding-left: 60px;">
                                <label class="my-1 mr-2" for="gender"></label>
                                <select class="custom-select my-1 mr-sm-2" id="gender" name="gender" required>
                                    <option value="Kadın">Kadın</option>
                                    <option value="Erkek" selected>Erkek</option>
                                    <option value="Diğer">Diğer</option>
                                </select>
                            </span>
					</div>
					<div class="col-md-6" style="position: relative;">
						<i class="bi bi-person" style="position: absolute; left: 20px; top: 7px; background-color: aqua; padding: 3px 8px;"></i>
						<span class="p-2" style="width: 100%; display: block; padding-left: 60px;">
                                <input type="text" id="age" name="age" placeholder="Yaş" required>
                            </span>
					</div>
				</div>
				<div class="row d-flex justify-content-between">
					<label for="birthdate" class="form-label md-6"></label>
					<div class="col-md-6" style="position: relative;">
						<i class="bi bi-calendar" style="position: absolute; left: 20px; top: 9px; background-color: aqua; padding: 6px 8px;"></i>
						<span class="p-2" style="width: 100%; display: block; padding-left: 60px;">
                                <input type="text" class="form-control" id="birthdate" name="birthDate" style="width: 100%; padding-left: 40px; border-radius: 5px;" required placeholder="gg.aa.yyyy">
                            </span>
					</div>
					<div class="col-md-6" style="position: relative;">
						<i class="bi bi-person-vcard-fill" style="position: absolute; left: 20px; top: 7px; background-color: aqua; padding: 3px 8px;"></i>
						<span class="p-2" style="width: 100%; display: block; padding-left: 60px;">
                                <input type="text" id="tc" name="tc" placeholder="TC Kimlik" required>
                            </span>
					</div>
				</div>
				<div class="mb-3 justify-content-between" style="height: 100px;">
					<label for="address" class="form-label" style="margin-left: -50px;">Adres</label>
					<textarea class="form-control overflow-auto" id="address" name="address" placeholder="Adresinizi giriniz"></textarea>
				</div>
			</div>
			<div class="ek border-top border-2">
				<label for="additional" class="form-label" style="margin-left: -55px; margin-bottom: 2px; margin-top: 6px;">
					<p>Eklemek istediğiniz herhangi bir şey varsa yazabilirsiniz.</p>
				</label>
				<textarea class="form-control" id="additional" name="additional"></textarea>
				<div class="row d-flex justify-content-between align-items-center">
					<!-- Dosya Seçme -->
					<div class="col-md-6" style="position: relative;">
						<label for="file" class="form-label" style="margin-left: -60px;">Dosya Seç</label>
						<input type="file" class="form-control-file" id="file" name="file" style="margin-left: -40px;">

						<!-- Gönder Butonu -->
						<button type="submit" class="btn btn-primary mt-2" style="margin-left: 0px;">Gönder</button>
					</div>

					<!-- Captcha -->
					<div class="col-md-6 d-flex align-items-center" style="position: relative;">
						<label for="captcha" class="form-label" style="margin-right: 10px;">Doğrulama Kodu</label>
						<div>
							<?php echo $captcha["image"]; ?>
						</div>
						<input type="text" name="captcha" required="required" class="form-control ms-2" style="border-radius: 5px; width: 50%;">
					</div>
				</div>


			</div>
	</form>
</div>
<script>
	$(document).ready(function () {
		$('#birthdate').inputmask('99.99.9999', { 'placeholder': 'gg.aa.yyyy' });

	});
</script>
<script>
	$(document).ready(function () {
		// Şifre doğrulama fonksiyonu
		function checkPasswordStrength(password) {
			var strength = 0;

			// Şifrede küçük harf var mı kontrol et
			if (password.match(/[a-z]+/)) {
				strength += 1;
			}

			// Şifrede büyük harf var mı kontrol et
			if (password.match(/[A-Z]+/)) {
				strength += 1;
			}

			// Şifrede rakam var mı kontrol et
			if (password.match(/[0-9]+/)) {
				strength += 1;
			}

			// Şifrede özel karakter var mı kontrol et
			if (password.match(/[$@#&!]+/)) {
				strength += 1;
			}

			// Şifrenin uzunluğu 8 karakterden fazla mı
			if (password.length >= 8) {
				strength += 1;
			}

			return strength;
		}

		// Şifre ve Şifre (Tekrar) alanlarını kontrol et
		$('#password, #passwordConfirim').on('keyup', function () {
			var password = $('#password').val();
			var passwordConfirim = $('#passwordConfirim').val();

			// Şifre gücü kontrolü
			var strength = checkPasswordStrength(password);
			var strengthMessage = '';

			switch (strength) {
				case 1:
					strengthMessage = 'Çok zayıf';
					break;
				case 2:
					strengthMessage = 'Zayıf';
					break;
				case 3:
					strengthMessage = 'Orta';
					break;
				case 4:
					strengthMessage = 'Güçlü';
					break;
				case 5:
					strengthMessage = 'Çok güçlü';
					break;
			}

			$('#passwordStrengthMessage').text(strengthMessage);

			// Şifreler eşleşiyor mu kontrol et
			if (password === passwordConfirim) {
				$('#passwordConfirim').css('border-color', 'green');
			} else {
				$('#passwordConfirim').css('border-color', 'red');
			}
		});

		// Form gönderildiğinde şifre eşleşmesini ve gücünü kontrol et
		$('#registrationForm').on('submit', function (e) {
			var password = $('#password').val();
			var passwordConfirim = $('#passwordConfirim').val();
			var strength = checkPasswordStrength(password);

			// Şifreler eşleşmiyorsa veya şifre gücü yeterli değilse form gönderimini engelle
			if (password !== passwordConfirim) {
				alert('Şifreler eşleşmiyor!');
				e.preventDefault();
			} else if (strength < 4) {
				alert('Şifreniz yeterince güçlü değil!');
				e.preventDefault();
			}
		});
	});

</script>

<script src="script.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.js"></script>
</body>
</html>

