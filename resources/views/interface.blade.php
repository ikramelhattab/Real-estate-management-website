<html>
	<head>
		<title></title>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
		<meta name="viewport" content="width=device-width">
		<style type="text/css">
			.img-wrap, h1{
				text-align: center;

			}
			.img-wrap a img{
 					display:block;
			}
			.img-wrap > a{
 					display:inline-block;
 					vertical-align: middle;
 					border: 1px solid #555
			}
		</style>
	</head>
	<body>
<h1>WELCOME :D !</h1>
<div class="img-wrap">
		<a href="{{ url('/home') }}"><img src="{{asset('images\locataire.png')}}" height="150" width="150">Locataire</a>
		<a href="{{ url('/dashboard') }}"><img src="{{asset('images\download.png')}}" height="150" width="150">Proprietaire</a>
 </div>
	</body>
</html>
