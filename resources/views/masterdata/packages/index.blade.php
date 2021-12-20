@extends('layouts.master')

@section('content')
    <!-- Default box -->
<div class="row">
    <div class="col-md-9">
        <div class="card">
            <div class="card-header bg-dark">
              <h3 class="card-title text-uppercase">Packages List</h3>
    
              <div class="card-tools">
                {{-- <a href="{{route('packages.create')}}" class="btn btn-sm btn-info"><i class="fa fa-plus"></i> Add New</a href="{{route('packages.create')}}"> --}}
                    <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                        <i class="fas fa-minus"></i>
                    </button>
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
                          @if (empty($packages))
                          <tr>
                            <td colspan="4" class="text-center"><h3>No Data Found</h3></td>
                        </tr> 
                          @endif
                            @foreach ($packages as $key => $item)
                                <tr>
                                    <td>{{$key+1}}</td>
                                    <td>{{$item->package_title}}</td>
                                    <td>{{$item->price}}</td>
                                    <td class="text-center">
                                        {{-- @can('update', $item) --}}
                                            <a href="{{route('packages.edit',$item->id)}}" class="btn btn-info btn-sm float-left" title="Edit"><i class="fa fa-pen"></i></a>
                                        {{-- @endcan --}}
                                        <form action="{{route('packages.destroy',$item->id)}}" method="post" class="w-25 float-left">
                                            @method('DELETE')
                                            @csrf
                                            <button type="submit" class="btn btn-sm btn-danger btnDelete" title="Delete"><i class="fa fa-trash"></i></button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                      </tbody>
                  </table>
              </div>
            </div>
            <!-- /.card-body -->
        </div>
    </div>
    <div class="col-md-3">

      <div class="card">
        <div class="card-header bg-dark text-uppercase">
            Add New package
        </div>
        <div class="card-body">
            <form action="{{route('packages.store')}}" method="post">
              @csrf
                  <div class="form-group">
                      <label for="package_title">Package Title</label>
                      <input type="text" name="package_title" class="form-control" id="package_title" placeholder="Package Title">
                  </div>
                  <div class="form-group">
                      <label for="price">Package Price</label>
                      <input type="number" name="price" class="form-control" id="price" placeholder="Package Price">
                  </div>
                  <button type="submit" class="btn btn-success float-right"><i class="far fa-save"></i> Save</button>
            </form>
        </div>
    </div> 
    </div>
</div>
 
@endsection

@push('scripts')
    <script>
        (function($) {
            $(document).ready(function () {
                $('.btnDelete').on('click', function () {
                    return confirm('Are you sure DELETE this!!!')
                });
            });
        })(jQuery)
    </script>
@endpush