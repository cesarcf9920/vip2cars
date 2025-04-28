<div class="row">
    <div class="col-xs-12">
        <div class="card card-no-bottom-line admin-form">
            <div class="side-body"></div>
            <div class="card-body">
                {!! Form::open([ 'route' => ['cliente.store'], 'class' => 'form-horizontal form-modal-left', 'id' => 'form-create' ]) !!} 
                    <div class="form-group">
                        <label for="txt_name" class="col-sm-4 control-label">Placa</label>
                        <div class="col-sm-8">
                            <label class="field">
                                <input type="text" class="form-control gui-input" id="placa" name="placa" placeholder="Placa...">
                            </label>                            
                        </div>                                    
                    </div>
                    <div class="form-group">
                        <label for="txt_phone" class="col-sm-4 control-label">Marca</label>
                        <div class="col-sm-8">
                            <label class="field">
                                <input type="text" class="form-control gui-input" id="marca" name="marca" placeholder="Marca...">
                            </label>
                        </div>                                    
                    </div>
                    <div class="form-group">
                        <label for="txt_name" class="col-sm-4 control-label">Modelo</label>
                        <div class="col-sm-8">
                            <label class="field">
                                <input type="text" class="form-control gui-input" id="modelo" name="modelo" placeholder="Modelo...">
                            </label>                            
                        </div>                                    
                    </div>
                    <div class="form-group">
                        <label for="txt_phone" class="col-sm-4 control-label">Fecha Fabricación</label>
                        <div class="col-sm-8">
                            <label class="field">
                                <input type="text" id="fecha_fabricacion" name="fecha_fabricacion" value="{{ Date::today()->format('Y/m/d') }}" class="form-control" placeholder="Fecha fabricación">
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
                                <input type="text" class="form-control gui-input" id="nombre" name="nombre" placeholder="Nombre...">
                            </label>
                        </div>                                    
                    </div>
                    <div class="form-group">
                        <label for="apellido" class="col-sm-4 control-label">apellido</label>
                        <div class="col-sm-8">
                            <label class="field">
                                <input type="text" class="form-control gui-input" id="apellido" name="apellido" placeholder="Apellido...">
                            </label>
                        </div>                                    
                    </div>
                    <div class="form-group">
                        <label for="nro_doc" class="col-sm-4 control-label only_number">Nro. Doc.</label>
                        <div class="col-sm-8">
                            <label class="field">
                                <input type='text' id='nro_doc' name="nro_doc" class="form-control gui-input only_number" placeholder="Nro. Doc..."/>
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
                                    <input type="text" class="gui-input" id="correo" name="correo" placeholder="Correo..."/>
                                </div>
                            </label>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="telefono" class="col-sm-4 control-label only_number">Teléfono</label>
                        <div class="col-sm-8">
                            <label class="field">
                                <input type='text' id='telefono' name="telefono" class="form-control gui-input only_number" placeholder="Teléfono..."/>
                            </label>
                        </div>
                    </div>     
                {!! Form::close() !!}  
            </div>
        </div>
    </div>
</div>