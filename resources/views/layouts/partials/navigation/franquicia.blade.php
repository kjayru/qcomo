
<ul class="sidebar-menu" data-widget="tree" >
              
        <li>
        <a href="/admin/">
          <i class="fa fa-dashboard"></i> <span class="span_li">Dashboard</span>               
        </a> 
      </li>  
     
      <li {{{ (Request::is('admin/clients') ? 'class=active' : '') }}}>
        <a href="/admin/clients">
            <img src="/dist/img/icon_franquiciados.png" width="15px" style="margin: 0px 7px 0px 0px;"/><span class="span_li">Clientes</span>               
        </a>
      </li> 
      <li {{{ (Request::is('admin/miposicionpuntos') ? 'class=active' : '') }}}>
        <a href="/admin/miposicionpuntos">
          <i class="fa fa-table"></i> <span class="span_li">Mi Posicion - Puntos</span>               
        </a>
      </li> 
     
      <div class="line_h">
          
      </div>
      
      <li {{{ (Request::is('admin/marketing') ? 'class=active' : '') }}}>
        <a href="/admin/marketing">
          <img src="/dist/img/icon_marketing.png" width="15px" style="margin: 0px 7px 0px 0px;"/></i> <span class="span_li">Newsletter</span>               
        </a>
      </li> 
      <li {{{ (Request::is('admin/mensaje-push') ? 'class=active' : '') }}}>
        <a href="/admin/mensaje-push">
          <img src="/dist/img/icon_push.png" width="15px" style="margin: 0px 7px 0px 0px;"/> <span class="span_li">Mensaje push</span>               
        </a>
      </li> 
      
      <li {{{ (Request::is('admin/estadistica-de-valoraciones') ? 'class=active' : '') }}}>
        <a href="/admin/estadistica-de-valoraciones">
          <img src="/dist/img/icon_estadistica.png" width="15px" style="margin: 0px 7px 0px 0px;"/> <span class="span_li">Informes y Estadistica</span>               
        </a>
      </li> 
     
      <div class="line_h">
          
      </div>
      
      <li  {{{ (Request::is('admin/comentario-de-comensales') ? 'class=active' : '') }}}>
        <a href="/admin/comentario-de-comensales">
          <img src="/dist/img/icon_comment.png" width="15px" style="margin: 0px 7px 0px 0px;"/><span class="span_li">Comentarios</span>               
        </a>
      </li> 
      <li {{{ (Request::is('admin/publicidad') ? 'class=active' : '') }}}>
        <a href="/admin/publicidad">
          <i class="fa fa-user"></i> <span class="span_li">Publicidad</span>               
        </a>
      </li> 
      <li {{{ (Request::is('admin/ayuda') ? 'class=active' : '') }}}>
        <a href="/admin/ayuda">
          <img src="/dist/img/icon_analitycs.png" width="15px" style="margin: 0px 7px 0px 0px;"/> <span class="span_li">Ayuda</span>               
        </a>
      </li> 
      <li {{{ (Request::is('admin/configuraciones') ? 'class=active' : '') }}}>
        <a href="/admin/configuraciones">
          <img src="/dist/img/icon_settings.png" width="15px" style="margin: 0px 7px 0px 0px;"/> <span class="span_li">Configuraciones</span>               
        </a>
      </li>

      <li {{{ (Request::is('admin/precios') ? 'class=active' : '') }}}>
        <a href="/admin/precios">
            <img src="/dist/img/icon_language.png" width="15px" style="margin: 0px 7px 0px 0px;"/> <span class="span_li">Precios</span>               
        </a>
      </li> 
     
    </ul>