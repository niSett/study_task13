<?php
	require_once __DIR__ . '/HtmlElement.php';
	require_once __DIR__ . '/BaseInput.php';
	require_once __DIR__ . '/Form.php';
	require_once __DIR__ . '/Button.php';
	require_once __DIR__ . '/TextInput.php';
	require_once __DIR__ . '/PasswordInput.php';
	
	$form = new Form();
	$form->addElement(new TextInput('firstname', 'First Name'));
	$form->addElement(new TextInput('email', 'Email'));
	$form->addElement(new PasswordInput('password', 'Password'));
	$form->addElement(new Button("submit"));
?>

<!doctype html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

		<title>Form Widget</title>
	</head>
	<body>
		<?php echo $form->render() ?>
	</body>
</html>