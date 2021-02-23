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
                    <h1>Créaction graphic</h1>
                </div>
                <div class="col-md-12 align-self-center order-1">
                    <ul class="breadcrumb breadcrumb-light d-block text-center">
                        <li><a href="{{route('home')}}">Acceuil</a></li>
                        <li class="active">Infographie</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <section>
        <div class="container py-2 mb-5">
            <div class="row">
                <div class="col-md-6 px-5">
                    <img class="image" src="{{ asset('images/produits/flyers.jpg') }}" alt="" style="width: 100%;">
                </div>
                <div class="col-md-6 px-5">
                    <h2 class="pt-5 mt-5" style="color: #068f58;">Créaction graphic de tout type de supports</h2>
                    <p>Neque porro quisquam est qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit...</p>
                    <button type="button" class="btn btn-sm text-white">
                        <a href="#" class="text-white" data-toggle="tooltip">Commander</a>
                    </button>
                </div>
            </div>

            <div class="row" style="">
                <div class="col-lg-12">
                    <h2 class="text-color-primary text-center text-7 my-5" style="color: #019e53 !important;">Plus de création</h2>
                </div>

                <div class="col-md-3 py-3">
                    <div class="card">
                        <img class="card-img-top img-content" src="{{ asset('images/produits/chemise.jpg') }}" alt="">
                    </div>
                </div>
                <div class="col-md-3 py-3">
                    <div class="card">
                        <img class="card-img-top img-content" src="{{ asset('images/produits/carte.jpg') }}" alt="">
                    </div>
                </div>
                <div class="col-md-3 py-3">
                    <div class="card">
                        <img class="card-img-top img-content" src="{{ asset('images/produits/dépliant.jpg') }}" alt="">
                    </div>
                </div>
                <div class="col-md-3 py-3">
                    <div class="card">
                        <img class="card-img-top img-content" src="{{ asset('images/produits/flyers.jpg') }}" alt="">
                    </div>
                </div>
                <div class="col-md-3 py-3">
                    <div class="card">
                        <img class="card-img-top img-content" src="{{ asset('images/produits/chemise.jpg') }}" alt="">
                    </div>
                </div>
                <div class="col-md-3 py-3">
                    <div class="card">
                        <img class="card-img-top img-content" src="{{ asset('images/produits/carte.jpg') }}" alt="">
                    </div>
                </div>
                <div class="col-md-3 py-3">
                    <div class="card">
                        <img class="card-img-top img-content" src="{{ asset('images/produits/dépliant.jpg') }}" alt="">
                    </div>
                </div>
                <div class="col-md-3 py-3">
                    <div class="card">
                        <img class="card-img-top img-content" src="{{ asset('images/produits/flyers.jpg') }}" alt="">
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection