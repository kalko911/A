<!DOCTYPE html>
<!-- saved from url=(0040)http://wbpreview.com/previews/WB0M61R7N/ -->
<html lang="en"><script id="tinyhippos-injected">if (window.top.ripple) { window.top.ripple("bootstrap").inject(window, document); }</script><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta charset="utf-8">
    <title>Watchopolis - Video Portal Theme</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Include CSS Assets -->

    <link href="{{ URL::asset('/css/jkit.css') }}" rel="stylesheet">
    <link href="{{ URL::asset('/css/bootstrap.css') }}" rel="stylesheet">
    <link href="{{ URL::asset('/css/app.css') }}" rel="stylesheet">
    <link href="{{ URL::asset('/css/font-awesome.css') }}" rel="stylesheet">
    <link href="{{ URL::asset('/css/bootstrap-responsive.css') }}" rel="stylesheet">

    <!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->

    <!-- Fav and touch icons -->
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="http://wbpreview.com/previews/assets/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="http://wbpreview.com/previews/assets/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="http://wbpreview.com/previews/assets/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="http://wbpreview.com/previews/assets/ico/apple-touch-icon-57-precomposed.png">
    <link rel="shortcut icon" href="http://wbpreview.com/previews/assets/ico/favicon.png">

  <style id="style-1-cropbar-clipper">/* Copyright 2014 Evernote Corporation. All rights reserved. */
.en-markup-crop-options {
    top: 18px !important;
    left: 50% !important;
    margin-left: -100px !important;
    width: 200px !important;
    border: 2px rgba(255,255,255,.38) solid !important;
    border-radius: 4px !important;
}

.en-markup-crop-options div div:first-of-type {
    margin-left: 0px !important;
}
</style></head>

  <body cz-shortcut-listen="true">

<!-- Start Header -->

<div id="header">
    <div class="navbar navbar-static-top">
      <div class="navbar-inner">
        <div class="container">
          <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </a>
         <a href="http://wbpreview.com/previews/WB0M61R7N/index.htm"> <h1>.</h1></a>
          <div class="nav-collapse collapse">
            <form class="navbar-form pull-left">
<div class="input-append">
  <input class="span3" id="appendedInputButtons" type="text">
  <button class="btn btn-primary" type="button"><i class="icon-search"></i></button>
</div>
</form>
            <ul class="nav">
              <li class="active"><a href="http://wbpreview.com/previews/WB0M61R7N/#">Movies</a></li>
              <li><a href="http://wbpreview.com/previews/WB0M61R7N/#">TV Shows</a></li>
              <li><a href="http://wbpreview.com/previews/WB0M61R7N/#">Music</a></li>
              <li class="dropdown">
                <a href="http://wbpreview.com/previews/WB0M61R7N/#" class="dropdown-toggle" data-toggle="dropdown">Features <b class="caret"></b></a>
                <ul class="dropdown-menu">
                  <li><a href="http://wbpreview.com/previews/WB0M61R7N/404.htm">404 Page</a></li>
                  <li><a href="http://wbpreview.com/previews/WB0M61R7N/page-elements.htm">Page elements</a></li>
                  <li><a href="http://wbpreview.com/previews/WB0M61R7N/login.htm">Login Page</a></li>
                  <li><a href="http://wbpreview.com/previews/WB0M61R7N/register.htm">Register Page</a></li>
                  <li><a href="http://wbpreview.com/previews/WB0M61R7N/pricing-plans.htm">Pricing Plans</a></li>
                </ul>
              </li>
            </ul>
         <p class="navbar-text pull-right">
            <a href="http://wbpreview.com/previews/WB0M61R7N/login.htm" class="navbar-link">login</a> or <a href="http://wbpreview.com/previews/WB0M61R7N/register.htm" class="navbar-link">register</a>
            </p>
          </div><!--/.nav-collapse -->
        </div>
      </div>
    </div>
 </div>

 <!-- End Header -->



<div class="container">




<div>



<div class="row-fluid">
<div class="span9 main-section">


 <!-- Options bar (Left Section) -->

<div class="options-bar"><select class="span2 pull-left"><option>Sort By </option>
  <option>Date</option>
  <option>Popular</option>
  <option>Highest Rating</option>
  <option>Lowest Rating</option>
</select><span><strong>12,487</strong> Titles Found</span>
</div>

 <!-- End Options Bar -->


 <!-- Start Left Section -->
