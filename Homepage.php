<head>

	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<title>BMW - International Corporate Website</title>
    <link rel="icon" href="Images/logo.png">
	<link rel="stylesheet" type="text/css" href="style.css">
	<link rel="stylesheet" type="text/css" href="CSS/login.css">
	<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>


</head>
<!--<body style="background-image: url(Images/bodyimage1.jpg); background-size: 2000px auto;">-->
<body>
<div id="preloader" class="preloader">

</div>
<div class="resheader">
	<nav id="headus">
		<a id="resopen" href="#" onclick="resme()">☰</a>
		<ul id="resme" class="resmenu">
			<li>
				<a class="resmenulinks" href="#">Home</a>

			</li>
			<li>
				<a class="resmenulinks" href="#">Vehicles</a>
			</li>
			<li>
				<a class="resmenulinks" href="#">InsideBMW</a>
			</li>
			<li>
				<a class="resmenulinks" href="#">Innovations</a>
			</li>
			<li>
				<a class="resmenulinks" href="#">About</a>
			</li>
		</ul>
	</nav>
</div>
<header>
	<div class="wrapper">
    <a href="Homepage.html" id="bmw">
      <h1>
        <span class="b">B</span>
        <span class="m">M</span>
        <span class="w">W</span>
      </h1>
      <div class="logo1">
        <div class="blue"></div>
        <div class="white"></div>
      </div>
    </a>
		<!--<div class="search">
			<input class="searchbox" type="text" name="search" placeholder="Search..." />
		</div>
		-->
		<div class="wrapper">
		<ul class="menu">
        <li class="home"><a class="active" id="link0" href="Homepage.html">Home</a></li>
        <li class="link">
        	<a id="link1" href="HTML/Vehicles.html">
        		Vehicles
        	</a>
        	<div class="dropdown uno">
        		<ul class="dropinside">
					<li class="d one">
						<div id="picture1" class="thumb">
							<a id="yo1" href="HTML\Contents\01.BMW_3_series.html" class="more">
								Read More...
							</a>
						</div>
						<span class="textup">
							BMW 3 Series
						</span>
					</li>
					<li class="d two">
						<div id="picture2" class="thumb">
							<a href="HTML\Contents\02.BMW_4_series.html" class="more">
								Read More...
							</a>
						</div>
						<span class="textup">
							BMW 4 Series
						</span>
					</li>
					<li class="d three">
						<div id="picture3" class="thumb">
							<a href="HTML\Contents\03.BMW_5_series.html" class="more">
								Read More...
							</a>
						</div>
						<span class="textup">
							BMW 5 Series
						</span>
					</li>
					<li class="d four">
						<div id="picture4" class="thumb">
							<a href="HTML\Contents\04.BMW_7_series.html" class="more">
								Read More...
							</a>
						</div>
						<span class="textup">
							BMW 7 Series
						</span>
					</li>
				</ul>
        	</div>
        </li>
        <li class="link">
        	<a id="link2" href="HTML/InsideBMW.html">
        		Inside BMW
        	</a>
        	<div class="dropdown dos">

        		<ul class="dropinside" style="height: 280px;">

				<li class="a one thumbwidth" style="width:49%; height: 100%;  margin:5px; box-shadow: 0px 0px 24px 0px rgba(0,0,0,0.75);">
					<div id="picture5" class="thumb">
						<a id="yo1" href="HTML\Contents\05.inside1.html" class="more">
							Read More...
						</a>
					</div>
					<span class="text" style="color: black;">
						Performace Driving School
					</span>
				</li>
				<li class="a two thumbwidth" style="width:49%; height: 100%; margin:5px; box-shadow: 0px 0px 24px 0px rgba(0,0,0,0.75);">
					<div id="picture6" class="thumb">
						<a href="HTML\Contents\06.inside2.html" class="more">
							Read More...
						</a>
					</div>
					<span class="text" style="color: black;">
						BMW Motorsport
					</span>
				</li>

				</ul>

        	</div>
        </li>
        <li class="link">
        	<a id="link3" href="HTML/Innovation.html">
        		Innovation
        	</a>
        	<div class="dropdown tres">
        	<ul class="dropinside" style="height: 320px; width: 700px; margin: auto;">

				<li class="a one thumbwidth" style="width:100%; height: 100%;  margin:5px; box-shadow: 0px 0px 24px 0px rgba(0,0,0,0.75);">
					<div id="pictureinno" class="thumb">
						<a id="yo1" href="HTML/Innovation.html" class="more">
							Read More...
						</a>
					</div>
					<span class="text" style="color: black;">
						BMW Innovations
					</span>
				</li>

				</ul>
        	</div>
        </li>
        <li class="link">
        	<a id="link4" href="HTML/About.html">
        		About
        	</a>
        	<div class="dropdown quatro">
        	<ul class="dropinside" style="height: 320px; width: 700px; margin: auto;">

				<li class="a one thumbwidth" style="width:100%; height: 100%;  margin:5px; box-shadow: 0px 0px 24px 0px rgba(0,0,0,0.75);">
					<div id="pictureinno2" class="thumb">
						<a id="yo1" href="HTML/About.html" class="more">
							Read More...
						</a>
					</div>
					<span class="text" style="color: black;">
						BMW Group - Company
					</span>
				</li>

				</ul>
        	</div>
        </li>
		</ul>
		</div>

