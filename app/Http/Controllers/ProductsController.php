<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProductCreateRequest;
use App\Http\Requests\ProductUpdateRequest;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ProductsController extends Controller
{
    public function index(Request $request)
    {
        $categories = Category::withCount('products')->get();
        $selectCategory = null;
        if ($category_id = $request->category_id) {
            $products = Product::where('category_id', $category_id)->get();
            $selectCategory = $category_id;
        } else {
            $products = Product::all();
        }
        $sumProducts = 0;
        foreach ($categories as $category) {
            $sumProducts += $category->products_count;
        }
        return view('catalog',[
            'categories' => $categories,
            'sumProducts' => $sumProducts,
            'products' => $products,
            'selectCategory' => $selectCategory,
        ]);
    }

    public function create()
    {
        $categories = Category::all();
        return view('admin.product.create', [
            'categories' => $categories
        ]);
    }

    public function store(ProductCreateRequest $request)
    {
        $data = $request->validated();
        $data['image'] = Storage::disk('public')->put('products', $request->image);
        $product = Product::create($data);
        session()->flash('notification', [
            'type' => 'success',
            'message' => 'Товар "' . $product->name .'" создан'
        ]);
        return redirect()->route('admin.index');
    }

    public function edit(Product $product)
    {
        $categories = Category::all();
        return view('admin.product.edit', [
            'product' => $product,
            'categories' => $categories
        ]);
    }

    public function show($product)
    {
        $product = Product::with('category')->find($product);
        $relatedProducts = Product::whereNot('id', $product->id)->where('category_id', $product->category->id)->get();
        return view('product.show', [
            'product' => $product,
            'relatedProducts' => $relatedProducts,
        ]);
    }

    public function update(ProductUpdateRequest $request, Product $product)
    {
        $data = $request->validated();
        if (isset($data['image'])) {
            Storage::disk('public')->delete($product->image);
            $data['image'] = Storage::disk('public')->put('products', $request->image);
        }
        $product->update($data);
        session()->flash('notification', [
            'type' => 'success',
            'message' => 'Товар "' . $product->name . '" успешно обновлен'
        ]);
        return redirect()->route('admin.index');
    }

    public function destroy(Product $product)
    {
        Storage::disk('public')->delete($product->image);
        $product->delete();
        session()->flash('notification', [
            'type' => 'success',
            'message' => 'Товар успешно удален'
        ]);
        return redirect()->route('admin.index');
    }
}
