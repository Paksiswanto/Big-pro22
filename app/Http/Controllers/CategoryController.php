<?php

namespace App\Http\Controllers;

use App\Exports\CategoryExport;
use App\Exports\DownloadCategory;
use App\Exports\ExportCategory;
use App\Exports\ExportItem;
use App\Imports\CategoryImport;
use App\Models\Category;
use App\Models\CategoryType;
use App\Models\Company;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Maatwebsite\Excel\Facades\Excel;

class CategoryController extends Controller
{
    public function category_index()
    {
        $categories = Category::latest()->get();
        return view('category.index', compact('categories'));
    }
    public function category_add()
    {
        $category_type = CategoryType::all();
        $category = Category::all();
        return view('category.add',compact('category','category_type'));
    }
    public function create_category(Request $request)
    {
        Category::create($request->all());

        return redirect('/category')->with('success', 'Data berhasil ditambahkan');
    }
    public function category_edit($id)
    {
        $category = Category::find($id);
        $categoryTypes = CategoryType::all();
        return view('category.edit', compact('category', 'categoryTypes'));
    }

    public function edit_category(Request $request, $id)
    {
        $category = Category::find($id);
        $category->update([
            'name' => $request->input('name'),
            'parent' => $request->input('parent'),
            'color' => $request->input('color'),
            'category_type_id' => $request->input('category_type'),
        ]);
    
        return redirect('/category')->with('success', 'Data berhasil diperbarui');
    }    
    public function delete_category($id)
    {
        $category = Category::find($id);
        $category->delete();
        return redirect()->back()->with('success', 'Data berhasil dihapus');
    }
    public function ImportCategory()
    {
        $category_type = CategoryType::all();
        return view('category.ExportImport.import',compact('category_type'));
    }
    public function ImportDataCategory(Request $request)
    {

        $this->validate($request, [
            'myFile' => 'required|mimes:xls,xlsx'
        ]);
        
        $file = $request->file('myFile');

        try {
            Excel::import(new CategoryImport, $file);

            return redirect()->back()->with('success', 'Data berhasil diimport. Jumlah baris yang diimpor:');
        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'Terjadi kesalahan saat mengimpor data: ' . $e->getMessage());
        }
    }
    public function DownloadCategory()
    {
        $category_type = CategoryType::get()->toArray();
        $category = Category::get()->toArray();
        $company = Company::get()->toArray();
        
        $randomNumber = random_int(1000, 9999); // Menghasilkan nomor acak antara 1000 dan 9999
        
        $fileName = 'Dataset_' . $randomNumber . '.xlsx'; // Gabungkan nomor acak dengan nama file
        
        return (new DownloadCategory($category_type,$category,$company))->download($fileName);
    }
    public function ExportCategory()
      {
          $category_type = CategoryType::all();
          $company = Company::all();
          
          $randomNumber = random_int(1000, 9999); // Menghasilkan nomor acak antara 1000 dan 9999
          
          $fileName = 'Item_' . $randomNumber . '.xlsx'; // Gabungkan nomor acak dengan nama file
          
          return Excel::download(new CategoryExport($category_type->toArray(), $company->toArray()), $fileName);
      }
}
