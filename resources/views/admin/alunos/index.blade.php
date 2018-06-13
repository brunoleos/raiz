@inject('request', 'Illuminate\Http\Request')
@extends('layouts.app')

@section('content')
    <h3 class="page-title">@lang('quickadmin.alunos.title')</h3>
    @can('aluno_create')
    <p>
        <a href="{{ route('admin.alunos.create') }}" class="btn btn-success">@lang('quickadmin.qa_add_new')</a>
        <a href="#" class="btn btn-warning" style="margin-left:5px;" data-toggle="modal" data-target="#myModal">@lang('quickadmin.qa_csvImport')</a>
        @include('csvImport.modal', ['model' => 'Aluno'])
        
    </p>
    @endcan

    @can('aluno_delete')
    <p>
        <ul class="list-inline">
            <li><a href="{{ route('admin.alunos.index') }}" style="{{ request('show_deleted') == 1 ? '' : 'font-weight: 700' }}">@lang('quickadmin.qa_all')</a></li> |
            <li><a href="{{ route('admin.alunos.index') }}?show_deleted=1" style="{{ request('show_deleted') == 1 ? 'font-weight: 700' : '' }}">@lang('quickadmin.qa_trash')</a></li>
        </ul>
    </p>
    @endcan


    <div class="panel panel-default">
        <div class="panel-heading">
            @lang('quickadmin.qa_list')
        </div>

        <div class="panel-body table-responsive">
            <table class="table table-bordered table-striped {{ count($alunos) > 0 ? 'datatable' : '' }} @can('aluno_delete') @if ( request('show_deleted') != 1 ) dt-select @endif @endcan">
                <thead>
                    <tr>
                        @can('aluno_delete')
                            @if ( request('show_deleted') != 1 )<th style="text-align:center;"><input type="checkbox" id="select-all" /></th>@endif
                        @endcan

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
                                @can('aluno_delete')
                                    @if ( request('show_deleted') != 1 )<td></td>@endif
                                @endcan

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
    </div>
@stop

@section('javascript') 
    <script>
        @can('aluno_delete')
            @if ( request('show_deleted') != 1 ) window.route_mass_crud_entries_destroy = '{{ route('admin.alunos.mass_destroy') }}'; @endif
        @endcan

    </script>
@endsection