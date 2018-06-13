@extends('layouts.app')

@section('content')
    <h3 class="page-title">@lang('quickadmin.alunos.title')</h3>
    
    {!! Form::model($aluno, ['method' => 'PUT', 'route' => ['admin.alunos.update', $aluno->id]]) !!}

    <div class="panel panel-default">
        <div class="panel-heading">
            @lang('quickadmin.qa_edit')
        </div>

        <div class="panel-body">
            <div class="row">
                <div class="col-xs-12 form-group">
                    {!! Form::label('nome', trans('quickadmin.alunos.fields.nome').'', ['class' => 'control-label']) !!}
                    {!! Form::text('nome', old('nome'), ['class' => 'form-control', 'placeholder' => '']) !!}
                    <p class="help-block"></p>
                    @if($errors->has('nome'))
                        <p class="help-block">
                            {{ $errors->first('nome') }}
                        </p>
                    @endif
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 form-group">
                    {!! Form::label('escola_id', trans('quickadmin.alunos.fields.escola').'', ['class' => 'control-label']) !!}
                    {!! Form::select('escola_id', $escolas, old('escola_id'), ['class' => 'form-control select2']) !!}
                    <p class="help-block"></p>
                    @if($errors->has('escola_id'))
                        <p class="help-block">
                            {{ $errors->first('escola_id') }}
                        </p>
                    @endif
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 form-group">
                    {!! Form::label('idade', trans('quickadmin.alunos.fields.idade').'', ['class' => 'control-label']) !!}
                    {!! Form::text('idade', old('idade'), ['class' => 'form-control', 'placeholder' => '']) !!}
                    <p class="help-block"></p>
                    @if($errors->has('idade'))
                        <p class="help-block">
                            {{ $errors->first('idade') }}
                        </p>
                    @endif
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 form-group">
                    {!! Form::label('serie', trans('quickadmin.alunos.fields.serie').'', ['class' => 'control-label']) !!}
                    {!! Form::text('serie', old('serie'), ['class' => 'form-control', 'placeholder' => '']) !!}
                    <p class="help-block"></p>
                    @if($errors->has('serie'))
                        <p class="help-block">
                            {{ $errors->first('serie') }}
                        </p>
                    @endif
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 form-group">
                    {!! Form::label('turma', trans('quickadmin.alunos.fields.turma').'', ['class' => 'control-label']) !!}
                    {!! Form::text('turma', old('turma'), ['class' => 'form-control', 'placeholder' => '']) !!}
                    <p class="help-block"></p>
                    @if($errors->has('turma'))
                        <p class="help-block">
                            {{ $errors->first('turma') }}
                        </p>
                    @endif
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 form-group">
                    {!! Form::label('turno', trans('quickadmin.alunos.fields.turno').'', ['class' => 'control-label']) !!}
                    {!! Form::text('turno', old('turno'), ['class' => 'form-control', 'placeholder' => '']) !!}
                    <p class="help-block"></p>
                    @if($errors->has('turno'))
                        <p class="help-block">
                            {{ $errors->first('turno') }}
                        </p>
                    @endif
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 form-group">
                    {!! Form::label('endereco', trans('quickadmin.alunos.fields.endereco').'', ['class' => 'control-label']) !!}
                    {!! Form::text('endereco', old('endereco'), ['class' => 'form-control', 'placeholder' => '']) !!}
                    <p class="help-block"></p>
                    @if($errors->has('endereco'))
                        <p class="help-block">
                            {{ $errors->first('endereco') }}
                        </p>
                    @endif
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 form-group">
                    {!! Form::label('nome_do_responsavel', trans('quickadmin.alunos.fields.nome-do-responsavel').'', ['class' => 'control-label']) !!}
                    {!! Form::text('nome_do_responsavel', old('nome_do_responsavel'), ['class' => 'form-control', 'placeholder' => '']) !!}
                    <p class="help-block"></p>
                    @if($errors->has('nome_do_responsavel'))
                        <p class="help-block">
                            {{ $errors->first('nome_do_responsavel') }}
                        </p>
                    @endif
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 form-group">
                    {!! Form::label('cpf_do_responsavel', trans('quickadmin.alunos.fields.cpf-do-responsavel').'', ['class' => 'control-label']) !!}
                    {!! Form::text('cpf_do_responsavel', old('cpf_do_responsavel'), ['class' => 'form-control', 'placeholder' => '']) !!}
                    <p class="help-block"></p>
                    @if($errors->has('cpf_do_responsavel'))
                        <p class="help-block">
                            {{ $errors->first('cpf_do_responsavel') }}
                        </p>
                    @endif
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 form-group">
                    {!! Form::label('telefone_do_responsavel', trans('quickadmin.alunos.fields.telefone-do-responsavel').'', ['class' => 'control-label']) !!}
                    {!! Form::text('telefone_do_responsavel', old('telefone_do_responsavel'), ['class' => 'form-control', 'placeholder' => '']) !!}
                    <p class="help-block"></p>
                    @if($errors->has('telefone_do_responsavel'))
                        <p class="help-block">
                            {{ $errors->first('telefone_do_responsavel') }}
                        </p>
                    @endif
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 form-group">
                    {!! Form::label('email_do_responsavel', trans('quickadmin.alunos.fields.email-do-responsavel').'', ['class' => 'control-label']) !!}
                    {!! Form::text('email_do_responsavel', old('email_do_responsavel'), ['class' => 'form-control', 'placeholder' => '']) !!}
                    <p class="help-block"></p>
                    @if($errors->has('email_do_responsavel'))
                        <p class="help-block">
                            {{ $errors->first('email_do_responsavel') }}
                        </p>
                    @endif
                </div>
            </div>
            
        </div>
    </div>

    {!! Form::submit(trans('quickadmin.qa_update'), ['class' => 'btn btn-danger']) !!}
    {!! Form::close() !!}
@stop

