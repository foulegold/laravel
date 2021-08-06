@extends('main')
@section('title') News list — @parent @stop
@section('content')
    <div class="container px-4 px-lg-5">
        <div class="row gx-4 gx-lg-5 justify-content-center">
            <div class="col-md-10 col-lg-8 col-xl-7">
                @forelse($newsList as $news)
                <div class="post-preview">
                    <a href="{{ route('news.show', ['id' => $news['id']]) }}">
                        <h2 class="post-title">{{ $news['title'] }}</h2>
                        <h3 class="post-subtitle">{{ $news['description'] }}</h3>
                    </a>
                </div>
                <hr class="my-4" />
                @empty
                @endforelse
            </div>
        </div>
    </div>
@endsection
