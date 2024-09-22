@extends('Admin_NF')
@section('content')
      <!-- partial -->
      <div class="main-panel">
        <div class="content-wrapper">
          <div class="row">
            <div class="col-lg-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Admin Table</h4>
                  <div class="table-responsive">
                    <table class="table table-hover">
                      <thead>
                        <tr>
                        <th>Id</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Password</th>
                        <th>Delete</th>
                        <th>Update</th>
                        </tr>
                      </thead>
                      @foreach($data as $d)
                      <tbody>
                        <tr>
                          <td>{{$d->id}}</td>
                          <td>{{$d->name}}</td>
                          <td>{{$d->email}}</td>
                          <td>{{$d->Password}}</td>
                          <td><a href="/delete/{{$d->id}}" class="btn btn-danger">Delete</a></td>
                          <td><a href="/update/{{$d->id}}" class="btn btn-success">Update</a></td>
                        </tr>
</tbody>
                      @endforeach
                    </table>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- content-wrapper ends -->
        <!-- partial:dashboard-partials/_footer -->
@endsection
