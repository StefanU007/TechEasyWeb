<?php

namespace App\Http\Controllers;

use App\Mail\NewOrderNotification;
use App\Models\Order;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;

class OrderController extends Controller
{
    public function store(Request $request)
    {
        $formData = $request->validate([
            'email' => 'required|email',
            'template_id' => 'required|exists:templates,uuid',
        ]);

        try {
            DB::beginTransaction();

            $template = \App\Models\Template::where('uuid', $formData['template_id'])->firstOrFail();

            $order = Order::create([
                'email' => $formData['email'],
                'template_id' => $template->id,
            ]);

            Mail::to('info@techeasyweb.com')->send(new NewOrderNotification($order));

            DB::commit();

            return response()->json(['success' => true]);
        } catch (\Throwable $e) {
            DB::rollBack();
            report($e);

            return response()->json([
                'success' => false,
                'message' => 'Failed to send email. Please try again later.',
            ], 500);
        }
    }
}
