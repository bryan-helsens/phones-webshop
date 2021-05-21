<?php

namespace App\Http\Controllers;

use App\Models\Account;
use App\Models\User;
use Closure;
use GuzzleHttp\Psr7\Response;
use Illuminate\Http\Request;
use function PHPUnit\Framework\isEmpty;
use function Sodium\add;
use Throwable;
use Tymon\JWTAuth\Exceptions\TokenInvalidException;

class AccountController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:api');
    }

    public function createAccount(Request $request){
        try{
            $personal = $request["personal"];
            $address = $request["address"];

            $account = auth()->user()->account;

            if (empty($account)){
                $this->createNewAccount($personal, $address);
            }else{
                $this->updateAccount($personal, $address);
            }

            return response()->json($account, 200);

        }catch(Throwable $e){
            report($e);
            $error = "Error: Something wen't wrong";
            return response()->json($error, 500);
        }
    }

    public function createAccountMobile(Request $request){

        try{

            $personal = $request;

            $account = auth()->user()->account;

            if (empty($account)){
                $this->createNewAccountMobile($personal);
            }else{
                $this->updateAccountMobile($personal);
            }

            return response()->json(["message" => $account], 200);


        }catch(Throwable $e){
            report($e);
            $error = "Error: Something wen't wrong";
            return response()->json(["message" => $error], 500);
        }
    }


    public function createNewAccount($personal, $address){
        $account = Account::Create([
            "firstname" => $personal["firstName"],
            "lastname" => $personal["lastName"],
            "phone" => $personal["phone"],
            "email" => $personal["email"],

            "address" => $address["street"],
            "city" => $address["city"],
            "country" => $address["country"],
            "zipcode" => (int)$address["zip"],

            "user_id" => auth()->user()->id,
        ]);
    }

    public function createNewAccountMobile($personal){
        $account = Account::Create([
            "firstname" => $personal["firstname"],
            "lastname" => $personal["lastname"],
            "phone" => $personal["phone"],
            "email" => $personal["email"],

            "address" => $personal["address"],
            "city" => $personal["city"],
            "country" => $personal["country"],
            "zipcode" => (int)$personal["zipcode"],

            "user_id" => auth()->user()->id,
        ]);
    }

    public function updateAccount($personal, $address){
        $account = Account::where('user_id', auth()->user()->id)->update([
            "firstname" => $personal["firstName"],
            "lastname" => $personal["lastName"],
            "phone" => $personal["phone"],
            "email" => $personal["email"],

            "address" => $address["street"],
            "city" => $address["city"],
            "country" => $address["country"],
            "zipcode" => (int)$address["zip"],

            "user_id" => auth()->user()->id,
        ]);
    }

    public function updateAccountMobile($personal){
        $account = Account::where('user_id', auth()->user()->id)->update([
            "firstname" => $personal["firstname"],
            "lastname" => $personal["lastname"],
            "phone" => $personal["phone"],
            "email" => $personal["email"],

            "address" => $personal["address"],
            "city" => $personal["city"],
            "country" => $personal["country"],
            "zipcode" => (int)$personal["zipcode"],

            "user_id" => auth()->user()->id,
        ]);
    }

    public function getAccount()
    {
       try{
           $account = auth()->user()->account;

           if (empty($account)){
               return response()->json($account, 200);
           }

           return response()->json([$account], 200);

       }catch (Throwable $e){
           if ($e instanceof TokenInvalidException) {
               return response()->json($e, 500);
           }
       }
    }
}
