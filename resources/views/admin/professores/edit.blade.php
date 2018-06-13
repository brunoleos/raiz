@extends('layouts.app')

@section('content')
    <h3 class="page-title">@lang('quickadmin.professores.title')</h3>
    
    {!! Form::model($professore, ['method' => 'PUT', 'route' => ['admin.professores.update', $professore->id]]) !!}

    <div class="panel panel-default">
        <div class="panel-heading">
            @lang('quickadmin.qa_edit')
        </div>

        <div class="panel-body">
            <div class="row">
                <div class="col-xs-12 form-group">
                    {!! Form::label('nome', trans('quickadmin.professores.fields.nome').'', ['class' => 'control-label']) !!}
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
                    {!! Form::label('escola_id', trans('quickadmin.professores.fields.escola').'', ['class' => 'control-label']) !!}
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
                    {!! Form::label('materias', trans('quickadmin.professores.fields.materias').'', ['class' => 'control-label']) !!}
                    {!! Form::text('materias', old('materias'), ['class' => 'form-control', 'placeholder' => '']) !!}
                    <p class="help-block"></p>
                    @if($errors->has('materias'))
                        <p class="help-block">
                            {{ $errors->first('materias') }}
                        </p>
                    @endif
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 form-group">
                    {!! Form::label('turmas', trans('quickadmin.professores.fields.turmas').'', ['class' => 'control-label']) !!}
                    {!! Form::text('turmas', old('turmas'), ['class' => 'form-control', 'placeholder' => '']) !!}
                    <p class="help-block"></p>
                    @if($errors->has('turmas'))
                        <p class="help-block">
                            {{ $errors->first('turmas') }}
                        </p>
                    @endif
                </div>
            </div>
            
        </div>
    </div>

    {!! Form::submit(trans('quickadmin.qa_update'), ['class' => 'btn btn-danger']) !!}
    {!! Form::close() !!}
@stop

