@component('components.app')

    <x-header />
    <section class="sptb">
        <div class="container">
            @if(session()->has('success'))
                <div class="alert alert-info toaster-div">
                    <span>{{session()->get('success')}}</span>
                </div>
            @endif
            @if(session()->has('error'))
                <div class="alert alert-danger toaster-div">
                    <span>{{session()->get('error')}}</span>
                </div>
            @endif
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
                                    <img src="{{auth()->user()->photo}}" class="brround" alt="user">
                                </div>
                                <a href="userprofile.html" class="text-dark"><h4 class="mt-3 mb-0 font-weight-semibold">
                                    {{auth()->user()->username}}</h4></a>
                            </div>
                        </div>

                        <div class="item1-links  mb-0">

                            <a href="mydash.html" class="active d-flex border-bottom">
                                <span class="icon1 mr-3"><i class="icon icon-user"></i></span> Edit Profile
                            </a>
                            <a href="myads.html" class=" d-flex  border-bottom">
                                <span class="icon1 mr-3"><i class="icon icon-diamond"></i></span> My Courses
                            </a>
                            <a href="myfavorite.html" class=" d-flex border-bottom">
                                <span class="icon1 mr-3"><i class="icon icon-heart"></i></span> My Favorite
                            </a>
                            <a href="manged.html" class="d-flex  border-bottom">
                                <span class="icon1 mr-3"><i class="icon icon-folder-alt"></i></span> Managed Courses
                            </a>
                            <a href="payments.html" class=" d-flex  border-bottom">
                                <span class="icon1 mr-3"><i class="icon icon-credit-card"></i></span> Payments
                            </a>
                            <a href="orders.html" class="d-flex  border-bottom">
                                <span class="icon1 mr-3"><i class="icon icon-basket"></i></span> Orders
                            </a>
                            <a href="tips.html" class="d-flex border-bottom">
                                <span class="icon1 mr-3"><i class="icon icon-game-controller"></i></span> Safety Tips
                            </a>
                            <a href="settings.html" class="d-flex border-bottom">
                                <span class="icon1 mr-3"><i class="icon icon-settings"></i></span> Settings
                            </a>
                            <a href="#" class="d-flex">
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
                                    <option value="3">Offline</option>
                                    <option value="4">Business</option>
                                    <option value="5">Online</option>
                                    <option value="6">Data Science</option>
                                    <option value="7">Driving</option>
                                    <option value="8">Education</option>
                                    <option value="9">Electronics</option>
                                    <option value="10">Pets &amp; Offline</option>
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
                    <div class="card mb-xl-0">
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
                            <h3 class="card-title">Edit Profile</h3>
                        </div>
                        <form method="post" action="{{route('update-user-info')}}" enctype="multipart/form-data">

                            @csrf

                            <div class="card-body">


                            <div class="row">
                                <div class="col-sm-6 col-md-6">
                                    <div class="form-group">
                                        <label class="form-label">User Name</label>
                                        <input type="text" name="username" class="form-control" value="{{auth()->user()->username}}" placeholder="User Name" required>
                                    </div>
                                </div>
                                <div class="col-sm-6 col-md-6">
                                    <div class="form-group">
                                        <label class="form-label">Email address</label>
                                        <input type="email" name="email" class="form-control" value="{{auth()->user()->email}}" placeholder="Email address" required>
                                    </div>
                                </div>
                                <div class="col-sm-6 col-md-6">
                                    <div class="form-group">
                                        <label class="form-label">Phone Number</label>
                                        <input type="number" name="phone" class="form-control" value="{{auth()->user()->phone}}" placeholder="Phone Number">
                                    </div>
                                </div>
                                <div class="col-sm-6 col-md-6">
                                    <div class="form-group">
                                        <label class="form-label">National ID</label>
                                        <input type="number" name="national_id" class="form-control" value="{{auth()->user()->national_id}}" placeholder="National ID" >
                                    </div>
                                </div>
                                <div class="col-sm-6 col-md-6">
                                    <div class="form-group">
                                        <label class="form-label">Nationality</label>
                                        <input type="text" name="nationality" class="form-control" value="{{auth()->user()->nationality}}" placeholder="Nationality">
                                    </div>
                                </div>
                                <div class="col-sm-6 col-md-6">
                                    <div class="form-group">
                                        <label class="form-label">Interests</label>
                                        <select name="interests" class="form-control custom-select select2-show-search">
                                          <option selected="">select interest</option>
                                            @foreach($specialists as $specialist)
                                                <option value="{{$specialist->id}}">{{$specialist->title}}</option>
                                            @endforeach
                                        </select>

                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="form-label">City</label>
                                        <input type="text" name="city" class="form-control" placeholder="City">
                                    </div>

                                </div>
                                <div class="col-sm-6 col-md-6">
                                    <div class="form-group">
                                        <label class="form-label">Address</label>
                                        <input type="text" class="form-control" value="{{auth()->user()->student->address}}" placeholder="Home Address" required>
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="form-label">New Password</label>
                                        <input type="password" name="password" class="form-control" placeholder="Password">
                                    </div>

                                </div>
                                <div class="col-sm-6 col-md-6">
                                    <div class="form-group">
                                        <label class="form-label">re-type new password</label>
                                        <input type="password" name="password_confirm" class="form-control"  placeholder="new Password">
                                    </div>
                                </div>


                                <div class="col-md-12">
                                    <div class="form-group mb-0">
                                        <label class="form-label">Upload Image</label>
                                        <div class="custom-file">
                                            <input type="file"    class="custom-file-input" name="photo">
                                            <label class="custom-file-label">Choose file</label>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                            <div class="image_render_div center-block" style="display: none">
                                <img id="image_render" src="#" width="250px" height="250px" alt="your image" class="brround" />
                            </div>
                        <div class="card-footer">
                            <button type="submit" class="btn btn-block btn-primary">Updated Profile</button>
                        </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>



@endcomponent
