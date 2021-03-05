<?php


namespace App\Http\Controllers\Api\Client;

use Illuminate\Http\Request;
use App\Http\Controllers\Api\Controller;
use App\Models\ClientModel;
use Validator;

class ClientController extends Controller
{

    public function client() {

      return response()->json(ClientModel::get(), 200);
   }

    public function clientById($id) {

       $client = ClientModel::find($id);

       if (is_null($client)) {
           return  response()->json(['error' =>true, 'message' => 'Not found'], 404);
       }
           return response()->json($client, 200);
    }

    public function clientSave(Request $req){
        try{
            $user = auth()->userOrFail();
        } catch (\Tymon\JWTAuth\Exceptions\UserNotDefinedException $e){
            return  response()->json(['error' =>true, 'message' => $e->getMessage()], 401);
        }
        $rules = [
            'fio' => 'required|min:9|max:150',
            'email' => 'required|min:9|max:50'
        ];

        $validator = Validator::make($req->all(), $rules);

        if ($validator->fails())  {
            return response() ->json($validator->errors(), 400);
        }

           $client = ClientModel::create($req->all());

           return response()->json($client,201);

    }


    public function clientEdit(Request $req, $id){
        try{
            $user = auth()->userOrFail();
        } catch (\Tymon\JWTAuth\Exceptions\UserNotDefinedException $e){
            return  response()->json(['error' =>true, 'message' => $e->getMessage()], 401);
        }
        $client = ClientModel::find($id);

        if (is_null($client)) {
            return  response()->json(['error' =>true, 'message' => 'Not found', 404]);
        }

        $rules = [
            'fio' => 'required|min:9|max:150',
            'email' => 'required|min:9|max:50'
        ];

        $validator = Validator::make($req->all(), $rules);

        if ($validator->fails())  {
            return response() ->json($validator->errors(), 400);
        }

        $client->update($req->all());

        return response()->json($client,200);
    }

    public function clientDelete(Request $req, $id){
        try{
            $user = auth()->userOrFail();
        } catch (\Tymon\JWTAuth\Exceptions\UserNotDefinedException $e){
            return  response()->json(['error' =>true, 'message' => $e->getMessage()], 401);
        }

        $client = ClientModel::find($id);

        if (is_null($client)) {
            return  response()->json(['error' =>true, 'message' => 'Not found', 404]);
        }

        $client->delete();
        return response()->json('',204);
    }
}
