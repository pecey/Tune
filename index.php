<!DOCTYPE html>
<html>
<head>
	<title>Tune - Your Premium Music Destination</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css/custom.css">
	<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
	<link href='http://fonts.googleapis.com/css?family=Montserrat' rel='stylesheet' type='text/css'>
	<link href='http://fonts.googleapis.com/css?family=Lato' rel='stylesheet' type='text/css'>
	<script type="text/javascript" src="js/jquery-1.11.3.min.js"></script>
	<script type="text/javascript" src="js/bootstrap.min.js"></script>
</head>
<body>
	<div id="fake" style="width:100%; height:80px; background-color: black;"></div>
	<nav class="navbar">
		<div class="container-fluid">
			<div class="navbar-header">
				<a class="navbar-brand" href="#">
					<img src="images/logo.png" height="50px" width="50px" style="display: inline">
					<h1 style="font-family: 'Montserrat', sans-serif; display:inline; color: #23527c">tune <small>BETA</small></h1>
				</a>
			</div>

			<div class="navbar-collapse collapse">
				<form class="navbar-form navbar-right" style="padding-top: 10px">
					<div class="form-group">
						<input type="text" autofocus placeholder="Email Address (johndoe@example.com)" class="form-control">
					</div>
					<button type="submit" class="btn btn-default" id="play">Play</button>
				</form>
				<ul class="nav navbar-nav navbar-right navbar-ul">
					<li><a href="#about" id="about-link">ABOUT US</a></li>
					<li><a href="#pricing" id="pricing-link">PRICING</a></li>
					<li><a href="#contact" id="contact-link">CONTACT</a></li>
					<li><a href="#team" id="team-link">TEAM</a></li>
				</ul>
				
			</div>
		</div>
			
	</nav>
	<div class="landing slide">
		<div class="landing-img">
			<img src="images/3.jpg" height="500px" width="700px">
		</div>
		<button type="button" id="up-slider" class="btn btn-default round-button" style="position: absolute; bottom: 20px; left: 48%">
			<i class="fa fa-lg fa-angle-down"></i>
		</button>
	</div>
	<div class="about slide" id="about">
		<div class="container">
			<div class="slide-header">ABOUT US</div>
			<div class="slide-body">
			<p class="lead" style="text-align: center">tune aims to bring quality music into your lives.</p>
			<hr>
			<br>
			<div class="row">
				<div class="col-md-3 thumb">
					<img src="images/anywhere.jpg" height="200px">
				</div>
				<div class="col-md-3 thumb">
					<img src="images/unlimited.jpg" height="200px">
				</div>
				<div class="col-md-3 thumb">
					<img src="images/premium.jpg" height="200px">
				</div>
				<div class="col-md-3 thumb">
					<img src="images/simple.jpg" height="200px">
				</div>
			</div>
			<div class="row">
				<div class="col-md-3">
					<p style="text-align: center; font-size: 20px">anywhere.</p>
				</div>
				<div class="col-md-3">
					<p style="text-align: center; font-size: 20px">ad-free.</p>
				</div>
				<div class="col-md-3">
					<p style="text-align: center; font-size: 20px">premium.</p>
				</div>
				<div class="col-md-3">
					<p style="text-align: center; font-size: 20px">simple.</p>
				</div>
			</div>
			</div>
		</div>
	</div>
	<div class="slide image-slide">
		<img src="images/purchase.jpg" width="100%">
	</div>
	<div class="pricing slide" id="pricing">
		<div class="container">
			<div class="slide-header">PRICING</div>
			<div class="slide-body">
			<p class="lead" style="text-align: center">simplified payment options, so you can focus on your music</p>
			<hr>
			<br>
			<div class="row custom-row">
				<div class="col-md-4" style="text-align: center; font-size: 26px;">
					individual purchase
				</div>
				<div class="col-md-4 col-md-offset-4" style="text-align: center; font-size: 26px;">
					membership
				</div>
			</div>
			<div class="row custom-row">
				<div class="col-md-4" style="text-align: center; font-size: 20px;">
					buy albums individually
				</div>
				<div class="col-md-4 col-md-offset-4" style="text-align: center; font-size: 20px;">
					become a premium account holder
				</div>
			</div>
			<div class="row custom-row">
				<div class="col-md-4" style="text-align: center; font-size: 20px;">
					prices from ₹99 to ₹2499
				</div>
				<div class="col-md-4 col-md-offset-4" style="text-align: center; font-size: 20px;">
					annual membership for ₹4999 only
				</div>
			</div>
			</div>
		</div>
	</div>
	<div class="slide image-slide">
		<img src="images/contact.jpg" width="100%">
	</div>
	<div class="contact slide" id="contact">
		<div class="container">
			<div class="slide-header">GET IN TOUCH</div>
			<div class="slide-body" style="text-align: center">
			<p class="lead" style="text-align: center">let us know what you think</p>
			<hr>
			<br>
			<div style="width: 60%; display:inline-block">
			<form>
				<div class="form-group">
					<input class="form-control" placeholder="Your name, please." type="text">
				</div>
				<div class="form-group">
					<input class="form-control" placeholder="And your email address." type="text">
				</div>
				<div class="form-group">
					<textarea class="form-control" rows="3" placeholder="So what do you think? Feel free to criticize, if you feel like."></textarea>
				</div>
				<button type="submit" class="btn btn-default">Submit</button>
			</form>
			</div>
			<div style="width: 30%; display:inline-block; padding: 0px 50px;">
				<iframe width="300" height="200"  style="border:1px solid rgba(81, 76, 76, 0.26)"  src="https://www.google.com/maps/embed/v1/place?key=AIzaSyD7I0zl-Rfn80eevI_Zq9Bbb6PDUqXAdb4&q=Techno+India+Salt+Lake+Kolkata+India"></iframe>
			</div>
			</div>
		</div>
	</div>
	<div class="slide image-slide">
		<img src="images/knowtheteam.jpg" width="100%">
	</div>
	<div class="team slide" id="team">
		<div class="container">
			<div class="slide-header">MEET THE TEAM</div>
			<div class="slide-body">
			<p class="lead" style="text-align: center">the guys behind tune. join us for a coffee sometime.</p>
			<hr>
			<br>
			<div class="row">
				<div class="col-md-3 thumb round-thumb">
					<img src="images/user.png" height="200px">
				</div>
				<div class="col-md-3 thumb round-thumb">
					<img src="images/user.png" height="200px">
				</div>
				<div class="col-md-3 thumb round-thumb">
					<img src="images/user.png" height="200px">
				</div>
				<div class="col-md-3 thumb round-thumb">
					<img src="images/user.png" height="200px">
				</div>
			</div>
			<div class="row">
				<div class="col-md-3 thumb">
					<p style="text-align: center; font-size: 20px">john doe.</p>
				</div>
				<div class="col-md-3 thumb">
					<p style="text-align: center; font-size: 20px">john doe.</p>
				</div>
				<div class="col-md-3 thumb">
					<p style="text-align: center; font-size: 20px">john doe.</p>
				</div>
				<div class="col-md-3 thumb">
					<p style="text-align: center; font-size: 20px">john doe.</p>
				</div>
			</div>
			</div>
		</div>
	</div>
	<footer>
		<p style="text-align: center">&copy; tune Inc. 2015. All rights reserved.</p>
	</footer>
	<script type="text/javascript">
	var page=$('html,body');
	$("#about-link").click(function(){
		page.animate({scrollTop:710}, '500', 'swing', function(){
			return false;
		});
	});

	$("#pricing-link").click(function(){
		page.animate({scrollTop:2010}, '500', 'swing', function(){
			return false;
		});
	});
	$("#contact-link").click(function(){
		page.animate({scrollTop:3310}, '500', 'swing', function(){
			return false;
		});
	});
	$("#team-link").click(function(){
		page.animate({scrollTop:4610}, '500', 'swing', function(){
			return false;
		});
	});
	$(".navbar-brand").click(function(){
		page.animate({scrollTop:0}, '500', 'swing', function(){
			return false;
		});
	});
	$("#up-slider").click(function(){
		page.animate({scrollTop:710}, '600', 'linear', function(){
			return false;
		});
	});
	(function(){
		setInterval(function(){
			if($(window).scrollTop()>200){
				$(".navbar").css('background', 'rgba(239, 235, 235, 0.88)');
				
			}
			else{
				$(".navbar").css('background', 'white');
				
			}
		});
	})();
  

	</script>



	<!--Modal-->

