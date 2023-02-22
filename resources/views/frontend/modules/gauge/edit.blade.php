@extends('frontend.layout.app')
@section('title', 'gauge')
@section('content')
<div class="gauge-edit-section">
    <div class="container-fluid">
        <div class="row">
            <div class="card">
                <div class="card-header d-flex">
                    <h4>Gauge Updating</h4>
                    <a class="ms-auto" href="{{route('gauge.index')}}"><button class="btn btn-primary btn-sm">Back</button></a>
                </div>
                @if(session('status'))
                <div class="alert alert-success mb-1 mt-1">
                    {{ session('status') }}
                </div>
                @endif
                <div class="card-body">
                    <form action="{{ route('gauge.update',$gauge->id) }}" method="POST">
                        @method('PUT')
                        @csrf
                        <div class="modal-body">
                            <div class="form-group row">
                                <label class="form-label col-sm-3 col-12 text-right">Gauge</label>
                                <div class="col-sm-6 col-12">

                                    <input type="text" class="form-control" name="gauge_name" value="{{$gauge->gauge_name}}" placeholder="Gauge Name...">
                                </div>
                                @error('gauge_name')
                                <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="col-sm-6 col-12 m-auto">
                                <button type="submit" class="btn btn-success w-100">Update</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection