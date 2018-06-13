@extends('layouts.app')

@section('content')
    <h3 class="page-title">@lang('quickadmin.slideshow.title')</h3>
    {!! Form::open(['method' => 'POST', 'route' => ['admin.slideshows.store'], 'files' => true,]) !!}

    <div class="panel panel-default">
        <div class="panel-heading">
            @lang('quickadmin.qa_create')
        </div>
        
        <div class="panel-body">
            <div class="row">
                <div class="col-xs-12 form-group">
                    {!! Form::label('titulo', trans('quickadmin.slideshow.fields.titulo').'', ['class' => 'control-label']) !!}
                    {!! Form::text('titulo', old('titulo'), ['class' => 'form-control', 'placeholder' => '']) !!}
                    <p class="help-block"></p>
                    @if($errors->has('titulo'))
                        <p class="help-block">
                            {{ $errors->first('titulo') }}
                        </p>
                    @endif
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 form-group">
                    {!! Form::label('chamada', trans('quickadmin.slideshow.fields.chamada').'', ['class' => 'control-label']) !!}
                    {!! Form::textarea('chamada', old('chamada'), ['class' => 'form-control ', 'placeholder' => '']) !!}
                    <p class="help-block"></p>
                    @if($errors->has('chamada'))
                        <p class="help-block">
                            {{ $errors->first('chamada') }}
                        </p>
                    @endif
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 form-group">
                    {!! Form::label('imagem', trans('quickadmin.slideshow.fields.imagem').'', ['class' => 'control-label']) !!}
                    {!! Form::file('imagem', ['class' => 'form-control', 'style' => 'margin-top: 4px;']) !!}
                    {!! Form::hidden('imagem_max_size', 5) !!}
                    {!! Form::hidden('imagem_max_width', 4096) !!}
                    {!! Form::hidden('imagem_max_height', 4096) !!}
                    <p class="help-block"></p>
                    @if($errors->has('imagem'))
                        <p class="help-block">
                            {{ $errors->first('imagem') }}
                        </p>
                    @endif
                </div>
            </div>
            
        </div>
    </div>

    {!! Form::submit(trans('quickadmin.qa_save'), ['class' => 'btn btn-danger']) !!}
    {!! Form::close() !!}
@stop

