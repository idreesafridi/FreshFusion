<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use App\Models\ProductAttachment;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AdminController extends Controller
{
    public function dashboard()
    {
        return view('Admin_Panel.home');
    }

    public function UserList()
    {
        return view('Admin_Panel.user');
    }

    public function CategoryList()
    {
        $categories = Category::all();
        return view('Admin_Panel.category', compact('categories'));
    }

    public function CreateCategory()
    {
        return view('Admin_Panel.create_category');
    }

    public function StoreCategory(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'nullable|string',
        ]);

        Category::create($request->all());

        return redirect()->route('admin-category')->with(['type'=>'success','msg'=>'Category Created Successfully','title'=>'Done!']);
    }

    public function EditCategory($id)
    {
        $category = Category::findOrFail($id);
        return view('Admin_Panel.edit_category', compact('category'));
    }

    public function UpdateCategory(Request $request, $id)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'nullable|string',
        ]);

        $category = Category::findOrFail($id);
        $category->update($request->all());

        return redirect()->route('admin-category')->with(['type'=>'success','msg'=>'Category Update Successfully','title'=>'Done!']);
    }

    public function DeleteCategory($id)
    {
        $category = Category::findOrFail($id);
        $category->delete();

        return redirect()->route('admin-category')->with(['type'=>'success','msg'=>'Category Deleted Successfully','title'=>'Done!']);
    }

    public function ProductList()
    {
        $products = product::all();
        // dd($products);
        return view('Admin_Panel.product', compact('products'));
    }

        public function CreateProduct()
    {
        $categories = Category::all();
        return view('Admin_Panel.create_product', compact('categories'));
    }

    public function StoreProduct(Request $request)
    {
        //  dd($request->all());
         $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'nullable|string',
            'price' => 'required|numeric',
            'compare_price' => 'nullable|numeric',
            'sku' => 'nullable|string',
            'barcode' => 'nullable|string',
            'track_qty' => 'nullable', // Removed 'boolean'
            'qty' => 'nullable|integer|min:0',
            'status' => 'required', // Removed 'boolean'
            'category_id' => 'nullable|exists:categories,id',
            'file_path' => 'nullable|file|mimes:jpg,jpeg,png,webp,gif,pdf|max:2048',
        ]);

        $product = Product::create([
            'title' => $request->title,
            'description' => $request->description,
            'price' => $request->price,
            'compare_price' => $request->compare_price,
            'sku' => $request->sku,
            'barcode' => $request->barcode,
            'track_qty' => $request->has('track_qty'),
            'qty' => $request->qty,
            'status' => $request->status,
            'category_id' => $request->category_id,
        ]);
        $filePath = null; // Default to null if no file is uploaded

        if ($request->hasFile('file') && $request->file('file')->isValid()) {
            $file = $request->file('file');
            $filePath = $this->storeFile('Product_images', $file);
        }
        // Make sure that the file_path is passed as null or a valid path
        ProductAttachment::create([
            'product_id' => $product->id,
            'file_path' => $filePath, // This will be null if no file is uploaded
        ]);

        return redirect()->route('admin-product')->with(['type'=>'success','msg'=>'Product Created Successfully','title'=>'Done!']);
    }

    public function EditProduct($id)
    {
        $product = Product::findOrFail($id);
        $categories = Category::all();
        return view('Admin_Panel.edit_product', compact('product', 'categories'));
    }

    public function UpdateProduct(Request $request, $id)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'nullable|string',
            'price' => 'required|numeric',
            'compare_price' => 'nullable|numeric',
            'sku' => 'nullable|string',
            'barcode' => 'nullable|string',
            'track_qty' => 'nullable', // Removed 'boolean'
            'qty' => 'nullable|integer|min:0',
            'status' => 'required', // Removed 'boolean'
            'category_id' => 'nullable|exists:categories,id',
            // Removed file_path validation
        ]);

        $product = Product::findOrFail($id);
        $product->update([
            'title' => $request->title,
            'description' => $request->description,
            'price' => $request->price,
            'compare_price' => $request->compare_price,
            'sku' => $request->sku,
            'barcode' => $request->barcode,
            'track_qty' => $request->has('track_qty'),
            'qty' => $request->qty,
            'status' => $request->status,
            'category_id' => $request->category_id,
        ]);

        $product_image =  ProductAttachment::where('product_id',$id)->first();
            $filePath = $product_image->file_path;
        if ($request->hasFile('file') && $request->file('file')->isValid()) {
                $file = $request->file('file');
                $this->deleteFile($filePath);
                $filePath = $this->storeFile('Product_images', $file);

            $profile  =  ProductAttachment::where('product_id',$id)->update([
                'product_id' => $product->id,
                'file_path' => $filePath,
                ]);

        }

        return redirect()->route('admin-product')->with(['type'=>'success','msg'=>'Product Update Successfully','title'=>'Done!']);
    }

    public function DeleteProduct($id)
    {
        $product = Product::findOrFail($id);
        $product_image =  ProductAttachment::where('product_id',$id)->first();
        $filePath = $product_image->file_path;
        $this->deleteFile($filePath);
        $product->delete();

        return redirect()->route('admin-product')->with(['type'=>'success','msg'=>'Product Deleted Successfully','title'=>'Done!']);
    }

}
