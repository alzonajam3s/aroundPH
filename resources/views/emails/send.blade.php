<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title></title>
</head>
<body>
	<h2> aroundPH - You received a new message from {{ $name }}</h2>
	<hr>
	<div>
		<p class="lead">Subject : {{ $subject }}</p>
		<p class="lead">Message</p>
		<p class="lead">{{ $mail_message }}</p>
		<br>
		<p class="lead">From</p>
		<p class="lead">{{ $name }}</p>
		<p class="lead">{{ $email }}</p>
	</div>

</body>
</html>