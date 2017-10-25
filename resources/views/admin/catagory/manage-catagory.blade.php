@extends('admin.master')

@section('title')
    Manage Category
    @endsection

@section('content')
    <div class="container">
    <div class="row">
        <div class="col-lg-12 ">
            <h1 class="page-header">Tables</h1>
        </div>
        <!-- /.col-lg-12 -->
    </div>
    <!-- /.row -->
    <div class="row">
        <div class="col-lg-8 col-lg-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">
                    DataTables Advanced Tables
                </div>
                <!-- /.panel-heading -->
                <div class="panel-body">
                    <table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
                        <thead>
                        <tr>
                            <th>Si No</th>
                            <th>Category Name</th>
                            <th>Category Discription</th>
                            <th>Publication Status</th>
                            <th>action</th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php $i = 1; ?>
                        @foreach($allCategoriesInfo as $allCategoryInfo)
                            <tr class="odd gradeX">
                                <td>{{$i}}</td>
                                <td>{{$allCategoryInfo->category_name}}</td>
                                <td>{{$allCategoryInfo->category_discription}}</td>
                                <td>{{$allCategoryInfo->publication_status}}</td>
                                <td>
                                    <a href="{{url('/edit-category/'.$allCategoryInfo->id)}}">Edit</a> ||
                                    <a href="{{url('/delete-category/'.$allCategoryInfo->id)}}" onclick="confirm('Are you sure to Delete this!!')">Delete</a>
                                </td>
                            </tr>
                            <?php $i++?>
                        @endforeach

                        </tbody>
                    </table>
                </div>
                <!-- /.row -->
            </div>
        </div>
    </div>
    </div>

    @endsection

