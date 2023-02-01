<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\Menu;
use App\Models\User;

class MenuController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('menus.admin.index')
            ->with('menus', Menu::orderBy('updated_at', 'DESC')->get());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
        if (Auth::user()->user_type === 'Admin' or (Auth::user()->user_type === 'Establishment Clerk')) {
            return view('menus.admin.create');
        } else  {
            return view('menus.public.create');
        }
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|max:255',
            'price' => 'required|numeric',
            'image' => 'required|image',
            'description' => 'required',
            'is_special' => 'required|boolean'
        ]);

        $menu = new Menu();
        $menu->name = $validatedData['name'];
        $menu->price = $validatedData['price'];
        $menu->description = $validatedData['description'];
        $menu->is_special = $validatedData['is_special'];
        $menu->save();

        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $image_name = time() . '.' . $image->getClientOriginalExtension();
            $destinationPath = public_path('/images');
            $image->move($destinationPath, $image_name);
            $menu->image = $image_name;
            $menu->save();
        }

        if (Auth::user()->user_type === 'Admin' or (Auth::user()->user_type === 'Establishment Clerk')) {
            return redirect()->route('menus.admin.index')
                ->with('success', 'Menu created successfully.');
        } else {
            return redirect()->route('menus.public.index')
                ->with('success', 'Menu created successfully.');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $menu = Menu::find($id);
        if (Auth::user()->user_type === 'Admin' or (Auth::user()->user_type === 'Establishment Clerk')) {
            return view('menus.admin.show', ['menu' => $menu]);
        } else {
            return view('menus.public.show', ['menu' => $menu]);
        }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $menu = Menu::find($id);
        if (Auth::user()->user_type === 'Admin' or (Auth::user()->user_type === 'Establishment Clerk')) {
            return view('menus.admin.edit', ['menu' => $menu]);
        } else {
            return view('menus.public.edit', ['menu' => $menu]);
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $validatedData = $request->validate([
            'name' => 'required|max:255',
            'price' => 'required|numeric',
            'image' => 'image',
            'description' => 'required',
            'is_special' => 'required|boolean'
        ]);

        $menu = Menu::find($id);
        $menu->name = $validatedData['name'];
        $menu->price = $validatedData['price'];
        $menu->description = $validatedData['description'];
        $menu->is_special = $validatedData['is_special'];
        $menu->save();

        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $image_name = time() . '.' . $image->getClientOriginalExtension();
            $destinationPath = public_path('/images');
            $image->move($destinationPath, $image_name);
            $menu->image = $image_name;
            $menu->save();
        }

        if (Auth::user()->user_type === 'Admin' or (Auth::user()->user_type === 'Establishment Clerk')) {
            return redirect()->route('menus.admin.index')
                ->with('success', 'Menu updated successfully.');
        } else {
            return redirect()->route('menus.public.index')
                ->with('success', 'Menu updated successfully.');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $menu = Menu::find($id);
        $menu->delete();

        if (Auth::user()->user_type === 'Admin' or (Auth::user()->user_type === 'Establishment Clerk')) {
            return redirect()->route('menus.admin.index')
                ->with('success', 'Menu deleted successfully.');
        } else {
            return redirect()->route('menus.public.index')
                ->with('success', 'Menu deleted successfully.');
        }
    }

    /**
     * API method to return all the menus
     *
     * @return \Illuminate\Http\Response
     */
    public function apiIndex()
    {
        return [
            'menus' => Menu::latest()->take(4)->get(),
            'specialMenus' => SpecialMenu::latest()->take(4)->get()
        ];
    }
}
