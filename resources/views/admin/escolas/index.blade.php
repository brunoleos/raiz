@inject('request', 'Illuminate\Http\Request')
@extends('layouts.app')

@section('content')
    <h3 class="page-title">@lang('quickadmin.escolas.title')</h3>
    @can('escola_create')
    <p>
        <a href="{{ route('admin.escolas.create') }}" class="btn btn-success">@lang('quickadmin.qa_add_new')</a>
        <a href="#" class="btn btn-warning" style="margin-left:5px;" data-toggle="modal" data-target="#myModal">@lang('quickadmin.qa_csvImport')</a>
        @include('csvImport.modal', ['model' => 'Escola'])
        
    </p>
    @endcan

    @can('escola_delete')
    <p>
        <ul class="list-inline">
            <li><a href="{{ route('admin.escolas.index') }}" style="{{ request('show_deleted') == 1 ? '' : 'font-weight: 700' }}">@lang('quickadmin.qa_all')</a></li> |
            <li><a href="{{ route('admin.escolas.index') }}?show_deleted=1" style="{{ request('show_deleted') == 1 ? 'font-weight: 700' : '' }}">@lang('quickadmin.qa_trash')</a></li>
        </ul>
    </p>
    @endcan


    <div class="panel panel-default">
        <div class="panel-heading">
            @lang('quickadmin.qa_list')
        </div>

        <div class="panel-body table-responsive">
            <table class="table table-bordered table-striped {{ count($escolas) > 0 ? 'datatable' : '' }} @can('escola_delete') @if ( request('show_deleted') != 1 ) dt-select @endif @endcan">
                <thead>
                    <tr>
                        @can('escola_delete')
                            @if ( request('show_deleted') != 1 )<th style="text-align:center;"><input type="checkbox" id="select-all" /></th>@endif
                        @endcan

                        <th>@lang('quickadmin.escolas.fields.razao-social')</th>
                        <th>@lang('quickadmin.escolas.fields.nome-fantasia')</th>
                        <th>@lang('quickadmin.escolas.fields.cnpj')</th>
                        <th>@lang('quickadmin.escolas.fields.endereco')</th>
                        <th>@lang('quickadmin.escolas.fields.logo')</th>
                        <th>@lang('quickadmin.escolas.fields.telefone')</th>
                        <th>@lang('quickadmin.escolas.fields.responsavel')</th>
                        @if( request('show_deleted') == 1 )
                        <th>&nbsp;</th>
                        @else
                        <th>&nbsp;</th>
                        @endif
                    </tr>
                </thead>
                
                <tbody>
                    @if (count($escolas) > 0)
                        @foreach ($escolas as $escola)
                            <tr data-entry-id="{{ $escola->id }}">
                                @can('escola_delete')
                                    @if ( request('show_deleted') != 1 )<td></td>@endif
                                @endcan

                                <td field-key='razao_social'>{{ $escola->razao_social }}</td>
                                <td field-key='nome_fantasia'>{{ $escola->nome_fantasia }}</td>
                                <td field-key='cnpj'>{{ $escola->cnpj }}</td>
                                <td field-key='endereco'>{{ $escola->endereco }}</td>
                                <td field-key='logo'>@if($escola->logo)<a href="{{ asset(env('UPLOAD_PATH').'/' . $escola->logo) }}" target="_blank"><img src="{{ asset(env('UPLOAD_PATH').'/thumb/' . $escola->logo) }}"/></a>@endif</td>
                                <td field-key='telefone'>{{ $escola->telefone }}</td>
                                <td field-key='responsavel'>{{ $escola->responsavel }}</td>
                                @if( request('show_deleted') == 1 )
                                <td>
                                    @can('escola_delete')
                                                                        {!! Form::open(array(
                                        'style' => 'display: inline-block;',
                                        'method' => 'POST',
                                        'onsubmit' => "return confirm('".trans("quickadmin.qa_are_you_sure")."');",
                                        'route' => ['admin.escolas.restore', $escola->id])) !!}
                                    {!! Form::submit(trans('quickadmin.qa_restore'), array('class' => 'btn btn-xs btn-success')) !!}
                                    {!! Form::close() !!}
                                @endcan
                                    @can('escola_delete')
                                                                        {!! Form::open(array(
                                        'style' => 'display: inline-block;',
                                        'method' => 'DELETE',
                                        'onsubmit' => "return confirm('".trans("quickadmin.qa_are_you_sure")."');",
                                        'route' => ['admin.escolas.perma_del', $escola->id])) !!}
                                    {!! Form::submit(trans('quickadmin.qa_permadel'), array('class' => 'btn btn-xs btn-danger')) !!}
                                    {!! Form::close() !!}
                                @endcan
                                </td>
                                @else
                                <td>
                                    @can('escola_view')
                                    <a href="{{ route('admin.escolas.show',[$escola->id]) }}" class="btn btn-xs btn-primary">@lang('quickadmin.qa_view')</a>
                                    @endcan
                                    @can('escola_edit')
                                    <a href="{{ route('admin.escolas.edit',[$escola->id]) }}" class="btn btn-xs btn-info">@lang('quickadmin.qa_edit')</a>
                                    @endcan
                                    @can('escola_delete')
{!! Form::open(array(
                                        'style' => 'display: inline-block;',
                                        'method' => 'DELETE',
                                        'onsubmit' => "return confirm('".trans("quickadmin.qa_are_you_sure")."');",
                                        'route' => ['admin.escolas.destroy', $escola->id])) !!}
                                    {!! Form::submit(trans('quickadmin.qa_delete'), array('class' => 'btn btn-xs btn-danger')) !!}
                                    {!! Form::close() !!}
                                    @endcan
                                </td>
                                @endif
                            </tr>
                        @endforeach
                    @else
                        <tr>
                            <td colspan="12">@lang('quickadmin.qa_no_entries_in_table')</td>
                        </tr>
                    @endif
                </tbody>
            </table>
        </div>
    </div>
@stop

@section('javascript') 
    <script>
        @can('escola_delete')
            @if ( request('show_deleted') != 1 ) window.route_mass_crud_entries_destroy = '{{ route('admin.escolas.mass_destroy') }}'; @endif
        @endcan

    </script>
@endsection