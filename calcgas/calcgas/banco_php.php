<html>
<head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
	<table border="1" class="table table-striped">

		<tr>
			<td >Mac_ID</td>
			<td >Data e hora</td>
			<td >Umidade</td>
		</tr>
		<?php
			include 'conecta_mysql.php';
			$sql = "SELECT * FROM dados ORDER BY 1 DESC";
			if (mysqli_query($conecta, $sql)) {
			$row= mysqli_query($conecta, $sql);
				foreach($row as $key => $val){
					echo "<tr><td>{$val['Mac_idMac']} </td>";
					echo "<td>{$val['date']} </td>"; 
					echo "<td>{$val['idUmidade']} </td></tr>";
				}
			}else {
				echo "Error: " . $sql . "<br>" . mysqli_error($conn);
			} 	
			mysqli_close($conn);
			
		?>
	</table>
	
</body>
</html>
