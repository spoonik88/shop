<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Redirect;
use Schema;
use App\Tovar;
use App\Http\Requests\CreateTovarRequest;
use App\Http\Requests\UpdateTovarRequest;
use Illuminate\Http\Request;
use App\Http\Controllers\Traits\FileUploadTrait;
use App\Category;


class TovarController extends Controller {

	/**
	 * Display a listing of tovar
	 *
     * @param Request $request
     *
     * @return \Illuminate\View\View
	 */
	public function index(Request $request)
    {
        $tovar = Tovar::with("category")->get();

		return view('admin.tovar.index', compact('tovar'));
	}

	/**
	 * Show the form for creating a new tovar
	 *
     * @return \Illuminate\View\View
	 */
	public function create()
	{
	    $category = Category::pluck("name", "id")->prepend('Please select', 0);

	    
	    return view('admin.tovar.create', compact("category"));
	}

	/**
	 * Store a newly created tovar in storage.
	 *
     * @param CreateTovarRequest|Request $request
	 */
	public function store(CreateTovarRequest $request)
	{
	    $request = $this->saveFiles($request);
		Tovar::create($request->all());

		return redirect()->route(config('quickadmin.route').'.tovar.index');
	}

	/**
	 * Show the form for editing the specified tovar.
	 *
	 * @param  int  $id
     * @return \Illuminate\View\View
	 */
	public function edit($id)
	{
		$tovar = Tovar::find($id);
	    $category = Category::pluck("name", "id")->prepend('Please select', 0);

	    
		return view('admin.tovar.edit', compact('tovar', "category"));
	}

	/**
	 * Update the specified tovar in storage.
     * @param UpdateTovarRequest|Request $request
     *
	 * @param  int  $id
	 */
	public function update($id, UpdateTovarRequest $request)
	{
		$tovar = Tovar::findOrFail($id);

        $request = $this->saveFiles($request);

		$tovar->update($request->all());

		return redirect()->route(config('quickadmin.route').'.tovar.index');
	}

	/**
	 * Remove the specified tovar from storage.
	 *
	 * @param  int  $id
	 */
	public function destroy($id)
	{
		Tovar::destroy($id);

		return redirect()->route(config('quickadmin.route').'.tovar.index');
	}

    /**
     * Mass delete function from index page
     * @param Request $request
     *
     * @return mixed
     */
    public function massDelete(Request $request)
    {
        if ($request->get('toDelete') != 'mass') {
            $toDelete = json_decode($request->get('toDelete'));
            Tovar::destroy($toDelete);
        } else {
            Tovar::whereNotNull('id')->delete();
        }

        return redirect()->route(config('quickadmin.route').'.tovar.index');
    }

}
