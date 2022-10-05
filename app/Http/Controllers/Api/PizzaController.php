<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Pizza;
use App\Models\Category;
use Illuminate\Http\Request;

class PizzaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        try {
            $pizza = Pizza::with('category')->orderBy('id', 'desc')->get();
            return response()->json([
                'success' => true,
                'data' => $pizza
            ]);
        } catch (\Exception $e) {
            return response()->json([
                'success' => false,
                'message' => $e->getMessage(),
            ]);
        }
    }
    public function getPizzaById($id)
    {
        try {
            $pizza = Pizza::with('category')->findOrFail($id);
            return response()->json([
                'success' => true,
                'data' => $pizza
            ]);
        } catch (\Exception $e) {
            return response()->json([
                'success' => false,
                'message' => $e->getMessage(),
            ]);
        }
    }
    public function search($search)
    {
        try {
            $pizza = Pizza::where('name', 'LIKE', '%' . $search . '%')->orderBy('id', 'desc')->with('category')->get();
            if ($pizza) {
                return response()->json([
                    'success' => true,
                    'data' => $pizza,
                ]);
            }
        } catch (Exception $e) {
            return response()->json([
                'success' => false,
                'message' => $e->getMessage(),
            ]);
        }
    }



}
