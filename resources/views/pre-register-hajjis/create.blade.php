@extends('layouts.master')

@section('title', 'THG | Add New Hajji')

@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header bg-dark">
                  <h3 class="card-title text-uppercase">Pre Register Hajji List</h3>
        
                  <div class="card-tools">
                    <a href="{{route('pre-register-hajjis.index')}}" class="btn btn-tool text-white" title="Hajji List"><i class="fa fa-list"></i></a>
                    {{-- <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i> --}}
                    </button>
                  </div>
                </div>
                <div class="card-body">
                    <form action="{{route('pre-register-hajjis.index')}}" method="post">
                        @csrf
                        <div class="row">
                            <div class="form-group col-md-3">
                                <label for="name">Name</label>    
                                <input type="text" name="name" class="form-control" placeholder="Hajji Name">
                            </div>                       
                            <div class="form-group col-md-3">
                                <label for="father-name">Father's name</label>    
                                <input type="text" name="father_name" class="form-control" id="father-name" placeholder="Father's Name">
                            </div>                       
                            <div class="form-group col-md-3">
                                <label for="mother-name">Mother's name</label>    
                                <input type="text" name="mother_name" class="form-control" id="mother-name" placeholder="Mother's Name">
                            </div>                       
                            <div class="form-group col-md-3">
                                <label for="spouse-name">Spouse's name</label>    
                                <input type="text" name="spouse_name" class="form-control" id="spouse-name" placeholder="Spouse's Name">
                            </div>                       
                            <div class="form-group col-md-3">
                                <label for="occupation">Occupation</label>    
                                <input type="text" name="occupation" class="form-control" id="occupation" placeholder="Occupation">
                            </div>                       
                            <div class="form-group col-md-3">
                                <label for="mobile-number">Mobile Number</label>    
                                <input type="number" name="mobile_number" class="form-control" id="mobile-number" placeholder="Mobile Number">
                            </div>                       
                            <div class="form-group col-md-3">
                                <label for="nid-number">NID Number</label>    
                                <input type="number" name="nid_number" class="form-control" id="nid-number" placeholder="NID Number">
                            </div>                       
                            <div class="form-group col-md-3">
                                <label for="ng-number">NG Number</label>    
                                <input type="text" name="ng_number" class="form-control" id="ng-number" placeholder="NG Number">
                            </div>                       
                            <div class="form-group col-md-3">
                                <label for="tracking-number">Tracking Number</label>    
                                <input type="text" name="tracking_number" class="form-control" id="tracking-number" placeholder="Tracking Number">
                            </div>                       
                            <div class="form-group col-md-3">
                                <label for="date-of-birth">Date Of Birth</label>    
                                <input type="date" name="date_of_birth" class="form-control" id="date-of-birth">
                            </div>                       
                            <div class="form-group col-md-3">
                                <label for="district">District</label>    
                                <input type="text" name="district" class="form-control" id="district" placeholder="District">
                            </div>       
                            <div class="form-group col-md-3">
                                <label for="gender">Gender</label>
                                <select name="gender" id="gender" class="form-control">
                                    <option value="" disabled selected>---Select Gender---</option>
                                    <option value="Male">Male</option>
                                    <option value="Female">Female</option>
                                    <option value="Other">Other's</option>
                                </select>
                            </div> 
                            <div class="form-group col-md-3">
                                <label for="package_id">Package</label>
                                <select name="package_id" id="package_id" class="form-control">
                                    <option value="" disabled selected>---Select Package---</option>
                                    @foreach ($packages as $package)
                                        <option value="{{$package->id}}">{{$package->package_title}}</option>
                                    @endforeach
                                </select>
                            </div> 
                            
                            <div class="form-group col-md-3">
                                <label for="address">Address</label> 
                                <textarea name="address" id="address" class="form-control"></textarea>   
                            </div>                       
                            <div class="form-group col-md-3">
                                <label for="remarks">Remarks</label> 
                                <textarea name="remarks" id="remarks" class="form-control"></textarea>   
                            </div>                       
                            <div class="form-group col-12">
                                <button type="submit" class="btn btn-success float-right"><i class="fa fa-save"></i> SAVE</button>
                            </div>                       
                        </div>                   
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection