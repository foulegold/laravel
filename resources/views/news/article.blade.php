@extends('main')
@section('title') {{ $news->title }} — @parent @stop
@section('content')
    <article class="mb-4">
        <div class="container px-4 px-lg-5">
            <div class="row gx-4 gx-lg-5 justify-content-center">
                <div class="col-md-10 col-lg-8 col-xl-7">
                    <h2 class="section-heading">{{ $news->title }}</h2>
                    <p>{{ $news->description }}</p>
                </div>
            </div>
        </div>
    </article>
@endsection
