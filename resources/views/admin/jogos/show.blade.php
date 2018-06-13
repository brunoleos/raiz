@extends('layouts.app')

@section('content')
    <h3 class="page-title">@lang('quickadmin.jogos.title')</h3>

    <div class="panel panel-default">
        <div class="panel-heading">
            @lang('quickadmin.qa_view')
        </div>

        <div class="panel-body table-responsive">
            <div class="row">
                <div class="col-md-6">
                    <table class="table table-bordered table-striped">
                        <tr>
                            <th>@lang('quickadmin.jogos.fields.titulo')</th>
                            <td field-key='titulo'>{{ $jogo->titulo }}</td>
                        </tr>
                        <tr>
                            <th>@lang('quickadmin.jogos.fields.conteudo')</th>
                            <td field-key='conteudo'>{!! $jogo->conteudo !!}</td>
                        </tr>
                        <tr>
                            <th>@lang('quickadmin.jogos.fields.imagem')</th>
                            <td field-key='imagem'>@if($jogo->imagem)<a href="{{ asset(env('UPLOAD_PATH').'/' . $jogo->imagem) }}" target="_blank"><img src="{{ asset(env('UPLOAD_PATH').'/thumb/' . $jogo->imagem) }}"/></a>@endif</td>
                        </tr>
                        <tr>
                            <th>@lang('quickadmin.jogos.fields.posicao')</th>
                            <td field-key='posicao'>{{ $jogo->posicao }}</td>
                        </tr>
                    </table>
                </div>
            </div>

            <p>&nbsp;</p>

            <a href="{{ route('admin.jogos.index') }}" class="btn btn-default">@lang('quickadmin.qa_back_to_list')</a>
        </div>
    </div>
@stop
