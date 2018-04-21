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
						<a href="{{route('admin.showallvoter')}}" name=" Voter"   style=" font-size:20px;color:#6BAEDC;margin-left:8em">Voter</a>
						<a href="{{route('admin.showallparticipant')}}" name=" Participant"   style=" font-size:20px;color:#6BAEDC;margin-left:8em">Participant</a>
						<a href="{{route('admin.voterpanel')}}" name=" Current Vote"   style=" font-size:20px;color:#6BAEDC;margin-left:8em">Current Vote</a>
						<a href="{{route('admin.showalladmin')}}" name=" Admin"   style=" font-size:20px;color:#6BAEDC;margin-left:8em">Admin</a>
						<a href="{{route('admin.showallapproval')}}" name=" Admin"   style=" font-size:20px;color:#6BAEDC;margin-left:8em">Approval list</a>
						<a href="{{route('logout.index')}}" name=" Logout"   style=" font-size:20px;color:#6BAEDC;margin-left:8em">Logout</a>
						<br></br><br></br>
						
		</fieldset>
	</body>
</html>