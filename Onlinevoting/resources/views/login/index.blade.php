<html>
	<head>
	<title>Online Voting</title>
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
						<form method='POST'>
							<p>
								<input name="NID" value="NID"  style="height:40px; width:250px ;margin-left:40em"/>
								<input name="Password" value="PASSWORD" type='Password'  style="height:40px; width:250px ;margin-left:40em"/>
								<input name="Login" value="Login" type="submit" style="height:40px; width:250px ;margin-left:40em; background-color:#6BAEDC"/>
								</br>
							</p>
							<div style="height:40px; width:250px ;margin-left:33.5em"> {{session('message')}} </div>
						</form>
						<p style="height:40px; width:250px ;margin-left:33.5em">
						Don't Have Account?
						<a href="{{route('register.index')}}" name="SIGNUP"   style=" background-color:#6BAEDC">Register Now!!!</a>
						</p>
						<font color="#29DFB6"/>
						<font face ="Garamond"/>
						 <p style="font-size:40px;margin-left:3em;">
						 The fastest, easiest way to run 
						
						<br>
						an election for your organization
						</p>
						
						<font color="#29C1DF"/>
						<font face ="Garamond"/>
						 <p style="font-size:25px;margin-left:4.7em;">
						Election Runner makes it easy to build and manage association <br>
						elections. Voters can vote from any location, on any device.</p>
						<ul>
												
						<font color="#97CED9"/>
						<font face ="Garamond"/>
						<h3>
						<li>
						<span style="margin-left:4.5em"></span>
						Increase member election participation 
						</li>
						</h3>
						<h3>
						<li>
						<span style="margin-left:4.5em"></span>
						Customize with your organization's colors & branding
						</li>
						</h3>
						<h3>
						<li>
						<span style="margin-left:4.5em"></span>
						Voters can only vote once with their unique Voter ID & Key
						</li>
						</h3>
						<h3>
						<li>
						<span style="margin-left:4.5em"></span>
						Use your member's email addresses for quick & easy voting
						</li>
						</h3>
						</ul>
						
						
					</font>
		</fieldset>
	</body>
</html>