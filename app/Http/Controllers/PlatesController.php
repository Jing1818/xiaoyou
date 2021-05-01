<?php

namespace App\Http\Controllers;

use App\Models\Plate;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\PlateRequest;

class PlatesController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth', ['except' => ['index', 'show']]);
    }

	public function index()
	{
		$plates = Plate::paginate();
		return view('plates.index', compact('plates'));
	}

    public function show(Plate $plate)
    {
        return view('plates.show', compact('plate'));
    }

	public function create(Plate $plate)
	{
		return view('plates.create_and_edit', compact('plate'));
	}

	public function store(PlateRequest $request)
	{
		$plate = Plate::create($request->all());
		return redirect()->route('plates.show', $plate->id)->with('message', 'Created successfully.');
	}

	public function edit(Plate $plate)
	{
        $this->authorize('update', $plate);
		return view('plates.create_and_edit', compact('plate'));
	}

	public function update(PlateRequest $request, Plate $plate)
	{
		$this->authorize('update', $plate);
		$plate->update($request->all());

		return redirect()->route('plates.show', $plate->id)->with('message', 'Updated successfully.');
	}

	public function destroy(Plate $plate)
	{
		$this->authorize('destroy', $plate);
		$plate->delete();

		return redirect()->route('plates.index')->with('message', 'Deleted successfully.');
	}
}