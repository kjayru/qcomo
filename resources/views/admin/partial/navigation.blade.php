
    <!-- Logo -->
    <a href="" class="logo">
      <!-- mini logo for sidebar mini 50x50 pixels -->
      <span class="logo-mini"><img src="/images/logo.png"  width="35px" style="margin-top: 0px;" ></span>
      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg"><img src="/images/logo.png"  width="45px" style="margin-top: 0px;" ></span>
    </a>
 
    <nav class="navbar navbar-static-top" >
    
        <!-- Sidebar toggle button -->     
        <div class="sidebar-toggle" data-toggle="push-menu" role="button">
            <span class="sr-only">Toggle navigation</span>
        </div>      
         
    	<div class="navbar-header hidden-xs">
          <a class="navbar-brand" href="#" id="titulo_seccion">PANEL GENERAL</a>
        </div>
        
        <div class="navbar-custom-menu"> 
          <ul class="nav navbar-nav">
              <li class="dropdown  hidden-xs">
                <a class="dropdown-toggle" data-toggle="dropdown" href="#">Crear
                <span class="caret"></span></a>
                <ul class="dropdown-menu">
                  <li><a href="#">Franquiciado</a></li>
                  <li><a href="#">Cliente</a></li>
                  <li><a href="#">Mozo</a></li>
                  <li><a href="#">Mesa</a></li>
                  <li><a href="#">Producto de la carta</a></li>
                  <li><a href="#">Pedido</a></li>
                  <li><a href="#">Reserva</a></li>
                  <li><a href="#">Mensaje Push</a></li>
                  <li><a href="#">Cupon</a></li>
                  <li><a href="#">Regalo</a></li>
                  <li><a href="#">Auspiciante</a></li>
                  <li><a href="#">Paquete</a></li>
                  <li><a href="#">Tipo de comida</a></li>
                </ul>
              </li>
                
              <form class="navbar-form navbar-left hidden-xs" action="/action_page.php">
                  <div class="form-group">
                    <input id="filtro" type="text" class="form-control" placeholder="Buscar" name="filtro">
                  </div>
                  <button type="submit" class="btn btn-default">Ir</button>
              </form>
                 
            <li class="dropdown notifications-menu" style="padding: 0px;">
              <a href="#" class="dropdown-toggle " data-toggle="dropdown">
                <i class="fa fa-bell-o"></i>
                <span class="label label-warning">10</span>
              </a>
              <ul class="dropdown-menu">
                <li class="header  hidden-xs">You have 10 notifications</li>
                <li>
                  
                  <ul class="menu">
                    <li>
                      <a href="#">
                        <i class="fa fa-users text-aqua"></i> 5 new members joined today
                      </a>
                    </li>
                    <li>
                      <a href="#">
                        <i class="fa fa-warning text-yellow"></i> Very long description here that may not fit into the
                        page and may cause design problems
                      </a>
                    </li>
                    <li>
                      <a href="#">
                        <i class="fa fa-users text-red"></i> 5 new members joined
                      </a>
                    </li>
                    <li>
                      <a href="#">
                        <i class="fa fa-shopping-cart text-green"></i> 25 sales made
                      </a>
                    </li>
                    <li>
                      <a href="#">
                        <i class="fa fa-user text-red"></i> You changed your username
                      </a>
                    </li>
                  </ul>
                </li>
                <li class="footer"><a href="#">View all</a></li>
              </ul>
            </li>
                
			<li class="dropdown user user-menu">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                <img src="/dist/img/user2-160x160.jpg" class="user-image " alt="User Image">
                <span class="hidden-xs">{{ Auth::user()->name }}</span>
              </a>
              <ul class="dropdown-menu " >
                
                <li class="user-header">
                  <img src="/dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">
  
                  <p>
                      {{ Auth::user()->name }}
                    <small>Miembro desde 09/2018</small>
                  </p>
                </li>
                
                
                <li class="user-footer">
                  <div class="pull-left">
                    <a href="#" class="btn btn-default btn-flat">Perfil</a>
                  </div>
                  <div class="pull-right">
                    
                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();" btn btn-default btn-flat>
                                        Salir
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                  </div>
                </li>
              </ul>
                
            </li>
            
            
          </ul>
        </div>
</nav>
 