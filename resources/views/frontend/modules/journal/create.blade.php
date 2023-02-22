@extends('frontend.layout.app')
@section('title', 'Journal Create')
@section('content')
<div class="journal-section mb-4">
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header d-flex">
                        <h3>Journal Create</h3>
                        <a class=" ms-auto" href="{{route('journal.index')}}">
                            <button class="btn btn-primary btn-sm">Back</button>
                        </a>
                    </div><!-- ./card-header-->
                </div><!-- ./card-->
                <!-- 01 Styling Details Section-->
                <section class="styling-section">
                    <div class="accordion" id="accordionPanelsStayOpenExample">
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="panelsStayOpen-headingOne">
                            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseOne" aria-expanded="true" aria-controls="panelsStayOpen-collapseOne">
                                01 Styling Details
                            </button>
                            </h2>
                            <div id="panelsStayOpen-collapseOne" class="accordion-collapse collapse show" aria-labelledby="panelsStayOpen-headingOne">
                            <div class="accordion-body">
                            <!-- 01 Style Details -->
                            @include('frontend.modules.journal.style-details')
                            <!-- ./01 Style Details -->
                            {{-- PO Breakdown --}}
                            @include('frontend.modules.journal.po-breakdown')
                            {{-- ./PO Breakdown --}}
                            </div>
                            </div>
                        </div>
                    </div><!-- ./accordion-->
                </section><!-- ./styling-section-->
                <!-- 02 Styling Details Section-->
                <section class="lab-dip-section">
                    <div class="accordion" id="accordionPanelsStayOpenExample">
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="panelsStayOpen-headingTwo">
                            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseTwo" aria-expanded="true" aria-controls="panelsStayOpen-collapseTwo">
                                02 Lab Dip Status
                            </button>
                            </h2>
                            <div id="panelsStayOpen-collapseTwo" class="accordion-collapse collapse show" aria-labelledby="panelsStayOpen-headingTwo">
                            <div class="accordion-body">
                            <!-- 02 Lab dip Status -->
                            @include('frontend.modules.journal.lab-dip-status')
                            <!-- ./02 Lab dip Status -->
                            </div>
                            </div>
                        </div>
                    </div><!-- ./accordion-->
                </section><!-- ./lab-dip-section-->
            </div><!-- ./col-md-12-->
        </div><!-- ./row-->
    </div><!-- ./container-->
</div><!-- ./journal-section-->
@endsection
