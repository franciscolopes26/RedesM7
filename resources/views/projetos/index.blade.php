@extends('layouts.admin')

@section('content')
   <!-- Main content -->
  <section class="content">
    <div class="container-fluid">
      <!-- Small boxes (Stat box) -->
     
      <!-- /.row -->
      <!-- Main row -->
      <div class="row">
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
                      </tr>
                      </thead>
                      <tbody>
                      
                      @foreach ($projetos as $projeto)
                      <tr>
                        <td>{{ $projeto->designacao }}</td>
                        <td>{{ $projeto->Categoria->designacao }}</td>
                        <td>{{ $projeto->responsavel }}</td>
                        <td>{{ $projeto->dataInicio }}</td>
                        <td>{{ $projeto->github }}</td>
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