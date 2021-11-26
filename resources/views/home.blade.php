<x-guest-layout>
    <main class="row bg-secondary d-flex">
        <div class="position-relative overflow-hidden p-3 p-md-5 m-md-3 text-center bg-light">
            <div class="col-md-5 p-lg-5 mx-auto my-5">
                <h1 class="display-4 fw-normal">It is a banner</h1>
                <p class="lead fw-normal">And an even wittier subheading to boot. Jumpstart your marketing efforts with this example based on Apple’s marketing pages.</p>
                <a class="btn btn-outline-secondary" href="#">Coming soon</a>
            </div>
            <div class="product-device shadow-sm d-none d-md-block"></div>
            <div class="product-device product-device-2 shadow-sm d-none d-md-block"></div>
        </div>
        <section class="col-6">
            <h1>Les Categories d'articles</h1>
            @foreach ($categoryArticles as $category)
                <a href="{{route('categoryArticles.show', $category->id)}}" class="list-group-item list-group-item-action">
                    <div class="d-flex w-100 justify-content-between">
                        <h5 class="mb-1">{{$category->name}}</h5>
                        <small class="text-muted">{{$category->updated_at}}</small>
                    </div>
                    <p class="mb-1">{{$category->type}}</p>
                </a>
            @endforeach
        </section>        {{--<x-profile.all-profile :data="$allProfile"></x-profile.all-profile>--}}
{{--<x-article.categories-article></x-article.categories-article>--}}
{{--<x-announcement.categories-announcement></x-announcement.categories-announcement>--}}
    </main>
</x-guest-layout>
