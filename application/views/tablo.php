<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport"
		  content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
	<title>Personel Listesi</title>
</head>
<body class="container py-4">

<h3 class="text-center mb-4">Personel Listesi</h3>
<div class="d-flex justify-content-between mb-3">
	<a href="http://localhost/codeigniter/dbislem" class="btn btn-success">[Kayıt Ekle]</a>
</div>
<table class="table table-bordered table-striped table-hover">
	<thead class="table-dark">
	<tr>
		<th>First Name</th>
		<th>Last Name</th>
		<th>Email</th>
		<th>Phone</th>
		<th>TC</th>
		<th>Düzenleme</th>
	</tr>
	</thead>
	<tbody>
	<?php foreach ($rows as $row) { ?>
		<tr>
			<td><?php echo $row->firstName; ?></td>
			<td><?php echo $row->lastName; ?></td>
			<td><?php echo $row->email; ?></td>
			<td><?php echo $row->phone; ?></td>
			<td><?php echo $row->tc; ?></td>
			<td>
				<a href="<?php echo base_url("tabloKontrol/updatePage/$row->eposta"); ?>" class="btn btn-warning btn-sm">[Düzenle]</a>

				<!-- E-posta Gönderme Formu -->
				<form action="<?php echo base_url('tabloKontrol/send'); ?>" method="post" style="display:inline;">
					<!-- Gizli Alan ile E-posta Adresini Gönder -->
					<input type="hidden" name="email" value="<?php echo $row->email; ?>">
					<input type="hidden" name="message" value="Bu bir test mesajıdır."> <!-- Mesajı dinamik olarak da alabilirsiniz -->
					<button type="submit" class="btn btn-primary btn-sm">[E-posta]</button>
				</form>
			</td>
		</tr>
	<?php } ?>
	</tbody>
</table>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>
