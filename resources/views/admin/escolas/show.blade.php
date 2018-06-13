@extends('layouts.app')

@section('content')
    <h3 class="page-title">@lang('quickadmin.escolas.title')</h3>

    <div class="panel panel-default">
        <div class="panel-heading">
            @lang('quickadmin.qa_view')
        </div>

        <div class="panel-body table-responsive">
            <div class="row">
                <div class="col-md-6">
                    <table class="table table-bordered table-striped">
                        <tr>
                            <th>@lang('quickadmin.escolas.fields.razao-social')</th>
                            <td field-key='razao_social'>{{ $escola->razao_social }}</td>
                        </tr>
                        <tr>
                            <th>@lang('quickadmin.escolas.fields.nome-fantasia')</th>
                            <td field-key='nome_fantasia'>{{ $escola->nome_fantasia }}</td>
                        </tr>
                        <tr>
                            <th>@lang('quickadmin.escolas.fields.cnpj')</th>
                            <td field-key='cnpj'>{{ $escola->cnpj }}</td>
                        </tr>
                        <tr>
                            <th>@lang('quickadmin.escolas.fields.endereco')</th>
                            <td field-key='endereco'>{{ $escola->endereco }}</td>
                        </tr>
                        <tr>
                            <th>@lang('quickadmin.escolas.fields.logo')</th>
                            <td field-key='logo'>@if($escola->logo)<a href="{{ asset(env('UPLOAD_PATH').'/' . $escola->logo) }}" target="_blank"><img src="{{ asset(env('UPLOAD_PATH').'/thumb/' . $escola->logo) }}"/></a>@endif</td>
                        </tr>
                        <tr>
                            <th>@lang('quickadmin.escolas.fields.telefone')</th>
                            <td field-key='telefone'>{{ $escola->telefone }}</td>
                        </tr>
                        <tr>
                            <th>@lang('quickadmin.escolas.fields.responsavel')</th>
                            <td field-key='responsavel'>{{ $escola->responsavel }}</td>
                        </tr>
                    </table>
                </div>
            </div><!-- Nav tabs -->
<ul class="nav nav-tabs" role="tablist">
    
<li role="presentation" class="active"><a href="#professores" aria-controls="professores" role="tab" data-toggle="tab">Professores</a></li>
<li role="presentation" class=""><a href="#alunos" aria-controls="alunos" role="tab" data-toggle="tab">Alunos</a></li>
<li role="presentation" class=""><a href="#apps" aria-controls="apps" role="tab" data-toggle="tab">Apps</a></li>
</ul>

<!-- Tab panes -->
<div class="tab-content">
    
<div role="tabpanel" class="tab-pane active" id="professores">
<table class="table table-bordered table-striped {{ count($professores) > 0 ? 'datatable' : '' }}">
    <thead>
        <tr>
            <th>@lang('quickadmin.professores.fields.nome')</th>
                        <th>@lang('quickadmin.professores.fields.escola')</th>
                        <th>@lang('quickadmin.escolas.fields.razao-social')</th>
                        <th>@lang('quickadmin.professores.fields.materias')</th>
                        <th>@lang('quickadmin.professores.fields.turmas')</th>
                        @if( request('show_deleted') == 1 )
                        <th>&nbsp;</th>
                        @else
                        <th>&nbsp;</th>
                        @endif
        </tr>
    </thead>

    <tbody>
        @if (count($professores) > 0)
            @foreach ($professores as $professore)
                <tr data-entry-id="{{ $professore->id }}">
                    <td field-key='nome'>{{ $professore->nome }}</td>
                                <td field-key='escola'>{{ $professore->escola->nome_fantasia or '' }}</td>
<td field-key='razao_social'>{{ isset($professore->escola) ? $professore->escola->razao_social : '' }}</td>
                                <td field-key='materias'>{{ $professore->materias }}</td>
                                <td field-key='turmas'>{{ $professore->turmas }}</td>
                                @if( request('show_deleted') == 1 )
                                <td>
                                    @can('professore_delete')
                                                                        {!! Form::open(array(
                                        'style' => 'display: inline-block;',
                                        'method' => 'POST',
                                        'onsubmit' => "return confirm('".trans("quickadmin.qa_are_you_sure")."');",
                                        'route' => ['admin.professores.restore', $professore->id])) !!}
                                    {!! Form::submit(trans('quickadmin.qa_restore'), array('class' => 'btn btn-xs btn-success')) !!}
                                    {!! Form::close() !!}
                                @endcan
                                    @can('professore_delete')
                                                                        {!! Form::open(array(
                                        'style' => 'display: inline-block;',
                                        'method' => 'DELETE',
                                        'onsubmit' => "return confirm('".trans("quickadmin.qa_are_you_sure")."');",
                                        'route' => ['admin.professores.perma_del', $professore->id])) !!}
                                    {!! Form::submit(trans('quickadmin.qa_permadel'), array('class' => 'btn btn-xs btn-danger')) !!}
                                    {!! Form::close() !!}
                                @endcan
                                </td>
                                @else
                                <td>
                                    @can('professore_view')
                                    <a href="{{ route('admin.professores.show',[$professore->id]) }}" class="btn btn-xs btn-primary">@lang('quickadmin.qa_view')</a>
                                    @endcan
                                    @can('professore_edit')
                                    <a href="{{ route('admin.professores.edit',[$professore->id]) }}" class="btn btn-xs btn-info">@lang('quickadmin.qa_edit')</a>
                                    @endcan
                                    @can('professore_delete')
{!! Form::open(array(
                                        'style' => 'display: inline-block;',
                                        'method' => 'DELETE',
                                        'onsubmit' => "return confirm('".trans("quickadmin.qa_are_you_sure")."');",
                                        'route' => ['admin.professores.destroy', $professore->id])) !!}
                                    {!! Form::submit(trans('quickadmin.qa_delete'), array('class' => 'btn btn-xs btn-danger')) !!}
                                    {!! Form::close() !!}
                                    @endcan
                                </td>
                                @endif
                </tr>
            @endforeach
        @else
            <tr>
                <td colspan="9">@lang('quickadmin.qa_no_entries_in_table')</td>
            </tr>
        @endif
    </tbody>
