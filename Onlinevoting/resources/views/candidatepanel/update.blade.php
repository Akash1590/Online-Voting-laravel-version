<html>
	<head>
		<title>Update Information</title>
	</head>
	<body>
		<form method='post'>
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
						<span style="margin-left:18em"></span>
						Update Information
						<hr>
						<br>
						<a href="{{route('login.home')}}" name=" Voter"   style=" font-size:20px;color:#6BAEDC;margin-left:8em">Home</a>
						<br>
						<br>
						
						<span style="margin-left:27em"></span>
						NID:
						<input name="NID"  type="textbox" value="{{$user->NID}}"  readonly="true" style="height:40px; width:250px ; color:#474B4C;margin-left:4.8em"/>
						<br>

						<span style="margin-left:27em"></span>
						Address :
						<input name="Address"  type="textbox" value="{{$user->Address}}"  style="height:40px; width:250px ; color:#474B4C;margin-left:3em"/>
						
						<br>
						<span style="margin-left:27em"></span>
						Phn No. :
						<input name="phnNo"  type="textbox" value="{{$user->Phoneno}}" style="height:40px; width:250px ; color:#474B4C;margin-left:2.8em"/>
						
						<br>
						<span style="margin-left:27em"></span>
						Email :
						<input name="Email"  type="email"  value="{{$user->email}}" style="height:40px; width:250px ; color:#474B4C;margin-left:4em"/>
						
						<br>
						<span style="margin-left:27em"></span>
						Password :
						<input name="Password"  type="password"  style="height:40px; width:250px ; color:#474B4C;margin-left:2.2em"/>
						
						<br></br>
						<input name="Submit" value=" Update" type="submit"  style="height:40px; width:250px ; background-color:#03510D;color:#9DD5C5;margin-left:40em"/>
						
			
			</fieldset>
		</form>
		@if($errors->any())
		@foreach($errors->all() as $err)
			<p>{{$err}}</p>
		@endforeach
	@endif
	</body>
</html>