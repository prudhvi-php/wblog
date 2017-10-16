<!DOCTYPE html>
<html lang="en">
<head>
  @yield('title')
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link rel="stylesheet" href="{{ url('css/custom.css') }}">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <style>
    /* Remove the navbar's default margin-bottom and rounded borders */ 
    .navbar {
      margin-bottom: 0;
      border-radius: 0;
    }
    
    /* Set height of the grid so .sidenav can be 100% (adjust as needed) */
    .row.content {height: 450px}
    
    /* Set gray background color and 100% height */
    .sidenav {
      padding-top: 20px;
      background-color: #f1f1f1;
      height: 100%;
    }
    
    /* Set black background color, white text and some padding */
    footer {
      background-color: #555;
      color: white;
      padding: 15px;
    }
    
    /* On small screens, set height to 'auto' for sidenav and grid */
    @media screen and (max-width: 767px) {
      .sidenav {
        height: auto;
        padding: 15px;
      }
      .row.content {height:auto;} 
    }
  </style>
  <link rel="stylesheet" type="text/css" href="http://syntaxhighlight.in/shi/css/shi_default.min.css">
</head>
<body>

<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      <a class="navbar-brand" href="{{ url('/') }}">webNsyntax</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">

        <li {{{ ($active == '' ? 'class=active' : '') }}}><a href="{{ url('/') }}">Home</a></li>
        <li {{{ ($active == 'corephp' ? 'class=active' : '') }}}><a href="{{ url('/corephp') }}">Core Php</a></li>
        <li {{{ ($active == 'laravel' ? 'class=active' : '') }}}><a href="{{ url('/laravel') }}">Laravel</a></li>
        <li {{{ ($active == 'codeigniter' ? 'class=active' : '') }}}><a href="{{ url('/codeigniter') }}">Codeigniter</a></li>
        <li {{{ ($active == 'angularjs' ? 'class=active' : '') }}}><a href="{{ url('/angularjs') }}">Angular Js</a></li>
        <li {{{ ($active == 'jquery' ? 'class=active' : '') }}}><a href="{{ url('/jquery') }}">Jquery</a></li>
        <li {{{ ($active == 'others' ? 'class=active' : '') }}}><a href="{{ url('/others') }}">Others</a></li>
        <li {{{ ($active == 'photography' ? 'class=active' : '') }}}><a href="{{ url('/photography') }}">Photography</a></li>
      </ul>
    </div>
  </div>
</nav>

  @yield('content');

<footer class="container-fluid text-center footer" style="padding: 20px;">

  <div class="row">

    <div class="col-sm-4"> 
      <h4 class="footer-head">Links</h4>
        <p>About</p>
        <p>Contact / Feedback / Query</p>
    </div>
    <div class="col-sm-4">
      <h4 class="footer-head">Technologies</h4>
        <p>Laravel</p>
        <p>Angularjs</p>
    </div>
    <div class="col-sm-4">
      <h4 class="footer-head">Follow Me</h4>
        <p>info@luvdid.com</p>
    </div>
  </div>

</footer>
<script src="http://syntaxhighlight.in/shi/js/shi_jquery.min.js"></script>
</body>
</html>