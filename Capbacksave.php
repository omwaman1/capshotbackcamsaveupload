<!DOCTYPE html>

<html>

<head>
<title></title>
<link type="text/css" rel="stylesheet" href="style.css">
</head>
<body>

<div id="header">
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/webcamjs/1.0.25/webcam.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css" />
    <style type="text/css">
       #results { padding:10px; border:1px solid; background:#ccc; }
    </style>
    <div id="results">Your captured image will appear here...</div>
            </div>
</div>

<div id="navbar">
	
</div>

<div class="sideright">

<h2>Instructions :-</h2>

<p> Be polite</p>
<p> Get clear image </p>
<p> Don't ask for another documents other than required.</p>
<p> instruction No 4</p>
<p> instruction No 5 </p>

</div>

<div class="sideright">

<h2>Lecture Dates 2</h2>

<p> Recent </p>
<p>  </p>
<p> 2</p>
<p> 3 </p>
<p> 4</p>

</div>

<div>
 <a target="_blank" href="klematis_big.htm">
<img src="test1.jpg" class="sideright-image" alt="">

</a>


</div>



<div class="main">
<div class="container">
    <h1 class="text-center"></h1>
   
    <form method="POST" action="storeImage.php">
        <div class="row">
            <div class="col-md-6">
                <div id="my_camera"></div>
                <br/>
                <center>
                <input type=button value="Take Snapshot" onClick="take_snapshot()">
                <input type="hidden" name="image" class="image-tag">
                	<button class="btn btn-success">Submit</button>
                </center>
            </div>
            <div class="col-md-6">
            <div class="col-md-12 text-center">
                <br/>

            </div>
        </div>
    </form
</div>
</div>

<div class="main">
<h1></h1>
<p>

</p>

<h1></h1>
<p>

</p>

<h1></h1>
<p>
<!-- Configure a few settings and attach camera -->
	    <style type="text/css">
       #results { padding:10px; border:1px solid; background:#ccc; }
    </style>
<script data-width="200" data-height="200" language="JavaScript">
    Webcam.set({
        width: 300,
        height: 400,
        image_format: 'jpeg',
        jpeg_quality: 100
    });
Webcam.set( 'constraints',{ facingMode:'environment' });
    Webcam.attach( '#my_camera' );
  
    function take_snapshot() {
        Webcam.snap( function(data_uri) {
            $(".image-tag").val(data_uri);
            document.getElementById('results').innerHTML = '<img src="'+data_uri+'"width="300px"height="170px" />';
        } );
    }
</script>
</p>>
</div>
<div class="copyrights">
        <div class="container">
            <div class="footer-distributed">
                <div class="footer-left">
                    <p class="footer-links">
                        <a href="#">Home</a>
                        <a href="#">Blog</a>
                        <a href="#">Pricing</a>
                        <a href="#">About</a>
                        <a href="#">Faq</a>
                        <a href="#">Contact</a>
                    </p>
                    <p class="footer-company-name">All Rights Reserved. &copy; 2020 <a href="#"><br>Our inspiration : R.D.Kene sir and Shelke sir</a> <br>Design By : 
					<a href="https://html.design/">html design by om waman</a></p>
                </div>
            </div>
        </div><!-- end container -->
    </div><!-- end copyrights -->
</body>
</html>