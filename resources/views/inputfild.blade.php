<!DOCTYPE html>
<html>
<head>
	<title>Input Fild check Fro Post Method</title>
</head>
<body>


	<form action="/Update" method="POST">

		@csrf
		@method('PUT')

		<input type="text" name="name">
		<input type="submit" value="Submit">
		
	</form>

</body>
</html>