<div class="row">
    <div class="col-xs-12">
        <div class="card card-no-bottom-line admin-form">
            <div class="side-body"></div>
            <div class="card-body">                
                {!! Form::model($cliente, [ 'route' => ['cliente.update', $cliente->id], 'id' => 'form-edit', 'method' => 'PATCH', 'class' => 'form-horizontal form-modal-left']) !!}
                    <div class="form-group">
                        <label for="txt_name" class="col-sm-4 control-label">Placa</label>
                        <div class="col-sm-8">
                            <label class="field">
                                <input type="text" class="form-control gui-input" id="placa" name="placa" placeholder="Placa..." value="{{ isset($cliente->placa) ? $cliente->placa : null }}">
                            </label>                            
                        </div>                                    
                    </div>
                    <div class="form-group">
                        <label for="txt_phone" class="col-sm-4 control-label">Marca</label>
                        <div class="col-sm-8">
                            <label class="field">
                                <input type="text" class="form-control gui-input" id="marca" name="marca" placeholder="Marca..." value="{{ isset($cliente->marca) ? $cliente->marca : null }}">
                            </label>
                        </div>                                    
                    </div>
                    <div class="form-group">
                        <label for="txt_name" class="col-sm-4 control-label">Modelo</label>
                        <div class="col-sm-8">
                            <label class="field">
                                <input type="text" class="form-control gui-input" id="modelo" name="modelo" placeholder="Modelo..." value="{{ isset($cliente->modelo) ? $cliente->modelo : null }}">
                            </label>                            
                        </div>                                    
                    </div>
                    <div class="form-group">
                        <label for="txt_phone" class="col-sm-4 control-label">Año Fabricación</label>
                        <div class="col-sm-8">
                            <label class="field">
                                <input type="text" id="fecha_fabricacion" name="fecha_fabricacion" value="{{ isset($cliente->fecha_fabricacion) ? $cliente->fecha_fabricacion : null }}" class="form-control gui-input" placeholder="Fecha fabricación">
                                <label for="fecha_fabricacion" class="field-icon">
                                  <i class="fa fa-calendar-o"></i>
                                </label>
                            </label>
                        </div>                                    
                    </div>
                    <div class="form-group">
                        <label for="nombre" class="col-sm-4 control-label">nombre</label>
                        <div class="col-sm-8">
                            <label class="field">
                                <input type="text" class="form-control gui-input" id="nombre" name="nombre" placeholder="Nombre..." value="{{ isset($cliente->nombre) ? $cliente->nombre : null }}">
                            </label>
                        </div>                                    
                    </div>
                    <div class="form-group">
                        <label for="apellido" class="col-sm-4 control-label">apellido</label>
                        <div class="col-sm-8">
                            <label class="field">
                                <input type="text" class="form-control gui-input" id="apellido" name="apellido" placeholder="Apellido..." value="{{ isset($cliente->apellido) ? $cliente->apellido : null }}">
                            </label>
                        </div>                                    
                    </div>
                    <div class="form-group">
                        <label for="nro_doc" class="col-sm-4 control-label only_number">Nro. Doc.</label>
                        <div class="col-sm-8">
                            <label class="field">
                                <input type='text' id='nro_doc' name="nro_doc" class="form-control gui-input only_number" placeholder="Nro. Doc..." value="{{ isset($cliente->nro_doc) ? $cliente->nro_doc : null }}"/>
                            </label>
                        </div>
                    </div>     
                    <div class="form-group">
                        <label  for="txt_email" class="col-sm-4 control-label">Correo</label>
                        <div class="col-sm-8">
                            <label for="txt_email" class="field-label field">
                                <div class="input-group">
                                    <div class="input-group-addon">
                                        <span class="glyphicon glyphicon-envelope"></span>
                                    </div>
                                    <input type="text" class="gui-input" id="correo" name="correo" placeholder="Correo..."  value="{{ isset($cliente->correo) ? $cliente->correo : null }}"/>
                                </div>
                            </label>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="telefono" class="col-sm-4 control-label only_number">Teléfono</label>
                        <div class="col-sm-8">
                            <label class="field">
                                <input type='text' id='telefono' name="telefono" class="form-control gui-input only_number" placeholder="Teléfono..." value="{{ isset($cliente->telefono) ? $cliente->telefono : null }}"/>
                            </label>
                        </div>
                    </div>
                {!! Form::close() !!}  

            </div>

        </div>

    </div>

</div>