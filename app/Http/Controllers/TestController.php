<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Crud;
use Collective\Html\Eloquent\FormAccessible;
use Collective\Html\FormFacade;

class TestController extends Controller
{
    public static function Test(){

      $formHeader = (object)[

        'action' => 'TestController@addWebsite',
        'method' => 'POST',
      ];

      $values = (object) [
        'url' => (object)[
          'type' => 'text',
          'name' => 'Website Url',
          'placeholder' => 'http://'
        ],
        'category_id' => (object)[
          'type' => 'text',
          'name' => 'Category',
          'placeholder' => 'category'
        ],
        'description' => (object)[
          'type' => 'textarea',
          'name' => 'Description',
          'placeholder' => 'description'
        ],
        'logo' => (object)[

          'type' => 'file',
          'name' => 'Logo'
        ],
        'age_restrict' => (object)[
          'type' => 'checkbox',
          'name' => 'Age Restriction',
          'check' => false
        ]
      ];

      return view('layouts.crud.add-edit')->with('name', Crud::name())->with('values', $values)->with('formHeader', $formHeader);

    }

    public function Category(){

      $formHeader = (object)[

        'action' => 'TestController@Test',
        'method' => 'POST',
      ];

      $values = (object) [
        'website_url' => (object)[
          'type' => 'text',
          'name' => 'url',
          'placeholder' => 'http://'
        ],
        'category' => (object)[
          'type' => 'text',
          'name' => 'category_id',
          'placeholder' => 'category'
        ],
        'description' => (object)[
          'type' => 'textarea',
          'name' => 'Description',
          'placeholder' => 'description'
        ],
        'logo' => (object)[

          'type' => 'file',
          'name' => 'Logo'
        ],
        'age_restrict' => (object)[
          'type' => 'checkbox',
          'name' => 'Age Restriction',
          'check' => false
        ]
      ];

      return view('layouts.crud.add-edit')->with('name', Crud::name())->with('values', $values)->with('formHeader', $formHeader);
    }

    public function addWebsite(Request $request){

    //   $this->validate(request(), [
    //     'url' => 'required',
    //     'user_id' => 'required',
    //     'validated' => 'required',
    //     'category_id' => 'required',
    // ]); 
      
      $website = array(
        'url' => $request->url,
        'user_id' => 3,
        'validated' => 1,
        'category_id' => $request->category_id,

    );

     return postOrPUTDATA('POST','http://localhost:8000/website/', $website);
    }
}
