<br><br>

    </div> <!-- /container -->
	</div> <!-- /container2 -->
	
	<footer>
        <div class="container">
        <div class="row-fluid">
        <div class="span4">
        <a href="support"><h3>Support Us</h3></a>
        <p><br>You can financially support our projects by donating through the EWB-USA national website.
      Funding can be contributed for
      <a href="https://ssl.charityweb.net/ewbusa/?Custom3=100216"><strong>general chapter activities</strong></a>,
      or designated for a specific international project
      (<a href="https://ssl.charityweb.net/ewbusa/?Custom3=9151"><strong>La Victoria, Ecuador</strong></a>).</p>
        </div>
        <div class="span4">
        <h3>Join Us Elsewhere</h3>
		<ul class="social">
		<span><a href="https://www.facebook.com/EWBatUSC"><li class="icon-facebook">Like our page</li></a></span>
		<span><a href="https://twitter.com/ewbusa_usc"><li class="icon-twitter">Follow us on Twitter</li></a></span> 
		<span><a href="http://www.youtube.com/user/uscewb"><li class="icon-videocam">Follow us on YouTube</li></a></span>
		<span><a href="http://www.ewb-usa.org/"><li class="icon-link-1">Visit the national EWB-USA website</li></a></span>
		</ul>
        </div>
        <div class="span4">
        <h3>Get Involved</h3>
		<ul class="social">
		<span><a href="contact#contact-form"><li class="icon-feather">Contact Us</li></a></span>
		<span><a href="news#calendar"><li class="icon-calendar">View upcoming events</li></a></span>
		<span style="line-height:20px"><li class="icon-inbox" onclick="mailingform()" id="mailing-list">Join our mailing list</li></span>
		<li id="mailing-form">
		<script type="text/javascript">var submitted=false;</script>
    <iframe name="hidden_iframe" id="hidden_iframe" style="display:none;"     
onload="if(submitted) {
		mailnotify();
	}"></iframe>
      <form action="https://docs.google.com/forms/d/137e1HDr4QLwSg_8AdopJdNLg_5B88U6nSl3q64OoAvQ/formResponse" method="POST" target="hidden_iframe" 
onsubmit="submitted=true;">
<div class="ss-form-question errorbox-good">

<div class="input-append" style="margin-top:3px;">

<input type="email" placeholder="Email Address" name="entry.658889417" value="" class="ss-q-short" id="entry_658889417" dir="auto" aria-required="true" required="" style="border-radius:20px 0px 0px 20px;" autofocus>


<input type="hidden" name="draftResponse" value="[]
">
<input type="hidden" name="pageHistory" value="0">



<button type="submit" name="submit" value="Submit" class="btn" id="ss-submit" style="border-radius:0px 20px 20px 0px">Submit</button></div></div>

</form></li>
		<li id="alertbox2">
			<div class="alert alert-success" style="margin-top:3px;">
              	<button type="button" class="close" onclick="document.getElementById('alertbox2').style.display='none';">&times;</button>
              	<strong>Thank you!</strong> <span id="mailing-list-alert">Your email address</span> will be added to the mailing list.
        	</div>
		</li>	
		</ul>
        </div>
        </div><!-- /row -->
        
        <br>
        
        <p class="copyright">&copy; 2013 University of South Carolina EWB-USA Student Chapter. <br> <small>Developed by <span id="byline" onclick="this.innerHTML='<a href=&quot;mailto:legrone.dev@gmail.com?Subject=EWB-USA%20USC Student Chapter Website&quot; target=&quot;_top&quot;>legrone.dev@gmail.com</a>'">Jacob LeGrone.</span></small></p>
        
        </div><!-- /container -->
      </footer>
	
	<div class="page-bottom"><!-- This gives you a nice looking gap at bottom of page for non-mobile browsers. Wohoo. -->
	<br><br><br>
	</div>
	
<script>
function mailingform() {
document.getElementById('mailing-list').style.display="none";
document.getElementById('mailing-form').style.display="inline";
document.getElementById('alertbox2').style.display='none';
}
function mailnotify() {
	var x = document.getElementById('entry_658889417').value;
	document.getElementById('mailing-list-alert').innerHTML=x;
	document.getElementById('mailing-form').style.display='none';
	document.getElementById('mailing-list').style.display='inline';
	document.getElementById('alertbox2').style.display='inline';
}
</script>
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
<script>window.jQuery || document.write('<script src="assets/js/jquery.js"><\/script>')</script>
	<script src="assets/js/bootstrap.min.js"></script>
	<script>
  		$(document).ready(function(){
    		$('.carousel').carousel();
  		});
</script>
<!-- Google analytics code -->
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');
  ga('create', 'UA-42616079-1', 'ewbusc.org');
  ga('send', 'pageview');
</script>