<div class="footer-content">
    <div class="ftr-title xs-mt-40">
        <h4>latest post</h4>
    </div>
    <div class="news-info pt30">
        @foreach($latestPost as $post)
        <div class="news-detail nws-bar zoom">
            @if($post->image_url)
            <img src="{{$post->image_url}}" alt="footer img">
            @endif
            <p>{{$post->title}}</p>
        </div>
            @endforeach
    </div>
</div>
