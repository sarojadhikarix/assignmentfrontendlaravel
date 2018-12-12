<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;


class RegisterController extends Controller
{
    public function register()
    {
        $client = new \GuzzleHttp\Client();
        $response = $client->request('GET', 'http://localhost:9000/user/roles/');
        $response = $response->getBody()->getContents();

        $roles = json_decode($response, true);

        return view('auth.register', compact('roles'));
    }

    public function save(Request $request)
    {
        $client = new \GuzzleHttp\Client();
        $response = $client->request('POST', 'http://localhost:9000/register/save', [
            'form_params' => $request->all(),
        ]);
        $response = $response->getBody()->getContents();
        if ($response) {
            return redirect()->route('website.add');
        }

        return false;
    }
}
