@extends('layouts.master')
@section('title', 'Recipes')
@include('layouts.otherpagesHeader')
@section('content')
@include('layouts.search')
<div class="container">
  @if($errors->has('error'))
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
@endif
    <!-- Tstbite Section, P 0 -->
    <section class="tstbite-section p-0">
        <div class="container">
            <!-- Tstbite Components, My 4, My Md 5 -->
            <section class="tstbite-components my-4 my-md-5">
                <div class="d-sm-flex">
                    <div class="tstbite-svg order-sm-2 ml-auto">
                        <div class="tstbite-feature pt-0">
                            <a href="#0">
                                <svg data-name="feather-icon/share" xmlns="http://www.w3.org/2000/svg" width="32"
                                    height="32" viewBox="0 0 32 32">
                                    <rect data-name="Bounding Box" width="32" height="32" fill="rgba(255,255,255,0)" />
                                    <path
                                        d="M4,29.333a4,4,0,0,1-4-4V14.666a1.333,1.333,0,1,1,2.666,0V25.333A1.333,1.333,0,0,0,4,26.666H20a1.333,1.333,0,0,0,1.333-1.333V14.666a1.333,1.333,0,1,1,2.666,0V25.333a4,4,0,0,1-4,4Zm6.667-10.666V4.552L7.609,7.609A1.333,1.333,0,0,1,5.724,5.724L11.057.39a1.333,1.333,0,0,1,.307-.229h0l.025-.013.008,0,.018-.009.015-.007.011-.005.024-.011h0a1.338,1.338,0,0,1,1.062,0h0l.024.011.011,0,.016.008L12.6.143l.008,0,.025.013h0a1.333,1.333,0,0,1,.307.229l5.333,5.334a1.333,1.333,0,1,1-1.885,1.885L13.333,4.552V18.667a1.333,1.333,0,0,1-2.666,0Z"
                                        transform="translate(4 1.333)" />
                                </svg>
                            </a>
                            <a href="#0">
                                <svg data-name="feather-icon/share copy" xmlns="http://www.w3.org/2000/svg" width="32"
                                    height="32" viewBox="0 0 32 32">
                                    <rect data-name="Bounding Box" width="32" height="32" fill="rgba(255,255,255,0)" />
                                    <path
                                        d="M20,26.669a1.318,1.318,0,0,1-.77-.251l-8.558-6.113L2.108,26.418a1.319,1.319,0,0,1-.77.251A1.362,1.362,0,0,1,.41,26.3,1.314,1.314,0,0,1,0,25.333V4A4,4,0,0,1,4,0H17.333a4,4,0,0,1,4,4V25.333A1.34,1.34,0,0,1,20,26.669Zm-9.329-9.336a1.329,1.329,0,0,1,.776.248l7.225,5.161V4a1.335,1.335,0,0,0-1.334-1.333H4A1.335,1.335,0,0,0,2.666,4V22.742l7.225-5.161A1.324,1.324,0,0,1,10.666,17.333Z"
                                        transform="translate(5.333 2.667)" />
                                </svg>
                            </a>
                        </div>
                    </div>
                    <div>
                        <strong>
                            <svg data-name="feather-icon/trending-up" xmlns="http://www.w3.org/2000/svg" width="20"
                                height="20" viewBox="0 0 20 20">
                                <rect data-name="Bounding Box" width="20" height="20" fill="rgba(255,255,255,0)"></rect>
                                <path
                                    d="M.244,11.423a.834.834,0,0,1,0-1.178L6.494,3.994a.834.834,0,0,1,1.178,0L11.25,7.571l5.9-5.9H14.167a.833.833,0,1,1,0-1.667h5A.833.833,0,0,1,20,.833v5a.834.834,0,0,1-1.667,0V2.845L11.839,9.339a.834.834,0,0,1-1.179,0L7.083,5.761l-5.66,5.661a.834.834,0,0,1-1.179,0Z"
                                    transform="translate(0 4.167)" fill="#ff642f"></path>
                            </svg>
                            <span class="ml-2 caption font-weight-medium">85% would make this again</span>
                        </strong>
                        <h5 class="py-3 mb-0 h2">{{ $recipe->name }}</h5>
                    </div>
                </div>
                <div class="d-flex flex-wrap">
                    <div class="my-2 mr-4">
                        <img src="{{ asset('assets/images/avatars/user.png') }}" alt="User Avatar">
                        <small class="pl-1">{{ $recipe->user->name }}</small>
                    </div>
                    <div class="my-2 mr-4">
                        <svg xmlns="http://www.w3.org/2000/svg" width="13.333" height="14.666"
                            viewBox="0 0 13.333 14.666">
                            <path
                                d="M2,14.666a2,2,0,0,1-2-2V3.333a2,2,0,0,1,2-2H3.334V.667a.667.667,0,0,1,1.333,0v.667h4V.667A.667.667,0,0,1,10,.667v.667h1.333a2,2,0,0,1,2,2v9.334a2,2,0,0,1-2,2Zm-.667-2A.667.667,0,0,0,2,13.333h9.334A.667.667,0,0,0,12,12.667v-6H1.333ZM12,5.333v-2a.667.667,0,0,0-.667-.667H10v.667a.667.667,0,0,1-1.334,0V2.666h-4v.667a.667.667,0,1,1-1.333,0V2.666H2a.667.667,0,0,0-.667.667v2Z" />
                        </svg>
                        <small>{{ \Carbon\Carbon::parse($recipe->created_at)->format('Y-m-d') }}</small>
                    </div>
                    <div class="my-2 mr-4">
                        <svg xmlns="http://www.w3.org/2000/svg" width="13.333" height="13.335"
                            viewBox="0 0 13.333 13.335">
                            <path
                                d="M.672,13.335a.687.687,0,0,1-.464-.183A.655.655,0,0,1,0,12.667V2A2,2,0,0,1,2,0h9.334a2,2,0,0,1,2,2V8.666a2,2,0,0,1-2,2H3.61L1.138,13.138A.657.657,0,0,1,.672,13.335ZM2,1.333A.667.667,0,0,0,1.333,2v9.058L2.862,9.529a.671.671,0,0,1,.472-.195h8A.668.668,0,0,0,12,8.666V2a.667.667,0,0,0-.667-.667Z" />
                        </svg>
                        <small>{{ $totalComments }}</small>
                    </div>
                    <div class="my-2">
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
                    </div>
                </div>
                <div class="blog-detail">
                    <hr>
                    <p>{{ $recipe->description }}</p>
                    <br>
                    <div class="rounded-12 overflow-hidden position-relative tstbite-svg">
                        <img src="{{ asset('storage/'.$recipe->image) }}" class="w-50" alt="Menu">
                        {{-- <div class="overlay-box">
                            <a href="javascript:void(0);">
                              <svg xmlns="http://www.w3.org/2000/svg" width="85.334" height="106.685" viewBox="0 0 85.334 106.685">
                                <path d="M5.347,106.685a5.436,5.436,0,0,1-3.715-1.5A5.261,5.261,0,0,1,0,101.343v-96A5.324,5.324,0,0,1,8.218.855l74.669,48a5.338,5.338,0,0,1,0,8.976l-74.669,48A5.311,5.311,0,0,1,5.347,106.685Zm5.318-91.575V91.575L70.138,53.343Z" fill="#fff"/>
                              </svg>
                            </a>
                          </div> --}}
                    </div>
                    <br>
                    <div class="row mt-0 mt-md-5">
                        <div class="col-md-12">
                            <ul class="list-unstyled component-list tstbite-svg">
                                <li>
                                    <small>Prep Time</small>
                                    <span>{{ $recipe->preparation_time }} min</span>
                                </li>
                                <li>
                                    <small>Servings</small>
                                    <span>{{ $recipe->serving }} People
                                        <a href="#0" class="ml-2">
                                            <svg data-name="feather-icon/edit" xmlns="http://www.w3.org/2000/svg"
                                                width="16" height="16" viewBox="0 0 16 16">
                                                <rect data-name="Bounding Box" width="16" height="16"
                                                    fill="rgba(255,255,255,0)" />
                                                <path
                                                    d="M2,14.747a2,2,0,0,1-2-2V3.414a2,2,0,0,1,2-2H6.667a.667.667,0,1,1,0,1.333H2a.667.667,0,0,0-.667.667v9.334A.667.667,0,0,0,2,13.414h9.334A.666.666,0,0,0,12,12.748V8.081a.667.667,0,1,1,1.333,0v4.667a2,2,0,0,1-2,2ZM4.141,10.49a.659.659,0,0,1-.121-.571l.667-2.666a.67.67,0,0,1,.176-.31L11.2.61A2.081,2.081,0,0,1,14.042.52l.1.09.09.1a2.084,2.084,0,0,1-.09,2.846L7.8,9.886a.669.669,0,0,1-.31.175l-2.666.667a.675.675,0,0,1-.165.02A.66.66,0,0,1,4.141,10.49Zm8-8.938-6.2,6.2L5.583,9.164l1.41-.352,6.2-6.2a.748.748,0,1,0-1.057-1.057Z"
                                                    transform="translate(0.667 0.586)" />
                                            </svg>
                                        </a>
                                    </span>
                                </li>
                                <li>
                                    <a href="#0">
                                        <svg data-name="feather-icon/printer" xmlns="http://www.w3.org/2000/svg"
                                            width="20" height="22.041" viewBox="0 0 20 22.041">
                                            <rect data-name="Bounding Box" width="20" height="22.041"
                                                fill="rgba(255,255,255,0)" />
                                            <path
                                                d="M4.166,20.2a.88.88,0,0,1-.833-.918V16.531H2.5A2.636,2.636,0,0,1,0,13.776V9.184A2.636,2.636,0,0,1,2.5,6.429h.833V.918A.879.879,0,0,1,4.167,0h10A.878.878,0,0,1,15,.918v5.51h.833a2.636,2.636,0,0,1,2.5,2.755v4.592a2.636,2.636,0,0,1-2.5,2.755H15v2.755a.88.88,0,0,1-.834.918ZM5,18.367h8.333v-5.51H5v2.718c0,.012,0,.025,0,.038s0,.025,0,.037Zm10.834-3.673a.879.879,0,0,0,.833-.918V9.184a.878.878,0,0,0-.833-.918H2.5a.879.879,0,0,0-.833.918v4.592a.879.879,0,0,0,.833.918h.833V11.938a.88.88,0,0,1,.833-.918h10a.88.88,0,0,1,.834.918v2.756Zm-2.5-8.265V1.837H5V6.429Z"
                                                transform="translate(0.833 0.918)" />
                                        </svg>
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <div class="col-md-6">
                            <div class="mt-4 mt-md-5">
                                <h6>Ingredients</h6>
                                <div class="checklist pb-2">
                                    @foreach(json_decode($recipe->ingredients) as $ingredient)
                                    <div class="form-check form-check-rounded recipe-checkbox">
                                        <input type="checkbox" id="{{ Str::slug($ingredient) }}"
                                            name="{{ Str::slug($ingredient) }}" class="form-check-input">
                                        <label class="form-check-label"
                                            for="{{ Str::slug($ingredient) }}">{{ $ingredient }}</label>
                                    </div>
                                    @endforeach
                                </div>
                            </div>
                            <div class="row mt-4 g-0">
                                <div class="col-lg-8">
                                    <div class="rounded-12 bg-lightest-gray p-4">
                                        <h6>Nutrition Facts</h6>
                                        <ul class="Nutrition-list list-unstyled">
                                            <li>
                                                <span>Calories</span>
                                                <span>{{ $recipe->calories }}</span>
                                            </li>
                                            <li>
                                                <span>Total Fat</span>
                                                <span>{{ $recipe->total_fat }}</span>
                                            </li>
                                            <li>
                                                <span>Saturated Fat</span>
                                                <span>{{ $recipe->saturated_fat }}</span>
                                            </li>
                                            <li>
                                                <span>Cholesterol</span>
                                                <span>{{ $recipe->cholesterol }}</span>
                                            </li>
                                            <li>
                                                <span>Sodium</span>
                                                <span>{{ $recipe->sodium }}</span>
                                            </li>
                                            <li>
                                                <span>Potassium</span>
                                                <span>{{ $recipe->potassium }}</span>
                                            </li>
                                            <li>
                                                <span>Total Carbohydrate</span>
                                                <span>{{ $recipe->total_carbohydrate }}</span>
                                            </li>
                                            <li>
                                                <span>Sugars</span>
                                                <span>{{ $recipe->sugars }}</span>
                                            </li>
                                            <li>
                                                <span>Protein</span>
                                                <span>{{ $recipe->protein }}</span>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="mt-5">
                                <h6>Instructions</h6>
                                <ul class="instruction-list list-unstyled">
                                    @foreach(json_decode($recipe->instructions) as $index => $instruction)
                                    <li>
                                        <span>{{ $index + 1 }}</span>
                                        {{ $instruction }}
                                    </li>
                                    @endforeach
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="my-0 my-md-5 py-1 py-md-5">
                    <h2 class="mb-3">Already made this?</h2>
                    <a href="#0" class="btn btn-outline-dark px-5">Share your feedback</a>
                    <br>
                    <br>
                    <hr class="orange hr-11">
                </div>
                <div class="my-5 pt-0 pt-md-3">
                    <div class="border-bottom mb-4 pb-3">
                        <h2 class="d-inline-block">Comments</h2>
                        <span class="f-size-24">({{ $totalComments }})</span>
                    </div>
                    <ul id="commentsList" class="tstbite-comments list-unstyled mb-0">
                      @foreach ($comments as $comment)
                        <li class="comment-item">
                            <div class="media">
                                <a href="#0" class="tstbite-avatar align-self-start mr-3"><img
                                        src="{{asset('assets/images/avatars/user.png')}}" alt="Avatar"></a>
                                <div class="media-body">
                                    <div class="pt-1 pb-3">
                                        <h6 class="big inter-font font-weight-semibold">{{ $comment->user->name }}</h6>
                                        <div class="text-gray-300">{{$comment->created_at }}</div>
                                    </div>
                                    <p>{{$comment->comment}}</p>
                                    <ul class="tstbite-media-links list-unstyled d-flex mt-4">
                                        <li>
                                            <a href="#0">
                                                <svg data-name="feather-icon/calendar"
                                                    xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                    viewBox="0 0 16 16">
                                                    <rect data-name="Bounding Box" width="16" height="16"
                                                        fill="rgba(255,255,255,0)" />
                                                    <path
                                                        d="M.672,13.335a.687.687,0,0,1-.464-.183A.655.655,0,0,1,0,12.667V2A2,2,0,0,1,2,0h9.334a2,2,0,0,1,2,2V8.666a2,2,0,0,1-2,2H3.61L1.138,13.138A.657.657,0,0,1,.672,13.335ZM2,1.333A.667.667,0,0,0,1.333,2v9.058L2.862,9.529a.671.671,0,0,1,.472-.195h8A.668.668,0,0,0,12,8.666V2a.667.667,0,0,0-.667-.667Z"
                                                        transform="translate(1.333 1.333)" fill="#7f7f7f" />
                                                </svg>
                                                Reply (2)
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#0">
                                                <svg data-name="feather-icon/calendar"
                                                    xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                    viewBox="0 0 16 16">
                                                    <rect data-name="Bounding Box" width="16" height="16"
                                                        fill="rgba(255,255,255,0)" />
                                                    <path
                                                        d="M7.634,13.488a.662.662,0,0,1-.471-.2L1.269,7.4A4.334,4.334,0,0,1,7.4,1.27l.235.235.235-.235a4.334,4.334,0,0,1,7.4,3.064A4.3,4.3,0,0,1,14,7.4L8.105,13.292A.662.662,0,0,1,7.634,13.488ZM4.334,1.334A3,3,0,0,0,2.212,6.457l5.422,5.422,5.422-5.422A3,3,0,1,0,8.812,2.213l-.707.706a.666.666,0,0,1-.943,0l-.707-.706A2.981,2.981,0,0,0,4.334,1.334Z"
                                                        transform="translate(0.366 1.332)" fill="#7f7f7f" />
                                                </svg>
                                                48
                                            </a>
                                        </li>
                                       
                                    </ul>
                                </div>
                            </div>
                           
                        </li>
                       @endforeach
                    </ul>
                    {{-- <a href="#0" class="btn btn-outline-dark btn-block py-1 py-md-3">Load 25 more comments</a> --}}
                </div>
                <div class="write-comment">
                    <div class="d-sm-flex align-items-center flex-wrap">
                        <h6>Write a comment</h6>
                        <p class="mb-0 ml-auto"><a href="#0" class="text-primary">Login</a> to post a comment</p>
                    </div>
                    <form action="{{ route('comments.store') }}" method="post"  class="bg-lightest-gray rounded-6 mt-3 d-flex flex-wrap p-4">
                      @csrf
                        <textarea class="form-control" id="commentText" name="comment"></textarea>
                        <div class="mt-auto ml-auto">
                          <input type="hidden" name="recipe_id" id="recipeId" value="{{ $recipe->id }}">
                            <button type="submit" class="btn btn-primary px-5">Post
                                comment</button>
                        </div>
                    </form>
                </div>
            </section>
            <!-- Tstbite Components, My 4, My Md 5 -->
            <section class="tstbite-components my-4 my-md-5">
                <h5 class="py-3 mb-0">You might also like</h5>
                <div class="row">
                    <div class="col-lg-3 col-md-4 col-6">
                        <figure class="my-3 my-md-4 tstbite-card">
                            <a href="recipe-sidebar.html" class="tstbite-animation stretched-link rounded-6">
                                <img src="{{ asset('assets/images/menus/menu126.jpg') }}" class="w-100" alt="Menu">
                            </a>
                            <figcaption class="mt-2">
                                <a href="recipe-sidebar.html"
                                    class="text-black d-block mt-1 font-weight-semibold big">Cranberry Macaroon Ice
                                    Cream Cake</a>
                            </figcaption>
                        </figure>
                    </div>
                    <div class="col-lg-3 col-md-4 col-6">
                        <figure class="my-3 my-md-4 tstbite-card">
                            <a href="recipe-sidebar.html" class="tstbite-animation stretched-link rounded-6">
                                <img src="{{ asset('assets/images/menus/menu127.jpg') }}" class="w-100" alt="Menu">
                            </a>
                            <figcaption class="mt-2">
                                <a href="recipe-sidebar.html"
                                    class="text-black d-block mt-1 font-weight-semibold big">No Bake Cheesecake</a>
                            </figcaption>
                        </figure>
                    </div>
                    <div class="col-lg-3 col-md-4 col-6">
                        <figure class="my-3 my-md-4 tstbite-card">
                            <a href="recipe-sidebar.html" class="tstbite-animation stretched-link rounded-6">
                                <img src="{{ asset('assets/images/menus/menu124.jpg') }}" class="w-100" alt="Menu">
                            </a>
                            <figcaption class="mt-2">
                                <a href="recipe-sidebar.html"
                                    class="text-black d-block mt-1 font-weight-semibold big">Double Thick Layered Sponge
                                    Cake</a>
                            </figcaption>
                        </figure>
                    </div>
                    <div class="col-lg-3 col-md-4 col-6">
                        <figure class="my-3 my-md-4 tstbite-card">
                            <a href="recipe-sidebar.html" class="tstbite-animation stretched-link rounded-6">
                                <img src="{{ asset('assets/images/menus/menu133.jpg') }}" class="w-100" alt="Menu">
                            </a>
                            <figcaption class="mt-2">
                                <a href="recipe-sidebar.html"
                                    class="text-black d-block mt-1 font-weight-semibold big">Caramel Glaze Cake</a>
                            </figcaption>
                        </figure>
                    </div>
                    <div class="col-lg-3 col-md-4 col-6">
                        <figure class="my-3 my-md-4 tstbite-card">
                            <a href="recipe-sidebar.html" class="tstbite-animation stretched-link rounded-6">
                                <img src="{{ asset('assets/images/menus/menu139.jpg') }}" class="w-100" alt="Menu">
                            </a>
                            <figcaption class="mt-2">
                                <a href="recipe-sidebar.html"
                                    class="text-black d-block mt-1 font-weight-semibold big">Strawberry Cream Cake
                                    Bites</a>
                            </figcaption>
                        </figure>
                    </div>
                    <div class="col-lg-3 col-md-4 col-6">
                        <figure class="my-3 my-md-4 tstbite-card">
                            <a href="recipe-sidebar.html" class="tstbite-animation stretched-link rounded-6">
                                <img src="{{ asset('assets/images/menus/menu122.jpg') }}" class="w-100" alt="Menu">
                            </a>
                            <figcaption class="mt-2">
                                <a href="recipe-sidebar.html"
                                    class="text-black d-block mt-1 font-weight-semibold big">Homemade Mixed Berries
                                    Wedding Cake</a>
                            </figcaption>
                        </figure>
                    </div>
                    <div class="col-lg-3 col-md-4 col-6">
                        <figure class="my-3 my-md-4 tstbite-card">
                            <a href="recipe-sidebar.html" class="tstbite-animation stretched-link rounded-6">
                                <img src="{{ asset('assets/images/menus/menu138.jpg') }}" class="w-100" alt="Menu">
                            </a>
                            <figcaption class="mt-2">
                                <a href="recipe-sidebar.html"
                                    class="text-black d-block mt-1 font-weight-semibold big">M&amp;M’s Chocolate
                                    Cake</a>
                            </figcaption>
                        </figure>
                    </div>
                    <div class="col-lg-3 col-md-4 col-6">
                        <figure class="my-3 my-md-4 tstbite-card">
                            <a href="recipe-sidebar.html" class="tstbite-animation stretched-link rounded-6">
                                <img src="{{ asset('assets/images/menus/menu128.jpg') }}" class="w-100" alt="Menu">
                            </a>
                            <figcaption class="mt-2">
                                <a href="recipe-sidebar.html"
                                    class="text-black d-block mt-1 font-weight-semibold big">Almond Cinnamon Sponge
                                    Cake</a>
                            </figcaption>
                        </figure>
                    </div>
                </div>
            </section>
        </div>
    </section>
</div>
@include('layouts.footer')
<!-- Include jQuery from CDN -->

@endsection
