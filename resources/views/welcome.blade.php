@component('components.app')
    <x-main-header />
 <div class="container text-center ">
 <section class="sptb">
			<div class="container">
				<div class="text-justify">
					<h2 class="mb-4 font-weight-semibold">Why {{$settings->site_name}}?</h2>
					<h5 class="leading-normal">{{$settings->site_description}}</h5>
					
				</div>
			</div>
		</section>
 </div>

@endcomponent
