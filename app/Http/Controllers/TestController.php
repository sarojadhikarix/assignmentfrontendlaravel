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

        'action' => 'TestController@Test',
        'method' => 'PUT',
        'enctype' => 'multipart/form-data',
        'id' => 10 //must be requested from database
      ];

      $values = (object) [
        'website_url' => (object)[
          'type' => 'text',
          'name' => 'Website Url',
          'placeholder' => 'http://'
        ],
        'category' => (object)[
          'type' => 'text',
          'name' => 'Category',
          'placeholder' => 'category'
        ],
        'description' => (object)[
          'type' => 'text',
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
          'name' => 'Website Url',
          'placeholder' => 'http://'
        ],
        'category' => (object)[
          'type' => 'text',
          'name' => 'Category',
          'placeholder' => 'category'
        ],
        'description' => (object)[
          'type' => 'text',
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
}
