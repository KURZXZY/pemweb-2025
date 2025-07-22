<?php

namespace App\Livewire; // Ensure this namespace is correct

use Livewire\Component; // Ensure this 'use' statement is present

class Header extends Component // Ensure the class name matches exactly "Header"
{
    public function render()
    {
        // This should correctly point to the Blade view file for this component
        return view('livewire.header');
    }
}
