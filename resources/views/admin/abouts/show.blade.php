@extends('layouts.app')

@section('content')
    <h3 class="page-title">@lang('quickadmin.about.title')</h3>

    <div class="panel panel-default">
        <div class="panel-heading">
            @lang('quickadmin.qa_view')
        </div>

        <div class="panel-body table-responsive">
            <div class="row">
                <div class="col-md-6">
                    <table class="table table-bordered table-striped">
                        <tr>
                            <th>@lang('quickadmin.about.fields.titulo')</th>
                            <td field-key='titulo'>{{ $about->titulo }}</td>
                        </tr>
                        <tr>
                            <th>@lang('quickadmin.about.fields.subtitulo')</th>
                            <td field-key='subtitulo'>{{ $about->subtitulo }}</td>
                        </tr>
                        <tr>
                            <th>@lang('quickadmin.about.fields.conteudo')</th>
                            <td field-key='conteudo'>{!! $about->conteudo !!}</td>
                        </tr>
                        <tr>
                            <th>@lang('quickadmin.about.fields.imagem')</th>
                            <td field-key='imagem'>@if($about->imagem)<a href="{{ asset(env('UPLOAD_PATH').'/' . $about->imagem) }}" target="_blank"><img src="{{ asset(env('UPLOAD_PATH').'/thumb/' . $about->imagem) }}"/></a>@endif</td>
                        </tr>
                        <tr>
                            <th>@lang('quickadmin.about.fields.numero')</th>
                            <td field-key='numero'>{{ $about->numero }}</td>
                        </tr>
                        <tr>
                            <th>@lang('quickadmin.about.fields.chamada')</th>
                            <td field-key='chamada'>{{ $about->chamada }}</td>
                        </tr>
                        <tr>
                            <th>@lang('quickadmin.about.fields.beneficios')</th>
                            <td field-key='beneficios'>{!! $about->beneficios !!}</td>
                        </tr>
                    </table>
                </div>
            </div>

            <p>&nbsp;</p>

            <a href="{{ route('admin.abouts.index') }}" class="btn btn-default">@lang('quickadmin.qa_back_to_list')</a>
        </div>
    </div>
@stop
