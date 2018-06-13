@extends('layouts.app')

@section('content')
    <h3 class="page-title">@lang('quickadmin.familia.title')</h3>
    {!! Form::open(['method' => 'POST', 'route' => ['admin.familias.store'], 'files' => true,]) !!}

    <div class="panel panel-default">
        <div class="panel-heading">
            @lang('quickadmin.qa_create')
        </div>
        
        <div class="panel-body">
            <div class="row">
                <div class="col-xs-12 form-group">
                    {!! Form::label('nome', trans('quickadmin.familia.fields.nome').'', ['class' => 'control-label']) !!}
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
                    {!! Form::label('funcao', trans('quickadmin.familia.fields.funcao').'', ['class' => 'control-label']) !!}
                    {!! Form::text('funcao', old('funcao'), ['class' => 'form-control', 'placeholder' => '']) !!}
                    <p class="help-block"></p>
                    @if($errors->has('funcao'))
                        <p class="help-block">
                            {{ $errors->first('funcao') }}
                        </p>
                    @endif
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 form-group">
                    {!! Form::label('descricao', trans('quickadmin.familia.fields.descricao').'', ['class' => 'control-label']) !!}
                    {!! Form::textarea('descricao', old('descricao'), ['class' => 'form-control ', 'placeholder' => '']) !!}
                    <p class="help-block"></p>
                    @if($errors->has('descricao'))
                        <p class="help-block">
                            {{ $errors->first('descricao') }}
                        </p>
                    @endif
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 form-group">
                    {!! Form::label('facebook', trans('quickadmin.familia.fields.facebook').'', ['class' => 'control-label']) !!}
                    {!! Form::text('facebook', old('facebook'), ['class' => 'form-control', 'placeholder' => '']) !!}
                    <p class="help-block"></p>
                    @if($errors->has('facebook'))
                        <p class="help-block">
                            {{ $errors->first('facebook') }}
                        </p>
                    @endif
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 form-group">
                    {!! Form::label('twitter', trans('quickadmin.familia.fields.twitter').'', ['class' => 'control-label']) !!}
                    {!! Form::text('twitter', old('twitter'), ['class' => 'form-control', 'placeholder' => '']) !!}
                    <p class="help-block"></p>
                    @if($errors->has('twitter'))
                        <p class="help-block">
                            {{ $errors->first('twitter') }}
                        </p>
                    @endif
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 form-group">
                    {!! Form::label('email', trans('quickadmin.familia.fields.email').'', ['class' => 'control-label']) !!}
                    {!! Form::text('email', old('email'), ['class' => 'form-control', 'placeholder' => '']) !!}
                    <p class="help-block"></p>
                    @if($errors->has('email'))
                        <p class="help-block">
                            {{ $errors->first('email') }}
                        </p>
                    @endif
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 form-group">
                    {!! Form::label('foto', trans('quickadmin.familia.fields.foto').'', ['class' => 'control-label']) !!}
                    {!! Form::file('foto', ['class' => 'form-control', 'style' => 'margin-top: 4px;']) !!}
                    {!! Form::hidden('foto_max_size', 7) !!}
                    {!! Form::hidden('foto_max_width', 4096) !!}
                    {!! Form::hidden('foto_max_height', 4096) !!}
                    <p class="help-block"></p>
                    @if($errors->has('foto'))
                        <p class="help-block">
                            {{ $errors->first('foto') }}
                        </p>
                    @endif
                </div>
            </div>
            
        </div>
    </div>

    {!! Form::submit(trans('quickadmin.qa_save'), ['class' => 'btn btn-danger']) !!}
    {!! Form::close() !!}
@stop

