@extends('admin.master')
@section('title')
    Add Category
@endsection

@section('content')
    <br>
    <br>
    <hr>

    <div class="row">
        <div class=" col-lg-offset-2 col-lg-8 well" style="background-color: #e1ab91">
            {{session('message')}}
            <form class="form-horizontal" action="{{url('/slider/new')}}" method="post" enctype="multipart/form-data">
                {{csrf_field()}}
                <div class="form-group">
                    <label for="sliderImage" class="col-sm-3 control-label">Slider Image </label>
                    <div class="col-sm-8">
                        <input type="file" name="slider_image" id="sliderImage" accept="image/*">
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
                        <button type="submit" class="btn btn-success">Save Slider Image</button>
                    </div>
                </div>
            </form>
        </div>
        <!-- /.col-lg-12 -->
    </div>
@endsection