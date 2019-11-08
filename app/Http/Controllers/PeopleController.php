<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\People;
use App\Http\Resources\People as PeopleResource;

class PeopleController extends Controller
{
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
      // Get People#
      $people = People::paginate($id);

      //Return collection of poeple as resource
      return PeopleResource::collection($people);
    }
}
