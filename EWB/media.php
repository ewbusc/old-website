<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>EWB | USC Chapter</title>
    <link rel="icon" 
      type="image/x-icon" 
      href="images/favicon.ico">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="Jacob LeGrone">

    <!-- Styles -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/css/bootstrap-responsive.min.css" rel="stylesheet">
    <link href="assets/css/blueimp-gallery.min.css" rel="stylesheet">
    <link href="custom.css" rel="stylesheet">
    <link href="assets/css/fontello.css" rel="stylesheet" type="text/css">
    
    <style>
    
    #links img{
    	max-height:120px;
    	margin: 15px;
  		border: 1px solid #ccc;
  		-webkit-box-shadow: 0 1px 3px rgba(0, 0, 0, 0.5);
     	-moz-box-shadow: 0 1px 3px rgba(0, 0, 0, 0.5);
        box-shadow: 0 1px 3px rgba(0, 0, 0, 0.5);
        -webkit-transition: all 0.1s ease-in-out;
  		-moz-transition: all 0.1s ease-in-out;
  		-o-transition: all 0.1s ease-in-out;
  		transition: all 0.1s ease-in-out;
    }
    
	#links img:hover{
		transform: scale(1.05);
		-ms-transform: scale(1.05); /* IE 9 */
		-webkit-transform: scale(1.05); /* Safari and Chrome */
	}
    
    #links a:hover{
    	text-decoration:none;
    }
    
    .blueimp-gallery>.indicator>li {
		width:30px;
		height:30px;
		border-radius:2px;
		-webkit-border-radius:2px;
  		-moz-border-radius:2px;
	}
	
	.album {
		display:none;
	}
    
    </style>

  </head>

  <body>
  
<?php include("header.php"); ?>
	
	<script>
	document.getElementById("item-4").className="active";
	document.getElementById("phone-item-5").className="active";
	</script>


<!-- The Gallery as lightbox dialog, should be a child element of the document body -->
<div id="blueimp-gallery" class="blueimp-gallery blueimp-gallery-controls">
    <div class="slides"></div>
    <h3 class="title"></h3>
    <a class="prev">‹</a>
    <a class="next">›</a>
    <a class="close">×</a>
    <a class="play-pause"></a>
    <ol class="indicator"></ol>
</div>

<h2>Image Galleries</h2>



<div class="row-fluid album-picker">  
	
	
	
	<a href="#gallery1" class="span4 "><div onclick="openGallery('gallery1','links1')" class="captioned img-polaroid">
	<figure class="effeckt-caption effeckt-caption-2">
    	<img style="width:100%;" src="slideshow/community/img01.JPG" alt="">
    	<figcaption>
      		<div class="effeckt-figcaption-wrap">
          		<p>This album features photos of the La Victoria community and surrounding countryside.</p>
      		</div>
    	</figcaption>
  	</figure>
  	<h3>La Victoria</h3></div></a>
      
      
      
  	<a href="#gallery2" class="span4"><div onclick="openGallery('gallery2','links2')" class="captioned img-polaroid">
	<figure class="effeckt-caption effeckt-caption-2">
    	<img style="width:100%;" src="slideshow/coffeefarm/img01.JPG" alt="">
    	<figcaption>
      		<div class="effeckt-figcaption-wrap">
          		<p>These photos are from the three organic coffee producing locations in La Victoria that will be supplied by our water pipeline.</p>
      		</div>
    	</figcaption>
  	</figure>
  	<h3>Coffee Farms</h3></div></a>
  	
  	
  	
  	<a href="#gallery3" class="span4"><div onclick="openGallery('gallery3','links3')" class="captioned img-polaroid">
	<figure class="effeckt-caption effeckt-caption-2">
    	<img style="width:100%;" src="slideshow/assessmentjan13/img01.JPG" alt="">
    	<figcaption>
      		<div class="effeckt-figcaption-wrap">
          		<p>These photos are from our first assessment trip to La Victoria, Ecuador in January 2013.</p>
      		</div>
    	</figcaption>
  	</figure>
  	<h3>Jan. 2013 Assessment</h3></div></a>
  	
  	
  	
  	</div><!--/row-->

<script>
var prevTitle = 1;
var prevLinkId = 2;

function openGallery(title,linkId) {
	
	if(prevTitle != 1) {
		document.getElementById('links').id=prevLinkId;
		document.getElementById(prevTitle).style.display='none';
	};
	
	
	
	document.getElementById(linkId).id='links'
	document.getElementById(title).style.display='inline';
	
	prevTitle = title;
	prevLinkId = linkId;
	
	document.getElementById('links').onclick = function (event) {
    event = event || window.event;
    var target = event.target || event.srcElement,
        link = target.src ? target.parentNode : target,
        options = {index: link, event: event},
        links = this.getElementsByTagName('a');
    blueimp.Gallery(links, options);
	};
	
};

</script>


