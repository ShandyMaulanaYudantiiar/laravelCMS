<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Models\articles;
use App\Models\categories;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

/**
 * API Article
 */
Route::get('articles', function() {
    return articles::all();
});
 
Route::get('articles/{id}', function($id) {
    if (isset($id)) {
        return articles::find($id);
    } else {
        return "ID tidak ditemukan";
    }
});

Route::post('articles', function(Request $request) {
    return articles::create($request->all());
});

Route::put('articles/{id}', function(Request $request, $id) {
    if (isset($id)) {
        $article = Articles::findOrFail($id);
        $article->update($request->all());

        return $article;
    } else {
        return "ID tidak ditemukan";
    }
});

Route::delete('articles/{id}', function($id) {
    if (isset($id)) {
        Articles::find($id)->delete();
        return "Data berhasil dihapus";
    } else {
        return "ID tidak ditemukan";
    }
});

/**
 * API Category
 */

Route::get('category', function() {
    return categories::all();
});

Route::get('category/{id}', function($id) {
    if (isset($id)) {
        return categories::find($id);
    } else {
        return "ID tidak ditemukan";
    }
});

Route::post('category', function(Request $request) {
    return categories::create($request->all());
});

Route::put('category/{id}', function(Request $request, $id) {
    if (isset($id)) {
        $category = category::findOrFail($id);
        $category->update($request->all());

        return $category;
    } else {
        return "ID tidak ditemukan";
    }
});

Route::delete('articles/{id}', function($id) {
    if (isset($id)) {
        category::find($id)->delete();
        return "Data berhasil dihapus";
    } else {
        return "ID tidak ditemukan";
    }
});