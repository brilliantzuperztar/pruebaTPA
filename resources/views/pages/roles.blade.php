@extends('modules.main')

@section('title', 'Cargos')

@section('content')

<h1 class="display-2 pl-3 pb-3">Cargos</h1>

<div class="col-md-12 grid-margin stretch-card">
    <div class="card">
      <div class="card-body">
        <button type="button" class="btn btn-primary btn-icon-text mb-5" data-toggle="modal" data-target="#registerPosition">
            <i class="icon-head btn-icon-prepend"></i>
            Agregar Cargo
          </button>
        <div class="row">
          <div class="col-12">
            <div class="table-responsive">
              <table id="position" class="display expandable-table" style="width:100%">
                <thead>
                    <tr>
                        <th>
                          #
                        </th>
                        <th>
                          Nombre
                        </th>
                        <th>
                          Identificación
                        </th>
                        <th>
                          Cargo
                        </th>
                        <th>
                          Rol
                        </th>
                        <th>
                          Jefe
                        </th>
                        <th></th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($positions as $information)
                    <tr>           
                      <td class="py-1">
                          {{$information->id}}
                      </td>
                      <td>
                          {{$information->employee->name}} {{$information->employee->lastname}}
                      </td>
                      <td>
                          {{$information->employee->identification}}
                      </td>
                      <td>
                          {{$information->position->pos_name}}
                      </td>
                      <td>
                          {{$information->role}}
                      </td>
                      <td>
                          {{$information->leader->name}} {{$information->leader->lastname}}
                      </td>
                      <td><button type="button" name="edit" class="btn btn-primary" data-toggle="modal" data-id="{{$information->id}}" data-target="#updatePosition{{$information->id}}" >Actualizar</button>
                      <td><button type="button" class="btn btn-primary" data-toggle="modal" data-target="#deletePosition{{$information->id}}">Eliminar</button></td>
                    </tr>
                    <div class="modal fade" data-backdrop="static" data-keyboard="false" id="updatePosition{{$information->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog modal-xl" role="document">
                          <div class="modal-content">
                            <div class="modal-body">
                                <div class="col-12 grid-margin">
                                    <div class="card">
                                      <div class="card-body">
                                        <h4 class="card-title">Actualizar Posición</h4>
                                        <form class="form-sample">
                                          <p class="card-description">
                                            Información personal
                                          </p>
                                          <div class="row">
                                            <div class="col-md-6">
                                              <div class="form-group row">
                                                <label class="col-sm-3 col-form-label">Nombre</label>
                                                <div class="col-sm-9">
                                                  <input type="text" class="form-control" name="infoName{{$information->id}}" value="{{$information->employee->name}}" disabled/>
                                                </div>
                                              </div>
                                            </div>
                                            <div class="col-md-6">
                                              <div class="form-group row">
                                                <label class="col-sm-3 col-form-label">Apellido</label>
                                                <div class="col-sm-9">
                                                  <input type="text" class="form-control" name="infoLastname{{$information->id}}" value="{{$information->employee->lastname}}" disabled/>
                                                </div>
                                              </div>
                                            </div>
                                          </div>
                                          <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group row">
                                                  <label class="col-sm-3 col-form-label">Identificación</label>
                                                  <div class="col-sm-9">
                                                    <input type="text" class="form-control" name="infoId{{$information->id}}" value="{{$information->employee->identification}}" disabled/>
                                                  </div>
                                                </div>
                                              </div>
                                              <div class="col-md-6">
                                                <div class="form-group row">
                                                  <label class="col-sm-3 col-form-label">Cargo</label>
                                                  <div class="col-sm-9">
                                                    <select class="form-control" name="infoPosition{{$information->id}}" required>
                                                        @if(!empty($information->position->id))<option value="{{$information->position->id}}" selected="selected" required>{{$information->position->pos_name}}</option> @endif
    
                                                        @foreach($positions as $pos_name)
                                                            <option value="{{$pos_name->position->id}}" label="{{$pos_name->position->pos_name}}">{{$pos_name->position->pos_name}}</option>   
                                                        @endforeach
                                                    </select>
                                                  </div>
                                                </div>
                                              </div>
                                          </div>
                                          <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group row">
                                                  <label class="col-sm-3 col-form-label">Rol</label>
                                                  <div class="col-sm-9">
                                                    <select class="form-control"  name="infoRole{{$information->id}}" multiple required>
                                                      @if(!empty($information->role)) <option value="{{$information->role}}" selected="selected">{{$information->role}}</option>@endif
                                                        <option value="Jefe">Jefe</option>
                                                        <option value="Colaborador/a">Colaborador/a</option>
                                                    </select>
                                                  </div>
                                                </div>
                                              </div>
                                              <div class="col-md-6">
                                                <div class="form-group row">
                                                  <label class="col-sm-3 col-form-label">Jefe</label>
                                                  <div class="col-sm-9">
                                                    <select class="form-control" name="infoLeader{{$information->id}}" multiple required>
                                                        @if(!empty($information->id_leader)) <option value="{{$information->id_leader}}"  selected="selected" required>{{$information->leader->name}} {{$information->leader->lastname}} </option> @endif
                                                        @foreach($employees as $leader)
                                                        <option value="{{$leader->id}}" >{{$leader->name}} {{$leader->lastname}}</option>
                                                        @endforeach
                                                      </select>
                                                  </div>
                                                </div>
                                              </div>
                                          </div>
                                          <div id="message" style="text-align:center"></div>
                                          <input type="hidden" name="idPosition{{$information->id}}" value="{{$information->id}}" />
                                        </form>
                                      </div>
                                    </div>
                                  </div>
                            </div>
                            <div class="modal-footer">
                              <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                              <input type="submit" id="btn_submit" value="Guardar" class="btn btn-primary" onclick="updatePosition{{$information->id}}()">
                            </div>
                          </div>
                        </div>
                    </div>
                    <div class="modal fade" data-backdrop="static" data-keyboard="false" id="deletePosition{{$information->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                          <div class="modal-content">
                            <div class="modal-header">
                              <h5 class="modal-title" id="exampleModalLabel">Eliminación</h5>
                              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                              </button>
                            </div>
                            <div class="modal-body">
                                <blockquote class="blockquote blockquote-primary">
                                    <p>Está a punto de eliminar a {{$information->employee->name}} {{$information->employee->lastname}} permanentemente.</p>
                                    <footer class="blockquote-footer">¿Está seguro/a?</footer>
                                  </blockquote>
                            </div>
                            <div id="message" style="text-align:center"></div>
                            <input type="hidden" name="idPosition{{$information->id}}" value="{{$information->id}}" />
                            <div class="modal-footer">
                              <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                              <button type="button" id="btn_submit" class="btn btn-primary" onclick="deletePosition{{$information->id}}()">Confirmar</button>
                            </div>
                          </div>
                        </div>
                    </div>
                    @endforeach
                    <div class="modal fade" data-backdrop="static" data-keyboard="false" id="registerPosition" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog modal-xl" role="document">
                          <div class="modal-content">
                            <div class="modal-body">
                                <div class="col-12 grid-margin">
                                    <div class="card">
                                      <div class="card-body">
                                        <h4 class="card-title">Crear Posición</h4>
                                        <form class="form-sample">
                                          <p class="card-description">
                                            Información personal
                                          </p>
                                          <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group row">
                                                      <label class="col-sm-3 col-form-label">Nombre completo</label>
                                                      <div class="col-sm-9">
                                                        <select class="form-control" id="infoNameR" name="infoNameR" multiple>
                                                            @foreach($positions as $name)
                                                            <option value="{{$name->employee->id}}">{{$name->employee->name}} {{$name->employee->lastname}}</option>
                                                            @endforeach
                                                          </select>
                                                      </div>
                                                    </div>
                                                  </div>
                                            <div class="col-md-6">
                                                <div class="form-group row">
                                                  <label class="col-sm-3 col-form-label">Cargo</label>
                                                  <div class="col-sm-9">
                                                    <select class="form-control" id="infoPositionR" name="infoPositionR" multiple>
                                                        <option value="{{$information->position->pos_name}}" disabled>{{$information->position->pos_name}}</option>
                                                        @foreach($positions as $pos_name)
                                                        <option value="{{$pos_name->position->id}}" label="{{$pos_name->position->pos_name}}">{{$pos_name->position->pos_name}}</option>
                                                        @endforeach
                                                      </select>
                                                  </div>
                                                </div>
                                              </div>
                                          </div>
                                          <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group row">
                                                  <label class="col-sm-3 col-form-label">Rol</label>
                                                  <div class="col-sm-9">
                                                    <select class="form-control" id="infoRoleR" name="infoRoleR">
                                                        <option value="Jefe">Jefe</option>
                                                        <option value="Colaborador/a">Colaborador/a</option>
                                                    </select>
                                                  </div>
                                                </div>
                                              </div>
                                              <div class="col-md-6">
                                                <div class="form-group row">
                                                  <label class="col-sm-3 col-form-label">Jefe</label>
                                                  <div class="col-sm-9">
                                                    <select class="form-control" id="infoLeaderR" name="infoLeaderR" multiple>
                                                        <option value="{{$information->id_leader}}" disabled>{{$information->leader->name}} {{$information->employee->lastname}}</option>
                                                        @foreach($positions as $id_leader)
                                                        <option value="{{$id_leader->id_leader}}" label="{{$id_leader->$id_leader}}">{{$id_leader->leader->name}} {{$id_leader->employee->lastname}}</option>
                                                        @endforeach
                                                      </select>
                                                  </div>
                                                </div>
                                              </div>
                                          </div>
                                          <div id="message" style="text-align:center"></div>
                                        </form>
                                      </div>
                                    </div>
                                  </div>
                            </div>
                            <div class="modal-footer">
                              <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                              <input type="submit" id="btn_submit" value="Guardar" class="btn btn-primary" onclick="createPosition()">
                            </div>
                          </div>
                        </div>
                    </div>
                  </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
    </div>      
