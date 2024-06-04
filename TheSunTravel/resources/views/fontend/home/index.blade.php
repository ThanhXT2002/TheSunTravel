@extends('fontend.layout.master')
@section('content')

@include('fontend.layout.component.carouselHome')

    <div class="container-fluid search-bar position-relative" style="top: -50%; transform: translateY(-50%);">
        <div class="container">
            <div class="position-relative rounded-pill w-100 mx-auto p-5" style="background: rgba(19, 53, 123, 0.8);">
                <form action="{{ route('search') }}" method="get">
                    <input class="form-control border-0 rounded-pill w-100 py-3 ps-4 pe-5" type="text" name="keyword"
                    placeholder="Nhập từ khóa tìm kiếm">
                <button type="submit" class="btn btn-primary rounded-pill py-2 px-4 position-absolute me-2"
                    style="top: 50%; right: 46px; transform: translateY(-50%);">Tìm kiếm</button>
                </form>
            </div>
        </div>
    </div>


     <!-- Packages Start -->
 <div class="container-fluid packages">
    <div class="container py-5">
        <div class="mx-auto text-center mb-5" style="max-width: 900px;">
            <h5 class="section-title px-3">Packages</h5>
            <h1 class="mb-0">Tour mới</h1>
        </div>
        <div class="packages-carousel owl-carousel">
            @foreach($tours as $tour) 
            <div class="packages-item">
                <div class="packages-img">
                    <img src="{{ $tour->image }}" class="img-fluid w-100 rounded-top" alt="Image">
                    <div class="packages-info d-flex border border-start-0 border-end-0 position-absolute"
                        style="width: 100%; bottom: 0; left: 0; z-index: 5;">
                        
                        <small class="flex-fill text-center border-end py-2"><i class="fa fa-calendar-alt me-2"></i>{{$tour->time}}</small>
                        <small class="flex-fill text-center py-2"><i class="fa fa-user me-2"></i>{{$tour->quantity}}</small>
                    </div>
                </div>
                <div class="packages-content bg-light">
                    <div class="p-4 pb-0">
                        <h5 class="mb-0">{{$tour->name}}</h5>
                        <small class="text-uppercase font-weight">
                            <i class="fa fa-map-marker-alt me-2"></i>Điểm đến:</small>
                        <div class="mb-3">
                           {{$tour->place}}
                        </div>
                        <div class="mb-3">
                            <strong> Giá: {{ number_format($tour->price, 0, ',', '.') }} VNĐ</strong>
                        </div>
                        <p class="mb-4">{{$tour->description}}</p>
                    </div>
                    <div class="row bg-primary rounded-bottom mx-0">
                        <div class="col-6 text-start px-0">
                            <a href="{{route('tour.detail', $tour->url)}}" class="btn-hover btn text-white py-2 px-4">Chi tiết</a>
                        </div>
                        <div class="col-6 text-end px-0">
                            <a href="https://zalo.me/0936867190" class="btn-hover btn text-white py-2 px-4">Liên hệ ngay</a>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</div>
