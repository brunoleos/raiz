@inject('request', 'Illuminate\Http\Request')
@extends('layouts.app')

@section('content')
    <h3 class="page-title">@lang('quickadmin.apps.title')</h3>
    @can('app_create')
    <p>
        <a href="{{ route('admin.apps.create') }}" class="btn btn-success">@lang('quickadmin.qa_add_new')</a>
        <a href="#" class="btn btn-warning" style="margin-left:5px;" data-toggle="modal" data-target="#myModal">@lang('quickadmin.qa_csvImport')</a>
        @include('csvImport.modal', ['model' => 'App'])
        
    </p>
    @endcan

    @can('app_delete')
    <p>
        <ul class="list-inline">
            <li><a href="{{ route('admin.apps.index') }}" style="{{ request('show_deleted') == 1 ? '' : 'font-weight: 700' }}">@lang('quickadmin.qa_all')</a></li> |
            <li><a href="{{ route('admin.apps.index') }}?show_deleted=1" style="{{ request('show_deleted') == 1 ? 'font-weight: 700' : '' }}">@lang('quickadmin.qa_trash')</a></li>
        </ul>
    </p>
    @endcan


    <div class="panel panel-default">
        <div class="panel-heading">
            @lang('quickadmin.qa_list')
        </div>

        <div class="panel-body table-responsive">
            <table class="table table-bordered table-striped {{ count($apps) > 0 ? 'datatable' : '' }} @can('app_delete') @if ( request('show_deleted') != 1 ) dt-select @endif @endcan">
                <thead>
                    <tr>
                        @can('app_delete')
                            @if ( request('show_deleted') != 1 )<th style="text-align:center;"><input type="checkbox" id="select-all" /></th>@endif
                        @endcan

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
                                @can('app_delete')
                                    @if ( request('show_deleted') != 1 )<td></td>@endif
                                @endcan

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
@stop

@section('javascript') 
    <script>
        @can('app_delete')
            @if ( request('show_deleted') != 1 ) window.route_mass_crud_entries_destroy = '{{ route('admin.apps.mass_destroy') }}'; @endif
        @endcan

    </script>
@endsection