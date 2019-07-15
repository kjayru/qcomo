
<form class="form-horizontal" id="fr-clients-service">  
    <div class="box-body">
                        @csrf
                        <input type="hidden" name="_method" id="metodo3" value="POST">
                        <input type="hidden" name="client_id" id="client_id3" value="">
 
                        <ul  class="list-unstyled">
                        @foreach( $services as $k => $service)
                            <li class="col-md-6 col-xs-12 @if($k%2 == 0) odd @else even @endif">
                                         <div>
                                            <label style="width: 150px;" for="service{{ $k+1}}">{{ $service->name }}</label>  
                                            <label class="switch">
                                                <input type="checkbox" id="service{{ $k+1}}"  class="chk-service" value="{{$service->id}}" name="service[]"/>
                                                <span class="slider round"></span>
                                            </label>
                                        </div>
                            </li>
                        @endforeach
                        </ul>
                       
                        
                        
                        
                  
              </div>
              <div class="box-footer">
                    
                    <button type="submit" class="btn btn-info pull-right btn-submit-service" disabled>Guardar</button>
                </div>
</form>