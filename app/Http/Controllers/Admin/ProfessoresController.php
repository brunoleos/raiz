<?php

namespace App\Http\Controllers\Admin;

use App\Professore;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;
use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\StoreProfessoresRequest;
use App\Http\Requests\Admin\UpdateProfessoresRequest;

class ProfessoresController extends Controller
{
    /**
     * Display a listing of Professore.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if (! Gate::allows('professore_access')) {
            return abort(401);
        }


        if (request('show_deleted') == 1) {
            if (! Gate::allows('professore_delete')) {
                return abort(401);
            }
            $professores = Professore::onlyTrashed()->get();
        } else {
            $professores = Professore::all();
        }

        return view('admin.professores.index', compact('professores'));
    }

    /**
     * Show the form for creating new Professore.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        if (! Gate::allows('professore_create')) {
            return abort(401);
        }
        
        $escolas = \App\Escola::get()->pluck('nome_fantasia', 'id')->prepend(trans('quickadmin.qa_please_select'), '');

        return view('admin.professores.create', compact('escolas'));
    }

    /**
     * Store a newly created Professore in storage.
     *
     * @param  \App\Http\Requests\StoreProfessoresRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreProfessoresRequest $request)
    {
        if (! Gate::allows('professore_create')) {
            return abort(401);
        }
        $professore = Professore::create($request->all());



        return redirect()->route('admin.professores.index');
    }


    /**
     * Show the form for editing Professore.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        if (! Gate::allows('professore_edit')) {
            return abort(401);
        }
        
        $escolas = \App\Escola::get()->pluck('nome_fantasia', 'id')->prepend(trans('quickadmin.qa_please_select'), '');

        $professore = Professore::findOrFail($id);

        return view('admin.professores.edit', compact('professore', 'escolas'));
    }

    /**
     * Update Professore in storage.
     *
     * @param  \App\Http\Requests\UpdateProfessoresRequest  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateProfessoresRequest $request, $id)
    {
        if (! Gate::allows('professore_edit')) {
            return abort(401);
        }
        $professore = Professore::findOrFail($id);
        $professore->update($request->all());



        return redirect()->route('admin.professores.index');
    }


    /**
     * Display Professore.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        if (! Gate::allows('professore_view')) {
            return abort(401);
        }
        $professore = Professore::findOrFail($id);

        return view('admin.professores.show', compact('professore'));
    }


    /**
     * Remove Professore from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        if (! Gate::allows('professore_delete')) {
            return abort(401);
        }
        $professore = Professore::findOrFail($id);
        $professore->delete();

        return redirect()->route('admin.professores.index');
    }

    /**
     * Delete all selected Professore at once.
     *
     * @param Request $request
     */
    public function massDestroy(Request $request)
    {
        if (! Gate::allows('professore_delete')) {
            return abort(401);
        }
        if ($request->input('ids')) {
            $entries = Professore::whereIn('id', $request->input('ids'))->get();

            foreach ($entries as $entry) {
                $entry->delete();
            }
        }
    }


    /**
     * Restore Professore from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function restore($id)
    {
        if (! Gate::allows('professore_delete')) {
            return abort(401);
        }
        $professore = Professore::onlyTrashed()->findOrFail($id);
        $professore->restore();

        return redirect()->route('admin.professores.index');
    }

    /**
     * Permanently delete Professore from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function perma_del($id)
    {
        if (! Gate::allows('professore_delete')) {
            return abort(401);
        }
        $professore = Professore::onlyTrashed()->findOrFail($id);
        $professore->forceDelete();

        return redirect()->route('admin.professores.index');
    }
}