@yield('content')


 <!-- End Left Section -->

 <!-- Start Right Section -->
        @section('sidebar')
           <div id="side-section" class="span3">
             <ul class="nav nav-list">
                           <li class="nav-header">filter by</li>
                           <li class="active"><a href="http://wbpreview.com/previews/WB0M61R7N/#"><i class="icon-time"></i> Recently added</a></li>
                           <li><a href="http://wbpreview.com/previews/WB0M61R7N/#"><i class="icon-heart-empty"></i> Most Popular</a></li>
                           <li><a href="http://wbpreview.com/previews/WB0M61R7N/#"><i class="icon-star-empty"></i> Highest Rating</a></li>
                         </ul>


           <div class="module-top"><i class="icon-lock"></i> Quick Login</div>
           <div class="module">
           <form method="post" action="http://wbpreview.com/previews/WB0M61R7N/?" data-jkit="[form:validateonly=true]">
             <fieldset>
               <label class="label-main">Username</label>
               <input name="miniusername" class="span10" id="miniusername" type="text" data-jkit="[validate:required=true;min=3;max=10;error=Please enter your username (3-10 characters)]">
               <label class="label-main">Password</label>
               <input name="miniusername" class="span10" id="miniusername" type="text" data-jkit="[validate:required=true;min=3;max=10;error=Please enter your username (3-10 characters)]">
           <p><label class="checkbox"><input type="checkbox">remember me</label></p>
               <button name="send" type="submit" value="Submit" class="btn btn-small">Login</button>
             </fieldset>
           <input type="hidden" name="jkit-requireds" id="jkit-requireds"></form></div>


           <div class="module-top"><i class="icon-comments"></i> Latest Comments</div>
           <div class="module">
           <ul class="comment-list">
           <li class="comment">
           <div class="comment-body">
           <h4 class="comment-heading">Comment title <span class="time">4:34am</span></h4>
           <p>Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin commodo. Cras purus odio, vestibulum in vulputate at.</p>
           </div>
           </li>
           <li class="comment">
           <div class="comment-body">
           <h4 class="comment-heading">Comment title <span class="time">4:34am</span></h4>
           <p>Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin commodo. Cras purus odio, vestibulum in vulputate at.</p>
           </div>
           </li><li class="comment">
           <div class="comment-body">
           <h4 class="comment-heading">Comment title <span class="time">4:34am</span></h4>
           <p>Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin commodo. Cras purus odio, vestibulum in vulputate at.</p>
           </div>
           </li><li class="comment">
           <div class="comment-body">
           <h4 class="comment-heading">Comment title <span class="time">4:34am</span></h4>
           <p>Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin commodo. Cras purus odio, vestibulum in vulputate at.</p>
           </div>
           </li>
           </ul>
           </div>
           </div>
        @show

</div>
<hr>
</div>
</div>


<footer class="footer">
<div class="container">
<div class="row-fluid">
  <div class="span6"> <p class="copyright"><img class="foot-logo" src="./Watchopolis - Video Portal Theme_files/logo-ts.png" alt="Brand Logo"> © 2013 <strong>Watchopolis</strong> Video Portal Theme - Crafted by <a href="https://wrapbootstrap.com/user/themestrap">Themestrap</a> </p></div>
<div class="span6">   <div class="pagination pull-right">
 <ul>
<li><a data-rel="tooltip" data-placement="top" data-original-title="Follow us on Twitter" href="http://wbpreview.com/previews/WB0M61R7N/#"><i class="icon-twitter"></i></a></li>
<li><a data-rel="tooltip" data-placement="top" data-original-title="Share us on Pinterest" href="http://wbpreview.com/previews/WB0M61R7N/#"><i class="icon-pinterest"></i></a></li>
<li><a data-rel="tooltip" data-placement="top" data-original-title="Like us on Facebook" href="http://wbpreview.com/previews/WB0M61R7N/#"><i class="icon-facebook"></i></a></li>
<li><a data-rel="tooltip" data-placement="top" data-original-title="+1 us on Google+" href="http://wbpreview.com/previews/WB0M61R7N/#"><i class="icon-google-plus"></i></a></li>
</ul>
</div>
</div>
</div>
</div>
</footer>



    <!-- Include Javascript/JQuery Assets
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
 <script src="{{ URL::asset('/js/jquery.js') }}"></script>
 <script src="{{ URL::asset('/js/bootstrap.js') }}"></script>
 <script src="{{ URL::asset('/js/jquery.jkit.1.1.10.js') }}"></script>
 <script src="{{ URL::asset('/js/jquery.easing.1.3.js') }}"></script>


<script type="text/javascript">
    $("[data-rel=tooltip]").tooltip();
</script>

<script type="text/javascript">
$(document).ready(function(){
  $('body').jKit();
});
</script>


</div>
</body>
</html>