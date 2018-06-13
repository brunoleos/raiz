<?php

namespace App\Http\Controllers\Api\V1;

use App\App;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\StoreAppsRequest;
use App\Http\Requests\Admin\UpdateAppsRequest;

class AppsController extends Controller
{
    public function index()
    {
        return App::all();
    }

    public function show($id)
    {
        return App::findOrFail($id);
    }

    public function update(UpdateAppsRequest $request, $id)
    {
        $app = App::findOrFail($id);
        $app->update($request->all());
        

        return $app;
    }

    public function store(StoreAppsRequest $request)
    {
        $app = App::create($request->all());
        

        return $app;
    }

    public function destroy($id)
    {
        $app = App::findOrFail($id);
        $app->delete();
        return '';
    }

    public function lg()
    {
        $id = \Auth::id();

        dd($id);
    }
}
