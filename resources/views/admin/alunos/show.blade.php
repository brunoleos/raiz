@extends('layouts.app')

@section('content')
    <h3 class="page-title">@lang('quickadmin.alunos.title')</h3>

    <div class="panel panel-default">
        <div class="panel-heading">
            @lang('quickadmin.qa_view')
        </div>

        <div class="panel-body table-responsive">
            <div class="row">
                <div class="col-md-6">
                    <table class="table table-bordered table-striped">
                        <tr>
                            <th>@lang('quickadmin.alunos.fields.nome')</th>
                            <td field-key='nome'>{{ $aluno->nome }}</td>
                        </tr>
                        <tr>
                            <th>@lang('quickadmin.alunos.fields.escola')</th>
                            <td field-key='escola'>{{ $aluno->escola->nome_fantasia or '' }}</td>
                        </tr>
                        <tr>
                            <th>@lang('quickadmin.alunos.fields.idade')</th>
                            <td field-key='idade'>{{ $aluno->idade }}</td>
                        </tr>
                        <tr>
                            <th>@lang('quickadmin.alunos.fields.serie')</th>
                            <td field-key='serie'>{{ $aluno->serie }}</td>
                        </tr>
                        <tr>
                            <th>@lang('quickadmin.alunos.fields.turma')</th>
                            <td field-key='turma'>{{ $aluno->turma }}</td>
                        </tr>
                        <tr>
                            <th>@lang('quickadmin.alunos.fields.turno')</th>
                            <td field-key='turno'>{{ $aluno->turno }}</td>
                        </tr>
                        <tr>
                            <th>@lang('quickadmin.alunos.fields.endereco')</th>
                            <td field-key='endereco'>{{ $aluno->endereco }}</td>
                        </tr>
                        <tr>
                            <th>@lang('quickadmin.alunos.fields.nome-do-responsavel')</th>
                            <td field-key='nome_do_responsavel'>{{ $aluno->nome_do_responsavel }}</td>
                        </tr>
                        <tr>
                            <th>@lang('quickadmin.alunos.fields.cpf-do-responsavel')</th>
                            <td field-key='cpf_do_responsavel'>{{ $aluno->cpf_do_responsavel }}</td>
                        </tr>
                        <tr>
                            <th>@lang('quickadmin.alunos.fields.telefone-do-responsavel')</th>
                            <td field-key='telefone_do_responsavel'>{{ $aluno->telefone_do_responsavel }}</td>
                        </tr>
                        <tr>
                            <th>@lang('quickadmin.alunos.fields.email-do-responsavel')</th>
                            <td field-key='email_do_responsavel'>{{ $aluno->email_do_responsavel }}</td>
                        </tr>
                    </table>
                </div>
            </div><!-- Nav tabs -->
<ul class="nav nav-tabs" role="tablist">
    
<li role="presentation" class="active"><a href="#apps" aria-controls="apps" role="tab" data-toggle="tab">Apps</a></li>
</ul>

<!-- Tab panes -->
<div class="tab-content">
    
<div role="tabpanel" class="tab-pane active" id="apps">
<table class="table table-bordered table-striped {{ count($apps) > 0 ? 'datatable' : '' }}">
    <thead>
        <tr>
            <th>@lang('quickadmin.apps.fields.aluno')</th>
                        <th>@lang('quickadmin.apps.fields.escola')</th>
                        <th>@lang('quickadmin.apps.fields.personagem')</th>
                        <th>@lang('quickadmin.apps.fields.pontuacaomax')</th>
                        <th>@lang('quickadmin.apps.fields.itemcabeca')</th>
                        <th>@lang('quickadmin.apps.fields.itemtorso')</th>
                        <th>@lang('quickadmin.apps.fields.itemperna')</th>
                        <th>@lang('quickadmin.apps.fields.runas')</th>
                        @if( request('show_deleted') == 1 )
                        <th>&nbsp;</th>
                        @else
                        <th>&nbsp;</th>
                        @endif
        </tr>
    </thead>

    <tbody>
        @if (count($apps) > 0)
            @foreach ($apps as $app)
                <tr data-entry-id="{{ $app->id }}">
                    <td field-key='aluno'>{{ $app->aluno->nome or '' }}</td>
                                <td field-key='escola'>{{ $app->escola->nome_fantasia or '' }}</td>
                                <td field-key='personagem'>{{ $app->personagem }}</td>
                                <td field-key='pontuacaomax'>{{ $app->pontuacaomax }}</td>
                                <td field-key='itemcabeca'>{{ $app->itemcabeca }}</td>
                                <td field-key='itemtorso'>{{ $app->itemtorso }}</td>
                                <td field-key='itemperna'>{{ $app->itemperna }}</td>
                                <td field-key='runas'>{{ $app->runas }}</td>
                                @if( request('show_deleted') == 1 )
                                <td>
                                    @can('app_delete')
                                                                        {!! Form::open(array(
                                        'style' => 'display: inline-block;',
                                        'method' => 'POST',
                                        'onsubmit' => "return confirm('".trans("quickadmin.qa_are_you_sure")."');",
                                        'route' => ['admin.apps.restore', $app->id])) !!}
                                    {!! Form::submit(trans('quickadmin.qa_restore'), array('class' => 'btn btn-xs btn-success')) !!}
                                    {!! Form::close() !!}
                                @endcan
                                    @can('app_delete')
                                                                        {!! Form::open(array(
                                        'style' => 'display: inline-block;',
                                        'method' => 'DELETE',
                                        'onsubmit' => "return confirm('".trans("quickadmin.qa_are_you_sure")."');",
                                        'route' => ['admin.apps.perma_del', $app->id])) !!}
                                    {!! Form::submit(trans('quickadmin.qa_permadel'), array('class' => 'btn btn-xs btn-danger')) !!}
                                    {!! Form::close() !!}
                                @endcan
                                </td>
                                @else
                                <td>
                                    @can('app_view')
                                    <a href="{{ route('admin.apps.show',[$app->id]) }}" class="btn btn-xs btn-primary">@lang('quickadmin.qa_view')</a>
                                    @endcan
                                    @can('app_edit')
                                    <a href="{{ route('admin.apps.edit',[$app->id]) }}" class="btn btn-xs btn-info">@lang('quickadmin.qa_edit')</a>
                                    @endcan
                                    @can('app_delete')
{!! Form::open(array(
                                        'style' => 'display: inline-block;',
                                        'method' => 'DELETE',
                                        'onsubmit' => "return confirm('".trans("quickadmin.qa_are_you_sure")."');",
                                        'route' => ['admin.apps.destroy', $app->id])) !!}
                                    {!! Form::submit(trans('quickadmin.qa_delete'), array('class' => 'btn btn-xs btn-danger')) !!}
                                    {!! Form::close() !!}
                                    @endcan
                                </td>
                                @endif
                </tr>
            @endforeach
        @else
            <tr>
                <td colspan="13">@lang('quickadmin.qa_no_entries_in_table')</td>
            </tr>
        @endif
    </tbody>
</table>
</div>
</div>

            <p>&nbsp;</p>

            <a href="{{ route('admin.alunos.index') }}" class="btn btn-default">@lang('quickadmin.qa_back_to_list')</a>
        </div>
    </div>
@stop
