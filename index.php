<?php
	$people = array(
		array('id'=>1,'first_name'=>'John','last_name'=>'Smith','email'=>'john.smith@hotmail.com'),
		array('id'=>2,'first_name'=>'Paul','last_name'=>'Allen','email'=>'paul.allen@microsift.com'),
		array('id'=>3,'first_name'=>'James','last_name'=>'Johnston','email'=>'james.johnston@gmail.com'),
		array('id'=>4,'first_name'=>'Steve','last_name'=>'Buscemi','email'=>'steve.buscemi@yahoo.com'),
		array('id'=>5,'first_name'=>'Doug',"last_name'=>'Simons','email'=>'doug.simons@hotmail.com')
	);
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">	
	<title> Table </title>
 	<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
	<style>
		#people {
			border-collapse: collapse;
			width: 100%;
		 }

		#people th, #people td {
			padding: 12px 10px;
			border: 1px solid $ddd;
			padding: ipx;
		 }

		#people th {
			text-align: left;
			background-color: #4caf50;
			color: #fff;
		 }

		#people tr:nth-child(even) {
			background-color: #f2f2f2;
		 }

		#people tr:hover {
			background-color: #ddd;
		 }
	</style>
</head>
<body>
	<table id="people">
		<tr>
			<th>ID</th>
			<th>Name</th>
			<th>Email</th>
			<th></th>
        	</tr>
<?php foreach ($people as $person): 
?>
        	<tr>
			<td name="id"><?=$person['id']?></td>
			<td name="full_name"><?=$person['first_name']. ' '.$person['last_name']?></td>
			<td name="email"><?=$person['email']?></td>
			<td><button class="btn">INfo</button>
        	</tr>
<?php endforeach; ?>
	</table>

	<script type="text/Javascript">
		$(function () {
			$(document).on('click', 'button.btn', function() { 
				let tr = $(this).closest('tr');
				let name = tr.find('td[name="full_name"]')[0].innerText;
				let email = tr.find('td[name="email"]')[0].innerText;
				alert(name +"'s E-mail: " +email);
			});

`		});
	</script>

</body>
</html>
