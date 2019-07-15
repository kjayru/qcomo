<form class="form-horizontal" id="fr-clients-config">  
    <div class="box-body">
                        @csrf
                        <input type="hidden" name="_method" id="metodo4" value="POST">
                        <input type="hidden" name="client_id" id="client_id4" value="">
              
                     
                        <ul  class="list-unstyled">
                        @foreach( $configurations as $k => $configuration)
                            <li class="col-md-6 col-xs-12 @if($k%2 == 0) odd @else even @endif">
                                         <div>
                                            <label style="width: 150px;" for="configuration{{ $k+1}}">{{ $configuration->name }}</label>  
                                            <label class="switch">
                                                <input type="checkbox" id="configuration{{ $k+1}}"  class="chk-config" value="{{$configuration->id}}" name="configuration[]"/>
                                                <span class="slider round"></span>
                                            </label>
                                        </div>
                            </li>
                        @endforeach
                        </ul>
                        
 
                        
                  
           
            </div>
            <div class="box-footer">
                    
                    <button type="submit" class="btn btn-info pull-right btn-submit-config" disabled>Guardar</button>
                </div>
    </form>       