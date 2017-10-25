<?php

namespace App\Http\Controllers;

use App\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
   public function addCatagory(){
       return view('admin.catagory.add-catagory');
   }

   public function saveCatagoryInfo(Request $request){
       $category = new Category();
       $category->category_name = $request->category_name;
       $category->category_discription = $request->category_discription;
       $category->publication_status = $request->publication_status;
       $category->save();
       return redirect('/add-catagory')->with('message','category info save successfully');


   }

    public function manageCatagory(){
        $allCategoriesInfo= Category::all();
        return view('admin.catagory.manage-catagory', ['allCategoriesInfo'=>$allCategoriesInfo]);

    }
    public function editCategoryInfo($id){
        $categoryInfoById= Category::find($id);
        return view('admin.catagory.edit-category',['categoryInfoById'=>$categoryInfoById]);
        // return view('admin.category.edit-category');
    }





    public function updateCategoryInfo(Request $request){

        //$category = new category();
        $category = Category::find($request->category_id);
        $category->category_name = $request->category_name;
        $category->category_discription = $request->category_discription;
        $category->publication_status = $request->publication_status;
        $category->save();
        return redirect('/manage-catagory')->with('message','category info update successfully');

        // return view('admin.category.edit-category');
    }

    public function deleteCategory($id){
        $categoryInfoById = Category::find($id);
        $categoryInfoById->delete();
        return redirect('/manage-catagory');
    }

}
