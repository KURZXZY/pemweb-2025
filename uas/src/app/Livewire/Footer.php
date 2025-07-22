<?php

namespace App\Livewire; // Ensure this namespace is correct

use Livewire\Component; // Ensure this 'use' statement is present

class Footer extends Component // Ensure the class name matches exactly
{
    public function render()
    {
        // This should point to the correct Blade view file for this component
        return view('livewire.footer');
    }
}
