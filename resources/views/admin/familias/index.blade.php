@inject('request', 'Illuminate\Http\Request')
@extends('layouts.app')

@section('content')
    <h3 class="page-title">@lang('quickadmin.familia.title')</h3>
    @can('familium_create')
    <p>
        <a href="{{ route('admin.familias.create') }}" class="btn btn-success">@lang('quickadmin.qa_add_new')</a>
        
    </p>
    @endcan

    @can('familium_delete')
    <p>
        <ul class="list-inline">
            <li><a href="{{ route('admin.familias.index') }}" style="{{ request('show_deleted') == 1 ? '' : 'font-weight: 700' }}">@lang('quickadmin.qa_all')</a></li> |
            <li><a href="{{ route('admin.familias.index') }}?show_deleted=1" style="{{ request('show_deleted') == 1 ? 'font-weight: 700' : '' }}">@lang('quickadmin.qa_trash')</a></li>
        </ul>
    </p>
    @endcan


    <div class="panel panel-default">
        <div class="panel-heading">
            @lang('quickadmin.qa_list')
        </div>

        <div class="panel-body table-responsive">
            <table class="table table-bordered table-striped {{ count($familias) > 0 ? 'datatable' : '' }} @can('familium_delete') @if ( request('show_deleted') != 1 ) dt-select @endif @endcan">
                <thead>
                    <tr>
                        @can('familium_delete')
                            @if ( request('show_deleted') != 1 )<th style="text-align:center;"><input type="checkbox" id="select-all" /></th>@endif
                        @endcan

                        <th>@lang('quickadmin.familia.fields.nome')</th>
                        <th>@lang('quickadmin.familia.fields.funcao')</th>
                        <th>@lang('quickadmin.familia.fields.descricao')</th>
                        <th>@lang('quickadmin.familia.fields.facebook')</th>
                        <th>@lang('quickadmin.familia.fields.twitter')</th>
                        <th>@lang('quickadmin.familia.fields.email')</th>
                        <th>@lang('quickadmin.familia.fields.foto')</th>
                        @if( request('show_deleted') == 1 )
                        <th>&nbsp;</th>
                        @else
                        <th>&nbsp;</th>
                        @endif
                    </tr>
                </thead>
                
                <tbody>
                    @if (count($familias) > 0)
                        @foreach ($familias as $familia)
                            <tr data-entry-id="{{ $familia->id }}">
                                @can('familium_delete')
                                    @if ( request('show_deleted') != 1 )<td></td>@endif
                                @endcan

                                <td field-key='nome'>{{ $familia->nome }}</td>
                                <td field-key='funcao'>{{ $familia->funcao }}</td>
                                <td field-key='descricao'>{!! $familia->descricao !!}</td>
                                <td field-key='facebook'>{{ $familia->facebook }}</td>
                                <td field-key='twitter'>{{ $familia->twitter }}</td>
                                <td field-key='email'>{{ $familia->email }}</td>
                                <td field-key='foto'>@if($familia->foto)<a href="{{ asset(env('UPLOAD_PATH').'/' . $familia->foto) }}" target="_blank"><img src="{{ asset(env('UPLOAD_PATH').'/thumb/' . $familia->foto) }}"/></a>@endif</td>
                                @if( request('show_deleted') == 1 )
                                <td>
                                    @can('familium_delete')
                                                                        {!! Form::open(array(
                                        'style' => 'display: inline-block;',
                                        'method' => 'POST',
                                        'onsubmit' => "return confirm('".trans("quickadmin.qa_are_you_sure")."');",
                                        'route' => ['admin.familias.restore', $familia->id])) !!}
                                    {!! Form::submit(trans('quickadmin.qa_restore'), array('class' => 'btn btn-xs btn-success')) !!}
                                    {!! Form::close() !!}
                                @endcan
                                    @can('familium_delete')
                                                                        {!! Form::open(array(
                                        'style' => 'display: inline-block;',
                                        'method' => 'DELETE',
                                        'onsubmit' => "return confirm('".trans("quickadmin.qa_are_you_sure")."');",
                                        'route' => ['admin.familias.perma_del', $familia->id])) !!}
                                    {!! Form::submit(trans('quickadmin.qa_permadel'), array('class' => 'btn btn-xs btn-danger')) !!}
                                    {!! Form::close() !!}
                                @endcan
                                </td>
                                @else
                                <td>
                                    @can('familium_view')
                                    <a href="{{ route('admin.familias.show',[$familia->id]) }}" class="btn btn-xs btn-primary">@lang('quickadmin.qa_view')</a>
                                    @endcan
                                    @can('familium_edit')
                                    <a href="{{ route('admin.familias.edit',[$familia->id]) }}" class="btn btn-xs btn-info">@lang('quickadmin.qa_edit')</a>
                                    @endcan
                                    @can('familium_delete')
{!! Form::open(array(
                                        'style' => 'display: inline-block;',
                                        'method' => 'DELETE',
                                        'onsubmit' => "return confirm('".trans("quickadmin.qa_are_you_sure")."');",
                                        'route' => ['admin.familias.destroy', $familia->id])) !!}
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
        @can('familium_delete')
            @if ( request('show_deleted') != 1 ) window.route_mass_crud_entries_destroy = '{{ route('admin.familias.mass_destroy') }}'; @endif
        @endcan

    </script>
@endsection