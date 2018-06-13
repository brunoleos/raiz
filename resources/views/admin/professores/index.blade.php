@inject('request', 'Illuminate\Http\Request')
@extends('layouts.app')

@section('content')
    <h3 class="page-title">@lang('quickadmin.professores.title')</h3>
    @can('professore_create')
    <p>
        <a href="{{ route('admin.professores.create') }}" class="btn btn-success">@lang('quickadmin.qa_add_new')</a>
        <a href="#" class="btn btn-warning" style="margin-left:5px;" data-toggle="modal" data-target="#myModal">@lang('quickadmin.qa_csvImport')</a>
        @include('csvImport.modal', ['model' => 'Professore'])
        
    </p>
    @endcan

    @can('professore_delete')
    <p>
        <ul class="list-inline">
            <li><a href="{{ route('admin.professores.index') }}" style="{{ request('show_deleted') == 1 ? '' : 'font-weight: 700' }}">@lang('quickadmin.qa_all')</a></li> |
            <li><a href="{{ route('admin.professores.index') }}?show_deleted=1" style="{{ request('show_deleted') == 1 ? 'font-weight: 700' : '' }}">@lang('quickadmin.qa_trash')</a></li>
        </ul>
    </p>
    @endcan


    <div class="panel panel-default">
        <div class="panel-heading">
            @lang('quickadmin.qa_list')
        </div>

        <div class="panel-body table-responsive">
            <table class="table table-bordered table-striped {{ count($professores) > 0 ? 'datatable' : '' }} @can('professore_delete') @if ( request('show_deleted') != 1 ) dt-select @endif @endcan">
                <thead>
                    <tr>
                        @can('professore_delete')
                            @if ( request('show_deleted') != 1 )<th style="text-align:center;"><input type="checkbox" id="select-all" /></th>@endif
                        @endcan

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
                                @can('professore_delete')
                                    @if ( request('show_deleted') != 1 )<td></td>@endif
                                @endcan

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
    </div>
@stop

@section('javascript') 
    <script>
        @can('professore_delete')
            @if ( request('show_deleted') != 1 ) window.route_mass_crud_entries_destroy = '{{ route('admin.professores.mass_destroy') }}'; @endif
        @endcan

    </script>
@endsection