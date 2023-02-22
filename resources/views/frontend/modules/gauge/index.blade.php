@extends('frontend.layout.app')
@section('title', 'Gauge')
@section('content')
<div class="gauge-section">
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-md-12 col-sm-6">
                <div class="card">
                    <div class="card-header d-flex">
                        <h2>Gauge Information</h2>
                            <!-- Button trigger modal -->
                        <button type="button" class="btn btn-success ms-auto" data-bs-toggle="modal" data-bs-target="#gaugeCreate">
                            Add Gauge
                        </button>
                    </div>
                    <div class="card-body">
                        @if ($message = Session::get('success'))
                            <div class="alert alert-success">
                                <p>{{ $message }}</p>
                            </div>
                        @endif
                        {{-- gauge Data show --}}
                        <div class="gauge-data-show overflow-scroll">
                            <table id="dtHorizontalVerticalExample" class="table table-bordered table-sm " cellspacing="0"
                            width="100%">
                                <thead>
                                  <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">Gauge Name</th>
                                    <th scope="col">Action</th>
                                  </tr>
                                </thead>
                                @foreach ($gauges as $gauge)
                                    <tbody>
                                        <tr>
                                            <th scope="row">{{$sl++}}</th>
                                            <td>{{$gauge->gauge_name}}</td>
                                            <td class="d-flex">
                                                <button class="btn btn-info btn-sm me-1"><a class="link" href="{{route('gauge.show', $gauge->id)}}"><i class="fas fa-eye"></i></a></button>
                                                <button class="btn btn-success btn-sm me-1"><a class="link" href="{{route('gauge.edit', $gauge->id)}}"><i class="fas fa-edit"></i></a></button>
                                                {{-- <div>
                                                    <form action="{{route('gauge.destroy', $gauge->id)}}" method="POST">
                                                        @csrf
                                                        @method('DELETE')
                                                        <button type="submit"><i class="fas fa-trash-alt"></i></button>
                                                        <p type="submit">Delete</p>
                                                    </form>
                                                </div> --}}
                                                {!! Form::open(['route' => ['gauge.destroy', $gauge->id], 'method' => 'delete'])!!}
                                                    <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure?')">
                                                        <i class="fas fa-trash-alt"></i>
                                                    </button>
                                                {!!Form::close() !!}
                                            </td>
                                        </tr> 
                                    </tbody>
                                @endforeach
                              </table>
                        </div>
                      <!-- Modal -->
                        <div class="modal fade" id="gaugeCreate" tabindex="-1" aria-labelledby="gaugeCreateLabel" aria-hidden="true">
                            <div class="modal-dialog modal-lg">
                            <div class="modal-content">
                                <div class="modal-header">
                                <h1 class="modal-title fs-5" id="gaugeCreateLabel">Gauge Add</h1>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <form action="{{ route('gauge.store') }}" method="POST">
                                    @csrf
                                    <div class="modal-body">
                                        <div class="form-group row">
                                            <label for="gaugeFormControll" class="form-label col-sm-3 col-12 text-right">Gauge</label>
                                            <div class="col-sm-6 col-12">

                                                <input type="text" class="form-control" name="gauge_name" id="gaugeFormControll" placeholder="Gauge Name...">
                                            </div>
                                            @error('gauge_name')
                                                <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
                                        <button type="submit" class="btn btn-success">Save</button>
                                    </div>
                                </form>
                                </div>
                            </div>
                        </div><!-- ./Modal -->
                    </div>
                  </div>
            </div>
        </div>
    </div>
</div>
@endsection