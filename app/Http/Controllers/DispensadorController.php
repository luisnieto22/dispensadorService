<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Traits\ApiResponser;
use App\Dispensador;


class DispensadorController extends Controller
{

    use  ApiResponser;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    public function index(){
        $dispensadores = Dispensador::all();
        return $this->successResponse($dispensadores);
    }

    public function show($dispensador){
        $dispensador = Dispensador::findOrFail($dispensador);
        return $this->successResponse($dispensador);
    }

    public function store(Request $request){
        $rules = [
            'name' => 'required|max:255',
            'gender' => 'required|in:male,female',
            'country' => 'required|max:255'
        ];

        $this->validate($request->all(), $rules);

        $dispensador = Dispensador::create($request->all());
        
        return $this->successResponse($dispensador, Response::HTTP_CREATED);
    }

    public function update(Request $request, $dispensador){
        $rules = [
            'name' => 'required|max:255',
            'gender' => 'required|in:male,female',
            'country' => 'required|max:255'
        ];

        $this->validate($request->all(), $rules);

        $dispensador = Dispensador::findOrFail($dispensador);

        $dispensador->fill($request->all());

        if($dispensador->isClean()){
            return $this->errorResponse('At least one value must be changed', Response::HTTP_UNPROCESSABLE_ENTITY);            
        }
        
        $dispensador->save();

        return $this->successResponse($dispensador);
    }

    public function destroy($dispensador){
        $dispensador = Dispensador::findOrFail($dispensador);
        $dispensador->delete();
        return $this->successResponse($dispensador);
    }
}