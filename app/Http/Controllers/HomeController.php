<?php

namespace App\Http\Controllers;

use App\Category;
use App\Comment;
use App\Http\Requests\LoginRequest;
use App\Product;
use App\User;
use Gloudemans\Shoppingcart\Facades\Cart;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class HomeController extends Controller
{

    public function index()
    {
        return view('frontend.home')->withProducts(Product::all())
            ->withCategories(Category::all());
    }

    public function getDetailProduct($id)
    {
        return view('frontend.detail-product')->withProduct(Product::findOrFail($id))
            ->withComments(Comment::where('id_product',$id)->get());
    }

    public function getFormLogin()
    {
        return view('frontend.login');
    }

    public function register(Request $request)
    {
        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone,
            'password' => Hash::make($request->password),
        ]);

//        return back()->withFlas
    }



    public function getAllProducts()
    {
        return view('frontend.product')->withProducts(Product::all());
    }

    public function getResultSearch($params)
    {
        if (count($params) == 0) {
            return Product::all();
        } else {
            $query = Product::query();
            if (isset($params['categories'])) {
                $categories = $params['categories'];
                $query->whereHas('category', function ($query) use ($categories) {
                    $query->whereIn('id', $categories);
                });
            }
            if (isset($params['star'])) {
                $query->whereIn('star', $params['star']);
            }
            if (isset($params['sort'])) {
                switch ($params['sort']) {
                    case "0" :
                        $query->orderBy('price', 'desc');
                        break;
                    case "1" :
                        $query->orderBy('name', 'desc');
                        break;
                    case "2" :
                        $query->orderBy('star', 'desc');
                        break;
                }
            }

            return $query->orderBy('id', 'desc')->paginate(5);
        }
    }

    public function getResultFilter(Request $request)
    {
        $products = $this->getResultSearch($request->all());
        $returnHTML = view('frontend.product-response')->withProducts($products)->render();
        return response()->json(array('success' => true, 'html' => $returnHTML));
    }

    public function getFormLoginAdmin()
    {
        return view('backend.layout.login');
    }


    public function addProductToCart($id)
    {
        $product = Product::findOrFail($id);
        $cart = Cart::add(['id' => $product->id, 'name' => $product->name, 'qty' => 1, 'price' => $product->price, 'weight' => 0, 'options' => ['image' => $product->img]]);
        return response()->json(['cart' => $cart, 'message' => __('frontend.add-cart')], 200);
    }

    public function getCart()
    {
        $cart = Cart::content();
        return view('frontend.cart')->withCart($cart);
    }


    public function searchItemCart($cart, $rowId)
    {
        return $cart->search(function ($cartItem, $rowId) {
            return $cartItem->id == $rowId;
        });
    }

    public function getTotalCart()
    {
        $totalItem = Cart::count();
        echo $totalItem;
    }

    public function Checkout()
    {
        return view('frontend.checkout');
    }

    public function DestroyItemCart($id)
    {
        Cart::remove($id);
        echo __('frontend.destroy-cart');
    }

    public function UpdateItemCart($id, Request $request)
    {
        $qty = intval($request->qty);
        Cart::update($id, $qty);
        $cart = Cart::get($id);
        return response()->json(['cart' => $cart, 'message' => __('frontend.update-cart')], 200);
    }

    public function CheckoutOrder(Request $request)
    {

    }
}
