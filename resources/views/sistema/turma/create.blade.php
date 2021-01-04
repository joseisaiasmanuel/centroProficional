@extends('sistema/template/padrao')

@section('main-content')

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Sistema de gestão
        <small>Centro de Formação</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="{{route('turma.index')}}">Turmas</a></li>
        <li class="active">Inserir nova Turma</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
   
        <div class="col-md-12">
          <!-- Horizontal Form -->
          <div class="box box-info">
            <div class="box-header with-border">
              <h3 class="box-title">Nova Turma</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form class="form-horizontal" method="post" action="{{route('turma.store')}}">
             {{csrf_field()}}
              <div class="box-body">
                <div class="form-group">
                  <label for="descricao" class="col-sm-2 control-label" class="form-control">Descrição</label>
                  <div class="col-sm-4">
                    <input type="text" class="form-control" id="descricao" name="descricao" placeholder="Degete a descrição da turma">
                  </div>
                  
                </div>
                <div class="form-group">
                  <label for="sala" class="col-sm-2 control-label" class="form-control">Sala</label>
                  <div class="col-sm-4">
                    <input type="text" class="form-control" id="sala" name="sala" placeholder="Degete a  sala">
                  </div>
                  
                </div>
              </div>
              <!-- /.box-body -->
              <div class="box-footer">
                <a href="{{route('turma.index')}}" class="btn btn-danger">Voltar</a>
                <button type="submit" class="btn btn-primary pull-right">Salvar</button>
              </div>
              <!-- /.box-footer -->
            </form>
          </div>
          <!-- /.box -->
          <!-- general form elements disabled -->
          <!-- /.box -->
        </div>
        <!--/.col (right) -->
      </div>
      <!-- /.row -->
    </section>
    <!-- /.content -->
  </div>


@endsection