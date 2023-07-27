<!DOCTYPE html>
<html>
<head>
	<title>Daftar Siswa</title>
</head>
<body>

	<table border="2px solid black">
		<tr>
			<th>Nama</th>
			<th>Nis</th>
			<th>Alamat</th>
		</tr>

		<?php foreach($siswa as $s): ?>

		<tr>
			<td> <?php echo $s['name']; ?> </td> <!-- <!dalam kurung kotak hrs sama kek di database -->
			<td> <?php echo $s['nis']; ?> </td>
			<td> <?php echo $s['alamat']; ?> </td>

		</tr>

		<?php endforeach; ?>
	</table>

</body>
</html>