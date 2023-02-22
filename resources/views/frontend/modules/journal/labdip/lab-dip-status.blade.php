@extends('frontend.layout.app')
@section('content')
<div class="lad-dib-section">
    <div lab-dip-status-wrapper my-5>
        <form action="{{}}" method="post">
            <div class="row">
                <div class="col-sm-12 col-md-12 col-12">
                    <div class="card ">
                        <div class="card-body">
                            <div class="overflow-scroll">
                            <table id="dtHorizontalVerticalExample" class="table table-bordered table-sm " cellspacing="0"
                            width="100%">
                                <thead>
                                    <tr>
                                        <th width="100">Color Name</th>
                                        <th width="100">Plan sub. date</th>
                                        <th width="100">Actual sub. date</th>
                                        <th width="100">Status</th>
                                        <th width="100">Approved On</th>
                                        <th width="100">Reference</th>
                                        <th width="100">App Shade</th>
                                        <th width="100">Remarks</th>
                                        <th width="100">Actions</th>
                                    </tr>
                                </thead>
                                <tr>
                                    <td>
                                        <div class="form-group">
                                            <input type="text" class="form-control" placeholder="Color Name" autofocus
                                            name="labdipcolor[]"  value="">
                                        </div>
                                    </td>
                                    <td>
                                        <div class="form-group">
                                            <input  type="date" class="form-control" placeholder="DD/MM/YYYY" autofocus
                                            name="labdippldate[]"  value="">
                                        </div>
                                    </td>
                                    <td>
                                        <div class="form-group">
                                            <input type="date" class="form-control" placeholder="DD/MM/YYYY" autofocus
                                            disabled="disabled" name="labdipacdate[]" value="">
                                        </div>
                                    </td>
                                    <td>
                                        <div class="form-group">
                                            <select style="background: #ffbf00;" class="form-select"
                                                name="labdipstatus[]" id="lapdipcolorChange"
                                                aria-label="Default select example"
                                                onChange="labdipcolorchange()">
                                                <option value="1">Pending</option>
                                                <option value="2">Approved</option>
                                            </select>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="form-group">
                                            <input  type="date" class="form-control" placeholder="DD/MM/YYYY" autofocus
                                                name="labdipapdate[]" disabled id="approved_date" value="">
                                        </div>
                                    </td>
                                    <td>
                                        <input  type="text" class="form-control" placeholder="Reference" autofocus
                                            name="reference[]"  value="">
                                    </td>
                                    <td>
                                        <div class="form-group">
                                            <input  type="text" class="form-control" placeholder="Appshade" autofocus
                                            name="appshade[]"  value="">
                                        </div>
                                    </td>
                                    <td>
                                        <div class="form-group">
                                            <textarea class="form-control" placeholder="Remarks" name="labdipremarks[]" rows="1" id=""></textarea>
                                        </div>
                                    </td>
                                    <td class="text-center"><button type="button" onclick="labDipaddMoreRows(this.form)" class="btn btn-success btn-sm"><i class="fas fa-plus"></i></button></td>
                                </tr>
                                <tbody id="labDipaddedRows"></tbody>
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