        <div class="navbar-wrapper">
            <div class="navbar-brand header-logo">
                <div href="" class="b-brand">
                    <div class="b-bg">
                        <i class="feather icon-trending-up">ParC AuTo</i>
                    </div>
                    <span class="b-title">Yobalema</span>
        </div>
            </div>
            <div class="navbar-content scroll-div">
                <ul class="nav pcoded-inner-navbar">
                    <li class="nav-item pcoded-menu-caption">
                        <label>Navigation</label>
                    </li>
                    <li data-username="dashboard Default Ecommerce CRM Analytics Crypto Project" class="nav-item pcoded-menu-caption2">
                        <a href= "{{ route('home') }}"> Acceuil</a>
                    </li>
                    @if(auth::user()->profil=="ADMIN")
                    <li data-username="dashboard Default Ecommerce CRM Analytics Crypto Project" class="nav-item pcoded-menu-caption2">
                        <a href="{{ route('notif.ges') }}" > Notifications</a>
                    </li>
                    <li data-username="dashboard Default Ecommerce CRM Analytics Crypto Project" class="nav-item pcoded-menu-caption2">
                        <a href="{{ route('voir.avis') }}" > Voir les Avis des clients</a>
                    </li>
                    <li data-username="dashboard Default Ecommerce CRM Analytics Crypto Project" class="nav-item pcoded-menu-caption2">
                        <a href="#!" >Gestion Des Véhicules</a>
                        <ul class="pcoded-submenu">
                            <li class="nav-item pcoded-menu-caption3"><a href="{{ route('ajout-voiture') }}" class="">Ajouter une voiture</a></li>
                            <li class="nav-item pcoded-menu-caption3"><a href="{{ route('liste-voiture') }}" class="">Voir les voitures</a></li>
                        </ul>
                    </li>
                    <li data-username="dashboard Default Ecommerce CRM Analytics Crypto Project" class="nav-item pcoded-menu-caption2">
                        <a href="#!" >Gestion Des Chauffeurs</a>
                        <ul class="pcoded-submenu">
                            <li class="nav-item pcoded-menu-caption3"><a href="{{ route('ajout-chauffeur') }}" class="">Ajouter un chauffaur</a></li>
                            <li class="nav-item pcoded-menu-caption3"><a href="{{ route('liste-chauffeur') }}" class="">voir les chauffeurs</a></li>
                        </ul>
                    </li>
                    <li data-username="dashboard Default Ecommerce CRM Analytics Crypto Project" class="nav-item pcoded-menu-caption2">
                        <a href="#!" > Gestion des contrats</a>
                        <ul class="pcoded-submenu">
                            <li class="nav-item pcoded-menu-caption3"><a href="{{ route('enreg-contrat') }}" class="">Enregistrer un contra</a></li>
                            <li class="nav-item pcoded-menu-caption3"><a href="{{ route('liste-contrat') }}" class="">Voir les contrats</a></li>
                        </ul>
                    </li>
                    
                    @elseif(auth::user()->profil=="client")
                    <li data-username="dashboard Default Ecommerce CRM Analytics Crypto Project" class="nav-item pcoded-menu-caption2">
                        <a href="{{ route('apreciation')}}" > Donner un Avis</a>
                    </li>
            
                    @endif
                </ul>
            </div>
        </div>
    