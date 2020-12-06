@component('components.app')
<x-header />

<div class="bg-white border-bottom">
			<div class="container">
				<div class="page-header">
					<h4 class="page-title">Course Details</h4>
					<ol class="breadcrumb">
						<li class="breadcrumb-item"><a href="#">Home</a></li>
						<li class="breadcrumb-item"><a href="#">Pages</a></li>
						<li class="breadcrumb-item active" aria-current="page">Course Details</li>
					</ol>
				</div>
			</div>
		</div><!--/Breadcrumb-->

		<!--Section-->
		<section class="sptb">
			<div class="container">
				<div class="row">
					<div class="col-xl-8 col-lg-8 col-md-12">
						<!--Coursed Description-->
						<div class="card overflow-hidden">
							<div class="card-body">
								<div class="item-det mb-4">
									<a href="#" class="text-dark"><h3 class="font-weight-semibold">{{$course->title}}</h3></a>
									<div class=" d-flex">
										<ul class="d-flex mb-0">
											<li class="mr-5"><a href="#" class="icons"><i class="icon icon-calendar text-muted mr-1"></i>{{$course->duration}}</a></li>
											<li class="mr-5"><a href="#" class="icons"><i class="icon icon-people text-muted mr-1"></i> 765 Enrolled</a></li>
										</ul>
									</div>
								</div>
								<div class="product-slider">
									<ul class="list-unstyled video-list-thumbs">
										<li class="mb-0">
											<a data-toggle="modal" data-target="#homeVideo" class="class-video p-0">
												<div class="arrow-ribbon bg-primary">20% off</div>
												<img src="../assets/images/media/pictures/17.jpg" alt="img" class="img-responsive br-3">
												<span class="fe fe-play-circle text-white class-icon"></span>
											</a>
										</li>
									</ul>
								</div>
							</div>
						</div>
						<div class="card">
							<div class="card-header">
								<h3 class="card-title">Description</h3>
							</div>
							<div class="card-body">
								<div class="mb-4 description">
									<p>{{$course->description}}</p>
								</div>
							</div>
							<div class="card-footer">
								<div class="icons">
									<a href="#" class="btn btn-primary mb-3 mb-xl-0"><i class="fe fe-credit-card mr-1"></i>Buy This Course</a>
								</div>
							</div>
						</div>
						<!--/Coursed Description-->
					</div>
					<!--Right Side Content-->
					<div class="col-xl-4 col-lg-4 col-md-12">
						<div class="card">
							<div class="card-body">
								<div class="mb-5">
									<div class="text-dark mb-2"><span class="text-dark font-weight-semibold h1">{{$course->price}} SAD</span>
										
									</div>
									<p class="text-danger"><i class="fe fe-clock mr-1"></i>5 days to left of this Price</p>
								</div>
								<div class="">
									<a href="#" class="btn btn-primary btn-lg btn-block">Buy Now</a>
									<a href="#" class="btn btn-secondary btn-lg btn-block">Coursed to Cart</a>
									<a href="#" class="btn btn-info btn-lg btn-block">Trail Now</a>
								</div>
							</div>
						</div>
						<div class="card mb-0">
							<div class="card-header">
								<h3 class="card-title">Latest Technologies</h3>
							</div>
							<div class="card-body pb-5">
								<ul class="vertical-scroll">
									<li class="news-item">
										<table>
											<tr>
												<td><img src="../assets/images/png/1.png" alt="img" class="w-8 border mr-2"/></td>
												<td class="pl-3"><h4 class="mb-1 font-weight-semibold">Data Science</h4><a href="#" class="btn-link">View Details</a><span class="float-right font-weight-bold">$17</span></td>
											</tr>
										</table>
									</li>
									<li class="news-item">
										<table>
											<tr>
												<td><img src="../assets/images/png/2.png" alt="img" class="w-8 border mr-2"/></td>
												<td class="pl-3"><h4 class="mb-1 font-weight-semibold">Java Script</h4><a href="#" class="btn-link">View Details</a><span class="float-right font-weight-bold">$17</span></td>
											</tr>
										</table>
									</li>
									<li class="news-item">
										<table>
											<tr>
												<td><img src="../assets/images/png/3.png" alt="img" class="w-8 border mr-2"/></td>
												<td class="pl-3"><h4 class="mb-1 font-weight-semibold ">Angular</h4><a href="#" class="btn-link">View Details</a><span class="float-right font-weight-bold">$17</span></td>
											</tr>
										</table>
									</li>
									<li class="news-item">
										<table>
											<tr>
												<td><img src="../assets/images/png/4.png" alt="img" class="w-8 border mr-2"/></td>
												<td class="pl-3"><h4 class="mb-1 font-weight-semibold">Jquery</h4><a href="#" class="btn-link">View Details</a><span class="float-right font-weight-bold">$17</span></td>
											</tr>
										</table>
									</li>
									<li class="news-item">
										<table>
											<tr>
												<td><img src="../assets/images/png/5.png" alt="img" class="w-8 border mr-2"/></td>
												<td class="pl-3"><h4  class="mb-1 font-weight-semibold ">Autocad</h4><a href="#" class="btn-link">View Details</a><span class="float-right font-weight-bold">$17</span></td>
											</tr>
										</table>
									</li>
									<li class="news-item">
										<table>
											<tr>
												<td><img src="../assets/images/png/6.png" alt="img" class="w-8 border mr-2"/></td>
												<td class="pl-3"><h4 class="mb-1 font-weight-semibold">HTML</h4><a href="#" class="btn-link">View Details</a><span class="float-right font-weight-bold">$17</span></td>
											</tr>
										</table>
									</li>
									<li class="news-item">
										<table>
											<tr>
												<td><img src="../assets/images/png/8.png" alt="img" class="w-8 border mr-2"/></td>
												<td class="pl-3"><h4 class="mb-1 font-weight-semibold">Frame works</h4><a href="#" class="btn-link">View Details</a><span class="float-right font-weight-bold">$17</span></td>
											</tr>
										</table>
									</li>
								</ul>
							</div>
						</div>
					</div>
					<!--Right Side Content-->
				</div>
			</div>
		</section><!--/Section-->

		<!-- Onlinesletter-->
		<section class="sptb bg-white border-top">
			<div class="container">
				<div class="row">
					<div class="col-lg-7 col-xl-6 col-md-12">
						<div class="sub-newsletter">
							<h3 class="mb-2"><i class="fa fa-paper-plane-o mr-2"></i> Subscribe To Our Onlinesletter</h3>
							<p class="mb-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor</p>
						</div>
					</div>
					<div class="col-lg-5 col-xl-6 col-md-12">
						<div class="input-group sub-input mt-1">
							<input type="text" class="form-control input-lg " placeholder="Enter your Email">
							<div class="input-group-append ">
								<button type="button" class="btn btn-primary btn-lg br-tr-3  br-br-3">
									Subscribe
								</button>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section><!--/Onlinesletter-->

		<!--Footer Section-->
		<section>
			<footer class="bg-dark text-white">
				<div class="footer-main">
					<div class="container">
						<div class="row">
							<div class="col-lg-3 col-md-12">
								<h6>About</h6>
								<hr class="deep-purple  accent-2 mb-4 mt-0 d-inline-block mx-auto">
								<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Fugit amet numquam iure provident voluptate essequasi, veritatis totam voluptas nostrum.Lorem ipsum dolor sit amet, consectetur </p>
								<p class="mb-0">Duis aute irure dolor in reprehenderit in voluptate velit esse cillum .</p>
							</div>
							<div class="col-lg-2 col-md-12">
								<h6>Our Services</h6>
								 <hr class="deep-purple text-primary accent-2 mb-4 mt-0 d-inline-block mx-auto">
								<ul class="list-unstyled mb-0">
									<li><a href="javascript:;">Our Team</a></li>
									<li><a href="javascript:;">Contact US</a></li>
									<li><a href="javascript:;">About</a></li>
									<li><a href="javascript:;">Services</a></li>
									<li><a href="javascript:;">Blog</a></li>
									<li><a href="javascript:;">Terms and Services</a></li>
								</ul>
							</div>
							<div class="col-lg-3 col-md-12">
								<h6>Contact</h6>
								<hr class="deep-purple  text-primary accent-2 mb-4 mt-0 d-inline-block mx-auto">
								<ul class="list-unstyled mb-0">
									<li>
										<a href="#"><i class="fa fa-home mr-3 text-primary"></i> New York, NY 10012, US</a>
									</li>
									<li>
										<a href="#"><i class="fa fa-envelope mr-3 text-primary"></i> info12323@example.com</a></li>
									<li>
										<a href="#"><i class="fa fa-phone mr-3 text-primary"></i> + 01 234 567 88</a>
									</li>
									 <li>
										<a href="#"><i class="fa fa-print mr-3 text-primary"></i> + 01 234 567 89</a>
									</li>
								</ul>
								<ul class="list-unstyled list-inline mt-3">
									<li class="list-inline-item">
									  <a class="btn-floating btn-sm rgba-white-slight mx-1 waves-effect waves-light">
										<i class="fa fa-facebook"></i>
									  </a>
									</li>
									<li class="list-inline-item">
									  <a class="btn-floating btn-sm rgba-white-slight mx-1 waves-effect waves-light">
										<i class="fa fa-twitter"></i>
									  </a>
									</li>
									<li class="list-inline-item">
									  <a class="btn-floating btn-sm rgba-white-slight mx-1 waves-effect waves-light">
										<i class="fa fa-google-plus"></i>
									  </a>
									</li>
									<li class="list-inline-item">
									  <a class="btn-floating btn-sm rgba-white-slight mx-1 waves-effect waves-light">
										<i class="fa fa-linkedin"></i>
									  </a>
									</li>
								</ul>
							</div>
							<div class="col-lg-4 col-md-12">
								<h6>Subscribe</h6>
								<hr class="deep-purple  text-primary accent-2 mb-4 mt-0 d-inline-block mx-auto">
								<div class="clearfix"></div>
								<div class="input-group w-100">
									<input type="text" class="form-control br-tl-3  br-bl-3 " placeholder="Email">
									<div class="input-group-append ">
										<button type="button" class="btn btn-primary br-tr-3  br-br-3"> Subscribe </button>
									</div>
								</div>
								<h6 class="mb-0 mt-5">Payments</h6>
								<hr class="deep-purple  text-primary accent-2 mb-2 mt-3 d-inline-block mx-auto">
								<div class="clearfix"></div>
								<ul class="footer-payments">
									<li class="pl-0"><a href="javascript:;"><i class="fa fa-cc-amex" aria-hidden="true"></i></a></li>
									<li><a href="javascript:;"><i class="fa fa-cc-visa" aria-hidden="true"></i></a></li>
									<li><a href="javascript:;"><i class="fa fa-credit-card-alt" aria-hidden="true"></i></a></li>
									<li><a href="javascript:;"><i class="fa fa-cc-mastercard" aria-hidden="true"></i></a></li>
									<li><a href="javascript:;"><i class="fa fa-cc-paypal" aria-hidden="true"></i></a></li>
								</ul>
							</div>
						</div>
					</div>
				</div>
				<div class="bg-dark  text-white p-0">
					<div class="container">
						<div class="row d-flex">
							<div class="col-lg-12 col-sm-12 mt-3 mb-3 text-center ">
								Copyright © 2019 <a href="#" class="fs-14 text-primary">Eudica</a>. Offlineed by <a href="#" class="fs-14 text-primary"> Spruko Technologies Pvt.Ltd </a>All rights reserved.
							</div>
						</div>
					</div>
				</div>
			</footer>
		</section>

@endcomponent