<?php include '../connect.php'; ?>
<?php include '../Includes/functions/functions.php'; ?>

<?php

	if(isset($_POST['do_']) && $_POST['do_'] == "Delete")
	{
		$client_id = $_POST['client_id'];

        $stmt = $con->prepare("DELETE from clients where client_id = ?");
        $stmt->execute(array($client_id));
	}

?>