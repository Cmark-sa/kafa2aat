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
								<div class="row">
                        <div class="col-xl-10 col-lg-12 col-md-12 d-block mx-auto">
                            <div class="search-background bg-transparent">
                                <div class="form row no-gutters ">
                                    <div class="form-group  col-xl-4 col-lg-3 col-md-12 mb-0 bg-white ">
                                        <input type="text" name="search" class="form-control input-lg br-tr-md-0 br-br-md-0" id="search" placeholder="Search Courses.....">
                                    </div>
                                    <div class="form-group  col-xl-3 col-lg-3 col-md-12 mb-0 bg-white">
                                        <select name="types" id="types" class="form-control select2-show-search  border-bottom-0" data-placeholder="Select Category">
                                                <option selected disabled>Select Course Type</option>
                                                 <option value="1">Online</option>
                                                 <option value="2">Registered</option>
                                                 <option value="3">Headquarter</option>
                                        </select>
                                    </div>
								</div>
                            </div>
                        </div>
                    </div>
									<div class="tab-content">
										<div class="tab-pane active fetchDataHere" id="tab-11">
											
										</div>
									</div>
								</div>
								
								<!-- <div class="center-block text-center">
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
								</div> -->
							</div>
						</div>
						<!--/Coursed lists-->
					</div>

					<!--Right Side Content-->
					<div class="col-xl-3 col-lg-4 col-md-12">
						
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
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script>
	$(document).ready(function(){
		console.log('fahmy is here');
		$("#search").on('keyup' , function(e){
			name = e.target.value;
			console.log(name);
            $.get('/getDataCourse' , {search:name} , function(response , status){
                $('.fetchDataHere').empty();
                console.log(response.data);
				if(response.data != ""){
					for(var i = 0 ; i < response.data.length ; i++){
						$('.fetchDataHere').append(`
							<div class="card overflow-hidden">
								<div class="d-md-flex">
									<div class="item-card9-img">
										<div class="item-card9-imgs">
											<a href="/course-details/`+response.data[i].id+`"></a>
											<img src="../assets/images/media/11.jpg" alt="img" class="cover-image">
										</div>
										<div class="item-overly-trans">
											@if(`+response.data[i].type+`== 1)
												<a href="/course-details/`+response.data[i].id+`" class="bg-primary">Online</a>
											@elseif(`+response.data[i].type+` == 2)
												<a href="/course-details/`+response.data[i].id+`" class="bg-primary">Registered</a>
											@else
											<a href="/course-details/`+response.data[i].id+`" class="bg-primary">Headquarter</a>
											@endif
										</div>
									</div>
									<div class="card border-0 mb-0">
										<div class="card-body ">
											<div class="item-card9">
												<a href="/course-details/`+response.data[i].id+`" class="text-dark"><h3 class="font-weight-semibold mt-1">`+response.data[i].title+`</h3></a>
													<div class="mt-2 mb-2">
													<a href="#" class="mr-4"><span class="text-muted fs-13"><i class="fa fa-clock-o text-muted mr-1"></i>`+response.data[i].date+`</span></a>
												</div>
												<p class="mb-0 leading-tight">`+response.data[i].description+`</p>
											</div>
										</div>
										<div class="card-footer pt-4 pb-4">
											<div class="item-card9-footer d-flex">
												<div class="item-card9-cost">
													<h4 class="text-dark font-weight-semibold mb-0 mt-0">`+response.data[i].price+`</h4>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						`);
					}
				}else{
					$('.fetchDataHere').append(`
    		            <div class="text-center text-danger">لا توجد بيانات</div>
    		        `);
				}
            });
        });
	});
</script>
@endcomponent
