<?php

namespace App\Http\Controllers\Admin;

use App\Aluno;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;
use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\StoreAlunosRequest;
use App\Http\Requests\Admin\UpdateAlunosRequest;

class AlunosController extends Controller
{
    /**
     * Display a listing of Aluno.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if (! Gate::allows('aluno_access')) {
            return abort(401);
        }


        if (request('show_deleted') == 1) {
            if (! Gate::allows('aluno_delete')) {
                return abort(401);
            }
            $alunos = Aluno::onlyTrashed()->get();
        } else {
            $alunos = Aluno::all();
        }

        return view('admin.alunos.index', compact('alunos'));
    }

    /**
     * Show the form for creating new Aluno.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        if (! Gate::allows('aluno_create')) {
            return abort(401);
        }
        
        $escolas = \App\Escola::get()->pluck('nome_fantasia', 'id')->prepend(trans('quickadmin.qa_please_select'), '');

        return view('admin.alunos.create', compact('escolas'));
    }

    /**
     * Store a newly created Aluno in storage.
     *
     * @param  \App\Http\Requests\StoreAlunosRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreAlunosRequest $request)
    {
        if (! Gate::allows('aluno_create')) {
            return abort(401);
        }
        $aluno = Aluno::create($request->all());



        return redirect()->route('admin.alunos.index');
    }


    /**
     * Show the form for editing Aluno.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        if (! Gate::allows('aluno_edit')) {
            return abort(401);
        }
        
        $escolas = \App\Escola::get()->pluck('nome_fantasia', 'id')->prepend(trans('quickadmin.qa_please_select'), '');

        $aluno = Aluno::findOrFail($id);

        return view('admin.alunos.edit', compact('aluno', 'escolas'));
    }

    /**
     * Update Aluno in storage.
     *
     * @param  \App\Http\Requests\UpdateAlunosRequest  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateAlunosRequest $request, $id)
    {
        if (! Gate::allows('aluno_edit')) {
            return abort(401);
        }
        $aluno = Aluno::findOrFail($id);
        $aluno->update($request->all());



        return redirect()->route('admin.alunos.index');
    }


    /**
     * Display Aluno.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        if (! Gate::allows('aluno_view')) {
            return abort(401);
        }
        
        $escolas = \App\Escola::get()->pluck('nome_fantasia', 'id')->prepend(trans('quickadmin.qa_please_select'), '');$apps = \App\App::where('aluno_id', $id)->get();

        $aluno = Aluno::findOrFail($id);

        return view('admin.alunos.show', compact('aluno', 'apps'));
    }


    /**
     * Remove Aluno from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        if (! Gate::allows('aluno_delete')) {
            return abort(401);
        }
        $aluno = Aluno::findOrFail($id);
        $aluno->delete();

        return redirect()->route('admin.alunos.index');
    }

    /**
     * Delete all selected Aluno at once.
     *
     * @param Request $request
     */
    public function massDestroy(Request $request)
    {
        if (! Gate::allows('aluno_delete')) {
            return abort(401);
        }
        if ($request->input('ids')) {
            $entries = Aluno::whereIn('id', $request->input('ids'))->get();

            foreach ($entries as $entry) {
                $entry->delete();
            }
        }
    }


    /**
     * Restore Aluno from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function restore($id)
    {
        if (! Gate::allows('aluno_delete')) {
            return abort(401);
        }
        $aluno = Aluno::onlyTrashed()->findOrFail($id);
        $aluno->restore();

        return redirect()->route('admin.alunos.index');
    }

    /**
     * Permanently delete Aluno from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function perma_del($id)
    {
        if (! Gate::allows('aluno_delete')) {
            return abort(401);
        }
        $aluno = Aluno::onlyTrashed()->findOrFail($id);
        $aluno->forceDelete();

        return redirect()->route('admin.alunos.index');
    }
}
