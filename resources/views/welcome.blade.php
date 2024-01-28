@extends('layouts.master')
@section('title', 'Dashboard Page')

@include('layouts.homepageHeader')

@section('content')
@include('layouts.search')


<!-- Tstbite Components, Mt 0, Mt Md 4 Mb 4 -->
<section class="tstbite-components tstbite-overlay mt-0 mt-md-4 mb-4">
    <div class="swiper-container single-swiper">
        <div class="swiper-wrapper">
            <div class="swiper-slide">
                <div class="card border-0 text-white">
                    <img src="assets/images/menus/menu90.jpg" class="w-100" alt="Menu">
                    <div class="card-img-overlay gradient-black-trans">
                        <div class="container tstbite-container">
                            <strong>
                                <svg data-name="feather-icon/trending-up" xmlns="http://www.w3.org/2000/svg" width="20"
                                    height="20" viewBox="0 0 20 20">
                                    <rect data-name="Bounding Box" width="20" height="20" fill="rgba(255,255,255,0)" />
                                    <path
                                        d="M.244,11.423a.834.834,0,0,1,0-1.178L6.494,3.994a.834.834,0,0,1,1.178,0L11.25,7.571l5.9-5.9H14.167a.833.833,0,1,1,0-1.667h5A.833.833,0,0,1,20,.833v5a.834.834,0,0,1-1.667,0V2.845L11.839,9.339a.834.834,0,0,1-1.179,0L7.083,5.761l-5.66,5.661a.834.834,0,0,1-1.179,0Z"
                                        transform="translate(0 4.167)" fill="#fff" />
                                </svg>
                                <span class="ml-2 caption font-weight-medium">85% would make this again</span>
                            </strong>
                            <h4 class="my-0 my-md-2 h1">Cinnamon Apple <br>Loaded Tart</h4>
                        </div>
                    </div>
                </div>
            </div>
            <div class="swiper-slide">
                <div class="card border-0 text-white">
                    <img src="assets/images/menus/menu90.jpg" class="w-100" alt="Menu">
                    <div class="card-img-overlay gradient-black-trans">
                        <div class="container tstbite-container">
                            <strong>
                                <svg data-name="feather-icon/trending-up" xmlns="http://www.w3.org/2000/svg" width="20"
                                    height="20" viewBox="0 0 20 20">
                                    <rect data-name="Bounding Box" width="20" height="20" fill="rgba(255,255,255,0)" />
                                    <path
                                        d="M.244,11.423a.834.834,0,0,1,0-1.178L6.494,3.994a.834.834,0,0,1,1.178,0L11.25,7.571l5.9-5.9H14.167a.833.833,0,1,1,0-1.667h5A.833.833,0,0,1,20,.833v5a.834.834,0,0,1-1.667,0V2.845L11.839,9.339a.834.834,0,0,1-1.179,0L7.083,5.761l-5.66,5.661a.834.834,0,0,1-1.179,0Z"
                                        transform="translate(0 4.167)" fill="#fff" />
                                </svg>
                                <span class="ml-2 caption font-weight-medium">85% would make this again</span>
                            </strong>
                            <h4 class="my-0 my-md-2 h1">Cinnamon Apple <br>Loaded Tart</h4>
                        </div>
                    </div>
                </div>
            </div>
            <div class="swiper-slide">
                <div class="card border-0 text-white">
                    <img src="assets/images/menus/menu90.jpg" class="w-100" alt="Menu">
                    <div class="card-img-overlay gradient-black-trans">
                        <div class="container tstbite-container">
                            <strong>
                                <svg data-name="feather-icon/trending-up" xmlns="http://www.w3.org/2000/svg" width="20"
                                    height="20" viewBox="0 0 20 20">
                                    <rect data-name="Bounding Box" width="20" height="20" fill="rgba(255,255,255,0)" />
                                    <path
                                        d="M.244,11.423a.834.834,0,0,1,0-1.178L6.494,3.994a.834.834,0,0,1,1.178,0L11.25,7.571l5.9-5.9H14.167a.833.833,0,1,1,0-1.667h5A.833.833,0,0,1,20,.833v5a.834.834,0,0,1-1.667,0V2.845L11.839,9.339a.834.834,0,0,1-1.179,0L7.083,5.761l-5.66,5.661a.834.834,0,0,1-1.179,0Z"
                                        transform="translate(0 4.167)" fill="#fff" />
                                </svg>
                                <span class="ml-2 caption font-weight-medium">85% would make this again</span>
                            </strong>
                            <h4 class="my-0 my-md-2 h1">Cinnamon Apple <br>Loaded Tart</h4>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="swiper-button-next"></div>
        <div class="swiper-button-prev"></div>
    </div>
