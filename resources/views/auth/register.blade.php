@component('components.app')
<x-header />
<section class="sptb">
    <div class="container customerpage">
        <div class="row">
            <div class="single-page" >
                <div class="col-lg-5 col-xl-4 col-md-6 d-block mx-auto">
                    <div class="wrapper wrapper2">
                        <form id="Register" method="POST" action="{{ route('register') }}" class="card-body" tabindex="500">
                           @csrf
                           @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
                @endif
                            <h3>Register</h3>
                            <div class="username">
                                <input type="text" name="username">
                                <label>Username</label>
                            </div>
                            <div class="email">
                                <input type="email" name="email">
                                <label>Email</label>
                            </div>
                            <div class="phone">
                                <input type="text" name="phone">
                                <label>Phone</label>
                            </div>
                            <div class="passwd">
                                <input type="password" name="password">
                                <label>Password</label>
                            </div>
                            <div class="submit">
                                <button class="btn btn-primary btn-block" type="submit">Register</button>
                            </div>
                            <p class="text-dark mb-0">Already have an account?<a href="{{ route('login') }}" class="text-primary ml-1">Sign In</a></p>
                        </form>
                        <hr class="divider">
                        <div class="card-body">
                            <div class="text-center">
                                <div class="btn-group">
                                    <a href="https://www.facebook.com/" class="btn btn-icon mr-2 brround">
                                        <span class="fa fa-facebook"></span>
                                    </a>
                                </div>
                                <div class="btn-group">
                                    <a href="https://www.google.com/gmail/" class="btn  mr-2 btn-icon brround">
                                        <span class="fa fa-google"></span>
                                    </a>
                                </div>
                                <div class="btn-group">
                                    <a href="https://twitter.com/" class="btn  btn-icon brround">
                                        <span class="fa fa-twitter"></span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endcomponent
