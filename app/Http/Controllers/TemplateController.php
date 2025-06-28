<?php

namespace App\Http\Controllers;

use App\Models\Template;
use Illuminate\Http\Request;
use Inertia\Inertia;

class TemplateController extends Controller
{
    public function index()
    {
        //
    }

    public function store(Request $request)
    {
        $formData = $request->validate([
            'html' => 'required',
        ]);

        $template = Template::create([
            'html' => str_replace('contenteditable="true"', '', $formData['html'])
        ]);

        return response([
            'id' => $template->id,
        ], 201);
    }

    public function show(Template $template)
    {
        return Inertia::render('Template', ['html' => $template->html]);
    }

    public function destroy(Template $template)
    {
        //
    }
}
