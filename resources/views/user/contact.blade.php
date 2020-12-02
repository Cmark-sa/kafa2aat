@component('components.app')

    <x-header />
    <div class="container">
        <hr>
        <h2 class="">Contact Us</h2>
        <hr>
        @if (Session::has('message'))
            <div id="messageContactUs" class="alert alert-info">{{ Session::get('message') }}</div>
        @endif
 <div class="sptb bg-white">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<div class="row text-white">
							<div class="col-lg-6 col-md-12">
								<div class="card border-0">
									<div class="support-service bg-primary">
										<i class="fa fa-phone"></i>
										<h6>{{Session::get('sitePhone')}}</h6>
										<P>Free Support!</P>
									</div>
								</div>
							</div>
							<div class="col-lg-6 col-md-12">
								<div class="card border-0">
									<div class="support-service bg-secondary">
										<i class="fa fa-clock-o"></i>
										<h6>Mon-Sat(10:00-19:00)</h6>
										<p>Working Hours!</p>
									</div>
								</div>
							</div>
							<div class="col-lg-6 col-md-12">
								<div class="card border-0 mb-lg-0">
									<div class="support-service bg-success">
										<i class="fa fa-map-marker"></i>
										<h6>{{Session::get('siteAddress')}}</h6>
										<p> Saudi Arabia</p>
									</div>
								</div>
							</div>
							<div class="col-lg-6 col-md-12">
								<div class="card border-0 mb-0">
									<div class="support-service bg-orange">
										<i class="fa fa-envelope-o"></i>
										<h6>{{Session::get('siteEmail')}}</h6>
										<p>Support us!</p>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!--Contact-->

		<!--Contact-->
		<div class="sptb">
			<div class="container">
				<div class="row">
				    <div class="col-lg-6 col-xl-6  col-md-12">
					    <div class="map1">
							<div class="map-header-layer" id="map2"></div>
						</div>
					</div>
				    <div class="col-lg-6 col-xl-6 col-md-12">
                        <form action="{{route('userContact')}}" method="POST">
                            @csrf
                            <div class="card mb-0">
                                <div class="card-body">
                                    <div class="form-group">
                                        <input type="text" class="form-control" name="name" id="name1" placeholder="Your Name">
                                    </div>
                                    <div class="form-group">
                                        <input type="email" class="form-control" name="email" id="email" placeholder="Email Coursedress">
                                    </div>
                                    <div class="form-group">
                                        <input type="text" class="form-control" name="phone" id="phone" placeholder="Phone Number">
                                    </div>
                                    <div class="form-group">
                                        <textarea class="form-control" name="message" name="example-textarea-input" rows="6" placeholder="Message"></textarea>
                                    </div>
                                    <div class="text-left">
                                        <button type="submit" class="btn btn-primary">Send Message</button>
                                    </div>
                                </div>
                            </div>
                        </form>
					</div>
				</div>
			</div>
		</div>
		<!--/Contact-->
    </div>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script>
        $(document).ready(function(){
            setTimeout(function(){
                $('#messageContactUs').fadeOut(1000);// or fade, css display however you'd like.
            }, 3000);
        });
    </script>
@endcomponent
