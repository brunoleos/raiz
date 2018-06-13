@extends('layouts.app')

@section('content')
    <h3 class="page-title">@lang('quickadmin.escolas.title')</h3>
    
    {!! Form::model($escola, ['method' => 'PUT', 'route' => ['admin.escolas.update', $escola->id], 'files' => true,]) !!}

    <div class="panel panel-default">
        <div class="panel-heading">
            @lang('quickadmin.qa_edit')
        </div>

        <div class="panel-body">
            <div class="row">
                <div class="col-xs-12 form-group">
                    {!! Form::label('razao_social', trans('quickadmin.escolas.fields.razao-social').'', ['class' => 'control-label']) !!}
                    {!! Form::text('razao_social', old('razao_social'), ['class' => 'form-control', 'placeholder' => '']) !!}
                    <p class="help-block"></p>
                    @if($errors->has('razao_social'))
                        <p class="help-block">
                            {{ $errors->first('razao_social') }}
                        </p>
                    @endif
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 form-group">
                    {!! Form::label('nome_fantasia', trans('quickadmin.escolas.fields.nome-fantasia').'', ['class' => 'control-label']) !!}
                    {!! Form::text('nome_fantasia', old('nome_fantasia'), ['class' => 'form-control', 'placeholder' => '']) !!}
                    <p class="help-block"></p>
                    @if($errors->has('nome_fantasia'))
                        <p class="help-block">
                            {{ $errors->first('nome_fantasia') }}
                        </p>
                    @endif
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 form-group">
                    {!! Form::label('cnpj', trans('quickadmin.escolas.fields.cnpj').'*', ['class' => 'control-label']) !!}
                    {!! Form::text('cnpj', old('cnpj'), ['class' => 'form-control', 'placeholder' => '', 'required' => '']) !!}
                    <p class="help-block"></p>
                    @if($errors->has('cnpj'))
                        <p class="help-block">
                            {{ $errors->first('cnpj') }}
                        </p>
                    @endif
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 form-group">
                    {!! Form::label('endereco', trans('quickadmin.escolas.fields.endereco').'', ['class' => 'control-label']) !!}
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
                    @if ($escola->logo)
                        <a href="{{ asset(env('UPLOAD_PATH').'/'.$escola->logo) }}" target="_blank"><img src="{{ asset(env('UPLOAD_PATH').'/thumb/'.$escola->logo) }}"></a>
                    @endif
                    {!! Form::label('logo', trans('quickadmin.escolas.fields.logo').'', ['class' => 'control-label']) !!}
                    {!! Form::hidden('logo', old('logo')) !!}
                    {!! Form::file('logo', ['class' => 'form-control', 'style' => 'margin-top: 4px;']) !!}
                    {!! Form::hidden('logo_max_size', 5) !!}
                    {!! Form::hidden('logo_max_width', 4096) !!}
                    {!! Form::hidden('logo_max_height', 4096) !!}
                    <p class="help-block"></p>
                    @if($errors->has('logo'))
                        <p class="help-block">
                            {{ $errors->first('logo') }}
                        </p>
                    @endif
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 form-group">
                    {!! Form::label('telefone', trans('quickadmin.escolas.fields.telefone').'', ['class' => 'control-label']) !!}
                    {!! Form::text('telefone', old('telefone'), ['class' => 'form-control', 'placeholder' => '']) !!}
                    <p class="help-block"></p>
                    @if($errors->has('telefone'))
                        <p class="help-block">
                            {{ $errors->first('telefone') }}
                        </p>
                    @endif
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 form-group">
                    {!! Form::label('responsavel', trans('quickadmin.escolas.fields.responsavel').'', ['class' => 'control-label']) !!}
                    {!! Form::text('responsavel', old('responsavel'), ['class' => 'form-control', 'placeholder' => '']) !!}
                    <p class="help-block"></p>
                    @if($errors->has('responsavel'))
                        <p class="help-block">
                            {{ $errors->first('responsavel') }}
                        </p>
                    @endif
                </div>
            </div>
            
        </div>
    </div>

    {!! Form::submit(trans('quickadmin.qa_update'), ['class' => 'btn btn-danger']) !!}
    {!! Form::close() !!}
@stop

