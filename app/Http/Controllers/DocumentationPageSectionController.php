<?php

namespace App\Http\Controllers;

use App\Models\DocumentationPage;
use App\Models\DocumentationPageSection;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Inertia\Inertia;

class DocumentationPageSectionController extends Controller
{
    protected $validationRules = [
        'title' => [
            'required',
            'max:255',
            'string',
        ],
        'content' => [
            'required',
            'max:10000',
            'string',
        ],
    ];

    public function _construct() {
        $this->middleware([
            'auth',
            'verified',
        ]);
    }

    public function create(Request $request, DocumentationPage $page) {
        $this->middleware('role:documentation_write');

        return Inertia::render('Partner/Documentation/Section/Create', [
            'page' => $page,
        ]);
    }

    public function store(Request $request, DocumentationPage $page)
    {
        $this->middleware('role:documentation_write');

        $validator = $request->validate($this->validationRules);

        $page->sections()->create(array_merge($validator, ['order' => 1]));

        return Redirect::route('partner.documentation.edit', [$page->id]);
    }

    public function edit(Request $request, DocumentationPage $page, DocumentationPageSection $section)
    {
        $this->middleware('permission:documentation_edit');

        return Inertia::render('Partner/Documentation/Section/Edit', [
            'page' => $page,
            'section' => $section,
        ]);
    }

    public function update(Request $request, DocumentationPage $page, DocumentationPageSection $section)
    {
        $this->middleware('role:documentation_edit');

        $validator = $request->validate($this->validationRules);

        $section->update($validator);

        return Redirect::route('partner.documentation.edit', [$page->id]);
    }

    public function destroy(Request $request, DocumentationPage $page, DocumentationPageSection $section)
    {
        $this->middleware('role:documentation_delete');

        $section->delete();

        return Redirect::route('partner.documentation.edit', [$page->id]);
    }
}
