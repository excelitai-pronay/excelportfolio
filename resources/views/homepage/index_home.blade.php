@extends('homepage.main_home_master')

@section('content')

<div id="wrapper">

    <section class="container-fluid top-slider-container" id="goUp">
      <div class="col-12">
        <div class="first-slider-container mb-5 mx-3">
          <div class="container">
            <div class="slider-content row ">
              <div class="col-lg-4">
                <div class="single-slider">
                  <div>
                    <h2>We Help Businesses <span style="color: #3fb95e;"> Grow </span></br> Through Effective Design
                    </h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                      Mattis id nullam lectus volutpat in a enim, lacus. Nibh
                      aliquam in elit volutpat condimentum. </p>
                    <div class="d-flex align-items-center">
                      <button>Get Start</button> <i class="fas fa-play-circle icon ms-3"></i>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-lg-8">
                <div class="single-slider img-part">
                  <img class="image" src="homepage/assets/image/top-slider-image/image 27.png" alt="">
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="col-12">
        <div class="first-slider-container mb-5 mx-3">
          <div class="container">
            <div class="slider-content row ">
              <div class="col-lg-4">
                <div class="single-slider">
                  <div>
                    <h2>We Help Businesses <span style="color: #3fb95e;"> Grow </span></br> Through Effective Design
                    </h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                      Mattis id nullam lectus volutpat in a enim, lacus. Nibh
                      aliquam in elit volutpat condimentum.</p>
                    <div class="d-flex align-items-center">
                      <button>Get Start</button> <i class="fas fa-play-circle icon ms-3"></i>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-lg-8">
                <div class="single-slider img-part">
                  <img class="image" src="homepage/assets/image/top-slider-image/image 27.png" alt="">
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="col-12">
        <div class="first-slider-container mb-5 mx-3">
          <div class="container">
            <div class="slider-content row ">
              <div class="col-lg-4">
                <div class="single-slider">
                  <div>
                    <h2>We Help Businesses <span style="color: #3fb95e;"> Grow </span></br> Through Effective Design
                    </h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                      Mattis id nullam lectus volutpat in a enim, lacus. Nibh
                      aliquam in elit volutpat condimentum. </p>
                    <div class="d-flex align-items-center">
                      <button>Get Start</button> <i class="fas fa-play-circle icon ms-3"></i>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-lg-8">
                <div class="single-slider img-part">
                  <img class="image" src="homepage/assets/image/top-slider-image/image 27.png" alt="">
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

    </section>

    <section class="container-fluid progress-container-wrapper py-5 mb-5">
      <p class="text-center">WHAT ARE YOU WAITING FOR?</p>
      <h2>Helpful For Your Business Growth</h2>

      <div class="row progress-container pt-5">
        <div class="col-lg-6 col-md-12 col-sm-12 d-flex justify-content-center">
          <div class="image-part">
            <img src="homepage/assets/image//top-slider-image//progress.png" class="img-fluid image" alt="">
          </div>
        </div>
        <div class="col-lg-6 col-md-12 col-sm-12">
          <div class="progress-part">
            <p class="pt-3">Lorem ipsum dolor sit amet, conse adipiscing elit. Enim lobortis nibh sem sed nunc
              consectetur
              eget. Sit mattis eleifend adipiscing viverra. Feugiat faucibus venenatis dapibus dictumst. Tincidunt
              tincidunt habitant risus at scelerisque. eugiat faucibus venenatis dapibus dictumst. Tincidunt tincidunt
              habitant risus at scelerisque. Tincidunt tincidunt habitant risus at scelerisque. eugiat faucibus
              venenatis dapibus dictumst. i</p>

            <p class="prgs-title pt-4">Development</p>
            <div class="single-prgs">
              <div class="inner-prgs" style="width: 82%;">
                <span class="prgs-float">82%</span>
              </div>
            </div>

            <p class="prgs-title">Support</p>
            <div class="single-prgs">
              <div class="inner-prgs" style="width: 75%;">
                <span class="prgs-float">75%</span>
              </div>
            </div>

            <p class="prgs-title">Scalable</p>
            <div class="single-prgs">
              <div class="inner-prgs" style="width: 90%;">
                <span class="prgs-float">90%</span>
              </div>
            </div>

            <p class="prgs-title">Cost</p>
            <div class="single-prgs">
              <div class="inner-prgs" style="width: 88%;">
                <span class="prgs-float">88%</span>
              </div>
            </div>
          </div>
        </div>
    </section>

    <section class="service-section">
      <h6>Our Service</h6>
      <h2>Boost Your Business Growth With Excel IT AI</h2>
      <!-- start row -->
      <div class="row mt-lg-2">
        @foreach ($projects as $project)
        <div class="col-lg-4 col-md-6 col-12 mt-4">
          <div class="card">
            <div class="card-body">
              <img src="{{asset($project->icon)}}" width="50" height="50" alt="image1">
              <div class="card-title">
                <h6>{{$project->title}}</h6>
              </div>
              <div class="card-subtitle">
                <p>{{$project->description}}</p>
              </div>
              <a href="{{route('projectdetails',$project->id)}}" class="btn btn-primary">Read More</a>
            </div>
         
          </div> 
        </div>
        @endforeach
        <!-- end col -->
   
      </div>
      <!-- end row -->
      <div class="brows-more py-5">
        <button class="btn btn-primary">Browse More<i class="fas fa-angle-double-down icon"
            style="margin-left: 11px;"></i></button>
      </div>
    </section>

    <section class="counter-wrapper pb-5">
      <!-- Counterup -->
      <div class="counterup-section">
        <div class="row">
          <div class="col-lg-3 col-md-4 col-sm-12">
            <div class="circle">
              <div class="d-flex align-items-center">
                <h3 class=" counter pt-3" data-target="10000"> 0</h3>
                <i class="fas fa-plus pt-2 ms-2"></i>
              </div>
            </div>
            <div class="text d-flex justify-content-center">
              <i class="fas fa-download download-icon"></i>
              <h4>Installation</h4>
            </div>
          </div>
          <div class="col-lg-3 col-md-4 col-sm-12">
            <div class="circle">
              <div class="d-flex align-items-center">
                <h3 class=" counter pt-3" data-target="100"> 0</h3>
                <i class="fas fa-plus pt-2 ms-2"></i>
              </div>
            </div>
            <div class="text d-flex justify-content-center">
              <i class="far fa-check-square download-icon"></i>
              <h4>Project Completed</h4>
            </div>

          </div>
          <div class="col-lg-3 col-md-4 col-sm-12">
            <div class="circle">
              <div class="d-flex align-items-center">
                <h3 class=" counter pt-3" data-target="750"> 0</h3>
                <i class="fas fa-plus pt-2 ms-2"></i>
              </div>
            </div>
            <div class="text d-flex justify-content-center">
              <i class="far fa-thumbs-up download-icon"></i>
              <h4>Satisfied Customer</h4>
            </div>
          </div>
          <div class="col-lg-3 col-md-4 col-sm-12">
            <div class="circle">
              <div class="d-flex align-items-center">
                <h3 class=" counter pt-3" data-target="50"> 0</h3>
                <i class="fas fa-plus pt-2 ms-2"></i>
              </div>
            </div>
            <div class="text d-flex justify-content-center">
              <i class="far fa-chart-bar download-icon"></i>
              <h4>Customer Attrition 1%</h4>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section class="review-section pb-3 container">
      <h6>Here a look at our</h6>
      <h2 class="py-3">CLIENT OPINIONS <span>& REVIEWS</span></h2>
      <!-- slider start -->
      <div class="slider-container">
        <div class="col-lg-6 single-slider">
          <div class="card">
            <div class="card-body">
              <p>Their <span>Hospital Management Software</span> is the best software. we are happy by using it.</p>
              <h4>Monowara Hospital Limited</h4>
            </div>
          </div>
          <div>
            <img src="homepage/assets/image/review image/image 1.png" alt="image" class="review-image pb-5">
          </div>
        </div>
        <!-- end col -->
        <div class="col-lg-6 single-slider">
          <div class="card">
            <div class="card-body">
              <p>Their <span>Hotel Management Software</span> is the best software. we are happy by using it.</p>
              <h4>Hotel Bliss</h4>
            </div>
          </div>
          <div>
            <img src="homepage/assets/image/review image/image 2.png" alt="image" class="review-image pb-5">
          </div>
        </div>
        <!-- end col-->
        <div class="col-lg-6 single-slider">
          <div class="card">
            <div class="card-body">
              <p>Their <span>Hospital Management Software</span> is the best software. we are happy by using it.</p>
              <h4>Monowara Hospital Limited</h4>
            </div>
          </div>
          <div>
            <img src="homepage/assets/image/review image/image 1.png" alt="image" class="review-image pb-5">
          </div>
        </div>
        <!-- end col -->
      </div>
      <!-- slider end -->
    </section>
</div>

@endsection

