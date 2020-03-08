<div class="col-md-12 col-lg-7">
    <div class="post-area mt60">
        <div class="section-title">
            <h4> <span>latest post</span></h4>
        </div>
        @foreach($latestPost as $post)
        <div class="banner-img overlay mt40">
            <img height="230" class="full-width" src="{{$post->image_url}}" alt="banner-img">
            <p>{{$post->published_at}}</p>
            <h4><a href="#">{{$post->title , 4}}</a></h4>
        </div>
            @endforeach

    </div>
</div>
