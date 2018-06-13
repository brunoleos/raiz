<?php

namespace App\Http\Controllers\Admin;

use App\Slideset;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;
use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\StoreSlidesetsRequest;
use App\Http\Requests\Admin\UpdateSlidesetsRequest;
use App\Http\Controllers\Traits\FileUploadTrait;

class SlidesetsController extends Controller
{
    use FileUploadTrait;

    /**
     * Display a listing of Slideset.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if (! Gate::allows('slideset_access')) {
            return abort(401);
        }


        if (request('show_deleted') == 1) {
            if (! Gate::allows('slideset_delete')) {
                return abort(401);
            }
            $slidesets = Slideset::onlyTrashed()->get();
        } else {
            $slidesets = Slideset::all();
        }

        return view('admin.slidesets.index', compact('slidesets'));
    }

    /**
     * Show the form for creating new Slideset.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        if (! Gate::allows('slideset_create')) {
            return abort(401);
        }
        return view('admin.slidesets.create');
    }

    /**
     * Store a newly created Slideset in storage.
     *
     * @param  \App\Http\Requests\StoreSlidesetsRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreSlidesetsRequest $request)
    {
        if (! Gate::allows('slideset_create')) {
            return abort(401);
        }
        $request = $this->saveFiles($request);
        $slideset = Slideset::create($request->all());



        return redirect()->route('admin.slidesets.index');
    }


    /**
     * Show the form for editing Slideset.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        if (! Gate::allows('slideset_edit')) {
            return abort(401);
        }
        $slideset = Slideset::findOrFail($id);

        return view('admin.slidesets.edit', compact('slideset'));
    }

    /**
     * Update Slideset in storage.
     *
     * @param  \App\Http\Requests\UpdateSlidesetsRequest  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateSlidesetsRequest $request, $id)
    {
        if (! Gate::allows('slideset_edit')) {
            return abort(401);
        }
        $request = $this->saveFiles($request);
        $slideset = Slideset::findOrFail($id);
        $slideset->update($request->all());



        return redirect()->route('admin.slidesets.index');
    }


    /**
     * Display Slideset.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        if (! Gate::allows('slideset_view')) {
            return abort(401);
        }
        $slideset = Slideset::findOrFail($id);

        return view('admin.slidesets.show', compact('slideset'));
    }


    /**
     * Remove Slideset from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        if (! Gate::allows('slideset_delete')) {
            return abort(401);
        }
        $slideset = Slideset::findOrFail($id);
        $slideset->delete();

        return redirect()->route('admin.slidesets.index');
    }

    /**
     * Delete all selected Slideset at once.
     *
     * @param Request $request
     */
    public function massDestroy(Request $request)
    {
        if (! Gate::allows('slideset_delete')) {
            return abort(401);
        }
        if ($request->input('ids')) {
            $entries = Slideset::whereIn('id', $request->input('ids'))->get();

            foreach ($entries as $entry) {
                $entry->delete();
            }
        }
    }


    /**
     * Restore Slideset from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function restore($id)
    {
        if (! Gate::allows('slideset_delete')) {
            return abort(401);
        }
        $slideset = Slideset::onlyTrashed()->findOrFail($id);
        $slideset->restore();

        return redirect()->route('admin.slidesets.index');
    }

    /**
     * Permanently delete Slideset from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function perma_del($id)
    {
        if (! Gate::allows('slideset_delete')) {
            return abort(401);
        }
        $slideset = Slideset::onlyTrashed()->findOrFail($id);
        $slideset->forceDelete();

        return redirect()->route('admin.slidesets.index');
    }
}
