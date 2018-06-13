@extends('layouts.app')

@section('content')
    <h3 class="page-title">@lang('quickadmin.depoimentos.title')</h3>
    
    {!! Form::model($depoimento, ['method' => 'PUT', 'route' => ['admin.depoimentos.update', $depoimento->id], 'files' => true,]) !!}

    <div class="panel panel-default">
        <div class="panel-heading">
            @lang('quickadmin.qa_edit')
        </div>

        <div class="panel-body">
            <div class="row">
                <div class="col-xs-12 form-group">
                    @if ($depoimento->foto)
                        <a href="{{ asset(env('UPLOAD_PATH').'/'.$depoimento->foto) }}" target="_blank"><img src="{{ asset(env('UPLOAD_PATH').'/thumb/'.$depoimento->foto) }}"></a>
                    @endif
                    {!! Form::label('foto', trans('quickadmin.depoimentos.fields.foto').'', ['class' => 'control-label']) !!}
                    {!! Form::file('foto', ['class' => 'form-control', 'style' => 'margin-top: 4px;']) !!}
                    {!! Form::hidden('foto_max_size', 6) !!}
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
            <div class="row">
                <div class="col-xs-12 form-group">
                    {!! Form::label('nome', trans('quickadmin.depoimentos.fields.nome').'', ['class' => 'control-label']) !!}
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
                    {!! Form::label('depoimento', trans('quickadmin.depoimentos.fields.depoimento').'', ['class' => 'control-label']) !!}
                    {!! Form::textarea('depoimento', old('depoimento'), ['class' => 'form-control ', 'placeholder' => '']) !!}
                    <p class="help-block"></p>
                    @if($errors->has('depoimento'))
                        <p class="help-block">
                            {{ $errors->first('depoimento') }}
                        </p>
                    @endif
                </div>
            </div>
            
        </div>
    </div>

    {!! Form::submit(trans('quickadmin.qa_update'), ['class' => 'btn btn-danger']) !!}
    {!! Form::close() !!}
@stop

