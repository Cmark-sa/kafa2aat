@component('components.app')
    <x-main-header />





 <section class="sptb" id="about-us">
	<div class="container">
		<div class="text-justify">
			<h2 class="mb-4 font-weight-semibold">Why {{$settings->site_name}}?</h2>
			<h5 class="leading-normal">{{$settings->site_description}}</h5>
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
                <div class="item">
                    <div class="card mb-0">
                        <div class="item7-card-img">
                            <a href="#"></a>
                            <img src="{{asset($service->image)}}" alt="img" class="cover-image">
                        </div>
                        <div class="card-body p-4">
                            <div class="item7-card-desc d-flex mb-2">
                                <a href="#"><i class="fa fa-calendar-o mr-2"></i>{{date('Y-m-d' , strtotime($service->created_at))}}</a>
                                <div class="ml-auto">
                                    <a href="#"><i class="fa fa-comment-o mr-2"></i>0 Comments</a>
                                </div>
                            </div>
                            <a href="{{url('service/details/'.$service->id)}}" class="text-dark"><h3 class="font-weight-semibold">{{$service->title}}</h3></a>

                            <div class="d-flex align-items-center pt-2 mt-auto">
                                <a href="{{url('service/details/'.$service->id)}}" class="btn btn-primary">المزيد من التفاصيل</a>
{{--                                <img src="../assets/images/users/male/5.jpg" class="avatar brround avatar-md mr-3" alt="avatar-img">--}}
{{--                                <div>--}}
{{--                                    <a href="profile.html" class="text-default">Joanne Nash</a>--}}
{{--                                    <small class="d-block text-muted">1 day ago</small>--}}
{{--                                </div>--}}
{{--                                <div class="ml-auto text-muted">--}}
{{--                                    <a href="javascript:void(0)" class="icon d-none d-md-inline-block ml-3"><i class="fe fe-heart mr-1"></i></a>--}}
{{--                                    <a href="javascript:void(0)" class="icon d-none d-md-inline-block ml-3"><i class="fa fa-thumbs-o-up"></i></a>--}}
{{--                                </div>--}}
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
                @else
               <span class="text-warning text-center"> no services provided yet !</span>
                    @endif
            </div>
        </div>
    </section><!--/Section-->

@endcomponent
