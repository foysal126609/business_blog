@extends('front-end.master')
@section('title')
    blog
    @endsection
@section('content')

    <!--starts-blog-->
    <div class="blog">
        <div class="container">
            <div class="blog-main">
                <div class="col-md-8 blog-main-left">
                    <h3>BLOG</h3>
                    @foreach($allPublishedBlogs as $allPublishedBlog)
                    <div class="blg">
                        <div class="col-md-4 blog-left">
                            <a href="single.html"><img src="{{asset($allPublishedBlog->blog_image)}}" alt=""></a>
                        </div>
                        <div class="col-md-8 blog-left">
                            <h5>{{$allPublishedBlog->blog_title}}</h5>
                            <span>by <a href="#">{{$allPublishedBlog->author_name}}</a> {{$allPublishedBlog->created_at}}   <a href="#">  comments&nbsp;(2)</a></span>
                            <p>{{$allPublishedBlog->blog_short_discription}}</p>
                            <div class="blog-btn">
                                <a href="{{url('/blog-details/'.$allPublishedBlog->id)}}">Read More</a>
                            </div>
                        </div>
                        <div class="clearfix"> </div>
                    </div>
                    @endforeach

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
            <div class="blog-bottom">
                <ul>
                    <li><a href="#" class="active">PREV</a></li>
                    <li><a href="#">1</a></li>
                    <li><a href="#">2</a></li>
                    <li><a href="#">3</a></li>
                    <li><a href="#">4</a></li>
                    <li><a href="#">...</a></li>
                    <li><a href="#">14</a></li>
                    <li><a href="#">15</a></li>
                    <li><a href="#" class="active">NEXT</a></li>
                </ul>
            </div>
        </div>
    </div>
    <!--end-blog-->
    @endsection