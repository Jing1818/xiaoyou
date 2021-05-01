<?php

namespace App\Http\Controllers;

use App\Models\Topiccate;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\TopiccateRequest;

class TopiccatesController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth', ['except' => ['index', 'show']]);
    }

	public function index()
	{
		$topiccates = Topiccate::paginate();
		return view('topiccates.index', compact('topiccates'));
	}

    public function show(Topiccate $topiccate)
    {
        return view('topiccates.show', compact('topiccate'));
    }

	public function create(Topiccate $topiccate)
	{
		return view('topiccates.create_and_edit', compact('topiccate'));
	}

	public function store(TopiccateRequest $request)
	{
		$topiccate = Topiccate::create($request->all());
		return redirect()->route('topiccates.show', $topiccate->id)->with('message', 'Created successfully.');
	}

	public function edit(Topiccate $topiccate)
	{
        $this->authorize('update', $topiccate);
		return view('topiccates.create_and_edit', compact('topiccate'));
	}

	public function update(TopiccateRequest $request, Topiccate $topiccate)
	{
		$this->authorize('update', $topiccate);
		$topiccate->update($request->all());

		return redirect()->route('topiccates.show', $topiccate->id)->with('message', 'Updated successfully.');
	}

	public function destroy(Topiccate $topiccate)
	{
		$this->authorize('destroy', $topiccate);
		$topiccate->delete();

		return redirect()->route('topiccates.index')->with('message', 'Deleted successfully.');
	}
}