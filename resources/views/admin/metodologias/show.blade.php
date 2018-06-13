@extends('layouts.app')

@section('content')
    <h3 class="page-title">@lang('quickadmin.metodologia.title')</h3>

    <div class="panel panel-default">
        <div class="panel-heading">
            @lang('quickadmin.qa_view')
        </div>

        <div class="panel-body table-responsive">
            <div class="row">
                <div class="col-md-6">
                    <table class="table table-bordered table-striped">
                        <tr>
                            <th>@lang('quickadmin.metodologia.fields.titulo')</th>
                            <td field-key='titulo'>{{ $metodologia->titulo }}</td>
                        </tr>
                        <tr>
                            <th>@lang('quickadmin.metodologia.fields.conteudo')</th>
                            <td field-key='conteudo'>{!! $metodologia->conteudo !!}</td>
                        </tr>
                        <tr>
                            <th>@lang('quickadmin.metodologia.fields.imagem')</th>
                            <td field-key='imagem'>@if($metodologia->imagem)<a href="{{ asset(env('UPLOAD_PATH').'/' . $metodologia->imagem) }}" target="_blank"><img src="{{ asset(env('UPLOAD_PATH').'/thumb/' . $metodologia->imagem) }}"/></a>@endif</td>
                        </tr>
                    </table>
                </div>
            </div>

            <p>&nbsp;</p>

            <a href="{{ route('admin.metodologias.index') }}" class="btn btn-default">@lang('quickadmin.qa_back_to_list')</a>
        </div>
    </div>
@stop
