
<header id="header" class="header-effect-shrink" data-plugin-options="{'stickyEnabled': true, 'stickyEffect': 'shrink', 'stickyEnableOnBoxed': true, 'stickyEnableOnMobile': true, 'stickyChangeLogo': true, 'stickyStartAt': 120, 'stickyHeaderContainerHeight': 70}" style="height: 120px">
    <div class="header-body border-top-0">
        <div class="header-top" style="height: 30.608px;min-height: 0px;overflow: visible; background: #068f58;">
            <div class="container">
                <div class="header-row py-2">
                    <div class="header-column justify-content-start">
                        <div class="header-row">
                            <nav class="header-nav-top">
                                <ul class="nav nav-pills">

                                    @foreach ( config('app.languages') as $local_code => $local_string)
                                        @if($local_string !== config('app.lang_name'))
                                            <?php
                                            $style = '';
                                            if ($local_code == session('applocale')){
                                                $style = 'color: #25247b';
                                            }
                                            ?>
                                            <li class="nav-item nav-item-anim-icon d-md-block">
                                                <a style='<?php echo $style;?>' href="{!! url('/') !!}/{{ $local_code }}/"> {{$local_string}}</a>
                                            </li>
                                    @endif
                                @endforeach
                                <!-- <li class="nav-item nav-item-anim-icon d-none d-md-block">
                          <a class="nav-link pl-0" href="#" target="_blank"> | &nbsp; Blog</a>
                        </li>-->
                                </ul>
                            </nav>
                        </div>
                    </div>
                    <div class="header-column justify-content-end">
                        <div class="header-row">
                            <ul class="header-social-icons social-icons d-sm-block social-icons-clean">
                            <!-- <li class="nav-item nav-item-left-border nav-item-left-border-remove nav-item-left-border-sm-show">
                          <span class="ws-nowrap" style="padding: 7px 15px;"><a href="#" class="sign-in"> <i class="icon-lock icons ml-1"></i> {{__('nav.sign-in')}}</a></span>
                        </li>
                        <li class="nav-item nav-item-left-border nav-item-left-border-remove nav-item-left-border-sm-show">
                          <span class="ws-nowrap" style="border-right: 1px solid #c1c1c1;padding: 7px 15px;"><a href="https://test.beconbank.com/fr/administration/financial-institutions/public-creation" target="_blank" class="sign-out"> <i class="icon-user-follow icons ml-1"></i> {{__('nav.sign-out')}}</a></span>
                        </li>-->
                                <li class="social-icons-facebook"><a href="https://www.facebook.com/iniMov" target="_blank" title="Facebook"><i class="fab fa-facebook-f" style="color: #fff;"></i></a></li>
                                <li class="social-icons-linkedin"><a href="https://www.linkedin.com/company/11188289" target="_blank" title="Linkedin"><i class="fab fa-linkedin-in" style="color: #fff;"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="header-container container">
            <div class="header-row">
                <div class="header-column">
                    <div class="header-row">
                        <div class="header-logo">
                            <a href="{{route('home')}}">
                                <img alt="Porto" height="50" data-sticky-height="40" src="{{asset('images/logo/logo.png')}}">
                            </a>
                        </div>
                    </div>
                </div>
                <div class="header-column container justify-content-end">
                    <div class="header-row">
                        <div class="header-nav header-nav-line header-nav-top-line header-nav-top-line-with-border order-2 order-lg-1">
                            <div class="header-nav-main header-nav-main-square header-nav-main-effect-2 header-nav-main-sub-effect-1">
                                <nav class="collapse">
                                    <ul class="nav nav-pills" id="mainNav">
                                        <li class="">
                                            <a class="active" href="{{route('home')}}" id="navActive">
                                                Acceuil
                                            </a>
                                        </li>
                                        <li class="dropdown">
                                            <a class="dropdown-item dropdown-toggle" href="#">
                                                Nos Services
                                            </a>
                                            <ul class="dropdown-menu">
                                                <li>
                                                    <a href="{{route('infographics')}}" class="dropdown-item">Infographie</a>
                                                </li>
                                                <li>
                                                    <a href="{{route('Serigraphy')}}" class="dropdown-item">Serigraphie</a>
                                                </li>
                                                <li>
                                                    <a href="#" class="dropdown-item">Imprimerie</a>
                                                </li>
                                                <li>
                                                    <a href="#" class="dropdown-item">Broderie</a>
                                                </li>
                                                <li>
                                                    <a href="#" class="dropdown-item">Tirage numérique</a>
                                                </li>
                                                <li>
                                                    <a href="#" class="dropdown-item">Web Design</a>
                                                </li>
                                                <li>
                                                    <a href="#" class="dropdown-item">Prestation diverses</a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li class="dropdown">
                                            <a class="dropdown-item dropdown-toggle" href="#">
                                                Entreprise
                                            </a>
                                            <ul class="dropdown-menu">
                                                <li>
                                                    {{-- <a href="{{route('about-us.help')}}" class="dropdown-item">{{__('nav.about-us-1')}}</a>--}}
                                                </li>
                                            <!-- <li>
                                <a href="#" class="dropdown-item">{{__('nav.about-us-2')}}</a>
                             </li>-->
                                                <li>
                                                    <a href="#" class="dropdown-item">Partenaires</a>
                                                </li>
                                                <li>
                                                    <a href="#" class="dropdown-item">Qui sommes nous?</a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li class="">
                                            <a class="" href="#">
                                                Creation
                                            </a>
                                        </li>
                                        <li class="">
                                            <a class="" href="{{route('contact')}}">
                                                Contact
                                            </a>
                                        </li>
                                        <li class="dropdown">
                                            <a class="dropdown-item dropdown-toggle" href="#">
                                                Compte <b class="fa fa-user" style="margin-left: 6px;"></b>
                                            </a>
                                            <ul class="dropdown-menu">
                                                <li>
                                                    <a href="#" class="dropdown-item" data-toggle="modal" data-target="#exampleModalCenter"><b class="fa fa-sign-in"></b> Connexion</a>

                                                    <!-- Modal -->
                                                    <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                                                        <div class="modal-dialog modal-dialog-centered" role="document">
                                                            <div class="modal-content">
                                                                <div class="modal-header">
                                                                    <h5 class="modal-title" id="exampleModalLongTitle">Modal title</h5>
                                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                        <span aria-hidden="true">&times;</span>
                                                                    </button>
                                                                </div>
                                                                <div class="modal-body">
                                                                    ...
                                                                </div>
                                                                <div class="modal-footer">
                                                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                                    <button type="button" class="btn btn-primary">Save changes</button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li>
                                                    <a href="#" class="dropdown-item"><b class="fa fa-user-o"></b> S'inscrire</a>
                                                </li>
                                            </ul>
                                        </li>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
