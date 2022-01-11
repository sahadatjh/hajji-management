@extends('layouts.master')
@section('title','THG | Pre register Hajji')

@section('content')
<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header bg-dark">
              <h3 class="card-title text-uppercase">Pre Register Hajji List</h3>
    
              <div class="card-tools">
                <a href="{{route('pre-register-hajjis.create')}}" class="btn btn-tool text-white" title="Add New Hajji"> <i class="fa fa-plus"></i></a>
              </div>
            </div>
            <div class="card-body">
              <div class="table-responsive">
                  <table class="table table-bordered" id="hajji-listing-table">
                      <thead>
                          <tr class="bg-dark text-center">
                            <th>Sl No</th>
                            <th>Hajji Name</th>
                            <th>NG Number</th>
                            <th>Package</th>
                            <th>Price</th>
                            <th>Mobile</th>
                            <th>NID</th>
                            <th>Date Of Birth</th>
                            <th>District</th>
                            <th>Action</th>
                          </tr>
                      </thead>
                      <tbody>
                        @foreach ($hajjis as $hajji)
                            <tr>
                              <td>{{$loop->iteration}}</td>
                              <td>{{$hajji->name}}</td>
                              <td>{{$hajji->ng_number}}</td>
                              <td>{{$hajji->package->package_title}}</td>
                              <td>{{$hajji->package_price}}</td>
                              <td>{{$hajji->mobile_number}}</td>
                              <td>{{$hajji->nid_number}}</td>
                              <td>{{date('d-m-Y', strtotime($hajji->date_of_birth))}}</td>
                              <td>{{$hajji->district}}</td>
                              <td class="d-flex">
                                <a href="{{route('change.status',$hajji->id)}}" class="btn btn-sm btn-success float-left" title="Change Status"><i class="fa fa-check"></i></a>
                                <a href="{{route('pre-register-hajjis.show',$hajji->id)}}" class="btn btn-sm btn-primary float-left ml-1" title="View Details"><i class="fa fa-eye"></i></a>
                                <a href="{{route('pre-register-hajjis.edit',$hajji->id)}}" class="btn btn-sm btn-info float-left ml-1" title="Edit"><i class="fa fa-pen"></i></a>
                                <form action="{{route('pre-register-hajjis.destroy',$hajji->id)}}" method="post" class="float-left ml-1">
                                  @method('DELETE')
                                  @csrf
                                  <button type="submit" class="btn btn-sm btn-danger" title="Delete"><i class="fa fa-trash"></i></button>
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

</div>
@endsection

@push('css')
      <link rel="stylesheet" href="{{asset('assets')}}/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
      <link rel="stylesheet" href="{{asset('assets')}}/plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
      <link rel="stylesheet" href="{{asset('assets')}}/plugins/datatables-buttons/css/buttons.bootstrap4.min.css">
@endpush

@push('scripts')
    <!-- DataTables  & Plugins -->
    <script src="{{asset('assets')}}/plugins/datatables/jquery.dataTables.min.js"></script>
    <script src="{{asset('assets')}}/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
    <script src="{{asset('assets')}}/plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
    <script src="{{asset('assets')}}/plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
    <script src="{{asset('assets')}}/plugins/datatables-buttons/js/dataTables.buttons.min.js"></script>
    <script src="{{asset('assets')}}/plugins/datatables-buttons/js/buttons.bootstrap4.min.js"></script>
    <script src="{{asset('assets')}}/plugins/jszip/jszip.min.js"></script>
    <script src="{{asset('assets')}}/plugins/pdfmake/pdfmake.min.js"></script>
    <script src="{{asset('assets')}}/plugins/pdfmake/vfs_fonts.js"></script>
    <script src="{{asset('assets')}}/plugins/datatables-buttons/js/buttons.html5.min.js"></script>
    <script src="{{asset('assets')}}/plugins/datatables-buttons/js/buttons.print.min.js"></script>
    <script src="{{asset('assets')}}/plugins/datatables-buttons/js/buttons.colVis.min.js"></script>


    <Script>
      (function ($) {
        $(document).ready(function () {
          $(function () {
            
            $('#hajji-listing-table').DataTable({
              "paging": true,
              "lengthChange": false,
              "searching": true,
              "ordering": true,
              "info": true,
              "autoWidth": false,
              "responsive": true,
            });
          }); 
        });
      })(jQuery)
    </Script>
@endpush