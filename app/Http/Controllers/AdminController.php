<?php

namespace App\Http\Controllers;
use App\Models\User;
use App\Models\Announcement;
use App\Models\Menu;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function admin()
    {
        return view('dashboards.admin.dashboard')
        ->with('users', User::orderBy('created_at', 'ASC')->get())
        ->with('announcements', Announcement::orderBy('created_at', 'ASC')->get())
        ->with('menus', Menu::orderBy('created_at', 'ASC')->get());
    }

        /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function users()
    {
        return view('dashboards.admin.users')
            ->with('users', User::orderBy('updated_at', 'DESC')->get());
    }

}
