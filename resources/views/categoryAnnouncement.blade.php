<x-header.navbar></x-header.navbar>
<section>
    <h1>Les Categories d'annonces</h1>
    @foreach ($categoryAnnouncements as $category)
        <a href="{{route('categoryAnnouncement.show', $category->id)}}" class="list-group-item list-group-item-action">
            <div class="d-flex w-100 justify-content-between">
                <h5 class="mb-1">{{$category->name}}</h5>
                <small class="text-muted">{{$category->updated_at}}</small>
            </div>
            <p class="mb-1">{{$category->type}}</p>
        </a>
    @endforeach
</section>
<x-footer.footer-bottom></x-footer.footer-bottom>
