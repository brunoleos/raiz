<?php

namespace App\Http\Controllers\Admin;

use App\About;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;
use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\StoreAboutsRequest;
use App\Http\Requests\Admin\UpdateAboutsRequest;
use App\Http\Controllers\Traits\FileUploadTrait;

class AboutsController extends Controller
{
    use FileUploadTrait;

    /**
     * Display a listing of About.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if (! Gate::allows('about_access')) {
            return abort(401);
        }


        
            $about = About::findOrFail(1);
            
                    return view('admin.abouts.edit', compact('about'));
    }

    /**
     * Show the form for creating new About.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        if (! Gate::allows('about_create')) {
            return abort(401);
        }
        return view('admin.abouts.create');
    }

    /**
     * Store a newly created About in storage.
     *
     * @param  \App\Http\Requests\StoreAboutsRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreAboutsRequest $request)
    {
        if (! Gate::allows('about_create')) {
            return abort(401);
        }
        $request = $this->saveFiles($request);
        $about = About::create($request->all());



        return redirect()->route('admin.abouts.index');
    }


    /**
     * Show the form for editing About.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        if (! Gate::allows('about_edit')) {
            return abort(401);
        }
        $about = About::findOrFail($id);

        return view('admin.abouts.edit', compact('about'));
    }

    /**
     * Update About in storage.
     *
     * @param  \App\Http\Requests\UpdateAboutsRequest  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateAboutsRequest $request, $id)
    {
        if (! Gate::allows('about_edit')) {
            return abort(401);
        }
        $request = $this->saveFiles($request);
        $about = About::findOrFail($id);
        $about->update($request->all());



        return redirect()->route('admin.abouts.index');
    }


    /**
     * Display About.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        if (! Gate::allows('about_view')) {
            return abort(401);
        }
        $about = About::findOrFail($id);

        return view('admin.abouts.show', compact('about'));
    }


    /**
     * Remove About from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        if (! Gate::allows('about_delete')) {
            return abort(401);
        }
        $about = About::findOrFail($id);
        $about->delete();

        return redirect()->route('admin.abouts.index');
    }

    /**
     * Delete all selected About at once.
     *
     * @param Request $request
     */
    public function massDestroy(Request $request)
    {
        if (! Gate::allows('about_delete')) {
            return abort(401);
        }
        if ($request->input('ids')) {
            $entries = About::whereIn('id', $request->input('ids'))->get();

            foreach ($entries as $entry) {
                $entry->delete();
            }
        }
    }


    /**
     * Restore About from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function restore($id)
    {
        if (! Gate::allows('about_delete')) {
            return abort(401);
        }
        $about = About::onlyTrashed()->findOrFail($id);
        $about->restore();

        return redirect()->route('admin.abouts.index');
    }

    /**
     * Permanently delete About from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function perma_del($id)
    {
        if (! Gate::allows('about_delete')) {
            return abort(401);
        }
        $about = About::onlyTrashed()->findOrFail($id);
        $about->forceDelete();

        return redirect()->route('admin.abouts.index');
    }
}
