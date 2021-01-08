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
                    <form role="form" method="POST" action="/projetos" enctype="multipart/form-data">
                    @csrf
                      <div class="card-body">
                        <div class="form-group">
                          <label for="inputDesig">Desgnação</label>
                          <input type="text" class="form-control" value="{{old('inputDesig')  }}" required name="inputDesig" id="inputDesig" placeholder="Insira a Designçao do projeto">
                            @error('inputDesig')
                                <p class="text-danger">
                                    {{ $errors->first('inputDesig') }}
                                </p>
                            @enderror

                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                              <label for="selectCat">Categoria</label>
                              <select class="form-control select2" name="selectCat" id="selectCat" style="width: 100%;">
                                <option  value="DO" disabled selected="selected">Selecione uma Categoria</option>

                                @foreach ($categorias as $categoria)


                                    @if (old('selectCat')==$categoria->id)
                                        <option value="{{ $categoria->id }}" selected>{{ $categoria->designacao}}</option>
                                    @else
                                        <option value="{{ $categoria->id }}">{{ $categoria->designacao}}</option>
                                    @endif

                                        <option value="{{ $categoria->id }}">{{ $categoria->designacao}}</option>
                                @endforeach
                              </select>

                              @error('selectCat')
                              <p class="text-danger">
                                  {{ $errors->first('selectCat') }}
                              </p>
                            @enderror

                            </div>
                        <div class="form-group">
                          <label for="inputResp">Aluno(s) Responsavel(eis)</label>

                          <input type="text" class="form-control" value="{{ old('inputResp')  }}" name="inputResp" required id="inputResp" placeholder="Insira os alunos que estao a frente do projeto">
                          @error('inputResp')
                              <p class="text-danger">
                                  {{ $errors->first('inputResp') }}
                              </p>
                            @enderror


                        </div>
                        <div class="form-group">
                            <label for="inputData">Data Inicio</label>
                            <input type="date" class="form-control" value="{{ old('inputData')  }}" name="inputData" required id="inputData" placeholder="Insira a data de inicio do projeto">

                            @error('inputData')
                            <p class="text-danger">
                                {{ $errors->first('inputData') }}
                            </p>
                          @enderror

                        </div>
                          <div class="form-group">
                            <label for="inputGit">Github</label>
                            <input type="text" class="form-control" value="{{ old('inputGit')  }}"  name="inputGit" required id="inputGit" placeholder="Insira o Git do projeto">

                            @error('inputGit')
                            <p class="text-danger">
                                {{ $errors->first('inputGit') }}
                            </p>
                          @enderror

                        </div>
                          <div class="form-group">
                            <label for="textDesc">Descrição</label>
                            <textarea class="form-control" rows="5" name="textDesc" required id="textDesc" placeholder="Descreva aqui o projeto"> {{ old('textDesc')  }}</textarea>
                            @error('textDesc')
                            <p class="text-danger">
                                {{ $errors->first('textDesc') }}
                            </p>
                          @enderror

                        </div>
                        <div class="form-group">
                          <label> Fotos</label>
                          <div class="user-image mb-3 text-center">
                            <div class="imgPreview">{{ old('imageFile') }} </div>
                          </div>
                          <div class="input-group">
                            <div class="custom-file">
                              <input type="file" class="custom-file-input"   id="images" name="imageFile[]" multiple="multiple">
                              <label class="custom-file-label" for="images">Escolha um ficheiro</label>
                            </div>
                            <div class="input-group-append">
                              <span class="input-group-text">Upload Fotos</span>
                            </div>
                            @error('imageFile')
                                <p class="text-danger">
                                 {{ $errors->first('imageFile') }}
                               </p>
                            @enderror

                          @error('imageFile.*')
                              @foreach ($errors->all() as $error )
                                 <p class="text-danger">
                                     {{ $errors }}
                                 </p>
                              @endforeach
                            @enderror
                          </div>
                        </div>

                      <!-- /.card-body -->

                      <div class="card-footer">
                        <button type="submit" class="btn btn-primary" id="btnEnviar" name="btnEnviar">Enviar</button>
                        <button type="button" class="btn btn-warning" id="btnLimpar" name="btnLimpar">Limpar</button>
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
