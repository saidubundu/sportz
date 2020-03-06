<div class="recent-news mt20">
    <div class="blog-title">
        <h3>popular posts</h3>
    </div>
    @foreach($popularPost as $post)
    <div class="comment-box mt30">
        @if($post->image_url)
            <div>
                <img src="{{$post->image_url}}" alt="news img">
            </div>
        @endif
        <div class="user-cmnt">
            <a href="{{route('blog.show', $post->id)}}"> <span>{{$post->title}}</span></a>
{{--            <p>Donec mi orci, vestibulum a auctor eu, tristique a diam.</p>--}}
        </div>
    </div>
        @endforeach

</div>
