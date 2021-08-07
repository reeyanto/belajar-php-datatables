<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Belajar PHP DataTables</title>
	<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.25/css/jquery.dataTables.min.css">
	<style type="text/css">
		thead {
			background: #d0d0d0;
		}
	</style>
</head>
<body>
	<?php
	$koneksi = mysqli_connect("localhost", "root", "", "test") or die(mysqli_connect_error());
	$query   = "select * from php_datatables";
	$query	 = mysqli_query($koneksi, $query) or die(mysqli_error($koneksi));
	?>
	<table id="table" style="border: 1px solid #d0d0d0; width: 100%;">
		<thead>
			<tr>
				<td>Title</td>
				<td>Body</td>
			</tr>
		</thead>
		<tbody>
			<?php while($data = mysqli_fetch_object($query)): ?>
				<tr>
					<td><?php echo $data->title; ?></td>
					<td><?php echo $data->body; ?></td>
				</tr>
			<?php endwhile; ?>
		</tbody>
	</table>

	<script type="text/javascript" src="https://code.jquery.com/jquery-3.5.1.js"></script>
	<script type="text/javascript" src="https://cdn.datatables.net/1.10.25/js/jquery.dataTables.min.js"></script>
	<script type="text/javascript">
		$(document).ready(function() {
			$("#table").DataTable();
		});
	</script>
</body>
</html>