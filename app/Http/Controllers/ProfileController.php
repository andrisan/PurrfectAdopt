<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProfileUpdateRequest;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;
use App\Models\Kucing;


class ProfileController extends Controller
{
    public function myPet()
{
    $kucings = Kucing::where('save', true)->get();
    return view('profile.mypet', compact('kucings'));
}

public function show($id)
{
    $kucing = Kucing::findOrFail($id);
    return view('profile.profileCat_more', compact('kucing'));
}

public function toggleLove($id)
{
    $kucing = Kucing::findOrFail($id);
    $kucing->save = !$kucing->save; // Mengubah status save menjadi kebalikannya
    $kucing->save(); // Menyimpan perubahan ke database

    return redirect()->back(); // Kembali ke halaman sebelumnya
}

    /**
     * Display the user's profile form.
     */
    public function edit(Request $request): View
    {
        $user = Auth::user();
        
        return view('profile.edit', [
            'user' => $request->user(),
        ]);
    }


    /**
     * Update the user's profile information.
     */
    public function update(ProfileUpdateRequest $request): RedirectResponse
    {
        $request->user()->fill($request->validated());

        if ($request->user()->isDirty('email')) {
            $request->user()->email_verified_at = null;
        }

        $request->user()->save();

        return Redirect::route('profile.edit')->with('status', 'profile-updated');
    }

    /**
     * Delete the user's account.
     */
    public function destroy(Request $request): RedirectResponse
    {
        $request->validateWithBag('userDeletion', [
            'password' => ['required', 'current_password'],
        ]);

        $user = $request->user();

        Auth::logout();

        $user->delete();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return Redirect::to('/');
    }
    
    /**
     * Memperbarui informasi profil pengguna.
     */

    
    public function updateBio(Request $request) : RedirectResponse
    {
        $user = $request->user();
        $user->email = $request->input('email');
        $user->kontak = $request->input('kontak');
        $user->save();

        return redirect()->back()->with('status', 'Profil berhasil diperbarui.');
    }
    
    public function showProfile(Request $request): View
    {
    $user = Auth::user();

    return view('profile.profile_adopter', compact('user'));
    
    }

    public function showProfileDistributor(Request $request): View
    {
    $user = Auth::user();

    return view('profile.profile_distributor', compact('user'));
    }
    
    public function showProfile1()
    {
        $kucing = Kucing::find(1);
        return view('profile_adopter', compact('kucing'));
    }



}
