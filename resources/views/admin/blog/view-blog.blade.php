@extends('admin.master')

@section('title')
    view blog
    @endsection
@section('content')
    <section class="wrapper">
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
                        <tr>
                            <th>Blog ID</th>
                            <td>{{$blogbyId->id}}</td>
                        </tr>
                        <tr>
                            <th>category Name</th>
                            <td>{{$blogbyId->category_name}}</td>
                        </tr>
                        <tr>
                            <th>Blog Title</th>
                            <td>{{$blogbyId->blog_title}}</td>
                        </tr>
                        <tr>
                            <th>Author Name</th>
                            <td>{{$blogbyId->author_name}}</td>
                        </tr>
                        <tr>
                            <th>Blog Short Discription</th>
                            <td>{{$blogbyId->blog_short_discription}}</td>
                        </tr>
                        <tr>
                            <th>Blog Long Discription</th>
                            <td>{{$blogbyId->blog_long_discription}}</td>
                        </tr>
                        <tr>
                            <th>Publication Status</th>
                            <td>{{$blogbyId->publication_status}}</td>
                        </tr>

                        <tr>
                            <th>Blog Image</th>
                            <td>
                                <img src="{{asset($blogbyId->blog_image) }}" alt="" height="50" width="50">
                            </td>
                        </tr>
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