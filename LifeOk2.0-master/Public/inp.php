<php>
    include('index.html');

</php>
<!--
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
     <meta name="viewport" content="width=device-width, initial-scale=1">
 

    <title>LifeOk - Login</title>

    <!-- Bootstrap Core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Theme CSS -->
    <link href="css/freelancer.min.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

       
    <style type="text/css">
html,

/*=== 2. Anchor Link ===*/
a {
  color: #aaaaaa;
  transition: all ease-in-out 200ms;
}
a:hover {
  color: #333333;
  text-decoration: none;
}
/*=== 3. Text Outside the Box ===*/
.etc-login-form {
  color: #919191;
  padding: 10px 20px;
}
.etc-login-form p {
  margin-bottom: 5px;
}
/*=== 4. Main Form ===*/
.login-form-1 {
  max-width: 300px;
  border-radius: 5px;
  display: inline-block;
}
.main-login-form {
  position: relative;
}
.login-form-1 .form-control {
  border: 0;
  box-shadow: 0 0 0;
  border-radius: 0;
  background: transparent;
  color: #555555;
  padding: 7px 0;
  font-weight: bold;
  height:auto;
}
.login-form-1 .form-control::-webkit-input-placeholder {
  color: #999999;
}
.login-form-1 .form-control:-moz-placeholder,
.login-form-1 .form-control::-moz-placeholder,
.login-form-1 .form-control:-ms-input-placeholder {
  color: #999999;
}
.login-form-1 .form-group {
  margin-bottom: 0;
  border-bottom: 2px solid #efefef;
  padding-right: 20px;
  position: relative;
}
.login-form-1 .form-group:last-child {
  border-bottom: 0;
}
.login-group {
  background: #ffffff;
  color: #999999;
  border-radius: 8px;
  padding: 10px 20px;
}
.login-group-checkbox {
  padding: 5px 0;
}
/*=== 5. Login Button ===*/
.login-form-1 .login-button {
  position: absolute;
  right: -25px;
  top: 50%;
  background: #ffffff;
  color: #999999;
  padding: 11px 0;
  width: 50px;
  height: 50px;
  margin-top: -25px;
  border: 5px solid #efefef;
  border-radius: 50%;
  transition: all ease-in-out 500ms;
}
.login-form-1 .login-button:hover {
  color: #555555;
  transform: rotate(450deg);
}
.login-form-1 .login-button.clicked {
  color: #555555;
}
.login-form-1 .login-button.clicked:hover {
  transform: none;
}
.login-form-1 .login-button.clicked.success {
  color: #2ecc71;
}
.login-form-1 .login-button.clicked.error {
  color: #e74c3c;
}
/*=== 6. Form Invalid ===*/
label.form-invalid {
  position: absolute;
  top: 0;
  right: 0;
  z-index: 5;
  display: block;
  margin-top: -25px;
  padding: 7px 9px;
  background: #777777;
  color: #ffffff;
  border-radius: 5px;
  font-weight: bold;
  font-size: 11px;
}
label.form-invalid:after {
  top: 100%;
  right: 10px;
  border: solid transparent;
  content: " ";
  height: 0;
  width: 0;
  position: absolute;
  pointer-events: none;
  border-color: transparent;
  border-top-color: #777777;
  border-width: 6px;
}
/*=== 7. Form - Main Message ===*/
.login-form-main-message {
  background: #ffffff;
  color: #999999;
  border-left: 3px solid transparent;
  border-radius: 3px;
  margin-bottom: 8px;
  font-weight: bold;
  height: 0;
  padding: 0 20px 0 17px;
  opacity: 0;
  transition: all ease-in-out 200ms;
}
.login-form-main-message.show {
  height: auto;
  opacity: 1;
  padding: 10px 20px 10px 17px;
}
.login-form-main-message.success {
  border-left-color: #2ecc71;
}
.login-form-main-message.error {
  border-left-color: #e74c3c;
}
/*=== 8. Custom Checkbox & Radio ===*/
/* Base for label styling */
[type="checkbox"]:not(:checked),
[type="checkbox"]:checked,
[type="radio"]:not(:checked),
[type="radio"]:checked {
  position: absolute;
  left: -9999px;
}
[type="checkbox"]:not(:checked) + label,
[type="checkbox"]:checked + label,
[type="radio"]:not(:checked) + label,
[type="radio"]:checked + label {
  position: relative;
  padding-left: 25px;
  padding-top: 1px;
  cursor: pointer;
}
/* checkbox aspect */
[type="checkbox"]:not(:checked) + label:before,
[type="checkbox"]:checked + label:before,
[type="radio"]:not(:checked) + label:before,
[type="radio"]:checked + label:before {
  content: '';
  position: absolute;
  left: 0;
  top: 2px;
  width: 17px;
  height: 17px;
  border: 0px solid #aaa;
  background: #f0f0f0;
  border-radius: 3px;
  box-shadow: inset 0 1px 3px rgba(0, 0, 0, 0.3);
}
/* checked mark aspect */
[type="checkbox"]:not(:checked) + label:after,
[type="checkbox"]:checked + label:after,
[type="radio"]:not(:checked) + label:after,
[type="radio"]:checked + label:after {
  position: absolute;
  color: #555555;
  transition: all .2s;
}
/* checked mark aspect changes */
[type="checkbox"]:not(:checked) + label:after,
[type="radio"]:not(:checked) + label:after {
  opacity: a0;
  transform: scale(0);
}
[type="checkbox"]:checked + label:after,
[type="radio"]:checked + label:after {
  opacity: 1;
  transform: scale(1);
}
/* disabled checkbox */
[type="checkbox"]:disabled:not(:checked) + label:before,
[type="checkbox"]:disabled:checked + label:before,
[type="radio"]:disabled:not(:checked) + label:before,
[type="radio"]:disabled:checked + label:before {
  box-shadow: none;
  border-color: #8c8c8c;
  background-color: #878787;
}
[type="checkbox"]:disabled:checked + label:after,
[type="radio"]:disabled:checked + label:after {
  color: #555555;
}
[type="checkbox"]:disabled + label,
[type="radio"]:disabled + label {
  color: #8c8c8c;
}
/* accessibility */
[type="checkbox"]:checked:focus + label:before,
[type="checkbox"]:not(:checked):focus + label:before,
[type="checkbox"]:checked:focus + label:before,
[type="checkbox"]:not(:checked):focus + label:before {
  border: 1px dotted #f6f6f6;
}
/* hover style just for information */
label:hover:before {
  border: 1px solid #f6f6f6 !important;
}
/*=== Customization ===*/
/* radio aspect */
[type="checkbox"]:not(:checked) + label:before,
[type="checkbox"]:checked + label:before {
  border-radius: 3px;
}
[type="radio"]:not(:checked) + label:before,
[type="radio"]:checked + label:before {
  border-radius: 35px;
}
/* selected mark aspect */
[type="checkbox"]:not(:checked) + label:after,
[type="checkbox"]:checked + label:after {
  content: '✔';
  top: 0;
  left: 2px;
  font-size: 14px;
}
[type="radio"]:not(:checked) + label:after,
[type="radio"]:checked + label:after {
  content: '\2022';
  top: 0;
  left: 3px;
  font-size: 30px;
  line-height: 25px;
}
/*=== 9. Misc ===*/
.logo {
  padding: 15px 0;
  font-size: 25px;
  color: #aaaaaa;
  font-weight: bold;
}
.textarea-container {
  position: relative;
  /* you should change this*/
  width: 50%;
}

