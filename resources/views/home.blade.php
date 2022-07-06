@extends('layout.app')

@section('content')
    <!-- =================================
       ///// Begin gallery list section /////
       ================================== -->
    <section id="gallery-list-section" class="gallery-list-slideshow">
        <div class="container-fluid no-padding bg-dark">

            <!-- Begin content carousel (http://www.owlcarousel.owlgraphic.com)
         ====================================================================
         * Use class "nav-outside" for outside nav (requires boxed layout).
         * Use class "nav-outside-top" for outside top nav (requires enough space at the top of the slider).
         * Use class "nav-bottom-right" for bottom right nav.
         * Use class "nav-rounded" for rounded nav.
         * Use class "nav-light" to enable nav light style.
         * Use class "dots-outside" for outside dots (requires enough space at the bottom of the slider).
         * Use class "dots-left", "dots-right" or "dots-center-right" to align dots.
         * Use class "dots-rounded" for rounded dots.
         * Use class "owl-mousewheel" to enable mousewheel support.
         * Use class "cursor-grab" to enable cursor grab icon (no effect on links!).
         * Use class "cc-hover" or "cc-hover-2" to enable carousel items hover effect.
         * Use class "cc-height-1", "cc-height-2", "cc-height-3", "cc-height-4", "cc-height-5", "cc-height-6" or "cc-height-full" to set carousel height.
         * Use class "cc-height-m" to set full height for small screens.
         ================================================================
            <div class="owl-carousel cc-height-full cursor-grab nav-bottom-right" data-items="1" data-loop="true"
                data-autoplay="true" data-autoplay-timeout="10000" data-dots="false" data-nav="true"
                data-animate-in="fadeIn" data-animate-out="fadeOut">

                <!-- Begin carousel item
          ========================= -->
                <div class="cc-item bg-image"
                    style="background-image: url({{ asset('frontend/img/gallery/gallery-list/slideshow/gallery-slideshow-5.jpg') }}); background-position: 50% 30%;">

                    <!-- Element cover -->
                    <span class="cover bg-transparent-2-dark"></span>

                    <!-- Begin caption
           ===================
           * Position classes: "top-left", "top-center", "top-right", "center-left", "center", "center-right", "bottom-left", "bottom-center", "bottom-right".
           * Size classes: "cc-caption-xs", "cc-caption-sm", "cc-caption-lg", "cc-caption-xl".
           -->
                    <div class="cc-caption cc-caption-xlg center caption-animate max-width-600">
                        <!-- max width class is optional -->
                        <h2 class="cc-title font-alter-1">Old Photos</h2>
                        <p class="cc-description">
                            Sed at placerat odio, duis leo dui, porta in rutrum sit amet consequat. Donec vu duis
                            nullam nulla.
                        </p>
                        <div class="margin-top-30">
                            <a href="gallery-single.html" class="btn btn-primary margin-top-5">View Project</a>
                            <a href="contact.html" class="btn btn-white-bordered margin-top-5">Contact Me</a>
                        </div>
                    </div>
                    <!-- End caption -->

                </div>
                <!-- End carousel item -->

                <!-- Begin carousel item
          ========================= -->
                <div class="cc-item bg-image"
                    style="background-image: url({{ asset('frontend/img/gallery/gallery-list/slideshow/gallery-slideshow-6.jpg') }}); background-position: 50% 50%;">

                    <!-- Element cover -->
                    <span class="cover bg-transparent-2-dark"></span>

                    <!-- Begin caption
           ===================
           * Position classes: "top-left", "top-center", "top-right", "center-left", "center", "center-right", "bottom-left", "bottom-center", "bottom-right".
           * Size classes: "cc-caption-xs", "cc-caption-sm", "cc-caption-lg", "cc-caption-xl".
           -->
                    <div class="cc-caption cc-caption-xlg center caption-animate max-width-600">
                        <!-- max width class is optional -->
                        <h2 class="cc-title font-alter-1">Mother Nature</h2>
                        <p class="cc-description">
                            Sed at placerat odio, duis leo dui, porta in rutrum sit amet consequat. Donec vu duis
                            nullam nulla.
                        </p>
                        <div class="margin-top-30">
                            <a href="gallery-single.html" class="btn btn-primary margin-top-5">View Project</a>
                            <a href="contact.html" class="btn btn-white-bordered margin-top-5">Contact Me</a>
                        </div>
                    </div>
                    <!-- End caption -->

                </div>
                <!-- End carousel item -->

                <!-- Begin carousel item
          ========================= -->
                <div class="cc-item bg-image"
                    style="background-image: url({{ asset('frontend/img/gallery/gallery-list/slideshow/gallery-slideshow-7.jpg') }}); background-position: 50% 50%;">

                    <!-- Element cover -->
                    <span class="cover bg-transparent-2-dark"></span>

                    <!-- Begin caption
           ===================
           * Position classes: "top-left", "top-center", "top-right", "center-left", "center", "center-right", "bottom-left", "bottom-center", "bottom-right".
           * Size classes: "cc-caption-xs", "cc-caption-sm", "cc-caption-lg", "cc-caption-xl".
           -->
                    <div class="cc-caption cc-caption-xlg center caption-animate max-width-600">
                        <!-- max width class is optional -->
                        <h2 class="cc-title font-alter-1">Fashion Photo Shoot</h2>
                        <p class="cc-description">
                            Sed at placerat odio, duis leo dui, porta in rutrum sit amet consequat. Donec vu duis
                            nullam nulla.
                        </p>
                        <div class="margin-top-30">
                            <a href="gallery-single.html" class="btn btn-primary margin-top-5">View Project</a>
                            <a href="contact.html" class="btn btn-white-bordered margin-top-5">Contact Me</a>
                        </div>
                    </div>
                    <!-- End caption -->

                </div>
                <!-- End carousel item -->

                <!-- Begin carousel item
          ========================= -->
                <div class="cc-item bg-image"
                    style="background-image: url({{ asset('frontend/img/gallery/gallery-list/slideshow/gallery-slideshow-8.jpg') }}); background-position: 50% 50%;">

                    <!-- Element cover -->
                    <span class="cover bg-transparent-2-dark"></span>

                    <!-- Begin caption
           ===================
           * Position classes: "top-left", "top-center", "top-right", "center-left", "center", "center-right", "bottom-left", "bottom-center", "bottom-right".
           * Size classes: "cc-caption-xs", "cc-caption-sm", "cc-caption-lg", "cc-caption-xl".
           -->
                    <div class="cc-caption cc-caption-xlg center caption-animate max-width-600">
                        <!-- max width class is optional -->
                        <h2 class="cc-title font-alter-1">Black &amp; White</h2>
                        <p class="cc-description">
                            Sed at placerat odio, duis leo dui, porta in rutrum sit amet consequat. Donec vu duis
                            nullam nulla.
                        </p>
                        <div class="margin-top-30">
                            <a href="gallery-single.html" class="btn btn-primary margin-top-5">View Project</a>
                            <a href="contact.html" class="btn btn-white-bordered margin-top-5">Contact Me</a>
                        </div>
                    </div>
                    <!-- End caption -->

                </div>
                <!-- End carousel item -->

                <!-- Begin carousel item
          ========================= -->
                <!-- <div class="cc-item">
            
           <a class="owl-video" href="https://vimeo.com/99653121"></a>

           <div class="cc-caption cc-caption-xlg center caption-animate max-width-600">
            <h2 class="cc-title font-alter-1">Beauty &amp; Fashion</h2>
            <p class="cc-description">
             Sed at placerat odio, duis leo dui, porta in rutrum sit amet consequat. Donec vu duis nullam nulla.
            </p>
            <a href="gallery-single.html" class="btn btn-primary margin-top-25">View Project</a>
           </div>
           
          </div> -->
                <!-- End carousel item -->

            </div>
            <!-- End content carousel -->

        </div> <!-- /.container -->
    </section>
    <!-- End gallery list section -->
@endsection
