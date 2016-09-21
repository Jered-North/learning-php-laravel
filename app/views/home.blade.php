<!doctype html>
<html lang="en">
<head>

	@section('head')

	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">


	<link rel="stylesheet" type="text/css" href="../css/main.css">
	<link rel="stylesheet" type="text/css" href="../css/mobile.css">
	<link rel="icon" href="http://vgnewz.com/wp-content/uploads/2016/02/cropped-1905-sony-playstation-blue-game-gaming-favicon.png">

	<title>GameCraze</title>

	@show

</head>
<body>
	
	@include('header')

<div class="container">

	@section('body')

	<div class="main-block">
		<img src="../img/xbox-360.jpg">
		<p>Get the all <br>NEW<br> game system for only <br> $499.99</p>
	</div>

	<section class="ads">

		<div class="apply-now-ad">
			<p>Apply Now!</p>
		</div>

		<div class="other-ad">
			<p>Save <strong>20%</strong> off select items</p>
		</div>

	</section>

	<section class="featured">

		<div class="featured-title">
			<p>Featured Games</p>
		</div>

    @foreach($games as $game)
		<div class="featured-game">
			<h1 class="featured-game-name"> {{$game->name}} </h1>
			<img src="../img/{{$game->name}}.jpg" class="featured-game-image">
			<div class="featured-game-summary">
				<p class="featured-game-description"> {{$game->description}}.</p>
				<p class="featured-game-price"> Price: ${{$game->price}}.00</p>
			</div>
		</div>
    @endforeach

    @show

</div>

	@include('footer')

	<script src="https://code.jquery.com/jquery-2.2.4.min.js"></script>
    <script src="https://code.jquery.com/ui/1.11.4/jquery-ui.min.js"></script>
    <script src="../js/animation.js"></script>
    
</body>
</html>
