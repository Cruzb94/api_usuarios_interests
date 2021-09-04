<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Interest;
use App\Models\Group;
use Illuminate\Support\Facades\Auth;

class InterestController extends Controller
{
    public function saveInterest(Request $request) {

        $validated = $request->validate([
            'name' => 'required|max:255',
        ]);

        if(!$validated) {
            return response()->json([
                'message' => 'Error with name'
            ], 400);
        } 

        $interest = Interest::create($request->all());

        return response()->json([
            'message' => 'Successfully created interest'], 200
        );
    }

    public function saveInterestUser(Request $request) {

        $validated = $request->validate([
            'interes' => 'required',
        ]);

        if(!$validated) {
            return response()->json([
                'message' => 'Error with value'
            ], 400);
        } 

        $interest_user_group = array(
            'user_id' => $request->user()->id,
            'interest_id' => $request->interes
        );

        $group = Group::create($interest_user_group);

        return response()->json([
            'message' => 'Successfully assigned interest'], 200
        );
    }

    public function getInterests() {
        return response()->json([
            'interests' => Interest::all(),
        ], 200);
    }

    public function getInterestsUser(Request $request) {
        // print_r() $request->all()
        // die();
        // $validated = $request->validate([
        //     'user' => 'required',
        // ]);

        // if(!$validated) {
        //     return response()->json([
        //         'message' => 'User is required'
        //     ], 400);
        // } 

        // return response()->json([
        //     'interests' => Interest::where(),
        // ], 200);
        $product =  User::find($request->user)->interests()->get();
        // $product->çinterests; //this is work
       return $product;
    }
       
}
