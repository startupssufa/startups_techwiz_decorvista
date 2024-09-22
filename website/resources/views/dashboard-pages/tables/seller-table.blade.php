@extends('Admin_NF')
@section('content')
      <div class="main-panel">
                <div class="content-wrapper">
          <div class="row">
            <div class="col-lg-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Seller Table</h4>
                  <div class="table-responsive">
                    <table class="table table-hover">
                      <thead>
                        <tr>
                        <th>Product_Id</th>
                        <th>Product_Name</th>
                        <th>Product_Image</th>
                        <th>Product_Price</th>
                        <th>Product_Seller_Name</th>
                        <th>Product_Categories</th>
                        <th>Delete</th>
                        <th>Update</th>
                      </tr>
                      </thead>
                      @foreach($data as $d)
                      <tbody>
                        <tr>
                          <td>{{$d->id}}</td>
                          <td>{{$d->Product_name}}</td>
                          <td><img width="100px"  src="{{$d->Product_image}}"></td>
                          <td>{{$d->Product_price}}</td>
                          <td>{{$d->Product_seller_name}}</td>
                          <td>{{$d->Categories}}</td>
                          <td><a href="/pr_delete/{{$d->id}}" class="btn btn-danger">Delete</a></td>
                          <td><a href="/pr_update/{{$d->id}}" class="btn btn-success">Update</a></td>
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
