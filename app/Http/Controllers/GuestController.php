<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Postcard;

class GuestController extends Controller
{
    public function home() {

        return view('pages.home');
    }

    public function create() {

        return view('pages.create');
    }

    public function store(Request $request) {

        // $data = $request -> all();

        $data = $request -> validate([
            'sender' => 'required|string',
            'address' => 'required|string',
            'text' => 'required|string',
        ]);


        $image = $request -> file('img');
        $imageName = rand(1000, 999999) . '_' .time() . '.' . $image -> getClientOriginalExtension();

        $image -> storeAs('/assets/', $imageName, 'public');


        $data['img'] = $imageName;

        $postcard = Postcard::create($data);

        return redirect() -> route('home');
    }
}
