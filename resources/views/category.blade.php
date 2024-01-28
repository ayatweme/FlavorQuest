@extends('layouts.master')
@section('title', 'About')

@include('layouts.otherpagesHeader')

@section('content')
@include('layouts.search')

<div class="container">
    <!-- Tstbite Components, My 4, My Md 5 -->
    <section class="tstbite-components my-4 my-md-5">
        <h5 class="py-3 mb-3 mb-lg-5 h2 border-bottom border-gray-200">Categories</h5>
        <div class="row">
          @foreach ($categories as $category)
              <div class="col-lg-3 col-md-4 col-6">
            <figure class="my-3 my-md-4 text-center tstbite-card">
              <a href="{{ route('categories.show', $category->id) }}" class="tstbite-animation stretched-link rounded-circle">
                <img src="{{ asset('assets/images/menus/' . $category->image) }}" class="rounded-circle" alt="Menu">
              </a>
              <figcaption class="mt-2 mt-md-3">
                <a href="{{ route('categories.show', $category->id) }}" class="tstbite-category-title">{{ $category->name }}</a>
              </figcaption>
            </figure>
          </div>
          @endforeach

        </div>
      </section>
  </div>
@include('layouts.footer')

@endsection
