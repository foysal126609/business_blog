@extends('admin.master')

@section('title')
    Edit Category
    @endsection

@section('content')
    <br>
    <br>
    <br>
    <br>
    <br>
    {{session('message')}}
    <hr>

    <div class="row">
        <div class=" col-lg-offset-2 col-lg-8 well">
            <form class="form-horizontal" action="{{url('/category/update')}}" method="post">
                {{csrf_field()}}
                <div class="form-group">
                    <label for="CategoryName" class="col-sm-3 control-label">Category Name</label>
                    <div class="col-sm-8">
                        <input type="text" class="form-control" name="category_name" value="{{$categoryInfoById->category_name}}" id="CategoryName" placeholder="Category Name">
                        <input type="hidden" name="category_id" value="{{$categoryInfoById->id}}" class="form-control">
                    </div>
                </div>
                <div class="form-group">
                    <label for="category_discription" class="col-sm-3 control-label">Category Discription</label>
                    <div class="col-sm-8">
                        <textarea class="form-control" rows="4" name="category_discription" {{$categoryInfoById->category_discription}} placeholder="Category Discription" id="category_discription">{{$categoryInfoById->category_discription}}</textarea>
                    </div>
                </div>
                <div class="form-group">
                    <label for="publicationStatus" class="col-sm-3 control-label">publication Status</label>
                    <div class="col-sm-8">
                        <select class="form-control" id="publicationStatus" name="publication_status">
                            <option> --publication Status--</option>
                            <option value="{{$categoryInfoById->publication_status}}">Published</option>
                            <option value="{{$categoryInfoById->publication_status}}">UnPublished</option>
                        </select>
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-sm-offset-3 col-sm-8">
                        <button type="submit" class="btn btn-success">Update Category info</button>
                    </div>
                </div>
            </form>
        </div>
        <!-- /.col-lg-12 -->
    </div>

@endsection