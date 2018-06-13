@extends('layouts.app')

@section('content')
    <h3 class="page-title">@lang('quickadmin.professores.title')</h3>

    <div class="panel panel-default">
        <div class="panel-heading">
            @lang('quickadmin.qa_view')
        </div>

        <div class="panel-body table-responsive">
            <div class="row">
                <div class="col-md-6">
                    <table class="table table-bordered table-striped">
                        <tr>
                            <th>@lang('quickadmin.professores.fields.nome')</th>
                            <td field-key='nome'>{{ $professore->nome }}</td>
                        </tr>
                        <tr>
                            <th>@lang('quickadmin.professores.fields.escola')</th>
                            <td field-key='escola'>{{ $professore->escola->nome_fantasia or '' }}</td>
                        </tr>
                        <tr>
                            <th>@lang('quickadmin.professores.fields.materias')</th>
                            <td field-key='materias'>{{ $professore->materias }}</td>
                        </tr>
                        <tr>
                            <th>@lang('quickadmin.professores.fields.turmas')</th>
                            <td field-key='turmas'>{{ $professore->turmas }}</td>
                        </tr>
                    </table>
                </div>
            </div>

            <p>&nbsp;</p>

            <a href="{{ route('admin.professores.index') }}" class="btn btn-default">@lang('quickadmin.qa_back_to_list')</a>
        </div>
    </div>
@stop