<div id="tuneModal" class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel">
  <div class="modal-dialog modal-lg">
    <div class="modal-content container-fluid custom-modal">
     	<div id="registrationForm" class="invisible">
     		<div style="font-size:28px;">let's get you registered</div>
     		<hr>
     			<form id="registration-form">
		<div class="form-group">
			<label>Your email address.</label>
			<p class="form-control-static" id="tbEmail">john.doe@example.com</p>
		</div>
		<div class="form-group">
			<label>Your name, please</label>
			<input class="form-control" placeholder="John Doe" type="text" id="tbName">
		</div>
		
		<div class="form-group">
			<label>Please enter a strong password</label>
			<input class="form-control" placeholder="Password must be atleast 6 chars in length" type="text" id="tbPassword">
		</div>
		<div class="form-group">
			<label>Please enter the password again to confirm</label>
			<input class="form-control" placeholder="Password must be atleast 6 chars in length" type="text" id="tbConfirmPassword">
		</div>
		<div class="form-group">
			<label>Your mobile number, please. We won't spam you, we promise.</label>
			<input class="form-control" placeholder="10 digits only." type="text" id="tbMobile">
		</div>
		<div class="form-group">
			<label>Sex</label><br>
			<input type="radio" id="rbSexF" value="F" name="sex">&nbsp;Female<br>
			<input type="radio" id="rbSexM" value="M" name="sex">&nbsp;Male<br>
			<input type="radio" id="rbSexO" value="O" name="sex">&nbsp;Others
		</div>
		<div class="form-group">
			<label>Choose a picture for your profile.</label>
			<input type="file" id="fuProfilePicture">
		</div>
		<div class="checkbox">
			<label>
				<input type="checkbox" name="terms">I have read the terms and conditions, and I agree to them.
			</label>
		</div>
		<button type="submit" class="btn btn-default" id="btnSubmit">Submit</button>
	</form>
     	</div>
     	<div id="loginForm">
     		<h1 style="text-align: center">Welcome back</h1>
     		<hr>
     		<div class="user-card">
	     		<div style="text-align: center">
	     			<img src="images/user.png" class="user-image">
	     		</div>
	     		<h2 style="text-align: center">Varun Hisaria</h2>
	     		<h3 style="text-align: center">Please enter your password to continue.</h3>
	     		<div class="form-group">
					<input class="form-control" placeholder="Password, please." type="password" id="tbLoginPassword">
				</div>
			</div>
     	</div>
    </div>
  </div>
