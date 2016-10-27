<!DOCTYPE html>
<html>
<head>
	<title>News Report</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css/custom.css">
	<link href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
	<!-- <link href="css/font-awesome.min.css" rel="stylesheet"> -->
	<script type="text/javascript" src="js/jquery.min.js"></script>
	<script type="text/javascript" src="js/bootstrap.js"></script>
</head>
<body>
<header class="head">
  <nav class="navbar navbar-default navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">

          <a class="navbar-brand" href="#" style="color:white;">Logo Name</a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
          <ul class="nav navbar-nav">
            <li><a href="#">Home</a></li>
            <li><a href="#about">About</a></li>
            <li><a href="#">Share Knowledge</a></li>
            <li><a href="#contact">Contact</a></li>
            
          </ul>
          <ul class="nav navbar-nav navbar-right">
            <li><a href="../navbar/"><strong>Subscribe</strong></a></li>
            <li><a href="../navbar-static-top/"><i class="fa fa-envelope-o" aria-hidden="true"></i></a></li>
            <li><a href="./"><i class="fa fa-search" aria-hidden="true"></i></a></li>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </nav>
</header>
<section class="topad"><!-- ad start -->
	<div class="container">
		<div class="row">
			<div class="col-xs-12 text-center">
				<!-- <p>ads space......</p> -->
				<img src="images/verticalad.jpg">
			</div>
		</div>
	</div>
</section><!-- ad end -->
<section class="topad">
  <div class="container bgcolorwhite">
    <h3>Share Your Knowledge</h3>
    <div class="row">
      <div class="col-xs-3 text-center">
         <img src="images/vad1.jpg">
      </div>
      <div class="col-xs-6">
          <form>
              <div class="form-group">
                <label for="email">Name:</label>
                <input type="text" class="form-control" id="name" name="name">
              </div>
              <div class="form-group">
                <label for="pwd">Phone Number:</label>
                <input type="text" class="form-control" id="phno" name="phno">
              </div>
              <div class="form-group">
                <label for="pwd">Description:</label>
                <!-- <input type="text" class="form-control" id="desc" name="desc"> -->
                <textarea class="form-control" id="description" name="description">
                  
                </textarea>
              </div>
               <div class="form-group">
                <label for="pwd">Linkedin:</label>
                <input type="text" class="form-control" id="linkedin" name="linkedin">
              </div>
               <div class="form-group">
                <label for="pwd">Facebook:</label>
                <input type="text" class="form-control" id="facebook" name="facebook">
              </div>
               <div class="form-group">
                <label for="pwd">Twitter:</label>
                <input type="text" class="form-control" id="twitter" name="twitter">
              </div>
              
              <button type="submit" class="btn btn-default">Submit</button>
          </form>
      </div>
      <div class="col-xs-3 text-center">
        <img src="images/vad2.jpg">
      </div>
    </div>
    
  </div>
</section>
<footer class="footerbgcolor">
 <div class="container">
  <div class="row">
    <div class="col-xs-5">
      <ul class="list-unstyled">
          <b class="footerheadingcolor">My Contact</b>
        <li class="text-justify">Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley.</li>
        <li><i class="fa fa-map-marker" aria-hidden="true"></i>&nbsp #39-20-59/2/3</li>
        <li><i class="fa fa-home" aria-hidden="true"></i>&nbsp Eswar Plaza,OppSBI,Madhavadhara,Visakhapatnam</li>
        <li><i class="fa fa-phone" aria-hidden="true"></i>&nbsp 0891-2522625</li>
        <li><i class="fa fa-envelope-o" aria-hidden="true"></i>&nbsp info@newbiesoftsolutions.com</li>
      </ul>
    </div>
    <div class="col-xs-2">
      <ul class="list-unstyled custom-bullet">
          <b class="footerheadingcolor">Quick Link</b>
        <li>Home</li>
        <li>About</li>
        
      </ul>
    </div>
    <div class="col-xs-2">
      <ul class="list-unstyled">
         <b class="footerheadingcolor">Social Links</b>
        <li><i class="fa fa-facebook" aria-hidden="true"></i>&nbsp Facebook</li>
        <li><i class="fa fa-twitter" aria-hidden="true"></i>&nbsp Twitter</li>
        <li><i class="fa fa-linkedin" aria-hidden="true"></i>&nbsp Linkedin</li>
      </ul>
    </div>
    <div class="col-xs-3">
      <ul class="list-unstyled">
          <b class="footerheadingcolor">News Letter</b>
        <form>
          <input type="text" name="" class="form-control" placeholder="Email">
          <input type="submit" name="" value="Subscribe" class="form-control" style="margin-top: 10px;">
        </form>
      </ul>
    </div>
  </div>
  
  
 </div>
<section class="foote2bgcolor">
  <div class="container">
  <div class="row">
      
    <div class="col-xs-8">
      Designed &amp Developed by Newbiesoftsolutions
    </div>
    <div class="col-xs-4">
      <ul class="list-inline tearmslinks">
          <li><a href="">Tearms of service</a></li>
          <li><a href="">Privacy</a></li>
          
            </ul>
    </div>
  </div>
  </div>
 </section> 
 
</footer>
<script src="//cdn.ckeditor.com/4.5.9/standard/ckeditor.js"></script>
<script type="text/javascript">
  CKEDITOR.replace('description');
</script>

  
</body>
</html>