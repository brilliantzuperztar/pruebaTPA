@extends('modules.main')

@section('title', 'Empleados')

@section('content')

<h1 class="display-2 pl-3 pb-3">Empleados</h1>

<div class="col-md-12 grid-margin stretch-card">
    <div class="card">
      <div class="card-body">
        <button type="button" class="btn btn-primary btn-icon-text mb-5" data-toggle="modal" data-target="#registerEmployee">
            <i class="icon-head btn-icon-prepend"></i>
            Agregar Empleado
          </button>
        <div class="row">
          <div class="col-12">
            <div class="table-responsive">
              <table id="info" class="display expandable-table" style="width:100%">
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
                        País
                      </th>
                      <th>
                        Ciudad
                      </th>
                      <th>
                        Dirección
                      </th>
                      <th>
                        Teléfono
                      </th>
                      <th>
                          Admin
                      </th>
                      <th></th>
                      <th></th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($employees as $information)   
                    <tr>
                      <td class="py-1">
                        @if(!empty($information->id)) {{$information->id}} @else @endif
                      </td>
                      <td>
                        @if(!empty($information->name) && !empty($information->lastname)) {{$information->name}} {{$information->lastname}} @else {{ __('Sin información') }} @endif 
                      </td>
                      <td>
                        @if(!empty($information->identification)) {{$information->identification}} @else {{ __('Sin información') }} @endif
                      </td>
                      <td>
                        @if(!empty($information->country)) {{$information->country}} @else {{ __('Sin información') }} @endif
                      </td>
                      <td>
                        @if(!empty($information->city)) {{$information->city}} @else {{ __('Sin información') }} @endif
                      </td>
                      <td>
                        @if(!empty($information->address)) {{$information->address}} @else {{ __('Sin información') }} @endif
                      </td>
                      <td>
                        @if(!empty($information->number)) {{$information->number}} @else {{ __('Sin información') }} @endif
                      </td>
                      <td>
                          @if (!empty($information->administrator) && $information->administrator === 1)
                          Sí
                          @else
                          No
                          @endif
                      </td>
                      <td><button type="button" name="edit" class="btn btn-primary" data-toggle="modal" data-id="{{$information->id}}" data-target="#updateEmployee{{$information->id}}" >Actualizar</button>
                      <td><button type="button" class="btn btn-primary" data-toggle="modal" data-target="#deleteEmployee{{$information->id}}">Eliminar</button></td>
                      </td>               
                    </tr>
                    <div class="modal fade" data-backdrop="static" data-keyboard="false" id="updateEmployee{{$information->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog modal-xl" role="document">
                          <div class="modal-content">
                            <div class="modal-body">
                                <div class="col-12 grid-margin">
                                    <div class="card">
                                      <div class="card-body">
                                        <h4 class="card-title">Actualizar Empleado</h4>
                                        <form class="form-sample">
                                          <p class="card-description">
                                            Información personal
                                          </p>
                                          <div class="row">
                                            <div class="col-md-6">
                                              <div class="form-group row">
                                                <label class="col-sm-3 col-form-label">Nombre</label>
                                                <div class="col-sm-9">
                                                  <input type="text" class="form-control" name="infoName{{$information->id}}" value="{{$information->name}}" required/>
                                                </div>
                                              </div>
                                            </div>
                                            <div class="col-md-6">
                                              <div class="form-group row">
                                                <label class="col-sm-3 col-form-label">Apellido</label>
                                                <div class="col-sm-9">
                                                  <input type="text" class="form-control" name="infoLastname{{$information->id}}" value="{{$information->lastname}}" required/>
                                                </div>
                                              </div>
                                            </div>
                                          </div>
                                          <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group row">
                                                  <label class="col-sm-3 col-form-label">Identificación</label>
                                                  <div class="col-sm-9">
                                                    <input type="text" class="form-control" name="infoId{{$information->id}}" value="{{$information->identification}}" required/>
                                                  </div>
                                                </div>
                                              </div>
                                              <div class="col-md-6">
                                                <div class="form-group row">
                                                  <label class="col-sm-3 col-form-label">Teléfono</label>
                                                  <div class="col-sm-9">
                                                    <input type="text" class="form-control" name="infoNumber{{$information->id}}" value="{{$information->number}}" required/>
                                                  </div>
                                                </div>
                                              </div>
                                          </div>
                                          <p class="card-description">
                                            Dirección
                                          </p>
                                          <div class="row">
                                            <div class="col-md-6">
                                              <div class="form-group row">
                                                <label class="col-sm-3 col-form-label">País</label>
                                                <div class="col-sm-9">
                                                  <select class="form-control" id="infoCountry{{$information->id}}" name="infoCountry{{$information->id}}" multiple required>
                                                    <option value="{{$information->country}}" selected>{{$information->country}}</option>
                                                    <option value="Colombia" label="Colombia">Colombia</option>
                                                    <option value="USA" label="USA">USA</option>
                                                    <option value="España" label="España">España</option>
                                                    
                                                  </select>
                                                </div>
                                              </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group row">
                                                  <label class="col-sm-3 col-form-label">Ciudad</label>
                                                  <div class="col-sm-9">
                                                    <select class="form-control" id="infoCity{{$information->id}}" name="infoCity{{$information->id}}" multiple required>
                                                        <option disabled>Selecciona tu país primero</option>
                                                    </select>
                                                  </div>
                                                </div>
                                              </div>
                                              <div class="col-md-6">
                                                <div class="form-group row">
                                                  <label class="col-sm-3 col-form-label">Dirección</label>
                                                  <div class="col-sm-9">
                                                    <input type="text" class="form-control" name="infoAddress{{$information->id}}" value="{{$information->address}}" required/>
                                                  </div>
                                                </div>
                                              </div>
                                          </div>
                                          <div id="message" style="text-align:center"></div>
                                          <input type="hidden" name="idEmployee{{$information->id}}" value="{{$information->id}}" />
                                          <input type="hidden" name="infoAdmin{{$information->id}}" value="{{$information->administrator}}" />
                                        </form>
                                      </div>
                                    </div>
                                  </div>
                            </div>
                            <div class="modal-footer">
                              <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                              <input type="submit"  id="btn_submit" value="Guardar" class="btn btn-primary" onclick="updateEmployee{{$information->id}}()">
                            </div>
                          </div>
                        </div>
                      </div>
                    <div class="modal fade" data-backdrop="static" data-keyboard="false" id="deleteEmployee{{$information->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
                                    <p>Está a punto de eliminar a {{$information->name}}  {{$information->lastname}} permanentemente.</p>
                                    <footer class="blockquote-footer">¿Está seguro/a?</footer>
                                  </blockquote>
                            </div>
                            <div id="message" style="text-align:center"></div>
                            <input type="hidden" name="idEmployee{{$information->id}}" value="{{$information->id}}" />
                            <div class="modal-footer">
                              <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                              <button type="button" id="btn_submit" class="btn btn-primary" onclick="deleteEmployee{{$information->id}}()">Confirmar</button>
                            </div>
                          </div>
                        </div>
                    </div>
                      @endforeach

                    <div class="modal fade" data-backdrop="static" data-keyboard="false" id="registerEmployee" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog modal-xl" role="document">
                          <div class="modal-content">
                            <div class="modal-body">
                                <div class="col-12 grid-margin">
                                    <div class="card">
                                      <div class="card-body">
                                        <h4 class="card-title">Registrar Empleado</h4>
                                        <form class="form-sample">
                                          <p class="card-description">
                                            Información personal
                                          </p>
                                          <div class="row">
                                            <div class="col-md-6">
                                              <div class="form-group row">
                                                <label class="col-sm-3 col-form-label">Nombre</label>
                                                <div class="col-sm-9">
                                                  <input type="text" class="form-control" name="infoNameR" required />
                                                </div>
                                              </div>
                                            </div>
                                            <div class="col-md-6">
                                              <div class="form-group row">
                                                <label class="col-sm-3 col-form-label">Apellido</label>
                                                <div class="col-sm-9">
                                                  <input type="text" class="form-control" name="infoLastnameR" required />
                                                </div>
                                              </div>
                                            </div>
                                          </div>
                                          <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group row">
                                                  <label class="col-sm-3 col-form-label">Identificación</label>
                                                  <div class="col-sm-9">
                                                    <input type="text" class="form-control" name="infoIdR" required />
                                                  </div>
                                                </div>
                                              </div>
                                              <div class="col-md-6">
                                                <div class="form-group row">
                                                  <label class="col-sm-3 col-form-label">Teléfono</label>
                                                  <div class="col-sm-9">
                                                    <input type="text" class="form-control" name="infoNumberR" required />
                                                  </div>
                                                </div>
                                              </div>
                                          </div>
                                          <p class="card-description">
                                            Dirección
                                          </p>
                                          <div class="row">
                                            <div class="col-md-6">
                                              <div class="form-group row">
                                                <label class="col-sm-3 col-form-label">País</label>
                                                <div class="col-sm-9">
                                                  <select class="form-control" id="infoCountryR" name="infoCountryR" multiple required>
                                                    <option value="Colombia" label="Colombia">Colombia</option>
                                                    <option value="USA" label="USA">USA</option>
                                                    <option value="España" label="España">España</option>
                                                    
                                                  </select>
                                                </div>
                                              </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group row">
                                                  <label class="col-sm-3 col-form-label">Ciudad</label>
                                                  <div class="col-sm-9">
                                                    <select class="form-control" id="infoCityR" name="infoCityR" multiple required>
                                                        <option disabled>Selecciona tu país primero</option>
                                                    </select>
                                                  </div>
                                                </div>
                                              </div>
                                              <div class="col-md-6">
                                                <div class="form-group row">
                                                  <label class="col-sm-3 col-form-label">Dirección</label>
                                                  <div class="col-sm-9">
                                                    <input type="text" class="form-control" name="infoAddressR" />
                                                  </div>
                                                </div>
                                              </div>
                                          </div>
                                        </form>
                                      </div>
                                    </div>
                                  </div>
                                  <div id="message" style="text-align:center"></div>
                            </div>
                            <div class="modal-footer">
                              <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                              <input type="submit" id="btn_submit"  value="Guardar" class="btn btn-primary" onclick="registerEmployee()">
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
        $('#info').DataTable();
    });