textarea, .textarea-size {
  min-height: 25px;
  /* need to manually set font and font size */
  font-family: sans-serif;
  font-size: 14px;
  box-sizing: border-box;
  padding: 4px;
  border: 1px solid;

  overflow: hidden;
  width: 100%;
}

textarea {
  height: 75%;
  position: absolute;
  resize:none;
    width: 235px;

  /*
  "pre" or "preline" or "normal" fixes Chrome issue where
    whitespace at end of lines does not trigger a line break.
  However, it causes the text to exhibit the behavior seen with
    "pre" that is described below.
   */
  white-space: normal;
}

.textarea-size {
  visibility: hidden;

  /*
  Pre-wrap: preserve spacing and newlines, but wrap text.
  Pre: preserve spacing and newlines but don't wrap text.

  "pre" does not wrap well on Firefox, even with word-wrap:break-word.
  "pre" on Chrome works with word-wrap, but exhibits different behavior:
  Instead of entire words being moved to the next line for wrapping,
  the browser will cut words in the middle for wrapping.
  "pre-line" has Firefox issues
  */
  white-space: pre-wrap;
  /* Required for wrapping lines in Webkit,
    but not necessary in Firefox if you have white-space wrapping
    (pre-wrap, normal, pre-line) already set */
  word-wrap: break-word;
  overflow-wrap: break-word;
}
    </style>
   
    <script type="text/javascript">
        var textContainer, textareaSize, input;
        var autoSize = function () {
  // also can use textContent or innerText
                textareaSize.innerHTML = input.value + '\n';
        };

        document.addEventListener('DOMContentLoaded', function() {
  textContainer = document.querySelector('.textarea-container');
  textareaSize = textContainer.querySelector('.textarea-size');
  input = textContainer.querySelector('textarea');

  autoSize();
  input.addEventListener('input', autoSize);
});
        
        window.alert = function(){};
        var defaultCSS = document.getElementById('bootstrap-css');
        function changeCSS(css){
            if(css) $('head > link').filter(':first').replaceWith('<link rel="stylesheet" href="'+ css +'" type="text/css" />'); 
            else $('head > link').filter(':first').replaceWith(defaultCSS); 
        }
        $( document ).ready(function() {
          var iframe_height = parseInt($('html').height()); 
          window.parent.postMessage( iframe_height, 'http://bootsnipp.com');
        });
    </script>
    
