
@extends('layouts.backend_master')
@section('title','Food categorie')
@section('content')


    <!-- Begin Page Content -->
    <div class="container-fluid">

        <!-- Page Heading -->
        <h1 class="h3 mb-2 text-gray-800">Category Management </h1>
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">List Category</h6>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    @include('backend.includes.flash_message')
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                        <tr>
                            <th>ID</th>
                            <th>Name</th>
                            <th>Rank</th>
                            <th>Status</th>
                            <th>Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($data['records'] as $record)
                          <tr>

                              <td>{{$loop->index+1}}</td>
                              <td>{{$record->title}}</td>
                              <td>{{$record->rank}}</td>
                              <td>@include('backend.includes.display_status_message',['status' => $record->status])</td>
                              <td>Edit/Delete/View</td>
                          </tr>
                            @endforeach

                        </tbody>
                    </table>

                </div>
            </div>



    <!-- /.container-fluid -->

    </div>
    <!-- End of Main Content -->
@endsection
