<html>
	<head>
	<title>admin panel</title>
	</head>
	<body>
		<style>
		 body {
                background-color: 1B2631;
              }
		</style>
		<fieldset>
						<font color="#CACFD2">
						<font face ="Garamond">
                        <p style="font-size:45px;" >
						<span style="margin-left:9em"></span>
						Welcome To Online Voting
						<hr>
						<font color="#1EC0C5">
						<font face ="Garamond">
                        <p style="font-size:30px;" >
						<span style="margin-left:18.5em"></span>
						Admin Control
						<hr>
						<br>
						<a href="{{route('login.home')}}" name=" Voter"   style=" font-size:20px;color:#6BAEDC;margin-left:8em">Home</a>
						<br></br><br></br>
						<table>
							@foreach($candidate as $candidates)
							<tr>
								<th>
								<font color="#1FCB9C">
								<p style="font-size:20px;" >
								<span style="margin-left:8em"></span>
								{{$candidates->Name}}
								<hr>
								</th>
								<th>
								<font color="#1FCB9C">
								<p style="font-size:20px;" >
								<span style="margin-left:8em"></span>
								{{$candidates->email}}
								<hr>
								</th>
								<th>
								<font color="#1FCB9C">
								<p style="font-size:20px;" >
								<span style="margin-left:8em"></span>
								Total vote: {{$candidates->totalvote}}
								<hr>
								</th>
							</tr>
							@endforeach
						</table>
						
		</fieldset>
	</body>
</html>
