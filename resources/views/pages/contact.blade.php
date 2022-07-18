@extends('layout.app')

@section('content') 
    <!-- ========================================
           ///// Begin split box section (contact) /////
           ========================================= -->
    <section id="contact-section" class="split-box">
        <div class="container-fluid">
            <div class="row">
                <div class="row-lg-height full-height-vh">

                    <!-- Column -->
                    <div class="col-lg-6 col-lg-height col-lg-middle bg-image"
                        style="background-image: url({{ asset('frontend/img/misc/misc-4.jpg') }}); background-position: 50% 50%;">

                        <!-- Element cover -->
                        <div class="cover"></div>

                        <!-- Begin split box content -->
                        <div class="split-box-content text-left no-padding-left no-padding-right">

                            <!-- Begin contact info -->
                            <div class="contact-info-wrap">
                                <div class="contact-info">
                                    <p><i class="fas fa-home"></i> address: 121 King Street, Melbourne, Australia
                                    </p>
                                    <p><i class="fas fa-phone-alt"></i> phone: +123 456 789 000</p>
                                    <p><i class="far fa-envelope"></i> email: <a href="mailto:company@email.com"
                                            target="_blank">company@email.com</a></p>
                                </div>

                                <!-- Begin social buttons -->
                                <div class="social-buttons margin-top-20">
                                    <ul>
                                        <li><a href="#" class="btn btn-social-min btn-dark-bordered btn-rounded-full"
                                                target="_blank" title="Follow me on facebook"><i
                                                    class="fab fa-facebook-f"></i></a></li>
                                        <li><a href="#" class="btn btn-social-min btn-dark-bordered btn-rounded-full"
                                                target="_blank" title="Follow me on twitter"><i
                                                    class="fab fa-twitter"></i></a></li>
                                        <li><a href="#" class="btn btn-social-min btn-dark-bordered btn-rounded-full"
                                                target="_blank" title="Follow me on dribbble"><i
                                                    class="fab fa-dribbble"></i></a></li>
                                        <li><a href="#" class="btn btn-social-min btn-dark-bordered btn-rounded-full"
                                                target="_blank" title="Follow me on behance"><i
                                                    class="fab fa-behance"></i></a></li>
                                        <li><a href="#" class="btn btn-social-min btn-dark-bordered btn-rounded-full"
                                                target="_blank" title="Follow me on youtube"><i
                                                    class="fab fa-youtube"></i></a></li>
                                    </ul>
                                </div>
                                <!-- End social buttons -->

                            </div>
                            <!-- End contact info -->

                        </div>
                        <!-- End split box content -->

                    </div> <!-- /.col -->

                    <!-- Column -->
                    <div class="col-lg-6 col-lg-height col-lg-middle no-padding">

                        <!-- Begin split box content -->
                        <div class="split-box-content">

                            <!-- Begin contact form
                 ========================= -->
                            <form id="contact-form">
                                <div class="contact-form-inner text-left">

                                    <div class="contact-form-info">
                                        <h1 class="contact-form-title font-alter-1">Get In Touch</h1>
                                        <p>Sollicitudin diam vitae, amet lacus donec eu, donec vulputate duis nullam
                                            nulla, suscipit nulla orci, ornare maecenas eget gravida. Curae
                                            sollicitudin lobortis.</p>
                                    </div>

                                    <!-- Begin hidden required fields (https://github.com/agragregra/uniMail) -->
                                    <input type="hidden" name="project_name" value="yourwebsiteaddress.com">
                                    <!-- Change value to your site name -->
                                    <input type="hidden" name="admin_email" value="your@email.com">
                                    <!-- Change value to your valid email address (where a message will be sent) -->
                                    <input type="hidden" name="form_subject" value="Message from yourwebsiteaddress.com">
                                    <!-- Change value to your own message subject -->
                                    <!-- End Hidden Required Fields -->

                                    <div class="row">
                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <input type="text" class="form-control" name="name"
                                                    placeholder="Your Name" required>
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <input type="email" class="form-control" name="email"
                                                    placeholder="Your Email" required>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <div class="form-group">
                                                <input type="text" class="form-control" name="subject"
                                                    placeholder="Subject" required>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- <div class="row">
                    <div class="col-lg-12">
                     <div class="form-group">
                      <select class="form-control" required>
                       <option value="" disabled selected>Select an option</option>
                       <option value="say hello">Say hello</option>
                       <option value="new project">New project</option>
                       <option value="feedback">Feedback</option>
                       <option value="other">Other</option>
                      </select>
                     </div>
                    </div>
                   </div> -->
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <div class="form-group">
                                                <textarea class="form-control" name="message" rows="4" placeholder="Your Message" required></textarea>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="small text-gray"><em>* All fields are required!</em></div>

                                </div> <!-- /.contact-form-inner -->

                                <div class="row">
                                    <div class="col-lg-12">
                                        <button type="submit" class="btn btn-primary btn-lg btn-block margin-top-40">Send
                                            Message</button>
                                    </div>
                                </div>
                            </form>
                            <!-- End contact form -->

                        </div>
                        <!-- End split box content -->

                    </div> <!-- /.col -->
                </div> <!-- /.row-height -->
            </div> <!-- /.row -->

            <div class="row">
                <div class="col-lg-12 no-padding">

                    <!-- Begin custom Google Map
               =============================
               * Tutorial: https://developers.google.com/maps/documentation/javascript/tutorial
               * Styles: https://snazzymaps.com/
               -->
                    {{-- <div id="map"></div> --}}

                    <div class="mapouter">
                        <div class="gmap_canvas"><iframe class="gmap_iframe" width="100%" frameborder="0"
                                scrolling="no" marginheight="0" marginwidth="0"
                                src="https://maps.google.com/maps?width=1800&amp;height=300&amp;hl=en&amp;q=tork&amp;t=p&amp;z=14&amp;ie=UTF8&amp;iwloc=B&amp;output=embed"></iframe><a
                                href="https://www.kokagames.com/fnf-friday-night-funkin-mods/">Friday Night Funkin Mods</a>
                        </div>
                        <style>
                            .mapouter {
                                position: relative;
                                text-align: right;
                                width: 100%;
                                height: 300px;
                            }

                            .gmap_canvas {
                                overflow: hidden;
                                background: none !important;
                                width: 100%;
                                height: 300px;
                            }

                            .gmap_iframe {
                                height: 300px !important;
                            }
                        </style>
                    </div>
                    <!-- End custom Google Map -->

                </div> <!-- /.col -->
            </div> <!-- /.row -->

        </div> <!-- /.container -->
    </section>
    <!-- End split box section -->
@endsection
