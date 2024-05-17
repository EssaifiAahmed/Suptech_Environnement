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

                            <li  class="{{$panelactive == 'home'? 'active' : 'desactive'}}"><a href="{{ route('panelAbujad', ['slug' => App::getLocale()]) }}"><i class="ti-home"></i> <span>Acceuil</span></a></li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
