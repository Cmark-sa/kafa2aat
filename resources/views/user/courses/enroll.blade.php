@component('components.app')
<x-header />

<section class="sptb">
			<div class="container">
				<div class="row ">
					<div class="col-lg-8 col-md-12 col-md-12">
						<div class="card ">
							<div class="card-body">
								<form action="{{route('storeCourseStd')}}" method="POST" enctype="multipart/form-data">
									@csrf
									<div class="form-group">
										<label class="form-label text-dark">Username</label>
										<input type="text" name="username" class="form-control" placeholder="Username">
									</div>
									<div class="form-group">
										<label class="form-label text-dark">E-mail Address</label>
										<input type="email" name="email" class="form-control" placeholder="E-mail Address">
									</div>
									<div class="form-group">
										<label class="form-label text-dark">Phone Number</label>
										<input type="text" name="phone" class="form-control" placeholder="Phone Number">
									</div>
									<div class="form-group">
										<label class="form-label text-dark">National ID</label>
										<input type="text" name="national_id" class="form-control" placeholder="National ID">
									</div>
									<div class="form-group">
										<label class="form-label text-dark">Nationality</label>
										<input class="form-control" name="nationality" placeholder="Nationality">
									</div>
									
									<div class="form-group">
										<label class="form-label">Interests</label>
										<input type="text" name="interests" class="form-control" placeholder="Interests">
									</div>
									<div class="form-group">
										<label class="form-label">City</label>
										<input type="text" name="city" class="form-control" placeholder="City">
									</div>
									<div class="form-group">
										<label class="form-label">Address</label>
										<input type="text" name="address" class="form-control" placeholder="Address">
									</div>
									<div class="form-group">
										<label >Profile Image</label>
										<input type="file" name="photo" accept=".jpg, .png, image/jpeg, image/png">
									</div>
									<input type="hidden" name="course_id" value="{{$course->id}}">
									<div class="card-footer ">
										<button type="submit" class="btn btn-success">Send</button>
									</div>
								</form>
							</div>
							
						</div>
					</div>
					<div class="col-lg-4 col-md-12">
						<div class="card">
							<div class="card-header">
								<h3 class="card-title">Benefits Of Premium Courses</h3>
							</div>
							<div class="card-body pb-2">
								<ul class="list-unstyled widget-spec vertical-scroll mb-0">
									<li>
										<i class="fa fa-check text-success" aria-hidden="true"></i>Premium Courses Active
									</li>
									<li>
										<i class="fa fa-check text-success" aria-hidden="true"></i>Premium ads are displayed on top
									</li>
									<li>
										<i class="fa fa-check text-success" aria-hidden="true"></i>Premium ads will be Show in Google results
									</li>
									<li>
										<i class="fa fa-check text-success" aria-hidden="true"></i>Premium Courses Active
									</li>
									<li>
										<i class="fa fa-check text-success" aria-hidden="true"></i>Premium ads are displayed on top
									</li>
									<li>
										<i class="fa fa-check text-success" aria-hidden="true"></i>Premium ads will be Show in Google results
									</li>
									<li>
										<i class="fa fa-check text-success" aria-hidden="true"></i>Premium Courses Active
									</li>
									<li>
										<i class="fa fa-check text-success" aria-hidden="true"></i>Premium ads are displayed on top
									</li>
									<li>
										<i class="fa fa-check text-success" aria-hidden="true"></i>Premium ads will be Show in Google results
									</li>
									<li>
										<i class="fa fa-check text-success" aria-hidden="true"></i>Premium Courses Active
									</li>
									<li>
										<i class="fa fa-check text-success" aria-hidden="true"></i>Premium ads are displayed on top
									</li>
									<li>
										<i class="fa fa-check text-success" aria-hidden="true"></i>Premium ads will be Show in Google results
									</li>
									<li>
										<i class="fa fa-check text-success" aria-hidden="true"></i>Premium Courses Active
									</li>
									<li>
										<i class="fa fa-check text-success" aria-hidden="true"></i>Premium ads are displayed on top
									</li>
									<li>
										<i class="fa fa-check text-success" aria-hidden="true"></i>Premium ads will be Show in Google results
									</li>
								</ul>
							</div>
						</div>
						<div class="card">
							<div class="card-header">
								<h3 class="card-title">Terms And Conditions</h3>
							</div>
							<div class="card-body">
								<ul class="list-unstyled widget-spec  mb-0">
									<li>
										<i class="fa fa-check text-success" aria-hidden="true"></i>Money Not Refundable
									</li>
									<li>
										<i class="fa fa-check text-success" aria-hidden="true"></i>You can renew your Premium ad after experted.
									</li>
									<li>
										<i class="fa fa-check text-success" aria-hidden="true"></i>Premium ads are active for depend on package.
									</li>
									<li class="ml-5 mb-0">
										<a href="tips.html"> View more..</a>
									</li>
								</ul>
							</div>
						</div>
						<div class="card mb-xl-0">
							<div class="card-header">
								<h3 class="card-title">Safety Tips For Buyers</h3>
							</div>
							<div class="card-body">
								<ul class="list-unstyled widget-spec  mb-0">
									<li>
										<i class="fa fa-check text-success" aria-hidden="true"></i> Meet Seller at public Place
									</li>
									<li>
										<i class="fa fa-check text-success" aria-hidden="true"></i> Check item before you buy
									</li>
									<li>
										<i class="fa fa-check text-success" aria-hidden="true"></i> Pay only after collecting item
									</li>
									<li class="ml-5 mb-0">
										<a href="tips.html"> View more..</a>
									</li>
								</ul>
							</div>
						</div>
					</div>
					<div class="col-xl-8" style="position: relative;top: -170px;">
						<div class="card mb-xl-0">
							<div class="card-header">
								<h3 class="card-title">Payments</h3>
							</div>
							<div class="card-body">
								<div class="tab-content card-body border mb-0 b-0">
									<div class="panel panel-primary">
										<div class=" tab-menu-heading border-0 pl-0 pr-0 pt-0">
											<div class="tabs-menu1 ">
												<!-- Tabs -->
												<ul class="nav panel-tabs">
													<li><a href="#tab5" class="active" data-toggle="tab">Credit/ Debit Card</a></li>
													<li><a href="#tab6" data-toggle="tab">Pay-pal</a></li>
													<li><a href="#tab7" data-toggle="tab">Net Banking</a></li>
													<li><a href="#tab8" data-toggle="tab">Gift Voucher</a></li>
												</ul>
											</div>
										</div>
										<div class="panel-body tabs-menu-body pl-0 pr-0 border-0">
											<div class="tab-content">
												<div class="tab-pane active " id="tab5">
													<div class="form-group">
														<label class="form-label" >CardHolder Name</label>
														<input type="text" class="form-control" id="name1" placeholder="First Name">
													</div>
													<div class="form-group">
														<label class="form-label">Card number</label>
														<div class="input-group">
															<input type="text" class="form-control" placeholder="Search for...">
															<span class="input-group-append">
																<button class="btn btn-info" type="button"><i class="fa fa-cc-visa"></i> &nbsp; <i class="fa fa-cc-amex"></i> &nbsp;
																<i class="fa fa-cc-mastercard"></i></button>
															</span>
														</div>
													</div>
													<div class="row">
														<div class="col-sm-8">
															<div class="form-group mb-sm-0">
																<label class="form-label">Expiration</label>
																<div class="input-group">
																	<input type="number" class="form-control" placeholder="MM" name="expiremonth">
																	<input type="number" class="form-control" placeholder="YY" name="expireyear">
																</div>
															</div>
														</div>
														<div class="col-sm-4 ">
															<div class="form-group mb-0">
																<label class="form-label">CVV <i class="fa fa-question-circle"  data-toggle="tooltip" data-placement="top" title="Please Enter last 3 digits"></i></label>
																<input type="number" class="form-control" required="">
															</div>
														</div>
													</div>
												</div>
												<div class="tab-pane " id="tab6">
													<h6 class="font-weight-semibold">Paypal is easiest way to pay online</h6>
													<p><a href="#" class="btn btn-primary"><i class="fa fa-paypal"></i> Log in my Paypal</a></p>
													<p class="mb-0"><strong>Note:</strong> Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. </p>
												</div>
												<div class="tab-pane " id="tab7">
													<div class="control-group form-group">
														<div class="form-group">
															<label class="form-label text-dark">All Banks</label>
															<select class="form-control custom-select required category">
																<option value="0">Select Bank</option>
																<option value="1">Credit Agricole Group</option>
																<option value="2">Bank of America</option>
																<option value="3">Mitsubishi UFJ Financial Group</option>
																<option value="4">BNP Paribas</option>
																<option value="5">JPMorgan Chase & Co.</option>
																<option value="6">HSBC Holdings</option>
																<option value="7">Bank of China</option>
																<option value="8">Agricultural Bank of China</option>
																<option value="9">China Construction Bank Corp.</option>
																<option value="10">Industrial & Commercial Bank of China, or ICBC</option>
															</select>
														</div>
													</div>
													<p><a href="#" class="btn btn-primary">Log in Bank</a></p>
												</div>
												<div class="tab-pane " id="tab8">
													<div class="form-group">
														<label class="form-label">Gift Voucher</label>
														<div class="input-group">
															<input type="text" class="form-control" placeholder="Enter Your Gv Number">
															<span class="input-group-append">
																<button class="btn btn-info" type="button">
																Apply</button>
															</span>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
									<div class="form-group row clearfix">
										<div class="col-lg-12">
											<div class="checkbox checkbox-info">
												<label class="custom-control mt-4 custom-checkbox">
													<input type="checkbox" class="custom-control-input" />
													<span class="custom-control-label text-dark pl-2">I agree with the Terms and Conditions.</span>
												</label>
											</div>
										</div>
										<ul class=" mb-b-4 ">
											<li class="float-right"><a href="#" class="btn btn-success  mb-0 mr-2">Continue</a></li>
										</ul>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
        </section><!--/Section-->
@endcomponent