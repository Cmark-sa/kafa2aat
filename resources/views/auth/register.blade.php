@component('components.app')
<x-header />


<section class="sptb">
    <div class="container customerpage">
        <div class="row">
            <div class="single-page" >
                <div class="col-lg-5 col-xl-4 col-md-6 d-block mx-auto">
                    <div class="wrapper wrapper2">
                        <form id="Register" class="card-body" tabindex="500">
                            <h3>Register</h3>
                            <div class="name">
                                <input type="text" name="name">
                                <label>Name</label>
                            </div>
                            <div class="mail">
                                <input type="email" name="mail">
                                <label>Mail or Username</label>
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
                                <a class="btn btn-primary btn-block" href="index.html">Register</a>
                            </div>
                            <p class="text-dark mb-0">Already have an account?<a href="login.html" class="text-primary ml-1">Sign In</a></p>
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
