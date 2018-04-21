<html>
	<head>
		<title>Registration</title>
	</head>
	<body>
		<fieldset>
		<form method='post'>
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
						Registration Control
						<hr>
						<br>
						<span style="margin-left:27em"></span>
			
						Name :
						<input name="name"  type="textbox"  style="height:40px; width:250px ; color:#474B4C;margin-left:4em"/>
						<br>
						<span style="margin-left:27em"></span>
						NID :
						<input name="NID"  type="textbox"  style="height:40px; width:250px ; color:#474B4C;margin-left:4.5em"/>
						
						<br>
						<span style="margin-left:27em"></span>
						Date Of Birth :
						<input name="date" type="date"  style="height:40px; width:250px ; color:#474B4C;margin-left:0.2em"/>
						<br>
						<span style="margin-left:27em"></span>
						Address :
						<input name="Address"  type="textbox"  style="height:40px; width:250px ; color:#474B4C;margin-left:3em"/>
						
						<br>
						<span style="margin-left:27em"></span>
						Phn No. :
						<input name="phoneno" type="textbox"  style="height:40px; width:250px ; color:#474B4C;margin-left:2.8em"/>
						
						<br>
						<span style="margin-left:27em"></span>
						Email :
						<input name="email"  type="email"  style="height:40px; width:250px ; color:#474B4C;margin-left:4em"/>
						
						<br>
						<span style="margin-left:27em"></span>
						Password :
						<input name="Password"  type="password"  style="height:40px; width:250px ; color:#474B4C;margin-left:2.2em"/>
						
						<br></br>
						<input  value=" Submit" type="submit"  style="height:40px; width:250px ; background-color:#03510D;color:#9DD5C5;margin-left:40em"/>
			
			
		</form>

		@if($errors->any())
		@foreach($errors->all() as $err)
			<p>{{$err}}</p>
		@endforeach
	@endif
	</fieldset>
	</body>
</html>