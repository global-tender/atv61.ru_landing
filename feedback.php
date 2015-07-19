<?php

if (isset($_POST['atv_message']))
{
	$content = "Вам отправлено сообщение с сайта atv61.ru.\n\nИмя: {$_POST['atv_name']}\nТелефон: {$_POST['atv_phone']}\nE-Mail: {$_POST['atv_email']}\n\nСообщение:\n\n{$_POST['atv_message']}\n";
	
	$headers = 'From: atv61.ru <no_reply@atv61.ru>' . "\r\n" .
	'Reply-To: no_reply@atv61.ru' . "\r\n";

	$params = "-fno_reply@atv61.ru";

	mail("ihptru@gmail.com", "Сообщение с сайта atv61.ru", $content, $headers, $params);

	$message_array = array();
	$message_array['name'] = $_POST['atv_name'];
	$message_array['phone'] = $_POST['atv_phone'];
	$message_array['email'] = $_POST['atv_email'];
	$message_array['message'] = $_POST['atv_message'];
	$message_array['date'] = date('Y.m.d H:i:s');

	$messages_json = array();
	if (file_exists('./feedback_messages.txt'))
	{
		$tmp = file_get_contents('./feedback_messages.txt');
		$messages_json = (array)json_decode($tmp);
	}
	$messages_json[] = $message_array;

	file_put_contents('./feedback_messages.txt', json_encode($messages_json));
	echo '{"result":"success"}';

}
else
{
	echo '{"result":"failure"}';
}

?>