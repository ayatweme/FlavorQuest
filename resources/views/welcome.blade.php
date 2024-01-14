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
    <!-- Tstbite Components, My 4, My Md 5 -->
    <section class="tstbite-components my-4 my-md-5">
        <h5 class="py-3 mb-0">Popular Categories</h5>
        <div class="row">
            <div class="col-lg-2 col-md-4 col-4">
                <figure class="my-3 text-center tstbite-card">
                    <a href="category.html" class="tstbite-animation stretched-link rounded-circle">
                        <img src="assets/images/menus/menu8.png" class="rounded-circle" alt="Menu">
                    </a>
                    <figcaption class="mt-2">
                        <a href="category.html" class="tstbite-category-title">Pasta</a>
                    </figcaption>
                </figure>
            </div>
            <div class="col-lg-2 col-md-4 col-4">
                <figure class="my-3 text-center tstbite-card">
                    <a href="category.html" class="tstbite-animation stretched-link rounded-circle">
                        <img src="assets/images/menus/menu9.png" class="rounded-circle" alt="Menu">
                    </a>
                    <figcaption class="mt-2">
                        <a href="category.html" class="tstbite-category-title">Pizza</a>
                    </figcaption>
                </figure>
            </div>
            <div class="col-lg-2 col-md-4 col-4">
                <figure class="my-3 text-center tstbite-card">
                    <a href="category.html" class="tstbite-animation stretched-link rounded-circle">
                        <img src="assets/images/menus/menu10.png" class="rounded-circle" alt="Menu">
                    </a>
                    <figcaption class="mt-2">
                        <a href="category.html" class="tstbite-category-title">Vegan</a>
                    </figcaption>
                </figure>
            </div>
            <div class="col-lg-2 col-md-4 col-4">
                <figure class="my-3 text-center tstbite-card">
                    <a href="category.html" class="tstbite-animation stretched-link rounded-circle">
                        <img src="assets/images/menus/menu11.png" class="rounded-circle" alt="Menu">
                    </a>
                    <figcaption class="mt-2">
                        <a href="category.html" class="tstbite-category-title">Desserts</a>
                    </figcaption>
                </figure>
            </div>
            <div class="col-lg-2 col-md-4 col-4">
                <figure class="my-3 text-center tstbite-card">
                    <a href="category.html" class="tstbite-animation stretched-link rounded-circle">
                        <img src="assets/images/menus/menu12.png" class="rounded-circle" alt="Menu">
                    </a>
                    <figcaption class="mt-2">
                        <a href="category.html" class="tstbite-category-title">Smoothies</a>
                    </figcaption>
                </figure>
            </div>
            <div class="col-lg-2 col-md-4 col-4">
                <figure class="my-3 text-center tstbite-card">
                    <a href="category.html" class="tstbite-animation stretched-link rounded-circle">
                        <img src="assets/images/menus/menu13.png" class="rounded-circle" alt="Menu">
                    </a>
                    <figcaption class="mt-2">
                        <a href="category.html" class="tstbite-category-title">Breakfast</a>
                    </figcaption>
                </figure>
            </div>
        </div>
    </section>

    <!-- Tstbite Components, My 4, My Md 5 -->
    <section class="tstbite-components my-4">
        <h6 class="my-3">Super Delicious</h6>
        <div class="row">
            <div class="col-xl-4 col-md-6">
                <figure class="my-3 tstbite-card">
                    <a href="#0" class="tstbite-animation rounded-top-6">
                        <img src="assets/images/menus/menu84.jpg" class="w-100" alt="Menu">
                    </a>
                    <figcaption class="tstbite-delicious border-top-0 rounded-bottom-6">
                        <div class="text-black pt-3 pb-4 px-4">
                            <div class="w-100 float-left">
                                <div class="float-left">
                                    <div class="fabrx-ratings has-rating rating">
                                        <input type="radio" id="radio1" name="rate1" value="1" checked="checked">
                                        <label for="radio1" class="custom-starboxes"></label>
                                        <input type="radio" id="radio2" name="rate1" value="2">
                                        <label for="radio2" class="custom-starboxes"></label>
                                        <input type="radio" id="radio3" name="rate1" value="3">
                                        <label for="radio3" class="custom-starboxes"></label>
                                        <input type="radio" id="radio4" name="rate1" value="4">
                                        <label for="radio4" class="custom-starboxes"></label>
                                        <input type="radio" id="radio5" name="rate1" value="5">
                                        <label for="radio5" class="custom-starboxes"></label>
                                    </div>
                                </div>
                            </div>
                            <div class="clearfix"></div>
                            <h6 class="inter-font f-size-20 mb-0 font-weight-semibold"><a href="#0"
                                    class="text-black">Delicious
                                    Fancy Glazed Blueberry Donuts</a></h6>
                            <div class="mt-3">
                                <img src="assets/images/avatars/avatar1.png" class="rounded-circle" alt="Avatar">
                                <small class="pl-1">Tricia Albert</small>
                            </div>
                            <div class="d-flex flex-wrap justify-content-end mt-4">
                                <div class="text-gray-300">
                                    <img src="assets/images/icons/calendar.svg" alt="Icon">
                                    <small>Yesterday</small>
                                </div>
                                <div class="ml-4 text-gray-300">
                                    <img src="assets/images/icons/chat.svg" alt="Icon">
                                    <small>456</small>
                                </div>
                            </div>
                        </div>
                    </figcaption>
                </figure>
            </div>
            <div class="col-xl-4 col-md-6">
                <figure class="my-3 tstbite-card">
                    <a href="#0" class="tstbite-animation rounded-top-6">
                        <img src="assets/images/menus/menu85.jpg" class="w-100" alt="Menu">
                    </a>
                    <figcaption class="tstbite-delicious border-top-0 rounded-bottom-6">
                        <div class="text-black pt-3 pb-4 px-4">
                            <div class="w-100 float-left">
                                <div class="float-left">
                                    <div class="fabrx-ratings has-rating rating">
                                        <input type="radio" id="radio6" name="rate2" value="1" checked="checked">
                                        <label for="radio6" class="custom-starboxes"></label>
                                        <input type="radio" id="radio7" name="rate2" value="2">
                                        <label for="radio7" class="custom-starboxes"></label>
                                        <input type="radio" id="radio8" name="rate2" value="3">
                                        <label for="radio8" class="custom-starboxes"></label>
                                        <input type="radio" id="radio9" name="rate2" value="4">
                                        <label for="radio9" class="custom-starboxes"></label>
                                        <input type="radio" id="radio10" name="rate2" value="5">
                                        <label for="radio10" class="custom-starboxes"></label>
                                    </div>
                                </div>
                            </div>
                            <div class="clearfix"></div>
                            <h6 class="inter-font f-size-20 mb-0 font-weight-semibold"><a href="#0"
                                    class="text-black">Pan Fried
                                    Cod in Creamy Kale Sauce</a></h6>
                            <div class="mt-3">
                                <img src="assets/images/avatars/avatar1.png" class="rounded-circle" alt="Avatar">
                                <small class="pl-1">Tricia Albert</small>
                            </div>
                            <div class="d-flex flex-wrap justify-content-end mt-4">
                                <div class="text-gray-300">
                                    <img src="assets/images/icons/calendar.svg" alt="Icon">
                                    <small>Yesterday</small>
                                </div>
                                <div class="ml-4 text-gray-300">
                                    <img src="assets/images/icons/chat.svg" alt="Icon">
                                    <small>456</small>
                                </div>
                            </div>
                        </div>
                    </figcaption>
                </figure>
            </div>
            <div class="col-xl-4 col-md-6">
                <figure class="my-3 tstbite-card">
                    <a href="#0" class="tstbite-animation rounded-top-6">
                        <img src="assets/images/menus/menu86.jpg" class="w-100" alt="Menu">
                    </a>
                    <figcaption class="tstbite-delicious border-top-0 rounded-bottom-6">
                        <div class="text-black pt-3 pb-4 px-4">
                            <div class="w-100 float-left">
                                <div class="float-left">
                                    <div class="fabrx-ratings has-rating rating">
                                        <input type="radio" id="radio11" name="rate3" value="1" checked="checked">
                                        <label for="radio11" class="custom-starboxes"></label>
                                        <input type="radio" id="radio12" name="rate3" value="2">
                                        <label for="radio12" class="custom-starboxes"></label>
                                        <input type="radio" id="radio13" name="rate3" value="3">
                                        <label for="radio13" class="custom-starboxes"></label>
                                        <input type="radio" id="radio14" name="rate3" value="4">
                                        <label for="radio14" class="custom-starboxes"></label>
                                        <input type="radio" id="radio15" name="rate3" value="5">
                                        <label for="radio15" class="custom-starboxes"></label>
                                    </div>
                                </div>
                            </div>
                            <div class="clearfix"></div>
                            <h6 class="inter-font f-size-20 mb-0 font-weight-semibold"><a href="#0"
                                    class="text-black">Berry
                                    Maddness Biscuts</a></h6>
                            <div class="mt-3">
                                <img src="assets/images/avatars/avatar1.png" class="rounded-circle" alt="Avatar">
                                <small class="pl-1">Tricia Albert</small>
                            </div>
                            <div class="d-flex flex-wrap justify-content-end mt-4">
                                <div class="text-gray-300">
                                    <img src="assets/images/icons/calendar.svg" alt="Icon">
                                    <small>Yesterday</small>
                                </div>
                                <div class="ml-4 text-gray-300">
                                    <img src="assets/images/icons/chat.svg" alt="Icon">
                                    <small>456</small>
                                </div>
                            </div>
                        </div>
                    </figcaption>
                </figure>
            </div>
            <div class="col-xl-4 col-md-6">
                <figure class="my-3 tstbite-card">
                    <a href="#0" class="tstbite-animation rounded-top-6">
                        <img src="assets/images/menus/menu87.jpg" class="w-100" alt="Menu">
                    </a>
                    <figcaption class="tstbite-delicious border-top-0 rounded-bottom-6">
                        <div class="text-black pt-3 pb-4 px-4">
                            <div class="w-100 float-left">
                                <div class="float-left">
                                    <div class="fabrx-ratings has-rating rating">
                                        <input type="radio" id="radio16" name="rate4" value="1" checked="checked">
                                        <label for="radio16" class="custom-starboxes"></label>
                                        <input type="radio" id="radio17" name="rate4" value="2">
                                        <label for="radio17" class="custom-starboxes"></label>
                                        <input type="radio" id="radio18" name="rate4" value="3">
                                        <label for="radio18" class="custom-starboxes"></label>
                                        <input type="radio" id="radio19" name="rate4" value="4">
                                        <label for="radio19" class="custom-starboxes"></label>
                                        <input type="radio" id="radio20" name="rate4" value="5">
                                        <label for="radio20" class="custom-starboxes"></label>
                                    </div>
                                </div>
                            </div>
                            <div class="clearfix"></div>
                            <h6 class="inter-font f-size-20 mb-0 font-weight-semibold"><a href="#0"
                                    class="text-black">Four
                                    Ingredient Oatmeal Pancakes</a></h6>
                            <div class="mt-3">
                                <img src="assets/images/avatars/avatar1.png" class="rounded-circle" alt="Avatar">
                                <small class="pl-1">Tricia Albert</small>
                            </div>
                            <div class="d-flex flex-wrap justify-content-end mt-4">
                                <div class="text-gray-300">
                                    <img src="assets/images/icons/calendar.svg" alt="Icon">
                                    <small>Yesterday</small>
                                </div>
                                <div class="ml-4 text-gray-300">
                                    <img src="assets/images/icons/chat.svg" alt="Icon">
                                    <small>456</small>
                                </div>
                            </div>
                        </div>
                    </figcaption>
                </figure>
            </div>
            <div class="col-xl-4 col-md-6">
                <figure class="my-3 tstbite-card">
                    <a href="#0" class="tstbite-animation rounded-top-6">
                        <img src="assets/images/menus/menu88.jpg" class="w-100" alt="Menu">
                    </a>
                    <figcaption class="tstbite-delicious border-top-0 rounded-bottom-6">
                        <div class="text-black pt-3 pb-4 px-4">
                            <div class="w-100 float-left">
                                <div class="float-left">
                                    <div class="fabrx-ratings has-rating rating">
                                        <input type="radio" id="radio21" name="rate5" value="1" checked="checked">
                                        <label for="radio21" class="custom-starboxes"></label>
                                        <input type="radio" id="radio22" name="rate5" value="2">
                                        <label for="radio22" class="custom-starboxes"></label>
                                        <input type="radio" id="radio23" name="rate5" value="3">
                                        <label for="radio23" class="custom-starboxes"></label>
                                        <input type="radio" id="radio24" name="rate5" value="4">
                                        <label for="radio24" class="custom-starboxes"></label>
                                        <input type="radio" id="radio25" name="rate5" value="5">
                                        <label for="radio25" class="custom-starboxes"></label>
                                    </div>
                                </div>
                            </div>
                            <div class="clearfix"></div>
                            <h6 class="inter-font f-size-20 mb-0 font-weight-semibold"><a href="#0"
                                    class="text-black">Pumpkin
                                    Marshmallow Pie</a></h6>
                            <div class="mt-3">
                                <img src="assets/images/avatars/avatar1.png" class="rounded-circle" alt="Avatar">
                                <small class="pl-1">Tricia Albert</small>
                            </div>
                            <div class="d-flex flex-wrap justify-content-end mt-4">
                                <div class="text-gray-300">
                                    <img src="assets/images/icons/calendar.svg" alt="Icon">
                                    <small>Yesterday</small>
                                </div>
                                <div class="ml-4 text-gray-300">
                                    <img src="assets/images/icons/chat.svg" alt="Icon">
                                    <small>456</small>
                                </div>
                            </div>
                        </div>
                    </figcaption>
                </figure>
            </div>
            <div class="col-xl-4 col-md-6">
                <figure class="my-3 tstbite-card">
                    <a href="#0" class="tstbite-animation rounded-top-6">
                        <img src="assets/images/menus/menu89.jpg" class="w-100" alt="Menu">
                    </a>
                    <figcaption class="tstbite-delicious border-top-0 rounded-bottom-6">
                        <div class="text-black pt-3 pb-4 px-4">
                            <div class="w-100 float-left">
                                <div class="float-left">
                                    <div class="fabrx-ratings has-rating rating">
                                        <input type="radio" id="radio26" name="rate6" value="1" checked="checked">
                                        <label for="radio26" class="custom-starboxes"></label>
                                        <input type="radio" id="radio27" name="rate6" value="2">
                                        <label for="radio27" class="custom-starboxes"></label>
                                        <input type="radio" id="radio28" name="rate6" value="3">
                                        <label for="radio28" class="custom-starboxes"></label>
                                        <input type="radio" id="radio29" name="rate6" value="4">
                                        <label for="radio29" class="custom-starboxes"></label>
                                        <input type="radio" id="radio30" name="rate6" value="5">
                                        <label for="radio30" class="custom-starboxes"></label>
                                    </div>
                                </div>
                            </div>
                            <div class="clearfix"></div>
                            <h6 class="inter-font f-size-20 mb-0 font-weight-semibold"><a href="#0"
                                    class="text-black">Mighty
                                    Cheesy Breakfast Burger</a></h6>
                            <div class="mt-3">
                                <img src="assets/images/avatars/avatar1.png" class="rounded-circle" alt="Avatar">
                                <small class="pl-1">Tricia Albert</small>
                            </div>
                            <div class="d-flex flex-wrap justify-content-end mt-4">
                                <div class="text-gray-300">
                                    <img src="assets/images/icons/calendar.svg" alt="Icon">
                                    <small>Yesterday</small>
                                </div>
                                <div class="ml-4 text-gray-300">
                                    <img src="assets/images/icons/chat.svg" alt="Icon">
                                    <small>456</small>
                                </div>
                            </div>
                        </div>
                    </figcaption>
                </figure>
            </div>
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
            <div class="col-lg-3 col-md-4 col-6">
                <figure class="my-3 my-md-4 tstbite-card">
                    <a href="recipe-sidebar.html" class="tstbite-animation stretched-link rounded-6">
                        <img src="assets/images/menus/menu20.jpg" class="w-100" alt="Menu">
                    </a>
                    <figcaption class="mt-2">
                        <a href="recipe-sidebar.html" class="text-black d-block mt-1 font-weight-semibold big">Caramel
                            Strawberry Milkshake</a>
                    </figcaption>
                </figure>
            </div>
            <div class="col-lg-3 col-md-4 col-6">
                <figure class="my-3 my-md-4 tstbite-card">
                    <a href="recipe-sidebar.html" class="tstbite-animation stretched-link rounded-6">
                        <img src="assets/images/menus/menu21.jpg" class="w-100" alt="Menu">
                    </a>
                    <figcaption class="mt-2">
                        <a href="recipe-sidebar.html" class="text-black d-block mt-1 font-weight-semibold big">Cashew
                            Vegan
                            Rice</a>
                    </figcaption>
                </figure>
            </div>
            <div class="col-lg-3 col-md-4 col-6">
                <figure class="my-3 my-md-4 tstbite-card">
                    <a href="recipe-sidebar.html" class="tstbite-animation stretched-link rounded-6">
                        <img src="assets/images/menus/menu22.jpg" class="w-100" alt="Menu">
                    </a>
                    <figcaption class="mt-2">
                        <a href="recipe-sidebar.html" class="text-black d-block mt-1 font-weight-semibold big">Smoked
                            Salmon
                            Salad Sandwich</a>
                    </figcaption>
                </figure>
            </div>
            <div class="col-lg-3 col-md-4 col-6">
                <figure class="my-3 my-md-4 tstbite-card">
                    <a href="recipe-sidebar.html" class="tstbite-animation stretched-link rounded-6">
                        <img src="assets/images/menus/menu23.jpg" class="w-100" alt="Menu">
                    </a>
                    <figcaption class="mt-2">
                        <a href="recipe-sidebar.html" class="text-black d-block mt-1 font-weight-semibold big">Salmon in
                            Creamy
                            Sun Dried Tomato Sauce</a>
                    </figcaption>
                </figure>
            </div>
            <div class="col-lg-3 col-md-4 col-6">
                <figure class="my-3 my-md-4 tstbite-card">
                    <a href="recipe-sidebar.html" class="tstbite-animation stretched-link rounded-6">
                        <img src="assets/images/menus/menu24.jpg" class="w-100" alt="Menu">
                    </a>
                    <figcaption class="mt-2">
                        <a href="recipe-sidebar.html" class="text-black d-block mt-1 font-weight-semibold big">Healthy
                            Jam
                            Waffle Breakfast</a>
                    </figcaption>
                </figure>
            </div>
            <div class="col-lg-3 col-md-4 col-6">
                <figure class="my-3 my-md-4 tstbite-card">
                    <a href="recipe-sidebar.html" class="tstbite-animation stretched-link rounded-6">
                        <img src="assets/images/menus/menu25.jpg" class="w-100" alt="Menu">
                    </a>
                    <figcaption class="mt-2">
                        <a href="recipe-sidebar.html" class="text-black d-block mt-1 font-weight-semibold big">Chocolate
                            and
                            Banana Jar Cake</a>
                    </figcaption>
                </figure>
            </div>
            <div class="col-lg-3 col-md-4 col-6">
                <figure class="my-3 my-md-4 tstbite-card">
                    <a href="recipe-sidebar.html" class="tstbite-animation stretched-link rounded-6">
                        <img src="assets/images/menus/menu26.jpg" class="w-100" alt="Menu">
                    </a>
                    <figcaption class="mt-2">
                        <a href="recipe-sidebar.html" class="text-black d-block mt-1 font-weight-semibold big">Caramel
                            Blueberry
                            Scones</a>
                    </figcaption>
                </figure>
            </div>
            <div class="col-lg-3 col-md-4 col-6">
                <figure class="my-3 my-md-4 tstbite-card">
                    <a href="recipe-sidebar.html" class="tstbite-animation stretched-link rounded-6">
                        <img src="assets/images/menus/menu27.jpg" class="w-100" alt="Menu">
                    </a>
                    <figcaption class="mt-2">
                        <a href="recipe-sidebar.html" class="text-black d-block mt-1 font-weight-semibold big">Blueberry
                            Carrot
                            Cake</a>
                    </figcaption>
                </figure>
            </div>
            <div class="col-lg-3 col-md-4 col-6">
                <figure class="my-3 my-md-4 tstbite-card">
                    <a href="recipe-sidebar.html" class="tstbite-animation stretched-link rounded-6">
                        <img src="assets/images/menus/menu28.jpg" class="w-100" alt="Menu">
                    </a>
                    <figcaption class="mt-2">
                        <a href="recipe-sidebar.html" class="text-black d-block mt-1 font-weight-semibold big">Vegan
                            Cauliflower
                            Salad</a>
                    </figcaption>
                </figure>
            </div>
            <div class="col-lg-3 col-md-4 col-6">
                <figure class="my-3 my-md-4 tstbite-card">
                    <a href="recipe-sidebar.html" class="tstbite-animation stretched-link rounded-6">
                        <img src="assets/images/menus/menu29.jpg" class="w-100" alt="Menu">
                    </a>
                    <figcaption class="mt-2">
                        <a href="recipe-sidebar.html" class="text-black d-block mt-1 font-weight-semibold big">Roasted
                            Red
                            Pepper Soup</a>
                    </figcaption>
                </figure>
            </div>
            <div class="col-lg-3 col-md-4 col-6">
                <figure class="my-3 my-md-4 tstbite-card">
                    <a href="recipe-sidebar.html" class="tstbite-animation stretched-link rounded-6">
                        <img src="assets/images/menus/menu30.jpg" class="w-100" alt="Menu">
                    </a>
                    <figcaption class="mt-2">
                        <a href="recipe-sidebar.html" class="text-black d-block mt-1 font-weight-semibold big">Eggs and
                            Avocado
                            Toast</a>
                    </figcaption>
                </figure>
            </div>
            <div class="col-lg-3 col-md-4 col-6">
                <figure class="my-3 my-md-4 tstbite-card">
                    <a href="recipe-sidebar.html" class="tstbite-animation stretched-link rounded-6">
                        <img src="assets/images/menus/menu31.jpg" class="w-100" alt="Menu">
                    </a>
                    <figcaption class="mt-2">
                        <a href="recipe-sidebar.html" class="text-black d-block mt-1 font-weight-semibold big">Pork
                            Shoulder
                            Cashew Noodles</a>
                    </figcaption>
                </figure>
            </div>
            <div class="col-lg-3 col-md-4 col-6">
                <figure class="my-3 my-md-4 tstbite-card">
                    <a href="recipe-sidebar.html" class="tstbite-animation stretched-link rounded-6">
                        <img src="assets/images/menus/menu32.jpg" class="w-100" alt="Menu">
                    </a>
                    <figcaption class="mt-2">
                        <a href="recipe-sidebar.html" class="text-black d-block mt-1 font-weight-semibold big">Toasted
                            Farfalle
                            In Pesto Sauce</a>
                    </figcaption>
                </figure>
            </div>
            <div class="col-lg-3 col-md-4 col-6">
                <figure class="my-3 my-md-4 tstbite-card">
                    <a href="recipe-sidebar.html" class="tstbite-animation stretched-link rounded-6">
                        <img src="assets/images/menus/menu33.jpg" class="w-100" alt="Menu">
                    </a>
                    <figcaption class="mt-2">
                        <a href="recipe-sidebar.html" class="text-black d-block mt-1 font-weight-semibold big">Cheesy
                            Bacon
                            Burger Sliders</a>
                    </figcaption>
                </figure>
            </div>
            <div class="col-lg-3 col-md-4 col-6">
                <figure class="my-3 my-md-4 tstbite-card">
                    <a href="recipe-sidebar.html" class="tstbite-animation stretched-link rounded-6">
                        <img src="assets/images/menus/menu34.jpg" class="w-100" alt="Menu">
                    </a>
                    <figcaption class="mt-2">
                        <a href="recipe-sidebar.html" class="text-black d-block mt-1 font-weight-semibold big">Fig and
                            Raisins
                            Oatmeal</a>
                    </figcaption>
                </figure>
            </div>
            <div class="col-lg-3 col-md-4 col-6">
                <figure class="my-3 my-md-4 tstbite-card">
                    <a href="recipe-sidebar.html" class="tstbite-animation stretched-link rounded-6">
                        <img src="assets/images/menus/menu35.jpg" class="w-100" alt="Menu">
                    </a>
                    <figcaption class="mt-2">
                        <a href="recipe-sidebar.html" class="text-black d-block mt-1 font-weight-semibold big">Silky
                            Smooth
                            Panacotta</a>
                    </figcaption>
                </figure>
            </div>
            <div class="col-lg-3 col-md-4 col-6">
                <figure class="my-3 my-md-4 tstbite-card">
                    <a href="recipe-sidebar.html" class="tstbite-animation stretched-link rounded-6">
                        <img src="assets/images/menus/menu36.jpg" class="w-100" alt="Menu">
                    </a>
                    <figcaption class="mt-2">
                        <a href="recipe-sidebar.html" class="text-black d-block mt-1 font-weight-semibold big">Triple
                            Decker
                            Cranberry Cake</a>
                    </figcaption>
                </figure>
            </div>
            <div class="col-lg-3 col-md-4 col-6">
                <figure class="my-3 my-md-4 tstbite-card">
                    <a href="recipe-sidebar.html" class="tstbite-animation stretched-link rounded-6">
                        <img src="assets/images/menus/menu37.jpg" class="w-100" alt="Menu">
                    </a>
                    <figcaption class="mt-2">
                        <a href="recipe-sidebar.html" class="text-black d-block mt-1 font-weight-semibold big">Very
                            Berry
                            Healthy Summer Smoothie</a>
                    </figcaption>
                </figure>
            </div>
            <div class="col-lg-3 col-md-4 col-6">
                <figure class="my-3 my-md-4 tstbite-card">
                    <a href="recipe-sidebar.html" class="tstbite-animation stretched-link rounded-6">
                        <img src="assets/images/menus/menu38.jpg" class="w-100" alt="Menu">
                    </a>
                    <figcaption class="mt-2">
                        <a href="recipe-sidebar.html" class="text-black d-block mt-1 font-weight-semibold big">Crispy
                            Orange
                            Chips</a>
                    </figcaption>
                </figure>
            </div>
            <div class="col-lg-3 col-md-4 col-6">
                <figure class="my-3 my-md-4 tstbite-card">
                    <a href="recipe-sidebar.html" class="tstbite-animation stretched-link rounded-6">
                        <img src="assets/images/menus/menu39.jpg" class="w-100" alt="Menu">
                    </a>
                    <figcaption class="mt-2">
                        <a href="recipe-sidebar.html" class="text-black d-block mt-1 font-weight-semibold big">Tumeric
                            Lavendar
                            Tea</a>
                    </figcaption>
                </figure>
            </div>
            <div class="col-lg-3 col-md-4 col-6">
                <figure class="my-3 my-md-4 tstbite-card">
                    <a href="recipe-sidebar.html" class="tstbite-animation stretched-link rounded-6">
                        <img src="assets/images/menus/menu40.jpg" class="w-100" alt="Menu">
                    </a>
                    <figcaption class="mt-2">
                        <a href="recipe-sidebar.html" class="text-black d-block mt-1 font-weight-semibold big">Blue
                            Velvet
                            Brownies</a>
                    </figcaption>
                </figure>
            </div>
            <div class="col-lg-3 col-md-4 col-6">
                <figure class="my-3 my-md-4 tstbite-card">
                    <a href="recipe-sidebar.html" class="tstbite-animation stretched-link rounded-6">
                        <img src="assets/images/menus/menu41.jpg" class="w-100" alt="Menu">
                    </a>
                    <figcaption class="mt-2">
                        <a href="recipe-sidebar.html" class="text-black d-block mt-1 font-weight-semibold big">Birthday
                            Cupcakes</a>
                    </figcaption>
                </figure>
            </div>
            <div class="col-lg-3 col-md-4 col-6">
                <figure class="my-3 my-md-4 tstbite-card">
                    <a href="recipe-sidebar.html" class="tstbite-animation stretched-link rounded-6">
                        <img src="assets/images/menus/menu42.jpg" class="w-100" alt="Menu">
                    </a>
                    <figcaption class="mt-2">
                        <a href="recipe-sidebar.html" class="text-black d-block mt-1 font-weight-semibold big">Gourmet
                            Fillet in
                            Roasted Almond Sauce</a>
                    </figcaption>
                </figure>
            </div>
            <div class="col-lg-3 col-md-4 col-6">
                <figure class="my-3 my-md-4 tstbite-card">
                    <a href="recipe-sidebar.html" class="tstbite-animation stretched-link rounded-6">
                        <img src="assets/images/menus/menu43.jpg" class="w-100" alt="Menu">
                    </a>
                    <figcaption class="mt-2">
                        <a href="recipe-sidebar.html" class="text-black d-block mt-1 font-weight-semibold big">Four
                            Ingredient
                            Oatmeal Pancakes</a>
                    </figcaption>
                </figure>
            </div>
        </div>
        <div class="text-center py-5">
            <a href="#0" class="btn btn-outline-dark px-5 py-2">Load More</a>
        </div>
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
