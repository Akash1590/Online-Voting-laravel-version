<html>
	<head>
		<title>Vote Style</title>
	</head>
	<body>
		<form method="post">
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
						<span style="margin-left:20em"></span>
						Create Vote
						<hr>
						<br>
						<a href="{{route('admin.voterpanel')}}" name=" Back"   style=" color:#E79013;margin-left:30em">Back</a>
						<br>
						<span style="margin-left:28em"></span>
						Voter ID :
						<input name="voterid"  type="textbox"  style="height:40px; width:250px ; color:#474B4C;margin-left:2.8em"/>
						<br>
						<span style="margin-left:29.8em"></span>
						Title :
						<input name="title"  type="textbox"  style="height:40px; width:250px ; color:#474B4C;margin-left:2.8em"/>
						<br></br>
						<input name="createvote" value=" Create Vote" type="submit"  style="height:40px; width:250px ; background-color:#166503;color:#AEDCA3;margin-left:41.5em"/>
						
						
		</fieldset>
		</form>
		@if($errors->any())
		@foreach($errors->all() as $err)
			<p>{{$err}}</p>
		@endforeach
	@endif
	</body>
</html>