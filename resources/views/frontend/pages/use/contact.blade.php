@extends('frontend.layouts.app')
@section('description')
    <meta name="description" content="" />
@endsection
@section('keywords')
    <meta name="keywords" content="" />
@endsection
@section('title', '')
@section('content')

    <section class="contact-header page-header-modern page-header-background page-header-background-pattern page-header-background-sm overlay overlay-color-dark overlay-show overlay-op-5">
        <div class="container">
            <div class="row">
                <div class="col-md-12 align-self-center p-static order-2 text-center">
                    <h1 class="pt-5 mt-5" style="color: #068f58; font-size: 66px;">Contact</h1>
                    <p class="pt-5 text-white">Contactez nous pour plus de renseignement possible.</p>
                </div>
            </div>
        </div>

        <div class="container" style="margin-top: 70px;">
            <div class="">
                <div class="row py-0">
                    <div class="col-lg-8 px-5" style="background: #25247b;">

                        <div class="overflow-hidden my-3">
                            <h2 class="font-weight-normal text-7 mt-2 mb-0 appear-animation" data-appear-animation="maskUp" data-appear-animation-delay="200" style="color: #019e53;">Contactez nous</h2>
                        </div>
                        <div class="overflow-hidden mb-4 pb-3">
                            <p class="mb-0 appear-animation text-white" data-appear-animation="maskUp" data-appear-animation-delay="400">N'hésitez pas à demander des détails, ne garder aucune question pour vous!</p>
                        </div>

                        <form id="contactForm" class="contact-form" action="#" method="POST">
                            @csrf
                            @if(session('status'))
                                <div class="contact-form-success alert alert-success mt-4" id="contactSuccess">
                                    {{ session('status') }}
                                </div>
                            @endif

                            <div class="contact-form-error alert alert-danger d-none mt-4" id="contactError">
                                <strong>Error!</strong> There was an error sending your message.
                                <span class="mail-error-message text-1 d-block" id="mailErrorMessage"></span>
                            </div>

                            <div class="form-row">
                                <div class="form-group col-lg-6">
                                    <label class="required font-weight-bold text-white text-2">Nom complet</label>
                                    <input type="text" value="" data-msg-required="Please enter your name." maxlength="100" class="form-control" name="name" id="name" required>
                                </div>
                                <div class="form-group col-lg-6">
                                    <label class="required font-weight-bold text-white text-2">Adresse email</label>
                                    <input type="email" value="" data-msg-required="Please enter your email address." data-msg-email="nter a valid email address." maxlength="100" class="form-control" name="email" id="email" required>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-lg-6">
                                    <label class="required font-weight-bold text-white text-2">Sujet</label>
                                    <input type="text" value="" data-msg-required="Please enter the subject." maxlength="100" class="form-control" name="subject" id="subject" required>
                                </div>
                                <div class="form-group col-lg-6">
                                    <label class="font-weight-bold text-white text-2">Téléphone</label>
                                    <input type="text" value="" maxlength="20" class="form-control" name="phone" id="phone">
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col">
                                    <label class="required font-weight-bold text-white text-2">Message</label>
                                    <textarea maxlength="5000" data-msg-required="Please enter your message." rows="8" class="form-control" name="message" id="message" required></textarea>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col">
                                    <input type="submit" value="Envoyer" class="btn btn-primary btn-modern" data-loading-text="Loading..." style="background: #019e53; border-color: #fff; ">
                                </div>
                            </div>
                        </form>

                    </div>
                    <div class="col-lg-4" style="background: #019e53;">

                        <div class="appear-animation" data-appear-animation="fadeIn" data-appear-animation-delay="800">
                            <h4 class="mt-5 mb-2" style="color: #25247b;">Notre bureau</h4>
                            <ul class="list list-icons list-icons-style-2 mt-2 text-white">
                                <li><i class="fas fa-map-marker-alt top-6"></i> Sis à l'immeuble commercial NGOA-EKELLE</li>
                                <li><i class="fas fa-phone top-6"></i> +237 691 302 915 / 679 698 427</li>
                                <li><i class="fas fa-envelope top-6"></i> <strong class=""></strong> <a href="mailto:mail@example.com" style="color: #25247b !important;">extremegraphic2018@gmail.com</a></li>
                            </ul>
                        </div>

                        <div class="appear-animation text-white" data-appear-animation="fadeIn" data-appear-animation-delay="950">
                            <h4 class="pt-5" style="color: #25247b;">Heures de travail</h4>
                            <ul class="list list-icons list-white mt-2">
                                <li><i class="far fa-clock text-white top-6"></i>Du lundi au vendredi de 9h à 18h</li>
                                <li><i class="far fa-clock text-white top-6"></i>Samedi - 9h à 14h</li>
                                <li><i class="far fa-clock text-white top-6"></i>Dimanche - fermé</li>
                            </ul>
                        </div>
                    </div>

                </div>
            </div>
            </div>
        </div>
    </section>

@endsection