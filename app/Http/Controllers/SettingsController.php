<?php

namespace App\Http\Controllers;

use Auth;
use App\Theme;
use App\Setting;
use Illuminate\Http\Request;

class SettingsController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the settings panel.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $theme_names = Theme::all();
        $user_settings = Setting::where('user_id', Auth::user()->id)->first();

        return view('settings')
                ->with('theme_names', $theme_names)
                ->with('user_settings', $user_settings);
    }

    /**
     * Save changes.
     *
     * @return \Illuminate\Http\Response
     */
    public function saveChanges(Request $request)
    {   
        Setting::where('user_id', Auth::user()->id)->updateOrCreate([
            'user_id' => Auth::user()->id,
        ],[
            'user_id' => Auth::user()->id,
            'theme' => $request->input('theme'),
        ]);

        return redirect()->back();
    }
}
