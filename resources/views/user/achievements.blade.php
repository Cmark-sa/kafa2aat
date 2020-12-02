@component('components.app')

    <x-header />
    <div class="container">
        <hr>
        <h2 class="">ACHIEVEMENTS</h2>
        <hr>
        <div class="row">
            @foreach($achievements as $achievement)
            <div class="col-xl-4 col-md-12">
                <div class="card">
                    <div class="card-body">
                        <div class="team-section text-center">
                            <div class="team-img">
                                <img src="../assets/images/users/male/1.jpg" class="img-thumbnail rounded-circle alt=" alt="img">
                                <!-- <img src="{{asset('uploads/')}}" class="img-thumbnail rounded-circle alt=" alt="img"> -->
                            </div>
                            <h3 class="font-weight-bold dark-grey-text mt-4">{{$achievement->name}}</h3>
                            <h6 class="font-weight-bold blue-text ">{{$achievement->address}}</h6>
                            <p class="font-weight-normal dark-grey-text">
                            <i class="fa fa-quote-left pr-2"></i>{{$achievement->description}}</p>
                            
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
@endcomponent
