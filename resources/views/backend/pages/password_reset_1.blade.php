@section('title', 'Password Reset Bg')
@include('backend.layout.head')

@include('backend.layout.css')

<body>
<div class="app-wrapper d-block">
    <div class="">
        <!-- Body main section starts -->
        <main class="w-100 p-0">
            <div class="container-fluid">
                <!-- Reset Your Password start -->
                <div class="row">
                    <div class="col-12 p-0">
                        <div class="login-form-container">
                            <div class="mb-4">
                                <a class="logo d-inline-block" href="{{route('index')}}">
                                    <img src="{{asset('backend/assets/images/logo/1.png')}}" width="250" alt="#">
                                </a>
                            </div>
                            <div class="form_container">
                                <form class="app-form">
                                    <div class="mb-3 text-center">
                                        <h3>Reset Your Password</h3>
                                        <p class="f-s-12 text-secondary">Create a new password andsign in to admin</p>
                                    </div>
                                    <div class="mb-3">
                                        <label class="form-label">Current password</label>
                                        <input type="email" class="form-control" placeholder="Enter Your Password">
                                    </div>
                                    <div class="mb-3">
                                        <label class="form-label">New password</label>
                                        <input type="email" class="form-control" placeholder="Enter Your Password">
                                    </div>
                                    <div class="mb-3">
                                        <label class="form-label">Confirm Password</label>
                                        <input type="password" class="form-control" placeholder="Enter Your Password">
                                    </div>
                                    <div>
                                        <a href="{{route('index')}}" role="button" class="btn btn-primary w-100">Reset Password</a>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Reset Your Password end -->
            </div>
        </main>
        <!-- Body main section ends -->
    </div>
</div>
</body>

@section('script')
    <!-- latest jquery-->
    <script src="{{asset('assets/js/jquery-3.6.3.min.js')}}"></script>

    <!-- Bootstrap js-->
    <script src="{{asset('assets/vendor/bootstrap/bootstrap.bundle.min.js')}}"></script>
@endsection