<!-- Packages End -->

    {{-- <!-- About Start -->
    <div class="container-fluid about py-5">
        <div class="container py-5">
            <div class="row g-5 align-items-center">
                <div class="col-lg-5">
                    <div class="h-100" style="border: 50px solid; border-color: transparent #13357B transparent #13357B;">
                        <img src="{{ asset('fontend/img/about-img.jpg') }}" class="img-fluid w-100 h-100" alt="">
                    </div>
                </div>
                <div class="col-lg-7"
                    style="background: linear-gradient(rgba(255, 255, 255, .8), rgba(255, 255, 255, .8)), url(img/about-img-1.png);">
                    <h5 class="section-about-title pe-3">About Us</h5>
                    <h1 class="mb-4">Welcome to <span class="text-primary">Travela</span></h1>
                    <p class="mb-4">Lorem ipsum dolor sit amet consectetur adipisicing elit. Molestias, dolorum, doloribus
                        sunt dicta, officia voluptatibus libero necessitatibus natus impedit quam ullam assumenda? Id atque
                        iste consectetur. Commodi odit ab saepe!</p>
                    <p class="mb-4">Lorem ipsum dolor sit amet consectetur adipisicing elit. Accusantium quos voluptatem
                        suscipit neque enim, doloribus ipsum rem eos distinctio, dignissimos nisi saepe nulla? Libero
                        numquam perferendis provident placeat molestiae quia?</p>
                    <div class="row gy-2 gx-4 mb-4">
                        <div class="col-sm-6">
                            <p class="mb-0"><i class="fa fa-arrow-right text-primary me-2"></i>First Class Flights</p>
                        </div>
                        <div class="col-sm-6">
                            <p class="mb-0"><i class="fa fa-arrow-right text-primary me-2"></i>Handpicked Hotels</p>
                        </div>
                        <div class="col-sm-6">
                            <p class="mb-0"><i class="fa fa-arrow-right text-primary me-2"></i>5 Star Accommodations</p>
                        </div>
                        <div class="col-sm-6">
                            <p class="mb-0"><i class="fa fa-arrow-right text-primary me-2"></i>Latest Model Vehicles</p>
                        </div>
                        <div class="col-sm-6">
                            <p class="mb-0"><i class="fa fa-arrow-right text-primary me-2"></i>150 Premium City Tours</p>
                        </div>
                        <div class="col-sm-6">
                            <p class="mb-0"><i class="fa fa-arrow-right text-primary me-2"></i>24/7 Service</p>
                        </div>
                    </div>
                    <a class="btn btn-primary rounded-pill py-3 px-5 mt-2" href="">Read More</a>
                </div>
            </div>
        </div>
    </div>
    <!-- About End --> --}}

    <!-- Services Start -->
    {{-- <div class="container-fluid bg-light service py-5">
        <div class="container py-5">
            <div class="mx-auto text-center mb-5" style="max-width: 900px;">
                <h5 class="section-title px-3">Searvices</h5>
                <h1 class="mb-0">Our Services</h1>
            </div>
            <div class="row g-4">
                <div class="col-lg-6">
                    <div class="row g-4">
                        <div class="col-12">
                            <div
                                class="service-content-inner d-flex align-items-center bg-white border border-primary rounded p-4 pe-0">
                                <div class="service-content text-end">
                                    <h5 class="mb-4">WorldWide Tours</h5>
                                    <p class="mb-0">Dolor sit amet consectetur adipisicing elit. Non alias eum, suscipit
                                        expedita corrupti officiis debitis possimus nam laudantium beatae quidem dolore
                                        consequuntur voluptate rem reiciendis, omnis sequi harum earum.
                                    </p>
                                </div>
                                <div class="service-icon p-4">
                                    <i class="fa fa-globe fa-4x text-primary"></i>
                                </div>
                            </div>
                        </div>
                        <div class="col-12">
                            <div
                                class="service-content-inner d-flex align-items-center  bg-white border border-primary rounded p-4 pe-0">
                                <div class="service-content text-end">
                                    <h5 class="mb-4">Hotel Reservation</h5>
                                    <p class="mb-0">Dolor sit amet consectetur adipisicing elit. Non alias eum, suscipit
                                        expedita corrupti officiis debitis possimus nam laudantium beatae quidem dolore
                                        consequuntur voluptate rem reiciendis, omnis sequi harum earum.
                                    </p>
                                </div>
                                <div class="service-icon p-4">
                                    <i class="fa fa-hotel fa-4x text-primary"></i>
                                </div>
                            </div>
                        </div>
                        <div class="col-12">
                            <div
                                class="service-content-inner d-flex align-items-center bg-white border border-primary rounded p-4 pe-0">
                                <div class="service-content text-end">
                                    <h5 class="mb-4">Travel Guides</h5>
                                    <p class="mb-0">Dolor sit amet consectetur adipisicing elit. Non alias eum, suscipit
                                        expedita corrupti officiis debitis possimus nam laudantium beatae quidem dolore
                                        consequuntur voluptate rem reiciendis, omnis sequi harum earum.
                                    </p>
                                </div>
                                <div class="service-icon p-4">
                                    <i class="fa fa-user fa-4x text-primary"></i>
                                </div>
                            </div>
                        </div>
                        <div class="col-12">
                            <div
                                class="service-content-inner d-flex align-items-center bg-white border border-primary rounded p-4 pe-0">
                                <div class="service-content text-end">
                                    <h5 class="mb-4">Event Management</h5>
                                    <p class="mb-0">Dolor sit amet consectetur adipisicing elit. Non alias eum, suscipit
                                        expedita corrupti officiis debitis possimus nam laudantium beatae quidem dolore
                                        consequuntur voluptate rem reiciendis, omnis sequi harum earum.
                                    </p>
                                </div>
                                <div class="service-icon p-4">
                                    <i class="fa fa-cog fa-4x text-primary"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="row g-4">
                        <div class="col-12">
                            <div
                                class="service-content-inner d-flex align-items-center bg-white border border-primary rounded p-4 ps-0">
                                <div class="service-icon p-4">
                                    <i class="fa fa-globe fa-4x text-primary"></i>
                                </div>
                                <div class="service-content">
                                    <h5 class="mb-4">WorldWide Tours</h5>
                                    <p class="mb-0">Dolor sit amet consectetur adipisicing elit. Non alias eum, suscipit
                                        expedita corrupti officiis debitis possimus nam laudantium beatae quidem dolore
                                        consequuntur voluptate rem reiciendis, omnis sequi harum earum.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-12">
                            <div
                                class="service-content-inner d-flex align-items-center bg-white border border-primary rounded p-4 ps-0">
                                <div class="service-icon p-4">
                                    <i class="fa fa-hotel fa-4x text-primary"></i>
                                </div>
                                <div class="service-content">
                                    <h5 class="mb-4">Hotel Reservation</h5>
                                    <p class="mb-0">Dolor sit amet consectetur adipisicing elit. Non alias eum, suscipit
                                        expedita corrupti officiis debitis possimus nam laudantium beatae quidem dolore
                                        consequuntur voluptate rem reiciendis, omnis sequi harum earum.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-12">
                            <div
                                class="service-content-inner d-flex align-items-center bg-white border border-primary rounded p-4 ps-0">
                                <div class="service-icon p-4">
                                    <i class="fa fa-user fa-4x text-primary"></i>
                                </div>
                                <div class="service-content">
                                    <h5 class="mb-4">Travel Guides</h5>
                                    <p class="mb-0">Dolor sit amet consectetur adipisicing elit. Non alias eum, suscipit
                                        expedita corrupti officiis debitis possimus nam laudantium beatae quidem dolore
                                        consequuntur voluptate rem reiciendis, omnis sequi harum earum.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-12">
                            <div
                                class="service-content-inner d-flex align-items-center bg-white border border-primary rounded p-4 ps-0">
                                <div class="service-icon p-4">
                                    <i class="fa fa-cog fa-4x text-primary"></i>
                                </div>
                                <div class="service-content">
                                    <h5 class="mb-4">Event Management</h5>
                                    <p class="mb-0">Dolor sit amet consectetur adipisicing elit. Non alias eum, suscipit
                                        expedita corrupti officiis debitis possimus nam laudantium beatae quidem dolore
                                        consequuntur voluptate rem reiciendis, omnis sequi harum earum.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12">
                    <div class="text-center">
                        <a class="btn btn-primary rounded-pill py-3 px-5 mt-2" href="">Service More</a>
                    </div>
                </div>
            </div>
        </div>
    </div> --}}
    <!-- Services End -->

    <!-- Destination Start -->
    {{-- <div class="container-fluid destination py-5">
        <div class="container py-5">
            <div class="mx-auto text-center mb-5" style="max-width: 900px;">
                <h5 class="section-title px-3">Destination</h5>
                <h1 class="mb-0">Popular Destination</h1>
            </div>
            <div class="tab-class text-center">
                <ul class="nav nav-pills d-inline-flex justify-content-center mb-5">
                    <li class="nav-item">
                        <a class="d-flex mx-3 py-2 border border-primary bg-light rounded-pill active"
                            data-bs-toggle="pill" href="#tab-1">
                            <span class="text-dark" style="width: 150px;">All</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="d-flex py-2 mx-3 border border-primary bg-light rounded-pill" data-bs-toggle="pill"
                            href="#tab-2">
                            <span class="text-dark" style="width: 150px;">USA</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="d-flex mx-3 py-2 border border-primary bg-light rounded-pill" data-bs-toggle="pill"
                            href="#tab-3">
                            <span class="text-dark" style="width: 150px;">Canada</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="d-flex mx-3 py-2 border border-primary bg-light rounded-pill" data-bs-toggle="pill"
                            href="#tab-4">
                            <span class="text-dark" style="width: 150px;">Europe</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="d-flex mx-3 py-2 border border-primary bg-light rounded-pill" data-bs-toggle="pill"
                            href="#tab-5">
                            <span class="text-dark" style="width: 150px;">China</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="d-flex mx-3 py-2 border border-primary bg-light rounded-pill" data-bs-toggle="pill"
                            href="#tab-6">
                            <span class="text-dark" style="width: 150px;">Singapore</span>
                        </a>
                    </li>
                </ul>
                <div class="tab-content">
                    <div id="tab-1" class="tab-pane fade show p-0 active">
                        <div class="row g-4">
                            <div class="col-xl-8">
                                <div class="row g-4">
                                    <div class="col-lg-6">
                                        <div class="destination-img">
                                            <img class="img-fluid rounded w-100" src="{{ asset('fontend/img/destination-1.jpg') }}"
                                                alt="">
                                            <div class="destination-overlay p-4">
                                                <a href="#"
                                                    class="btn btn-primary text-white rounded-pill border py-2 px-3">20
                                                    Photos</a>
                                                <h4 class="text-white mb-2 mt-3">New York City</h4>
                                                <a href="#" class="btn-hover text-white">View All Place <i
                                                        class="fa fa-arrow-right ms-2"></i></a>
                                            </div>
                                            <div class="search-icon">
                                                <a href="{{ asset('fontend/img/destination-1.jpg') }}" data-lightbox="destination-1"><i
                                                        class="fa fa-plus-square fa-1x btn btn-light btn-lg-square text-primary"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="destination-img">
                                            <img class="img-fluid rounded w-100" src="{{ asset('fontend/img/destination-2.jpg') }}"
                                                alt="">
                                            <div class="destination-overlay p-4">
                                                <a href="#"
                                                    class="btn btn-primary text-white rounded-pill border py-2 px-3">20
                                                    Photos</a>
                                                <h4 class="text-white mb-2 mt-3">Las vegas</h4>
                                                <a href="#" class="btn-hover text-white">View All Place <i
                                                        class="fa fa-arrow-right ms-2"></i></a>
                                            </div>
                                            <div class="search-icon">
                                                <a href="{{ asset('fontend/img/destination-2.jpg') }}" data-lightbox="destination-2"><i
                                                        class="fa fa-plus-square fa-1x btn btn-light btn-lg-square text-primary"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="destination-img">
                                            <img class="img-fluid rounded w-100" src="{{ asset('fontend/img/destination-7.jpg') }}"
                                                alt="">
                                            <div class="destination-overlay p-4">
                                                <a href="#"
                                                    class="btn btn-primary text-white rounded-pill border py-2 px-3">20
                                                    Photos</a>
                                                <h4 class="text-white mb-2 mt-3">Los angelas</h4>
                                                <a href="#" class="btn-hover text-white">View All Place <i
                                                        class="fa fa-arrow-right ms-2"></i></a>
                                            </div>
                                            <div class="search-icon">
                                                <a href="{{ asset('fontend/img/destination-7.jpg') }}" data-lightbox="destination-7"><i
                                                        class="fa fa-plus-square fa-1x btn btn-light btn-lg-square text-primary"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="destination-img">
                                            <img class="img-fluid rounded w-100" src="{{ asset('fontend/img/destination-8.jpg') }}"
                                                alt="">
                                            <div class="destination-overlay p-4">
                                                <a href="#"
                                                    class="btn btn-primary text-white rounded-pill border py-2 px-3">20
                                                    Photos</a>
                                                <h4 class="text-white mb-2 mt-3">Los angelas</h4>
                                                <a href="#" class="btn-hover text-white">View All Place <i
                                                        class="fa fa-arrow-right ms-2"></i></a>
                                            </div>
                                            <div class="search-icon">
                                                <a href="{{ asset('fontend/img/destination-8.jpg') }}" data-lightbox="destination-8"><i
                                                        class="fa fa-plus-square fa-1x btn btn-light btn-lg-square text-primary"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-4">
                                <div class="destination-img h-100">
                                    <img class="img-fluid rounded w-100 h-100" src="{{ asset('fontend/img/destination-9.jpg') }}"
                                        style="object-fit: cover; min-height: 300px;" alt="">
                                    <div class="destination-overlay p-4">
                                        <a href="#"
                                            class="btn btn-primary text-white rounded-pill border py-2 px-3">20 Photos</a>
                                        <h4 class="text-white mb-2 mt-3">San francisco</h4>
                                        <a href="#" class="btn-hover text-white">View All Place <i
                                                class="fa fa-arrow-right ms-2"></i></a>
                                    </div>
                                    <div class="search-icon">
                                        <a href="{{ asset('fontend/img/destination-9.jpg') }}" data-lightbox="destination-4"><i
                                                class="fa fa-plus-square fa-1x btn btn-light btn-lg-square text-primary"></i></a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="destination-img">
                                    <img class="img-fluid rounded w-100" src="{{ asset('fontend/img/destination-4.jpg') }}" alt="">
                                    <div class="destination-overlay p-4">
                                        <a href="#"
                                            class="btn btn-primary text-white rounded-pill border py-2 px-3">20 Photos</a>
                                        <h4 class="text-white mb-2 mt-3">Los angelas</h4>
                                        <a href="#" class="btn-hover text-white">View All Place <i
                                                class="fa fa-arrow-right ms-2"></i></a>
                                    </div>
                                    <div class="search-icon">
                                        <a href="{{ asset('fontend/img/destination-4.jpg') }}" data-lightbox="destination-4"><i
                                                class="fa fa-plus-square fa-1x btn btn-light btn-lg-square text-primary"></i></a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="destination-img">
                                    <img class="img-fluid rounded w-100" src="{{ asset('fontend/img/destination-5.jpg') }}" alt="">
                                    <div class="destination-overlay p-4">
                                        <a href="#"
                                            class="btn btn-primary text-white rounded-pill border py-2 px-3">20 Photos</a>
                                        <h4 class="text-white mb-2 mt-3">Los angelas</h4>
                                        <a href="#" class="btn-hover text-white">View All Place <i
                                                class="fa fa-arrow-right ms-2"></i></a>
                                    </div>
                                    <div class="search-icon">
                                        <a href="{{ asset('fontend/img/destination-5.jpg') }}" data-lightbox="destination-5"><i
                                                class="fa fa-plus-square fa-1x btn btn-light btn-lg-square text-primary"></i></a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="destination-img">
                                    <img class="img-fluid rounded w-100" src="{{ asset('fontend/img/destination-6.jpg') }}" alt="">
                                    <div class="destination-overlay p-4">
                                        <a href="#"
                                            class="btn btn-primary text-white rounded-pill border py-2 px-3">20 Photos</a>
                                        <h4 class="text-white mb-2 mt-3">Los angelas</h4>
                                        <a href="#" class="btn-hover text-white">View All Place <i
                                                class="fa fa-arrow-right ms-2"></i></a>
                                    </div>
                                    <div class="search-icon">
                                        <a href="{{ asset('fontend/img/destination-6.jpg') }}" data-lightbox="destination-6"><i
                                                class="fa fa-plus-square fa-1x btn btn-light btn-lg-square text-primary"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div id="tab-2" class="tab-pane fade show p-0">
                        <div class="row g-4">
                            <div class="col-lg-6">
                                <div class="destination-img">
                                    <img class="img-fluid rounded w-100" src="{{ asset('fontend/img/destination-5.jpg') }}" alt="">
                                    <div class="destination-overlay p-4">
                                        <a href="#"
                                            class="btn btn-primary text-white rounded-pill border py-2 px-3">20 Photos</a>
                                        <h4 class="text-white mb-2 mt-3">San francisco</h4>
                                        <a href="#" class="btn-hover text-white">View All Place <i
                                                class="fa fa-arrow-right ms-2"></i></a>
                                    </div>
                                    <div class="search-icon">
                                        <a href="{{ asset('fontend/img/destination-5.jpg') }}" data-lightbox="destination-5"><i
                                                class="fa fa-plus-square fa-1x btn btn-light btn-lg-square text-primary"></i></a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="destination-img">
                                    <img class="img-fluid rounded w-100" src="{{ asset('fontend/img/destination-6.jpg') }}" alt="">
                                    <div class="destination-overlay p-4">
                                        <a href="#"
                                            class="btn btn-primary text-white rounded-pill border py-2 px-3">20 Photos</a>
                                        <h4 class="text-white mb-2 mt-3">San francisco</h4>
                                        <a href="#" class="btn-hover text-white">View All Place <i
                                                class="fa fa-arrow-right ms-2"></i></a>
                                    </div>
                                    <div class="search-icon">
                                        <a href="{{ asset('fontend/img/destination-6.jpg') }}" data-lightbox="destination-6"><i
                                                class="fa fa-plus-square fa-1x btn btn-light btn-lg-square text-primary"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div id="tab-3" class="tab-pane fade show p-0">
                        <div class="row g-4">
                            <div class="col-lg-6">
                                <div class="destination-img">
                                    <img class="img-fluid rounded w-100" src="{{ asset('fontend/img/destination-5.jpg') }}" alt="">
                                    <div class="destination-overlay p-4">
                                        <a href="#"
                                            class="btn btn-primary text-white rounded-pill border py-2 px-3">20 Photos</a>
                                        <h4 class="text-white mb-2 mt-3">San francisco</h4>
                                        <a href="#" class="btn-hover text-white">View All Place <i
                                                class="fa fa-arrow-right ms-2"></i></a>
                                    </div>
                                    <div class="search-icon">
                                        <a href="{{ asset('fontend/img/destination-5.jpg') }}" data-lightbox="destination-5"><i
                                                class="fa fa-plus-square fa-1x btn btn-light btn-lg-square text-primary"></i></a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="destination-img">
                                    <img class="img-fluid rounded w-100" src="{{ asset('fontend/img/destination-6.jpg') }}" alt="">
                                    <div class="destination-overlay p-4">
                                        <a href="#"
                                            class="btn btn-primary text-white rounded-pill border py-2 px-3">20 Photos</a>
                                        <h4 class="text-white mb-2 mt-3">San francisco</h4>
                                        <a href="#" class="btn-hover text-white">View All Place <i
                                                class="fa fa-arrow-right ms-2"></i></a>
                                    </div>
                                    <div class="search-icon">
                                        <a href="{{ asset('fontend/img/destination-6.jpg') }}" data-lightbox="destination-6"><i
                                                class="fa fa-plus-square fa-1x btn btn-light btn-lg-square text-primary"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div id="tab-4" class="tab-pane fade show p-0">
                        <div class="row g-4">
                            <div class="col-lg-6">
                                <div class="destination-img">
                                    <img class="img-fluid rounded w-100" src="{{ asset('fontend/img/destination-5.jpg') }}" alt="">
                                    <div class="destination-overlay p-4">
                                        <a href="#"
                                            class="btn btn-primary text-white rounded-pill border py-2 px-3">20 Photos</a>
                                        <h4 class="text-white mb-2 mt-3">San francisco</h4>
                                        <a href="#" class="btn-hover text-white">View All Place <i
                                                class="fa fa-arrow-right ms-2"></i></a>
                                    </div>
                                    <div class="search-icon">
                                        <a href="{{ asset('fontend/img/destination-5.jpg') }}" data-lightbox="destination-5"><i
                                                class="fa fa-plus-square fa-1x btn btn-light btn-lg-square text-primary"></i></a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="destination-img">
                                    <img class="img-fluid rounded w-100" src="{{ asset('fontend/img/destination-6.jpg') }}" alt="">
                                    <div class="destination-overlay p-4">
                                        <a href="#"
                                            class="btn btn-primary text-white rounded-pill border py-2 px-3">20 Photos</a>
                                        <h4 class="text-white mb-2 mt-3">San francisco</h4>
                                        <a href="#" class="btn-hover text-white">View All Place <i
                                                class="fa fa-arrow-right ms-2"></i></a>
                                    </div>
                                    <div class="search-icon">
                                        <a href="{{ asset('fontend/img/destination-6.jpg') }}" data-lightbox="destination-6"><i
                                                class="fa fa-plus-square fa-1x btn btn-light btn-lg-square text-primary"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div id="tab-5" class="tab-pane fade show p-0">
                        <div class="row g-4">
                            <div class="col-lg-6">
                                <div class="destination-img">
                                    <img class="img-fluid rounded w-100" src="{{ asset('fontend/img/destination-5.jpg') }}" alt="">
                                    <div class="destination-overlay p-4">
                                        <a href="#"
                                            class="btn btn-primary text-white rounded-pill border py-2 px-3">20 Photos</a>
                                        <h4 class="text-white mb-2 mt-3">San francisco</h4>
                                        <a href="#" class="btn-hover text-white">View All Place <i
                                                class="fa fa-arrow-right ms-2"></i></a>
                                    </div>
                                    <div class="search-icon">
                                        <a href="{{ asset('fontend/img/destination-5.jpg') }}" data-lightbox="destination-5"><i
                                                class="fa fa-plus-square fa-1x btn btn-light btn-lg-square text-primary"></i></a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="destination-img">
                                    <img class="img-fluid rounded w-100" src="{{ asset('fontend/img/destination-6.jpg') }}" alt="">
                                    <div class="destination-overlay p-4">
                                        <a href="#"
                                            class="btn btn-primary text-white rounded-pill border py-2 px-3">20 Photos</a>
                                        <h4 class="text-white mb-2 mt-3">San francisco</h4>
                                        <a href="#" class="btn-hover text-white">View All Place <i
                                                class="fa fa-arrow-right ms-2"></i></a>
                                    </div>
                                    <div class="search-icon">
                                        <a href="{{ asset('fontend/img/destination-6.jpg') }}" data-lightbox="destination-6"><i
                                                class="fa fa-plus-square fa-1x btn btn-light btn-lg-square text-primary"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div id="tab-6" class="tab-pane fade show p-0">
                        <div class="row g-4">
                            <div class="col-lg-6">
                                <div class="destination-img">
                                    <img class="img-fluid rounded w-100" src="{{ asset('fontend/img/destination-5.jpg') }}" alt="">
                                    <div class="destination-overlay p-4">
                                        <a href="#"
                                            class="btn btn-primary text-white rounded-pill border py-2 px-3">20 Photos</a>
                                        <h4 class="text-white mb-2 mt-3">San francisco</h4>
                                        <a href="#" class="btn-hover text-white">View All Place <i
                                                class="fa fa-arrow-right ms-2"></i></a>
                                    </div>
                                    <div class="search-icon">
                                        <a href="{{ asset('fontend/img/destination-5.jpg') }}" data-lightbox="destination-5"><i
                                                class="fa fa-plus-square fa-1x btn btn-light btn-lg-square text-primary"></i></a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="destination-img">
                                    <img class="img-fluid rounded w-100" src="{{ asset('fontend/img/destination-6.jpg') }}" alt="">
                                    <div class="destination-overlay p-4">
                                        <a href="#"
                                            class="btn btn-primary text-white rounded-pill border py-2 px-3">20 Photos</a>
                                        <h4 class="text-white mb-2 mt-3">San francisco</h4>
                                        <a href="#" class="btn-hover text-white">View All Place <i
                                                class="fa fa-arrow-right ms-2"></i></a>
                                    </div>
                                    <div class="search-icon">
                                        <a href="{{ asset('fontend/img/destination-6.jpg') }}" data-lightbox="destination-6"><i
                                                class="fa fa-plus-square fa-1x btn btn-light btn-lg-square text-primary"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> --}}
    <!-- Destination End -->

    <!-- Explore Tour Start -->
    <div class="container-fluid ExploreTour">
        <div class="container py-5">
            <div class="mx-auto text-center mb-5" style="max-width: 900px;">
                <h5 class="section-title px-3">Explore Tour</h5>
                <h1 class="mb-4">The World</h1>
                <p class="mb-0">Lorem ipsum dolor sit amet consectetur adipisicing elit. Laborum tempore nam, architecto
                    doloremque velit explicabo? Voluptate sunt eveniet fuga eligendi! Expedita laudantium fugiat corrupti
                    eum cum repellat a laborum quasi.
                </p>
            </div>
            <div class="tab-class text-center">
                <ul class="nav nav-pills d-inline-flex justify-content-center mb-5">
                    <li class="nav-item">
                        <a class="d-flex mx-3 py-2 border border-primary bg-light rounded-pill active"
                            data-bs-toggle="pill" href="#NationalTab-1">
                            <span class="text-dark" style="width: 250px;">National Tour Category</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="d-flex py-2 mx-3 border border-primary bg-light rounded-pill" data-bs-toggle="pill"
                            href="#InternationalTab-2">
                            <span class="text-dark" style="width: 250px;">International tour Category</span>
                        </a>
                    </li>
                </ul>
                <div class="tab-content">
                    <div id="NationalTab-1" class="tab-pane fade show p-0 active">
                        <div class="row g-4">
                            <div class="col-md-6 col-lg-4">
                                <div class="national-item">
                                    <img src="{{ asset('fontend/img/explore-tour-1.jpg') }}" class="img-fluid w-100 rounded" alt="Image">
                                    <div class="national-content">
                                        <div class="national-info">
                                            <h5 class="text-white text-uppercase mb-2">Weekend Tour</h5>
                                            <a href="#" class="btn-hover text-white">View All Place <i
                                                    class="fa fa-arrow-right ms-2"></i></a>
                                        </div>
                                    </div>
                                    <div class="national-plus-icon">
                                        <a href="#" class="my-auto"><i
                                                class="fas fa-link fa-2x text-white"></i></a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 col-lg-4">
                                <div class="national-item">
                                    <img src="{{ asset('fontend/img/explore-tour-2.jpg') }}" class="img-fluid w-100 rounded" alt="Image">
                                    <div class="national-content">
                                        <div class="national-info">
                                            <h5 class="text-white text-uppercase mb-2">Holiday Tour</h5>
                                            <a href="#" class="btn-hover text-white">View All Place <i
                                                    class="fa fa-arrow-right ms-2"></i></a>
                                        </div>
                                    </div>
                                    <div class="national-plus-icon">
                                        <a href="#" class="my-auto"><i
                                                class="fas fa-link fa-2x text-white"></i></a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 col-lg-4">
                                <div class="national-item">
                                    <img src="{{ asset('fontend/img/explore-tour-3.jpg') }}" class="img-fluid w-100 rounded" alt="Image">
                                    <div class="national-content">
                                        <div class="national-info">
                                            <h5 class="text-white text-uppercase mb-2">Road Trip</h5>
                                            <a href="#" class="btn-hover text-white">View All Place <i
                                                    class="fa fa-arrow-right ms-2"></i></a>
                                        </div>
                                    </div>
                                    <div class="tour-offer bg-info">15% Off</div>
                                    <div class="national-plus-icon">
                                        <a href="#" class="my-auto"><i
                                                class="fas fa-link fa-2x text-white"></i></a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 col-lg-4">
                                <div class="national-item">
                                    <img src="{{ asset('fontend/img/explore-tour-4.jpg') }}" class="img-fluid w-100 rounded" alt="Image">
                                    <div class="national-content">
                                        <div class="national-info">
                                            <h5 class="text-white text-uppercase mb-2">Historical Trip</h5>
                                            <a href="#" class="btn-hover text-white">View All Place <i
                                                    class="fa fa-arrow-right ms-2"></i></a>
                                        </div>
                                    </div>
                                    <div class="national-plus-icon">
                                        <a href="#" class="my-auto"><i
                                                class="fas fa-link fa-2x text-white"></i></a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 col-lg-4">
                                <div class="national-item">
                                    <img src="{{ asset('fontend/img/explore-tour-5.jpg') }}" class="img-fluid w-100 rounded" alt="Image">
                                    <div class="national-content">
                                        <div class="national-info">
                                            <h5 class="text-white text-uppercase mb-2">Family Tour</h5>
                                            <a href="#" class="btn-hover text-white">View All Place <i
                                                    class="fa fa-arrow-right ms-2"></i></a>
                                        </div>
                                    </div>
                                    <div class="tour-offer bg-warning">50% Off</div>
                                    <div class="national-plus-icon">
                                        <a href="#" class="my-auto"><i
                                                class="fas fa-link fa-2x text-white"></i></a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 col-lg-4">
                                <div class="national-item">
                                    <img src="{{ asset('fontend/img/explore-tour-6.jpg') }}" class="img-fluid w-100 rounded" alt="Image">
                                    <div class="national-content">
                                        <div class="national-info">
                                            <h5 class="text-white text-uppercase mb-2">Beach Tour</h5>
                                            <a href="#" class="btn-hover text-white">View All Place <i
                                                    class="fa fa-arrow-right ms-2"></i></a>
                                        </div>
                                    </div>
                                    <div class="national-plus-icon">
                                        <a href="#" class="my-auto"><i
                                                class="fas fa-link fa-2x text-white"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div id="InternationalTab-2" class="tab-pane fade show p-0">
                        <div class="InternationalTour-carousel owl-carousel">
                            <div class="international-item">
                                <img src="{{ asset('fontend/img/explore-tour-1.jpg') }}" class="img-fluid w-100 rounded" alt="Image">
                                <div class="international-content">
                                    <div class="international-info">
                                        <h5 class="text-white text-uppercase mb-2">Australia</h5>
                                        <a href="#" class="btn-hover text-white me-4"><i
                                                class="fas fa-map-marker-alt me-1"></i> 8 Cities</a>
                                        <a href="#" class="btn-hover text-white"><i class="fa fa-eye ms-2"></i>
                                            <span>143+ Tour Places</span></a>
                                    </div>
                                </div>
                                <div class="tour-offer bg-success">30% Off</div>
                                <div class="international-plus-icon">
                                    <a href="#" class="my-auto"><i class="fas fa-link fa-2x text-white"></i></a>
                                </div>
                            </div>
                            <div class="international-item">
                                <img src="{{ asset('fontend/img/explore-tour-2.jpg') }}" class="img-fluid w-100 rounded" alt="Image">
                                <div class="international-content">
                                    <div class="international-info">
                                        <h5 class="text-white text-uppercase mb-2">Germany</h5>
                                        <a href="#" class="btn-hover text-white me-4"><i
                                                class="fas fa-map-marker-alt me-1"></i> 12 Cities</a>
                                        <a href="#" class="btn-hover text-white"><i class="fa fa-eye ms-2"></i>
                                            <span>21+ Tour Places</span></a>
                                    </div>
                                </div>
                                <div class="international-plus-icon">
                                    <a href="#" class="my-auto"><i class="fas fa-link fa-2x text-white"></i></a>
                                </div>
                            </div>
                            <div class="international-item">
                                <img src="{{ asset('fontend/img/explore-tour-3.jpg') }}" class="img-fluid w-100 rounded" alt="Image">
                                <div class="international-content">
                                    <div class="tour-offer bg-warning">45% Off</div>
                                    <div class="international-info">
                                        <h5 class="text-white text-uppercase mb-2">Spain</h5>
                                        <a href="#" class="btn-hover text-white me-4"><i
                                                class="fas fa-map-marker-alt me-1"></i> 9 Cities</a>
                                        <a href="#" class="btn-hover text-white"><i class="fa fa-eye ms-2"></i>
                                            <span>133+ Tour Places</span></a>
                                    </div>
                                </div>
                                <div class="international-plus-icon">
                                    <a href="#" class="my-auto"><i class="fas fa-link fa-2x text-white"></i></a>
                                </div>
                            </div>
                            <div class="international-item">
                                <img src="{{ asset('fontend/img/explore-tour-4.jpg') }}" class="img-fluid w-100 rounded" alt="Image">
                                <div class="international-content">
                                    <div class="international-info">
                                        <h5 class="text-white text-uppercase mb-2">Japan</h5>
                                        <a href="#" class="btn-hover text-white me-4"><i
                                                class="fas fa-map-marker-alt me-1"></i> 8 Cities</a>
                                        <a href="#" class="btn-hover text-white"><i class="fa fa-eye ms-2"></i>
                                            <span>137+ Tour Places</span></a>
                                    </div>
                                </div>
                                <div class="international-plus-icon">
                                    <a href="#" class="my-auto"><i class="fas fa-link fa-2x text-white"></i></a>
                                </div>
                            </div>
                            <div class="international-item">
                                <img src="{{ asset('fontend/img/explore-tour-5.jpg') }}" class="img-fluid w-100 rounded" alt="Image">
                                <div class="international-content">
                                    <div class="tour-offer bg-info">70% Off</div>
                                    <div class="international-info">
                                        <h5 class="text-white text-uppercase mb-2">London</h5>
                                        <a href="#" class="btn-hover text-white me-4"><i
                                                class="fas fa-map-marker-alt me-1"></i> 17 Cities</a>
                                        <a href="#" class="btn-hover text-white"><i class="fa fa-eye ms-2"></i>
                                            <span>26+ Tour Places</span></a>
                                    </div>
                                </div>
                                <div class="international-plus-icon">
                                    <a href="#" class="my-auto"><i class="fas fa-link fa-2x text-white"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Explore Tour Start -->

    

    <!-- Gallery Start -->
    {{-- <div class="container-fluid gallery py-5 my-5">
        <div class="mx-auto text-center mb-5" style="max-width: 900px;">
            <h5 class="section-title px-3">Our Gallery</h5>
            <h1 class="mb-4">Tourism & Traveling Gallery.</h1>
            <p class="mb-0">Lorem ipsum dolor sit amet consectetur adipisicing elit. Laborum tempore nam, architecto
                doloremque velit explicabo? Voluptate sunt eveniet fuga eligendi! Expedita laudantium fugiat corrupti eum
                cum repellat a laborum quasi.
            </p>
        </div>
        <div class="tab-class text-center">
            <ul class="nav nav-pills d-inline-flex justify-content-center mb-5">
                <li class="nav-item">
                    <a class="d-flex mx-3 py-2 border border-primary bg-light rounded-pill active" data-bs-toggle="pill"
                        href="#GalleryTab-1">
                        <span class="text-dark" style="width: 150px;">All</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="d-flex py-2 mx-3 border border-primary bg-light rounded-pill" data-bs-toggle="pill"
                        href="#GalleryTab-2">
                        <span class="text-dark" style="width: 150px;">World tour</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="d-flex mx-3 py-2 border border-primary bg-light rounded-pill" data-bs-toggle="pill"
                        href="#GalleryTab-3">
                        <span class="text-dark" style="width: 150px;">Ocean Tour</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="d-flex mx-3 py-2 border border-primary bg-light rounded-pill" data-bs-toggle="pill"
                        href="#GalleryTab-4">
                        <span class="text-dark" style="width: 150px;">Summer Tour</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="d-flex mx-3 py-2 border border-primary bg-light rounded-pill" data-bs-toggle="pill"
                        href="#GalleryTab-5">
                        <span class="text-dark" style="width: 150px;">Sport Tour</span>
                    </a>
                </li>
            </ul>
            <div class="tab-content">
                <div id="GalleryTab-1" class="tab-pane fade show p-0 active">
                    <div class="row g-2">
                        <div class="col-sm-6 col-md-6 col-lg-4 col-xl-2">
                            <div class="gallery-item h-100">
                                <img src="{{ asset('fontend/img/gallery-1.jpg') }}" class="img-fluid w-100 h-100 rounded" alt="Image">
                                <div class="gallery-content">
                                    <div class="gallery-info">
                                        <h5 class="text-white text-uppercase mb-2">World Tour</h5>
                                        <a href="#" class="btn-hover text-white">View All Place <i
                                                class="fa fa-arrow-right ms-2"></i></a>
                                    </div>
                                </div>
                                <div class="gallery-plus-icon">
                                    <a href="{{ asset('fontend/img/gallery-1.jpg') }}" data-lightbox="gallery-1" class="my-auto"><i
                                            class="fas fa-plus fa-2x text-white"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-6 col-lg-4 col-xl-3">
                            <div class="gallery-item h-100">
                                <img src="{{ asset('fontend/img/gallery-2.jpg') }}" class="img-fluid w-100 h-100 rounded" alt="Image">
                                <div class="gallery-content">
                                    <div class="gallery-info">
                                        <h5 class="text-white text-uppercase mb-2">World Tour</h5>
                                        <a href="#" class="btn-hover text-white">View All Place <i
                                                class="fa fa-arrow-right ms-2"></i></a>
                                    </div>
                                </div>
                                <div class="gallery-plus-icon">
                                    <a href="{{ asset('fontend/img/gallery-2.jpg') }}" data-lightbox="gallery-2" class="my-auto"><i
                                            class="fas fa-plus fa-2x text-white"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-6 col-lg-4 col-xl-2">
                            <div class="gallery-item h-100">
                                <img src="{{ asset('fontend/img/gallery-3.jpg') }}" class="img-fluid w-100 h-100 rounded" alt="Image">
                                <div class="gallery-content">
                                    <div class="gallery-info">
                                        <h5 class="text-white text-uppercase mb-2">World Tour</h5>
                                        <a href="#" class="btn-hover text-white">View All Place <i
                                                class="fa fa-arrow-right ms-2"></i></a>
                                    </div>
                                </div>
                                <div class="gallery-plus-icon">
                                    <a href="{{ asset('fontend/img/gallery-3.jpg') }}" data-lightbox="gallery-3" class="my-auto"><i
                                            class="fas fa-plus fa-2x text-white"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-6 col-lg-4 col-xl-3">
                            <div class="gallery-item h-100">
                                <img src="{{ asset('fontend/img/gallery-4.jpg') }}" class="img-fluid w-100 h-100 rounded" alt="Image">
                                <div class="gallery-content">
                                    <div class="gallery-info">
                                        <h5 class="text-white text-uppercase mb-2">World Tour</h5>
                                        <a href="#" class="btn-hover text-white">View All Place <i
                                                class="fa fa-arrow-right ms-2"></i></a>
                                    </div>
                                </div>
                                <div class="gallery-plus-icon">
                                    <a href="{{ asset('fontend/img/gallery-4.jpg') }}" data-lightbox="gallery-4" class="my-auto"><i
                                            class="fas fa-plus fa-2x text-white"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-6 col-lg-4 col-xl-2">
                            <div class="gallery-item h-100">
                                <img src="{{ asset('fontend/img/gallery-5.jpg') }}" class="img-fluid w-100 h-100 rounded" alt="Image">
                                <div class="gallery-content">
                                    <div class="gallery-info">
                                        <h5 class="text-white text-uppercase mb-2">World Tour</h5>
                                        <a href="#" class="btn-hover text-white">View All Place <i
                                                class="fa fa-arrow-right ms-2"></i></a>
                                    </div>
                                </div>
                                <div class="gallery-plus-icon">
                                    <a href="{{ asset('fontend/img/gallery-5.jpg') }}" data-lightbox="gallery-5" class="my-auto"><i
                                            class="fas fa-plus fa-2x text-white"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-6 col-lg-4 col-xl-2">
                            <div class="gallery-item h-100">
                                <img src="{{ asset('fontend/img/gallery-6.jpg') }}" class="img-fluid w-100 h-100 rounded" alt="Image">
                                <div class="gallery-content">
                                    <div class="gallery-info">
                                        <h5 class="text-white text-uppercase mb-2">World Tour</h5>
                                        <a href="#" class="btn-hover text-white">View All Place <i
                                                class="fa fa-arrow-right ms-2"></i></a>
                                    </div>
                                </div>
                                <div class="gallery-plus-icon">
                                    <a href="{{ asset('fontend/img/gallery-6.jpg') }}" data-lightbox="gallery-6" class="my-auto"><i
                                            class="fas fa-plus fa-2x text-white"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-6 col-lg-3 col-xl-3">
                            <div class="gallery-item h-100">
                                <img src="{{ asset('fontend/img/gallery-7.jpg') }}" class="img-fluid w-100 h-100 rounded" alt="Image">
                                <div class="gallery-content">
                                    <div class="gallery-info">
                                        <h5 class="text-white text-uppercase mb-2">World Tour</h5>
                                        <a href="#" class="btn-hover text-white">View All Place <i
                                                class="fa fa-arrow-right ms-2"></i></a>
                                    </div>
                                </div>
                                <div class="gallery-plus-icon">
                                    <a href="{{ asset('fontend/img/gallery-7.jpg') }}" data-lightbox="gallery-7" class="my-auto"><i
                                            class="fas fa-plus fa-2x text-white"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-6 col-lg-3 col-xl-2">
                            <div class="gallery-item h-100">
                                <img src="{{ asset('fontend/img/gallery-8.jpg') }}" class="img-fluid w-100 h-100 rounded" alt="Image">
                                <div class="gallery-content">
                                    <div class="gallery-info">
                                        <h5 class="text-white text-uppercase mb-2">World Tour</h5>
                                        <a href="#" class="btn-hover text-white">View All Place <i
                                                class="fa fa-arrow-right ms-2"></i></a>
                                    </div>
                                </div>
                                <div class="gallery-plus-icon">
                                    <a href="{{ asset('fontend/img/gallery-8.jpg') }}" data-lightbox="gallery-8" class="my-auto"><i
                                            class="fas fa-plus fa-2x text-white"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-6 col-lg-3 col-xl-3">
                            <div class="gallery-item h-100">
                                <img src="{{ asset('fontend/img/gallery-9.jpg') }}" class="img-fluid w-100 h-100 rounded" alt="Image">
                                <div class="gallery-content">
                                    <div class="gallery-info">
                                        <h5 class="text-white text-uppercase mb-2">World Tour</h5>
                                        <a href="#" class="btn-hover text-white">View All Place <i
                                                class="fa fa-arrow-right ms-2"></i></a>
                                    </div>
                                </div>
                                <div class="gallery-plus-icon">
                                    <a href="{{ asset('fontend/img/gallery-9.jpg') }}" data-lightbox="gallery-9" class="my-auto"><i
                                            class="fas fa-plus fa-2x text-white"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-6 col-lg-3 col-xl-2">
                            <div class="gallery-item h-100">
                                <img src="{{ asset('fontend/img/gallery-10.jpg') }}" class="img-fluid w-100 h-100 rounded" alt="Image">
                                <div class="gallery-content">
                                    <div class="gallery-info">
                                        <h5 class="text-white text-uppercase mb-2">World Tour</h5>
                                        <a href="#" class="btn-hover text-white">View All Place <i
                                                class="fa fa-arrow-right ms-2"></i></a>
                                    </div>
                                </div>
                                <div class="gallery-plus-icon">
                                    <a href="{{ asset('fontend/img/gallery-10.jpg') }}" data-lightbox="gallery-10" class="my-auto"><i
                                            class="fas fa-plus fa-2x text-white"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div id="GalleryTab-2" class="tab-pane fade show p-0">
                    <div class="row g-2">
                        <div class="col-sm-6 col-md-6 col-lg-4 col-xl-3">
                            <div class="gallery-item h-100">
                                <img src="{{ asset('fontend/img/gallery-2.jpg') }}" class="img-fluid w-100 h-100 rounded" alt="Image">
                                <div class="gallery-content">
                                    <div class="gallery-info">
                                        <h5 class="text-white text-uppercase mb-2">World Tour</h5>
                                        <a href="#" class="btn-hover text-white">View All Place <i
                                                class="fa fa-arrow-right ms-2"></i></a>
                                    </div>
                                </div>
                                <div class="gallery-plus-icon">
                                    <a href="{{ asset('fontend/img/gallery-2.jpg') }}" data-lightbox="gallery-2" class="my-auto"><i
                                            class="fas fa-plus fa-2x text-white"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-6 col-lg-4 col-xl-2">
                            <div class="gallery-item h-100">
                                <img src="{{ asset('fontend/img/gallery-3.jpg') }}" class="img-fluid w-100 h-100 rounded" alt="Image">
                                <div class="gallery-content">
                                    <div class="gallery-info">
                                        <h5 class="text-white text-uppercase mb-2">World Tour</h5>
                                        <a href="#" class="btn-hover text-white">View All Place <i
                                                class="fa fa-arrow-right ms-2"></i></a>
                                    </div>
                                </div>
                                <div class="gallery-plus-icon">
                                    <a href="{{ asset('fontend/img/gallery-3.jpg') }}" data-lightbox="gallery-3" class="my-auto"><i
                                            class="fas fa-plus fa-2x text-white"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div id="GalleryTab-3" class="tab-pane fade show p-0">
                    <div class="row g-2">
                        <div class="col-sm-6 col-md-6 col-lg-4 col-xl-3">
                            <div class="gallery-item h-100">
                                <img src="{{ asset('fontend/img/gallery-2.jpg') }}" class="img-fluid w-100 h-100 rounded" alt="Image">
                                <div class="gallery-content">
                                    <div class="gallery-info">
                                        <h5 class="text-white text-uppercase mb-2">World Tour</h5>
                                        <a href="#" class="btn-hover text-white">View All Place <i
                                                class="fa fa-arrow-right ms-2"></i></a>
                                    </div>
                                </div>
                                <div class="gallery-plus-icon">
                                    <a href="{{ asset('fontend/img/gallery-2.jpg') }}" data-lightbox="gallery-2" class="my-auto"><i
                                            class="fas fa-plus fa-2x text-white"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-6 col-lg-4 col-xl-2">
                            <div class="gallery-item h-100">
                                <img src="{{ asset('fontend/img/gallery-3.jpg') }}" class="img-fluid w-100 h-100 rounded" alt="Image">
                                <div class="gallery-content">
                                    <div class="gallery-info">
                                        <h5 class="text-white text-uppercase mb-2">World Tour</h5>
                                        <a href="#" class="btn-hover text-white">View All Place <i
                                                class="fa fa-arrow-right ms-2"></i></a>
                                    </div>
                                </div>
                                <div class="gallery-plus-icon">
                                    <a href="{{ asset('fontend/img/gallery-3.jpg') }}" data-lightbox="gallery-3" class="my-auto"><i
                                            class="fas fa-plus fa-2x text-white"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div id="GalleryTab-4" class="tab-pane fade show p-0">
                    <div class="row g-2">
                        <div class="col-sm-6 col-md-6 col-lg-4 col-xl-3">
                            <div class="gallery-item h-100">
                                <img src="{{ asset('fontend/img/gallery-2.jpg') }}" class="img-fluid w-100 h-100 rounded" alt="Image">
                                <div class="gallery-content">
                                    <div class="gallery-info">
                                        <h5 class="text-white text-uppercase mb-2">World Tour</h5>
                                        <a href="#" class="btn-hover text-white">View All Place <i
                                                class="fa fa-arrow-right ms-2"></i></a>
                                    </div>
                                </div>
                                <div class="gallery-plus-icon">
                                    <a href="{{ asset('fontend/img/gallery-2.jpg') }}" data-lightbox="gallery-2" class="my-auto"><i
                                            class="fas fa-plus fa-2x text-white"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-6 col-lg-4 col-xl-2">
                            <div class="gallery-item h-100">
                                <img src="{{ asset('fontend/img/gallery-3.jpg') }}" class="img-fluid w-100 h-100 rounded" alt="Image">
                                <div class="gallery-content">
                                    <div class="gallery-info">
                                        <h5 class="text-white text-uppercase mb-2">World Tour</h5>
                                        <a href="#" class="btn-hover text-white">View All Place <i
                                                class="fa fa-arrow-right ms-2"></i></a>
                                    </div>
                                </div>
                                <div class="gallery-plus-icon">
                                    <a href="{{ asset('fontend/img/gallery-3.jpg') }}" data-lightbox="gallery-3" class="my-auto"><i
                                            class="fas fa-plus fa-2x text-white"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div id="GalleryTab-5" class="tab-pane fade show p-0">
                    <div class="row g-2">
                        <div class="col-sm-6 col-md-6 col-lg-4 col-xl-3">
                            <div class="gallery-item h-100">
                                <img src="{{ asset('fontend/img/gallery-2.jpg') }}" class="img-fluid w-100 h-100 rounded" alt="Image">
                                <div class="gallery-content">
                                    <div class="gallery-info">
                                        <h5 class="text-white text-uppercase mb-2">World Tour</h5>
                                        <a href="#" class="btn-hover text-white">View All Place <i
                                                class="fa fa-arrow-right ms-2"></i></a>
                                    </div>
                                </div>
                                <div class="gallery-plus-icon">
                                    <a href="{{ asset('fontend/img/gallery-2.jpg') }}" data-lightbox="gallery-2" class="my-auto"><i
                                            class="fas fa-plus fa-2x text-white"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-6 col-lg-4 col-xl-2">
                            <div class="gallery-item h-100">
                                <img src="{{ asset('fontend/img/gallery-3.jpg') }}" class="img-fluid w-100 h-100 rounded" alt="Image">
                                <div class="gallery-content">
                                    <div class="gallery-info">
                                        <h5 class="text-white text-uppercase mb-2">World Tour</h5>
                                        <a href="#" class="btn-hover text-white">View All Place <i
                                                class="fa fa-arrow-right ms-2"></i></a>
                                    </div>
                                </div>
                                <div class="gallery-plus-icon">
                                    <a href="{{ asset('fontend/img/gallery-3.jpg') }}" data-lightbox="gallery-3" class="my-auto"><i
                                            class="fas fa-plus fa-2x text-white"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> --}}
    <!-- Gallery End -->

   

    <!-- Travel Guide Start -->
    <div class="container-fluid guide">
        <div class="container py-5">
            <div class="mx-auto text-center mb-5" style="max-width: 900px;">
                <h5 class="section-title px-3">Travel Guide</h5>
                <h1 class="mb-0">Meet Our Guide</h1>
            </div>
            <div class="row g-4">
                <div class="col-md-6 col-lg-3">
                    <div class="guide-item">
                        <div class="guide-img">
                            <div class="guide-img-efects">
                                <img src="{{ asset('fontend/img/guide-1.jpg') }}" class="img-fluid w-100 rounded-top" alt="Image">
                            </div>
                            <div class="guide-icon rounded-pill p-2">
                                <a class="btn btn-square btn-primary rounded-circle mx-1" href=""><i
                                        class="fab fa-facebook-f"></i></a>
                                <a class="btn btn-square btn-primary rounded-circle mx-1" href=""><i
                                        class="fab fa-twitter"></i></a>
                                <a class="btn btn-square btn-primary rounded-circle mx-1" href=""><i
                                        class="fab fa-instagram"></i></a>
                                <a class="btn btn-square btn-primary rounded-circle mx-1" href=""><i
                                        class="fab fa-linkedin-in"></i></a>
                            </div>
                        </div>
                        <div class="guide-title text-center rounded-bottom p-4">
                            <div class="guide-title-inner">
                                <h4 class="mt-3">Full Name</h4>
                                <p class="mb-0">Designation</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3">
                    <div class="guide-item">
                        <div class="guide-img">
                            <div class="guide-img-efects">
                                <img src="{{ asset('fontend/img/guide-2.jpg') }}" class="img-fluid w-100 rounded-top" alt="Image">
                            </div>
                            <div class="guide-icon rounded-pill p-2">
                                <a class="btn btn-square btn-primary rounded-circle mx-1" href=""><i
                                        class="fab fa-facebook-f"></i></a>
                                <a class="btn btn-square btn-primary rounded-circle mx-1" href=""><i
                                        class="fab fa-twitter"></i></a>
                                <a class="btn btn-square btn-primary rounded-circle mx-1" href=""><i
                                        class="fab fa-instagram"></i></a>
                                <a class="btn btn-square btn-primary rounded-circle mx-1" href=""><i
                                        class="fab fa-linkedin-in"></i></a>
                            </div>
                        </div>
                        <div class="guide-title text-center rounded-bottom p-4">
                            <div class="guide-title-inner">
                                <h4 class="mt-3">Full Name</h4>
                                <p class="mb-0">Designation</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3">
                    <div class="guide-item">
                        <div class="guide-img">
                            <div class="guide-img-efects">
                                <img src="{{ asset('fontend/img/guide-3.jpg') }}" class="img-fluid w-100 rounded-top" alt="Image">
                            </div>
                            <div class="guide-icon rounded-pill p-2">
                                <a class="btn btn-square btn-primary rounded-circle mx-1" href=""><i
                                        class="fab fa-facebook-f"></i></a>
                                <a class="btn btn-square btn-primary rounded-circle mx-1" href=""><i
                                        class="fab fa-twitter"></i></a>
                                <a class="btn btn-square btn-primary rounded-circle mx-1" href=""><i
                                        class="fab fa-instagram"></i></a>
                                <a class="btn btn-square btn-primary rounded-circle mx-1" href=""><i
                                        class="fab fa-linkedin-in"></i></a>
                            </div>
                        </div>
                        <div class="guide-title text-center rounded-bottom p-4">
                            <div class="guide-title-inner">
                                <h4 class="mt-3">Full Name</h4>
                                <p class="mb-0">Designation</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3">
                    <div class="guide-item">
                        <div class="guide-img">
                            <div class="guide-img-efects">
                                <img src="{{ asset('fontend/img/guide-4.jpg') }}" class="img-fluid w-100 rounded-top" alt="Image">
                            </div>
                            <div class="guide-icon rounded-pill p-2">
                                <a class="btn btn-square btn-primary rounded-circle mx-1" href=""><i
                                        class="fab fa-facebook-f"></i></a>
                                <a class="btn btn-square btn-primary rounded-circle mx-1" href=""><i
                                        class="fab fa-twitter"></i></a>
                                <a class="btn btn-square btn-primary rounded-circle mx-1" href=""><i
                                        class="fab fa-instagram"></i></a>
                                <a class="btn btn-square btn-primary rounded-circle mx-1" href=""><i
                                        class="fab fa-linkedin-in"></i></a>
                            </div>
                        </div>
                        <div class="guide-title text-center rounded-bottom p-4">
                            <div class="guide-title-inner">
                                <h4 class="mt-3">Full Name</h4>
                                <p class="mb-0">Designation</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Travel Guide End -->

    <!-- Blog Start -->
    <div class="container-fluid blog">
        <div class="container py-5">
            <div class="mx-auto text-center mb-5" style="max-width: 900px;">
                <h5 class="section-title px-3">Our Blog</h5>
                <h1 class="mb-4">Popular Travel Blogs</h1>
                <p class="mb-0">Lorem ipsum dolor sit amet consectetur adipisicing elit. Deleniti deserunt tenetur
                    sapiente atque. Magni non explicabo beatae sit, vel reiciendis consectetur numquam id similique sunt
                    error obcaecati ducimus officia maiores.
                </p>
            </div>
            <div class="row g-4 justify-content-center">
                <div class="col-lg-4 col-md-6">
                    <div class="blog-item">
                        <div class="blog-img">
                            <div class="blog-img-inner">
                                <img class="img-fluid w-100 rounded-top" src="{{ asset('fontend/img/blog-1.jpg') }}" alt="Image">
                                <div class="blog-icon">
                                    <a href="#" class="my-auto"><i class="fas fa-link fa-2x text-white"></i></a>
                                </div>
                            </div>
                            <div class="blog-info d-flex align-items-center border border-start-0 border-end-0">
                                <small class="flex-fill text-center border-end py-2"><i
                                        class="fa fa-calendar-alt text-primary me-2"></i>28 Jan 2050</small>
                                <a href="#" class="btn-hover flex-fill text-center text-white border-end py-2"><i
                                        class="fa fa-thumbs-up text-primary me-2"></i>1.7K</a>
                                <a href="#" class="btn-hover flex-fill text-center text-white py-2"><i
                                        class="fa fa-comments text-primary me-2"></i>1K</a>
                            </div>
                        </div>
                        <div class="blog-content border border-top-0 rounded-bottom p-4">
                            <p class="mb-3">Posted By: Royal Hamblin </p>
                            <a href="#" class="h4">Adventures Trip</a>
                            <p class="my-3">Tempor erat elitr rebum at clita. Diam dolor diam ipsum sit diam amet diam
                                eos</p>
                            <a href="#" class="btn btn-primary rounded-pill py-2 px-4">Read More</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="blog-item">
                        <div class="blog-img">
                            <div class="blog-img-inner">
                                <img class="img-fluid w-100 rounded-top" src="{{ asset('fontend/img/blog-2.jpg') }}" alt="Image">
                                <div class="blog-icon">
                                    <a href="#" class="my-auto"><i class="fas fa-link fa-2x text-white"></i></a>
                                </div>
                            </div>
                            <div class="blog-info d-flex align-items-center border border-start-0 border-end-0">
                                <small class="flex-fill text-center border-end py-2"><i
                                        class="fa fa-calendar-alt text-primary me-2"></i>28 Jan 2050</small>
                                <a href="#" class="btn-hover flex-fill text-center text-white border-end py-2"><i
                                        class="fa fa-thumbs-up text-primary me-2"></i>1.7K</a>
                                <a href="#" class="btn-hover flex-fill text-center text-white py-2"><i
                                        class="fa fa-comments text-primary me-2"></i>1K</a>
                            </div>
                        </div>
                        <div class="blog-content border border-top-0 rounded-bottom p-4">
                            <p class="mb-3">Posted By: Royal Hamblin </p>
                            <a href="#" class="h4">Adventures Trip</a>
                            <p class="my-3">Tempor erat elitr rebum at clita. Diam dolor diam ipsum sit diam amet diam
                                eos</p>
                            <a href="#" class="btn btn-primary rounded-pill py-2 px-4">Read More</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="blog-item">
                        <div class="blog-img">
                            <div class="blog-img-inner">
                                <img class="img-fluid w-100 rounded-top" src="{{ asset('fontend/img/blog-3.jpg') }}" alt="Image">
                                <div class="blog-icon">
                                    <a href="#" class="my-auto"><i class="fas fa-link fa-2x text-white"></i></a>
                                </div>
                            </div>
                            <div class="blog-info d-flex align-items-center border border-start-0 border-end-0">
                                <small class="flex-fill text-center border-end py-2"><i
                                        class="fa fa-calendar-alt text-primary me-2"></i>28 Jan 2050</small>
                                <a href="#" class="btn-hover flex-fill text-center text-white border-end py-2"><i
                                        class="fa fa-thumbs-up text-primary me-2"></i>1.7K</a>
                                <a href="#" class="btn-hover flex-fill text-center text-white py-2"><i
                                        class="fa fa-comments text-primary me-2"></i>1K</a>
                            </div>
                        </div>
                        <div class="blog-content border border-top-0 rounded-bottom p-4">
                            <p class="mb-3">Posted By: Royal Hamblin </p>
                            <a href="#" class="h4">Adventures Trip</a>
                            <p class="my-3">Tempor erat elitr rebum at clita. Diam dolor diam ipsum sit diam amet diam
                                eos</p>
                            <a href="#" class="btn btn-primary rounded-pill py-2 px-4">Read More</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Blog End -->

    
@endsection
