<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Ecom website</title>

<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>

<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
</head>
<body>
	{{ View::make('header')}}
@section('content')
@show
	{{ View::make('footer')}}

</body>
</html>
<style>
	.custom-form{
		height: 400px;
		padding-top: 90px;
	}
	img.slider-img{
		height:400px !important;
	}
	.product-container{
		height: 500px;
	}
	.slider-text{
		background-color:#abd7e9 !important;
	}
	.trending-img{
		height: 100px;
	}
	.trending-item{
		float: left;
		width: 25%;
	}
	.trending-wrapper{
		margin: 60px 30px;
	}
	.detail-img{
		height:200px;
	}
	.search-box{
		width: 500px !important;
	}
</style>