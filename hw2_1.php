<?php 

$fileData = file_get_contents(__DIR__ . '/phone_book.json');
$data = json_decode($fileData, true);

?>

<!DOCTYPE html>
<html>
<head>
	<title>Телефонная книга</title>
	<style> 
	th { 
			background-color: #c9c9c9; }
	td { 
			background-color: #eeeeee; 
			text-align: center; }
	</style>
</head>
<body>
	<table>
		<thead>
			<tr>
				<th>Имя</th>
				<th>Фамилия</th>
				<th>Город</th>
				<th>Улица</th>
				<th>Индекс</th>
				<th>Телефон</th>
			</tr>
		</thead>
		<tbody>
			<?php foreach ($data as $item) { ?>
				<tr>
					<td><?= $item['firstName'] ?></td>
					<td><?= $item['lastName'] ?></td>
					<td><?= $item['address']['city'] ?></td>
					<td><?= $item['address']['streetAddress'] ?></td>
					<td><?= $item['address']['postalCode'] ?></td>
					<td><?= $item['phoneNumber'] ?></td>
				</tr>

			<?php } ?>
		</tbody>
	</table>
</body>
</html>