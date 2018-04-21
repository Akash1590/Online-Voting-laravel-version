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
						<span style="margin-left:18em"></span>
						Voting Count Down 
						<hr>
						<br>
						<h3>
						<span style="margin-left:32em"></span>
						{{$vote->votetopic}} </h3>
						<form method='post'>
						@foreach($candidate as $candidate)
						<input style="margin-left:21em;font-size:30px" type="radio" name="candidate" value="{{$candidate->NID}}"> 
						{{$candidate->Name}}<br>
						@endforeach
						<input style="margin-left:32em;font-size:20px" type="submit"  value="Vote">
						
						</form>
		</fieldset>
		</form>
	@if($errors->any())
		@foreach($errors->all() as $err)
			<p>{{$err}}</p>
		@endforeach
	@endif
	</body>
</html>