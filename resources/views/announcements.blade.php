<x-header.navbar></x-header.navbar>
<section>
    <h1>Annonces</h1>
    @foreach ($announcements as $announcement)
        <a href="{{route('announcement.show', $announcement->id)}}" class="list-group-item list-group-item-action">
            <div class="d-flex w-100 justify-content-between">
                <h5 class="mb-1">{{$announcement->title}}</h5>
                <small class="text-muted">{{$announcement->updated_at}}</small>
            </div>
            <p class="mb-1">{{$announcement->description}}</p>
            <small class="text-muted">{{$announcement->price}} €</small>
        </a>
    @endforeach
</section>
<x-footer.footer-bottom></x-footer.footer-bottom>
