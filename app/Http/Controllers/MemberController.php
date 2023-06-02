<?php

namespace App\Http\Controllers;
use App\Models\P_trainer;
use App\Models\Member;
use Illuminate\Http\Request;

class MemberController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $members = Member::latest()->paginate(10);
        return view('member.index', compact('members'));
    }

    public function search(Request $request)
    {
        $keyword = $request->search;
        $members = Member::where('name', 'like', '%' . $keyword . '%')->paginate(10);
        return view('member.index', compact('members'))->with('1', (request()->input('page',1) - 1) * 10);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $p_trainers = P_trainer::all();
        return view('member.create', compact('p_trainers'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        $request->validate([
            'name'=>'required|string|min:3',
            'email'=>'required|email:dns',
            'phone'=>'required',
            'address'=>'required',
            'join_at' => 'required',
            'expired' => 'required',
            'p_trainer_id'=> 'required',
            'user_id' => 'required',
        ]);

        Member::create($request->all());
        return redirect()->route('member.index')->with('success', 'Member has been added.');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $member = Member::findOrFail($id);
        return view('member.show', compact('member'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Member $member)
    {
        return view('member.edit', compact('member'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Member $member)
    {
        $request->validate([
            'name'=>'required|string',
            'email'=>'required|email:dns',
            'phone'=>'required',
            'address'=>'required',
            'join_at' => 'required',
            'user_id'=>'required',
            'p_trainer_id' => 'required',
            'expired' => 'required'
        ]);

        $member->update($request->all());
        return redirect()->route('member.index')->with('success', 'Data member has been updated.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $member = Member::findOrFail($id);
        $member->delete();
        return redirect()->route('member.index')->with('success','Data member has been deleted.');
    }
}
