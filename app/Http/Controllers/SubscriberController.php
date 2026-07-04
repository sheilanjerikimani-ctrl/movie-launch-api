<?php

namespace App\Http\Controllers;

use App\Models\Subscriber;
use Illuminate\Http\Request;

class SubscriberController extends Controller
{
    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email',
            'message' => 'nullable|string',
        ]);

        $subscriber = Subscriber::create($validated);

        return response()->json([
            'success' => true,
            'message' => 'Thanks — you are on the list.',
            'data' => $subscriber
        ], 201);
    }
}
