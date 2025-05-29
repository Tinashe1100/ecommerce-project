<?php

namespace App\Http\Controllers;

use App\Models\RegisteredCategory;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class RegisteredCategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

        $categories =  DB::table('users')
            ->join('registered_categories', 'users.id', '=', 'registered_categories.user_id')
            ->where('users.id', Auth::id())
            ->get();

        return view('dashboard.categories', [
            'myCategories' => $categories,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('dashboard.buy-category');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = request()->input('category_name');
        // $purchasedCategories = [];

        foreach ($data as $category) {
            $model = new RegisteredCategory();
            $model->category_name = $category;
            $model->user_id = Auth::id();
            $model->save();

            // $purchasedCategories[] = [
            //     'id' => $model->id,
            //     'category_name' => $model->category_name
            // ];
        }

        return redirect('categories');
    }

    /**
     * Display the specified resource.
     */
    public function show(RegisteredCategory $registeredCategory)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(RegisteredCategory $registeredCategory)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, RegisteredCategory $registeredCategory)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(RegisteredCategory $registeredCategory)
    {
        //
    }
}