<div id="gallery1" class="album">
<h3>La Victoria Community</h3>
<div id="links1" class="pagination-centered">
    <a href="slideshow/community/img01.JPG" title="">
        <img src="slideshow/community/img01.JPG" alt="">
    </a>
    <a href="slideshow/community/img02.JPG" title="">
        <img src="slideshow/community/img02.JPG" alt="">
    </a>
    <a href="slideshow/community/img03.JPG" title="">
        <img src="slideshow/community/img03.JPG" alt="">
    </a>
    <a href="slideshow/community/img04.JPG" title="">
        <img src="slideshow/community/img04.JPG" alt="">
    </a>
    <a href="slideshow/community/img05.JPG" title="">
        <img src="slideshow/community/img05.JPG" alt="">
    </a>
    <a href="slideshow/community/img06.JPG" title="">
        <img src="slideshow/community/img06.JPG" alt="">
    </a>
    <a href="slideshow/community/img07.JPG" title="">
        <img src="slideshow/community/img07.JPG" alt="">
    </a>
    <a href="slideshow/community/img08.JPG" title="">
        <img src="slideshow/community/img08.JPG" alt="">
    </a>
    <a href="slideshow/community/img09.JPG" title="">
        <img src="slideshow/community/img09.JPG" alt="">
    </a>
    <a href="slideshow/community/img10.JPG" title="">
        <img src="slideshow/community/img10.JPG" alt="">
    </a>
    <a href="slideshow/community/img11.JPG" title="">
        <img src="slideshow/community/img11.JPG" alt="">
    </a>
    <a href="slideshow/community/img12.JPG" title="">
        <img src="slideshow/community/img12.JPG" alt="">
    </a>
	</div><!-- links -->
</div><!-- /row -->

<div id="gallery2" class="album">
<h3>Coffee Farms</h3>
<div id="links2" class="pagination-centered">
    <a href="slideshow/coffeefarm/img01.JPG" title="">
        <img src="slideshow/coffeefarm/img01.JPG" alt="">
    </a>
    <a href="slideshow/coffeefarm/img02.JPG" title="">
        <img src="slideshow/coffeefarm/img02.JPG" alt="">
    </a>
    <a href="slideshow/coffeefarm/img03.JPG" title="">
        <img src="slideshow/coffeefarm/img03.JPG" alt="">
    </a>
    <a href="slideshow/coffeefarm/img04.JPG" title="">
        <img src="slideshow/coffeefarm/img04.JPG" alt="">
    </a>
    <a href="slideshow/coffeefarm/img05.JPG" title="">
        <img src="slideshow/coffeefarm/img05.JPG" alt="">
    </a>
    <a href="slideshow/coffeefarm/img06.JPG" title="">
        <img src="slideshow/coffeefarm/img06.JPG" alt="">
    </a>
    <a href="slideshow/coffeefarm/img07.JPG" title="">
        <img src="slideshow/coffeefarm/img07.JPG" alt="">
    </a>
    <a href="slideshow/coffeefarm/img08.JPG" title="">
        <img src="slideshow/coffeefarm/img08.JPG" alt="">
    </a>
    <a href="slideshow/coffeefarm/img09.JPG" title="">
        <img src="slideshow/coffeefarm/img09.JPG" alt="">
    </a>
	</div><!-- links -->
</div><!-- /row -->

<div id="gallery3" class="album">
<h3>Assessment Trip, January 2013</h3>
<div id="links3" class="pagination-centered">
    <a href="slideshow/assessmentjan13/img01.JPG" title="">
        <img src="slideshow/assessmentjan13/img01.JPG" alt="">
    </a>
    <a href="slideshow/assessmentjan13/img02.JPG" title="">
        <img src="slideshow/assessmentjan13/img02.JPG" alt="">
    </a>
    <a href="slideshow/assessmentjan13/img03.JPG" title="">
        <img src="slideshow/assessmentjan13/img03.JPG" alt="">
    </a>
    <a href="slideshow/assessmentjan13/img04.JPG" title="">
        <img src="slideshow/assessmentjan13/img04.JPG" alt="">
    </a>
    <a href="slideshow/assessmentjan13/img05.JPG" title="">
        <img src="slideshow/assessmentjan13/img05.JPG" alt="">
    </a>
    <a href="slideshow/assessmentjan13/img06.JPG" title="">
        <img src="slideshow/assessmentjan13/img06.JPG" alt="">
    </a>
    <a href="slideshow/assessmentjan13/img07.JPG" title="">
        <img src="slideshow/assessmentjan13/img07.JPG" alt="">
    </a>
    <a href="slideshow/assessmentjan13/img08.JPG" title="">
        <img src="slideshow/assessmentjan13/img08.JPG" alt="">
    </a>
    <a href="slideshow/assessmentjan13/img09.JPG" title="">
        <img src="slideshow/assessmentjan13/img09.JPG" alt="">
    </a>
    <a href="slideshow/assessmentjan13/img10.JPG" title="">
        <img src="slideshow/assessmentjan13/img10.JPG" alt="">
    </a>
    <a href="slideshow/assessmentjan13/img11.JPG" title="">
        <img src="slideshow/assessmentjan13/img11.JPG" alt="">
    </a>
    <a href="slideshow/assessmentjan13/img12.JPG" title="">
        <img src="slideshow/assessmentjan13/img12.JPG" alt="">
    </a>
    <a href="slideshow/assessmentjan13/img13.JPG" title="">
        <img src="slideshow/assessmentjan13/img13.JPG" alt="">
    </a>
    <a href="slideshow/assessmentjan13/img14.JPG" title="">
        <img src="slideshow/assessmentjan13/img14.JPG" alt="">
    </a>
	</div><!-- links -->
</div><!-- /row -->

<script src="assets/js/blueimp-gallery.min.js"></script>
<script>
blueimp.Gallery(
    document.getElementById('links').getElementsByTagName('a'),
    {
        container: '#blueimp-gallery-carousel',
        carousel: true
    }
);
</script>

<?php include("footer.php"); ?>      
<script>$('.navbar .dropdown').hover(function() {
  $('.dropdown-menu', this).slideToggle(200);
});</script>
  </body>
</html>