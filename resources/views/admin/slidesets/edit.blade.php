@extends('layouts.app')

@section('content')
    <h3 class="page-title">@lang('quickadmin.slideset.title')</h3>
    
    {!! Form::model($slideset, ['method' => 'PUT', 'route' => ['admin.slidesets.update', $slideset->id], 'files' => true,]) !!}

    <div class="panel panel-default">
        <div class="panel-heading">
            @lang('quickadmin.qa_edit')
        </div>

        <div class="panel-body">
            <div class="row">
                <div class="col-xs-12 form-group">
                    @if ($slideset->imagem)
                        <a href="{{ asset(env('UPLOAD_PATH').'/'.$slideset->imagem) }}" target="_blank"><img src="{{ asset(env('UPLOAD_PATH').'/thumb/'.$slideset->imagem) }}"></a>
                    @endif
                    {!! Form::label('imagem', trans('quickadmin.slideset.fields.imagem').'', ['class' => 'control-label']) !!}
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

    {!! Form::submit(trans('quickadmin.qa_update'), ['class' => 'btn btn-danger']) !!}
    {!! Form::close() !!}
@stop

