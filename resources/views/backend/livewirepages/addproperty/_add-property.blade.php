@extends('backend.layout.master')
@section('title', 'add-property')
@section('css')
    <!--font-awesome-css-->
    <link rel="stylesheet" href="{{asset('backend/assets/vendor/fontawesome/css/all.css')}}">
@endsection
@section('main-content')
    <div class="container-fluid">
        <!-- Breadcrumb start -->
        <div class="row m-1">
            <div class="col-12 ">
                <h4 class="main-title">Blank</h4>
                <ul class="app-line-breadcrumbs mb-3">
                    <li class="">
                        <a href="#" class="f-s-14 f-w-500">
                      <span>
                        <i class="ph-duotone  ph-newspaper f-s-16"></i> Other Pages
                      </span>
                        </a>
                    </li>
                    <li class="active">
                        <a href="#" class="f-s-14 f-w-500">Blank</a>
                    </li>
                </ul>
            </div>
        </div>
        <!-- Breadcrumb end -->




        <!-- Blank start -->
        <div class="row">
            <!-- Default Card start -->
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h5>Default Card</h5>
                    </div>
                    <div class="card-body">

                        @livewire('backend.property-system.add-property')

                    <div class="card-footer">
                        <p class="float-start text-secondary p-t-10 mb-0">1 days Ago</p>

                        <a href="#" class="float-end fw-bold"> Read More </a>
                    </div>

                </div>
            </div>

            <!-- Default Card end -->
        </div>
        <!-- Blank end -->
    </div>


@endsection

@section('script')
    <!--customizer-->
    <div id="customizer"></div>

        <!--  js-->
        <script src="{{asset('backend/assets/js/font_awesome.js')}}"></script>
@endsection

