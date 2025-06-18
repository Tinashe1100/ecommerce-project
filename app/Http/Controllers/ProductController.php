<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $products =  DB::table('users')
            ->join('products', 'users.id', '=', 'products.user_id')
            ->where('users.id', Auth::id())
            ->get();

        return view('dashboard.welcome', [
            'authUserProducts' => $products,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $categories =  DB::table('users')
            ->join('registered_categories', 'users.id', '=', 'registered_categories.user_id')
            ->where('users.id', Auth::id())
            ->get();

        return view('dashboard.create', [
            'myCategories' => $categories,
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // form validations
        $data = $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'price' => ['required'],
            'category' => ['required', 'string', 'max:255'],
            'seller_name' => ['required', 'string', 'max:255'],
            'seller_phone' => ['required', 'string', 'max:255'],
            'details' => ['required', 'string', 'max:750'],
        ]);

        if (request()->hasFile('image')) {
            $data['image'] = request()->file('image')->store('uploads', 'public');
        }

        // get authenticated user id
        $data['user_id'] = Auth::id();

        if (Product::create($data)) {
            return redirect('dashboard')->with('message', 'Your case has been submitted');
        } else {
            echo "error";
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(Product $product)
    {
        return view('components.store.details', [
            'product' => $product,
        ]);
    }

    /**
     * add to cart
     */
    public function cart(Request $request, Product $product)
    {

        // get product ID / key
        $productId = $product->id;
        // create a session
        $cart = request()->session()->get('cart', []);
        // put items into newly created cart
        $cart[$productId] = [
            'id' => $product['id'],
            'name' => $product['name'],
            'category' => $product['category'],
            'price' => $product['price'],
            'details' => $product['details'],
            'image' => $product['image'],

        ];
        // store cart data
        request()->session()->put('cart', $cart);

        // dd($cart);

        return redirect('/');
    }



    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Product $product)
    {

        $categories =  DB::table('users')
            ->join('registered_categories', 'users.id', '=', 'registered_categories.user_id')
            ->where('users.id', Auth::id())
            ->get();


        return view('dashboard.edit', [
            'myCategories' => $categories,
            'product' => $product,
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Product $product)
    {
        // form validations
        $data = $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'price' => ['required'],
            'category' => ['required', 'string', 'max:255'],
            'seller_name' => ['required', 'string', 'max:255'],
            'seller_phone' => ['required', 'string', 'max:255'],
            'details' => ['required', 'string', 'max:750'],
        ]);

        if (request()->hasFile('image')) {
            $data['image'] = request()->file('image')->store('uploads', 'public');
        }

        // // get authenticated user id
        // $data['user_id'] = Auth::id();

        if ($product->update($data)) {
            return redirect('dashboard')->with('message', 'Product update successful');
        } else {
            echo "error";
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Product $product)
    {
        if ($product->destroy($product->id)) {
            return redirect('dashboard');
        }
    }
}
