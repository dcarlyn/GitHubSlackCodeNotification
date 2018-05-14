<html>
	<body>
		<?php
			//Webhook
			$webhook_commit = file_get_contents("php://input", true);

			$webhook_file = fopen("webhook_file.txt", "w");
			fwrite($webhook_file, $webhook_commit);
			fclose($webhook_file);

			echo shell_exec("php main.php");

		?>

	</body>
</html>
