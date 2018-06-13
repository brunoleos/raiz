@extends('layouts.app')

@section('content')
    <h3 class="page-title">@lang('quickadmin.about.title')</h3>
    
    {!! Form::model($about, ['method' => 'PUT', 'route' => ['admin.abouts.update', $about->id], 'files' => true,]) !!}

    <div class="panel panel-default">
        <div class="panel-heading">
            @lang('quickadmin.qa_edit')
        </div>

        <div class="panel-body">
            <div class="row">
                <div class="col-xs-12 form-group">
                    {!! Form::label('titulo', trans('quickadmin.about.fields.titulo').'', ['class' => 'control-label']) !!}
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
                    {!! Form::label('subtitulo', trans('quickadmin.about.fields.subtitulo').'', ['class' => 'control-label']) !!}
                    {!! Form::text('subtitulo', old('subtitulo'), ['class' => 'form-control', 'placeholder' => '']) !!}
                    <p class="help-block"></p>
                    @if($errors->has('subtitulo'))
                        <p class="help-block">
                            {{ $errors->first('subtitulo') }}
                        </p>
                    @endif
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 form-group">
                    {!! Form::label('conteudo', trans('quickadmin.about.fields.conteudo').'', ['class' => 'control-label']) !!}
                    {!! Form::textarea('conteudo', old('conteudo'), ['class' => 'form-control ', 'placeholder' => '']) !!}
                    <p class="help-block"></p>
                    @if($errors->has('conteudo'))
                        <p class="help-block">
                            {{ $errors->first('conteudo') }}
                        </p>
                    @endif
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 form-group">
                    @if ($about->imagem)
                        <a href="{{ asset(env('UPLOAD_PATH').'/'.$about->imagem) }}" target="_blank"><img src="{{ asset(env('UPLOAD_PATH').'/thumb/'.$about->imagem) }}"></a>
                    @endif
                    {!! Form::label('imagem', trans('quickadmin.about.fields.imagem').'', ['class' => 'control-label']) !!}
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
            <div class="row">
                <div class="col-xs-12 form-group">
                    {!! Form::label('numero', trans('quickadmin.about.fields.numero').'', ['class' => 'control-label']) !!}
                    {!! Form::text('numero', old('numero'), ['class' => 'form-control', 'placeholder' => '']) !!}
                    <p class="help-block"></p>
                    @if($errors->has('numero'))
                        <p class="help-block">
                            {{ $errors->first('numero') }}
                        </p>
                    @endif
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 form-group">
                    {!! Form::label('chamada', trans('quickadmin.about.fields.chamada').'', ['class' => 'control-label']) !!}
                    {!! Form::text('chamada', old('chamada'), ['class' => 'form-control', 'placeholder' => '']) !!}
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
                    {!! Form::label('beneficios', trans('quickadmin.about.fields.beneficios').'', ['class' => 'control-label']) !!}
                    {!! Form::textarea('beneficios', old('beneficios'), ['class' => 'form-control editor', 'placeholder' => '']) !!}
                    <p class="help-block"></p>
                    @if($errors->has('beneficios'))
                        <p class="help-block">
                            {{ $errors->first('beneficios') }}
                        </p>
                    @endif
                </div>
            </div>
            
        </div>
    </div>

    {!! Form::submit(trans('quickadmin.qa_update'), ['class' => 'btn btn-danger']) !!}
    {!! Form::close() !!}
@stop

@section('javascript')
    @parent
    <script src="//cdn.ckeditor.com/4.5.4/full/ckeditor.js"></script>
    <script>
        $('.editor').each(function () {
                  CKEDITOR.replace($(this).attr('id'),{
                    filebrowserImageBrowseUrl: '/laravel-filemanager?type=Images',
                    filebrowserImageUploadUrl: '/laravel-filemanager/upload?type=Images&_token={{csrf_token()}}',
                    filebrowserBrowseUrl: '/laravel-filemanager?type=Files',
                    filebrowserUploadUrl: '/laravel-filemanager/upload?type=Files&_token={{csrf_token()}}'
            });
        });
    </script>

@stop