<?php

namespace App\Http\Controllers;

use App\Models\Orders;
use App\Models\OrdersProducts;
use App\Models\Products;
use Illuminate\Http\Request;
use Throwable;


class OrdersController extends Controller
{
    protected $FAST_SHIPPING_PRICE = 7.00;
    protected $TAX = 0.05;

    public function __construct()
    {
        $this->middleware('auth:api', ['except' => ['orderByID']]);
    }

    public function createOrder(Request $request)
    {
        $cartItems = $request["cartItems"];
        $shipping = $request["shippingData"];
        $personal = $shipping["personal"];
        $address = $shipping["address"];
        $fast_shipping = $request["fastShipping"];

        $subtotal = 0;
        $productList = [];
        try{

            foreach($cartItems as $product){
                $id = $product["product"]["id"];

                $productByID = Products::where("product_id", $id)->get();
                $productByID = $productByID[0];

                if ($productByID == null){
                    $error = "Error: There isn't a product with $id";
                    return response()->json($error, 500);
                }

                $qty = (int)$product["qty"];

                if ($qty <= $productByID["stock"]){
                    array_push($productList, $productByID);
                    $subtotal += $productByID->price * $qty;
                }else{
                    $error = "Error: There are $productByID->stock items in stock";
                    return response()->json($error, 500);
                }
            }

            $subtotal = number_format((float)$subtotal, 2, ".", "");
            $shipping_price = ($fast_shipping["fast_shipping"]) ? $this->FAST_SHIPPING_PRICE : 0.00;
            $tax_price = number_format((float)($subtotal * $this->TAX), 2, ".", "");
            $total_price = $subtotal + $shipping_price + $tax_price;

        }catch(Throwable $e){
            report($e);

            return false;
        }

        $order = Orders::Create([
            "order_id" => uniqid("ORD."),
            "firstname" => $personal["firstName"],
            "lastname" => $personal["lastName"],
            "phone" => $personal["phone"],
            "email" => $personal["email"],

            "address" => $address["street"],
            "city" => $address["city"],
            "country" => $address["country"],
            "zipcode" => $address["zip"],

            "payment_method" => "Online",

            "subtotal" => $subtotal,
            "shipping_price" => $shipping_price,
            "tax_price" => $tax_price,
            "total_price" => $total_price,

            "user_id" => auth()->user()->id,

            "is_paid" => false,
            "paid_at" => null,
            "is_delivered" => false,
            "delivered_at" => null,
        ]);


        foreach($cartItems as $cartProduct){
            $id = $cartProduct["product"]["id"];
            foreach($productList as $value) if($value['product_id'] == $id) $productFromList = $value;

            $color = $cartProduct["color"];
            $product_ID = (int)$productFromList["id"];
            $size = (double)$cartProduct["size"];
            $price = $productFromList["price"];
            $qty = (int)$cartProduct["qty"];
            $subtotal = $price * $qty;

            $product = OrdersProducts::create([
                "orders_id" => $order["id"],
                "products_id" => $product_ID,
                "color" => $color,
                "size" => $size,
                "qty" => $qty,
                "price" => $price,
                "total_price" => $subtotal,
            ]);

        }


        return response()->json($order["order_id"], 200);
    }


    public function createMobileOrder(Request $request){
        $cartItems = $request["cartItems"];
        $shipping = $request["shippingData"];
        $fast_shipping = $request["fast_shipping"];

        $subtotal = 0;
        $productList = [];

        dd($cartItems);

        /*try{
            foreach($cartItems as $product){
                $id = $product["product"]["id"];

                $productByID = Products::where("product_id", $id)->get();
                $productByID = $productByID[0];

                if ($productByID == null){
                    $error = "Error: There isn't a product with $id";
                    return response()->json($error, 500);
                }

                $qty = (int)$product["qty"];

                if ($qty <= $productByID["stock"]){
                    array_push($productList, $productByID);
                    $subtotal += $productByID->price * $qty;
                }else{
                    $error = "Error: There are $productByID->stock items in stock";
                    return response()->json($error, 500);
                }
            }

            $subtotal = number_format((float)$subtotal, 2, ".", "");
            $shipping_price = ($fast_shipping["fast_shipping"]) ? $this->FAST_SHIPPING_PRICE : 0.00;
            $tax_price = number_format((float)($subtotal * $this->TAX), 2, ".", "");
            $total_price = $subtotal + $shipping_price + $tax_price;

        }catch(Throwable $e){
            report($e);

            return false;
        }*/


    }


    public function orderByID($order_id)
    {
        return Orders::where("order_id", $order_id)->with("product")->get();
    }

    public function getAllOrders(){
        return Orders::where("user_id", auth()->user()->id)->orderBy("created_at", "DESC")->get();
    }
}

