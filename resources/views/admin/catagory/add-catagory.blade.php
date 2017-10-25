@extends('admin.master')
@section('title')
    Add Category
    @endsection

@section('content')
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    {{session('message')}}
    <hr>


    <div class="row">
        <div class=" col-lg-offset-2 col-lg-8 well" style="background-color: #e1ab91">
            <form class="form-horizontal" action="{{url('/category/new')}}" method="post">
                {{csrf_field()}}
                <div class="form-group">
                    <label for="CategoryName" class="col-sm-3 control-label">Category Name</label>
                    <div class="col-sm-8">
                        <input type="text" class="form-control" name="category_name" id="CategoryName" placeholder="Category Name">
                    </div>
                </div>
                <div class="form-group">
                    <label for="category_discription" class="col-sm-3 control-label">Category Discription</label>
                    <div class="col-sm-8">
                        <textarea class="form-control" rows="4" name="category_discription" placeholder="Category Discription" id="category_discription"></textarea>
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
                        <button type="submit" class="btn btn-success">Save Category info</button>
                    </div>
                </div>
            </form>
        </div>
        <!-- /.col-lg-12 -->
    </div>
@endsection