<html>
<head>
	<title>tickt pyrchase confirm</title>
	<link href="{{asset('css/tableStyle.css')}}" rel="stylesheet">
</head>
<body>

	<h1>Ticket has been purchased. Please print your ticket to enter the concert</h1>

	<table>

		<tr>
			<h2><td><a href = "{{ route('ticket.print',$mob) }}"> Print </a><td></h2>
		</tr>

	</table>

</body>
</html>
