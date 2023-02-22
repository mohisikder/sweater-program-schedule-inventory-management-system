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
                        <h4>Edit Styling Details</h4>
                    </div>
                    <div class="card-body">
                        <!-- Add Style -->    
                        <form action="#" class="form-vertical" id="insert_style" method="post" accept-charset="utf-8">
                            <div class="panel-body">
                                <div class="form-group row">
                                    <label for="style_name" class="col-sm-3 col-form-label text-right">Style/Article Name <i class="text-danger">*</i></label>
                                    <div class="col-sm-6">
                                        <input class="form-control" name="style_name" id="style_name" type="text" placeholder="Style Name" required="" tabindex="1">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="style_name" class="col-sm-3 col-form-label text-right">Style Total Quantity <i class="text-danger">*</i></label>
                                    <div class="col-sm-6">
                                        <input class="form-control" name="style_quantity" id="style_quantity" type="text" placeholder="Style Total Quantity" required="" tabindex="2">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="style_name" class="col-sm-3 col-form-label text-right">File No <i class="text-danger">*</i></label>
                                    <div class="col-sm-6">
                                        <input class="form-control" name="style_name" id="style_name" type="text" placeholder="File No" required="" tabindex="3">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="style_buyer" class="col-sm-3 col-form-label text-right">Buyer Name<i class="text-danger">*</i></label>
                                    <div class="col-sm-6">
                                        <select class="form-select" name="">
                                                <option selected>Choose Buyer</option>
                                            @foreach ($buyers as $buyer)
                                                <option value="{{$buyer->buyer_name}}">{{$buyer->buyer_name}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="style_agent" class="col-sm-3 col-form-label text-right">Agent Name<i class="text-danger">*</i></label>
                                    <div class="col-sm-6">
                                        <select class="form-select" name="">
                                            <option selected>Choose Agent</option>
                                            @foreach ($agents as $agent)
                                                <option value="{{$agent->agent_name}}">{{$agent->agent_name}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="yarn_details" class="col-sm-3 col-form-label text-right">Yarn Details <i class="text-danger">*</i></label>
                                    <div class="col-sm-6">
                                        <input class="form-control" name="" id="" type="text" placeholder="Yarn Details" required="" tabindex="4">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="gauge" class="col-sm-3 col-form-label text-right">Gauge Name<i class="text-danger">*</i></label>
                                    <div class="col-sm-6">
                                        <select class="form-select" name="">
                                            <option selected>Choose Gauge</option>
                                            @foreach ($gauges as $gauge)
                                                <option value="{{$gauge->gauge_name}}">{{$gauge->gauge_name}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="weight" class="col-sm-3 col-form-label text-right">Weight <span style="font-size: 12px; color: #ff4500">(LBS/DZN)</span><i class="text-danger">*</i></label>
                                    <div class="col-sm-6">
                                        <input class="form-control" name="" id="" type="text" placeholder="Yarn Weight" required="" tabindex="5">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="" class="col-sm-3 col-form-label text-right">Styling Photo</label>
                                    <div class="col-sm-2">
                                        <input class="form-control" name="" id="" type="file" placeholder="" required="" tabindex="6">
                                    </div>
                                    <div class="col-sm-2">
                                        <input class="form-control" name="" id="" type="file" placeholder="" required="" tabindex="7">
                                    </div>
                                    <div class="col-sm-2">
                                        <input class="form-control" name="" id="" type="file" placeholder="" required="" tabindex="8">
                                    </div>
                                </div>
                                
                                <div class="form-group row">
                                    <label for="example-text-input" class="col-sm-4 col-form-label"></label>
                                    <div class="col-sm-6">
                                        <input type="submit" id="add-style" class="btn btn-success" name="add-style" value="Save" tabindex="10">
                                        <input type="submit" value="Save And Add Another" name="add-style-another" class="btn btn-large btn-info" id="add-style-another" tabindex="11">
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