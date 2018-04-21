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
						Currently Winner list
						<hr>
						<br>
						<a href="{{route('login.home')}}" name=" Voter"   style=" font-size:20px;color:#6BAEDC;margin-left:8em">Back</a>
						<br></br><br></br>
						<table>
							@foreach($candidate as $candidate)
							<tr>
								<th>
								<font color="#1FCB9C">
								<p style="font-size:20px;" >
								<span style="margin-left:6em"></span>
								{{$candidate->Name}}
								<hr>
								</th>
								<th>
								<font color="#1FCB9C">
								<p style="font-size:20px;" >
								<span style="margin-left:8em"></span>

								{{(($candidate->totalvote)/($candidate->totalvotes))*100}}%
								<hr>
								</th>
								
							</tr>
							@endforeach
						</table>
						
		</fieldset>
	</body>
</html>
