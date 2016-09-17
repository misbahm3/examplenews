<?php
	require 'connection.php';

	$stmt = $conn->prepare("SELECT id, title, image1, image2 FROM news ORDER BY id ASC");
	$stmt->execute();

	while ($res = $stmt->fetch(PDO::FETCH_ASSOC)){
		$data[] = $res;
	}

	echo json_encode($data);
?>