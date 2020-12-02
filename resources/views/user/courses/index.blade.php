@component('components.app')
<x-header />
<div class="bg-white border-bottom">
			<div class="container">
				<div class="page-header">
					<h4 class="page-title">Course List</h4>
					<ol class="breadcrumb">
						<li class="breadcrumb-item"><a href="#">Home</a></li>
						<li class="breadcrumb-item"><a href="#">Pages</a></li>
						<li class="breadcrumb-item active" aria-current="page">Course List</li>
					</ol>
				</div>
			</div>
		</div>	<!--/Breadcrumb-->

		<!--Section-->
		<section class="sptb">
			<div class="container">
				<div class="row">
					<div class="col-xl-9 col-lg-8 col-md-12">
						<!--Coursed lists-->
						<div class=" mb-lg-0">
							<div class="">
								<div class="item2-gl ">
									<div class=" mb-0">
										<div class="">
											<div class="p-5 bg-white item2-gl-nav d-flex">
												<h6 class="mb-0 mt-2">Showing 1 to 10 of 30 entries</h6>
												<ul class="nav item2-gl-menu ml-auto">
													<li class=""><a href="#tab-11" class="active show" data-toggle="tab" title="List style"><i class="fa fa-list"></i></a></li>
													<li><a href="#tab-12" data-toggle="tab" class="" title="Grid"><i class="fa fa-th"></i></a></li>
												</ul>
												<div class="d-flex">
													<label class="mr-2 mt-1 mb-sm-1">Sort By:</label>
													<select name="item" class="form-control select-sm w-70">
														<option value="1">Latest</option>
														<option value="2">Oldest</option>
														<option value="3">Fees:Low-to-High</option>
														<option value="5">Fees:Hight-to-Low</option>
													</select>
												</div>
											</div>
										</div>
									</div>
									<div class="tab-content">
										<div class="tab-pane active" id="tab-11">
											<div class="card overflow-hidden">
												<div class="d-md-flex">
													<div class="item-card9-img">
														<div class="item-card9-imgs">
															<a href="page-details.html"></a>
															<img src="../assets/images/media/11.jpg" alt="img" class="cover-image">
														</div>
														<div class="item-card9-icons">
															<a href="#" class="item-card9-icons1 text-danger"> <i class="fa fa-heart"></i></a>
															<a href="#" class="item-card9-icons1 bg-black-trasparant"> <i class="fa fa fa-share-alt"></i></a>
														</div>
														<div class="item-overly-trans">
														<a href="page-details.html" class="bg-primary">Online</a>
														</div>
													</div>
													<div class="card border-0 mb-0">
														<div class="card-body ">
															<div class="item-card9">
																<a href="page-details.html" class="text-dark"><h3 class="font-weight-semibold mt-1">Business Management Classes</h3></a>
																 <div class="mt-2 mb-2">
																	<a href="#" class="mr-4"><span class="text-muted fs-13"><i class="fa fa-briefcase mr-1"></i> Business</span></a>
																	<a href="#" class="mr-4"><span class="text-muted fs-13"><i class="fa fa-user text-muted mr-1"></i> Stephanie</span></a>
																	<a href="#" class="mr-4"><span class="text-muted fs-13"><i class="fa fa-clock-o text-muted mr-1"></i> Aug 5, 2019</span></a>
																</div>
																<p class="mb-0 leading-tight">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium </p>
															</div>
														</div>
														<div class="card-footer pt-4 pb-4">
															<div class="item-card9-footer d-flex">
																<div class="item-card9-cost">
																	<h4 class="text-dark font-weight-semibold mb-0 mt-0">$263.99</h4>
																</div>
																<div class="ml-auto">
																	<div class="rating-stars block">
																		<input type="number" readonly="readonly" class="rating-value star" name="rating-stars-value"  value="3">
																		<div class="rating-stars-container">
																			<div class="rating-star sm">
																				<i class="fa fa-star"></i>
																			</div>
																			<div class="rating-star sm">
																				<i class="fa fa-star"></i>
																			</div>
																			<div class="rating-star sm">
																				<i class="fa fa-star"></i>
																			</div>
																			<div class="rating-star sm">
																				<i class="fa fa-star"></i>
																			</div>
																			<div class="rating-star sm">
																				<i class="fa fa-star"></i>
																			</div>
																		</div>
																	</div>
																</div>
															</div>
														</div>
													</div>
												</div>
											</div>
											<div class="card overflow-hidden">
												<div class="ribbon ribbon-top-left text-danger"><span class="bg-danger">Offer</span></div>
												<div class="d-md-flex">
													<div class="item-card9-img">
														<div class="item-card9-imgs">
															<a href="page-details.html"></a>
															<img src="../assets/images/media/9.jpg" alt="img" class="cover-image">
														</div>
														<div class="item-card9-icons">
															<a href="#" class="item-card9-icons1"> <i class="fa fa fa-heart-o"></i></a>
															<a href="#" class="item-card9-icons1 bg-black-trasparant"> <i class="fa fa fa-share-alt"></i></a>
														</div>
														<div class="item-overly-trans">
														<a href="page-details.html" class="bg-blue">Offline</a>
														</div>
													</div>
													<div class="card mb-0 border-0">
														<div class="card-body ">
															<div class="item-card9">
																<a href="page-details.html" class="text-dark"><h3 class="font-weight-semibold mt-1">Networking Classes</h3></a>
															    <div class="mt-2 mb-2">
																	<a href="#" class="mr-4"><span class="text-muted fs-13"><i class="fa fa-cube mr-1"></i> Networking</span></a>
																	<a href="#" class="mr-4"><span class="text-muted fs-13"><i class="fa fa-user text-muted mr-1"></i> Lauren</span></a>
																	<a href="#" class="mr-4"><span class="text-muted fs-13"><i class="fa fa-clock-o text-muted mr-1"></i> May 11, 2019</span></a>
																</div>
																<p class="mb-0 leading-tight">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium </p>
															</div>
														</div>
														<div class="card-footer pt-4 pb-4">
															<div class="item-card9-footer d-flex">
																<div class="item-card9-cost">
																	<h4 class="text-dark font-weight-semibold mb-0 mt-0">$745.00<span class="strike-text ml-1 text-muted fs-16">$896.00</span></h4>
																</div>
																<div class="ml-auto">
																	<div class="rating-stars block">
																		<input type="number" readonly="readonly" class="rating-value star" name="rating-stars-value"  value="3">
																		<div class="rating-stars-container">
																			<div class="rating-star sm">
																				<i class="fa fa-star"></i>
																			</div>
																			<div class="rating-star sm">
																				<i class="fa fa-star"></i>
																			</div>
																			<div class="rating-star sm">
																				<i class="fa fa-star"></i>
																			</div>
																			<div class="rating-star sm">
																				<i class="fa fa-star"></i>
																			</div>
																			<div class="rating-star sm">
																				<i class="fa fa-star"></i>
																			</div>
																		</div>
																	</div>
																</div>
															</div>
														</div>
													</div>
												</div>
											</div>
											<div class="card overflow-hidden">
												<div class="ribbon ribbon-top-left text-danger"><span class="bg-danger">Offer</span></div>
												<div class="d-md-flex">
													<div class="item-card9-img">
														<div class="item-card9-imgs">
															<a href="page-details.html"></a>
															<img src="../assets/images/media/8.jpg" alt="img" class="cover-image">
														</div>
														<div class="item-card9-icons">
															<a href="#" class="item-card9-icons1"> <i class="fa fa fa-heart-o"></i></a>
															<a href="#" class="item-card9-icons1 bg-black-trasparant"> <i class="fa fa fa-share-alt"></i></a>
														</div>
														<div class="item-overly-trans">
														<a href="page-details.html" class="bg-primary">Online</a>
														</div>
													</div>
													<div class="card border-0 mb-0">
														<div class="card-body ">
															<div class="item-card9">
																<a href="page-details.html" class="text-dark"><h3 class="font-weight-semibold mt-1">Beautician Classes</h3></a>
																<div class="mt-2 mb-2">
																	<a href="#" class="mr-4"><span class="text-muted fs-13"><i class="fa fa-paint-brush text-muted mr-1"></i> Beautician</span></a>
																	<a href="#" class="mr-4"><span class="text-muted fs-13"><i class="fa fa-user text-muted mr-1"></i> Kimberly</span></a>
																	<a href="#" class="mr-4"><span class="text-muted fs-13"><i class="fa fa-clock-o text-muted mr-1"></i> Aug 11, 2019</span></a>
																</div>
																<p class="mb-0 leading-tight">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium </p>
															</div>
														</div>
														<div class="card-footer pt-4 pb-4">
															<div class="item-card9-footer d-flex">
																<div class="item-card9-cost">
																	<h4 class="text-dark font-weight-semibold mb-0 mt-0">$149.00<span class="strike-text ml-1 text-muted fs-16">$296.00</span></h4>
																</div>
																<div class="ml-auto">
																	<div class="rating-stars block">
																		<input type="number" readonly="readonly" class="rating-value star" name="rating-stars-value"  value="3">
																		<div class="rating-stars-container">
																			<div class="rating-star sm">
																				<i class="fa fa-star"></i>
																			</div>
																			<div class="rating-star sm">
																				<i class="fa fa-star"></i>
																			</div>
																			<div class="rating-star sm">
																				<i class="fa fa-star"></i>
																			</div>
																			<div class="rating-star sm">
																				<i class="fa fa-star"></i>
																			</div>
																			<div class="rating-star sm">
																				<i class="fa fa-star"></i>
																			</div>
																		</div>
																	</div>
																</div>
															</div>
														</div>
													</div>
												</div>
											</div>
											<div class="card overflow-hidden">
												<div class="d-md-flex">
													<div class="item-card9-img">
														<div class="item-card2-img ">
															<div class="arrow-ribbon bg-warning">$13</div>
															<a href="page-details.html"></a>
															<img src="../assets/images/media/3.jpg" alt="img" class="cover-image">
														</div>
														<div class="item-card9-icons">
															<a href="#" class="item-card9-icons1"> <i class="fa fa fa-heart-o"></i></a>
															<a href="#" class="item-card9-icons1 bg-black-trasparant"> <i class="fa fa fa-share-alt"></i></a>
														</div>
														<div class="item-overly-trans">
														<a href="page-details.html" class="bg-blue">Offline</a>
														</div>
													</div>
													<div class="card border-0 mb-0">
														<div class="card-body ">
															<div class="item-card2">
																<div class="item-card2-desc">
																	<a href="page-details.html" class="text-dark mt-2"><h3 class="font-weight-semibold mt-1">Guitar Classes</h3></a>
																	<div class="mt-2 mb-2">
																		<a href="#" class="mr-4"><span class="text-muted fs-13"><i class="fa fa-music mr-1"></i> Music</span></a>
																		<a href="#" class="mr-4"><span class="text-muted fs-13"><i class="fa fa-user text-muted mr-1"></i> Jennifer</span></a>
																		<a href="#" class="mr-4"><span class="text-muted fs-13"><i class="fa fa-clock-o text-muted mr-1"></i> May 11, 2019</span></a>
																	</div>
																	<p class="mb-0 leading-tight">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium </p>
																</div>
															</div>
														</div>
														<div class="card-footer pt-4 pb-4">
															<div class="item-card2-footer d-sm-flex">
																<div class="rating-stars d-inline-flex">
																	<input type="number" readonly="readonly" class="rating-value star" name="rating-stars-value"  value="3">
																	<div class="rating-stars-container">
																		<div class="rating-star sm">
																			<i class="fa fa-star"></i>
																		</div>
																		<div class="rating-star sm">
																			<i class="fa fa-star"></i>
																		</div>
																		<div class="rating-star sm">
																			<i class="fa fa-star"></i>
																		</div>
																		<div class="rating-star sm">
																			<i class="fa fa-star"></i>
																		</div>
																		<div class="rating-star sm">
																			<i class="fa fa-star"></i>
																		</div>
																	</div> (145reviews)
																</div>
																<div class="ml-auto">
																	<a href="#" class="location"><i class="fa fa-map-marker text-muted mr-1"></i> Los Angles</a>
																</div>
															</div>
														</div>
													</div>
												</div>
											</div>
											<div class="card overflow-hidden">
												<div class="d-md-flex">
													<div class="item-card9-img">
														<div class="item-card2-img ">
															<div class="arrow-ribbon bg-warning">$42</div>
															<a href="page-details.html"></a>
															<img src="../assets/images/media/16.jpg" alt="img" class="cover-image">
														</div>
														<div class="item-card9-icons">
															<a href="#" class="item-card9-icons1"> <i class="fa fa fa-heart-o"></i></a>
															<a href="#" class="item-card9-icons1 bg-black-trasparant"> <i class="fa fa fa-share-alt"></i></a>
														</div>
														<div class="item-overly-trans">
														<a href="page-details.html" class="bg-blue">Offline</a>
														</div>
													</div>
													<div class="card border-0 mb-0">
														<div class="card-body ">
															<div class="item-card2">
																<div class="item-card2-desc">
																	<a href="page-details.html" class="text-dark mt-2"><h3 class="font-weight-semibold mt-1">Photoshop Designing Classes</h3></a>
																	<div class="mt-2 mb-2">
																		<a href="#" class="mr-4"><span class="text-muted fs-13"><i class="fa fa-camera text-muted mr-1"></i> PhotoShop</span></a>
																		<a href="#" class="mr-4"><span class="text-muted fs-13"><i class="fa fa-user text-muted mr-1"></i> Bernadette</span></a>
																		<a href="#" class="mr-4"><span class="text-muted fs-13"><i class="fa fa-clock-o text-muted mr-1"></i> Aug 9 ,2019</span></a>
																	</div>
																	<p class="mb-0 leading-tight">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium </p>
																</div>
															</div>
														</div>
														<div class="card-footer pt-4 pb-4">
															<div class="item-card2-footer d-sm-flex">
																<div class="rating-stars d-inline-flex">
																	<input type="number" readonly="readonly" class="rating-value star" name="rating-stars-value"  value="3">
																	<div class="rating-stars-container">
																		<div class="rating-star sm">
																			<i class="fa fa-star"></i>
																		</div>
																		<div class="rating-star sm">
																			<i class="fa fa-star"></i>
																		</div>
																		<div class="rating-star sm">
																			<i class="fa fa-star"></i>
																		</div>
																		<div class="rating-star sm">
																			<i class="fa fa-star"></i>
																		</div>
																		<div class="rating-star sm">
																			<i class="fa fa-star"></i>
																		</div>
																	</div> (145reviews)
																</div>
																<div class="ml-auto">
																	<a href="#" class="location"><i class="fa fa-map-marker text-muted mr-1"></i> Los Angles</a>
																</div>
															</div>
														</div>
													</div>
												</div>
											</div>
											<div class="card overflow-hidden">
												<div class="d-md-flex">
													<div class="item-card9-img">
														<div class="item-card2-img ">
															<div class="arrow-ribbon bg-warning">$50</div>
															<a href="page-details.html"></a>
															<img src="../assets/images/media/7.jpg" alt="img" class="cover-image">
														</div>
														<div class="item-card9-icons">
															<a href="#" class="item-card9-icons1"> <i class="fa fa fa-heart-o"></i></a>
															<a href="#" class="item-card9-icons1 bg-black-trasparant"> <i class="fa fa fa-share-alt"></i></a>
														</div>
														<div class="item-overly-trans">
															<a href="page-details.html" class="bg-blue">Offline</a>
														</div>
													</div>
													<div class="card border-0 mb-0">
														<div class="card-body ">
															<div class="item-card2">
																<div class="item-card2-desc">
																	<a href="page-details.html" class="text-dark mt-2"><h3 class="font-weight-semibold mt-1">DataScience Classes</h3></a>
																	<div class="mt-2 mb-2">
																		<a href="#" class="mr-4"><span class="text-muted fs-13"><i class="fa fa-flask text-muted mr-1"></i> DataScience</span></a>
																		<a href="#" class="mr-4"><span class="text-muted fs-13"><i class="fa fa-user text-muted mr-1"></i> Alexandra</span></a>
																		<a href="#" class="mr-4"><span class="text-muted fs-13"><i class="fa fa-clock-o text-muted mr-1"></i> july18 ,2019</span></a>
																	</div>
																	<p class="mb-0 leading-tight">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium </p>
																</div>
															</div>
														</div>
														<div class="card-footer pt-4 pb-4">
															<div class="item-card2-footer d-sm-flex">
																<div class="item-card2-rating">
																	<div class="rating-stars d-inline-flex">
																		<input type="number" readonly="readonly" class="rating-value star" name="rating-stars-value"  value="3">
																		<div class="rating-stars-container">
																			<div class="rating-star sm">
																				<i class="fa fa-star"></i>
																			</div>
																			<div class="rating-star sm">
																				<i class="fa fa-star"></i>
																			</div>
																			<div class="rating-star sm">
																				<i class="fa fa-star"></i>
																			</div>
																			<div class="rating-star sm">
																				<i class="fa fa-star"></i>
																			</div>
																			<div class="rating-star sm">
																				<i class="fa fa-star"></i>
																			</div>
																		</div> (46 reviews)
																	</div>
																</div>
																<div class="ml-auto">
																	<a href="#" class="location"><i class="fa fa-map-marker text-muted mr-1"></i> San Francisco</a>
																</div>
															</div>
														</div>
													</div>
												</div>
											</div>
										</div>
										<div class="tab-pane" id="tab-12">
											<div class="row">
												<div class="col-lg-6 col-md-12 col-xl-4">
													<div class="card overflow-hidden">
														<div class="item-card9-img">
															<div class="item-card9-imgs">
																<a href="page-details.html"></a>
																<img src="../assets/images/media/11.jpg" alt="img" class="cover-image">
															</div>
															<div class="item-card9-icons">
																<a href="#" class="item-card9-icons1"> <i class="fa fa fa-heart-o"></i></a>
																<a href="#" class="item-card9-icons1 bg-black-trasparant"> <i class="fa fa fa-share-alt"></i></a>
															</div>
															<div class="item-overly-trans">
																<a href="page-details.html" class="bg-blue">Offline</a>
															</div>
														</div>
														<div class="card-body">
															<div class="item-card9">
																<span class="item-card-badge"><i class="fa fa-briefcase mr-1"></i> Business</span>
																<a href="page-details.html" class="text-dark mt-2"><h3 class="font-weight-semibold mt-1 mb-3">Business Manegment</h3></a>
																<div class="item-card9-desc mb-2">
																	<a href="#" class="mr-4"><span class="text-muted"><i class="fa fa-user text-muted mr-1"></i> Stephanie</span></a>
																	<a href="#" class="mr-4"><span class="text-muted"><i class="fa fa-clock-o text-muted mr-1"></i> Aug 5, 2019</span></a>
																</div>
																<p class="mb-0">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium </p>
															</div>
														</div>
														<div class="card-footer">
															<div class="item-card9-footer d-flex">
																<div class="item-card9-cost">
																	<h4 class="text-dark font-weight-semibold mb-0 mt-0">$263.99</h4>
																</div>
																<div class="ml-auto">
																	<div class="rating-stars block">
																		<input type="number" readonly="readonly" class="rating-value star" name="rating-stars-value"  value="3">
																		<div class="rating-stars-container">
																			<div class="rating-star sm">
																				<i class="fa fa-star"></i>
																			</div>
																			<div class="rating-star sm">
																				<i class="fa fa-star"></i>
																			</div>
																			<div class="rating-star sm">
																				<i class="fa fa-star"></i>
																			</div>
																			<div class="rating-star sm">
																				<i class="fa fa-star"></i>
																			</div>
																			<div class="rating-star sm">
																				<i class="fa fa-star"></i>
																			</div>
																		</div>
																	</div>
																</div>
															</div>
														</div>
													</div>
												</div>

												<div class="col-lg-6 col-md-12 col-xl-4">
													<div class="card overflow-hidden">
														<div class="ribbon ribbon-top-left text-primary"><span class="bg-danger">Offer</span></div>
														<div class="item-card9-img">
															<div class="item-card9-imgs">
																<a href="page-details.html"></a>
																<img src="../assets/images/media/9.jpg" alt="img" class="cover-image">
															</div>
															<div class="item-card9-icons">
																<a href="#" class="item-card9-icons1"> <i class="fa fa fa-heart-o"></i></a>
																<a href="#" class="item-card9-icons1 bg-black-trasparant"> <i class="fa fa fa-share-alt"></i></a>
															</div>
															<div class="item-overly-trans">
														       <a href="page-details.html" class="bg-blue">Offline</a>
														    </div>
														</div>
														<div class="card-body">
															<div class="item-card9">
																<span class="item-card-badge"><i class="fa fa-paint-brush text-muted mr-1"></i> Networking</span>
																<a href="page-details.html" class="text-dark mt-2"><h3 class="font-weight-semibold mt-2 mb-2">Networking Classes</h3></a>
																<div class="item-card9-desc mb-2">
																	<a href="#" class="mr-4"><span class="text-muted"><i class="fa fa-user text-muted mr-1"></i>    Lauren</span></a>
																	<a href="#" class="mr-4"><span class="text-muted"><i class="fa fa-clock-o text-muted mr-1"></i>   may 11, 2019</span></a>
																</div>
																<p class="mb-0">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium </p>
															</div>
														</div>
														<div class="card-footer">
															<div class="item-card9-footer d-flex">
																<div class="item-card9-cost">
																	<h4 class="text-dark font-weight-semibold mb-0 mt-0">$149.00<span class="strike-text ml-1 text-muted fs-16">$296.00</span></h4>
																</div>
																<div class="ml-auto">
																	<div class="rating-stars block">
																		<input type="number" readonly="readonly" class="rating-value star" name="rating-stars-value"  value="3">
																		<div class="rating-stars-container">
																			<div class="rating-star sm">
																				<i class="fa fa-star"></i>
																			</div>
																			<div class="rating-star sm">
																				<i class="fa fa-star"></i>
																			</div>
																			<div class="rating-star sm">
																				<i class="fa fa-star"></i>
																			</div>
																			<div class="rating-star sm">
																				<i class="fa fa-star"></i>
																			</div>
																			<div class="rating-star sm">
																				<i class="fa fa-star"></i>
																			</div>
																		</div>
																	</div>
																</div>
															</div>
														</div>
													</div>
												</div>
												<div class="col-lg-6 col-md-12 col-xl-4">
													<div class="card overflow-hidden">
														<div class="ribbon ribbon-top-left text-primary"><span class="bg-danger">Offer</span></div>
														<div class="item-card9-img">
															<div class="item-card9-imgs">
																<a href="page-details.html"></a>
																<img src="../assets/images/media/8.jpg" alt="img" class="cover-image">
															</div>
															<div class="item-card9-icons">
																<a href="#" class="item-card9-icons1"> <i class="fa fa fa-heart-o"></i></a>
																<a href="#" class="item-card9-icons1 bg-black-trasparant"> <i class="fa fa fa-share-alt"></i></a>
															</div>
															<div class="item-overly-trans">
														       <a href="page-details.html" class="bg-blue">Offline</a>
														    </div>
														</div>
														<div class="card-body">
															<div class="item-card9">
																<span class="item-card-badge"><i class="fa fa-paint-brush text-muted mr-1"></i> Beautician</span>
																<a href="page-details.html" class="text-dark mt-2"><h3 class="font-weight-semibold mt-2 mb-2">Beautician Classes</h3></a>
																<div class="item-card9-desc mb-2">
																	<a href="#" class="mr-4"><span class="text-muted"><i class="fa fa-user text-muted mr-1"></i>   Kimberly</span></a>
																	<a href="#" class="mr-4"><span class="text-muted"><i class="fa fa-clock-o text-muted mr-1"></i>   Aug 11, 2019</span></a>
																</div>
																<p class="mb-0">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium </p>
															</div>
														</div>
														<div class="card-footer">
															<div class="item-card9-footer d-flex">
																<div class="item-card9-cost">
																	<h4 class="text-dark font-weight-semibold mb-0 mt-0">$149.00<span class="strike-text ml-1 text-muted fs-16">$296.00</span></h4>
																</div>
																<div class="ml-auto">
																	<div class="rating-stars block">
																		<input type="number" readonly="readonly" class="rating-value star" name="rating-stars-value"  value="3">
																		<div class="rating-stars-container">
																			<div class="rating-star sm">
																				<i class="fa fa-star"></i>
																			</div>
																			<div class="rating-star sm">
																				<i class="fa fa-star"></i>
																			</div>
																			<div class="rating-star sm">
																				<i class="fa fa-star"></i>
																			</div>
																			<div class="rating-star sm">
																				<i class="fa fa-star"></i>
																			</div>
																			<div class="rating-star sm">
																				<i class="fa fa-star"></i>
																			</div>
																		</div>
																	</div>
																</div>
															</div>
														</div>
													</div>
												</div>
												<div class="col-lg-6 col-md-12 col-xl-4">
													<div class="card overflow-hidden">
														<div class="item-card9-img">
														 <div class="arrow-ribbon bg-warning">$50</div>
															<div class="item-card9-imgs">
																<a href="page-details.html"></a>
																<img src="../assets/images/media/3.jpg" alt="img" class="cover-image">
															</div>
															<div class="item-card9-icons">
																<a href="#" class="item-card9-icons1"> <i class="fa fa fa-heart-o"></i></a>
																<a href="#" class="item-card9-icons1 bg-black-trasparant"> <i class="fa fa fa-share-alt"></i></a>
															</div>
															<div class="item-overly-trans">
														       <a href="page-details.html" class="bg-primary">Online</a>
														    </div>
														</div>
														<div class="card-body">
															<div class="item-card2">
																<div class="item-card2-desc">
																	<span class="item-card-badge"><i class="fa fa-music mr-1"></i> Music</span>
																	<a href="page-details.html" class="text-dark mt-2"><h3 class="font-weight-semibold mt-2 mb-2">Guitar Classes</h3></a>
																	<div class="item-card9-desc mb-2">
																		<a href="#" class="mr-4"><span class="text-muted"><i class="fa fa-user text-muted mr-1"></i>    Jennifer</span></a>
																		<a href="#" class="mr-4"><span class="text-muted"><i class="fa fa-clock-o text-muted mr-1"></i>   May 11, 2019</span></a>
																   </div>
																	<p class="mb-0">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium </p>
																</div>
															</div>
														</div>
														<div class="card-footer">
															<div class="item-card2-footer">
																<a href="#" class="location"><i class="fa fa-map-marker text-muted mr-1"></i> Los Angles</a>
																<div class="rating-stars item-card2-rating d-inline-flex">
																	<input type="number" readonly="readonly" class="rating-value star" name="rating-stars-value"  value="3">
																	<div class="rating-stars-container">
																		<div class="rating-star sm">
																			<i class="fa fa-star"></i>
																		</div>
																		<div class="rating-star sm">
																			<i class="fa fa-star"></i>
																		</div>
																		<div class="rating-star sm">
																			<i class="fa fa-star"></i>
																		</div>
																		<div class="rating-star sm">
																			<i class="fa fa-star"></i>
																		</div>
																		<div class="rating-star sm">
																			<i class="fa fa-star"></i>
																		</div>
																	</div>(145 reviews)
																</div>
															</div>
														</div>
													</div>
												</div>
												<div class="col-lg-6 col-md-12 col-xl-4">
													<div class="card overflow-hidden">
														<div class="item-card9-img">
														   <div class="arrow-ribbon bg-warning">$13</div>
															<div class="item-card9-imgs">
																<a href="page-details.html"></a>
																<img src="../assets/images/media/16.jpg" alt="img" class="cover-image">
															</div>
															<div class="item-card9-icons">
																<a href="#" class="item-card9-icons1"> <i class="fa fa fa-heart-o"></i></a>
																<a href="#" class="item-card9-icons1 bg-black-trasparant"> <i class="fa fa fa-share-alt"></i></a>
															</div>
															<div class="item-overly-trans">
														       <a href="page-details.html" class="bg-blue">Offline</a>
														    </div>
														</div>
														<div class="card-body">
															<div class="item-card2">
																<div class="item-card2-desc">
																	<span class="item-card-badge"><i class="fa fa-camera text-muted mr-1"></i> PhotoShop</span>
																	<a href="page-details.html" class="text-dark mt-2"><h3 class="font-weight-semibold mt-2 mb-2">PhotoShop Design</h3></a>
																	<div class="item-card9-desc mb-2">
																		<a href="#" class="mr-4"><span class="text-muted"><i class="fa fa-user text-muted mr-1"></i>  Bernadette</span></a>
																		<a href="#" class="mr-4"><span class="text-muted"><i class="fa fa-clock-o text-muted mr-1"></i>  Aug 9 ,2019</span></a>
																   </div>
																	<p class="mb-0">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium </p>
																</div>
															</div>
														</div>
														<div class="card-footer">
															<div class="item-card2-footer">
																<a href="#" class="location"><i class="fa fa-map-marker text-muted mr-1"></i> Los Angles</a>
																<div class="rating-stars item-card2-rating d-inline-flex">
																	<input type="number" readonly="readonly" class="rating-value star" name="rating-stars-value"  value="3">
																	<div class="rating-stars-container">
																		<div class="rating-star sm">
																			<i class="fa fa-star"></i>
																		</div>
																		<div class="rating-star sm">
																			<i class="fa fa-star"></i>
																		</div>
																		<div class="rating-star sm">
																			<i class="fa fa-star"></i>
																		</div>
																		<div class="rating-star sm">
																			<i class="fa fa-star"></i>
																		</div>
																		<div class="rating-star sm">
																			<i class="fa fa-star"></i>
																		</div>
																	</div>(145 reviews)
																</div>

															</div>
														</div>
													</div>
												</div>
												<div class="col-lg-6 col-md-12 col-xl-4">
													<div class="card overflow-hidden">
														<div class="item-card9-img">
															<div class="arrow-ribbon bg-warning">$32</div>
															<div class="item-card9-imgs">
																<a href="page-details.html"></a>
																<img src="../assets/images/media/7.jpg" alt="img" class="cover-image">
															</div>
															<div class="item-card9-icons">
																<a href="#" class="item-card9-icons1"> <i class="fa fa fa-heart-o"></i></a>
																<a href="#" class="item-card9-icons1 bg-black-trasparant"> <i class="fa fa fa-share-alt"></i></a>
															</div>
															<div class="item-overly-trans">
														       <a href="page-details.html" class="bg-primary">Online</a>
														    </div>
														</div>
														<div class="card-body">
															<div class="item-card2">
																<div class="item-card2-desc">
																	<span class="item-card-badge"><i class="fa fa-flask text-muted mr-1"></i> DataScience</span>
																	<a href="page-details.html" class="text-dark mt-2"><h3 class="font-weight-semibold mt-2 mb-2">Data Science</h3></a>
																	<div class="item-card9-desc mb-2">
																		<a href="#" class="mr-4"><span class="text-muted"><i class="fa fa-user text-muted mr-1"></i>   Alexandra</span></a>
																		<a href="#" class="mr-4"><span class="text-muted"><i class="fa fa-clock-o text-muted mr-1"></i>  july18 ,2019</span></a>
																   </div>
																	<p class="mb-0">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium </p>
																</div>
															</div>
														</div>
														<div class="card-footer">
															<div class="item-card2-footer">
																<a href="#" class="location"><i class="fa fa-map-marker text-muted mr-1"></i> San Francisco</a>
																<div class="rating-stars item-card2-rating d-inline-flex">
																	<input type="number" readonly="readonly" class="rating-value star" name="rating-stars-value"  value="3">
																	<div class="rating-stars-container">
																		<div class="rating-star sm">
																			<i class="fa fa-star"></i>
																		</div>
																		<div class="rating-star sm">
																			<i class="fa fa-star"></i>
																		</div>
																		<div class="rating-star sm">
																			<i class="fa fa-star"></i>
																		</div>
																		<div class="rating-star sm">
																			<i class="fa fa-star"></i>
																		</div>
																		<div class="rating-star sm">
																			<i class="fa fa-star"></i>
																		</div>
																	</div>(46 reviews)
																</div>

															</div>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
								<div class="center-block text-center">
									<ul class="pagination mb-5 mb-lg-0">
										<li class="page-item page-prev disabled">
											<a class="page-link" href="#" tabindex="-1">Prev</a>
										</li>
										<li class="page-item active"><a class="page-link" href="#">1</a></li>
										<li class="page-item"><a class="page-link" href="#">2</a></li>
										<li class="page-item"><a class="page-link" href="#">3</a></li>
										<li class="page-item page-next">
											<a class="page-link" href="#">Next</a>
										</li>
									</ul>
								</div>
							</div>
						</div>
						<!--/Coursed lists-->
					</div>

					<!--Right Side Content-->
					<div class="col-xl-3 col-lg-4 col-md-12">
						<div class="card">
							<div class="card-body">
								<div class="input-group">
									<input type="text" class="form-control br-tl-3 br-bl-3" placeholder="Search">
									<div class="input-group-append ">
										<button type="button" class="btn btn-primary br-tr-3 br-br-3">
											Search
										</button>
									</div>
								</div>
							</div>
						</div>
						<div class="card mb-0">
							<div class="card-header">
								<h3 class="card-title">Categories</h3>
							</div>
							<div class="card-body">
								<div class="" id="container">
									<div class="filter-product-checkboxs">
										<label class="custom-control custom-checkbox mb-3">
											<input type="checkbox" class="custom-control-input" name="checkbox1" value="option1">
											<span class="custom-control-label">
												<a href="#" class="text-dark">Business<span class="label label-secondary float-right">14</span></a>
											</span>
										</label>
										<label class="custom-control custom-checkbox mb-3">
											<input type="checkbox" class="custom-control-input" name="checkbox2" value="option2">
											<span class="custom-control-label">
												<a href="#" class="text-dark">Data Science<span class="label label-secondary float-right">22</span></a>
											</span>
										</label>
										<label class="custom-control custom-checkbox mb-3">
											<input type="checkbox" class="custom-control-input" name="checkbox3" value="option3">
											<span class="custom-control-label">
												<a href="#" class="text-dark">IT<span class="label label-secondary float-right">78</span></a>
											</span>
										</label>
										<label class="custom-control custom-checkbox mb-3">
											<input type="checkbox" class="custom-control-input" name="checkbox4" value="option3">
											<span class="custom-control-label">
												<a href="#" class="text-dark">Marketing<span class="label label-secondary float-right">35</span></a>
											</span>
										</label>
										<label class="custom-control custom-checkbox mb-3">
											<input type="checkbox" class="custom-control-input" name="checkbox5" value="option3">
											<span class="custom-control-label">
												<a href="#" class="text-dark">Beautician<span class="label label-secondary float-right">23</span></a>
											</span>
										</label>
										<label class="custom-control custom-checkbox mb-3">
											<input type="checkbox" class="custom-control-input" name="checkbox6" value="option3">
											<span class="custom-control-label">
												<a href="#" class="text-dark">Photography<span class="label label-secondary float-right">14</span></a>
											</span>
										</label>
										<label class="custom-control custom-checkbox mb-3">
											<input type="checkbox" class="custom-control-input" name="checkbox7" value="option3">
											<span class="custom-control-label">
												<a href="#" class="text-dark">Litarature <span class="label label-secondary float-right">45</span></a>
											</span>
										</label>
										<label class="custom-control custom-checkbox mb-3">
											<input type="checkbox" class="custom-control-input" name="checkbox7" value="option3">
											<span class="custom-control-label">
												<a href="#" class="text-dark">Law<span class="label label-secondary float-right">34</span></a>
											</span>
										</label>
										<label class="custom-control custom-checkbox mb-3">
											<input type="checkbox" class="custom-control-input" name="checkbox7" value="option3">
											<span class="custom-control-label">
												<a href="#" class="text-dark">Nursing<span class="label label-secondary float-right">12</span></a>
											</span>
										</label>
										<label class="custom-control custom-checkbox mb-3">
											<input type="checkbox" class="custom-control-input" name="checkbox7" value="option3">
											<span class="custom-control-label">
												<a href="#" class="text-dark">Digital Marketing<span class="label label-secondary float-right">18</span></a>
											</span>
										</label>
										<label class="custom-control custom-checkbox mb-3">
											<input type="checkbox" class="custom-control-input" name="checkbox7" value="option3">
											<span class="custom-control-label">
												<a href="#" class="text-dark">Web Designing<span class="label label-secondary float-right">02</span></a>
											</span>
										</label>
										<label class="custom-control custom-checkbox mb-3">
											<input type="checkbox" class="custom-control-input" name="checkbox7" value="option3">
											<span class="custom-control-label">
												<a href="#" class="text-dark">Languages<span class="label label-secondary float-right">15</span></a>
											</span>
										</label>
										<label class="custom-control custom-checkbox mb-3">
											<input type="checkbox" class="custom-control-input" name="checkbox7" value="option3">
											<span class="custom-control-label">
												<a href="#" class="text-dark">App Development<span class="label label-secondary float-right">32</span></a>
											</span>
										</label>
									</div>
								</div>
							</div>
							<div class="card-header border-top">
								<h3 class="card-title">Levels</h3>
							</div>
							<div class="card-body">
								<div class="filter-product-checkboxs">
									<label class="custom-control custom-checkbox mb-2">
										<input type="checkbox" class="custom-control-input" name="checkbox11" value="option1">
										<span class="custom-control-label">
										Beginner
										</span>
									</label>
									<label class="custom-control custom-checkbox mb-2">
										<input type="checkbox" class="custom-control-input" name="checkbox12" value="option2">
										<span class="custom-control-label">
											Intermediate
										</span>
									</label>
									<label class="custom-control custom-checkbox mb-0">
										<input type="checkbox" class="custom-control-input" name="checkbox13" value="option2">
										<span class="custom-control-label">
											Advanced
										</span>
									</label>
								</div>
							</div>
							<div class="card-header border-top">
								<h3 class="card-title">Fees Range</h3>
							</div>
							<div class="card-body">
								<h6>
								   <label for="price">Fees Range:</label>
								   <input type="text" id="price">
								</h6>
								<div id="mySlider"></div>
							</div>
							<div class="card-header border-top">
								<h3 class="card-title">Type</h3>
							</div>
							<div class="card-body">
								<div class="filter-product-checkboxs">
									<label class="custom-control custom-checkbox mb-2">
										<input type="checkbox" class="custom-control-input" name="checkbox1" value="option1">
										<span class="custom-control-label">
										Offline Classes
										</span>
									</label>
									<label class="custom-control custom-checkbox mb-0">
										<input type="checkbox" class="custom-control-input" name="checkbox2" value="option2">
										<span class="custom-control-label">
											Online Classes
										</span>
									</label>
								</div>
							</div>
							<div class="card-header border-top">
								<h3 class="card-title">Posted By</h3>
							</div>
							<div class="card-body">
								<div class="filter-product-checkboxs">
									<label class="custom-control custom-checkbox mb-2">
										<input type="checkbox" class="custom-control-input" name="checkbox1" value="option1">
										<span class="custom-control-label">
											Others
										</span>
									</label>
									<label class="custom-control custom-checkbox mb-2">
										<input type="checkbox" class="custom-control-input" name="checkbox2" value="option2">
										<span class="custom-control-label">
										Institute
										</span>
									</label>
									<label class="custom-control custom-checkbox mb-0">
										<input type="checkbox" class="custom-control-input" name="checkbox2" value="option2">
										<span class="custom-control-label">
											Management
										</span>
									</label>
								</div>
							</div>
							<div class="card-footer">
								<a href="#" class="btn btn-primary btn-block">Apply Filter</a>
							</div>
						</div>
					</div>
					<!--/Right Side Content-->
				</div>
			</div>
		</section><!--Section-->

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

@endcomponent