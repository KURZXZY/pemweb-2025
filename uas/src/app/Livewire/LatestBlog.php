<?php

namespace App\Livewire;

use Livewire\Component;

class LatestBlog extends Component
{
    // Define $activeTab as a public property
    public $activeTab = 'books'; // Default tab to show when loaded

    // You might also have a property for the blog posts themselves, e.g., $posts
    public $posts = [];

    public function mount()
    {
        // Load initial posts for the default tab
        $this->loadPosts();
    }

    // Method to change the active tab
    public function setActiveTab($tab)
    {
        $this->activeTab = $tab;
        $this->loadPosts(); // Reload posts based on the new tab
    }

    // Method to load posts based on the activeTab
    public function loadPosts()
    {
        // --- This is dummy data. Replace with your actual data fetching logic ---
        $allPosts = [
            'books' => [
                (object)[
                    'title' => 'It uses dictionary over 200 Latin',
                    'author' => 'Adrey Pachai',
                    'date' => '07', 'month' => 'Mar',
                    'comments' => 37, 'likes' => 110, 'views' => 180,
                    'image_src' => 'images/latest-blog-img-home-v1.jpg',
                    'description' => 'Etiam posuere ultrices mauris vitae tincidunt. Cras lacinia, lectus quis ullamcorper auctor, mauris lacus imperdiet turpis, et semper enim massa ut diam. Sed at malesuada urna. Mauris quis venenatis leo. Proin a malesuada purus. Suspendisse odio diam, ornare sit amet interdum ut, vehicula a lorem. Donec a sem erat. Etiam condimentum semper mauris vitae porttitor.'
                ]
            ],
            'ebooks' => [
                (object)[
                    'title' => 'eBooks',
                    'author' => 'Adrey Pachai',
                    'date' => '06', 'month' => 'Mar',
                    'comments' => 37, 'likes' => 110, 'views' => 180,
                    'image_src' => 'images/latest-blog-img-home-v1-2.jpg',
                    'description' => 'Sed at malesuada urna. Mauris quis venenatis leo. Proin a malesuada purus. Suspendisse odio diam, ornare sit amet interdum ut, vehicula a lorem. Donec a sem erat. Etiam condimentum semper mauris vitae porttitor. Etiam posuere ultrices mauris vitae tincidunt. Cras lacinia, lectus quis ullamcorper auctor, mauris lacus imperdiet turpis, et semper enim massa ut.'
                ]
            ],
            'dvds' => [
                (object)[
                    'title' => 'DVDS',
                    'author' => 'Adrey Pachai',
                    'date' => '05', 'month' => 'Mar',
                    'comments' => 37, 'likes' => 110, 'views' => 180,
                    'image_src' => 'images/latest-blog-img-home-v1.jpg',
                    'description' => 'Etiam posuere ultrices mauris vitae tincidunt. Cras lacinia, lectus quis ullamcorper auctor, mauris lacus imperdiet turpis, et semper enim massa ut diam. Sed at malesuada urna. Mauris quis venenatis leo. Proin a malesuada purus. Suspendisse odio diam, ornare sit amet interdum ut, vehicula a lorem. Donec a sem erat. Etiam condimentum semper mauris vitae porttitor.'
                ]
            ],
            'magazines' => [
                (object)[
                    'title' => 'Magazines',
                    'author' => 'Adrey Pachai',
                    'date' => '04', 'month' => 'Mar',
                    'comments' => 37, 'likes' => 110, 'views' => 180,
                    'image_src' => 'images/latest-blog-img-home-v1-2.jpg',
                    'description' => 'Sed at malesuada urna. Mauris quis venenatis leo. Proin a malesuada purus. Suspendisse odio diam, ornare sit amet interdum ut, vehicula a lorem. Donec a sem erat. Etiam condimentum semper mauris vitae porttitor. Etiam posuere ultrices mauris vitae tincidunt. Cras lacinia, lectus quis ullamcorper auctor, mauris lacus imperdiet turpis, et semper enim massa ut.'
                ]
            ],
            'audio' => [
                (object)[
                    'title' => 'Audio',
                    'author' => 'Adrey Pachai',
                    'date' => '03', 'month' => 'Mar',
                    'comments' => 37, 'likes' => 110, 'views' => 180,
                    'image_src' => 'images/latest-blog-img-home-v1.jpg',
                    'description' => 'Etiam posuere ultrices mauris vitae tincidunt. Cras lacinia, lectus quis ullamcorper auctor, mauris lacus imperdiet turpis, et semper enim massa ut diam. Sed at malesuada urna. Mauris quis venenatis leo. Proin a malesuada purus. Suspendisse odio diam, ornare sit amet interdum ut, vehicula a lorem. Donec a sem erat. Etiam condimentum semper mauris vitae porttitor.'
                ]
            ],
            'eaudio' => [
                (object)[
                    'title' => 'eAudio',
                    'author' => 'Adrey Pachai',
                    'date' => '02', 'month' => 'Mar',
                    'comments' => 37, 'likes' => 110, 'views' => 180,
                    'image_src' => 'images/latest-blog-img-home-v1-2.jpg',
                    'description' => 'Sed at malesuada urna. Mauris quis venenatis leo. Proin a malesuada purus. Suspendisse odio diam, ornare sit amet interdum ut, vehicula a lorem. Donec a sem erat. Etiam condimentum semper mauris vitae porttitor. Etiam posuere ultrices mauris vitae tincidunt. Cras lacinia, lectus quis ullamcorper auctor, mauris lacus imperdiet turpis, et semper enim massa ut.'
                ]
            ],
        ];
        // --- End of dummy data ---

        // Get the posts for the current active tab
        $this->posts = $allPosts[$this->activeTab] ?? []; // Use null coalescing to prevent errors if tab is not found
    }

    public function render()
    {
        // This will render the view resources/views/livewire/latest-blog.blade.php
        return view('livewire.latest-blog');
    }
}
