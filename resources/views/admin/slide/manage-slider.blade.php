@extends('admin.master')

@section('title')
    Manage Blog
@endsection

@section('content')
    <section class="wrapper">
        {{session('message')}}
        <div class="table-agile-info">
            <div class="panel panel-default">
                <div class="panel-heading">
                    Responsive Table
                </div>
                <div class="row w3-res-tb">
                    <div class="col-sm-5 m-b-xs">
                        <select class="input-sm form-control w-sm inline v-middle">
                            <option value="0">Bulk action</option>
                            <option value="1">Delete selected</option>
                            <option value="2">Bulk edit</option>
                            <option value="3">Export</option>
                        </select>
                        <button class="btn btn-sm btn-default">Apply</button>
                    </div>
                    <div class="col-sm-4">
                    </div>
                    <div class="col-sm-3">
                        <div class="input-group">
                            <input type="text" class="input-sm form-control" placeholder="Search">
                            <span class="input-group-btn">
            <button class="btn btn-sm btn-default" type="button">Go!</button>
          </span>
                        </div>
                    </div>
                </div>
                <div class="table-responsive">
                    <table class="table table-striped b-t b-light table-bordered" style="color:#282a2b">
                        <thead>
                        <tr>
                            <th>Si No</th>
                            <th>Slider Image</th>
                            <th>Publication Status</th>
                            <th>Action</th>

                        </tr>
                        </thead>
                        <tbody>
                        <?php $i = 1; ?>
                        @foreach($allSliders as $allSlider)
                            <tr style="color: #282a2b">
                                <td>{{$i}}</td>
                                <td><img src="{{asset($allSlider->slider_image)}}" alt="" width="100" height="70"/></td>
                                <td>{{$allSlider->publication_status== 1 ? 'published' : 'unpublished'}}</td>
                                <td class="center">

                                    @if($allSlider->publication_status== 1)
                                        <a href="{{url('/slider/unpublished/'.$allSlider->id)}}" class="btn btn-success btn-xs" title="Published slider">
                                            <span class="glyphicon glyphicon-arrow-up"></span>
                                        </a>
                                    @else
                                        <a href="{{url('/slider/published/'.$allSlider->id)}}" class="btn btn-warning btn-xs" title="UnPublished slider">
                                            <span class="glyphicon glyphicon-arrow-up"></span>
                                        </a>
                                    @endif
                                    <a href="{{url('/delete-slider/'.$allSlider->id)}}" onclick="confirm('Are you sure to Delete this!!')" class="btn btn-danger btn-xs" title="Delete slider">
                                        <span class="glyphicon glyphicon-trash"></span>
                                    </a>
                                </td>
                            </tr>
                            <?php $i++?>
                        @endforeach

                        </tbody>
                    </table>
                </div>
                <footer class="panel-footer">
                    <div class="row">
                        <div class="col-sm-5 text-center">
                            <small class="text-muted inline m-t-sm m-b-sm">showing 20-30 of 50 items</small>
                        </div>
                        <div class="col-sm-7 text-right text-center-xs">
                            <ul class="pagination pagination-sm m-t-none m-b-none">
                                <li><a href=""><i class="fa fa-chevron-left"></i></a></li>
                                <li><a href="">1</a></li>
                                <li><a href="">2</a></li>
                                <li><a href="">3</a></li>
                                <li><a href="">4</a></li>
                                <li><a href=""><i class="fa fa-chevron-right"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </footer>
            </div>
        </div>
    </section>
@endsection