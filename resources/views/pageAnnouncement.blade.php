<x-header.navbar></x-header.navbar>
<section>
    <h1>Annonces</h1>
    <div>
        <h2>{{$announcement->title}}</h2>
        <span>{{$announcement->provide}}</span>
        <span>{{$announcement->price}}</span>
        <span>{{$announcement->description}}</span>
        <br>
        <i>{{$announcement->updated_at}}</i>
    </div>
</section>
<x-footer.footer-bottom></x-footer.footer-bottom>
