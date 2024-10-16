<?php


namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product; 
class ProductController extends Controller
{
    // Get all products
    public function index()
    {
        return Product::all();
    }

    // Get a specific product by ID
    public function show($id)
    {
        return Product::findOrFail($id);
    }

    // Add a new product
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|string',
            'category' => 'required|string',
            'active_ingredients' => 'required',
            'batch_number' => 'required|string',
            'research_status' => 'required|string',
            'manufacturing_date' => 'required|date',
            'expiration_date' => 'required|date',
        ]);

        return Product::create($validatedData);
    }

    // Update a product
    public function update(Request $request, $id)
    {
        $product = Product::findOrFail($id);
        $validatedData = $request->validate([
            'name' => 'required|string',
            'category' => 'required|string',
            'active_ingredients' => 'required',
            'batch_number' => 'required|string',
            'research_status' => 'required|string',
            'manufacturing_date' => 'required|date',
            'expiration_date' => 'required|date',
        ]);

        $product->update($validatedData);
        return $product;
    }

    // Delete a product
    public function destroy($id)
    {
        $product = Product::findOrFail($id);
        $product->delete();
        return response(null, 204);
    }
}
