<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Model\Feedback;

class FeedbackController extends Controller
{
    public function __invoke(Request $request, $productId)
    {
        $idUser = Auth::id();
        Feedback::create([
            $request->all(), 
            'product_id' => $productId,
            'user_id' => $idUser
            ]);

        return redirect()->back();

    }
}
