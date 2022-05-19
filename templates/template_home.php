<?php
    /**
    * Template Name: Home LandPage
    */
?>

<?php get_header(); ?>

	<header class="header">
		<div class="container">
			<div class="row site-title">
				<h1>NAME SITE</h1>
			</div>
		</div>
	</header>

	<main class="d-flex flex-column min-vh-100">
		<div class="card">
			<div class="container">
				<div class="row">
					<h1>Some text here<br>...<br>...<br>...</h1>
				</div>
				<div class="row justify-content-md-center">
					<video controls>
                        <source src="<?php echo get_stylesheet_directory_uri().'/assets/movies/movielink.mp4'?>" type="video/mp4">
                        Your browser does not support the video tag.
                    </video>
				</div>
				<div class="row justify-content-md-center">
					<button type="button" class="btn_base" onclick="" >GO FOR ?</button>
				</div>
				<div class="row">
					<p>Some text here<br>...<br>...<br>...</p>
				</div>
			</div>
		</div>
	</main>

	<footer class="bg-light text-center text-lg-start mt-auto">
		<!-- Copyright -->
		<div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
			© 2022 Copyright:
			<a class="text-dark" href="https://github.com/MarceloATabone/basic_landpage_matabone">github.com/MarceloATabone/</a>
		</div>
		<!-- Copyright -->
	</footer>
<?php get_footer(); ?>
