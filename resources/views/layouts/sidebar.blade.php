<div class="sidebar-menu">
            <div class="sidebar-header">
                <div class="logo">
                    <h1 class="user-name " > Dashboard  </h1>

                </div>
            </div>
            <div class="main-menu">
                <div class="menu-inner">
                    <nav>
                        <ul class="metismenu" id="menu">

                            <li  class="{{$panelactive == 'home'? 'active' : 'desactive'}}"><a href="{{ route('panel', ['slug' => App::getLocale()]) }}"><i class="ti-home"></i> <span>Acceuil</span></a></li>
                            <li class="{{$panelactive == 'inscription_liste'? 'active' : 'desactive'}}">
                                <a href="{{ route('inscription_liste', ['slug' => App::getLocale()]) }}" aria-expanded="true"><i class="fa fa-table"></i>
                                    <span>Demandes inscription</span></a>    
                            </li>
                            
                            <li class="{{$panelactive == 'inscription_Bourse'? 'active' : 'desactive'}}">
                                <a href="{{ route('Bourse_liste', ['slug' => App::getLocale()]) }}" aria-expanded="true"><i class="fa fa-table"></i>
                                    <span>Demandes Bourse</span></a>
                            </li>
                            
                            <li class="{{$panelactive == 'ajoutimage'? 'active' : 'desactive'}}"><a href="{{ route('ajoutimage', ['slug' => App::getLocale()]) }}"><i class="ti-image"></i> <span>Galerie</span></a></li>

                            <li class="{{$panelactive == 'contact'? 'active' : 'desactive'}}"><a href="{{ route('contacta', ['slug' => App::getLocale()]) }}"><i class="ti-receipt"></i> <span>Contact</span></a></li>
                      
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
