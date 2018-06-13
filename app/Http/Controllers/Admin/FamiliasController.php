<?php

namespace App\Http\Controllers\Admin;

use App\Familium;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;
use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\StoreFamiliasRequest;
use App\Http\Requests\Admin\UpdateFamiliasRequest;
use App\Http\Controllers\Traits\FileUploadTrait;

class FamiliasController extends Controller
{
    use FileUploadTrait;

    /**
     * Display a listing of Familium.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if (! Gate::allows('familium_access')) {
            return abort(401);
        }


        if (request('show_deleted') == 1) {
            if (! Gate::allows('familium_delete')) {
                return abort(401);
            }
            $familias = Familium::onlyTrashed()->get();
        } else {
            $familias = Familium::all();
        }

        return view('admin.familias.index', compact('familias'));
    }

    /**
     * Show the form for creating new Familium.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        if (! Gate::allows('familium_create')) {
            return abort(401);
        }
        return view('admin.familias.create');
    }

    /**
     * Store a newly created Familium in storage.
     *
     * @param  \App\Http\Requests\StoreFamiliasRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreFamiliasRequest $request)
    {
        if (! Gate::allows('familium_create')) {
            return abort(401);
        }
        $request = $this->saveFiles($request);
        $familium = Familium::create($request->all());



        return redirect()->route('admin.familias.index');
    }


    /**
     * Show the form for editing Familium.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        if (! Gate::allows('familium_edit')) {
            return abort(401);
        }
        $familia = Familium::findOrFail($id);

        return view('admin.familias.edit', compact('familia'));
    }

    /**
     * Update Familium in storage.
     *
     * @param  \App\Http\Requests\UpdateFamiliasRequest  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateFamiliasRequest $request, $id)
    {
        if (! Gate::allows('familium_edit')) {
            return abort(401);
        }
        $request = $this->saveFiles($request);
        $familium = Familium::findOrFail($id);
        $familium->update($request->all());



        return redirect()->route('admin.familias.index');
    }


    /**
     * Display Familium.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        if (! Gate::allows('familium_view')) {
            return abort(401);
        }
        $familium = Familium::findOrFail($id);

        return view('admin.familias.show', compact('familium'));
    }


    /**
     * Remove Familium from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        if (! Gate::allows('familium_delete')) {
            return abort(401);
        }
        $familium = Familium::findOrFail($id);
        $familium->delete();

        return redirect()->route('admin.familias.index');
    }

    /**
     * Delete all selected Familium at once.
     *
     * @param Request $request
     */
    public function massDestroy(Request $request)
    {
        if (! Gate::allows('familium_delete')) {
            return abort(401);
        }
        if ($request->input('ids')) {
            $entries = Familium::whereIn('id', $request->input('ids'))->get();

            foreach ($entries as $entry) {
                $entry->delete();
            }
        }
    }


    /**
     * Restore Familium from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function restore($id)
    {
        if (! Gate::allows('familium_delete')) {
            return abort(401);
        }
        $familium = Familium::onlyTrashed()->findOrFail($id);
        $familium->restore();

        return redirect()->route('admin.familias.index');
    }

    /**
     * Permanently delete Familium from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function perma_del($id)
    {
        if (! Gate::allows('familium_delete')) {
            return abort(401);
        }
        $familium = Familium::onlyTrashed()->findOrFail($id);
        $familium->forceDelete();

        return redirect()->route('admin.familias.index');
    }
}
