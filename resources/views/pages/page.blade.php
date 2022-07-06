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
            style="background-image: url({{ asset('frontend/img/misc/page-header-bg-1.jpg') }}); background-position: 50% 50%;">

            <div class="cover bg-transparent-6-dark"></div>

        </div>
        <!-- End page header image -->

        <!-- Begin page header caption
            ===============================
            * Use class "parallax-1", "parallax-2", "parallax-3", "parallax-4", "parallax-5" or "parallax-6" to enable parallax effect.
            * Use class "fade-out-scroll-3" to enable fade out effect if page scroll.
            -->
        <div class="page-header-caption fade-out-scroll-3 parallax-4">
            <h1 class="page-header-title font-alter-1">Page</h1>
            <h2 class="page-header-sub-title">
                Dummy page with a page header
            </h2>
        </div>
        <!-- End page header caption -->

    </section>
    <!-- End page header -->


    <!-- =========================
           ///// Begin page section /////
           ========================== -->
    <section id="page-section">
        <div class="container-fluid">
            <div class="ps-page-simple">
                <div class="row max-width-1200 margin-auto">
                    <div class="col-md-8 margin-bottom-40">

                        <h3>Your Content Here</h3>

                        <p>Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae;
                            Sed viverra rhoncus placerat. Quisque sed auctor turpis. Etiam elementum malesuada
                            felis, sit amet aliquet nibh laoreet et.</p>

                        <p>Nunc pellentesque erat metus, euismod feugiat purus semper ut. Quisque rutrum, nibh quis
                            blandit lacinia, nibh lorem condimentum neque, quis vestibulum mi felis non lectus. Ut
                            at lectus euismod, pharetra libero quis, vestibulum est. Fusce et velit sed augue
                            rhoncus tempor. Sed ac lacinia augue, nec lacinia felis. Sed sit amet diam leo. Praesent
                            vel malesuada arcu. Donec mattis, arcu vel vehicula feugiat, sem turpis dignissim ex, eu
                            sollicitudin neque massa eget ante. In hac habitasse platea dictumst. Pellentesque non
                            interdum dolor, et imperdiet metus. Phasellus et posuere justo. Donec quis enim eu ex
                            tincidunt rhoncus sit amet et libero.</p>

                        <blockquote>Non mauris nullam. Wisi gravida quis quisque mattis dolor. Etiam sociis turpis
                            nesciunt sed lacus sed hendrerit diam. Accumsan varius venenatis arcu maecenas nulla.
                            Aliquet tempus lobortis. Tortor nibh erat vel gravida est accumsan ut ad. Orci malesuada
                            morbi. Luctus pharetra lectus.</blockquote>

                        <p>Morbi malesuada feugiat nisl. Donec dapibus felis vitae vestibulum laoreet. Quisque
                            scelerisque, nisl at ornare rutrum, orci purus convallis ipsum, et tincidunt ligula est
                            vel turpis. Nunc at finibus elit, vel fringilla ligula. Duis accumsan nibh eget mauris
                            elementum porttitor. Aliquam erat volutpat. Quisque rutrum vulputate metus non aliquet.
                            Nullam vulputate scelerisque tortor nec porttitor.</p>

                        <p>Nunc scelerisque bibendum laoreet. Aenean eleifend quam a dui ullamcorper bibendum.
                            Maecenas blandit at odio nec tempus. Integer nec elit ac nunc aliquam commodo.
                            Pellentesque sed tincidunt neque, in tempor turpis.</p>

                        <p>:)</p>

                    </div> <!-- /.col -->

                    <div class="col-md-4">

                        <p><img src="{{ asset('frontend/img/misc/misc-1.jpg') }}" alt="Image"></p>

                        <p>Donec mattis, arcu vel vehicula feugiat, sem turpis dignissim ex, eu sollicitudin neque
                            massa eget ante. In hac habitasse platea dictumst. Pellentesque non interdum dolor, et
                            imperdiet metus.</p>

                    </div> <!-- /.col -->
                </div> <!-- /.row -->
            </div> <!-- /.ps-page-simple -->
        </div> <!-- /.container -->

    </section>
    <!-- End page section -->
@endsection
