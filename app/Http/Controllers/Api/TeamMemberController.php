<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\TeamMember;

class TeamMemberController extends Controller
{
    public function index()
    {
        return TeamMember::all();
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string',
            'role' => 'required|string',
            'image' => 'nullable|string',
            'bio' => 'nullable|string',
            'linkedin' => 'nullable|string',
            'twitter' => 'nullable|string',
            'github' => 'nullable|string',
            'email' => 'nullable|email',
        ]);

        return TeamMember::create($validated);
    }

    public function show(TeamMember $teamMember)
    {
        return $teamMember;
    }

    public function update(Request $request, TeamMember $teamMember)
    {
        $teamMember->update($request->all());
        return $teamMember;
    }

    public function destroy(TeamMember $teamMember)
    {
        $teamMember->delete();
        return response()->noContent();
    }
}
