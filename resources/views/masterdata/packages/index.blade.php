@extends('layouts.master-layout')

@section('content')
    <!-- Default box -->
    <div class="card">
        <div class="card-header">
          <h3 class="card-title text-uppercase">Packages List</h3>

          <div class="card-tools">
            <button class="btn btn-sm btn-info"><i class="fa fa-plus"></i> Add New</button>
          </div>
        </div>
        <div class="card-body">
          <div class="table-responsive">
              <table class="table table-bordered">
                  <thead>
                      <tr class="bg-dark text-center">
                        <th>Sl No</th>
                        <th>Package Title</th>
                        <th>Price</th>
                        <th>Action</th>
                      </tr>
                  </thead>
                  <tbody>
                      @if (empty($pakages))
                      <tr>
                        <td colspan="4" class="text-center"><h3>No Data Found</h3></td>
                    </tr> 
                      @endif
                        @foreach ($packages as $key => $item)
                            <tr>
                                <td>{{$key+1}}</td>
                                <td>{{$item->package_title}}</td>
                                <td>{{$item->price}}</td>
                                <td></td>
                            </tr>
                        @endforeach
                  </tbody>
              </table>
          </div>
        </div>
        <!-- /.card-body -->
      </div>
      <!-- /.card -->
@endsection