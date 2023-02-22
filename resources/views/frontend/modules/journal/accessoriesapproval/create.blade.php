@extends('frontend.layout.app')
@section('content')
<div class="lad-dib-section">
    <div lab-dip-status-wrapper my-5>
        <form action="{{}}" method="post">
            <div class="row">
                <div class="col-sm-12 col-md-12 col-12">
                    <div class="card ">
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
                            <div class="overflow-scroll">
                            <table id="dtHorizontalVerticalExample" class="table table-bordered table-sm " cellspacing="0"
                            width="100%">
                                <thead>
                                    <tr>
                                        <th width="100">Accessories Name</th>
                                        <th width="100">Status</th>
                                        <th width="100">Approved On</th>
                                        <th width="100">Remarks</th>
                                        <th width="100">Actions</th>
                                    </tr>
                                </thead>
                                <tr>
                                    <td>
                                        <div class="form-group">
                                            <input type="text" class="form-control" placeholder="Accessories Name" autofocus
                                            name="accessories_name[]"  value="">
                                        </div>
                                    </td>
                                    <td>
                                        <div class="form-group">
                                            <select style="background: #ffbf00;" class="form-select"
                                                name="accessories_status[]" id="lapdipcolorChange"
                                                aria-label="Default select example"
                                                onChange="accessoriesColorChange()">
                                                <option value="1">Pending</option>
                                                <option value="2">Approved</option>
                                            </select>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="form-group">
                                            <input  type="date" class="form-control" placeholder="DD/MM/YYYY" autofocus
                                                name="accessories_approved_date[]" disabled id="accessories_approved_date" value="">
                                        </div>
                                    </td>
                                    
                                    <td>
                                        <div class="form-group">
                                            <textarea class="form-control" placeholder="Remarks" name="accessories_remarks[]" rows="1" cols="" id=""></textarea>
                                        </div>
                                    </td>
                                    <td class="text-center"><button type="button" onclick="accessoriesAddMoreRows(this.form)" class="btn btn-success btn-sm"><i class="fas fa-plus"></i></button></td>
                                </tr>
                                <tbody id="accessoriesAddRows"></tbody>
                            </table>
                        </div>
                        <div class="mt-3 d-flex">
                            <input type="submit" class="btn btn-primary ms-auto" name="submit" value="Save"/>
                        </div>
                        </div>
                    </div><!-- Card end-->
                </div>
            </div><!-- ./row-->
        </form>
    </div>    
</div>    
@endsection