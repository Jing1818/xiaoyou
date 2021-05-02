<?php

namespace App\Http\Controllers;

use App\Models\Topicjoin;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\TopicjoinRequest;

class TopicjoinsController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth', ['except' => ['index', 'show']]);
    }

	public function index()
	{
		$topicjoins = Topicjoin::paginate();
		return view('topicjoins.index', compact('topicjoins'));
	}

    public function show(Topicjoin $topicjoin)
    {
        return view('topicjoins.show', compact('topicjoin'));
    }

	public function create(Topicjoin $topicjoin)
	{
		return view('topicjoins.create_and_edit', compact('topicjoin'));
	}

	public function store(TopicjoinRequest $request)
	{
		$topicjoin = Topicjoin::create($request->all());
		return redirect()->route('topicjoins.show', $topicjoin->id)->with('message', 'Created successfully.');
	}

	public function edit(Topicjoin $topicjoin)
	{
        $this->authorize('update', $topicjoin);
		return view('topicjoins.create_and_edit', compact('topicjoin'));
	}

	public function update(TopicjoinRequest $request, Topicjoin $topicjoin)
	{
		$this->authorize('update', $topicjoin);
		$topicjoin->update($request->all());

		return redirect()->route('topicjoins.show', $topicjoin->id)->with('message', 'Updated successfully.');
	}

	public function destroy(Topicjoin $topicjoin)
	{
		$this->authorize('destroy', $topicjoin);
		$topicjoin->delete();

		return redirect()->route('topicjoins.index')->with('message', 'Deleted successfully.');
	}
}