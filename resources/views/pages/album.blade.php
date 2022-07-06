@extends('layout.app')

@section('content')
    <!-- ========================
       ///// Begin page header /////
       ========================= -->
    <section id="page-header">

        <!-- Begin page header image
        =============================
        * Use class "parallax-1", "parallax-2", "parallax-3", "parallax-4", "parallax-5" or "parallax-6" to enable parallax effect.
        * Use class "fade-out-scroll-3" to enable fade out effect if page scroll.
        -->
        <div class="page-header-image parallax-3 bg-image"
            style="background-image: url(assets/img/misc/page-header-bg-1.jpg); background-position: 50% 50%;">

            <div class="cover bg-transparent-6-dark"></div>

        </div>
        <!-- End page header image -->

        <!-- Begin page header caption
        ===============================
        * Use class "parallax-1", "parallax-2", "parallax-3", "parallax-4", "parallax-5" or "parallax-6" to enable parallax effect.
        * Use class "fade-out-scroll-3" to enable fade out effect if page scroll.
        -->
        <div class="page-header-caption fade-out-scroll-3 parallax-4">
            <h1 class="page-header-title font-alter-1">Outdoor</h1>
            <h2 class="page-header-sub-title">
                Albums list without filter
            </h2>
        </div>
        <!-- End page header caption -->

    </section>
    <!-- End page header -->

    <!-- =================================
       ///// Begin gallery list section /////
       ================================== -->
    <section id="gallery-list-section">
        <div class="container-fluid no-padding">
            <div class="isotope-wrap">

                <!-- Begin isotope
          ===================
          * Use class "gutter-1", "gutter-2" or "gutter-3" to add more space between items.
          * Use class "col-1", "col-2", "col-3", "col-4", "col-5" or "col-6" for columns.
          -->
                <div class="isotope col-4 gutter-2">

                    <!-- Begin isotope items wrap
           ==============================
           * Use class "gli-alter-1", "gli-alter-2" or "gli-alter-3" to change gallery list item style.
           -->
                    <div class="isotope-items-wrap">

                        <!-- Grid sizer (do not remove!!!) -->
                        <div class="grid-sizer"></div>


                        <!-- =====================
            /// Begin isotope item ///
            ==========================
            * If you use background image on isotope-item child element, then you need to use class "iso-height-1" or "iso-height-2" to set the item height. If you use simple image tag, then don't use height classes.
            -->
                        <div class="isotope-item iso-height-1">

                            <!-- Begin gallery list item -->
                            <a href="gallery-single.html" class="gallery-list-item">

                                <!-- Gallery list item image -->
                                <div class="gl-item-image bg-image"
                                    style="background-image: url(assets/img/gallery/gallery-list/gallery-list-1.jpg); background-position: 50% 50%">
                                </div>

                                <!-- Begin gallery list item info -->
                                <div class="gl-item-info">
                                    <div class="gl-item-caption">
                                        <h2 class="gl-item-title">African Natural Parks</h2>
                                        <span class="gl-item-category">Outdoor</span>
                                    </div>
                                    <span class="gl-item-count" title="Pictures count"><i class="fas fa-camera"></i>
                                        21</span>
                                </div>
                                <!-- End gallery list item info -->

                            </a>
                            <!-- End gallery list item -->

                        </div>
                        <!-- End isotope item -->

                        <!-- =====================
            /// Begin isotope item ///
            ==========================
            * If you use background image on isotope-item child element, then you need to use class "iso-height-1" or "iso-height-2" to set the item height. If you use simple image tag, then don't use height classes.
            -->
                        <div class="isotope-item iso-height-1">

                            <!-- Begin gallery list item -->
                            <a href="gallery-single.html" class="gallery-list-item">

                                <!-- Gallery list item image -->
                                <div class="gl-item-image bg-image"
                                    style="background-image: url(assets/img/gallery/gallery-list/gallery-list-2.jpg); background-position: 50% 50%">
                                </div>

                                <!-- Begin gallery list item info -->
                                <div class="gl-item-info">
                                    <div class="gl-item-caption">
                                        <h2 class="gl-item-title">These Wonderful Freckles</h2>
                                        <span class="gl-item-category">Black &amp; White</span>
                                    </div>
                                    <span class="gl-item-count" title="Pictures count"><i class="fas fa-camera"></i>
                                        43</span>
                                </div>
                                <!-- End gallery list item info -->

                            </a>
                            <!-- End gallery list item -->

                        </div>
                        <!-- End isotope item -->

                        <!-- =====================
            /// Begin isotope item ///
            ==========================
            * If you use background image on isotope-item child element, then you need to use class "iso-height-1" or "iso-height-2" to set the item height. If you use simple image tag, then don't use height classes.
            -->
                        <div class="isotope-item iso-height-1">

                            <!-- Begin gallery list item -->
                            <a href="gallery-single.html" class="gallery-list-item">

                                <!-- Gallery list item image -->
                                <div class="gl-item-image bg-image"
                                    style="background-image: url(assets/img/gallery/gallery-list/gallery-list-3.jpg); background-position: 50% 50%">
                                </div>

                                <!-- Begin gallery list item info -->
                                <div class="gl-item-info">
                                    <div class="gl-item-caption">
                                        <h2 class="gl-item-title">Paris Fashion Week</h2>
                                        <span class="gl-item-category">Fashion</span>
                                    </div>
                                    <span class="gl-item-count" title="Pictures count"><i class="fas fa-camera"></i>
                                        117</span>
                                </div>
                                <!-- End gallery list item info -->

                            </a>
                            <!-- End gallery list item -->

                        </div>
                        <!-- End isotope item -->

                        <!-- =====================
            /// Begin isotope item ///
            ==========================
            * If you use background image on isotope-item child element, then you need to use class "iso-height-1" or "iso-height-2" to set the item height. If you use simple image tag, then don't use height classes.
            -->
                        <div class="isotope-item iso-height-1">

                            <!-- Begin gallery list item -->
                            <a href="gallery-single.html" class="gallery-list-item">

                                <!-- Gallery list item image -->
                                <div class="gl-item-image bg-image"
                                    style="background-image: url(assets/img/gallery/gallery-list/gallery-list-4.jpg); background-position: 40% 50%">
                                </div>

                                <!-- Begin gallery list item info -->
                                <div class="gl-item-info">
                                    <div class="gl-item-caption">
                                        <h2 class="gl-item-title">Afternoon Photoshoot</h2>
                                        <span class="gl-item-category">Outdoor</span>
                                    </div>
                                    <span class="gl-item-count" title="Pictures count"><i class="fas fa-camera"></i>
                                        9</span>
                                </div>
                                <!-- End gallery list item info -->

                            </a>
                            <!-- End gallery list item -->

                        </div>
                        <!-- End isotope item -->

                        <!-- =====================
            /// Begin isotope item ///
            ==========================
            * If you use background image on isotope-item child element, then you need to use class "iso-height-1" or "iso-height-2" to set the item height. If you use simple image tag, then don't use height classes.
            -->
                        <div class="isotope-item iso-height-1">

                            <!-- Begin gallery list item -->
                            <a href="gallery-single.html" class="gallery-list-item">

                                <!-- Gallery list item image -->
                                <div class="gl-item-image bg-image"
                                    style="background-image: url(assets/img/gallery/gallery-list/gallery-list-5.jpg); background-position: 50% 50%">
                                </div>

                                <!-- Begin gallery list item info -->
                                <div class="gl-item-info">
                                    <div class="gl-item-caption">
                                        <h2 class="gl-item-title">Sit Back and Relax</h2>
                                        <span class="gl-item-category">Portraits</span>
                                    </div>
                                    <span class="gl-item-count" title="Pictures count"><i class="fas fa-camera"></i>
                                        237</span>
                                </div>
                                <!-- End gallery list item info -->

                            </a>
                            <!-- End gallery list item -->

                        </div>
                        <!-- End isotope item -->

                        <!-- =====================
            /// Begin isotope item ///
            ==========================
            * If you use background image on isotope-item child element, then you need to use class "iso-height-1" or "iso-height-2" to set the item height. If you use simple image tag, then don't use height classes.
            -->
                        <div class="isotope-item iso-height-1">

                            <!-- Begin gallery list item -->
                            <a href="gallery-single.html" class="gallery-list-item">

                                <!-- Gallery list item image -->
                                <div class="gl-item-image bg-image"
                                    style="background-image: url(assets/img/gallery/gallery-list/gallery-list-6.jpg); background-position: 50% 50%">
                                </div>

                                <!-- Begin gallery list item info -->
                                <div class="gl-item-info">
                                    <div class="gl-item-caption">
                                        <h2 class="gl-item-title">Something In The Water vol.2</h2>
                                        <span class="gl-item-category">Fashion, Outdoor</span>
                                    </div>
                                    <span class="gl-item-count" title="Pictures count"><i class="fas fa-camera"></i>
                                        31</span>
                                </div>
                                <!-- End gallery list item info -->

                            </a>
                            <!-- End gallery list item -->

                        </div>
                        <!-- End isotope item -->

                        <!-- =====================
            /// Begin isotope item ///
            ==========================
            * If you use background image on isotope-item child element, then you need to use class "iso-height-1" or "iso-height-2" to set the item height. If you use simple image tag, then don't use height classes.
            -->
                        <div class="isotope-item iso-height-1">

                            <!-- Begin gallery list item -->
                            <a href="gallery-single.html" class="gallery-list-item">

                                <!-- Gallery list item image -->
                                <div class="gl-item-image bg-image"
                                    style="background-image: url(assets/img/gallery/gallery-list/gallery-list-7.jpg); background-position: 50% 50%">
                                </div>

                                <!-- Begin gallery list item info -->
                                <div class="gl-item-info">
                                    <div class="gl-item-caption">
                                        <h2 class="gl-item-title">Autumn Nights</h2>
                                        <span class="gl-item-category">Outdoor</span>
                                    </div>
                                    <span class="gl-item-count" title="Pictures count"><i class="fas fa-camera"></i>
                                        18</span>
                                </div>
                                <!-- End gallery list item info -->

                            </a>
                            <!-- End gallery list item -->

                        </div>
                        <!-- End isotope item -->

                        <!-- =====================
            /// Begin isotope item ///
            ==========================
            * If you use background image on isotope-item child element, then you need to use class "iso-height-1" or "iso-height-2" to set the item height. If you use simple image tag, then don't use height classes.
            -->
                        <div class="isotope-item iso-height-1">

                            <!-- Begin gallery list item -->
                            <a href="gallery-single.html" class="gallery-list-item">

                                <!-- Gallery list item image -->
                                <div class="gl-item-image bg-image"
                                    style="background-image: url(assets/img/gallery/gallery-list/gallery-list-8.jpg); background-position: 50% 50%">
                                </div>

                                <!-- Begin gallery list item info -->
                                <div class="gl-item-info">
                                    <div class="gl-item-caption">
                                        <h2 class="gl-item-title">Beauty &amp; Fashion</h2>
                                        <span class="gl-item-category">Fashion</span>
                                    </div>
                                    <span class="gl-item-count" title="Pictures count"><i class="fas fa-camera"></i>
                                        177</span>
                                </div>
                                <!-- End gallery list item info -->

                            </a>
                            <!-- End gallery list item -->

                        </div>
                        <!-- End isotope item -->

                        <!-- =====================
            /// Begin isotope item ///
            ==========================
            * If you use background image on isotope-item child element, then you need to use class "iso-height-1" or "iso-height-2" to set the item height. If you use simple image tag, then don't use height classes.
            -->
                        <div class="isotope-item iso-height-1">

                            <!-- Begin gallery list item -->
                            <a href="gallery-single.html" class="gallery-list-item">

                                <!-- Gallery list item image -->
                                <div class="gl-item-image bg-image"
                                    style="background-image: url(assets/img/gallery/gallery-list/gallery-list-9.jpg); background-position: 50% 50%">
                                </div>

                                <!-- Begin gallery list item info -->
                                <div class="gl-item-info">
                                    <div class="gl-item-caption">
                                        <h2 class="gl-item-title">No Colors This Time</h2>
                                        <span class="gl-item-category">Black &amp; White</span>
                                    </div>
                                    <span class="gl-item-count" title="Pictures count"><i class="fas fa-camera"></i>
                                        225</span>
                                </div>
                                <!-- End gallery list item info -->

                            </a>
                            <!-- End gallery list item -->

                        </div>
                        <!-- End isotope item -->

                        <!-- =====================
            /// Begin isotope item ///
            ==========================
            * If you use background image on isotope-item child element, then you need to use class "iso-height-1" or "iso-height-2" to set the item height. If you use simple image tag, then don't use height classes.
            -->
                        <div class="isotope-item iso-height-1">

                            <!-- Begin gallery list item -->
                            <a href="gallery-single.html" class="gallery-list-item">

                                <!-- Gallery list item image -->
                                <div class="gl-item-image bg-image"
                                    style="background-image: url(assets/img/gallery/gallery-list/gallery-list-10.jpg); background-position: 50% 50%">
                                </div>

                                <!-- Begin gallery list item info -->
                                <div class="gl-item-info">
                                    <div class="gl-item-caption">
                                        <h2 class="gl-item-title">Monday's Monochromes</h2>
                                        <span class="gl-item-category">Outdoor</span>
                                    </div>
                                    <span class="gl-item-count" title="Pictures count"><i class="fas fa-camera"></i>
                                        36</span>
                                </div>
                                <!-- End gallery list item info -->

                            </a>
                            <!-- End gallery list item -->

                        </div>
                        <!-- End isotope item -->

                        <!-- =====================
            /// Begin isotope item ///
            ==========================
            * If you use background image on isotope-item child element, then you need to use class "iso-height-1" or "iso-height-2" to set the item height. If you use simple image tag, then don't use height classes.
            -->
                        <div class="isotope-item iso-height-1">

                            <!-- Begin gallery list item -->
                            <a href="gallery-single.html" class="gallery-list-item">

                                <!-- Gallery list item image -->
                                <div class="gl-item-image bg-image"
                                    style="background-image: url(assets/img/gallery/gallery-list/gallery-list-11.jpg); background-position: 50% 50%">
                                </div>

                                <!-- Begin gallery list item info -->
                                <div class="gl-item-info">
                                    <div class="gl-item-caption">
                                        <h2 class="gl-item-title">Something In The Water</h2>
                                        <span class="gl-item-category">Fashion, Portraits</span>
                                    </div>
                                    <span class="gl-item-count" title="Pictures count"><i class="fas fa-camera"></i>
                                        83</span>
                                </div>
                                <!-- End gallery list item info -->

                            </a>
                            <!-- End gallery list item -->

                        </div>
                        <!-- End isotope item -->

                        <!-- =====================
            /// Begin isotope item ///
            ==========================
            * If you use background image on isotope-item child element, then you need to use class "iso-height-1" or "iso-height-2" to set the item height. If you use simple image tag, then don't use height classes.
            -->
                        <div class="isotope-item iso-height-1">

                            <!-- Begin gallery list item -->
                            <a href="gallery-single.html" class="gallery-list-item">

                                <!-- Gallery list item image -->
                                <div class="gl-item-image bg-image"
                                    style="background-image: url(assets/img/gallery/gallery-list/gallery-list-12.jpg); background-position: 50% 50%">
                                </div>

                                <!-- Begin gallery list item info -->
                                <div class="gl-item-info">
                                    <div class="gl-item-caption">
                                        <h2 class="gl-item-title">Almost Naked</h2>
                                        <span class="gl-item-category">Outdoor, Fashion</span>
                                    </div>
                                    <span class="gl-item-count" title="Pictures count"><i class="fas fa-camera"></i>
                                        24</span>
                                </div>
                                <!-- End gallery list item info -->

                            </a>
                            <!-- End gallery list item -->

                        </div>
                        <!-- End isotope item -->

                    </div>
                    <!-- End isotope items wrap -->

                </div>
                <!-- End isotope -->

            </div> <!-- /.isotope-wrap -->

        </div> <!-- /.container -->
    </section>
    <!-- End gallery list section -->
@endsection
