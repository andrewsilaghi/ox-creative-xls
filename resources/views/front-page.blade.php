@extends('layouts.app')

@section('content')
  @while(have_posts()) @php the_post() @endphp
    @include('partials.page-header')
    @include('partials.content-page')
<div class="container intro">
    <div class="row">
        <div class="intro__header">
            <h1 class="intro__header-text letters-spaced font-weight-bold text-uppercase">We are XLS partners</h1>
            <h2 class="intro__sub-header letters-spaced font-italic">Lorem ipsum dolor sit amet, consectetur adipiscing <br>
        elit, sed do eiusmod tempo.</h2>
        </div>
    </div>
    <div class="row intro__description">
        <div class="col-md-6">
            <p class="intro__description-col">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui blandit praesent </p>
        </div>
        <div class="col-md-6">
            <p class="intro__description-col">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui blandit praesent </p>
        </div>
    </div>
    <div class="row xls-video" id="video">
        <div class="embed-responsive embed-responsive-21by9" >
            <iframe class="embed-responsive-item xls-video__embed" src="https://player.vimeo.com/video/270398254?title=0&byline=0&portrait=0" allowfullscreen></iframe>
        </div>
        <div class="vl mr-auto ml-auto"></div>
        <div class="col-md-12">
            <div class="circle-video mr-auto ml-auto"></div>
        </div>
    </div>
</div>
<div class="testimonial carousel slide" id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel">
    <div class="testimonail__quote-frame">
        <div class="carousel-inner">
            <div class="container-fluid text-center">
                <div class="item active">
                    <div class="row">
                        <div class="col-md-8 offset-md-2">
                            <div class="circle mr-auto ml-auto"></div>
                            <span class="testimonail__quote-text mr-auto ml-auto">“Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit
        lobortis nisl ut aliquip ex ea commodo consequat.”</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="testimonail__quote-author">
        <div class="container-fluid text-center">
            <span class="testimonail__quote-author-text letters-spaced mr-auto ml-auto font-italic font-weight-bold text-uppercase">Name Name</span>
            <span class="testimonail__quote-author-description letters-spaced mr-auto ml-auto font-italic">Position Title, Company Name</span>
        </div>
    </div>
</div>
<div class="stat">
    <div class="row no-gutters">
        <div class="stat__boxes col-md-6">
            <div class="row row-eq-height">
                <div class="col-md-12">
                    <div class="row">
                        <div class="col-md-6 border-1">
                            <img class="img-fluid stat__boxes-icon" src="@asset('images/bulb.png')" alt="">
                            <h1 class="text-center stat__boxes-title letters-spaced">Stat Topic</h1>
                            <div class="stat__boxes-description">
                                <p class="text-center">Lorem ipsum dolor sit amet, <br>
                                    sectetuer adipiscing elit, <br> wisi enim ad minim veniam.</p>
                            </div>
                        </div>
                        <div class="col-md-6 border-btm">
                            <img class="img-fluid stat__boxes-icon" src="@asset('images/brief.png')" alt="">
                            <h1 class="text-center stat__boxes-title letters-spaced">Stat Topic</h1>
                            <div class="stat__boxes-description">
                                <p class="text-center">Lorem ipsum dolor sit amet, <br>
                                    sectetuer adipiscing elit, <br> wisi enim ad minim veniam.</p>
                            </div>
                        </div>
                        <div class="col-md-6 border-rht">
                            <img class="img-fluid stat__boxes-icon" src="@asset('images/mail.png')" alt="">
                            <h1 class="text-center stat__boxes-title letters-spaced">Stat Topic</h1>
                            <div class="stat__boxes-description">
                                <p class="text-center">Lorem ipsum dolor sit amet, <br>
                                    sectetuer adipiscing elit, <br> wisi enim ad minim veniam.</p>
                            </div>
                        </div>
                        <div class="col-md-6 border-2">
                            <img class="img-fluid stat__boxes-icon" src="@asset('images/medal.png')" alt="">
                            <h1 class="text-center stat__boxes-title letters-spaced">Stat Topic</h1>
                            <div class="stat__boxes-description">
                                <p class="text-center">Lorem ipsum dolor sit amet, <br>
                                    sectetuer adipiscing elit, <br> wisi enim ad minim veniam.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-12">
                </div>
            </div>
        </div>
        <div class="col-md-6 stat__wood">
        </div>
    </div>
