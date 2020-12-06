@component('components.app')
    <x-main-header />





 <section class="sptb" id="about-us">
	<div class="container">
		<div class="text-center">
			<h2 class="mb-4 font-weight-semibold">Why {{$settings->site_name}}?</h2>
			<h4 class="leading-normal">{{$settings->site_description}}</h4>
		</div>
	</div>
 </section>

    <!--Section-->
    <section class="sptb bg-white">
        <div class="container">
            <div class="section-title center-block text-center">
                <h2>Services</h2>
                <span class="sectiontitle-design"><span class="icons"></span></span>
                <p>some text will be provided here</p>
            </div>
            <div id="defaultCarousel" class="owl-carousel Card-owlcarousel owl-carousel-icons">
                @if($services->count() > 0)

                @foreach($services as $service)

                            <div class="card overflow-hidden">
                                <div class="ribbon ribbon-top-left text-danger"><span class="bg-danger">Free</span></div>
                                <div class="item-card7-img">
                                    <div class="item-card7-imgs">

                                        <img src="{{$service->image}}" alt="img" class="cover-image" style="width: 100%;height: 10vw;object-fit: fill;">
                                    </div>
                                    <div class="item-card7-overlaytext">
                                        <a href="education.html" class="text-white"> SERVICE TYPE</a>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <div class="item-card7-desc">
                                        <div class="item-card7-text">
                                            <a href="{{url('service/details/'.$service->id)}}" class="text-dark"><h3 class="font-weight-semibold">
                                                {{$service->title}}</h3></a>
                                        </div>
                                        <ul class="d-flex mb-2">
                                            <li class=""><a href="#" class="icons text-muted"><i class="icon icon-location-pin  mr-1"></i> Saudi Arabia</a></li>
                                            <li><a href="#" class="icons text-muted"><i class="icon icon-event  mr-1"></i>{{date('m' , strtotime($service->created_at))}} min ago</a></li>
{{--                                            <li class=""><a href="#" class="icons text-muted"><i class="icon icon-phone  mr-1"></i> 14 675 65</a></li>--}}
                                        </ul>
                                        <p class="mb-0">{{\Illuminate\Support\Str::limit($service->description , 200)}}</p>
                                    </div>
                                </div>

                                <div class="card-body">
                                    <a href="{{url('service/details/'.$service->id)}}" class="btn btn-primary btn-block">More Details</a>
                                </div>
                            </div>


                @endforeach
                @else
               <span class="text-warning text-center"> no services provided yet !</span>
                    @endif
            </div>
        </div>

    </section><!--/Section-->

    <!--Section-->
    <section>
        <div class="cover-image about-widget sptb bg-background-color" data-image-src="../assets/images/banners/banner4.jpg">
            <div class="content-text mb-0">
                <div class="container">
                    <div class="text-center text-white ">
                        <h2 class="mb-2 font-weight-400">Let's Update Your Skills with Our Training Professionals...</h2>
                        <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.</p>
                        <div class="mt-5">
                            <a href="{{route('register')}}" class="btn btn-lg btn-primary">Register Now!</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section><!--/Section-->


    <hr>
    @if($partners->count() > 0)
<section class="partners">
    <div class="container">

        <h3 class="">Our Partners</h3>
        <hr>

        <div class="row">
            @foreach($partners as $partner)
                <div class="col-xl-4 col-md-12">
                    <div class="card">
                        <div class="card-body">
                            <div class="team-section text-center">
                                <div class="team-img">
                                    <img src="{{$partner->logo}}" class="img-thumbnail rounded-circle alt=" alt="img" style="height: 5vw;object-fit: cover">
                                </div>
                                <h3 class="font-weight-bold dark-grey-text mt-4">{{$partner->company_name}}</h3>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>

    @endif

    <hr>


@endcomponent
