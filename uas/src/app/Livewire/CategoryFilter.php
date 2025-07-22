<?php

namespace App\Livewire;

use Livewire\Component;

class CategoryFilter extends Component
{
    // These must be public properties
    public $activeFilter = 'all'; // Initialize with a default value
    public $items = [];           // Initialize to an empty array

    public function mount()
    {
        $this->loadItems(); // Load initial data when the component is mounted
    }

    public function setFilter($filter)
    {
        $this->activeFilter = $filter; // Update the active filter property
        $this->loadItems(); // Reload items based on the new filter
    }

    public function loadItems()
    {
        // Your dummy data as provided in previous responses.
        // Ensure the items are objects if you're accessing them with -> (e.g., $item->title)
        $allPotentialItems = [
            (object)['title' => 'The Great Gatsby', 'author' => 'F. Scott Fitzgerald', 'isbn' => '9781581573268', 'rating' => 5, 'image_src' => 'images/category-filter/home-v1/category-filter-img-01.jpg', 'category_class' => 'adults books', 'description' => 'It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. Pellentesque dolor turpis, pulvinar varius.'],
            (object)['title' => 'Kids Adventure', 'author' => 'Author A', 'isbn' => '9781234567890', 'rating' => 4, 'image_src' => 'images/category-filter/home-v1/category-filter-img-02.jpg', 'category_class' => 'kids-teens books', 'description' => 'It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. Pellentesque dolor turpis, pulvinar varius.'],
            (object)['title' => 'Video Documentary', 'author' => 'Director X', 'isbn' => '9789876543210', 'rating' => 3, 'image_src' => 'images/category-filter/home-v1/category-filter-img-03.jpg', 'category_class' => 'video', 'description' => 'It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. Pellentesque dolor turpis, pulvinar varius.'],
            (object)['title' => 'Audio Book Series', 'author' => 'Narrator B', 'isbn' => '9781122334455', 'rating' => 5, 'image_src' => 'images/category-filter/home-v1/category-filter-img-04.jpg', 'category_class' => 'audio', 'description' => 'It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. Pellentesque dolor turpis, pulvinar varius.'],
            (object)['title' => 'Science Daily', 'author' => 'Various', 'isbn' => '9785566778899', 'rating' => 4, 'image_src' => 'images/category-filter/home-v1/category-filter-img-05.jpg', 'category_class' => 'books', 'description' => 'It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. Pellentesque dolor turpis, pulvinar varius.'],
            (object)['title' => 'Fashion Magazine', 'author' => 'Editor C', 'isbn' => '9789988776655', 'rating' => 4, 'image_src' => 'images/category-filter/home-v1/category-filter-img-06.jpg', 'category_class' => 'magazines', 'description' => 'It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. Pellentesque dolor turpis, pulvinar varius.'],
            (object)['title' => 'History of Rome', 'author' => 'Historian D', 'isbn' => '9781231231231', 'rating' => 5, 'image_src' => 'images/category-filter/home-v1/category-filter-img-07.jpg', 'category_class' => 'adults books', 'description' => 'It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. Pellentesque dolor turpis, pulvinar varius.'],
            (object)['title' => 'Teen Fiction', 'author' => 'Writer E', 'isbn' => '9784564564564', 'rating' => 3, 'image_src' => 'images/category-filter/home-v1/category-filter-img-08.jpg', 'category_class' => 'kids-teens books', 'description' => 'It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. Pellentesque dolor turpis, pulvinar varius.'],
        ];

        if ($this->activeFilter === 'all') {
            $this->items = $allPotentialItems;
        } else {
            $this->items = array_filter($allPotentialItems, function($item) {
                return str_contains($item->category_class, $this->activeFilter);
            });
        }
    }

    public function render()
    {
        // This will correctly render resources/views/livewire/category-filter.blade.php
        return view('livewire.category-filter');
    }
}
