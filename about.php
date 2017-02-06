<!DOCTYPE html>
<html>
<head>
	<title>Алексей - начинающий php-программист</title>
	<meta charset="utf-8">
	 <style>
            body {
                font-family: sans-serif;  
            }
            
            dl {
                display: table-row;
            }
            
            dt, dd {
                display: table-cell;
                padding: 5px 10px;
            }

            dt {
            	font-weight: bold;
            }
        </style>
</head>

<?php 
	$name = 'Алексей';
	$age = 24;
	$mail = 'sevinkgr@gmail.com';
	$city = 'Севастополь';
	$about = 'Учусь кодить на PHP';
?>

<body>
	<h1>Страница пользователя Алексей</h1>
		<dl>
            <dt>Имя</dt>
            <dd><?php echo $name ?></dd>
     	</dl>
    	<dl>
            <dt>Возраст</dt>
            <dd><?php echo $age ?></dd>
        </dl>
        <dl>
            <dt>Адрес электронной почты</dt>
            <dd><a href="<?php echo $mail ?>"><?php echo $mail ?></a></dd>
        </dl>
        <dl>
            <dt>Город</dt>
            <dd><?php echo $city ?></dd>
        </dl>
        <dl>
            <dt>О себе</dt>
            <dd><?php echo $about ?></dd>
        </dl>
</body>
</html>
