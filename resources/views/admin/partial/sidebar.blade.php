
 <!-- Left side column. contains the logo and sidebar -->
 <aside class="main-sidebar">
        <!-- sidebar: style can be found in sidebar.less -->
        <section class="sidebar">
          <!-- Sidebar user panel -->
          
          <!-- search form -->
         
          <!-- /.search form -->
          <!-- sidebar menu: : style can be found in sidebar.less -->
          <ul class="sidebar-menu" data-widget="tree" >
              
              <li>
              <a href="/admin/">
                <i class="fa fa-dashboard"></i> <span class="span_li">Cuadro de comandos</span>               
              </a> 
            </li>  
            <li  {{{ (Request::is('roles') ? 'class=active' : '') }}}>
                <a href="{{ route('roles.index')}}">
                <i class="fa fa-table"></i>
                <span>Roles</span>
                </a>
            </li> 
            <li>
              <a href="/admin/franchisees">
                  <img src="/dist/img/icon_franquiciados.png" width="15px" style="margin: 0px 7px 0px 0px;"/><span class="span_li">Franquiciados</span>               
              </a>
            </li> 
            <li>
              <a href="/admin/miposicionpuntos">
                <i class="fa fa-table"></i> <span class="span_li">Mi Posicion - Puntos</span>               
              </a>
            </li> 
           
            <div class="line_h">
                
            </div>
            
            <li>
              <a href="/admin/pedidos">
                <img src="/dist/img/icon_pedidos.png" width="15px" style="margin: 0px 7px 0px 0px;"/><span class="span_li">Delivery</span>               
              </a>
            </li> 
            <li>
              <a href="/admin/reservas">
                <img src="/dist/img/icon_reservation.png" width="15px" style="margin: 0px 7px 0px 0px;"/> <span class="span_li">Reservas</span>               
              </a>
            </li> 
           
            <div class="line_h">
                
            </div>
            
            <li>
              <a href="/admin/marketing">
                <img src="/dist/img/icon_marketing.png" width="15px" style="margin: 0px 7px 0px 0px;"/></i> <span class="span_li">Newsletter</span>               
              </a>
            </li> 
            <li>
              <a href="/admin/mensaje-push">
                <img src="/dist/img/icon_push.png" width="15px" style="margin: 0px 7px 0px 0px;"/> <span class="span_li">Mensaje push</span>               
              </a>
            </li> 
            <li>
              <a href="/admin/cupones">
                <img src="/dist/img/icon_ticket.png" width="15px" style="margin: 0px 7px 0px 0px;"/> <span class="span_li">Cupones y Regalos</span>               
              </a>
            </li> 
            <li>
              <a href="/admin/estadistica-de-valoraciones">
                <img src="/dist/img/icon_estadistica.png" width="15px" style="margin: 0px 7px 0px 0px;"/> <span class="span_li">Informes y Estadistica</span>               
              </a>
            </li> 
           
            <div class="line_h">
                
            </div>
            
            <li>
              <a href="/admin/comentario-de-comensales">
                <img src="/dist/img/icon_comment.png" width="15px" style="margin: 0px 7px 0px 0px;"/><span class="span_li">Comentarios</span>               
              </a>
            </li> 
            <li>
              <a href="/admin/publicidad">
                <i class="fa fa-user"></i> <span class="span_li">Publicidad</span>               
              </a>
            </li> 
            <li>
              <a href="/admin/ayuda">
                <img src="/dist/img/icon_analitycs.png" width="15px" style="margin: 0px 7px 0px 0px;"/> <span class="span_li">Ayuda</span>               
              </a>
            </li> 
            <li>
              <a href="/admin/configuraciones">
                <img src="/dist/img/icon_settings.png" width="15px" style="margin: 0px 7px 0px 0px;"/> <span class="span_li">Configuraciones</span>               
              </a>
            </li>
 
            <li>
              <a href="/admin/precios">
                  <img src="/dist/img/icon_language.png" width="15px" style="margin: 0px 7px 0px 0px;"/> <span class="span_li">Precios</span>               
              </a>
            </li> 
           
          </ul>
        </section>
        <!-- /.sidebar -->


      </aside>
