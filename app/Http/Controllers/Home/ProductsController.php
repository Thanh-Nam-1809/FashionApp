<?php

namespace App\Http\Controllers\Home;

use App\Http\Controllers\Controller;
use App\Models\Banners;
use App\Models\Products;
use Illuminate\Http\Request;

class ProductsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('home.index', [
            // 'products' => Products::orderbyDesc('id')->paginate(100),
            'products' => Products::orderBy('updated_at', 'desc')->take(6)->get(),
            'features' => Products::orderBy('updated_at', 'desc')->paginate(3),
            'banners' => Banners::orderBy('updated_at', 'desc')->take(3)->get(),
        ]);
    }

    public function all()
    {
        return view('home.list', [
            'products' => Products::orderBy('updated_at', 'desc')->paginate(12),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        Products::create([
            'title' => $request->title,
            'content' => $request->content,
            'price' => $request->price,
            'image_path' => $this->storeImage($request),
            'gender' => $request->gender,
            'description' => $request->description,
            'detail' => $request->detail,
            'condition' => $request->condition,
        ])->paginate(12);

        return redirect(route('home.list'));
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        return view('home.show', [
            'product' => Products::findOrFail($id),
            'products' => Products::orderBy('updated_at', 'desc')->take(4)->get(),
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }

    public function storeImage($request)
    {
        $newImageName = uniqid() . '-' . $request -> title . '.' .
        $request->image_path->extension();

        return $request->image_path->move(public_path('image_path'), $newImageName);
    }

    // ==============================================================

    public function cart()
    {
        return view('home.cart', [
            'products' => Products::orderBy('updated_at', 'desc')->take(4)->get(),
        ]);
    }

    // ===============================================================

    public function check()
    {
        return view('home.checkout');
    }

    public function oder()
    {
        return view('home.oder');
    }

    public function profile()
    {
        return view('home.profile');
    }

    public function address()
    {
        return view('home.address');
    }

    public function editAddress()
    {
        return view('home.editAddress');
    }
}
