@extends('front-end.master')
@section('title')
    Blog Details
    @endsection

@section('content')

    <!--starts-blog-->
    <div class="blog">
        <div class="container">
            <div class="blog-main">
                <div class="col-md-8 blog-main-left">
                    <h3>BLOG</h3>
                    <li class="blg">
                        <div class="col-md-4 blog-left blog-single-left">
                            <img src="{{asset($blogById->blog_image)}}" alt="">
                        </div>
                        <div class="col-md-8 blog-single-left">
                            <h5>{{$blogById->blog_title}}</h5>
                            <span>by {{$blogById->author_name}} on{{$blogById->created_at}}   <a href="#">  comments(2)</a></span>
                            <p class="para1">{{$blogById->blog_short_discription}}</p>
                            </div>
                        <div class="clearfix"> </div>
                        <p>{{$blogById->blog_long_discription}}</p>
                        <div class="social-status">
                            <ul>
                                <li><span class="fb"> </span><i class="cunt">329</i></li>
                                <li><span class="twit"> </span><i class="cunt">29</i></li>
                                <li><span class="gle"> </span><i class="cunt">39</i></li>
                            </ul>
                        </div>
                        @if($customerId = Session::get('customerId'))
                        <div class="reply">
                            <form action="{{url('/user-comment')}}" method="post">
                                {{csrf_field()}}
                                <h4>Leave Your Reply</h4>
                                <input type="hidden" name="customer_id" value="{{ Session::get('customerId')}}"/>
                                <textarea value="reply" name="comment" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Reply';}">Reply</textarea>
                                <input type="hidden" name="publication_status" value="0">
                                {{--<select name="publication_status">--}}
                                    {{--<option value="0">un</option>--}}
                                {{--</select>--}}
                                <input type="submit" value="Submit" />
                            </form>
                        </div>
                        @else
                            <h3>Please login to comment...........</h3>
                        <a class="play-icon popup-with-zoom-anim btn btn-warning btn-lg" href="#small-dialog">Log In</a>

                        @endif
                        <div class="comments">
                            <h4>Comments</h4>
                            @foreach($comments as $comment)
                            <div class="comments-main">
                                <div class="col-md-2 cmts-main-left">
                                    <img src="images/boy-1.jpg" alt="">
                                </div>
                                <div class="col-md-10 cmts-main-right">
                                    <h5>{{$comment->first_name.' '.$comment->second_name}}</h5>
                                    <p>{{$comment->comment}}</p>
                                    <div class="cmts">
                                        <div class="col-md-6 cmnts-left">
                                            <a href="#">{{$comment->created_at}}</a>
                                        </div>
                                        <div class="col-md-6 cmnts-right">
                                            <a href="#">Reply</a>
                                        </div>
                                        <div class="clearfix"></div>
                                    </div>
                                </div>
                                <div class="clearfix"></div>
                            </div>
                            @endforeach
                        </div>
                    </div>
                </div>
                <div class="col-md-4 blog-main-left">
                    <h3>CATEGORIES</h3>
                    <div class="ctgry">
                        <ul>
                            <li><a href="#">Nulla consectetur adipiscing metus</a></li>
                            <li><a href="#">purus vitae varius sagittis</a></li>
                            <li><a href="#">Epsum factorial non deposit quid</a></li>
                            <li><a href="#">Donec eu elit in nisi placerat</a></li>
                            <li><a href="#">Curabitur congue eros ac turpis</a></li>
                        </ul>
                    </div>
                    <div class="archives">
                        <h3>ARCHIVES</h3>
                        <ul>
                            <li><a href="#">November,2013</a></li>
                            <li><a href="#">May,2013</a></li>
                            <li><a href="#">April,2013</a></li>
                            <li><a href="#">June,2013</a></li>
                            <li><a href="#">August,2013</a></li>
                            <li><a href="#">January,2013</a></li>
                        </ul>
                    </div>
                    <div class="search">
                        <h3>SEARCH</h3>
                        <input type="text" value="Search" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Email';}" />
                        <input type="submit" value="Search" />
                    </div>
                </div>
                <div class="clearfix"> </div>
            </div>
        </div>
    </div>
    <!--end-blog-->
    @endsection