</head>

<body id="page-top" class="index">
<div id="skipnav"><a href="#maincontent">Skip to main content</a></div>

    <!-- Navigation -->
    <nav id="mainNav" class="navbar navbar-default navbar-fixed-top navbar-custom">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header page-scroll">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span> Menu <i class="fa fa-bars"></i>
                </button>
                <a class="navbar-brand" href="#page-top">Life-Ok</a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li class="hidden">
                        <a href="#page-top"></a>
                    </li>
                    
                    <li class="page-scroll">
                        <a href="#about">About</a>
                    </li>
                    
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container-fluid -->
    </nav>

    <!-- Header -->
    <header>
        <div class="container" id="maincontent" tabindex="-1">
            <div class="row">
                <div class="col-lg-12">
            <div class="logo" color = "#ffffff"><font color = "white">Welcome! My Name is Lil' Boat, Feel Free To Express Yourself</font></div>
	
	<!-- Main Form -->
	<div class="login-form-1" style="width: 300px;">
		<form id="register-form" class="text-left" novalidate="novalidate">
			<div class="login-form-main-message"></div>
			<div class="main-login-form">
				<div class="login-group">
					<div class="textarea-container">
                        <textarea></textarea>
                                <div class="textarea-size"></div>
                                </div>
				</div>
				<button type="submit" class="login-button" onclick="redirect()";><i class="fa fa-chevron-right"></i></button>
			</div>
			<div class="etc-login-form">
                <p><font color = "white"></font> <a href="log.html"><font color = "black"></font></a></p>
			</div>
		</form>
	</div>
	<!-- end:Main Form -->
</div>
                    </div>
                </div>
            

    </header>

    <!-- Portfolio Grid Section -->

    <!-- About Section -->

    <!-- Contact Section -->
    

    <!-- Scroll to Top Button (Only visible on small and extra-small screen sizes) -->


    <!-- Portfolio Modals -->
   
     

    <!-- jQuery -->
    <script src="vendor/jquery/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="vendor/bootstrap/js/bootstrap.min.js"></script>
    <script>
        function store(){
            localStorage.setItem('email', '');  
            localStorage.setItem('password', '<?php echo $_SESSION['password'];?>');}
    </script>
    <!-- Plugin JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>

    <!-- Contact Form JavaScript -->
    <script src="js/jqBootstrapValidation.js"></script>
    <script src="js/contact_me.js"></script>

    <!-- Theme JavaScript -->
    <script src="js/freelancer.min.js"></script>

</body>

</html>-->
