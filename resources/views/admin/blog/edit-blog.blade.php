@extends('admin.master')

@section('title')
    Edit Blog
@endsection

@section('content')
    <br/>
    <br/>
    <br/>
    <br/>
    {{session('message')}}
    <hr/>

    <section class="wrapper">
        <div class="row">
            <div class="col-lg-8 col-lg-offset-2 well" style="background-color: #e1ab91">
                <form class="form-horizontal" action="{{url('/blog/update')}}" name="editBlogForm" method="post" enctype="multipart/form-data">
                    {{csrf_field()}}

                    <div class="form-group">
                        <label for="publicationStatus" class="col-sm-3 control-label">Category Name</label>
                        <div class="col-sm-8">
                            <select class="form-control" id="publicationStatus" name="category_id">
                                @foreach($publishdeCategories as $publishdeCategory)
                                    <option value="{{$publishdeCategory->id}}">{{$publishdeCategory->category_name}}</option>
                                @endforeach

                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="blogTitle" class="col-sm-3 control-label">Blog Title </label>
                        <div class="col-sm-8">
                            <input type="text" class="form-control" value="{{$blogById->blog_title}}" name="blog_title" id="blogTitle" placeholder="Blog Title"/>
                            <input type="hidden" class="form-control" value="{{$blogById->id}}" name="blog_id" id="blogTitle" placeholder="Blog Title"/>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="authorName" class="col-sm-3 control-label">Author Name </label>
                        <div class="col-sm-8">
                            <input type="text" class="form-control" value="{{$blogById->author_name}}" name="author_name" id="authorName" placeholder="Author Name"/>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="blogShortDiscription" class="col-sm-3 control-label">Blog Long Discription</label>
                        <div class="col-sm-8">
                            <textarea class="form-control" rows="4"  name="blog_short_discription" placeholder="Blog Long Discription" id="blogShortDiscription">{{$blogById->blog_short_discription}}</textarea>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="blogLongDiscription" class="col-sm-3 control-label">Blog Short Discription</label>
                        <div class="col-sm-8">
                            <textarea class="form-control" rows="8"  name="blog_long_discription" placeholder="Blog Long Discription" id="blogLongDiscription">{{$blogById->blog_long_discription}}</textarea>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="authorName" class="col-sm-3 control-label">Blog Image </label>
                        <div class="col-sm-8">
                            <input type="file" name="blog_image" id="blogImage" accept="image/*"/>
                            <img src="{{asset($blogById->blog_image)}}" width="70" height="70"/>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="publicationStatus" class="col-sm-3 control-label">publication Status</label>
                        <div class="col-sm-8">
                            <select class="form-control" id="publicationStatus" name="publication_status">
                                <option> --publication Status--</option>
                                <option value="1">Published</option>
                                <option value="0">UnPublished</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-sm-offset-3 col-sm-8">
                            <button type="submit" class="btn btn-success">Update Blog info</button>
                        </div>
                    </div>
                </form>
            </div>
            <!-- /.col-lg-12 -->
        </div>
        <section>
            <script>
                document.forms['editBlogForm'].elements['category_id'].value='{{$blogById->category_id}}';
                document.forms['editBlogForm'].elements['publication_status'].value='{{$blogById->publication_status}}';

            </script>

@endsection