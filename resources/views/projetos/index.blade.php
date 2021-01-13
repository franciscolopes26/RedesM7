@extends('layouts.admin')

@section('content')
   <!-- Main content -->
  <section class="content">
    <div class="container-fluid">
      <!-- Small boxes (Stat box) -->

      <!-- /.row -->
      <!-- Main row -->
      <div class="row">
          <div class="col-md-12">
            @if (Session::has('message'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
{{ Session::get('message') }}
<button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
</button>

            </div>

            @endif


          </div>
        <!-- Left col -->
        <section class="col-lg-12 connectedSortable">
          <!-- Custom tabs (Charts with tabs)-->
          <div class="card">
              <div class="card-header bg-lightblue">
                <h3 class="card-title">Projectos em desenvolvimento</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">

                  <table id="example1" class="table table-bordered table-striped">
                      <thead>
                      <tr>
                        <th>Designação</th>
                        <th>Categoria</th>
                        <th>Autor(es)</th>
                        <th>Data de Início</th>
                        <th>Github</th>
                        <th>Eliminar</th>
                      </tr>
                      </thead>
                      <tbody>

                      @foreach ($projetos as $projeto)
                      <tr>
                        <td><a href="/projetos/{{ $projeto->id }}/edit">{{ $projeto->designacao }}</a></td>
                        <td>{{ $projeto->Categoria->designacao }}</td>
                        <td>{{ $projeto->responsavel }}</td>
                        <td>{{ $projeto->dataInicio }}</td>
                        <td><a href="{{ $projeto->github }}">{{ $projeto->designacao }}</a></td>
                        <td class="text-center"><i class="fas fa-trash text-danger"></i></td>
                      </tr>
                      @endforeach
                      </tbody>
                    </table>
              </div>
              <!-- /.card-body -->
            </div>
        </section>
        <!-- /.Left col -->

      </div>
      <!-- /.row (main row) -->
    </div><!-- /.container-fluid -->
  </section>

@endsection
