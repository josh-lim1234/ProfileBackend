<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\User;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $user = User::updateOrCreate(
            ['email' => $request->get('email')],[
                'name' => $request->name,
                'occupation' => $request->occupation,
                'prior_exp1' => $request->prior_exp1,
                'prior_exp2' => $request->prior_exp2,
                'prior_exp3' => $request->prior_exp3,
                'interest1' => $request->interest1,
                'interest2' => $request->interest2,
                'interest3' => $request->interest3,
                'mtgobj1' => $request->mtgobj1,
                'mtgobj2' => $request->mtgobj2,
                'mtgobj3' => $request->mtgobj3,
            ]
        );
        $user->save();
        return $user;
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return $user=User::where('email', $id)->firstOrFail();
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $user=User::where('email', $id)->firstOrFail()->delete();
        return 'Deletion Successful';
    }
}
