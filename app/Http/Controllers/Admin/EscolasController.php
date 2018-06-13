<?php

namespace App\Http\Controllers\Admin;

use App\Escola;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;
use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\StoreEscolasRequest;
use App\Http\Requests\Admin\UpdateEscolasRequest;
use App\Http\Controllers\Traits\FileUploadTrait;

class EscolasController extends Controller
{
    use FileUploadTrait;

    /**
     * Display a listing of Escola.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if (! Gate::allows('escola_access')) {
            return abort(401);
        }


        if (request('show_deleted') == 1) {
            if (! Gate::allows('escola_delete')) {
                return abort(401);
            }
            $escolas = Escola::onlyTrashed()->get();
        } else {
            $escolas = Escola::all();
        }

        return view('admin.escolas.index', compact('escolas'));
    }

    /**
     * Show the form for creating new Escola.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        if (! Gate::allows('escola_create')) {
            return abort(401);
        }
        return view('admin.escolas.create');
    }

    /**
     * Store a newly created Escola in storage.
     *
     * @param  \App\Http\Requests\StoreEscolasRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreEscolasRequest $request)
    {
        if (! Gate::allows('escola_create')) {
            return abort(401);
        }
        $request = $this->saveFiles($request);
        $escola = Escola::create($request->all());



        return redirect()->route('admin.escolas.index');
    }


    /**
     * Show the form for editing Escola.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        if (! Gate::allows('escola_edit')) {
            return abort(401);
        }
        $escola = Escola::findOrFail($id);

        return view('admin.escolas.edit', compact('escola'));
    }

    /**
     * Update Escola in storage.
     *
     * @param  \App\Http\Requests\UpdateEscolasRequest  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateEscolasRequest $request, $id)
    {
        if (! Gate::allows('escola_edit')) {
            return abort(401);
        }
        $request = $this->saveFiles($request);
        $escola = Escola::findOrFail($id);
        $escola->update($request->all());



        return redirect()->route('admin.escolas.index');
    }


    /**
     * Display Escola.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        if (! Gate::allows('escola_view')) {
            return abort(401);
        }
        $professores = \App\Professore::where('escola_id', $id)->get();$alunos = \App\Aluno::where('escola_id', $id)->get();$apps = \App\App::where('escola_id', $id)->get();

        $escola = Escola::findOrFail($id);

        return view('admin.escolas.show', compact('escola', 'professores', 'alunos', 'apps'));
    }


    /**
     * Remove Escola from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        if (! Gate::allows('escola_delete')) {
            return abort(401);
        }
        $escola = Escola::findOrFail($id);
        $escola->delete();

        return redirect()->route('admin.escolas.index');
    }

    /**
     * Delete all selected Escola at once.
     *
     * @param Request $request
     */
    public function massDestroy(Request $request)
    {
        if (! Gate::allows('escola_delete')) {
            return abort(401);
        }
        if ($request->input('ids')) {
            $entries = Escola::whereIn('id', $request->input('ids'))->get();

            foreach ($entries as $entry) {
                $entry->delete();
            }
        }
    }


    /**
     * Restore Escola from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function restore($id)
    {
        if (! Gate::allows('escola_delete')) {
            return abort(401);
        }
        $escola = Escola::onlyTrashed()->findOrFail($id);
        $escola->restore();

        return redirect()->route('admin.escolas.index');
    }

    /**
     * Permanently delete Escola from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function perma_del($id)
    {
        if (! Gate::allows('escola_delete')) {
            return abort(401);
        }
        $escola = Escola::onlyTrashed()->findOrFail($id);
        $escola->forceDelete();

        return redirect()->route('admin.escolas.index');
    }
}
