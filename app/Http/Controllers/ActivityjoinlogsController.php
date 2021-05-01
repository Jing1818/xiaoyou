<?php

namespace App\Http\Controllers;

use App\Models\Activityjoinlog;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\ActivityjoinlogRequest;

class ActivityjoinlogsController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth', ['except' => ['index', 'show']]);
    }

	public function index()
	{
		$activityjoinlogs = Activityjoinlog::paginate();
		return view('activityjoinlogs.index', compact('activityjoinlogs'));
	}

    public function show(Activityjoinlog $activityjoinlog)
    {
        return view('activityjoinlogs.show', compact('activityjoinlog'));
    }

	public function create(Activityjoinlog $activityjoinlog)
	{
		return view('activityjoinlogs.create_and_edit', compact('activityjoinlog'));
	}

	public function store(ActivityjoinlogRequest $request)
	{
		$activityjoinlog = Activityjoinlog::create($request->all());
		return redirect()->route('activityjoinlogs.show', $activityjoinlog->id)->with('message', 'Created successfully.');
	}

	public function edit(Activityjoinlog $activityjoinlog)
	{
        $this->authorize('update', $activityjoinlog);
		return view('activityjoinlogs.create_and_edit', compact('activityjoinlog'));
	}

	public function update(ActivityjoinlogRequest $request, Activityjoinlog $activityjoinlog)
	{
		$this->authorize('update', $activityjoinlog);
		$activityjoinlog->update($request->all());

		return redirect()->route('activityjoinlogs.show', $activityjoinlog->id)->with('message', 'Updated successfully.');
	}

	public function destroy(Activityjoinlog $activityjoinlog)
	{
		$this->authorize('destroy', $activityjoinlog);
		$activityjoinlog->delete();

		return redirect()->route('activityjoinlogs.index')->with('message', 'Deleted successfully.');
	}
}