</div>
@endsection
@section('js')
<script>
    $(document).ready(function() {
        $('#position').DataTable();
    });
</script>

<script>
    function createPosition()
    {
        $(document).ready(function(){
        var url = 'http://127.0.0.1:8000/api/position/';
        var employee = $('input[name="idPosition"]').val();
        var value = employee;
        console.log({
                id_employee: $('select[name="infoNameR"]').val().toString(),
                id_position: $('select[name="infoPositionR"]').val().toString(),
                id_leader: $('select[name="infoLeaderR"]').val().toString(),
                role: $('select[name="infoRoleR"]').val().toString(),
            });
    
        $.ajax({
            type:"POST",
            url: url,
            data: 
            {
                id_employee: $('select[name="infoNameR"]').val().toString(),
                id_position: $('select[name="infoPositionR"]').val().toString(),
                id_leader: $('select[name="infoLeaderR"]').val().toString(),
                role: $('select[name="infoRoleR"]').val().toString(),
            },
            success: function(response) {
                var result = '<p class=text-success> Creación exitosa. </p> <img src="images/gif/reloading.gif" alt="reloading" width="30" height="30" >'; 
                $('div#message').append(result);
                $("#btn_submit").css('visibility', 'hidden');
                
                setTimeout(function(){
                window.location.reload();
                }, 3000);
                
            },
            error: function(){
                var result = "<p class=text-danger> Error, compruebe los datos ingresados e intente nuevamente. </p>";
                $('div#message').append(result);
            },
        }); 
    })}
