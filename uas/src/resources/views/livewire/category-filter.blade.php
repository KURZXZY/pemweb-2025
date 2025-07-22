<section class="category-filter section-padding">
    <div class="container">
        <div class="center-content">
            <div class="row">
                <div class="col-md-6 col-md-offset-3">
                    <h2 class="section-title">Check Out The New Releases</h2>
                    <span class="underline center"></span>
                    <p class="lead">The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested.</p>
                </div>
            </div>
        </div>
        <div class="filter-buttons">
            {{-- Add 'active' class conditionally based on $activeFilter --}}
            <div class="filter btn {{ $activeFilter == 'all' ? 'active' : '' }}" wire:click="setFilter('all')">All Releases</div>
            <div class="filter btn {{ $activeFilter == 'adults' ? 'active' : '' }}" wire:click="setFilter('adults')">Adults</div>
            <div class="filter btn {{ $activeFilter == 'kids-teens' ? 'active' : '' }}" wire:click="setFilter('kids-teens')">Kids &amp; Teens</div>
            <div class="filter btn {{ $activeFilter == 'video' ? 'active' : '' }}" wire:click="setFilter('video')">Video</div>
            <div class="filter btn {{ $activeFilter == 'audio' ? 'active' : '' }}" wire:click="setFilter('audio')">Audio</div>
            <div class="filter btn {{ $activeFilter == 'books' ? 'active' : '' }}" wire:click="setFilter('books')">Books</div>
            <div class="filter btn {{ $activeFilter == 'magazines' ? 'active' : '' }}" wire:click="setFilter('magazines')">Magazines</div>
        </div>
    </div>
    <div id="category-filter">
        <ul class="category-list">
            {{-- Looping through the $items provided by the Livewire component --}}
            @foreach($items as $item)
                {{-- Ensure $item properties are accessed correctly (e.g., $item->property if it's an object, or $item['property'] if it's an array) --}}
                {{-- Based on the dummy data in the PHP class, $item is cast to an object, so $item->property is correct. --}}
                <li class="category-item {{ $item->category_class }}">
                    <figure>
                        <img src="{{ $item->image_src }}" alt="New Releaase" />
                        <figcaption class="bg-orange">
                            <div class="info-block">
                                <h4>{{ $item->title }}</h4>
                                <span class="author"><strong>Author:</strong> {{ $item->author }}</span>
                                <span class="author"><strong>ISBN:</strong> {{ $item->isbn }}</span>
                                <div class="rating">
                                    {{-- Render rating stars dynamically --}}
                                    @for ($i = 0; $i < $item->rating; $i++)
                                        <span>★</span>
                                    @endfor
                                    @for ($i = $item->rating; $i < 5; $i++)
                                        <span>☆</span>
                                    @endfor
                                </div>
                                <p>{{ $item->description }}</p>
                                <a href="#">Read More <i class="fa fa-long-arrow-right"></i></a>
                                <ol>
                                    <li><a href="#"><i class="fa fa-shopping-cart"></i></a></li>
                                    <li><a href="#"><i class="fa fa-heart"></i></a></li>
                                    <li><a href="#"><i class="fa fa-envelope"></i></a></li>
                                    <li><a href="#"><i class="fa fa-share-alt"></i></a></li>
                                    <li><a href="#"><i class="fa fa-search"></i></a></li>
                                </ol>
                            </div>
                        </figcaption>
                    </figure>
                </li>
            @endforeach
        </ul>
        <div class="center-content">
            <a href="#" class="btn btn-primary">View More</a>
        </div>
        <div class="clearfix"></div>
    </div>
</section>
