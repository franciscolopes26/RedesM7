@extends('layouts.admin')
@section('content')
    <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0">Administração</h1>
        </div><!-- /.col -->
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="/home">Home</a></li>
            <li class="breadcrumb-item active">Inicio</li>
          </ol>
        </div><!-- /.col -->
      </div><!-- /.row -->
    </div><!-- /.container-fluid -->
  </div>
  <!-- /.content-header -->

  <!-- Main content -->
  <section class="content">
    <div class="container-fluid">
      <!-- Small boxes (Stat box) -->
      <div class="row">
        <div class="col-lg-3 col-6">
          <!-- small box -->
          <div class="small-box bg-info">
            <div class="inner">
              <h2>Projetos</h2>

             <br>
             <br>
            </div>
            <div class="icon">
              <i class="fas fa-project-diagram"></i>
            </div>
            <a href="#" class="small-box-footer">Listar <i class="fas fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-6">
          <!-- small box -->
          <div class="small-box bg-success">
            <div class="inner">
              <h2>Equipa</h2>

              <br>
              <br>
            </div>
            <div class="icon">
              <i class="fas fa-users"></i>
            </div>
            <a href="#" class="small-box-footer">Listar<i class="fas fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-6">
          <!-- small box -->
          <div class="small-box bg-warning">
            <div class="inner">
              <h2>Galeria</h2>

              <br>
              <br>
            </div>
            <div class="icon">
              <i class="fas fa-images"></i>
            </div>
            <a href="#" class="small-box-footer">Listar <i class="fas fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-6">
          <!-- small box -->
          <div class="small-box bg-danger">
            <div class="inner">
              <h2>Noticias</h2>

              <br>
              <br>
            </div>
            <div class="icon">
              <i class="far fa-newspaper"></i>
            </div>
            <a href="#" class="small-box-footer">Listar <i class="fas fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
      </div>
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
                      <tr>
                        <td>Tabela Periódica</td>
                        <td>Artefactos</td>
                        <td>Francisco Requicha</td>
                        <td>18-09-2020</td>
                        <td><a href="https://github.com/franciscolopes26/RoboticaAERP">https://github.com/franciscolopes26/RoboticaAERP</a></td>
                      </tr>
                      <tr>
                        <td>BotnRoll One A</td>
                        <td>Robótica</td>
                        <td>José Fernandes</td>
                        <td>18-09-2020</td>
                        <td><a href="https://github.com/franciscolopes26/RoboticaAERP">https://github.com/franciscolopes26/RoboticaAERP</a></td>
                      </tr>
                      <tr>
                        <td>Arduino Lauchpad</td>
                        <td>Artefactos</td>
                        <td>Cristiano Nazário</td>
                        <td>03-02-2020</td>
                        <td><a href="https://github.com/franciscolopes26/RoboticaAERP">https://github.com/franciscolopes26/RoboticaAERP</a></td>
                      </tr>
                      <tr>
                        <td>Arduino Smart Car</td>
                        <td>Robótica</td>
                        <td>David Silva</td>
                        <td>03-02-2020</td>
                        <td><a href="https://github.com/franciscolopes26/RoboticaAERP">https://github.com/franciscolopes26/RoboticaAERP</a></td>
                      </tr>
                      <tr>
                         <td>Arduino Tank</td>
                         <td>Robótica</td>
                         <td>Rodrigo Pinto</td>
                         <td>03-02-2020</td>
                         <td><a href="https://github.com/franciscolopes26/RoboticaAERP">https://github.com/franciscolopes26/RoboticaAERP</a></td>
                      </tr>
                      <tr>
                         <td>Robô Anprino</td>
                         <td>Robótica</td>
                         <td>10CT1 e 2GPSI</td>
                         <td>07-10-2020</td>
                         <td><a href="https://github.com/franciscolopes26/RoboticaAERP">https://github.com/franciscolopes26/RoboticaAERP</a></td>
                      </tr>
                      <tr>
                          <td>Horta Inteligente</td>
                          <td>Artefactos</td>
                          <td>José Fernandes</td>
                          <td>08-01-2021</td>
                          <td><a href="https://github.com/franciscolopes26/RoboticaAERP">https://github.com/franciscolopes26/RoboticaAERP</a></td>
                       </tr>
                      </tfoot>
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
  <!-- /.content -->
@endsection