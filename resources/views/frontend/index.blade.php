@extends('frontend.main_master')

@section('content')

<!---- Section Start Here ---------->

<!-- HEADER START HERE --->
@foreach ($project->header as $item)

    <section class="home-section" style="background: url({{asset($item->image)}}) #041F2A; background-repeat: no-repeat; background-size: cover; background-position: center center;">
        <div class="text-center">
            <h1>{{$item->menu}}</h1>
            <p>{{$item->sub_menu}}</p>
        </div>
    </section>
@endforeach

    <!-- SERVICES slider SECTION -->
    <div class="service-section col-lg-12">
        <h2 class="text-center">We are looking for you.....</h2>
        <div class="swiper service-swiper">
            <div class="swiper-wrapper">
                
                @foreach($project->slider as $sliders)
                <div class="swiper-slide">                  
                        <div class="dashb-cap-single">
                            <div class="image">
                                <img src="{{ asset($sliders->image) }}" alt="paint-roller"/>
                            </div>
                            <p class="lead little-description2">{{$sliders->content}}</p>
                        </div>
                    </div>
                @endforeach
            </div> 
        </div>
        <button class="swiper-button-next" style="overflow: hidden"><p style="font-size: 30px;"> <i class="fa-solid fa-angles-right"></i></p></button>
        <button class="swiper-button-prev" style="overflow: hidden"><p style="font-size: 30px;"> <i class="fa-solid fa-angles-left"></i></p></button>
    </div>

     <!--Core FEATURE SECTION -->
	<section class="core-feature-section col-lg-12">
		<div class="container-fluid">
			<h2>Core Feature</h2>
			<div class="cftr-card-container col-lg-10">
                @foreach ($project->core as $cores)
				<div class="single-card" data-aos="zoom-in">
					<div class="text-center">
						<img class="img-fluid" src="{{ asset($cores->image) }}" alt="">
					</div>
					<p class="text-center">{{$cores->heading}}</p>
				</div>
                @endforeach
			</div>
		</div>
	</section>

    <!-- FEATURE DETAILS SECTION -->
    <section class="feature-detail-section col-lg-12">
        <div class="container">
            <h2>Features Details</h2>
            @foreach ($project->feature as $features)
            <div class="ftrd-card-container">
                <div class="single-card row">
                    <div class="col-lg-6">
                        <div class="image"  data-aos="zoom-in">
                            <img src="{{ asset($features->image) }}"style="width:512px;height:341px" class="img-fluid" alt="">
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="text pb-4" data-aos="zoom-in">
                            <h4 class="text-center pt-2">{{$features->title}}</h4>
                            <p>{!!$features->content!!}</p>
                            <div class="text-center py-4">
                                <button class="custom-btn">Buy Now</button>
                                <button class="custom-btn">Demo</button>
                            </div>
                        </div>
                    </div>
                </div>              
            </div>
            @endforeach
            
        </div>
    </section>   
    <!-- IMAGE VIEW SECTION -->
	<div class="image-view-wrapper col-lg-12">
		<div class="image-section col-lg-12">
			<h2 class="text-center">Image view</h2>
			<div class="swiper image-swiper">
				<div class="swiper-wrapper">
                    @foreach($project->galary as $gallerys)
					<div class="swiper-slide">
						<a href=""><img src="{{ asset($gallerys->image) }}" alt="" class="img-fluid"/></a>
					</div>
                    @endforeach
				</div>
			</div>
            <button class="swiper-button-next" style="overflow: hidden"><p style="font-size: 30px;"> <i class="fa-solid fa-angles-right"></i></p></button>
			<button class="swiper-button-prev" style="overflow: hidden"><p style="font-size: 30px;"> <i class="fa-solid fa-angles-left"></i></p></button>
		</div>
	</div>

    <!--Service Package section-->
     <section class="service-package-section col-lg-12">
        <div class="container-fluid">
            <h2 class="srvc-title">Service Package</h2>
            <div class="srvc-card-container col-lg-9 row">                   
                @foreach ($project->service as $services)
                <div class="single-card">
                    <div class="text-center">
                        <h6>{{$services->title}}</h6>
                        <h5 class="price">{{$services->number}}</h5>
                    </div>
                    <div class="sub-card">
                        <div class="card-content" style="display: flex; flex-direction:column;"">
                            <p><i class="far fa-check-square"></i></p>
                            <p >{!!$services->content!!}</p>
                        </div>           
                    </div>
                    <div class="choose-btn">
                        <button> <a href="">Choose Plan</a> </button>
                    </div>                 
                </div>
                @endforeach
            </div>
        </div>
    </section>

<!----- Section End Here ----------->

@endsection
