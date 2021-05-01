<?php

namespace App\Http\Controllers;

use App\Models\Userbb;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\UserbbRequest;

class UserbbsController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth', ['except' => ['index', 'show']]);
    }

	public function index()
	{
		$userbbs = Userbb::paginate();
		return view('userbbs.index', compact('userbbs'));
	}

    public function show(Userbb $userbb)
    {
        return view('userbbs.show', compact('userbb'));
    }

	public function create(Userbb $userbb)
	{
		return view('userbbs.create_and_edit', compact('userbb'));
	}

	public function store(UserbbRequest $request)
	{
		$userbb = Userbb::create($request->all());
		return redirect()->route('userbbs.show', $userbb->id)->with('message', 'Created successfully.');
	}

	public function edit(Userbb $userbb)
	{
        $this->authorize('update', $userbb);
		return view('userbbs.create_and_edit', compact('userbb'));
	}

	public function update(UserbbRequest $request, Userbb $userbb)
	{
		$this->authorize('update', $userbb);
		$userbb->update($request->all());

		return redirect()->route('userbbs.show', $userbb->id)->with('message', 'Updated successfully.');
	}

	public function destroy(Userbb $userbb)
	{
		$this->authorize('destroy', $userbb);
		$userbb->delete();

		return redirect()->route('userbbs.index')->with('message', 'Deleted successfully.');
	}
}