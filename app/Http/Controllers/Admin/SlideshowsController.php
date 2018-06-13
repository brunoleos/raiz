<?php

namespace App\Http\Controllers\Admin;

use App\Slideshow;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;
use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\StoreSlideshowsRequest;
use App\Http\Requests\Admin\UpdateSlideshowsRequest;
use App\Http\Controllers\Traits\FileUploadTrait;

class SlideshowsController extends Controller
{
    use FileUploadTrait;

    /**
     * Display a listing of Slideshow.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if (! Gate::allows('slideshow_access')) {
            return abort(401);
        }


        if (request('show_deleted') == 1) {
            if (! Gate::allows('slideshow_delete')) {
                return abort(401);
            }
            $slideshows = Slideshow::onlyTrashed()->get();
        } else {
            $slideshows = Slideshow::all();
        }

        return view('admin.slideshows.index', compact('slideshows'));
    }

    /**
     * Show the form for creating new Slideshow.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        if (! Gate::allows('slideshow_create')) {
            return abort(401);
        }
        return view('admin.slideshows.create');
    }

    /**
     * Store a newly created Slideshow in storage.
     *
     * @param  \App\Http\Requests\StoreSlideshowsRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreSlideshowsRequest $request)
    {
        if (! Gate::allows('slideshow_create')) {
            return abort(401);
        }
        $request = $this->saveFiles($request);
        $slideshow = Slideshow::create($request->all());



        return redirect()->route('admin.slideshows.index');
    }


    /**
     * Show the form for editing Slideshow.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        if (! Gate::allows('slideshow_edit')) {
            return abort(401);
        }
        $slideshow = Slideshow::findOrFail($id);

        return view('admin.slideshows.edit', compact('slideshow'));
    }

    /**
     * Update Slideshow in storage.
     *
     * @param  \App\Http\Requests\UpdateSlideshowsRequest  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateSlideshowsRequest $request, $id)
    {
        if (! Gate::allows('slideshow_edit')) {
            return abort(401);
        }
        $request = $this->saveFiles($request);
        $slideshow = Slideshow::findOrFail($id);
        $slideshow->update($request->all());



        return redirect()->route('admin.slideshows.index');
    }


    /**
     * Display Slideshow.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        if (! Gate::allows('slideshow_view')) {
            return abort(401);
        }
        $slideshow = Slideshow::findOrFail($id);

        return view('admin.slideshows.show', compact('slideshow'));
    }


    /**
     * Remove Slideshow from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        if (! Gate::allows('slideshow_delete')) {
            return abort(401);
        }
        $slideshow = Slideshow::findOrFail($id);
        $slideshow->delete();

        return redirect()->route('admin.slideshows.index');
    }

    /**
     * Delete all selected Slideshow at once.
     *
     * @param Request $request
     */
    public function massDestroy(Request $request)
    {
        if (! Gate::allows('slideshow_delete')) {
            return abort(401);
        }
        if ($request->input('ids')) {
            $entries = Slideshow::whereIn('id', $request->input('ids'))->get();

            foreach ($entries as $entry) {
                $entry->delete();
            }
        }
    }


    /**
     * Restore Slideshow from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function restore($id)
    {
        if (! Gate::allows('slideshow_delete')) {
            return abort(401);
        }
        $slideshow = Slideshow::onlyTrashed()->findOrFail($id);
        $slideshow->restore();

        return redirect()->route('admin.slideshows.index');
    }

    /**
     * Permanently delete Slideshow from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function perma_del($id)
    {
        if (! Gate::allows('slideshow_delete')) {
            return abort(401);
        }
        $slideshow = Slideshow::onlyTrashed()->findOrFail($id);
        $slideshow->forceDelete();

        return redirect()->route('admin.slideshows.index');
    }
}
