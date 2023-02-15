@extends('admin.layouts')
@section('title','hospitals')
@section('content')
<div class="col-md-12">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Hospitals Table</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table class="table table-bordered">
                  <thead>
                    <tr>
                      <th style="width: 10px">#</th>
                      <th>Name</th>
                      <th>location</th>
                      <th>Active</th>
                      <th>Create Date</th>
                      <th>Update Date</th>
                    </tr>
                  </thead>
                  <tbody>
                    @foreach ($data as $hospital )
                     <tr>
                      <td>{{ $hospital->id }}</td>
                      <td>{{ $hospital->name }}</td>
                      <td>{{ $hospital->location }}</td>
                      <td>{{ $hospital->is_active }}</td>
                      <td>{{ $hospital->created_at }}</td>
                      <td>{{ $hospital->updated_at }}</td>
                    </tr>
                    @endforeach

                  </tbody>
                </table>
              </div>
              <!-- /.card-body -->
              <div class="card-footer clearfix">
                <ul class="pagination pagination-sm m-0 float-right">
                  <li class="page-item"><a class="page-link" href="#">«</a></li>
                  <li class="page-item"><a class="page-link" href="#">1</a></li>
                  <li class="page-item"><a class="page-link" href="#">2</a></li>
                  <li class="page-item"><a class="page-link" href="#">3</a></li>
                  <li class="page-item"><a class="page-link" href="#">»</a></li>
                </ul>
              </div>
            </div>
          </div>
@endsection
