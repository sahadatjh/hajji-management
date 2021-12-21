@extends('layouts.master')
@section('title','THG | Hajji Details')

@section('content')
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-header bg-dark">
              <h3 class="card-title text-uppercase">Pre Register Hajji Details</h3>&nbsp;<small>[{{$hajji->ng_number}}]</small>
    
              <div class="card-tools">
                <a href="{{route('pre-register-hajjis.index')}}" class="btn btn-tool text-white" title="Hajji List"><i class="fa fa-list"></i></a>
                </button>
              </div>
            </div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table">
                  <tr>
                    <td class="font-weight-bold">Hajji Name</td>
                    <td>{{$hajji->name}}</td>
                    <td class="font-weight-bold">Father's Name</td>
                    <td>{{$hajji->father_name}}</td>
                    <td class="font-weight-bold">Mother's Name</td>
                    <td>{{$hajji->mother_name}}</td>
                  </tr>
                  <tr>
                    <td class="font-weight-bold">Spouse Name</td>
                    <td>{{$hajji->spouse_name}}</td>
                    <td class="font-weight-bold">Occupation</td>
                    <td>{{$hajji->occupation}}</td>
                    <td class="font-weight-bold">Mobile Number</td>
                    <td>{{$hajji->mobile_number}}</td>
                  </tr>
                  <tr>
                    <td class="font-weight-bold">NID Number</td>
                    <td>{{$hajji->nid_number}}</td>
                    <td class="font-weight-bold">NG Number</td>
                    <td>{{$hajji->ng_number}}</td>
                    <td class="font-weight-bold">Tracking Number</td>
                    <td>{{$hajji->tracking_number}}</td>
                  </tr>
                  <tr>
                    <td class="font-weight-bold">District</td>
                    <td>{{$hajji->district}}</td>
                    <td class="font-weight-bold">Package</td>
                    <td>{{$hajji->package->package_title}}</td>
                    <td class="font-weight-bold">Package Price</td>
                    <td>{{$hajji->package_price}}</td>
                  </tr>
                  <tr>
                    <td class="font-weight-bold">Date Of Birth</td>
                    <td>{{date('d-M-Y', strtotime($hajji->date_of_birth))}}</td>
                    <td class="font-weight-bold">Gender</td>
                    <td>{{$hajji->gender}}</td>
                    <td class="font-weight-bold">Payment Status</td>
                    <td>{{__('Paid')}}</td>
                  </tr>
                  <tr>
                    <td class="font-weight-bold">Address</td>
                    <td colspan="2">{{$hajji->address}}</td>
                    <td class="font-weight-bold">Remarks</td>
                    <td colspan="2">{{$hajji->remarks}}</td>
                  </tr>
                </table>
              </div>
            </div>
        </div>
    </div>
</div>
@endsection