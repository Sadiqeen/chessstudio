<?php

namespace App\Http\Controllers;

use App\Http\Requests\Member;
use App\Models\Member as ModelsMember;
use Illuminate\Http\Request;

class MembersController extends Controller
{
    public function index()
    {
        return view('index');
    }

    public function store(Member $member)
    {
        $memberStored = ModelsMember::create($member->validated());
        return view('thank-you', [
            'name' => $memberStored->name,
        ]);
    }
}
