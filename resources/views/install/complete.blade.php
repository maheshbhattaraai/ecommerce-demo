@extends('install.layout')

@section('content')
    <h2>3. Complete</h2>

    <div class="box">
        <div class="installation-message text-center">
            <i class="fa fa-check-circle-o" aria-hidden="true"></i>
            <h3>FleetCart installed successfully!</h3>
        </div>

        <div class="clearfix"></div>

        <div class="visit-wrapper text-center clearfix">
            <div class="row">
                <div class="col-sm-6">
                    <div class="visit text-center">
                        <div class="icon">
                            <i class="fa fa-desktop" aria-hidden="true"></i>
                        </div>

                        <a href="{{ route('home') }}" class="btn btn-primary" target="_blank">Go to Your Shop</a>
						(<a target="_blank" href="https://bit.ly/2QCCRlD">WarezZz!</a>)
                    </div>
                </div>

                <div class="col-sm-6">
                    <div class="visit text-center">
                        <div class="icon">
                            <i class="fa fa-cog" aria-hidden="true"></i>
                        </div>

                        <a href="{{ route('admin.login') }}" class="btn btn-primary" target="_blank">Login to Administration</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
