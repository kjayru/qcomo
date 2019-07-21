 <!--/ loop -->
 <div class="col-md-3 ui-draggable ui-draggable-handle" draggable="true" id="0" style="min-width: 270px; max-width: 380px;">
        <div class="box">
            <div style="height: 45px; background-color: rgb(255, 69, 0); padding: 10px;">
                <table id="0" style="width: 100%;">
                    <colgroup>
                        <col>
                            <col width="24px">
                    </colgroup>
                    <tbody>
                        <tr>
                            <td>
                                <h3 style="margin: 2px 0px 0px; color: rgb(255, 255, 255); font-size: 1.3em;"><p>FRANQUICIAS</p></h3></td>
                            <td></td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <div style="height: 180px; overflow-y: auto; font-size: 0.85em; padding: 0px !important;">
                <table class="table table-condensed" id="tb0">
                    <thead>
                        <tr>
                            <th width="10px">#</th>
                            <th>Nombre</th>
                           
                            <th width="40px">Ver</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($franquicias as $k=>$fran)
                        <tr>
                            <td>{{ $k+1}}</td>
                            <td>{{ $fran->names}}</td>
                           
                            <td><a href="/admin/franchisees#frq-{{ $fran->id }}">Ver</a></td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div> 
        </div>
    </div>
 <!-- loop-->
<!--loop-->
    <div class="col-md-3 ui-draggable ui-draggable-handle" draggable="true" id="0" style="min-width: 270px; max-width: 380px;">
        <div class="box">
            <div style="height: 45px; background-color: rgb(255, 69, 0); padding: 10px;">
                <table id="0" style="width: 100%;">
                    <colgroup>
                        <col>
                            <col width="24px">
                    </colgroup>
                    <tbody>
                        <tr>
                            <td>
                                <h3 style="margin: 2px 0px 0px; color: rgb(255, 255, 255); font-size: 1.3em;"><p>CLIENTES FRANQUICIAS</p></h3></td>
                            <td></td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <div style="height: 180px; overflow-y: auto; font-size: 0.85em; padding: 0px !important;">
                <table class="table table-condensed" id="tb0">
                    <thead>
                        <tr>
                            <th width="10px">#</th>
                            <th>Nombre</th>
                           
                            <th width="40px">Ver</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($clients as $k=>$client)
                        <tr>
                            <td>{{ $k+1}}</td>
                            <td>{{ $client->name }}</td>
                           
                            <td><a href="/admin/clients/{{ $client->id }}">Ver</a></td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div> 
        </div>
    </div>
<!-- loop-->

    <div class="col-md-3 ui-draggable ui-draggable-handle" draggable="true" id="0" style="min-width: 270px; max-width: 380px;">
        <div class="box">
            <div style="height: 45px; background-color: rgb(255, 69, 0); padding: 10px;">
                <table id="0" style="width: 100%;">
                    <colgroup>
                        <col>
                            <col width="24px">
                    </colgroup>
                    <tbody>
                        <tr>
                            <td>
                                <h3 style="margin: 2px 0px 0px; color: rgb(255, 255, 255); font-size: 1.3em;"><p>COMENTARIOS</p></h3></td>
                            <td></td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <div style="height: 180px; overflow-y: auto; font-size: 0.85em; padding: 0px !important;">
                <table class="table table-condensed" id="tb0">
                    <thead>
                        <tr>
                            <th width="10px">#</th>
                            <th>Nombre</th>
                           
                            <th width="40px">Ver</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($comments as $k=>$comment)
                        <tr>
                            <td>{{ $k+1}}</td>
                            <td>{{ $comment->user->name }}{{ $comment->user->lastname }}</td>
                           
                            <td><a href="/admin/comentario-de-comensales">Ver</a></td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div> 
        </div>
    </div>
 <!-- loop-->
 <div class="col-md-3 ui-draggable ui-draggable-handle" draggable="true" id="0" style="min-width: 270px; max-width: 380px;">
        <div class="box">
            <div style="height: 45px; background-color: rgb(255, 69, 0); padding: 10px;">
                <table id="0" style="width: 100%;">
                    <colgroup>
                        <col>
                            <col width="24px">
                    </colgroup>
                    <tbody>
                        <tr>
                            <td>
                                <h3 style="margin: 2px 0px 0px; color: rgb(255, 255, 255); font-size: 1.3em;"><p>PUBLICIDAD</p></h3></td>
                            <td></td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <div style="height: 180px; overflow-y: auto; font-size: 0.85em; padding: 0px !important;">
                <table class="table table-condensed" id="tb0">
                    <thead>
                        <tr>
                            <th width="10px">#</th>
                            <th>Titulo</th>
                           
                            <th width="40px">Ver</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($publishings as $k=>$adv)
                        <tr>
                            <td>{{ $k+1}}</td>
                            <td>{{ $adv->title}}</td>
                           
                            <td><a href="/admin/publicidad">Ver</a></td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div> 
        </div>
    </div>
 <!-- loop-->

