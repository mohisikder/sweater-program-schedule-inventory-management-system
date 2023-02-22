@extends('frontend.layout.app')
@section('title', 'PP Sample Status')
@section('sub-title', 'Add new PP Sample')
@section('content')
<div class="pp-sample-wrapper">
    <form action="#" method="post">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header"><h4>PP Sample Status Information</h4></div>
                    <div class="card-body">
                        <div class="row">
                            <div class="d-flex justify-content-between">
                                <div class="form-group flex-nowrap">
                                    <label for="example-text-input" class="form-label text-right">Style/Article Name</label>
                                    <input type="text" name="" id="" >
                                </div>
                                <div class="form-group flex-nowrap">
                                    <label for="example-text-input" class="form-label text-right me-2">Style Total Quantity</label>
                                    <input type="text" name="" id="" placeholder="Quantity" disabled>
                                </div>
                            </div>
                        </div>
                        <div><hr></div>
                        <div class="form-group row">
                            <label for="" class="col-sm-3 col-form-label text-right">Plan Submission Date<i class="text-danger">*</i></label>
                            <div class="col-sm-6">
                                <input class="form-control" name="plan_date" id="plan_date" type="date" placeholder="DD/MM/YYYY" required="" tabindex="1">
                            </div>
                        </div>  
                        <div class="form-group row">
                            <label for="" class="col-sm-3 col-form-label text-right">Actual Submission Date</label>
                            <div class="col-sm-6">
                                <input class="form-control" name="actual_date" id="actual_date" type="date" placeholder="DD/MM/YYYY" required="" tabindex="1">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="" class="col-sm-3 col-form-label text-right">Status</label>
                            <div class="col-sm-6">
                                <select style="background: #ffbf00;" class="form-select"
                                    name="ppstatus" id=""
                                    aria-label="Default select example"
                                    onChange="ppSampleStatus()">
                                    <option value="1">Pending</option>
                                    <option value="2">Approved</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="" class="col-sm-3 col-form-label text-right">Approved On</label>
                            <div class="col-sm-6">
                                <input class="form-control" name="approved_on_date" id="approved_on_date" type="date" placeholder="DD/MM/YYYY" required="" tabindex="1">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="" class="col-sm-3 col-form-label text-right">Remarks</label>
                            <div class="col-sm-6">
                                <textarea name="pp_remarks" id="" cols="68" rows="3"></textarea>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="example-text-input" class="col-sm-4 col-form-label"></label>
                            <div class="col-sm-6">
                                <input type="submit" id="pp-sample" class="btn btn-success" name="pp_sample" value="Save" tabindex="10">
                                <input type="submit" value="Save And Add Another" name="pp_sample_another" class="btn btn-large btn-info" id="pp-sample-another" tabindex="11">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>
</div>    
@endsection