</section>

<div class="container">
    {{-- @if($errors->has('error'))
    <div class="alert alert-danger">
        {{ $errors->first('error') }}
    </div>
@endif
<!-- Display errors -->
@if($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif --}}
    <!-- Tstbite Components, My 4, My Md 5 -->
    <section class="tstbite-components my-4 my-md-5">
        <h5 class="py-3 mb-0">Popular Categories</h5>
        <div class="row">
            @foreach ($limitCategories as $category)
            <div class="col-lg-2 col-md-4 col-4">
                <figure class="my-3 text-center tstbite-card">
                    <a href="{{ route('categories.show', $category->id) }}" class="tstbite-animation stretched-link rounded-circle">
                        <img src="{{ asset('assets/images/menus/' . $category->image) }}"  class="rounded-circle" alt="{{ $category->name }}">
                    </a>
                    <figcaption class="mt-2">
                        <a href="{{ route('categories.show', $category->id) }}" class="tstbite-category-title">{{ $category->name }}</a>
                    </figcaption>
                </figure>
            </div>
        @endforeach
           
        </div>
    </section>

    <!-- Tstbite Components, My 4, My Md 5 -->
    <section class="tstbite-components my-4">
        <h6 class="my-3">Super Delicious</h6>
        <div class="row">
            @foreach ($limitRecipes as $recipes)

            <div class="col-xl-4 col-md-6">
                <figure class="my-3 tstbite-card">
                    <a href="{{ route('fullRecipes', $recipes->id) }}"  class="tstbite-animation rounded-top-6">
                        <img src="{{ asset('storage/'.$recipes->image) }}"
                        class="w-100" alt="{{ $recipes->name }}">
                    </a>
                    <figcaption class="tstbite-delicious border-top-0 rounded-bottom-6">
                        <div class="text-black pt-3 pb-4 px-4">
                            <div class="w-100 float-left">
                                <div class="float-left">
                                    <div class="fabrx-ratings has-rating rating">
                                        <input type="radio" id="radio1-{{ $recipes->name }}" name="rate1" value="1" checked="checked">
                                        <label for="radio1-{{ $recipes->name }}" class="custom-starboxes"></label>
                                        <input type="radio" id="radio2-{{ $recipes->name }}" name="rate1" value="2">
                                        <label for="radio2-{{ $recipes->name }}" class="custom-starboxes"></label>
                                        <input type="radio" id="radio3-{{ $recipes->name }}" name="rate1" value="3">
                                        <label for="radio3-{{ $recipes->name }}" class="custom-starboxes"></label>
                                        <input type="radio" id="radio4-{{ $recipes->name }}" name="rate1" value="4">
                                        <label for="radio4-{{ $recipes->name }}" class="custom-starboxes"></label>
                                        <input type="radio" id="radio5-{{ $recipes->name }}" name="rate1" value="5">
                                        <label for="radio5-{{ $recipes->name }}" class="custom-starboxes"></label>
                                    </div>
                                </div>
                            </div>
                            <div class="clearfix"></div>
                            <h6 class="inter-font f-size-20 mb-0 font-weight-semibold">
                                <a href="{{ route('fullRecipes', $recipes->id) }}" class="text-black">
                                    {{ $recipes->name }}
                                </a>
                            </h6>
                            
                            
                            <div class="mt-3">
                                <img src="assets/images/avatars/avatar1.png" class="rounded-circle" alt="Avatar">
                                <small class="pl-1">{{ $recipes->user->name }}</small>
                            </div>
                            <div class="d-flex flex-wrap justify-content-end mt-4">
                                <div class="text-gray-300">
                                    <img src="assets/images/icons/calendar.svg" alt="Icon">
                                    <small>{{ \Carbon\Carbon::parse($recipes->created_at)->format('Y-m-d') }}</small>
                                </div>
                                <div class="ml-4 text-gray-300">
                                    <img src="assets/images/icons/chat.svg" alt="Icon">
                                    <small>{{ $recipes->comments()->count() }}</small>
                                </div>
                            </div>
                        </div>
                    </figcaption>
                </figure>
            </div>
            @endforeach
        </div>
    </section>
    <!-- Tstbite Components, My 4, My Md 5 -->
    <section class="tstbite-components my-4 my-md-5">
        <h4 class="py-3 mb-0">Curated Collections</h4>
        <div class="row">
            <div class="col-md-6">
                <figure class="my-3 tstbite-card">
                    <a href="#0" class="tstbite-animation stretched-link rounded-top-6">
                        <img src="assets/images/menus/menu14.jpg" class="w-100" alt="Menu">
                    </a>
                    <figcaption class="tstbite-collection border-top-0 rounded-bottom-6">
                        <div class="text-black pt-3 pb-4 px-4 text-right">
                            <h6 class="mb-3 md-lg-0 pr-0 pr-lg-4 text-left"><a href="#0">Sushi Combos for <br>your Next
                                    Party</a>
                            </h6>
                            <span class="btn btn-sm btn-outline-dark text-nowrap">156 Recipes</span>
                        </div>
                    </figcaption>
                </figure>
            </div>
            <div class="col-md-6">
                <figure class="my-3 tstbite-card">
                    <a href="#0" class="tstbite-animation stretched-link rounded-top-6">
                        <img src="assets/images/menus/menu15.jpg" class="w-100" alt="Menu">
                    </a>
                    <figcaption class="tstbite-collection border-top-0 rounded-bottom-6">
                        <div class="text-black pt-3 pb-4 px-4 text-right">
                            <h6 class="mb-3 md-lg-0 pr-0 pr-lg-4 text-left"><a href="#0">Everything Bagel</a></h6>
                            <span class="btn btn-sm btn-outline-dark text-nowrap">156 Recipes</span>
                        </div>
                    </figcaption>
                </figure>
            </div>
            <div class="col-md-6">
                <figure class="my-3 tstbite-card">
                    <a href="#0" class="tstbite-animation stretched-link rounded-top-6">
                        <img src="assets/images/menus/menu16.jpg" class="w-100" alt="Menu">
                    </a>
                    <figcaption class="tstbite-collection border-top-0 rounded-bottom-6">
                        <div class="text-black pt-3 pb-4 px-4 text-right">
                            <h6 class="mb-3 md-lg-0 pr-0 pr-lg-4 text-left"><a href="#0">Cook Like a Chef</a></h6>
                            <span class="btn btn-sm btn-outline-dark text-nowrap">156 Recipes</span>
                        </div>
                    </figcaption>
                </figure>
            </div>
            <div class="col-md-6">
                <figure class="my-3 tstbite-card">
                    <a href="#0" class="tstbite-animation stretched-link rounded-top-6">
                        <img src="assets/images/menus/menu17.jpg" class="w-100" alt="Menu">
                    </a>
                    <figcaption class="tstbite-collection border-top-0 rounded-bottom-6">
                        <div class="text-black pt-3 pb-4 px-4 text-right">
                            <h6 class="mb-3 md-lg-0 pr-0 pr-lg-4 text-left"><a href="#0">Exquisite Dinner <br>Recipe
                                    Ideas</a>
                            </h6>
                            <span class="btn btn-sm btn-outline-dark text-nowrap">156 Recipes</span>
                        </div>
                    </figcaption>
                </figure>
            </div>
            <div class="col-md-6">
                <figure class="my-3 tstbite-card">
                    <a href="#0" class="tstbite-animation stretched-link rounded-top-6">
                        <img src="assets/images/menus/menu18.jpg" class="w-100" alt="Menu">
                    </a>
                    <figcaption class="tstbite-collection border-top-0 rounded-bottom-6">
                        <div class="text-black pt-3 pb-4 px-4 text-right">
                            <h6 class="mb-3 md-lg-0 pr-0 pr-lg-4 text-left"><a href="#0">The Ultimate <br>Cookie
                                    Frenzy</a></h6>
                            <span class="btn btn-sm btn-outline-dark text-nowrap">156 Recipes</span>
                        </div>
                    </figcaption>
                </figure>
            </div>
            <div class="col-md-6">
                <figure class="my-3 tstbite-card">
                    <a href="#0" class="tstbite-animation stretched-link rounded-top-6">
                        <img src="assets/images/menus/menu19.jpg" class="w-100" alt="Menu">
                    </a>
                    <figcaption class="tstbite-collection border-top-0 rounded-bottom-6">
                        <div class="text-black pt-3 pb-4 px-4 text-right">
                            <h6 class="mb-3 md-lg-0 pr-0 pr-lg-4 text-left"><a href="#0">For the Love of <br>Donuts</a>
                            </h6>
                            <span class="btn btn-sm btn-outline-dark text-nowrap">156 Recipes</span>
                        </div>
                    </figcaption>
                </figure>
            </div>
        </div>
    </section>
    <!-- Tstbite Components, My 4, My Md 5 -->
    <section class="tstbite-components my-4 my-md-5">
        <h5 class="py-3 mb-0">Latest Recipes</h5>
        <div class="row">
            @for ($i = 0; $i < 24; $i++)
            <div class="col-lg-3 col-md-4 col-6">
                <figure class="my-3 my-md-4 tstbite-card">
                    <a href="{{ route('fullRecipes', $latestRecipes[$i % count($latestRecipes)]->id) }}" class="tstbite-animation stretched-link rounded-6">
                        <img src="{{ asset('storage/'. $latestRecipes[$i % count($latestRecipes)]->image )}}" class="w-100" alt="Menu">
                    </a>
                    <figcaption class="mt-2">
                        <a href="{{ route('fullRecipes', $latestRecipes[$i % count($latestRecipes)]->id) }}" class="text-black d-block mt-1 font-weight-semibold big">
                            {{ $latestRecipes[$i % count($latestRecipes)]->name }}
                        </a>
                    </figcaption>
                </figure>
            </div>
        @endfor
        
            
        </div>
        {{-- <div class="text-center py-5">
            <a href="#0" class="btn btn-outline-dark px-5 py-2">Load More</a>
        </div> --}}
    </section>
</div>

<!-- Tstbite Components Bg Primary Light, Mt 5, Py 5 -->
{{-- <section class="tstbite-components bg-primary-light mt-5 py-5">
    <div class="container">
        <div class="row">
            <div class="col-xl-6 col-lg-8 offset-xl-3 offset-lg-2 text-center py-4 py-md-5">
                <h2 class="mb-3 h1">Deliciousness to your inbox</h2>
                <p class="f-size-24 font-weight-regular">Enjoy weekly hand picked recipes <br>and recommendations</p>
                <div class="input-group custom-input-group mt-4">
                    <input type="text" class="form-control" placeholder="Email Address">
                    <div class="input-group-append">
                        <button class="btn btn-primary" type="button">JOIN</button>
                    </div>
                </div>
                <small class="mt-3 d-block">By joining our newsletter you agree to our <a href="#0"
                        class="text-black d-block d-sm-inline-block"><u class="tstbite-underline">Terms and
                            Conditions</u></a></small>
            </div>
        </div>
    </div>
</section> --}}
<!-- resources/views/your_view.blade.php -->

@include('layouts.footer')

@endsection
