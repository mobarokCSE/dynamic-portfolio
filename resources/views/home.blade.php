@extends('layout.app')

@section('content')
    <!-- ==========================
			///// Begin intro section /////
			=========================== -->
			<section id="intro-section" class="image-intro full-height-vh bg-image" style="background-image: url({{ asset('frontend/img/gallery/gallery-list/slideshow/gallery-slideshow-5.jpg') }}); background-position: 50% 50%;">

				<!-- Element cover -->
				<div class="cover bg-transparent-2-dark"></div>

				<!-- Begin intro caption 
				=========================
				* Use class "top-left", "top-center", "top-right", "center-left", "center", "center-right", "bottom-left", "bottom-center" or "bottom-right" to set caption position.
				-->
				<div class="intro-caption center">
					<h1 class="intro-title font-alter-2">FreeBird</h1>
					<h2 class="intro-subtitle font-alter-2">Creative Photo Studio</h2>

					<p class="intro-description hide-from-sm">Maecenas tempor viverra rutrum. Integer quis eros in libero molestie vulputate ut et orci. Integer condimentum imperdiet maximus. Curabitur vestibulum ultricies elementum.</p>

					<div class="margin-top-30">
						<a href="gallery-list-striped-categories.html" class="btn btn-primary margin-top-5">View My Work</a>
						<a href="contact.html" class="btn btn-white-bordered margin-top-5">Contact Me</a>
					</div>
				</div>
				<!-- End intro caption -->
				
			</section>
			<!-- End intro section -->
@endsection
