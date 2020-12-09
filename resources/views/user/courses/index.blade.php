@component('components.app')
<x-header />

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
							<form method="GET" id="formGet">
                                <div class="form row no-gutters ">

                                    <div class="form-group  col-xl-6 col-lg-6 col-md-12 mb-0 bg-white ">
                                        <input type="text" name="search" class="form-control input-lg br-tr-md-0 br-br-md-0" id="search" placeholder="Search Courses.....">
                                    </div>
                                    <div class="form-group  col-xl-6 col-lg-6 col-md-12 mb-0 bg-white">
                                        <select name="type" id="type" class="form-control select2-show-search  border-bottom-0" data-placeholder="Select Category">
                                                <option selected disabled>Select Course Type</option>
                                                 <option value="1">Online</option>
                                                 <option value="2">Registered</option>
                                                 <option value="3">Headquarter</option>
                                        </select>
									</div>

								</div>
								</form>
                            </div>
                        </div>
                    </div>
									<div class="tab-content">
										<div class="tab-pane active fetchDataHere" id="tab-11">

										@foreach($courses as $course)
										<div class="card overflow-hidden">
											<div class="d-md-flex">
												<div class="item-card9-img">
													<div class="item-card9-imgs">
														<a href="/course-details/{{$course->id}}"></a>
														<img src="../assets/images/media/11.jpg" alt="img" class="cover-image">
													</div>
													<div class="item-overly-trans">
													@if($course->type == 1)
														<a href="/course-details/{{$course->id}}" class="bg-primary">Online</a>
													@elseif($course->type == 2)
														<a href="/course-details/{{$course->id}}" class="bg-primary">Registered</a>
													@else
													<a href="/course-details/{{$course->id}}" class="bg-primary">Headquarter</a>
													@endif
													</div>
												</div>
												<div class="card border-0 mb-0">
													<div class="card-body ">
														<div class="item-card9">
															<a href="/course-details/{{$course->id}}" class="text-dark"><h3 class="font-weight-semibold mt-1">{{$course->title}}</h3></a>
																<div class="mt-2 mb-2">
																<a href="#" class="mr-4"><span class="text-muted fs-13"><i class="fa fa-clock-o text-muted mr-1"></i>{{$course->date}}</span></a>
															</div>
															<p class="mb-0 leading-tight">{{$course->description}}</p>
														</div>
													</div>
													<div class="card-footer pt-4 pb-4">
														<div class="item-card9-footer d-flex">
															<div class="item-card9-cost">
																<h4 class="text-dark font-weight-semibold mb-0 mt-0">{{$course->price}}</h4>
															</div>
														</div>
													</div>
												</div>
											</div>
										</div>
										@endforeach
										{{$courses->links()}}
										</div>
									</div>
								</div>


							</div>
						</div>
						<!--/Coursed lists-->
					</div>

					<!--Right Side Content-->
					<div class="col-xl-3 col-lg-4 col-md-12">

						<div class="card mb-0">
							<div class="card-header">
								<h3 class="card-title">Specialists</h3>
							</div>
							<div class="card-body">
								<div class="" id="container">
									<div class="filter-product-checkboxs">
										@foreach($specialists as $specialist)
										<label class="custom-control custom-checkbox mb-3">
											<input onclick="getCoursesBySpecialistId({{$specialist->id}})" id="spec_id_input-{{$specialist->id}}" type="checkbox" class="custom-control-input" name="checkbox7" value="option3">
											<span class="custom-control-label">
												<a href="#"  class="text-dark">{{$specialist->title}}<span class="label label-secondary float-right">{{$specialist->courses->count()}}</span></a>
											</span>
										</label>
                                        @endforeach
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


<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>

<script>
	$(document).ready(function(){
		// console.log('fahmy is here');
		var type="";
		$('#type').on('change' , function(e){
			type = e.target.value;
		});

		$("#formGet").on('change' , function(e){
			name = e.target.value;
			// console.log(name);
			if(name != ""){
            $.get('/getDataCourse' , {search:name , type:type} , function(response , status){
                $('.fetchDataHere').empty();
                console.log(response.data);
				if(response.data != ""){
					var courseType="";

					for(var i = 0 ; i < response.data.length ; i++){
						if(response.data[i].type == 1){
							courseType = 'Online'
						}else if(response.data[i].type == 2){
							courseType = 'Registered'
						}else{
							courseType = 'Headquarter'
						}
						$('.fetchDataHere').append(`
							<div class="card overflow-hidden">
								<div class="d-md-flex">
									<div class="item-card9-img">
										<div class="item-card9-imgs">
											<a href="/course-details/`+response.data[i].id+`"></a>
											<img src="../assets/images/media/11.jpg" alt="img" class="cover-image">
										</div>
										<div class="item-overly-trans">
											<a href="/course-details/`+response.data[i].id+`" class="bg-primary">`+courseType+`</a>
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
		}else{
			    getAllCourses();
		}
        });
	});
</script>
@endcomponent
