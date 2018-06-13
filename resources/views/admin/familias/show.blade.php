@extends('layouts.app')

@section('content')
    <h3 class="page-title">@lang('quickadmin.familia.title')</h3>

    <div class="panel panel-default">
        <div class="panel-heading">
            @lang('quickadmin.qa_view')
        </div>

        <div class="panel-body table-responsive">
            <div class="row">
                <div class="col-md-6">
                    <table class="table table-bordered table-striped">
                        <tr>
                            <th>@lang('quickadmin.familia.fields.nome')</th>
                            <td field-key='nome'>{{ $familia->nome }}</td>
                        </tr>
                        <tr>
                            <th>@lang('quickadmin.familia.fields.funcao')</th>
                            <td field-key='funcao'>{{ $familia->funcao }}</td>
                        </tr>
                        <tr>
                            <th>@lang('quickadmin.familia.fields.descricao')</th>
                            <td field-key='descricao'>{!! $familia->descricao !!}</td>
                        </tr>
                        <tr>
                            <th>@lang('quickadmin.familia.fields.facebook')</th>
                            <td field-key='facebook'>{{ $familia->facebook }}</td>
                        </tr>
                        <tr>
                            <th>@lang('quickadmin.familia.fields.twitter')</th>
                            <td field-key='twitter'>{{ $familia->twitter }}</td>
                        </tr>
                        <tr>
                            <th>@lang('quickadmin.familia.fields.email')</th>
                            <td field-key='email'>{{ $familia->email }}</td>
                        </tr>
                        <tr>
                            <th>@lang('quickadmin.familia.fields.foto')</th>
                            <td field-key='foto'>@if($familia->foto)<a href="{{ asset(env('UPLOAD_PATH').'/' . $familia->foto) }}" target="_blank"><img src="{{ asset(env('UPLOAD_PATH').'/thumb/' . $familia->foto) }}"/></a>@endif</td>
                        </tr>
                    </table>
                </div>
            </div>

            <p>&nbsp;</p>

            <a href="{{ route('admin.familias.index') }}" class="btn btn-default">@lang('quickadmin.qa_back_to_list')</a>
        </div>
    </div>
@stop
