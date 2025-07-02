<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\Template;
use Illuminate\Http\Request;
use Inertia\Inertia;

class TemplateController extends Controller
{
    public function store(Request $request)
    {
        $formData = $request->validate([
            'html' => 'required',
            'business_name' => 'nullable|string|max:255',
            'description' => 'nullable|string',
            'location' => 'nullable|string|max:255',
            'logo_path' => 'nullable|string',
            'image_path' => 'nullable|string',
            'template_component_id' => 'required|integer|min:1|max:18',
        ]);

        $template = Template::create([
            'html' => str_replace('contenteditable="true"', '', $formData['html']),
            'business_name' => $formData['business_name'] ?? null,
            'description' => $formData['description'] ?? null,
            'location' => $formData['location'] ?? null,
            'logo_path' => $formData['logo_path'] ?? null,
            'image_path' => $formData['image_path'] ?? null,
            'template_component_id' => $formData['template_component_id'],
            'status' => 'pending',
        ]);

        return response([
            'uuid' => $template->uuid,
        ], 201);
    }

    public function show(Template $template)
    {
        $hasOrder = Order::where('template_id', $template->id)->exists();

        return Inertia::render('Template', [
            'html' => $template->html,
            'hasOrder' => $hasOrder,
            'templateUuid' => $template->uuid,
        ]);
    }
}
