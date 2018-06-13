<?php

namespace App\Http\Controllers\Admin;

use App\Jogo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;
use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\StoreJogosRequest;
use App\Http\Requests\Admin\UpdateJogosRequest;
use App\Http\Controllers\Traits\FileUploadTrait;

class JogosController extends Controller
{
    use FileUploadTrait;

    /**
     * Display a listing of Jogo.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if (! Gate::allows('jogo_access')) {
            return abort(401);
        }


        if (request('show_deleted') == 1) {
            if (! Gate::allows('jogo_delete')) {
                return abort(401);
            }
            $jogos = Jogo::onlyTrashed()->get();
        } else {
            $jogos = Jogo::all();
        }

        return view('admin.jogos.index', compact('jogos'));
    }

    /**
     * Show the form for creating new Jogo.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        if (! Gate::allows('jogo_create')) {
            return abort(401);
        }
        return view('admin.jogos.create');
    }

    /**
     * Store a newly created Jogo in storage.
     *
     * @param  \App\Http\Requests\StoreJogosRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreJogosRequest $request)
    {
        if (! Gate::allows('jogo_create')) {
            return abort(401);
        }
        $request = $this->saveFiles($request);
        $jogo = Jogo::create($request->all());



        return redirect()->route('admin.jogos.index');
    }


    /**
     * Show the form for editing Jogo.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        if (! Gate::allows('jogo_edit')) {
            return abort(401);
        }
        $jogo = Jogo::findOrFail($id);

        return view('admin.jogos.edit', compact('jogo'));
    }

    /**
     * Update Jogo in storage.
     *
     * @param  \App\Http\Requests\UpdateJogosRequest  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateJogosRequest $request, $id)
    {
        if (! Gate::allows('jogo_edit')) {
            return abort(401);
        }
        $request = $this->saveFiles($request);
        $jogo = Jogo::findOrFail($id);
        $jogo->update($request->all());



        return redirect()->route('admin.jogos.index');
    }


    /**
     * Display Jogo.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        if (! Gate::allows('jogo_view')) {
            return abort(401);
        }
        $jogo = Jogo::findOrFail($id);

        return view('admin.jogos.show', compact('jogo'));
    }


    /**
     * Remove Jogo from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        if (! Gate::allows('jogo_delete')) {
            return abort(401);
        }
        $jogo = Jogo::findOrFail($id);
        $jogo->delete();

        return redirect()->route('admin.jogos.index');
    }

    /**
     * Delete all selected Jogo at once.
     *
     * @param Request $request
     */
    public function massDestroy(Request $request)
    {
        if (! Gate::allows('jogo_delete')) {
            return abort(401);
        }
        if ($request->input('ids')) {
            $entries = Jogo::whereIn('id', $request->input('ids'))->get();

            foreach ($entries as $entry) {
                $entry->delete();
            }
        }
    }


    /**
     * Restore Jogo from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function restore($id)
    {
        if (! Gate::allows('jogo_delete')) {
            return abort(401);
        }
        $jogo = Jogo::onlyTrashed()->findOrFail($id);
        $jogo->restore();

        return redirect()->route('admin.jogos.index');
    }

    /**
     * Permanently delete Jogo from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function perma_del($id)
    {
        if (! Gate::allows('jogo_delete')) {
            return abort(401);
        }
        $jogo = Jogo::onlyTrashed()->findOrFail($id);
        $jogo->forceDelete();

        return redirect()->route('admin.jogos.index');
    }
}
