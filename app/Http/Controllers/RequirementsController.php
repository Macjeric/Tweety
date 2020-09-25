<?php

namespace App\Http\Controllers;

use App\User;
use App\Tweet;
use App\Requirement;

use Illuminate\Http\Request;


class RequirementsController extends Controller
{
    //
    public function index(User $user)
    {

    	// $requirements = Requirement::All();

    	return view('requirements.index', [
            'requireUser' => auth()
                ->user()
        ]);
    }

    public function show()
    {
    	// $requirements = Requirement::All();
    	return view('requirements.show', [
            'requireUser' => auth()
                ->user()
        ]);
    }

    public function edit(User $user)
    {
        return view('requirements.edit', [
            'requireUser' => auth()
                ->user()
        ]);
    }
}
