<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\LuckyDraw;

class LuckyDrawController extends Controller
{
    public function showForm()
    {
        return view('luckydraw.register');
    }

    public function register(Request $request)
    {
        $request->validate([
            'name'  => 'required|string|max:255',
            'email' => 'required|email|unique:lucky_draws',
            'phone' => 'required|string|max:20',
            'image' => 'nullable|image|mimes:jpg,jpeg,png|max:2048',
        ]);

        $path = null;
        if ($request->hasFile('image')) {
            $path = $request->file('image')->store('lucky_draws', 'public');
        }

        LuckyDraw::create([
            'name'       => $request->name,
            'email'      => $request->email,
            'phone'      => $request->phone,
            'image_path' => $path,
        ]);

        return redirect()->back()->with('success', 'ลงทะเบียนเรียบร้อยแล้ว 🎉');
    }
}

