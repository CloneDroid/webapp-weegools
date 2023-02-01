<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\Announcement;

class AnnouncementController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('announcements.admin.index')
            ->with('announcements', Announcement::orderBy('updated_at', 'DESC')->get());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        if (Auth::user()->user_type === 'Admin' or Auth::user()->user_type === 'Establishment Clerk') {
            return view('announcements.admin.create');
        } else {
            return view('announcements.public.create');
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
            'header' => 'required|max:255',
            'subheader' => 'required|max:255',
            'image' => 'required|image',
            'description' => 'required',
        ]);

        $announcement = new Announcement();
        $announcement->header = $validatedData['header'];
        $announcement->subheader = $validatedData['subheader'];
        $announcement->description = $validatedData['description'];
        $announcement->user_id = Auth::id();
        $announcement->save();

        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $image_name = time() . '.' . $image->getClientOriginalExtension();
            $destinationPath = public_path('/images');
            $image->move($destinationPath, $image_name);
            $announcement->image = $image_name;
            $announcement->save();
        }

        if (Auth::user()->user_type === 'Admin' or Auth::user()->user_type === 'Establishment Clerk') {
            return redirect()->route('announcements.admin.index')
                ->with('success', 'Announcement created successfully.');
        } else {
            return redirect()->route('announcements.public.index')
                ->with('success', 'Announcement created successfully.');
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
        $announcement = Announcement::find($id);
        if (Auth::user()->user_type === 'Admin' or Auth::user()->user_type === 'Establishment Clerk') {
            return view('announcements.admin.show', ['announcement' => $announcement]);
        } else {
            return view('announcements.public.show', ['announcement' => $announcement]);
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
        $announcement = Announcement::find($id);
        if (Auth::user()->user_type === 'Admin' or Auth::user()->user_type === 'Establishment Clerk') {
            return view('announcements.admin.edit', ['announcement' => $announcement]);
        } else {
            return view('announcements.public.edit', ['announcement' => $announcement]);
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
            'header' => 'required|max:255',
            'subheader' => 'required|max:255',
            'image' => 'image',
            'description' => 'required',
        ]);

        $announcement = Announcement::find($id);
        $announcement->header = $validatedData['header'];
        $announcement->subheader = $validatedData['subheader'];
        $announcement->description = $validatedData['description'];
        $announcement->save();

        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $image_name = time() . '.' . $image->getClientOriginalExtension();
            $destinationPath = public_path('/images');
            $image->move($destinationPath, $image_name);
            $announcement->image = $image_name;
            $announcement->save();
        }

        if (Auth::user()->user_type === 'Admin' or Auth::user()->user_type === 'Establishment Clerk') {
            return redirect('/admin/announcements')
                ->with('success', 'Announcement created successfully.');
        } else {
            return redirect()->route('announcements.public.index')
                ->with('success', 'Announcement created successfully.');
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
        $announcement = Announcement::find($id);
        $announcement->delete();

        if (Auth::user()->user_type === 'Admin' or Auth::user()->user_type === 'Establishment Clerk') {
            return redirect()->route('announcements.admin.index')
                ->with('success', 'Announcement deleted successfully.');
        } else {
            return redirect()->route('announcements.public.index')
                ->with('success', 'Announcement deleted successfully.');
        }
        
    }

    /**
     * API method to return all the announcements
     *
     * @return \Illuminate\Http\Response
     */
    public function apiIndex()
    {
        return Announcement::latest()->take(2)->get();
    }
}
