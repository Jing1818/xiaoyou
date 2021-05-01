<?php

namespace App\Http\Controllers;

use App\Models\Follow;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\FollowRequest;

class FollowsController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth', ['except' => ['index', 'show']]);
    }

	public function index()
	{
		$follows = Follow::paginate();
		return view('follows.index', compact('follows'));
	}

    public function show(Follow $follow)
    {
        return view('follows.show', compact('follow'));
    }

	public function create(Follow $follow)
	{
		return view('follows.create_and_edit', compact('follow'));
	}

	public function store(FollowRequest $request)
	{
		$follow = Follow::create($request->all());
		return redirect()->route('follows.show', $follow->id)->with('message', 'Created successfully.');
	}

	public function edit(Follow $follow)
	{
        $this->authorize('update', $follow);
		return view('follows.create_and_edit', compact('follow'));
	}

	public function update(FollowRequest $request, Follow $follow)
	{
		$this->authorize('update', $follow);
		$follow->update($request->all());

		return redirect()->route('follows.show', $follow->id)->with('message', 'Updated successfully.');
	}

	public function destroy(Follow $follow)
	{
		$this->authorize('destroy', $follow);
		$follow->delete();

		return redirect()->route('follows.index')->with('message', 'Deleted successfully.');
	}
}