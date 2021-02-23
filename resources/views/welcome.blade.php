@extends('frontend.layouts.app')
@section('description')
    <meta name="description" content="" />
@endsection
@section('keywords')
    <meta name="keywords" content="" />
@endsection
@section('title', '')
@section('content')

    <div role="main" class="main">
        <!--Carousel Wrapper-->

        <div class="carousel slide hidden-xs" data-ride="carousel" id="carousel-1">
            <div class="carousel-inner" role="listbox">
                <div class="carousel-item active">
                    <img class="w-100 d-block" src="{{asset('images/slide/slide.png')}}" alt="Dashboard logiciel gestion commercial">
                    <div class="carousel-caption slide-1">
                        <p style="color: #fff; font-size: 40px; line-height: 1;"><br><br></p>
                        <p style="color: #fff; font-size: 30px; line-height: 1;"><br><br></p>
                        <!--<div class="row">
                            <button onclick="location.href='';" type="button" class="buttonR col-md-5" ></button>
                            <div class="col-md-2 hidden-xs">&nbsp;</div>
                        </div>-->
                    </div>
                </div>

                <div class="carousel-item ">
                    <img class="w-100 d-block" src="{{asset('images/slide/slide-01.png')}}" alt="">
                    <div class="carousel-caption silide-2" style=" margin-bottom: 262px;">
                        <h3 style="color: #25247b; text-shadow: 7px 2px 12px #000; font-size: 32px;line-height: 40px;">Webmaster</h3>
                    </div>
                    <div class="carousel-caption slide-2" style="margin-left: 48%; margin-bottom: 90px;">
                        <p style="color: #068f58; text-shadow: 7px 2px 12px #000; font-size: 32px;line-height: 40px;"><br>Faites vous connaitre<br></p>
                        <p>Avec Extreme Graphic, la communication de votre entreprise est assurrée</p>
                        <div class="row">
                            <button onclick="location.href='';" type="button" class="buttonR col-md-5 text-white" style="margin-left: 105px;     background-color: #25247b; border: none; border-radius: 8px;">Suivez-nous</button>
                        </div>
                    </div>
                </div>

                <!--<div class="carousel-item">
                    <img class="w-100 d-block" src="{{asset('images/slide/slide2.png')}}" alt="iZi Caiss logiciel vente en caisse">
                    <div class="carousel-caption silide-2" style=" margin-bottom: 262px;">
                        <h3 style="color: #ffffff; text-shadow: 7px 2px 12px #000; font-size: 32px;line-height: 40px;">Haute couture</h3>
                    </div>
                    <div class="carousel-caption slide-2" style="margin-left: 48%; margin-bottom: 90px;">
                        <p style="color: #068f58; text-shadow: 7px 2px 12px #000; font-size: 32px;line-height: 40px;"><br>Soignez votre style<br></p>
                        <p>Avec Extreme Graphic, la communication de votre entreprise est assurrée</p>
                        <div class="row">
                            <button onclick="location.href='';" type="button" class="buttonR col-md-5" style="margin-left: 105px; color: #25247b; background-color: #ffffff; border: none; border-radius: 8px;">Suivez-nous</button>
                        </div>
                    </div>
                </div>-->

            </div>
            <div>
                <a class="carousel-control-prev" href="#carousel-1" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carousel-1" role="button" data-slide="next">
                    <span class="carousel-control-next-icon"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
            <div>
                <ol class="carousel-indicators">
                    <li data-target="#carousel-1" data-slide-to="0" class="active element" style="margin-right: 8px;"></li>
                    <li data-target="#carousel-1" data-slide-to="1" style="margin-right: 8px;"></li>
                    <!--<li data-target="#carousel-1" data-slide-to="1" style="margin-right: 8px;"></li>-->
                </ol>
            </div>
        </div>

        <!-- slider for mobile version -->

        <section>
            <div class="container">
                <div class="">
                    <div class="text-center py-5">
                        <h1 class="pb-2">Découvrez de magnifiques designs</h1>
                        <h4>Commandez des produits ayants des qualités exeptionnelle</h4>
                    </div>
                    <div class="row pb-3">
                        <div class="col-md-4">
                            <div class="card">
                                <a href="#">
                                    <img class="card-img-top img-content" src="{{ asset('images/produits/prod1.png') }}" alt="Card image cap">
                                    <div class="card-body">
                                        <h5 class="card-title">Gadgets de publicité</h5>
                                        <p class="card-text">A partir de 0,000 Fcfa</p>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="card ">
                                <a href="#">
                                    <img class="card-img-top img-content" src="{{ asset('images/produits/calendrier.jpg') }}" alt="Card image cap">
                                    <div class="card-body">
                                        <h5 class="card-title">Calendriers</h5>
                                        <p class="card-text">A partir de 0,000 Fcfa</p>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="card">
                                <a href="#">
                                    <img class="card-img-top img-content" src="{{ asset('images/produits/prod3.jpg') }}" alt="Card image cap">
                                    <div class="card-body">
                                        <h5 class="card-title">Impressions métalliques modernes</h5>
                                        <p class="card-text">A partir de 0,000 Fcfa</p>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="row pb-5">
                        <div class="col-md-4">
                            <div class="card">
                                <a href="#">
                                    <img class="card-img-top img-content" src="{{ asset('images/produits/prod4.jpg') }}" alt="Card image cap">
                                    <div class="card-body">
                                        <h5 class="card-title">Impresions sur toiles</h5>
                                        <p class="card-text">A partir de 0,000 Fcfa</p>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="card ">
                                <a href="#">
                                    <img class="card-img-top img-content" src="{{ asset('images/produits/carte.jpg') }}" alt="Card image cap">
                                    <div class="card-body">
                                        <h5 class="card-title">Carte photos, de visites et d'invitations</h5>
                                        <p class="card-text">A partir de 0,000 Fcfa</p>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="card ">
                                <a href="#">
                                    <img class="card-img-top img-content" src="{{ asset('images/produits/Prod6.jpg') }}" alt="Card image cap">
                                    <div class="card-body">
                                        <h5 class="card-title">Livres photo personnalisés</h5>
                                        <p class="card-text">A partir de 0,000 Fcfa</p>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="pb-5 text-center">
                        <button type="button" class="btn btn-sm text-white" data-toggle="tooltip" style="font-size: 14px;">
                            <a href="#">Afficher plus de produits <i class="fa fa-angle-double-down"></i></a>
                        </button>
                    </div>
                </div>
            </div>
        </section>

        <section style="background-color: #d4d4f1;">
            <div class="container py-5 why-us">
                <h3 class="text-center text-white">Pourquoi nous ?</h3>
                <div class="row">
                    <div class="col-md-3">
                        <img class="image" src="{{ asset('images/img3.png') }}" alt="">
                        <h4>Près de vous</h4>
                        <p>Neque porro quisquam est qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit...</p>
                    </div>
                    <div class="col-md-3">
                        <img class="image" src="{{ asset('images/img1.png') }}" alt="">
                        <h4>Connecté</h4>
                        <p>Neque porro quisquam est qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit...</p>
                    </div>
                    <div class="col-md-3">
                        <img class="image" src="{{ asset('images/img4.png') }}" alt="">
                        <h4>Efficacité absolue</h4>
                        <p>Neque porro quisquam est qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit...</p>
                    </div>
                    <div class="col-md-3">
                        <img class="image" src="{{ asset('images/img2.png') }}" alt="">
                        <h4>Livraison dans les délais</h4>
                        <p>Neque porro quisquam est qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit...</p>
                    </div>
                </div>
            </div>
        </section>

        <section>
            <div class="container py-5">
                <div>
                    <div class="row">
                        <div class="col-md-3"></div>
                        <div class="col-md-6">
                            <h5 class="text-center">TROUVEZ VOTRE STYLE AVEC NOUS</h5>
                            <h2 class="text-center">Nous faisons de votre satisfaction, notre priorité.</h2>
                        </div>
                        <div class="col-md-3"></div>
                        <p class="pt-1 text-center">Rejoignez notre communauté pour parcourir, magasiner et découvrir les dernières nouveautés de magnifiques designs sur Extreme Graphic, des créateurs expérimenté et inspiré.</p>
                    </div>
                    <div class="row">
                        <div class="col-md-3">
                            <div class="card">
                                <img class="card-img-top img-content" src="{{ asset('images/produits/chemise.jpg') }}" alt="">
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="card">
                                <img class="card-img-top img-content" src="{{ asset('images/produits/carte.jpg') }}" alt="">
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="card">
                                <img class="card-img-top img-content" src="{{ asset('images/produits/dépliant.jpg') }}" alt="">
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="card">
                                <img class="card-img-top img-content" src="{{ asset('images/produits/flyers.jpg') }}" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="">
            <div class="row text-center">
                <div class="col-md-6 pt-5 mt-4">
                    <img class="pt-5" src="{{ asset('images/img5.png') }}" alt="" style="width: 165px;">
                    <h4 class="font-weight-bold">100% de bonheur garanti</h4>
                    <h6 class="font-weight-bold">Qualité exceptionnelle. Sourires d'oreille à oreille</h6><br>
                    <p class="mx-5">Si vous n'êtes pas complètement satisfait de votre commande, vous pouvez la retourner à tout moment</p>
                    <button type="button" class="btn btn-sm text-white">
                        <a href="#" class="text-white" data-toggle="tooltip">Commander</a>
                    </button>
                </div>
                <div class="col-md-6">
                    <img src="{{ asset('images/image.jpg') }}" alt="" style="width: 100%;">
                </div>
            </div>
        </section>

    </div>

@endsection
