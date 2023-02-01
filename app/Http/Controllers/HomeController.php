<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Announcement;
use App\Models\Menu;

class HomeController extends Controller
{
    public function index()
    {
        return view('home')
            ->with('spcialMenus', Menu::where('is_special', true)->take(4)->get())
            ->with('menus', Menu::where('is_special', false)->take(4)->get())
            ->with('announcements', Announcement::take(2)->get());
    }

    public function contact()
    {
        return view('contact');
    }
}
