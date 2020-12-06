@component('components.app')
    <x-header />
    <!--Section-->
    <section class="sptb">
        <div class="container">
            <div class="row">
                <div class="col-xl-8 col-lg-8 col-md-12">
                    <div class="card blog-detail">
                        <div class="card-body">
                            <div class="item7-card-img">
                                <img src="{{$service->image}}" alt="img" class="w-100" >
                                <div class="item7-card-text">
                                    <span class="badge badge-info">SERVICE TYPE</span>
                                </div>
                            </div>
                            <div class="item7-card-desc d-flex mb-2 mt-3">
                                <a href="#" class="text-muted"><i class="fa fa-calendar-o mr-2"></i>{{date('Y-m-d' , strtotime($service->created_at))}}</a>
{{--                                <a href="#" class="text-muted"><i class="fa fa-user-o text-muted mr-2"></i>Nissy Sten</a>--}}
                                <div class="ml-auto">
                                    <a href="#" class="text-muted"><i class="fa fa-comment-o mr-2"></i>0 Comments</a>
                                </div>
                            </div>
                            <a href="#" class="text-dark"><h2 class="font-weight-semibold">{{$service->title}}</h2></a>
                            <p>{{$service->description}}</p>
                        </div>
                    </div>

                        <!-- COMMENTS -->
{{--                    <div class="card">--}}
{{--                        <div class="card-header">--}}
{{--                            <h3 class="card-title">Comments</h3>--}}
{{--                        </div>--}}
{{--                        <div class="card-body p-0">--}}
{{--                            <div class="media mt-0 p-5">--}}
{{--                                <div class="d-flex mr-3">--}}
{{--                                    <a href="#"><img class="media-object brround" alt="64x64" src="../assets/images/users/male/1.jpg"> </a>--}}
{{--                                </div>--}}
{{--                                <div class="media-body">--}}
{{--                                    <h4 class="mt-0 mb-1 font-weight-bold">Joanne Scott--}}
{{--                                        <span class="fs-14 ml-0" data-toggle="tooltip" data-placement="top" title="" data-original-title="verified"><i class="fa fa-check-circle-o text-success"></i></span>--}}
{{--                                        <span class="fs-14 ml-2"> 4.5--}}
{{--												<i class="fa fa-star text-yellow"></i>--}}
{{--												<i class="fa fa-star text-yellow"></i>--}}
{{--												<i class="fa fa-star text-yellow"></i>--}}
{{--												<i class="fa fa-star text-yellow"></i>--}}
{{--												<i class="fa fa-star-half-o text-yellow"></i>--}}
{{--											</span>--}}
{{--                                    </h4>--}}
{{--                                    <small class="text-muted"><i class="fa fa-calendar"></i> Dec 21st  <i class=" ml-3 fa fa-clock-o"></i> 13.00  <i class=" ml-3 fa fa-map-marker"></i> Brezil</small>--}}
{{--                                    <p class="fs-15  mb-2 mt-2">--}}
{{--                                        Ut enim ad minim veniam, quis Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et  nostrud exercitation ullamco laboris   commodo consequat.--}}
{{--                                    </p>--}}
{{--                                    <a href="#" class="mr-2"><span class="badge badge-primary">Helpful</span></a>--}}
{{--                                    <a href="" class="mr-2 text-muted" data-toggle="modal" data-target="#Comment"><span class="badge badge-default">Comment</span></a>--}}
{{--                                    <a href="" class="mr-2 text-muted" data-toggle="modal" data-target="#report"><span class="badge badge-default">Report</span></a>--}}
{{--                                    <div class="media mt-5">--}}
{{--                                        <div class="d-flex mr-3">--}}
{{--                                            <a href="#"> <img class="media-object brround" alt="64x64" src="../assets/images/users/female/2.jpg"> </a>--}}
{{--                                        </div>--}}
{{--                                        <div class="media-body">--}}
{{--                                            <h4 class="mt-0 mb-1 font-weight-bold">Rose Slater <span class="fs-14 ml-0" data-toggle="tooltip" data-placement="top" title="" data-original-title="verified"><i class="fa fa-check-circle-o text-success"></i></span></h4>--}}
{{--                                            <small class="text-muted"><i class="fa fa-calendar"></i> Dec 22st  <i class=" ml-3 fa fa-clock-o"></i> 6.00  <i class=" ml-3 fa fa-map-marker"></i> Brezil</small>--}}
{{--                                            <p class="fs-15  mb-2 mt-2">--}}
{{--                                                Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris   commodo Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium  laboriosam, nisi ut aliquid ex ea commodi consequatur consequat.--}}
{{--                                            </p>--}}
{{--                                            <a href="" data-toggle="modal" data-target="#Comment"><span class="badge badge-default">Comment</span></a>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                            <div class="media p-5 border-top mt-0">--}}
{{--                                <div class="d-flex mr-3">--}}
{{--                                    <a href="#"> <img class="media-object brround" alt="64x64" src="../assets/images/users/male/3.jpg"> </a>--}}
{{--                                </div>--}}
{{--                                <div class="media-body">--}}
{{--                                    <h4 class="mt-0 mb-1 font-weight-bold">Edward--}}
{{--                                        <span class="fs-14 ml-0" data-toggle="tooltip" data-placement="top" title="" data-original-title="verified"><i class="fa fa-check-circle-o text-success"></i></span>--}}
{{--                                        <span class="fs-14 ml-2"> 4--}}
{{--											<i class="fa fa-star text-yellow"></i>--}}
{{--											<i class="fa fa-star text-yellow"></i>--}}
{{--											<i class="fa fa-star text-yellow"></i>--}}
{{--											<i class="fa fa-star text-yellow"></i>--}}
{{--											<i class="fa fa-star-o text-yellow"></i>--}}
{{--										</span>--}}
{{--                                    </h4>--}}
{{--                                    <small class="text-muted"><i class="fa fa-calendar"></i> Dec 21st  <i class=" ml-3 fa fa-clock-o"></i> 16.35  <i class=" ml-3 fa fa-map-marker"></i> UK</small>--}}
{{--                                    <p class="fs-15  mb-2 mt-2">--}}
{{--                                        Ut enim ad minim veniam, quis Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et  nostrud exercitation ullamco laboris   commodo consequat.--}}
{{--                                    </p>--}}
{{--                                    <a href="#" class="mr-2"><span class="badge badge-primary">Helpful</span></a>--}}
{{--                                    <a href="" class="mr-2 text-muted" data-toggle="modal" data-target="#Comment"><span class="badge badge-default">Comment</span></a>--}}
{{--                                    <a href="" class="mr-2 text-muted" data-toggle="modal" data-target="#report"><span class="badge badge-default">Report</span></a>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
                    <div class="card mb-lg-0">
                        <div class="card-header">
                            <h3 class="card-title">Write Your Comments</h3>
                        </div>
                        <div class="card-body">
                            <div class="form-group">
                                <input type="text" class="form-control" id="name1" placeholder="Your Name">
                            </div>
                            <div class="form-group">
                                <input type="email" class="form-control" id="email" placeholder="Email Coursedress">
                            </div>
                            <div class="form-group">
                                <textarea class="form-control" name="example-textarea-input" rows="6" placeholder="Write Your Comment"></textarea>
                            </div>
                            <a href="#" class="btn btn-primary">Submit</a>
                        </div>
                    </div>
                </div>
                <!--Rightside Content-->
                <div class="col-xl-4 col-lg-4 col-md-12">
                    <div class="card">
                        <div class="card-body">
                            <div class="input-group">
                                <input type="text" class="form-control br-tl-3  br-bl-3" placeholder="Search">
                                <div class="input-group-append ">
                                    <button type="button" class="btn btn-primary br-tr-3  br-br-3">
                                        Search
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Categories</h3>
                        </div>
                        <div class="card-body p-0">
                            <div class="list-catergory">
                                <div class="item-list">
                                    <ul class="list-group mb-0">
                                        <li class="list-group-item">
                                            <a href="#" class="text-dark">
                                                <i class="fa fa-code bg-primary text-primary"></i> IT
                                                <span class="badgetext badge badge-pill badge-light mb-0 mt-1">14</span>
                                            </a>
                                        </li>
                                        <li class="list-group-item">
                                            <a href="#" class="text-dark">
                                                <i class="fa fa-language bg-success text-success"></i>Language
                                                <span class="badgetext badge badge-pill badge-light mb-0 mt-1">63</span>
                                            </a>
                                        </li>
                                        <li class="list-group-item">
                                            <a href="#" class="text-dark">
                                                <i class="fa fa-heartbeat bg-info text-info"></i> Health
                                                <span class="badgetext badge badge-pill badge-light mb-0 mt-1">25</span>
                                            </a>
                                        </li>
                                        <li class="list-group-item">
                                            <a href="#" class="text-dark">
                                                <i class="fa fa-camera bg-warning text-warning"></i> Photoshop
                                                <span class="badgetext badge badge-pill badge-light mb-0 mt-1">74</span>
                                            </a>
                                        </li>
                                        <li class="list-group-item">
                                            <a href="#" class="text-dark">
                                                <i class="fa fa-flask bg-danger text-danger"></i> Data Science
                                                <span class="badgetext badge badge-pill badge-light mb-0 mt-1">18</span>
                                            </a>
                                        </li>
                                        <li class="list-group-item">
                                            <a href="#" class="text-dark">
                                                <i class="fa fa-mobile bg-blue text-blue"></i> Mobile computing
                                                <span class="badgetext badge badge-pill badge-light mb-0 mt-1">32</span>
                                            </a>
                                        </li>
                                        <li class="list-group-item border-bottom-0">
                                            <a href="#" class="text-dark">
                                                <i class="fa fa-paint-brush  bg-secondary text-pink"></i> Beautician
                                                <span class="badgetext badge badge-pill badge-light mb-0 mt-1">08</span>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
                <!--/Rightside Content-->
            </div>
        </div>
    </section><!--/Section-->



@endcomponent
