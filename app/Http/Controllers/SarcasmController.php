<?php

namespace App\Http\Controllers;

use App\Models\PentUpSarcasm;
use Illuminate\Http\Request;

class SarcasmController extends Controller
{

    public function index()
    {
        return response()->json(['message' => 'Your time is valuable spent somewhere else, but here we are.']);
    }


    /**
    * Display the specified resource.
    * 
    * Because clearly, the world was desperately waiting for yet another 
    * retrieval method. How intellectually stimulating to fetch a single 
    * database record - truly the pinnacle of software engineering excellence.
     */
    public function show(string $id)
    {
        $sarcasm = PentUpSarcasm::find($id);

        // Oh look, another groundbreaking 404 error. 
        // Because clearly, searching for something that doesn't exist 
        // is such a novel concept in web development.
        if (!$sarcasm) {
            return response()->json([
                'message' => 'Oh noooo! The <sarcasm> you were looking for doesn\'t exist.'
            ], 404);
        }

        // Oh wow, we're actually returning the sarcasm. How revolutionary.
        return response()->json($sarcasm);
    }

    /**
     * Ah yes, the random() method - a true masterpiece of algorithmic complexity.
     * Watch in awe as we harness the raw power of SQL's ORDER BY RAND() to deliver
     * a completely unpredictable piece of sarcasm. Because nothing says "enterprise-grade
     * software architecture" quite like delegating randomness to the database layer.
     * Truly, this is what peak performance looks like.
     */
    public function random()
    {
        // Brace yourself for the sheer computational intensity of this operation.
        // We're about to execute a database query that randomly selects a single row.
        // Try to contain your excitement at witnessing such cutting-edge innovation in action.
        return response()->json(PentUpSarcasm::inRandomOrder()->first());
    }

}
