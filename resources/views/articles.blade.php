<x-guest-layout>
    <section>
        <h1>Les articles</h1>
        @foreach ($articles as $oneArticles)
            <a href="{{route('article.show', $oneArticles->id)}}" class="list-group-item list-group-item-action">
                <div class="d-flex w-100 justify-content-between">
                    <h5 class="mb-1">{{$oneArticles->title}}</h5>
                    <small class="text-muted">{{$oneArticles->updated_at}}</small>
                </div>
                <p class="mb-1">{{$oneArticles->content_article}}</p>
            </a>
        @endforeach
    </section>
</x-guest-layout>

{{--@extends('base')--}}

{{--@section('content')--}}
{{--    <section>--}}
{{--        <h1>Les articles</h1>--}}
{{--        @foreach ($articles as $oneArticles)--}}
{{--            <div>--}}
{{--                <a href="{{route('article.show', $oneArticles->id)}}">--}}
{{--                <h2>{{$oneArticles->title}}</h2>--}}
{{--                </a>--}}
{{--                <p>{{$oneArticles->content_article}}</p>--}}
{{--                <i>{{$oneArticles->updated_at}}</i>--}}
{{--                <br>--}}
{{--            </div>--}}
{{--        @endforeach--}}
{{--    </section>--}}
{{--@endsection--}}
