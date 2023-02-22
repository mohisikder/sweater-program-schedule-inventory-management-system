@extends('frontend.layout.app')
@section('title', 'Journal')
@section('content')
<div class="journal-section">
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header d-flex">
                        <h3>Journal Information</h3>
                        <a class="ms-auto" href="{{route('journal.create')}}">
                            <button class="btn btn-primary btn-sm">Create Journal</button>
                        </a>
                    </div>
                    <div class="card-body">
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Style No</th>
                                    <th>Style No</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>1</td>
                                    <td>12365</td>
                                    <td></td>
                                    <td>
                                        <a href="{{route('journal.view')}}" title="journal-view"><i class="fas fa-eye"></i></a>
                                        <a href="#" title="journal-edit"><i class="fa-solid fas fa-edit"></i></a>
                                        <a href="#" title="journal-delete"><i class="fas fa-trash-alt"></i></a>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection