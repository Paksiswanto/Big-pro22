		<!DOCTYPE html>
		<html lang="en">

		<!-- Mirrored from colorlib.com/etc/bwiz/colorlib-wizard-19/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 18 May 2023 08:10:54 GMT -->
		<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="author" content="colorlib.com">
		<meta http-equiv="X-UA-Compatible" content="ie=edge">
		<title>Sign Up Form</title>

		<link rel="stylesheet" href="{{ asset ("wizard/fonts/material-icon/css/material-design-iconic-font.min.css")}}">

		<link rel="stylesheet" href="{{ asset ("wizard/css/style.css")}}">
		<meta name="robots" content="noindex, follow">
		<script nonce="94ce525b-3aa3-4ae0-8316-a54a94bafe0a">(function(w,d){!function(bg,bh,bi,bj){bg[bi]=bg[bi]||{};bg[bi].executed=[];bg.zaraz={deferred:[],listeners:[]};bg.zaraz.q=[];bg.zaraz._f=function(bk){return function(){var bl=Array.prototype.slice.call(arguments);bg.zaraz.q.push({m:bk,a:bl})}};for(const bm of["track","set","debug"])bg.zaraz[bm]=bg.zaraz._f(bm);bg.zaraz.init=()=>{var bn=bh.getElementsByTagName(bj)[0],bo=bh.createElement(bj),bp=bh.getElementsByTagName("title")[0];bp&&(bg[bi].t=bh.getElementsByTagName("title")[0].text);bg[bi].x=Math.random();bg[bi].w=bg.screen.width;bg[bi].h=bg.screen.height;bg[bi].j=bg.innerHeight;bg[bi].e=bg.innerWidth;bg[bi].l=bg.location.href;bg[bi].r=bh.referrer;bg[bi].k=bg.screen.colorDepth;bg[bi].n=bh.characterSet;bg[bi].o=(new Date).getTimezoneOffset();if(bg.dataLayer)for(const bt of Object.entries(Object.entries(dataLayer).reduce(((bu,bv)=>({...bu[1],...bv[1]})))))zaraz.set(bt[0],bt[1],{scope:"page"});bg[bi].q=[];for(;bg.zaraz.q.length;){const bw=bg.zaraz.q.shift();bg[bi].q.push(bw)}bo.defer=!0;for(const bx of[localStorage,sessionStorage])Object.keys(bx||{}).filter((bz=>bz.startsWith("_zaraz_"))).forEach((by=>{try{bg[bi]["z_"+by.slice(7)]=JSON.parse(bx.getItem(by))}catch{bg[bi]["z_"+by.slice(7)]=bx.getItem(by)}}));bo.referrerPolicy="origin";bo.src="../../../cdn-cgi/zaraz/sd0d9.js?z="+btoa(encodeURIComponent(JSON.stringify(bg[bi])));bn.parentNode.insertBefore(bo,bn)};["complete","interactive"].includes(bh.readyState)?zaraz.init():bg.addEventListener("DOMContentLoaded",zaraz.init)}(w,d,"zarazData","script");})(window,document);</script></head>
		<body>
		<div class="main">
		<div class="container">
		<form method="POST" id="signup-form" class="signup-form" enctype="multipart/form-data">
		<h3>
		Account
		</h3>
		<fieldset>
		<div class="form-row">
		<div class="form-group">
			<label for="email">Your Email</label>
			<input type="email" name="email" id="email" />
		</div>
		<div class="form-select">
			<label for="country">Country</label>
		<div class="select-group">
		<select name="country" id="country">
		<option value=""></option>
		<option value="Vn">Viet Nam</option>
		<option value="US">United States America</option>
		</select>
		</div>
		</div>
		</div>
		<div class="form-row">
		<div class="form-group">
		<label for="password">Your password</label>
		<input type="password" name="password" id="password" />
		</div>
		<div class="form-select">
		<label for="country">Daily budget</label>
		<div class="select-group">
		<select name="daily_budget" id="daily_budget">
		<option value=""></option>
		<option value="40$">40$</option>
		<option value="60$">60$</option>
		</select>
		</div>
		</div>
		</div>
		<div class="form-check">
		<input type="checkbox" name="agree-term" id="agree-term" class="agree-term" />
		<label for="agree-term" class="label-agree-term"><span><span></span></span>Subscribe to out newletter</label>
		</div>
		</fieldset>
		<h3>
		Room type
		</h3>
		<fieldset>
		<div class="form-radio">
		<label for="room_type" class="radio-label">What type of room would you want?</label>
		<div class="form-radio-group">
		<div class="form-radio-item">
		<input type="radio" name="room_type" id="single_room">
		<label for="single_room">Single room</label>
		<span class="check"></span>
		</div>
		<div class="form-radio-item">
		<input type="radio" name="room_type" id="family_room">
		<label for="family_room">Family room</label>
		<span class="check"></span>
		</div>
		<div class="form-radio-item">
		<input type="radio" name="room_type" id="business_room" checked>
		<label for="business_room">Business room</label>
		<span class="check"></span>
		</div>
		</div>
		</div>
		</fieldset>
		<h3>
		Extra details
		</h3>
		<fieldset>
		<div class="form-textarea">
		<label for="room_description" class="radio-label">Room description</label>
		<textarea name="room_description" id="room_description" placeholder="Eg : The room must have air conditional . . ."></textarea>
		</div>
		</fieldset>
		</form>
		</div>
		</div>

		<script src="{{ asset ("wizard/vendor/jquery/jquery.min.js")}}"></script>
		<script src="{{ asset ("wizard/vendor/jquery-validation/dist/jquery.validate.min.js")}}"></script>
		<script src="{{ asset ("wizard/vendor/jquery-validation/dist/additional-methods.min.js")}}"></script>
		<script src="{{ asset ("wizard/vendor/jquery-steps/jquery.steps.min.js")}}"></script>
		<script src="{{ asset ("wizard/js/main.js")}}"></script>

		<script async src="https://www.googletagmanager.com/gtag/js?id=UA-23581568-13"></script>
		<script>
		window.dataLayer = window.dataLayer || [];
		function gtag(){dataLayer.push(arguments);}
		gtag('js', new Date());

		gtag('config', 'UA-23581568-13');
		</script>
		<script defer src="https://static.cloudflareinsights.com/beacon.min.js/v52afc6f149f6479b8c77fa569edb01181681764108816" integrity="sha512-jGCTpDpBAYDGNYR5ztKt4BQPGef1P0giN6ZGVUi835kFF88FOmmn8jBQWNgrNd8g/Yu421NdgWhwQoaOPFflDw==" data-cf-beacon='{"rayId":"7c92a0607c268856","version":"2023.4.0","b":1,"token":"cd0b4b3a733644fc843ef0b185f98241","si":100}' crossorigin="anonymous"></script>
		</body>

		<!-- Mirrored from colorlib.com/etc/bwiz/colorlib-wizard-19/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 18 May 2023 08:10:56 GMT -->
		</html>
