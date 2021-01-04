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
        <li class="active">Dados da Turma</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
           @include('sistema.includes.message')
          <div class="box">
            <div class="box-header">
          <a class="btn btn-primary col-md-offset-10" href="{{route('turma.create')}}">Nova Turma</a>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>Nº</th>
                  <th>Descrição da Turma</th>
                  <th>Sala</th>
                  <th>Data de registos</th>
                  <th>Data de actualização</th>
                  <th>Opções</th>
                </tr>
                </thead>
                <tbody>
                @foreach ($turma as $tur)
                <tr>
                  <td>{{$loop->index +1}}</td>
                  <td> {{$tur->descricao}}</td>
                  <td> {{$tur->sala}}</td>
                  <td> {{$tur->created_at}}</td>
                  <td> {{$tur->updated_at}}</td>
                  <td style="text-align: center;">
                  <a href="{{route('turma.edit',$tur->id)}}"><i class="fa fa-edit"></i></a>
                  </td>
                  <td style="text-align: center;">
                  <a href="" data-target="#modal-delete-{{$tur->id}}" data-toggle="modal"><i class="fa fa-trash" action="{{route('turma.index')}}"></i></a>
                  
                  </td>
                </tr>
                @endforeach
                </tbody>
                <tfoot>
                <tr>
                  <th>Nº</th>
                  <th>Descrição da Turma</th>
                  <th>Data de Registos</th>
                  <th>Data de actualização</th>
                  <th>Opcões</th>
                </tr>
                </tfoot>
              </table>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </section>
    <!-- /.content -->
  </div>

@endsection