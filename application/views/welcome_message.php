<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Send Mail</title>
</head>
<body>
	<form action="<?= base_url('welcome/sendMail') ?>" method="POST">
		<input type="hidden" name="email">
		<button type="submit"
			style="padding: 5px 10px; background: yellowgreen; color: black;">Send</button>
	</form>
</body>
</html>