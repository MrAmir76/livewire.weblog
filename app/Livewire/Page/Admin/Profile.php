<?php

namespace App\Livewire\Page\Admin;

use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules\Password;
use Livewire\Component;

class Profile extends Component
{

    public $username;
    public $name;
    public $isAdmin;

    public $oldPassword;
    public $newPassword;

    public function mount()
    {
        $user = auth()->user();

        $this->username = $user->username;
        $this->name = $user->name;
        $this->isAdmin = $user->is_admin;
    }

    public function updateProfile()
    {

        $user = auth()->user();
        $cleanData = $this->validate([
            'username' => 'required|string|regex:/^[A-Za-z0-9_]{3,}$/',
            'name' => "required|string|min:3",
            'newPassword' => ['nullable', Password::min(8)->letters()->numbers()->mixedCase()->symbols()],
            'oldPassword' => 'nullable|required_with:newPassword|string',
            'isAdmin' => 'nullable|in:1'
        ]);
        $user->update([
            'username' => $cleanData['username'],
            'name' => $cleanData['name'],
            'is_admin' => boolval($cleanData['isAdmin']),
        ]);
        if (!empty($cleanData['newPassword'])) {
            if (Hash::check($cleanData['oldPassword'], $user->password)) {
                $user->update(['password' => Hash::make($cleanData['newPassword'])]);
            } else {
                $this->addError('oldPassword', 'رمزعبور قدیمی وارد شده اشتباه است');
            }
        }
        session()->flash('alert', 'حساب کاربری شما بروز رسانی شد.');

        $this->redirect(route('auth.profile'),1);

    }

    public function render()
    {
        return view('livewire.page.admin.profile')->layout('components.layouts.auth');
    }
}
