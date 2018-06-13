@extends('layouts.app')

@section('content')
    <h3 class="page-title">@lang('quickadmin.apps.title')</h3>
    
    {!! Form::model($app, ['method' => 'PUT', 'route' => ['admin.apps.update', $app->id]]) !!}

    <div class="panel panel-default">
        <div class="panel-heading">
            @lang('quickadmin.qa_edit')
        </div>

        <div class="panel-body">
            <div class="row">
                <div class="col-xs-12 form-group">
                    {!! Form::label('aluno_id', trans('quickadmin.apps.fields.aluno').'', ['class' => 'control-label']) !!}
                    {!! Form::select('aluno_id', $alunos, old('aluno_id'), ['class' => 'form-control select2']) !!}
                    <p class="help-block"></p>
                    @if($errors->has('aluno_id'))
                        <p class="help-block">
                            {{ $errors->first('aluno_id') }}
                        </p>
                    @endif
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 form-group">
                    {!! Form::label('escola_id', trans('quickadmin.apps.fields.escola').'', ['class' => 'control-label']) !!}
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
                    {!! Form::label('personagem', trans('quickadmin.apps.fields.personagem').'', ['class' => 'control-label']) !!}
                    {!! Form::text('personagem', old('personagem'), ['class' => 'form-control', 'placeholder' => '']) !!}
                    <p class="help-block"></p>
                    @if($errors->has('personagem'))
                        <p class="help-block">
                            {{ $errors->first('personagem') }}
                        </p>
                    @endif
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 form-group">
                    {!! Form::label('pontuacaomax', trans('quickadmin.apps.fields.pontuacaomax').'', ['class' => 'control-label']) !!}
                    {!! Form::text('pontuacaomax', old('pontuacaomax'), ['class' => 'form-control', 'placeholder' => '']) !!}
                    <p class="help-block"></p>
                    @if($errors->has('pontuacaomax'))
                        <p class="help-block">
                            {{ $errors->first('pontuacaomax') }}
                        </p>
                    @endif
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 form-group">
                    {!! Form::label('itemcabeca', trans('quickadmin.apps.fields.itemcabeca').'', ['class' => 'control-label']) !!}
                    {!! Form::text('itemcabeca', old('itemcabeca'), ['class' => 'form-control', 'placeholder' => '']) !!}
                    <p class="help-block"></p>
                    @if($errors->has('itemcabeca'))
                        <p class="help-block">
                            {{ $errors->first('itemcabeca') }}
                        </p>
                    @endif
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 form-group">
                    {!! Form::label('itemtorso', trans('quickadmin.apps.fields.itemtorso').'', ['class' => 'control-label']) !!}
                    {!! Form::text('itemtorso', old('itemtorso'), ['class' => 'form-control', 'placeholder' => '']) !!}
                    <p class="help-block"></p>
                    @if($errors->has('itemtorso'))
                        <p class="help-block">
                            {{ $errors->first('itemtorso') }}
                        </p>
                    @endif
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 form-group">
                    {!! Form::label('itemperna', trans('quickadmin.apps.fields.itemperna').'', ['class' => 'control-label']) !!}
                    {!! Form::text('itemperna', old('itemperna'), ['class' => 'form-control', 'placeholder' => '']) !!}
                    <p class="help-block"></p>
                    @if($errors->has('itemperna'))
                        <p class="help-block">
                            {{ $errors->first('itemperna') }}
                        </p>
                    @endif
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 form-group">
                    {!! Form::label('runas', trans('quickadmin.apps.fields.runas').'', ['class' => 'control-label']) !!}
                    {!! Form::text('runas', old('runas'), ['class' => 'form-control', 'placeholder' => '']) !!}
                    <p class="help-block"></p>
                    @if($errors->has('runas'))
                        <p class="help-block">
                            {{ $errors->first('runas') }}
                        </p>
                    @endif
                </div>
            </div>
            
        </div>
    </div>

    {!! Form::submit(trans('quickadmin.qa_update'), ['class' => 'btn btn-danger']) !!}
    {!! Form::close() !!}
@stop

