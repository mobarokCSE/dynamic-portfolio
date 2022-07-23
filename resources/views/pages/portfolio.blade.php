@extends('layout.app')

@section('content')
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

                    <!-- Begin isotope filter -->
                    <div class="isotope-filter">
                        <div class="isotope-filter-button">
                            <span class="ifb-icon"><i class="fas fa-sliders-h"></i></span>
                            <span class="ifb-icon-close"><i class="fas fa-times"></i></span>
                            <!-- effect on small screens!) -->
                        </div>
                        <ul class="isotope-filter-links">
                            <li><a href="#" class="active" data-filter="*">Show All</a></li>
                            <li><a href="#" data-filter=".fashion">Fashion</a></li>
                            <li><a href="#" data-filter=".portraits">Portraits</a></li>
                            <li><a href="#" data-filter=".black-and-white">Black &amp; White</a></li>
                            <li><a href="#" data-filter=".outdoor">Outdoor</a></li>
                        </ul>
                    </div>
                    <!-- End isotope filter -->

                    <!-- Begin isotope items wrap
           ==============================
           * Use class "gli-alter-1", "gli-alter-2" or "gli-alter-3" to change gallery list item style.
           -->
                    <div class="isotope-items-wrap gli-alter-3">

                        <!-- Grid sizer (do not remove!!!) -->
                        <div class="grid-sizer"></div>


                        <!-- =====================
            /// Begin isotope item ///
            ==========================
            * If you use background image on isotope-item child element, then you need to use class "iso-height-1" or "iso-height-2" to set the item height. If you use simple image tag, then don't use height classes.
            -->
                        <div class="isotope-item outdoor iso-height-1">

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
                        <div class="isotope-item black-and-white iso-height-2">

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
                        <div class="isotope-item fashion iso-height-1">

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
                        <div class="isotope-item outdoor iso-height-2">

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
                        <div class="isotope-item portraits iso-height-1">

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
                        <div class="isotope-item fashion outdoor iso-height-1">

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
                        <div class="isotope-item outdoor iso-height-2">

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
                        <div class="isotope-item fashion iso-height-1">

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
                        <div class="isotope-item black-and-white iso-height-1">

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
                        <div class="isotope-item outdoor iso-height-1">

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
                        <div class="isotope-item fashion portraits iso-height-2">

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
                        <div class="isotope-item outdoor fashion iso-height-2">

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

                        <!-- =====================
            /// Begin isotope item ///
            ==========================
            * If you use background image on isotope-item child element, then you need to use class "iso-height-1" or "iso-height-2" to set the item height. If you use simple image tag, then don't use height classes.
            -->
                        <div class="isotope-item outdoor fashion iso-height-1">

                            <!-- Begin gallery list item -->
                            <a href="gallery-single.html" class="gallery-list-item">

                                <!-- Gallery list item image -->
                                <div class="gl-item-image bg-image"
                                    style="background-image: url(assets/img/gallery/gallery-list/gallery-list-13.jpg); background-position: 50% 50%">
                                </div>

                                <!-- Begin gallery list item info -->
                                <div class="gl-item-info">
                                    <div class="gl-item-caption">
                                        <h2 class="gl-item-title">My Super Awesome Album</h2>
                                        <span class="gl-item-category">Outdoor, Fashion</span>
                                    </div>
                                    <span class="gl-item-count" title="Pictures count"><i class="fas fa-camera"></i>
                                        65</span>
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
                        <div class="isotope-item portraits iso-height-1">

                            <!-- Begin gallery list item -->
                            <a href="gallery-single.html" class="gallery-list-item">

                                <!-- Gallery list item image -->
                                <div class="gl-item-image bg-image"
                                    style="background-image: url(assets/img/gallery/gallery-list/gallery-list-14.jpg); background-position: 50% 20%">
                                </div>

                                <!-- Begin gallery list item info -->
                                <div class="gl-item-info">
                                    <div class="gl-item-caption">
                                        <h2 class="gl-item-title">One Day Fashion Shoot With Ordinary People</h2>
                                        <span class="gl-item-category">Portraits</span>
                                    </div>
                                    <span class="gl-item-count" title="Pictures count"><i class="fas fa-camera"></i>
                                        153</span>
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
                        <div class="isotope-item outdoor iso-height-1">

                            <!-- Begin gallery list item -->
                            <a href="gallery-single.html" class="gallery-list-item">

                                <!-- Gallery list item image -->
                                <div class="gl-item-image bg-image"
                                    style="background-image: url(assets/img/gallery/gallery-list/gallery-list-15.jpg); background-position: 50% 50%">
                                </div>

                                <!-- Begin gallery list item info -->
                                <div class="gl-item-info">
                                    <div class="gl-item-caption">
                                        <h2 class="gl-item-title">Sunny Beach &amp; Sunglasses</h2>
                                        <span class="gl-item-category">Outdoor</span>
                                    </div>
                                    <span class="gl-item-count" title="Pictures count"><i class="fas fa-camera"></i>
                                        79</span>
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