</header>
<main>
<div class="comedown">
	<div class="wrapper">
		<div class="slideshow">
			<div id="slides">
    			<img class="slide showing" src="Images/pic01.jpg">
    			<img class="slide" src="Images/pic02.jpg">
    			<img class="slide" src="Images/pic03.jpeg">
    			<div class="Zbutton">
    				<button class="controls" id="previous"><i class="fa fa-angle-left" aria-hidden="true"></i></button>
					<button class="controls" id="next"><i class="fa fa-angle-right" aria-hidden="true"></i></button>
    			</div>
			</div>
		</div>
	</div>


</div>

<section class="wrapper">

	<ul class="articles">
	<hr style="width: 40%; float: left; opacity: 0.4; margin-top: 35px;">
	<span class="vheading1">Vehicles</span>
	<hr style="width: 40%; float: right; opacity: 0.4; margin-top: 35px;">
	<br>
		<li class="a one">
			<div id="picture1" class="thumb">
				<a id="yo1" href="HTML\Contents\01.BMW_3_series.html" class="more">
					Read More...
				</a>
			</div>
			<span class="text">
				BMW 3 Series Sedan
			</span>
		</li>
		<li class="a two">
			<div id="picture2" class="thumb">
				<a href="HTML\Contents\02.BMW_4_series.html" class="more">
					Read More...
				</a>
			</div>
			<span class="text">
				BMW 4 Series Sedan
			</span>
		</li>
		<li class="a three">
			<div id="picture3" class="thumb">
				<a href="HTML\Contents\03.BMW_5_series.html" class="more">
					Read More...
				</a>
				</div>
				<span class="text">
				BMW 5 Series Sedan
			</span>

		</li>
		<li class="a four">
			<div id="picture4" class="thumb">
				<a href="HTML\Contents\04.BMW_7_series.html" class="more">
					Read More...
				</a>
			</div>
				<span class="text">
				BMW 7 Series Sedan
			</span>

		</li>
	</ul>

	<ul class="articles1">
	<hr style="width: 35%; float: left; opacity: 0.4; margin-top: 35px;">
	<span class="vheading2">Inside BMW</span>
	<hr style="width: 35%; float: right; opacity: 0.4; margin-top: 35px;">
	<br>
		<li class="a one thumbwidth">
			<div id="picture5" class="thumb">
				<a id="yo1" href="HTML\Contents\05.inside1.html" class="more">
					Read More...
				</a>
			</div>
			<span class="text">
				Performace Driving School
			</span>
		</li>
		<li class="a two thumbwidth">
			<div id="picture6" class="thumb">
				<a href="HTML\Contents\06.inside2.html" class="more">
					Read More...
				</a>
			</div>
			<span class="text">
				BMW Motorsport
			</span>
		</li>

	</ul>

	<script src="jquery.js"></script>
</section>
</div>

<form name="contactform" onsubmit="return Checking()" method="post">
	<center>
	<div id="mypopupbackgroundcontact">
		<div id="providercontact">
		<h2 style="position: absolute; width: 90px; left: 40%; ">Contact</h2>
		<span id="closecontact" style="position: absolute; left: 92%; top: 3%; width: 30px; height: 50px;">×</span>
		<input ID="Name" type="text" name="first_name" placeholder="Enter First Name..." style="position: absolute; top: 60px; left: 13%; height: 20px; width: 180px;"  onblur="this.style.background='white'"/>
		<input type="text" name="last_name" placeholder="Enter Last Name..."  style="position:absolute; height: 20px; top: 60px; left: 55%; width: 180px;" onblur="this.style.background='white'"/> <br><br>
		<input type="text" name="ID" placeholder="Enter ID Number..."  style="position: absolute; top: 100px; left: 13%; height: 20px; width:180px;" onblur="this.style.background='white'" onkeyup="if(this.value.length>=11) this.form.Birthdate.focus()" />&nbsp;&nbsp;
			<p style="position: absolute; left: 47%; top: 85px;">Birth:</p>
		<input type="date" name="Birthdate" placeholder="Enter Birthdate..."  style="position:absolute; top: 100px; left: 55%; width: 180px; height: 20px;"/><br><br>
		<input type="radio" name="subject" value="maths" onclick="handle(this.value);" style="position: absolute; left: 13%; top: 136px;" /> <p style="position: absolute; left: 17%; top: 120px;">Male</p>
		<input type="radio" name="subject" value="physics" onclick="handle(this.value);" style="position: absolute; left: 24%; top: 136px;"/> <p style="position: absolute; left: 28%; top: 120px;">Female</p>
		<input type="radio" name="subject" value="other" onclick="handle(this.value);" style="position: absolute; left: 43%; top: 136px;"/> <p style="position: absolute; left: 47%; top: 120px;">Other</p>
		<input type="text" name="txt" style="position: absolute; left: 55%; width: 180px; top: 136px;" />
			<br><br>
		<input type="password" name="pass" placeholder="Enter Password..."  style="height: 20px; position: absolute; width: 180px; left: 13%; top: 170px;" />
		<input type="password" name="rpass" placeholder="Reenter Password..."  style="height: 20px; position: absolute; width: 180px; left: 55%; top: 170px;"/><br><br>&nbsp;
		<select name="sel" style="position: absolute; width: 180px; left: 13%; top: 210px;">
		<option value=""> ------------------------ </option>
		<option value="Certificate"> Certificate </option>
		<option value="CV"> CV </option>
		<option value="Photo 3x4"> Image </option>
		<option value="ID Card"> ID Card </option>
		<option value="Driving Licence"> Driving Licence </option>
		</select>
		<input type="file" name="fileupload" style="position: absolute; width: 180px; left: 55%; top: 210px;"/><br><br>
		<p><textarea name="textarea1" rows="5" cols="48" placeholder="Enter some information about you..." style="position: absolute; left: 17%; height: 40px; top: 250px;"></textarea></p>
		<br><br>
		<p style="position: absolute; left: 20%; top: 280px;" >Contact me with: </p>
		<input type="checkbox" name="maths" value="on" style="position: absolute; left: 45%; top: 295px;"> <p style="position: absolute; left: 50%; top: 280px;">Email</p>
		<input type="checkbox" name="physics" value="on" style="position: absolute; left: 60%; top: 295px;"> <p style="position: absolute; left: 65%; top: 280px;">Phone</p><br><br>
		<input type="reset" value="Reset" style="position: absolute; left: 55%; top: 330px;"/>
		<input type="submit" value="Submit" style="position: absolute; left: 35%; top: 330px;" />
	</div>
	</div>
    </center>
