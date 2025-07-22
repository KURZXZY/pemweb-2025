<?php

namespace App\Livewire; // Ensure this namespace is correct

use Livewire\Component; // Ensure this 'use' statement is present

class Team extends Component // Ensure the class name matches exactly "Team"
{
    public function render()
    {
        // This should correctly point to the Blade view file for this component
        return view('livewire.team');
    }
}
