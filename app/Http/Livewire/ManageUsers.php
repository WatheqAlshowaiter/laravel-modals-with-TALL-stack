<?php

namespace App\Http\Livewire;

use App\Models\User;
use Livewire\Component;

class ManageUsers extends Component
{

    public $showDeleteUserModel = false;
    public User $currentUser;


    public function confirmDelete(User $user)
    {
        $this->currentUser = $user;
        $this->showDeleteUserModel = true;
    }

    public function delete()
    {
        $this->currentUser->delete();
        $this->showDeleteUserModel = false;
    }

    public function render()
    {
        return view('livewire.manage-users')
            ->with('users', User::all());
    }
}
