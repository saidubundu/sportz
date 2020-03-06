<div class="footbal-table-area mt50">
    <div class="section-title">
        <h4> <span>categories tables</span></h4>
    </div>
<div class="foot-tbl bnr1 mini-bg mt40">
    <h5>Category</h5>
    @foreach($categories as $category)
        <a href="{{route('category', $category->id)}}">
        <div class="point-table">

            <div class="team-rank">

                {{--                                        <img class="sml-logo" src="assets/images/club-logo/logo/barcelona.png" alt="club-logo">--}}
                <span>{{$category->name}}</span>
            </div>
            <span>{{$category->posts->count()}}</span>

        </div>
        </a>
    @endforeach

</div>
</div>
