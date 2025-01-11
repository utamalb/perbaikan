<?php

namespace App\Http\Controllers;

use App\Models\ApparelSize;
use Illuminate\Http\Request;

class ApparelSizeController extends Controller
{
    public function index()
    {
        $sizes = ApparelSize::all();
        return view('apparel_sizes.index', compact('sizes'));
    }

    public function create()
    {
        return view('apparel_sizes.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'size_code' => 'required|string|max:255',
            'sort_order' => 'required|integer',
        ]);

        ApparelSize::create($request->all());
        return redirect()->route('apparel_sizes.index');
    }

    public function edit(ApparelSize $apparelSize)
    {
        return view('apparel_sizes.edit', compact('apparelSize'));
    }

    public function update(Request $request, ApparelSize $apparelSize)
    {
        $request->validate([
            'size_code' => 'required|string|max:255',
            'sort_order' => 'required|integer',
        ]);

        $apparelSize->update($request->all());
        return redirect()->route('apparel_sizes.index');
    }

    public function destroy(ApparelSize $apparelSize)
    {
        $apparelSize->delete();
        return redirect()->route('apparel_sizes.index');
    }
}
