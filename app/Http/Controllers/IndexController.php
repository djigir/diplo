<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    const PER_PAGE = 6;

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function index(Request $request)
    {
        if($request->has('index-search')) {
            $products = Product::where('title', 'like', "%{$request->input('index-search')}%")->paginate(self::PER_PAGE);
        }else{
            $products = Product::paginate(self::PER_PAGE);
        }
        return view('index', ['products' => $products, 'search' => $request->input('index-search')]);
    }


    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function show($id)
    {
        $product = Product::findOrFail($id);
        return view('index.show', ['product' => $product]);
    }


}
