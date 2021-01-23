<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if(!empty($_POST['contactname']) && !empty($_POST['contactemail']) && !empty($_POST['contactmessage'])) {
	$to = 'osoblivaya@mail.ru'; // Ваш e-mail
	$body = "\nName: {$_POST['contactname']}\nEmail: {$_POST['contactemail']}\n\n\n{$_POST['contactmessage']}\n\n";
	mail($to, "Письмо с тестового лендинга leadingmaster.ru", $body); // Название Лендинга
    }
}
?>