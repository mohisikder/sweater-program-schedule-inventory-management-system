@extends('frontend.layout.app')
@section('title', 'show')
@section('content')
<div class="gauge-show-section">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header d-flex">
                        <h5>Gauge Show</h5>
                        <a class="ms-auto" href="{{route('gauge.index')}}"> <button class="btn btn-primary btn-sm">Back</button></a>
                    </div>
                    <div class="card-body">
                        <table class="table table-bordered">
                            <tr>
                                <th>Gauge Name</th>
                                <td>{{$gauge->gauge_name}}</td>
                            </tr>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection