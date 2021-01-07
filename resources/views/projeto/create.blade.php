@extends('layouts.admin')
@section('content')
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
              <div class="row mb-2">
                <div class="col-sm-6">
                  <h1>Projetos</h1>
                </div>
                <div class="col-sm-6">
                  <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="/home">Home</a></li>
                    <li class="breadcrumb-item active">Novo Projeto</li>
                  </ol>
                </div>
              </div>
            </div><!-- /.container-fluid -->
          </section>
      
          <!-- Main content -->
          <section class="content">
            <div class="container-fluid">
              <div class="row">
                <!-- left column -->
                <div class="col-md-12">
                  <!-- general form elements -->
                  <div class="card card-primary">
                    <div class="card-header">
                      <h3 class="card-title">Novo Projeto</h3>
                    </div>
                    <!-- /.card-header -->
                    <!-- form start -->
                    <form>
                      <div class="card-body">
                        <div class="form-group">
                          <label for="inputDesig">Desgnação</label>
                          <input type="text" class="form-control" id="inputDesig" placeholder="Insira a Designçao do projeto">
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                              <label for="selectCat">Categoria</label>
                              <select class="form-control select2" style="width: 100%;">
                                <option  value="DO"selected="selected">Selecione uma Categoria</option>
                                <option value="1">Veiculos Roboticos</option>
                                <option value="2">Objetos e espacos Inteligentes</option>
                                <option value="3">Outros Artefactos</option>
                               
                              </select>
                            </div>
                        <div class="form-group">
                          <label for="inputAluno">Aluno(s) Responsavel(eis)</label>
                          <input type="text" class="form-control" id="inputAluno" placeholder="Insira os alunos que estao a frente do projeto">
                        </div>
                        <div class="form-group">
                            <label for="inputData">Data Inicio</label>
                            <input type="date" class="form-control" id="inputData" placeholder="Insira a data de inicio do projeto">
                          </div>
                          <div class="form-group">
                            <label for="inputGit">Github</label>
                            <input type="text" class="form-control" id="inputGit" placeholder="Insira o Git do projeto">
                          </div>
                          <div class="form-group">
                            <label>Descrição</label>
                            <textarea class="form-control" rows="5" placeholder="Descreva aqui o projeto"></textarea>
                          </div>
                        <div class="form-group">
                          <label for="inputfotos"> Fotos</label>
                          <div class="input-group">
                            <div class="custom-file">
                              <input type="file" class="custom-file-input" id="inputfotos">
                              <label class="custom-file-label" for="inputfotos">Escolha um ficheiro</label>
                            </div>
                            <div class="input-group-append">
                              <span class="input-group-text">Upload Fotos</span>
                            </div>
                          </div>
                        </div>
                       
                      <!-- /.card-body -->
      
                      <div class="card-footer">
                        <button type="submit" class="btn btn-primary" id="btnEnviar">Enviar</button>
                        <button type="submit" class="btn btn-warning" id="btnLimpar">Limpar</button>
                      </div>
                    </form>
                  </div>
                  <!-- /.card -->
    
                </div>
                <!--/.col (left) -->

              </div>
              <!-- /.row -->
            </div><!-- /.container-fluid -->
          </section>
          <!-- /.content -->
@endsection