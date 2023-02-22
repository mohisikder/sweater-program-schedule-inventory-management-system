@extends('frontend.layout.app')
@section('title', 'Create Style')
@section('sub-title', 'Add New Style')
@section('content')
    
<div class="style-section">
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-lg-12 col-md-12 col-sm-6 col-12">
                <div class="card">
                    <div class="card-header d-flex">
                        <h4>Add Styling Details</h4>
                    </div>
                    @if ($message = Session::get('success'))
                        <div class="text-success">
                            <p>{{ $message }}</p>
                        </div>
                    @endif
                    <div class="card-body">
                        <!-- Add Style -->    
                        <form action="{{route('style-store')}}" class="form-vertical" id="insert_style" method="post" accept-charset="utf-8">
                            @csrf
                            <div class="panel-body">
                                <div class="form-group row">
                                    <label for="style_name" class="col-sm-3 col-form-label text-right">Style/Article Name <i class="text-danger">*</i></label>
                                    <div class="col-sm-6">
                                        <input class="form-control" name="style_name" id="style_name" type="text" placeholder="Style Name" value="{{old('style_name')}}"  tabindex="1">
                                        @error('style_name')
                                        <span class="text-danger ">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="style_quantity" class="col-sm-3 col-form-label text-right">Style Total Quantity <i class="text-danger">*</i></label>
                                    <div class="col-sm-6">
                                        <input class="form-control" name="style_quantity" id="style_quantity" type="text" placeholder="Style Total Quantity" value="{{old('style_quantity')}}" tabindex="2">
                                        @error('style_quantity')
                                            <span class="text-danger ">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="style_file_no" class="col-sm-3 col-form-label text-right">File No <i class="text-danger">*</i></label>
                                    <div class="col-sm-6">
                                        <input class="form-control" name="style_file_no" id="style_file_no" type="text" placeholder="File No" value="{{old('style_file_no')}}" tabindex="3">
                                        @error('style_file_no')
                                            <span class="text-danger ">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="style_buyer" class="col-sm-3 col-form-label text-right">Buyer Name<i class="text-danger">*</i></label>
                                    <div class="col-sm-6">
                                        <select class="form-select" name="buyer_id">
                                            <option selected value="">Please select</option>
                                            @foreach ($buyers as $buyer)
                                                <option value="{{$buyer->id}}">{{$buyer->buyer_name}}</option>
                                            @endforeach
                                        </select>
                                        @error('buyer_id')
                                            <span class="text-danger ">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="style_agent" class="col-sm-3 col-form-label text-right">Agent Name<i class="text-danger">*</i></label>
                                    <div class="col-sm-6">
                                        <select class="form-select" name="agent_id">
                                            <option selected value="">Please select</option>
                                            @foreach ($agents as $agent)
                                                <option value="{{$agent->id}}">{{$agent->agent_name}}</option>
                                            @endforeach
                                        </select>
                                        @error('agent_id')
                                            <span class="text-danger ">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="yarn_details" class="col-sm-3 col-form-label text-right">Yarn Details <i class="text-danger">*</i></label>
                                    <div class="col-sm-6">
                                        <input class="form-control" name="yarn_details" id="" type="text" placeholder="Yarn Details" value="{{old('yarn_details')}}" tabindex="4">
                                        @error('yarn_details')
                                            <span class="text-danger ">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="gauge" class="col-sm-3 col-form-label text-right">Gauge Name<i class="text-danger">*</i></label>
                                    <div class="col-sm-6">
                                        <select class="form-select" name="gauge_id">
                                            <option selected value="">Please select</option>
                                            @foreach ($gauges as $gauge)
                                                <option value="{{$gauge->id}}">{{$gauge->gauge_name}}</option>
                                            @endforeach
                                        </select>
                                        @error('gauge_id')
                                            <span class="text-danger ">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="weight" class="col-sm-3 col-form-label text-right">Weight <span style="font-size: 12px; color: #ff4500">(LBS/DZN)</span><i class="text-danger">*</i></label>
                                    <div class="col-sm-6">
                                        <input class="form-control" name="style_weight" id="" type="text" placeholder="Yarn Weight"  tabindex="5">
                                        @error('style_weight')
                                            <span class="text-danger ">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="" class="col-sm-3 col-form-label text-right">Styling Photo</label>
                                    <div class="col-sm-2">
                                        <input class="form-control" name="style_photo_one" id="" type="file" placeholder="" tabindex="6">
                                    </div>
                                    <div class="col-sm-2">
                                        <input class="form-control" name="style_photo_two" id="" type="file" placeholder="" tabindex="7">
                                    </div>
                                    <div class="col-sm-2">
                                        <input class="form-control" name="style_photo_three" id="" type="file" placeholder="" tabindex="8">
                                    </div>
                                </div> 
                                <div class="form-group row">
                                    <label for="example-text-input" class="col-sm-4 col-form-label"></label>
                                    <div class="col-sm-6">
                                        <input type="submit" id="add-style" class="btn btn-success" value="Save" tabindex="10">
                                        <input type="submit" value="Save And Add Another" class="btn btn-large btn-info" id="add-style-another" tabindex="11">
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection