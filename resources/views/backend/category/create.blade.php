
@extends('layouts.backend_master')
@section('title','Food categorie')
@section('content')


    <!-- Begin Page Content -->
    <div class="container-fluid">

        <!-- Page Heading -->
        <h1 class="h3 mb-2 text-gray-800">Category Management </h1>
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Create Category</h6>
            </div>
            <div class="card-body">
                <form action="{{route('backend.category.store')}}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label> Title</label>
                        <input type="text" name="title" placeholder="Enter Title" class="form-control" value="{{old('title')}}">
                      @include('backend.includes.form_element_error',['field'=>'title'])
                    </div>
                    <div class="form-group">
                        <label> Rank</label>
                        <input type="text" name="rank" placeholder="Enter Rank" class="form-control" value="{{old('rank')}}">
                        @include('backend.includes.form_element_error',['field'=>'rank'])
                    </div>

                    <div class="form-group">
                        <label>Icon</label>
                        <input type="file" name="icon_file" value="{{old('icon_file')}}">
                        @include('backend.includes.form_element_error',['field'=>'icon_file'])
                    </div>
                    <div class="form-group">
                        <label class="actibve"> Status</label>
                        <input type="radio" name="status" value="1">Active
                        <input type="radio" name="status" value="0" checked>DeActive
                        @include('backend.includes.form_element_error',['field'=>'status'])
                    </div>
                    <div class="form-group">
                      <input type="submit" value="Craete" class="btn btn-success">
                        <input type="reset" value="Reset" class="btn btn-danger">
                    </div>
                </form>
                </div>
            </div>



            <!-- /.container-fluid -->

        </div>
        <!-- End of Main Content -->
@endsection