</script>
<script>
    
    function registerEmployee()
    {
        $(document).ready(function(){
        var url = 'https://typical-pipe-production.up.railway.app/api/employee';
        var employee = $('input[name="idEmployee"]').val();          
        var data =  {
             name: $('input[name="infoNameR"]').val(),
             lastname: $('input[name="infoLastnameR"]').val(), 
             identification: $('input[name="infoIdR"]').val(),
             country:$('select[name="infoCountryR"]').val().toString(),
             address:$('input[name="infoAddressR"]').val(), 
             city: $('select[name="infoCityR"]').val().toString(), 
             number: $('input[name="infoNumberR"]').val(),
             administrator: 0,
            };
            console.log(data);
        

        $.ajax({
            type:"POST",
            url: url,
            data: data,
            success: function(response) {
                var result = '<p class=text-success> Registro exitoso! </p> <img src="images/gif/reloading.gif" alt="reloading" width="30" height="30" >'; 
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
@foreach ($employees as $information) 
<script>
    function deleteEmployee{{$information->id}}()
    {
        $(document).ready(function(){
        var url = 'https://typical-pipe-production.up.railway.app/api/employees/';
        var employee = $('input[name="idEmployee'+ {{$information->id}} +'"]').val();       


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
                var result = "<p class=text-danger> Este empleado no puede ser eliminado. Posee varias jefaturas pendientes.</p>";
                $('div#message').append(result);
            },
        }); 
    })}
</script>
<script>
    function updateEmployee{{$information->id}}()
    {
        $(document).ready(function(){
        var url = 'https://typical-pipe-production.up.railway.app/api/employees/';
  
        var employee = $('input[name="idEmployee'+ {{$information->id}} +'"]').val();
        var data = {
             id: employee,
             name: $('input[name="infoName'+ employee +'"]').val(),
             lastname: $('input[name="infoLastname'+ employee +'"]').val(), 
             identification: $('input[name="infoId'+ employee +'"]').val(),
             country:$('select[name="infoCountry'+ employee +'"]').val().toString(),
             address:$('input[name="infoAddress'+ employee +'"]').val(), 
             city: $('select[name="infoCity'+ employee +'"]').val().toString(), 
             number: $('input[name="infoNumber'+ employee +'"]').val(),
             administrator: $('input[name="infoAdmin'+ employee +'"]').val()

            };

        $.ajax({
            type:"PUT",
            url: url + employee,
            data: data,
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
<script>
$(function() {

  var cities = {};
  cities['USA'] = new Array('Alabama', 'Alaska', 'Arizona', 'Otro');
  cities['Colombia'] = new Array('Bogotá', 'Medellin', 'Cartagena', 'Otro');
  cities['España'] = new Array('Sevilla', 'Madrid', 'Barcelona', 'Otro');

  $('#infoCountry'+ {{$information->id}}).change(function() {
    var selected = [];
    $.each($(this).val(), function(i, country) {
      selected = selected.concat(cities[country]);
    });

    $("#infoCity"+ {{$information->id}} +" > option").remove();
    if (selected.length === 0) {
    
      $("#infoCity"+ {{$information->id}}).append("<option disabled>Select Country First</option>");
      return false;
    }
    selected.sort();

    $.each(selected, function(i, city) {
      $("<option value='" + city + "'>").html(city).appendTo("#infoCity"+ {{$information->id}});
    });
  });
});

</script>
<script>
    $(function() {
    
      var cities = {};
      cities['USA'] = new Array('Alabama', 'Alaska', 'Arizona', 'Otro');
      cities['Colombia'] = new Array('Bogotá', 'Medellin', 'Cartagena', 'Otro');
      cities['España'] = new Array('Sevilla', 'Madrid', 'Barcelona', 'Otro');
    
      $("#infoCountryR").change(function() {
        var selected = [];
        $.each($(this).val(), function(i, country) {
          selected = selected.concat(cities[country]);
        });
    
        $("#infoCityR > option").remove();
        if (selected.length === 0) {
        
          $("#infoCityR").append("<option disabled>Select Country First</option>");
          return false;
        }
        selected.sort();
    
        $.each(selected, function(i, city) {
          $("<option value='" + city + "'>").html(city).appendTo("#infoCityR");
        });
      });
    });
    
    </script>
    @endforeach
@endsection