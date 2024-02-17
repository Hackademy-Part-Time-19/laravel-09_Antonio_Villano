<div class="card" style="width: 18rem;">
    <div class="card-body">
        <h5 class="card-title">{{$name}}</h5>
        <h6 class="card-title">{{$title}}</h6>
        <h6 class="card-title">{{$description}}</h6>
        <img syle="width:200 px" src="{{Storage::url($image)}}" alt="">
        <p class="card-text">{{$body}}</p>
        <a href="{{route('articles.show'),['id'=>$id]}}" class="card-link">Card Link</a>

    </div>

</div>