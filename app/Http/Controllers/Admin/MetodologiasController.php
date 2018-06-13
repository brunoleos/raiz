<?php

namespace App\Http\Controllers\Admin;

use App\Metodologium;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;
use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\StoreMetodologiasRequest;
use App\Http\Requests\Admin\UpdateMetodologiasRequest;
use App\Http\Controllers\Traits\FileUploadTrait;

class MetodologiasController extends Controller
{
    use FileUploadTrait;

    /**
     * Display a listing of Metodologium.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if (! Gate::allows('metodologium_access')) {
            return abort(401);
        }


        if (request('show_deleted') == 1) {
            if (! Gate::allows('metodologium_delete')) {
                return abort(401);
            }
            $metodologias = Metodologium::onlyTrashed()->get();
        } else {
            $metodologias = Metodologium::all();
        }

        return view('admin.metodologias.index', compact('metodologias'));
    }

    /**
     * Show the form for creating new Metodologium.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        if (! Gate::allows('metodologium_create')) {
            return abort(401);
        }
        return view('admin.metodologias.create');
    }

    /**
     * Store a newly created Metodologium in storage.
     *
     * @param  \App\Http\Requests\StoreMetodologiasRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreMetodologiasRequest $request)
    {
        if (! Gate::allows('metodologium_create')) {
            return abort(401);
        }
        $request = $this->saveFiles($request);
        $metodologium = Metodologium::create($request->all());



        return redirect()->route('admin.metodologias.index');
    }


    /**
     * Show the form for editing Metodologium.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        if (! Gate::allows('metodologium_edit')) {
            return abort(401);
        }
        $metodologia = Metodologium::findOrFail($id);

        return view('admin.metodologias.edit', compact('metodologia'));
    }

    /**
     * Update Metodologium in storage.
     *
     * @param  \App\Http\Requests\UpdateMetodologiasRequest  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateMetodologiasRequest $request, $id)
    {
        if (! Gate::allows('metodologium_edit')) {
            return abort(401);
        }
        $request = $this->saveFiles($request);
        $metodologium = Metodologium::findOrFail($id);
        $metodologium->update($request->all());



        return redirect()->route('admin.metodologias.index');
    }


    /**
     * Display Metodologium.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        if (! Gate::allows('metodologium_view')) {
            return abort(401);
        }
        $metodologium = Metodologium::findOrFail($id);

        return view('admin.metodologias.show', compact('metodologium'));
    }


    /**
     * Remove Metodologium from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        if (! Gate::allows('metodologium_delete')) {
            return abort(401);
        }
        $metodologium = Metodologium::findOrFail($id);
        $metodologium->delete();

        return redirect()->route('admin.metodologias.index');
    }

    /**
     * Delete all selected Metodologium at once.
     *
     * @param Request $request
     */
    public function massDestroy(Request $request)
    {
        if (! Gate::allows('metodologium_delete')) {
            return abort(401);
        }
        if ($request->input('ids')) {
            $entries = Metodologium::whereIn('id', $request->input('ids'))->get();

            foreach ($entries as $entry) {
                $entry->delete();
            }
        }
    }


    /**
     * Restore Metodologium from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function restore($id)
    {
        if (! Gate::allows('metodologium_delete')) {
            return abort(401);
        }
        $metodologium = Metodologium::onlyTrashed()->findOrFail($id);
        $metodologium->restore();

        return redirect()->route('admin.metodologias.index');
    }

    /**
     * Permanently delete Metodologium from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function perma_del($id)
    {
        if (! Gate::allows('metodologium_delete')) {
            return abort(401);
        }
        $metodologium = Metodologium::onlyTrashed()->findOrFail($id);
        $metodologium->forceDelete();

        return redirect()->route('admin.metodologias.index');
    }
}