</form>
<div id="mypopupbackgroundcompany">
	<div id="providercompany">
		<h2 style="position: absolute; width: auto; left: 30%; ">Company Information</h2>
		<span id="closecompany" style="position: absolute; left: 92%; top: 3%; width: 30px; height: 50px;">×</span>
		<img src="Images/bmwcompany.jpg" style="position: absolute; width: 538px; height: 80px;  top: 40px; ">
		<span style="position: absolute; top: 150px; font-family: arial; left: 10px;">
			BMW of North America, LLC (BMW NA) was established in 1975 as the United States importer of BMW luxury/performance vehicles. BMW of North America assumed import and distribution responsibilities for BMW motorcycles in 1980. BMW of North America also began to distribute light trucks in 1999. BMW of North America's Corporate Headquarters is located in Woodcliff Lake, New Jersey. Its Eastern Regional Headquarters and Technical Training Center is located in Woodcliff Lake, New Jersey. A Vehicle Preparation Center is in Port Jersey, NJ and a Regional Distribution Center is in Nazareth, PA.
		</span>
		<span style="position: absolute; top: 330px; font-family: arial; left: 10px;">
			BMW of North America, LLC
			300 Chestnut Ridge Road
			Woodcliff Lake, NJ 07675
			Call 1-800-831-1117 for Customer Relations
		</span>
	</div>
</div>

<div id="sypopupbackgroundhello">
	<div id="providerhello">
		<span id="closehello" style="position: absolute; left: 92%; top: 3%; width: 30px; height: 50px;">×</span>
		<div class="videoPlayer">
				<video id="video" controls><source src="Videos/BMW7.mp4"></video>
		</div>
	</div>
</div>





</main>

<footer>
	<div class="wrapper">
		<div class="firstline">
			<p style="color: white">BMW on Social Media: </p>
			<div class="slogos">
				<a href="www.facebook.com" class="facebooklogo" target="_blank"><i class="fa fa-facebook-square" aria-hidden="true"></i></a>
				<a href="www.google.com" class="googlelogo" target="_blank"><i class="fa fa-google-plus" aria-hidden="true"></i></i></a>
				<a href="www.twitter.com" class="twitterlogo" target="_blank"><i class="fa fa-twitter" aria-hidden="true"></i></i></a>
				<a href="www.youtube.com" class="youtubelogo" target="_blank"><i class="fa fa-youtube-play" aria-hidden="true"></i></a>
				<a href="www.instagram.com" class="instagramlogo" target="_blank"><i class="fa fa-instagram" aria-hidden="true"></i></a>
				<a href="www.linkedin.com" class="linkedinlogo" target="_blank"><i class="fa fa-linkedin-square" aria-hidden="true"></i></a>
				<a href="www.vine.com" class="vinelogo" target="_blank"><i class="fa fa-vine" aria-hidden="true"></i></a>
				</div>
				<a class="footermenu providerbtn" style="cursor: pointer; " onclick="popupfunctioncontact()">Contact</a>
				<a class="footermenu providerbtn" style="cursor: pointer; " onclick="popupfunctioncompanyinfo()">Company Information
				</a>
		</div>
	</div>
</footer>

<script src="bmw.js"></script>


</body>
