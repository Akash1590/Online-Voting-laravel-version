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
						<a href="{{route('login.home')}}" name=" Voter"   style=" font-size:20px;color:#6BAEDC;margin-left:8em">Back</a>
						<a href="{{route('admin.createvoteui')}}" name="Voter"   style=" font-size:20px;color:#6BAEDC;margin-left:8em">Add new vote</a>
						<br></br><br></br>
						<table>
							@foreach($vote as $votes)
							<tr>
								<th>
								<font color="#1FCB9C">
								<p style="font-size:20px;" >
								<span style="margin-right:2em"></span>
								{{$votes->Voteid}}
								<hr>
								</th>
								<th>
								<font color="#1FCB9C">
								<p style="font-size:20px;" >
								<span style="margin-right:16em"></span>

								{{$votes->votetopic}}
								<hr>
								</th>
								<th>
								<font color="#1FCB9C">
								<p style="font-size:20px;" >
								<span style="margin-left:6em"></span>
								<a href="{{route('admin.showallcandidate', [$votes->Voteid])}}" name=" Voter"   style=" font-size:20px;color:#6BAEDC;">See Candidates</a>
								<hr>
								</th>
								<th>
								<font color="#1FCB9C">
								<p style="font-size:20px;" >
								<span style="margin-left:4em"></span>
								<?php if($votes->votestatus=='not started'){?>
								<a href="{{route('admin.startvote', [$votes->Voteid])}}" name=" Voter"   style=" font-size:20px;color:#6BAEDC;">Start</a>
								<?php }
								else {?>
								<a href="{{route('admin.endvote', [$votes->Voteid])}}" name=" Voter"   style=" font-size:20px;color:#6BAEDC;">End</a>

								<?php } ?>
								<hr>
								</th>
								<th>
								<font color="#1FCB9C">
								<p style="font-size:20px;" >
								<span style="margin-left:4em"></span>
								<?php if($votes->votestatus=='not started'){?>
								Vote Now <?php }
								else { ?>
								<a href="{{route('votenowcreate', [$votes->Voteid])}}" name=" Voter"   style=" font-size:20px;color:#6BAEDC;">Vote Now </a>
								<?php } ?>
								<hr>
								</th>
								<th>
								<font color="#1FCB9C">
								<p style="font-size:20px;" >
								<span style="margin-left:4em"></span>
								<a href="{{route('admin.generateresult', [$votes->Voteid])}}" name=" Voter"   style=" font-size:20px;color:#6BAEDC;">Result</a>
								<hr>
								</th>
							</tr>
							@endforeach
						</table>
						
		</fieldset>
	</body>
</html>