</table>
</div>
<div role="tabpanel" class="tab-pane " id="alunos">
<table class="table table-bordered table-striped {{ count($alunos) > 0 ? 'datatable' : '' }}">
    <thead>
        <tr>
            <th>@lang('quickadmin.alunos.fields.nome')</th>
                        <th>@lang('quickadmin.alunos.fields.escola')</th>
                        <th>@lang('quickadmin.alunos.fields.idade')</th>
                        <th>@lang('quickadmin.alunos.fields.serie')</th>
                        <th>@lang('quickadmin.alunos.fields.turma')</th>
                        <th>@lang('quickadmin.alunos.fields.turno')</th>
                        <th>@lang('quickadmin.alunos.fields.endereco')</th>
                        <th>@lang('quickadmin.alunos.fields.nome-do-responsavel')</th>
                        <th>@lang('quickadmin.alunos.fields.cpf-do-responsavel')</th>
                        <th>@lang('quickadmin.alunos.fields.telefone-do-responsavel')</th>
                        <th>@lang('quickadmin.alunos.fields.email-do-responsavel')</th>
                        @if( request('show_deleted') == 1 )
                        <th>&nbsp;</th>
                        @else
                        <th>&nbsp;</th>
                        @endif
        </tr>
    </thead>

    <tbody>
        @if (count($alunos) > 0)
            @foreach ($alunos as $aluno)
                <tr data-entry-id="{{ $aluno->id }}">
                    <td field-key='nome'>{{ $aluno->nome }}</td>
                                <td field-key='escola'>{{ $aluno->escola->nome_fantasia or '' }}</td>
                                <td field-key='idade'>{{ $aluno->idade }}</td>
                                <td field-key='serie'>{{ $aluno->serie }}</td>
                                <td field-key='turma'>{{ $aluno->turma }}</td>
                                <td field-key='turno'>{{ $aluno->turno }}</td>
                                <td field-key='endereco'>{{ $aluno->endereco }}</td>
                                <td field-key='nome_do_responsavel'>{{ $aluno->nome_do_responsavel }}</td>
                                <td field-key='cpf_do_responsavel'>{{ $aluno->cpf_do_responsavel }}</td>
                                <td field-key='telefone_do_responsavel'>{{ $aluno->telefone_do_responsavel }}</td>
                                <td field-key='email_do_responsavel'>{{ $aluno->email_do_responsavel }}</td>
                                @if( request('show_deleted') == 1 )
                                <td>
                                    @can('aluno_delete')
                                                                        {!! Form::open(array(
                                        'style' => 'display: inline-block;',
                                        'method' => 'POST',
                                        'onsubmit' => "return confirm('".trans("quickadmin.qa_are_you_sure")."');",
                                        'route' => ['admin.alunos.restore', $aluno->id])) !!}
                                    {!! Form::submit(trans('quickadmin.qa_restore'), array('class' => 'btn btn-xs btn-success')) !!}
                                    {!! Form::close() !!}
                                @endcan
                                    @can('aluno_delete')
                                                                        {!! Form::open(array(
                                        'style' => 'display: inline-block;',
                                        'method' => 'DELETE',
                                        'onsubmit' => "return confirm('".trans("quickadmin.qa_are_you_sure")."');",
                                        'route' => ['admin.alunos.perma_del', $aluno->id])) !!}
                                    {!! Form::submit(trans('quickadmin.qa_permadel'), array('class' => 'btn btn-xs btn-danger')) !!}
                                    {!! Form::close() !!}
                                @endcan
                                </td>
                                @else
                                <td>
                                    @can('aluno_view')
                                    <a href="{{ route('admin.alunos.show',[$aluno->id]) }}" class="btn btn-xs btn-primary">@lang('quickadmin.qa_view')</a>
                                    @endcan
                                    @can('aluno_edit')
                                    <a href="{{ route('admin.alunos.edit',[$aluno->id]) }}" class="btn btn-xs btn-info">@lang('quickadmin.qa_edit')</a>
                                    @endcan
                                    @can('aluno_delete')
{!! Form::open(array(
                                        'style' => 'display: inline-block;',
                                        'method' => 'DELETE',
                                        'onsubmit' => "return confirm('".trans("quickadmin.qa_are_you_sure")."');",
                                        'route' => ['admin.alunos.destroy', $aluno->id])) !!}
                                    {!! Form::submit(trans('quickadmin.qa_delete'), array('class' => 'btn btn-xs btn-danger')) !!}
                                    {!! Form::close() !!}
                                    @endcan
                                </td>
                                @endif
                </tr>
            @endforeach
        @else
            <tr>
                <td colspan="16">@lang('quickadmin.qa_no_entries_in_table')</td>
            </tr>
        @endif
    </tbody>
</table>
</div>
<div role="tabpanel" class="tab-pane " id="apps">
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

            <a href="{{ route('admin.escolas.index') }}" class="btn btn-default">@lang('quickadmin.qa_back_to_list')</a>
        </div>
    </div>
@stop
