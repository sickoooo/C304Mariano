<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Portfolio;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PortfolioController extends Controller
{
    public function __construct()
    {
        $this->middleware(function ($request, $next) {
            if (!Auth::check() || !Auth::user()->is_admin) {
                abort(403, 'Unauthorized');
            }

            return $next($request);
        });
    }

    public function index()
    {
        // FIX: Use collect([]) instead of []
        // This creates an empty Collection so $projects->count() works in your Blade file.
        $projects = collect([]);

        return view('admin.manage', compact('projects'));
    }


    public function create()
    {
        return view('admin.create');
    }

  
    public function store(Request $request)
    {
        $data = $request->validate([
            'title'       => 'required|string|max:255',
            'subtitle'    => 'nullable|string|max:255',
            'description' => 'nullable|string',
            'image_url'   => 'nullable|string|max:255',
            'github_url'  => 'nullable|string|max:255',
            'live_url'    => 'nullable|string|max:255',
            'sort_order'  => 'nullable|integer',
        ]);

        if (empty($data['sort_order'])) {
            $data['sort_order'] = 1;
        }

        Portfolio::create($data);

        return redirect()
            ->route('admin.portfolio.index')
            ->with('success', 'Portfolio item created.');
    }

    public function edit(Portfolio $portfolio)
    {
        $project = $portfolio;

        return view('admin.portfolio.edit', compact('project'));
    }

    public function update(Request $request, Portfolio $portfolio)
    {
        $data = $request->validate([
            'title'       => 'required|string|max:255',
            'subtitle'    => 'nullable|string|max:255',
            'description' => 'nullable|string',
            'image_url'   => 'nullable|string|max:255',
            'github_url'  => 'nullable|string|max:255',
            'live_url'    => 'nullable|string|max:255',
            'sort_order'  => 'nullable|integer',
        ]);

        $portfolio->update($data);

        return redirect()
            ->route('admin.portfolio.index')
            ->with('success', 'Portfolio item updated.');
    }

    public function destroy(Portfolio $portfolio)
    {
        $portfolio->delete();

        return redirect()
            ->route('admin.portfolio.index')
            ->with('success', 'Portfolio item deleted.');
    }
}