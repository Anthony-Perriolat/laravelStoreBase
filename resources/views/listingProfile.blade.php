@foreach($allProfile as $profile)
    <div class="card" style="width: 18rem;">
        <div class="card-body">
            <h5 class="card-title">{{$profile->last_name}} {{$profile->first_name}}</h5>
            <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
            <a href="{{route('serviceProvider.show', $profile->id)}}" class="btn btn-primary">Go somewhere</a>
        </div>
    </div>
@endforeach
