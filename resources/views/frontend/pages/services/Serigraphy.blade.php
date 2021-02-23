@extends('frontend.layouts.app')
@section('description')
    <meta name="description" content="" />
@endsection
@section('keywords')
    <meta name="keywords" content="" />
@endsection
@section('title', '')
@section('content')

    <section class="page-header page-header-modern page-header-background page-header-background-pattern page-header-background-sm overlay overlay-color-dark overlay-show overlay-op-5">
        <div class="container">
            <div class="row">
                <div class="col-md-12 align-self-center p-static order-2 text-center">
                    <h1>Marquage</h1>
                </div>
                <div class="col-md-12 align-self-center order-1">
                    <ul class="breadcrumb breadcrumb-light d-block text-center">
                        <li><a href="{{route('home')}}">Acceuil</a></li>
                        <li class="active">Serigraphie</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <section>
        <div class="container py-2 mb-5">
            <div class="row">
                <div class="col-md-6">
                    <h2 class="pt-5 mt-5" style="color: #068f58;">Marquage sur tous supports</h2>
                    <p>Neque porro quisquam est qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit...</p>
                    <button type="button" class="btn btn-sm text-white">
                        <a href="#" class="text-white" data-toggle="tooltip">Commander</a>
                    </button>
                </div>
                <div class="col-md-6">
                    <img class="image" src="{{ asset('images/08.jpg') }}" alt="" style="width: 100%;">
                </div>
            </div>
        </div>

        <div class="row" style="background: #e0e0f5;">
            <div class="col-lg-12">
                <h2 class="font-weight-bold text-color-primary text-center text-7 my-5" style="color: #019e53 !important;">Comment ça marche?</h2>
            </div>
        </div>

        <div class="row mb-5 pb-3" style="background: #e0e0f5;">

            <div class="col-md-6 col-lg-4 mb-5 mb-lg-0 appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="200">
                <div class="card flip-card text-center rounded-0">
                    <div class="flip-front p-5" style="height: 269px;">
                        <div class="flip-content my-4">
                            <strong class="font-weight-extra-bold text-color-primary line-height-1 text-13 mb-3 d-inline-block" style="font-size: 30px; color: #019e53 !important;">01</strong>
                            <p>Connectez vous sur la plateforme Extreme Graphic.</p>
                        </div>
                    </div>
                    <div class="flip-back d-flex align-items-center p-5" style="background-image: url({{ asset('images/img01.jpg') }}); background-size: cover; background-position: center;">
                        <div class="flip-content my-4">

                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-4 mb-5 mb-lg-0 appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="400">

                <div class="card flip-card flip-card-vertical text-center rounded-0">
                    <div class="flip-front p-5" style="height: 269px;">
                        <div class="flip-content my-4">
                            <strong class="font-weight-extra-bold text-color-primary line-height-1 text-13 mb-3 d-inline-block" style="font-size: 30px; color: #019e53 !important;">02</strong>
                            <p> Contatez ou laissez nous un email au niveau de la parge contact.<br>&nbsp;</p>
                        </div>
                    </div>
                    <div class="flip-back d-flex align-items-center p-5" style="background-image: url({{ asset('images/img02.jpg') }}); background-size: cover; background-position: center;">
                        <div class="flip-content my-4">

                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-4 mb-5 mb-lg-0 appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="600">

                <div class="card flip-card flip-card-3d text-center rounded-0">
                    <div class="flip-front p-5" style="height: 269px;">
                        <div class="flip-content my-4">
                            <strong class="font-weight-extra-bold text-color-primary line-height-1 text-13 mb-3 d-inline-block" style="font-size: 30px; color: #019e53 !important;">03</strong>
                            <p>Attendez que la direction vous recontact. <br>&nbsp; <br>&nbsp; </p>
                        </div>
                    </div>
                    <div class="flip-back d-flex align-items-center p-5" style="background-image: url({{ asset('images/img03.jpg') }}); background-size: cover; background-position: center;">
                        <div class="flip-content my-4">

                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section>

@endsection