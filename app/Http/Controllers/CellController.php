<?php

namespace App\Http\Controllers;

use App\Cell;
use Illuminate\Http\Request;
use \Illuminate\Http\RedirectResponse;
use \Illuminate\Contracts\Foundation\Application;
use \Illuminate\Contracts\View\Factory;
use \Illuminate\View\View;

class CellController extends Controller
{

    /**
     * @param Cell $cell
     * @return Application|Factory|View
     */
    public function edit(Cell $cell)
    {
        return view('cell.edit', compact('cell'));
    }

    /**
     * @param Request $request
     * @param Cell $cell
     * @return RedirectResponse
     */
    public function update(Request $request, Cell $cell): RedirectResponse
    {
        $validatedData = $request->validate([
            'url' => 'required|url|max:500',
            'color' => 'required|in:' . implode(',', array_keys($cell::COLORS))
        ]);

        $cell->update($validatedData);

        return redirect()->route('home');
    }
}
