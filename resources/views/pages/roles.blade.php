@extends('modules.main')

@section('title', 'Cargos')

@section('content')

<h1 class="display-2 pl-3 pb-3">Cargos</h1>

<div class="col-md-12 grid-margin stretch-card">
    <div class="card">
      <div class="card-body">
        <p class="card-title"></p>
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
                    </tr>
                    @endforeach
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
@endsection