</div>

<script>
$("#play").click(function(e){
	e.preventDefault();
	$("#tuneModal").modal({
		backdrop: 'static',
		show:'true',
		keyboard: 'true'
	});
});

var errors=[];
        
$("#btnLogin").click(function(e){
    e.preventDefault();
    var email_id = $("#tbEmail").val();
    var json = [{ email: email_id }];
    console.log(JSON.stringify(json[0]));
    $.ajax({
        url: "Default.aspx/EmailExists",
        type: "POST",
        data: JSON.stringify(json[0]),
        contentType: "application/json; charset=utf-8",
        dataType: "json",
        success:function(result){
               console.log(result);
                },
        error:function(xhr, desc, err){
                console.log(desc);
                 console.log(err);
                }
            });
        });

$("#btnSubmit").click(function(e){
	e.preventDefault();
	var email_id=$("#tbEmail").val();
	var password = $("#tbPassword").val();
	var name = $("#tbName").val();
	var mobile = $("#tbMobile").val();
	var sex = $("input[name='gender']:checked").val();
	var terms = 1;
	var json = [{UserName: name, Email: email_id, UserPassword: password, Mobile: mobile, Gender: sex, Verfied: 0, Agreement: terms}];
	console.log(JSON.stringify(json[0]));
	
	$.ajax({
		url: "Default.aspx/RegisterUser",
		type: "POST",
		data: JSON.stringify(json[0]),
		contentType: "application/json; charset=utf-8",
        dataType: "json",
        success:function(result){
               console.log(result);
                },
        error:function(xhr, desc, err){
                console.log(desc);
                 console.log(err);
                }
	});
});
    
</script>
</body>
</html>