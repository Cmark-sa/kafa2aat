@component('components.app')
    <x-main-header />
 <div class="container text-center ">


     <h1>Kafa2aat App</h1>

 <section class="sptb" id="about-us">
	<div class="container">
		<div class="text-justify">
			<h2 class="mb-4 font-weight-semibold">Why {{$settings->site_name}}?</h2>
			<h5 class="leading-normal">{{$settings->site_description}}</h5>
		</div>
	</div>
 </section>

 </div>

@endcomponent
