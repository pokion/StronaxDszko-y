<?php
	include 'config.php';
	$conn = new mysqli($server,$login,$password,$database);
	$conn->set_charset("utf8");
	if ($conn->connect_error) {
		die("Connection failed: " . $conn->connect_error);
	}	

	$sql = "SELECT * FROM tags";

	if ($conn->connect_error) {
			echo "Error: " . $sql . "<br>" . $conn->error;
		}
		$result = mysqli_query($conn, $sql);

		$data = array();
		if (mysqli_num_rows($result) > 0) {
			while($row = mysqli_fetch_assoc($result)) {
			    array_push($data,array('name'=>$row['tag_name'],'id'=>$row['tag_id']));
			}
		}
		echo json_encode($data, JSON_UNESCAPED_UNICODE);
?>