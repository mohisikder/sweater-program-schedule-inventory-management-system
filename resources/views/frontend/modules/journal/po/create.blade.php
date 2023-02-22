@extends('frontend.layout.app')
@section('title', '')
@section('sub-title', '')
@section('content')
    
<!-- P.O Breakdown -->
<div class="po_breakdown_wrapper my-5">
    <form action="{{route('pobreakdown.store')}}" method="POST">
        @csrf
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header"> <h4>P.O. BreakDown</h4></div>
                    <div class="card-body">
                        {{-- Style number --}}
                        <div class="row">
                            <div class="d-flex justify-content-between">
                                <div class="form-group flex-nowrap row">
                                    <label for="example-text-input" class="form-label col-md-8">Style/Article Name</label>
                                    <div class="col-md-8">
                                        <select class="form-select" name="style_details_id" id="style_details_id">
                                            <option selected value="">Please select</option>
                                            @foreach ($styleDetails as $style)
                                                <option value="{{$style->style_quantity}}">{{$style->style_name}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group flex-nowrap">
                                    <label for="example-text-input" class="form-label text-right me-2">Style Total Quantity</label>
                                    <input type="text" name="style_quantity" id="style_quantity" placeholder="Quantity" disabled>
                                </div>
                            </div>
                        </div>
                            <table class="table table-bordered">
                                <thead>
                                    <tr>
                                        <th scope="col">P.O No</th>
                                        <th scope="col">P.O Qty</th>
                                        <th scope="col">Delivery Date</th>
                                        <th width="25">Actions</th>
                                    </tr>
                                </thead>
                                <tr>
                                    <td>
                                        <input type="text" class="form-control me-3"
                                            placeholder="Please type number of po..." autofocus
                                            name="po_number[]" value="{{old('?po_number')}}">
                                            @error('po_number')
                                                <span class="text-danger">{{$message}}</span>
                                            @enderror
                                    </td>
                                    <td>
                                        <input type="text" class="form-control me-3"
                                            placeholder="Please type po qty..." autofocus
                                            name="po_qty[]" id="po_qty" onkeyup="total_qty(e)" value="{{old('?po_qty')}}">
                                            @error('po_qty')
                                                <span class="text-danger">{{$message}}</span>
                                            @enderror
                                    </td>
                                    <td>
                                        <div class="input_icon">
                                            <input type="date" class="form-control me-3"
                                            placeholder="DD/MM/YYYY" autofocus
                                            name="po_delivery_date[]" value="{{old('?po_delivery_date')}}" id="po_delivery_date">
                                        </div>
                                        @error('po_delivery_date')
                                            <span class="text-danger">{{$message}}</span>
                                        @enderror
                                    </td>
                                    <td class="text-center"><button type="button" onclick="addMorepo(this.form)" class="btn btn-success btn-sm"><i class="fas fa-plus"></i></button></td>
                                </tr>
                                <tbody id="addMoreRows"></tbody>
                            </table>
                            <div class="mt-2 d-flex">
                                <input type="submit" class="btn btn-success ms-auto" name="submit" value="Save"/>
                            </div>
                    </div> <!-- Card Body end-->
                </div><!-- Card end-->
            </div>
        </div><!-- ./row-->
    </form>
</div> <!-- ./po_breakdown_wrapper-->
@endsection

