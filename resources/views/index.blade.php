<!DOCTYPE html>
<html>
<head>
	<title>About Me</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
	<link rel="stylesheet" type="text/css" href="{{asset('css/index.css')}}">
	<script type="text/javascript" src="{{asset('js/index.js')}}"></script>
</head>
<body>
	<div class="container-fluid">
		<div class="row">
			<div class="nav col-sm-3">
				<a class="a active" href="#">HOME</a>
				<a class="b" href="#">ABOUT ME</a>
				<a class="c" href="#">GALLERY</a>
				<a class="d" href="#">CONTACT US</a>
			</div>

			<!-- for home -->
			<div class="content col-sm-9">
				<div class="home">
					<h1>I AM NAY MYO OO</h1>
					<h3>Web Developer</h3>
				</div>
			</div>
			<!-- end home -->

			<!-- for about me -->

			<div class="aboutme col-sm-9">
				<p>
					<b>Hello Friends, </b>
					Welcome to my pages. This is about me. My Name is Nay Myo Oo. I like travelling. I want to be a web developer
				</p>
				<p>
					It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).
				</p>
			</div>

			<!-- end for about me -->

			<!-- for gallery -->
			<div class="gallery col-sm-9">
				<div class="row">
					<div class="img col-sm-3">
						<img src="{{asset('images/bg1.jpg')}}">
					</div>
					<div class="img col-sm-3">
						<img src="{{asset('images/bg1.jpg')}}">
					</div>
					<div class="img col-sm-3">
						<img src="{{asset('images/bg1.jpg')}}">
					</div>
					<div class="img col-sm-3">
						<img src="{{asset('images/bg1.jpg')}}">
					</div>
					<div class="img col-sm-3">
						<img src="{{asset('images/bg1.jpg')}}">
					</div>
					<div class="img col-sm-3">
						<img src="{{asset('images/bg1.jpg')}}">
					</div>
					<div class="img col-sm-3">
						<img src="{{asset('images/bg1.jpg')}}">
					</div>
					<div class="img col-sm-3">
						<img src="{{asset('images/bg1.jpg')}}">
					</div>
				</div>

				<div class="upload">
					<form enctype="multipart/form-data">
						<div class="form-group">
							<label for="file">Upload Photo</label>
							<input type="file" name="file" id="file" class="form-control"><small class="form-text">choose smart photos</small>
						</div>
					</form>
				</div>
			</div>

			<!-- end for gallery -->

			<!-- for contant me -->
				<div class="contact col-sm-9">
					<form>
					  <div class="form-group">
					    <label for="name">First Name</label>
					    <input type="text" class="form-control" id="name" aria-describedby="emailHelp" placeholder="Enter your name" required>
					  </div>
					  <div class="form-group">
					    <label for="email">Email</label>
					    <input type="email" class="form-control" id="email" placeholder="Enter your email">
					  </div>
					  <div class="form-group">
					  	<label for="massage">Massage</label>
					  	<textarea class="form-control" id="massage" cols="4" rows="5">
					  		 
					  	</textarea>
					  </div>
					  <button type="submit" class="btn btn-primary">Submit</button>
					  <button type="reset" class="btn btn-primary" style="margin-left: 40px;">Cancel</button>
					</form>
					
				</div>
			<!-- end for contant me -->


		</div>

		
	</div>

</body>
</html>