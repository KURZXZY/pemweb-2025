<?php

namespace App\Livewire; // <--- Make sure this namespace is correct

use Livewire\Component; // <--- Make sure this 'use' statement is present

class CommunityTestimonials extends Component // <--- Make sure the class name matches exactly
{
    public function render()
    {
        // This should point to the correct Blade view file for this component
        return view('livewire.community-testimonial');
    }
}
