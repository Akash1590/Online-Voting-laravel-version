<html>
	<head>
	<title>Candidate panel</title>
	</head>
	<body>
		<style>
		 body {
                background-color: 1B2631;
              }
		</style>
			
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
						Voter Control
						<hr>
						<br>
						<a href="{{route('candidate.edit', [$user->NID])}}" name=" Update"   style=" font-size:20px;color:#6BAEDC;margin-left:8em">Update</a>						
						<a href="{{route('voter.voterpanel')}}" name=" Current Vote"   style=" font-size:20px;color:#6BAEDC;margin-left:19em">Current Vote</a>					
						<a href="{{route('logout.index')}}" name=" Logout"   style=" font-size:20px;color:#6BAEDC;margin-left:20em">Logout</a>
						<h1> Personal Details </h1>
		<table>
		<tr>
			<td> <font color="#1FCB9C"> NID</td>
			<td> <span style="margin-left:4em"></span>
			<font color="#1FCB9C"> {{$user->NID}}</td>
		</tr>
		<tr>
			<td> <font color="#1FCB9C"> NAME</td>
			<td> <span style="margin-left:4em"></span>
			<font color="#1FCB9C"> {{$user->Name}}</td>
		</tr>
		<tr>
			<td> <font color="#1FCB9C"> Address</td>
			<td> <span style="margin-left:4em"></span>
			<font color="#1FCB9C"> {{$user->Address}}</td>
		</tr>
		<tr>
			<td> <font color="#1FCB9C"> Date Of Birth</td>
			<td> <span style="margin-left:4em"></span>
			<font color="#1FCB9C"> {{$user->Dateofbirth}}</td>
		</tr>
		<tr>
			<td> <font color="#1FCB9C"> Phone NO.</td>
			<td> <span style="margin-left:4em"></span>
			<font color="#1FCB9C"> {{$user->Phoneno}}</td>
		</tr>
		<tr>
			<td> <font color="#1FCB9C"> Email</td>
			<td> <span style="margin-left:4em"></span>
			<font color="#1FCB9C"> {{$user->email}}</td>
		</tr>
	</table>
						
		
	</body>
</html>