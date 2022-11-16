<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FullNameController extends Controller
{
    public $fullName;
    public function fullName(Request $request)
    {
        $this->fullName = $request->first_name.' '.$request->last_name;

        return redirect()->back()->with('result', $this->fullName);
    }
}