</div>
<div class="transactions">
    <div class="container">
        <div class="transactions__header">
            <div class="row">
                <div class="col-md-12">
                    <h1 class="transactions__header-title letters-spaced text-uppercase text-center">Recent transactions</h1>
                    <hr class="transactions__header-underline">
                </div>
            </div>
            <div class="row">
                <div class="col-md-10 offset-md-1">
                    <p class="text-center transactions__description">A few sentences going somewhere along these lines: “XLS closes more deals each month than the leading 6 competitors.  We have work in nearly every industry.  We are sure to have closed a deal similar to yours.  Explore our recent transactions.”</p>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12 text-center"><button type="button" class="transactions__button letters-spaced font-italic">view all transactions</button>
                </div>
            </div>
            <div class="toombstone">
                <div class="row">
                    <div class="col-md-3">
                        <div class="container-img"><img class="toombstone__img img-fluid" src="@asset('images/toomb-stone.png')" alt="">
                            <div class="overlay">
                                <a href="#" class="icon" title="User Profile">
      <p class="text-uppercase letters-spaced overlay-text">INDUSTRY <br> SECTOR</p>
      </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="container-img"><img class="toombstone__img img-fluid" src="@asset('images/toomb-stone.png')" alt="">
                            <div class="overlay">
                                <a href="#" class="icon" title="User Profile">
      <p class="text-uppercase letters-spaced overlay-text">INDUSTRY <br> SECTOR</p>
      </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="container-img"><img class="toombstone__img img-fluid" src="@asset('images/toomb-stone.png')" alt="">
                            <div class="overlay">
                                <a href="#" class="icon" title="User Profile">
      <p class="text-uppercase letters-spaced overlay-text">INDUSTRY <br> SECTOR</p>
      </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="container-img"><img class="toombstone__img img-fluid" src="@asset('images/toomb-stone.png')" alt="">
                            <div class="overlay">
                                <a href="#" class="icon" title="User Profile">
      <p class="text-uppercase letters-spaced overlay-text">INDUSTRY <br> SECTOR</p>
      </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row mt-6">
                    <div class="col-md-3">
                        <div class="container-img"><img class="toombstone__img img-fluid" src="@asset('images/toomb-stone.png')" alt="">
                            <div class="overlay">
                                <a href="#" class="icon" title="User Profile">
      <p class="text-uppercase letters-spaced overlay-text">INDUSTRY <br> SECTOR</p>
      </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="container-img"><img class="toombstone__img img-fluid" src="@asset('images/toomb-stone.png')" alt="">
                            <div class="overlay">
                                <a href="#" class="icon" title="User Profile">
      <p class="text-uppercase letters-spaced overlay-text">INDUSTRY <br> SECTOR</p>
      </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="container-img"><img class="toombstone__img img-fluid" src="@asset('images/toomb-stone.png')" alt="">
                            <div class="overlay">
                                <a href="#" class="icon" title="User Profile">
      <p class="text-uppercase letters-spaced overlay-text">INDUSTRY <br> SECTOR</p>
      </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="container-img"><img class="toombstone__img img-fluid" src="@asset('images/toomb-stone.png')" alt="">
                            <div class="overlay">
                                <a href="#" class="icon" title="User Profile">
      <p class="text-uppercase letters-spaced overlay-text">INDUSTRY <br> SECTOR</p>
      </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
  @endwhile
@endsection
