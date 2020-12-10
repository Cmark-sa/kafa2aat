@component('components.app')

    <x-header />
<section class="sptb">
    <div class="container">
        <div class="row">
            <div class="col-xl-3 col-lg-12 col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">My Dashboard</h3>
                    </div>
                    <div class="card-body text-center item-user border-bottom">
                        <div class="profile-pic">
                            <div class="profile-pic-img">
                                <span class="bg-success dots" data-toggle="tooltip" data-placement="top" title="online"></span>
                                <img src="../assets/images/users/female/25.jpg" class="brround" alt="user">
                            </div>
                            <a href="userprofile.html" class="text-dark"><h4 class="mt-3 mb-0 font-weight-semibold">Jacob Smith</h4></a>
                        </div>
                    </div>
                    <div class="item1-links  mb-0">
                        <a href="{{url('profile')}}" class="active d-flex border-bottom">
                            <span class="icon1 mr-3"><i class="icon icon-user"></i></span> Edit Profile
                        </a>
                        <a href="{{url('my-courses')}}" class=" d-flex  border-bottom">
                            <span class="icon1 mr-3"><i class="icon icon-diamond"></i></span> My Courses
                        </a>
{{--                        <a href="myfavorite.html" class="active  d-flex border-bottom">--}}
{{--                            <span class="icon1 mr-3"><i class="icon icon-heart"></i></span> My Favorite--}}
{{--                        </a>--}}
{{--                        <a href="manged.html" class="d-flex  border-bottom">--}}
{{--                            <span class="icon1 mr-3"><i class="icon icon-folder-alt"></i></span> Managed Courses--}}
{{--                        </a>--}}
{{--                        <a href="payments.html" class=" d-flex  border-bottom">--}}
{{--                            <span class="icon1 mr-3"><i class="icon icon-credit-card"></i></span> Payments--}}
{{--                        </a>--}}
{{--                        <a href="orders.html" class="d-flex  border-bottom">--}}
{{--                            <span class="icon1 mr-3"><i class="icon icon-basket"></i></span> Orders--}}
{{--                        </a>--}}
{{--                        <a href="tips.html" class="d-flex border-bottom">--}}
{{--                            <span class="icon1 mr-3"><i class="icon icon-game-controller"></i></span> Safety Tips--}}
{{--                        </a>--}}
{{--                        <a href="settings.html" class="d-flex border-bottom">--}}
{{--                            <span class="icon1 mr-3"><i class="icon icon-settings"></i></span> Settings--}}
{{--                        </a>--}}
                        <a href="{{route('logout')}}" class="d-flex">
                            <span class="icon1 mr-3"><i class="icon icon-power"></i></span> Logout
                        </a>
                    </div>
                </div>
                <div class="card my-select">
                    <div class="card-header">
                        <h3 class="card-title">Search Classes</h3>
                    </div>
                    <div class="card-body">
                        <div class="form-group">
                            <input type="text" class="form-control" id="text" placeholder="What are you looking for?">
                        </div>
                        <div class="form-group">
                            <select name="country" id="select-countries" class="form-control custom-select select2-show-search">
                                <option value="1" selected="">All Categories</option>
                                <option value="2">Web Security</option>
                                <option value="3">Restaurant</option>
                                <option value="4">Business</option>
                                <option value="6">Data Science</option>
                                <option value="7">Driving</option>
                                <option value="8">Education</option>
                                <option value="9">Electronics</option>
                                <option value="11">Computer</option>
                                <option value="12">Mobile</option>
                                <option value="13">Events</option>
                                <option value="14">Python</option>
                                <option value="15">Security Hacking</option>
                            </select>
                        </div>
                        <div class="">
                            <a href="#" class="btn  btn-primary">Search</a>
                        </div>
                    </div>
                </div>
                <div class="card mb-0">
                    <div class="card-header">
                        <h3 class="card-title">Safety Tips For Buyers</h3>
                    </div>
                    <div class="card-body">
                        <ul class="list-unstyled widget-spec  mb-0">
                            <li class="">
                                <i class="fa fa-check text-success" aria-hidden="true"></i> Meet Seller at public Place
                            </li>
                            <li class="">
                                <i class="fa fa-check text-success" aria-hidden="true"></i> Check item before you buy
                            </li>
                            <li class="">
                                <i class="fa fa-check text-success" aria-hidden="true"></i> Pay only after collecting item
                            </li>
                            <li class="ml-5 mb-0">
                                <a href="tips.html"> View more..</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-xl-9 col-lg-12 col-md-12">
                <div class="card mb-0">
                    <div class="card-header">
                        <h3 class="card-title">My Favorite Courses</h3>
                    </div>
                    <div class="card-body">
                        <div class="my-favadd table-responsive border-top userprof-tab">
                            <table class="table table-bordered table-hover mb-0 text-nowrap">
                                <thead>
                                <tr>
                                    <th></th>
                                    <th>Coursed</th>
                                    <th>Category</th>
                                    <th>Fees</th>
                                    <th>Course Status</th>
                                    <th >Action</th>
                                </tr>
                                </thead>
                                <tbody>
                                @if($courses->count())
                                <tr>
                                    <td>
                                        <label class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" name="checkbox" value="checkbox">
                                            <span class="custom-control-label"></span>
                                        </label>
                                    </td>
                                    <td>
                                        <div class="media mt-0 mb-0">
                                            <div class="card-aside-img">
                                                <a href="#"></a>
                                                <img src="../assets/images/media/1.jpg" alt="img">
                                            </div>
                                            <div class="media-body">
                                                <div class="card-item-desc ml-4 p-0 mt-2">
                                                    <a href="#" class="text-dark"><h4 class="font-weight-semibold">Coding</h4></a>
                                                    <a href="#"><i class="fa fa-clock-o mr-1"></i> Nov-25-2018 , 16:54 pm</a><br>
                                                    <a href="#"><i class="fa fa-tag mr-1"></i>Offline</a>
                                                </div>
                                            </div>
                                        </div>
                                    </td>
                                    <td>Languages</td>
                                    <td class="font-weight-semibold fs-16">$89</td>
                                    <td>
                                        <a href="#" class="badge badge-primary">Active</a>
                                    </td>
                                    <td>
                                        <a href="#" class="btn btn-danger btn-sm text-white" data-toggle="tooltip" data-original-title="Delete from Wishlist"><i class="fa fa-trash"></i></a>
                                        <a href="#" class="btn btn-success btn-sm text-white" data-toggle="tooltip" data-original-title="Buy Now"><i class="fa fa-shopping-cart"></i></a>
                                    </td>
                                </tr>
                                @endif
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@endcomponent