</script>
@foreach ($positions as $information)  
<script>
  
    function deletePosition{{$information->id}}()
    {
        $(document).ready(function() {
        var url = 'https://typical-pipe-production.up.railway.app/api/positions/';
        var employee = $('input[name="idPosition' + {{$information->id}} + '"]').val();      
        console.log(employee);

        $.ajax({
            type:"DELETE",
            url: url + employee,
            success: function(response) {
                var result = '<p class=text-success> Se ha eliminado con éxito. </p> <img src="images/gif/reloading.gif" alt="reloading" width="30" height="30" >'; 
                $('div#message').append(result);
                $("#btn_submit").css('visibility', 'hidden');
                
                setTimeout(function(){
                window.location.reload();
                }, 3000);
            },
            error: function(){
                var result = "<p class=text-danger> Oops! Ocurrió un error. Inténtalo nuevamente.</p>";
                $('div#message').append(result);
            },
        }); 
    })}
</script>

<script>
    function updatePosition{{$information->id}}()
    {
        $(document).ready(function() { 
        var url = 'https://typical-pipe-production.up.railway.app/api/positions/';
        var employee = $('input[name="idPosition'+ {{$information->id}} +'"]').val();
        var data = {
                id_employee: employee,
                id_position: $('select[name="infoPosition'+ employee +'"]').val().toString(),
                id_leader: $('select[name="infoLeader'+ employee +'"]').val().toString(),
                role: $('select[name="infoRole'+ employee +'"]').val().toString(),
            };     
    
        $.ajax({
            type:"PUT",
            url: url + employee,
            data: 
            {
                id_employee: employee,
                id_position: $('select[name="infoPosition"]').val().toString(),
                id_leader: $('select[name="infoLeader"]').val().toString(),
                role: $('select[name="infoRole"]').val().toString(),
            },
            dataType: 'JSON',
            success: function(response) {
                var result = '<p class=text-success> Actualización exitosa. </p> <img src="images/gif/reloading.gif" alt="reloading" width="30" height="30" >'; 
                $('div#message').append(result);
                $("#btn_submit").css('visibility', 'hidden');
                
                setTimeout(function(){
                window.location.reload();
                }, 3000);
                
            },
            error: function(){
                var result = "<p class=text-danger> Error, compruebe los datos ingresados e intente nuevamente. </p>";
                $('div#message').append(result);
            },
        }); 
    })}
</script>
@endforeach
@endsection

