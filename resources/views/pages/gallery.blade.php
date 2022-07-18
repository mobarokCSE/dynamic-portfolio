@extends('layout.app')

@section('content')

		<!-- ===================================
			///// Begin gallery single section /////
			==================================== -->
		<section id="gallery-single-section">
			<div class="container-fluid no-padding">

				<!-- Begin gallery single top info 
					=================================== 
					* If you use isotope gutters you can set margins to "gallery-single-top-info" as well. Simply add class "margin-1", "margin-2" or "margin-3".
					-->
				<div class="gallery-single-top-info margin-2">
					<div class="container-fluid gsti-inner max-width-1000">

						<!-- Begin gallery single top info toggle -->
						<div class="gsti-toggle">
							<div class="gsti-toggle-inner">

								<h2 class="gsti-title font-alter-1">Single Album</h2>
								<span class="gsti-category">Nature</span>
								<div class="gsti-text">
									<p>Fusce imperdiet, arcu non tempor aliquam, justo tortor cursus est, sed facilisis
										eros purus et felis. Sed eros sapien, iaculis eget gravida euismod, dapibus
										vitae turpis. Pellentesque egestas odio mi, vitae egestas massa elementum ut.
										Cras dolor dui, consequat quis dui vitae, commodo fermentum risus. </p>
								</div>

								<!-- Begin portfolio single info hidden -->
								<div class="gsti-toggle-hidden">
									<p>Quisque eget felis lobortis ligula placerat venenatis gravida in diam. Cum sociis
										natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.
										Aliquam magna risus, dignissim et tincidunt nec, fringilla non ligula. Morbi
										vulputate tincidunt fringilla. Donec bibendum erat urna, eget consequat nulla
										rutrum eu. Suspendisse vehicula aliquet auctor. Sed vel pretium lacus. <a
											href="blog-single.html">Read blog post!</a></p>
								</div>
								<!-- End portfolio single info hidden -->

							</div> <!-- /.gsti-toggle-inner -->

							<!-- Begin doggle trigger -->
							<div class="gsti-toggle-trigger">
								<span class="gsti-toggle-more" title="Show more..."><i
										class="fas fa-angle-down"></i></span>
								<span class="gsti-toggle-less" title="Show less"><i class="fas fa-angle-up"></i></span>
							</div>
							<!-- End doggle trigger -->

						</div>
						<!-- End gallery single top info toggle -->

					</div> <!-- /.gsti-inner -->

					<!-- Begin gallery meta -->
					<ul class="gallery-meta">
						<li>
							<!-- Begin favorite button -->
							<div class="favorite-btn">
								<div class="fav-inner">
									<div class="icon-heart">
										<span class="icon-heart-empty"></span>
										<span class="icon-heart-filled"></span>
									</div>
								</div>
								<div class="fav-count">56</div>
							</div>
							<!-- End favorite button -->
						</li>
						<li>
							<!-- Begin content share trigger  -->
							<div class="content-share-trigger">
								<a href="#0" class="content-share-icon" title="Share this album" data-toggle="modal"
									data-target="#modal-38874978">
									<i class="fas fa-share-alt"></i>
								</a>
							</div>
							<!-- End content share trigger -->

							<!-- Begin modal (for content share) 
								=====================================
								* Use class "modal-center" to enable modal center position.
								-->
							<div id="modal-38874978" class="modal modal-center fade" tabindex="-1" role="dialog"
								aria-hidden="false">
								<div class="modal-dialog">
									<div class="modal-content">
										<div class="modal-header">
											<button type="button" class="close" data-dismiss="modal"
												aria-label="Close"><span aria-hidden="true">×</span></button>
											<h4 class="modal-title">Share This Album</h4>
										</div>
										<div class="modal-body">

											<!-- Begin modal share -->
											<div class="modal-share">
												<div class="modal-share-image"
													style="background-image: url({{ asset('frontend/img/gallery/gallery-single/grid/gallery-single-1.jpg') }})">
												</div>

												<!-- Begin social buttons -->
												<div class="social-buttons">
													<ul>
														<li><a href="#0"
																class="btn btn-social-min btn-facebook btn-rounded-full"
																title="Share on facebook"><i
																	class="fab fa-facebook-f"></i></a></li>
														<li><a href="#0"
																class="btn btn-social-min btn-twitter btn-rounded-full"
																title="Share on twitter"><i
																	class="fab fa-twitter"></i></a></li>
														<li><a href="#0"
																class="btn btn-social-min btn-google btn-rounded-full"
																title="Share on google+"><i
																	class="fab fa-google-plus-g"></i></a></li>
														<li><a href="#0"
																class="btn btn-social-min btn-pinterest btn-rounded-full"
																title="Share on pinterest"><i
																	class="fab fa-pinterest"></i></a></li>
														<li><a href="#0"
																class="btn btn-social-min btn-linkedin btn-rounded-full"
																title="Share on linkedin"><i
																	class="fab fa-linkedin-in"></i></a></li>
													</ul>
												</div>
												<!-- End social buttons -->

												<input class="grab-link" type="text" readonly=""
													value="https://your-site.com/your-album-link/"
													onclick="this.select()">
											</div>
											<!-- End modal share -->

										</div>
										<div class="modal-footer hide">
											<!-- remove class "hide" if you want to use modal footer -->
											Copyright 2016 / All rights reserved
										</div>
									</div> <!-- /.modal-content -->
								</div> <!-- /.modal-dialog -->
							</div>
							<!-- End modal -->
						</li>
					</ul>
					<!-- End gallery meta -->

				</div>
				<!-- End gallery single top info -->

				<div class="isotope-wrap">

					<!-- Begin isotope
						===================
						* Use class "gutter-1", "gutter-2" or "gutter-3" to add more space between items.
						* Use class "col-1", "col-2", "col-3", "col-4", "col-5" or "col-6" for columns.
						-->
					<div class="isotope col-4 gutter-2">

						<!-- Begin isotope items wrap 
							==============================
							* Use classes "cover-boxed", "cover-dark", "cover-color", "cover-simple" to change gallery single item cover variations.
							-->
						<div id="gallery" class="isotope-items-wrap lightgallery cover-color">

							<!-- Grid sizer (do not remove!!!) -->
							<div class="grid-sizer"></div>


							<!-- ===================== 
								/// Begin isotope item ///
								========================== 
								* If you use background image on isotope-item child element, then you need to use class "iso-height-1" or "iso-height-2" to set the item height. If you use simple image tag, then don't use height classes.
								-->
							<div class="isotope-item iso-height-1">

								<!-- Begin gallery single item -->
								<a href="assets/img/gallery/gallery-single/grid/big/gallery-single-big-1.jpg"
									class="gallery-single-item lg-trigger"
									data-exthumbnail="frontend/img/gallery/gallery-single/grid/thumb/gallery-single-thumb-1.jpg"
									data-sub-html="<h4>Image Description</h4><p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>">
									<div class="gs-item-image bg-image"
										style="background-image: url({{ asset('frontend/img/gallery/gallery-single/grid/gallery-single-1.jpg') }}); background-position: 50% 50%">
									</div>
									<div class="gs-item-cover">
										<div class="gs-item-info">
											<span class="s-icon"><i class="fas fa-search"></i></span>
										</div>
									</div>
								</a>
								<!-- End gallery single item -->

							</div>
							<!-- End isotope item -->

							<!-- ===================== 
								/// Begin isotope item ///
								========================== 
								* If you use background image on isotope-item child element, then you need to use class "iso-height-1" or "iso-height-2" to set the item height. If you use simple image tag, then don't use height classes.
								-->
							<div class="isotope-item iso-height-2">

								<!-- Begin gallery single item -->
								<a href="assets/img/gallery/gallery-single/grid/big/gallery-single-big-2.jpg"
									class="gallery-single-item lg-trigger"
									data-exthumbnail="assets/img/gallery/gallery-single/grid/thumb/gallery-single-thumb-2.jpg">
									<div class="gs-item-image bg-image"
										style="background-image: url({{ asset('frontend/img/gallery/gallery-single/grid/gallery-single-2.jpg') }}); background-position: 50% 50%">
									</div>
									<div class="gs-item-cover">
										<div class="gs-item-info">
											<span class="s-icon"><i class="fas fa-search"></i></span>
										</div>
									</div>
								</a>
								<!-- End gallery single item -->

							</div>
							<!-- End isotope item -->

							<!-- ===================== 
								/// Begin isotope item ///
								========================== 
								* If you use background image on isotope-item child element, then you need to use class "iso-height-1" or "iso-height-2" to set the item height. If you use simple image tag, then don't use height classes.
								-->
							<div class="isotope-item iso-height-1">

								<!-- Begin gallery single item -->
								<a href="https://www.youtube.com/watch?v=meBbDqAXago"
									class="gallery-single-item lg-trigger">
									<div class="gs-item-image bg-image"
										style="background-image: url({{ asset('frontend/img/gallery/gallery-single/grid/gallery-single-3.jpg') }}); background-position: 50% 50%">
									</div>
									<div class="gs-item-cover">
										<div class="gs-item-info">
											<span class="s-icon"><i class="fas fa-play"></i></span>
										</div>
									</div>
								</a>
								<!-- End gallery single item -->

							</div>
							<!-- End isotope item -->

							<!-- ===================== 
								/// Begin isotope item ///
								========================== 
								* If you use background image on isotope-item child element, then you need to use class "iso-height-1" or "iso-height-2" to set the item height. If you use simple image tag, then don't use height classes.
								-->
							<div class="isotope-item iso-height-1">

								<!-- Begin gallery single item -->
								<a href="assets/img/gallery/gallery-single/grid/big/gallery-single-big-4.jpg"
									class="gallery-single-item lg-trigger"
									data-exthumbnail="assets/img/gallery/gallery-single/grid/thumb/gallery-single-thumb-4.jpg">
									<div class="gs-item-image bg-image"
										style="background-image: url({{ asset('frontend/img/gallery/gallery-single/grid/gallery-single-4.jpg') }}); background-position: 50% 50%">
									</div>
									<div class="gs-item-cover">
										<div class="gs-item-info">
											<span class="s-icon"><i class="fas fa-search"></i></span>
										</div>
									</div>
								</a>
								<!-- End gallery single item -->

							</div>
							<!-- End isotope item -->

							<!-- ===================== 
								/// Begin isotope item ///
								========================== 
								* If you use background image on isotope-item child element, then you need to use class "iso-height-1" or "iso-height-2" to set the item height. If you use simple image tag, then don't use height classes.
								-->
							<div class="isotope-item iso-height-1">

								<!-- Begin gallery single item -->
								<a href="https://vimeo.com/20047720" class="gallery-single-item lg-trigger">
									<div class="gs-item-image bg-image"
										style="background-image: url({{ asset('frontend/img/gallery/gallery-single/grid/gallery-single-5.jpg') }}); background-position: 50% 50%">
									</div>
									<div class="gs-item-cover">
										<div class="gs-item-info">
											<span class="s-icon"><i class="fas fa-play"></i></span>
										</div>
									</div>
								</a>
								<!-- End gallery single item -->

							</div>
							<!-- End isotope item -->

							<!-- ===================== 
								/// Begin isotope item ///
								========================== 
								* If you use background image on isotope-item child element, then you need to use class "iso-height-1" or "iso-height-2" to set the item height. If you use simple image tag, then don't use height classes.
								-->
							<div class="isotope-item iso-height-1">

								<!-- Begin gallery single item -->
								<a href="assets/img/gallery/gallery-single/grid/big/gallery-single-big-6.jpg"
									class="gallery-single-item lg-trigger"
									data-exthumbnail="assets/img/gallery/gallery-single/grid/thumb/gallery-single-thumb-6.jpg">
									<div class="gs-item-image bg-image"
										style="background-image: url({{ asset('frontend/img/gallery/gallery-single/grid/gallery-single-6.jpg') }}); background-position: 50% 50%">
									</div>
									<div class="gs-item-cover">
										<div class="gs-item-info">
											<span class="s-icon"><i class="fas fa-search"></i></span>
										</div>
									</div>
								</a>
								<!-- End gallery single item -->

							</div>
							<!-- End isotope item -->

							<!-- ===================== 
								/// Begin isotope item ///
								========================== 
								* If you use background image on isotope-item child element, then you need to use class "iso-height-1" or "iso-height-2" to set the item height. If you use simple image tag, then don't use height classes.
								-->
							<div class="isotope-item iso-height-1">

								<!-- Begin gallery single item -->
								<a href="assets/img/gallery/gallery-single/grid/big/gallery-single-big-7.jpg"
									class="gallery-single-item lg-trigger"
									data-exthumbnail="assets/img/gallery/gallery-single/grid/thumb/gallery-single-thumb-7.jpg">
									<div class="gs-item-image bg-image"
										style="background-image: url({{ asset('frontend/img/gallery/gallery-single/grid/gallery-single-7.jpg') }}); background-position: 50% 50%">
									</div>
									<div class="gs-item-cover">
										<div class="gs-item-info">
											<span class="s-icon"><i class="fas fa-search"></i></span>
										</div>
									</div>
								</a>
								<!-- End gallery single item -->

							</div>
							<!-- End isotope item -->

							<!-- ===================== 
								/// Begin isotope item ///
								========================== 
								* If you use background image on isotope-item child element, then you need to use class "iso-height-1" or "iso-height-2" to set the item height. If you use simple image tag, then don't use height classes.
								-->
							<div class="isotope-item iso-height-1">

								<!-- Begin gallery single item -->
								<a href="assets/img/gallery/gallery-single/grid/big/gallery-single-big-8.jpg"
									class="gallery-single-item lg-trigger"
									data-exthumbnail="assets/img/gallery/gallery-single/grid/thumb/gallery-single-thumb-8.jpg">
									<div class="gs-item-image bg-image"
										style="background-image: url({{ asset('frontend/img/gallery/gallery-single/grid/gallery-single-8.jpg') }}); background-position: 50% 50%">
									</div>
									<div class="gs-item-cover">
										<div class="gs-item-info">
											<span class="s-icon"><i class="fas fa-search"></i></span>
										</div>
									</div>
								</a>
								<!-- End gallery single item -->

							</div>
							<!-- End isotope item -->

							<!-- ===================== 
								/// Begin isotope item ///
								========================== 
								* If you use background image on isotope-item child element, then you need to use class "iso-height-1" or "iso-height-2" to set the item height. If you use simple image tag, then don't use height classes.
								-->
							<div class="isotope-item iso-height-1">

								<!-- Begin gallery single item -->
								<a href="assets/img/gallery/gallery-single/grid/big/gallery-single-big-9.jpg"
									class="gallery-single-item lg-trigger"
									data-exthumbnail="assets/img/gallery/gallery-single/grid/thumb/gallery-single-thumb-9.jpg">
									<div class="gs-item-image bg-image"
										style="background-image: url({{ asset('frontend/img/gallery/gallery-single/grid/gallery-single-9.jpg') }}); background-position: 50% 50%">
									</div>
									<div class="gs-item-cover">
										<div class="gs-item-info">
											<span class="s-icon"><i class="fas fa-search"></i></span>
										</div>
									</div>
								</a>
								<!-- End gallery single item -->

							</div>
							<!-- End isotope item -->

							<!-- ===================== 
								/// Begin isotope item ///
								========================== 
								* If you use background image on isotope-item child element, then you need to use class "iso-height-1" or "iso-height-2" to set the item height. If you use simple image tag, then don't use height classes.
								-->
							<div class="isotope-item iso-height-1">

								<!-- Begin gallery single item -->
								<a href="assets/img/gallery/gallery-single/grid/big/gallery-single-big-10.jpg"
									class="gallery-single-item lg-trigger"
									data-exthumbnail="assets/img/gallery/gallery-single/grid/thumb/gallery-single-thumb-10.jpg">
									<div class="gs-item-image bg-image"
										style="background-image: url({{ asset('frontend/img/gallery/gallery-single/grid/gallery-single-10.jpg') }}); background-position: 50% 50%">
									</div>
									<div class="gs-item-cover">
										<div class="gs-item-info">
											<span class="s-icon"><i class="fas fa-search"></i></span>
										</div>
									</div>
								</a>
								<!-- End gallery single item -->

							</div>
							<!-- End isotope item -->

							<!-- ===================== 
								/// Begin isotope item ///
								========================== 
								* If you use background image on isotope-item child element, then you need to use class "iso-height-1" or "iso-height-2" to set the item height. If you use simple image tag, then don't use height classes.
								-->
							<div class="isotope-item iso-height-1">

								<!-- Begin gallery single item -->
								<a href="assets/img/gallery/gallery-single/grid/big/gallery-single-big-11.jpg"
									class="gallery-single-item lg-trigger"
									data-exthumbnail="assets/img/gallery/gallery-single/grid/thumb/gallery-single-thumb-11.jpg">
									<div class="gs-item-image bg-image"
										style="background-image: url({{ asset('frontend/img/gallery/gallery-single/grid/gallery-single-11.jpg') }}); background-position: 50% 50%">
									</div>
									<div class="gs-item-cover">
										<div class="gs-item-info">
											<span class="s-icon"><i class="fas fa-search"></i></span>
										</div>
									</div>
								</a>
								<!-- End gallery single item -->

							</div>
							<!-- End isotope item -->

							<!-- ===================== 
								/// Begin isotope item ///
								========================== 
								* If you use background image on isotope-item child element, then you need to use class "iso-height-1" or "iso-height-2" to set the item height. If you use simple image tag, then don't use height classes.
								-->
							<div class="isotope-item iso-height-2">

								<!-- Begin gallery single item -->
								<a href="assets/img/gallery/gallery-single/grid/big/gallery-single-big-12.jpg"
									class="gallery-single-item lg-trigger"
									data-exthumbnail="assets/img/gallery/gallery-single/grid/thumb/gallery-single-thumb-12.jpg">
									<div class="gs-item-image bg-image"
										style="background-image: url({{ asset('frontend/img/gallery/gallery-single/grid/gallery-single-12.jpg') }}); background-position: 50% 50%">
									</div>
									<div class="gs-item-cover">
										<div class="gs-item-info">
											<span class="s-icon"><i class="fas fa-search"></i></span>
										</div>
									</div>
								</a>
								<!-- End gallery single item -->

							</div>
							<!-- End isotope item -->

							<!-- ===================== 
								/// Begin isotope item ///
								========================== 
								* If you use background image on isotope-item child element, then you need to use class "iso-height-1" or "iso-height-2" to set the item height. If you use simple image tag, then don't use height classes.
								-->
							<div class="isotope-item iso-height-1">

								<!-- Begin gallery single item -->
								<a href="assets/img/gallery/gallery-single/grid/big/gallery-single-big-13.jpg"
									class="gallery-single-item lg-trigger"
									data-exthumbnail="assets/img/gallery/gallery-single/grid/thumb/gallery-single-thumb-13.jpg">
									<div class="gs-item-image bg-image"
										style="background-image: url({{ asset('frontend/img/gallery/gallery-single/grid/gallery-single-13.jpg') }}); background-position: 50% 50%">
									</div>
									<div class="gs-item-cover">
										<div class="gs-item-info">
											<span class="s-icon"><i class="fas fa-search"></i></span>
										</div>
									</div>
								</a>
								<!-- End gallery single item -->

							</div>
							<!-- End isotope item -->

							<!-- ===================== 
								/// Begin isotope item ///
								========================== 
								* If you use background image on isotope-item child element, then you need to use class "iso-height-1" or "iso-height-2" to set the item height. If you use simple image tag, then don't use height classes.
								-->
							<div class="isotope-item iso-height-2">

								<!-- Begin gallery single item -->
								<a href="assets/img/gallery/gallery-single/grid/big/gallery-single-big-14.jpg"
									class="gallery-single-item lg-trigger"
									data-exthumbnail="assets/img/gallery/gallery-single/grid/thumb/gallery-single-thumb-14.jpg">
									<div class="gs-item-image bg-image"
										style="background-image: url({{ asset('frontend/img/gallery/gallery-single/grid/gallery-single-14.jpg') }}); background-position: 50% 50%">
									</div>
									<div class="gs-item-cover">
										<div class="gs-item-info">
											<span class="s-icon"><i class="fas fa-search"></i></span>
										</div>
									</div>
								</a>
								<!-- End gallery single item -->

							</div>
							<!-- End isotope item -->

							<!-- ===================== 
								/// Begin isotope item ///
								========================== 
								* If you use background image on isotope-item child element, then you need to use class "iso-height-1" or "iso-height-2" to set the item height. If you use simple image tag, then don't use height classes.
								-->
							<div class="isotope-item iso-height-1">

								<!-- Begin gallery single item -->
								<a href="assets/img/gallery/gallery-single/grid/big/gallery-single-big-15.jpg"
									class="gallery-single-item lg-trigger"
									data-exthumbnail="assets/img/gallery/gallery-single/grid/thumb/gallery-single-thumb-15.jpg">
									<div class="gs-item-image bg-image"
										style="background-image: url({{ asset('frontend/img/gallery/gallery-single/grid/gallery-single-15.jpg') }}); background-position: 50% 50%">
									</div>
									<div class="gs-item-cover">
										<div class="gs-item-info">
											<span class="s-icon"><i class="fas fa-search"></i></span>
										</div>
									</div>
								</a>
								<!-- End gallery single item -->

							</div>
							<!-- End isotope item -->

							<!-- ===================== 
								/// Begin isotope item ///
								========================== 
								* If you use background image on isotope-item child element, then you need to use class "iso-height-1" or "iso-height-2" to set the item height. If you use simple image tag, then don't use height classes.
								-->
							<div class="isotope-item iso-height-1">

								<!-- Begin gallery single item -->
								<a href="assets/img/gallery/gallery-single/grid/big/gallery-single-big-16.jpg"
									class="gallery-single-item lg-trigger"
									data-exthumbnail="assets/img/gallery/gallery-single/grid/thumb/gallery-single-thumb-16.jpg">
									<div class="gs-item-image bg-image"
										style="background-image: url({{ asset('frontend/img/gallery/gallery-single/grid/gallery-single-16.jpg') }}); background-position: 50% 50%">
									</div>
									<div class="gs-item-cover">
										<div class="gs-item-info">
											<span class="s-icon"><i class="fas fa-search"></i></span>
										</div>
									</div>
								</a>
								<!-- End gallery single item -->

							</div>
							<!-- End isotope item -->

							<!-- ===================== 
								/// Begin isotope item ///
								========================== 
								* If you use background image on isotope-item child element, then you need to use class "iso-height-1" or "iso-height-2" to set the item height. If you use simple image tag, then don't use height classes.
								-->
							<div class="isotope-item iso-height-1">

								<!-- Begin gallery single item -->
								<a href="assets/img/gallery/gallery-single/grid/big/gallery-single-big-17.jpg"
									class="gallery-single-item lg-trigger"
									data-exthumbnail="assets/img/gallery/gallery-single/grid/thumb/gallery-single-thumb-17.jpg">
									<div class="gs-item-image bg-image"
										style="background-image: url({{ asset('frontend/img/gallery/gallery-single/grid/gallery-single-17.jpg') }}); background-position: 50% 50%">
									</div>
									<div class="gs-item-cover">
										<div class="gs-item-info">
											<span class="s-icon"><i class="fas fa-search"></i></span>
										</div>
									</div>
								</a>
								<!-- End gallery single item -->

							</div>
							<!-- End isotope item -->

						</div>
						<!-- End isotope items wrap -->

					</div>
					<!-- End isotope -->

				</div> <!-- /.isotope-wrap -->

			</div> <!-- /.container -->
		</section>
		<!-- End gallery single section -->

@endsection