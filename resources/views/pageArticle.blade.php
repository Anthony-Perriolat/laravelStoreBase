<x-guest-layout>
    <main>
        <div>
            <h2>{{$article->title}}</h2>
            <p>{{$article->content_article}}</p>
            <i>{{$article->updated_at}}</i>
            <form action="{{route('commentArticle.store')}}" method="post">
                @csrf
                <label for="content_commentary">Enter your commentary: </label>
                <br>
                <input value="{{$article->id}}" name="id_foreignkey" style="display: none" >
                <textarea name="content_commentary" id="content_commentary" placeholder="Your commentary" required></textarea>
                <br>
                <input type="submit" value="Subscribe!">
            </form>
        </div>
        @foreach($commentary as $Onecommentary)
            <p>{{$Onecommentary->content_commentary}}</p>
        @endforeach
    </main>
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
