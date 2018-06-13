@extends('layouts.app')

@section('content')
    <h3 class="page-title">@lang('quickadmin.apps.title')</h3>

    <div class="panel panel-default">
        <div class="panel-heading">
            @lang('quickadmin.qa_view')
        </div>

        <div class="panel-body table-responsive">
            <div class="row">
                <div class="col-md-6">
                    <table class="table table-bordered table-striped">
                        <tr>
                            <th>@lang('quickadmin.apps.fields.aluno')</th>
                            <td field-key='aluno'>{{ $app->aluno->nome or '' }}</td>
                        </tr>
                        <tr>
                            <th>@lang('quickadmin.apps.fields.escola')</th>
                            <td field-key='escola'>{{ $app->escola->nome_fantasia or '' }}</td>
                        </tr>
                        <tr>
                            <th>@lang('quickadmin.apps.fields.personagem')</th>
                            <td field-key='personagem'>{{ $app->personagem }}</td>
                        </tr>
                        <tr>
                            <th>@lang('quickadmin.apps.fields.pontuacaomax')</th>
                            <td field-key='pontuacaomax'>{{ $app->pontuacaomax }}</td>
                        </tr>
                        <tr>
                            <th>@lang('quickadmin.apps.fields.itemcabeca')</th>
                            <td field-key='itemcabeca'>{{ $app->itemcabeca }}</td>
                        </tr>
                        <tr>
                            <th>@lang('quickadmin.apps.fields.itemtorso')</th>
                            <td field-key='itemtorso'>{{ $app->itemtorso }}</td>
                        </tr>
                        <tr>
                            <th>@lang('quickadmin.apps.fields.itemperna')</th>
                            <td field-key='itemperna'>{{ $app->itemperna }}</td>
                        </tr>
                        <tr>
                            <th>@lang('quickadmin.apps.fields.runas')</th>
                            <td field-key='runas'>{{ $app->runas }}</td>
                        </tr>
                    </table>
                </div>
            </div>

            <p>&nbsp;</p>

            <a href="{{ route('admin.apps.index') }}" class="btn btn-default">@lang('quickadmin.qa_back_to_list')</a>
        </div>
    </div>
@stop
