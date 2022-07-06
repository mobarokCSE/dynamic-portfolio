@extends('layout.app')

@section('content')
    <!-- =============================
           ///// Begin about me section /////
           ============================== -->
    <section id="about-me-section">

        <!-- ======================
            ///// Begin split box /////
            based on: http://www.minimit.com/articles/solutions-tutorials/bootstrap-3-responsive-columns-of-same-height
            ======================= -->
        <div class="split-box about-me">
            <div class="container-fluid">
                <div class="row">
                    <div class="row-lg-height">

                        <!-- Column -->
                        <div class="col-lg-6 col-lg-height split-box-image no-padding bg-image"
                            style="background-image: url({{ asset('frontend/img/misc/me-1.jpg') }}); background-position: 50% 50%;">

                            <!-- Split box image height
                 ============================
                 * You can use prepared "padding-height-*" helper classes to set split box image height. Example: "padding-height-85" (useful if "split-box-content" contend/text is very short). Also you can use class "full-height-vh" for full height image. Find out "helper.css" file for more info. Note: class "sbi-height" is required.
                 -->
                            <div class="sbi-height padding-height-100"></div>

                        </div> <!-- /.col -->

                        <!-- Column -->
                        <div class="col-lg-6 col-lg-height col-lg-middle no-padding">

                            <!-- Begin split box content
                 =============================
                 * Use class "shifted-left" or "shifted-right" to enable shifted content (do not use for long content).
                 -->
                            <div class="split-box-content shifted-left">
                                <h1 class="about-me-title">Who I am?</h1>
                                <div class="about-me-sub">Artist &amp; Photographer</div>

                                <div class="about-me-text">
                                    <p>Hi, my name is Martin Vegas. I am an artist and photographer. Sollicitudin
                                        diam vitae, amet lacus donec eu, donec vulputate duis nullam nulla, suscipit
                                        nulla orci, ornare maecenas eget gravida. Curae sollicitudin lobortis.</p>
                                </div>

                                <!-- Begin follow me buttons -->
                                <div class="follow-me-buttons margin-top-30">
                                    <ul>
                                        <li><a href="" title="Follow me on Facebook" target="_blank"><i
                                                    class="fab fa-facebook-f"></i></a></li>
                                        <li><a href="" title="Follow me on Twitter" target="_blank"><i
                                                    class="fab fa-twitter"></i></a></li>
                                        <li><a href="" title="Follow me on Instagram" target="_blank"><i
                                                    class="fab fa-instagram"></i></a></li>
                                        <li><a href="mailto:info@your-email.com" title="Email Me" target="_blank"><i
                                                    class="far fa-envelope"></i></a></li>
                                    </ul>
                                </div>
                                <!-- End follow me buttons -->

                            </div>
                            <!-- End split box content -->

                        </div> <!-- /.col -->

                    </div> <!-- /.row-height -->
                </div> <!-- /.row -->
            </div> <!-- /.container -->
        </div>
        <!-- End split box -->

        <!-- ======================
            ///// Begin split box /////
            based on: http://www.minimit.com/articles/solutions-tutorials/bootstrap-3-responsive-columns-of-same-height
            ======================= -->
        <div class="split-box what-i-do">
            <div class="container-fluid">
                <div class="row">
                    <div class="row-lg-height">

                        <!-- Column -->
                        <div class="col-lg-6 col-lg-push-6 col-lg-height split-box-image no-padding bg-image"
                            style="background-image: url({{ asset('frontend/img/misc/me-2.jpg') }}); background-position: 50% 50%;">

                            <!-- Split box image height
                 ============================
                 * You can use prepared "padding-height-*" helper classes to set split box image height. Example: "padding-height-85" (useful if "split-box-content" contend/text is very short). Also you can use class "full-height-vh" for full height image. Find out "helper.css" file for more info. Note: class "sbi-height" is required.
                 -->
                            <div class="sbi-height padding-height-100"></div>

                        </div> <!-- /.col -->

                        <!-- Column -->
                        <div class="col-lg-6 col-lg-pull-6 col-lg-height col-lg-middle no-padding">

                            <!-- Begin split box content
                 =============================
                 * Use class "shifted-left" or "shifted-right" to enable shifted content (do not use for long content).
                 -->
                            <div class="split-box-content shifted-right">
                                <h1 class="about-me-title">What I Do?</h1>
                                <div class="about-me-sub">A little bit of my work</div>

                                <div class="about-me-text">
                                    <p>Pellentesque nec convallis nisi, in mollis nulla. Aliquam eget elit risus.
                                        Quisque vitae commodo libero, eu efficitur ligula. Cras vulputate arcu id
                                        interdum pretium. Cras eu blandit massa, at semper est. Curabitur id blandit
                                        purus. Curabitur egestas, lacus quis facilisis tempor.</p>
                                </div>
                                <a href="gallery-list-categories.html" class="btn btn-primary margin-top-20">View My
                                    Work</a>
                                <a href="contact.html" class="btn btn-dark-bordered margin-top-20">Contakt Me</a>
                            </div>
                            <!-- End split box content -->

                        </div> <!-- /.col -->

                    </div> <!-- /.row-height -->
                </div> <!-- /.row -->
            </div> <!-- /.container -->
        </div>
        <!-- End split box -->

        <!-- ======================
            ///// Begin split box /////
            based on: http://www.minimit.com/articles/solutions-tutorials/bootstrap-3-responsive-columns-of-same-height
            ======================= -->
        <div class="split-box happy-clients">
            <div class="container-fluid">
                <div class="row">
                    <div class="row-lg-height">

                        <!-- Column -->
                        <div class="col-lg-6 col-lg-height col-lg-middle no-padding bg-dark-2">

                            <!-- Begin clients carousel -->
                            <div class="clients-carousel">

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
                  ====================================================================
                  * Available carousel data attributes:
                    data-items="5".......................(items visible on desktop)
                    data-tablet-landscape="4"............(items visible on mobiles)
                    data-tablet-portrait="3".............(items visible on mobiles)
                    data-mobile-landscape="2"............(items visible on tablets)
                    data-mobile-portrait="1".............(items visible on tablets)
                    data-loop="true".....................(true/false)
                    data-margin="10".....................(space between items)
                    data-center="true"...................(true/false)
                    data-start-position="0"..............(item start position)
                    data-animate-in="fadeIn".............(more animations: http://daneden.github.io/animate.css/)
                    data-animate-out="fadeOut"...........(more animations: http://daneden.github.io/animate.css/)
                    data-mouse-drag="false"..............(true/false)
                    data-touch-drag="false"..............(true/false)
                    data-autoheight="true"...............(true/false)
                    data-autoplay="true".................(true/false)
                    data-autoplay-timeout="5000".........(milliseconds)
                    data-autoplay-hover-pause="true".....(true/false)
                    data-autoplay-speed="800"............(milliseconds)
                    data-drag-end-speed="800"............(milliseconds)
                    data-nav="true"......................(true/false)
                    data-nav-speed="800".................(milliseconds)
                    data-dots="false"....................(true/false)
                    data-dots-speed="800"................(milliseconds)
                  -->
                                <div class="owl-carousel owl-mousewheel" data-items="4" data-margin="30" data-dots="false"
                                    data-loop="true" data-autoplay="true" data-tablet-landscape="3" data-tablet-portrait="4"
                                    data-mobile-landscape="3" data-mobile-portrait="2">

                                    <!-- Begin carousel item -->
                                    <a href="" class="client-image" title="Happy Client">
                                        <img src="{{asset('frontend/img/clients/client-1-light.png')}}" alt="image">
                                    </a>
                                    <!-- End carousel item -->

                                    <!-- Begin carousel item -->
                                    <a href="" class="client-image" title="Happy Client">
                                        <img src="{{asset('frontend/img/clients/client-2-light.png')}}" alt="image">
                                    </a>
                                    <!-- End carousel item -->

                                    <!-- Begin carousel item -->
                                    <a href="" class="client-image" title="Happy Client">
                                        <img src="{{asset('frontend/img/clients/client-3-light.png')}}" alt="image">
                                    </a>
                                    <!-- End carousel item -->

                                    <!-- Begin carousel item -->
                                    <a href="" class="client-image" title="Happy Client">
                                        <img src="{{asset('frontend/img/clients/client-4-light.png')}}" alt="image">
                                    </a>
                                    <!-- End carousel item -->

                                    <!-- Begin carousel item -->
                                    <a href="" class="client-image" title="Happy Client">
                                        <img src="{{asset('frontend/img/clients/client-5-light.png')}}" alt="image">
                                    </a>
                                    <!-- End carousel item -->

                                    <!-- Begin carousel item -->
                                    <a href="" class="client-image" title="Happy Client">
                                        <img src="{{asset('frontend/img/clients/client-6-light.png')}}" alt="image">
                                    </a>
                                    <!-- End carousel item -->

                                    <!-- Begin carousel item -->
                                    <a href="" class="client-image" title="Happy Client">
                                        <img src="{{asset('frontend/img/clients/client-7-light.png')}}" alt="image">
                                    </a>
                                    <!-- End carousel item -->

                                </div>
                                <!-- End content carousel -->

                            </div>
                            <!-- End clients carousel -->

                        </div> <!-- /.col -->

                        <!-- Column -->
                        <div class="col-lg-6 col-lg-height col-lg-middle no-padding">

                            <!-- Begin split box content -->
                            <div class="split-box-content text-center">
                                <h1 class="about-me-title">Happy Clients</h1>

                                <div class="about-me-text">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Possimus inventore
                                        consectetur dolores eius, enim totam eligendi tempore cupiditate molestias
                                        eveniet suscipit quasi quas eaque mollitia velit sunt sed, adipisci optio.
                                        :)</p>
                                </div>
                            </div>
                            <!-- End split box content -->

                        </div> <!-- /.col -->
                    </div> <!-- /.row-height -->
                </div> <!-- /.row -->
            </div> <!-- /.container -->
        </div>
        <!-- End split box -->

    </section>
    <!-- End about me section -->
@endsection
