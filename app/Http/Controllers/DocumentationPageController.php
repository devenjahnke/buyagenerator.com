<?php

namespace App\Http\Controllers;

use App\Models\DocumentationPage;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Inertia\Inertia;

class DocumentationPageController extends Controller
{
    protected $validationRules = [
        'title' => [
            'required',
            'max:255',
            'string',
        ],
        'slug' => [
            'required',
            'max:255',
            'not_regex:/[\'\/~`\!@#\$%\^&\*\(\)_\ \+=\{\}\[\]\|;:"\<\>,\.\?\\\]/',
            'distinct',
        ],
        'description' => [
            'required',
            'max:2500',
            'string',
        ],
    ];

    public function __construct()
    {

    }

    public function index(Request $request)
    {
        // If public facing
        if ($request->route()->uri == 'documentation') {
            return Inertia::render('Public/Documentation/Index', [
                'pages' => DocumentationPage::all(),
            ]);
        }
        if ($request->route()->uri == 'partner/documentation') {
            $this->middleware('permission:documentation_read');

            return Inertia::render('Partner/Documentation/Page/Index', [
                'pages' => DocumentationPage::all(),
            ]);
        }
        return abort(404);
    }

    public function show(Request $request, DocumentationPage $page)
    {
        return Inertia::render('Public/Documentation/Show', [
            'page' => $page,
            'sections' => $page
                ->sections()
                ->orderBy('order', 'asc')
                ->get(),
        ]);
    }

    public function create(Request $request)
    {
        $this->middleware('permission:documentation_write');

        return Inertia::render('Partner/Documentation/Page/Create');
    }

    public function store(Request $request)
    {
        $this->middleware('permission:documentation_write');

        $validator = $request->validate($this->validationRules);

        DocumentationPage::create($validator);

        return Redirect::route('partner.documentation.index');
    }

    public function edit(Request $request, DocumentationPage $page)
    {
        $this->middleware('permission:documentation_edit');

        return Inertia::render('Partner/Documentation/Page/Edit', [
            'page' => $page,
            'sections' => $page->sections,
        ]);
    }

    public function update(Request $request, DocumentationPage $page)
    {
        $this->middleware('permission:documentation_edit');

        $validator = $request->validate($this->validationRules);

        $page->update($validator);

        return Redirect::route('partner.documentation.index');
    }

    public function destroy(Request $request, DocumentationPage $page)
    {
        $this->middleware('permission:documentation_delete');

        $page->delete();

        return Redirect::route('partner.documentation.index');
    }
}
