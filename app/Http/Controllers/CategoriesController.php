<?php

namespace App\Http\Controllers;

use App\Http\Requests\CategoryStoreRequest;
use App\Http\Requests\CategoryUpdateRequest;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class CategoriesController extends Controller
{
    public function index()
    {
        //
    }

    public function create()
    {
        return view('admin.category.create');
    }

    public function store(CategoryStoreRequest $request)
    {
        $path = Storage::disk('public')->put('categories', $request->image);
        Category::create([
            'name' => $request->name,
            'image' => $path,
        ]);
        session()->flash('notification', [
            'type' => 'success',
            'message' => 'Категория успешно создана'
        ]);
        return redirect()->route('admin.index');
    }

    public function edit(Category $category)
    {
        return view('admin.category.edit', [
            'category' => $category,
        ]);
    }

    public function update(CategoryUpdateRequest $request, Category $category)
    {
        $data = $request->validated();
        if (isset($data['image'])) {
            Storage::disk('public')->delete($category->image);
            $data['image'] = Storage::disk('public')->put('categories', $request->image);
        }
        $category->update($data);
        session()->flash('notification', [
            'type' => 'success',
            'message' => 'Категория успешно Обновлена'
        ]);
        return redirect()->route('admin.index');
    }

    public function destroy(Category $category)
    {
        Storage::disk('public')->delete($category->image);
        $category->delete();
        session()->flash('notification', [
            'type' => 'success',
            'message' => 'Категория успешно удалена'
        ]);
        return redirect()->route('admin.index');
    }
}
