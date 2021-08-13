@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
        <div class="col-lg-6 col-md-6 mb-4">
            <div class="card">
              
              <div class="card-body">
                
                <a href="{{route('create') }}" class="btn btn-primary">Create Post</a>
              </div>

              <hr><hr>
              
            <div class="card-body">
                <h5 class="card-title" style="color:blue;">Previous Posts</h5>
                
                <table class="table table-bordered table-striped">
                    <thead>
                    <tr>
                        <th scope="col-12" style="width:50%;">Blog Title</th>
                        <th scope="col" style="width:15%;">Comments</th>
                        <th scope="col" style="width:35%;">Action</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td>Mark</td>
                        <td>5</td>
                        <td>
                            <div class="container">
                                <div class="row">
                                    <div class="col-md-4 mr-6"><a href="" class="btn btn-info">Edit</a></div>
                                    <div class="col-md-4 ml-2"><a href="" class="btn btn-danger">Delete</a></div>
                                </div>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>Jacob</td>
                        <td>8</td>
                        <td>@fat</td>
                    </tr>
                    <tr>
                        <td>Jacob</td>
                        <td>8</td>
                        <td>@fat</td>
                    </tr>
                    </tbody>
                </table>
              
            </div>
            </div>

            
          </div>
        </div>
    </div>
</div>
@endsection
