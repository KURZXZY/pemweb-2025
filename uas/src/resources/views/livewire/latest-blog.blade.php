<section class="latest-blog section-padding banner">
    <div class="container">
        <div class="center-content">
            <h2 class="section-title">Latest from Blog</h2>
            <span class="underline center"></span>
            <p class="lead">The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested.</p>
        </div>
        <div class="tabs-container">
            <div class="tabs-menu">
                <ul>
                    {{-- Use $activeTab to conditionally add 'active' class --}}
                    <li class="{{ $activeTab == 'books' ? 'active' : '' }}">
                        <a href="#" class="bg-yellow" wire:click.prevent="setActiveTab('books')">
                            <div class="title">
                                <i class="yellow"></i>
                                <h3>Books</h3>
                            </div>
                        </a>
                    </li>
                    <li class="{{ $activeTab == 'ebooks' ? 'active' : '' }}">
                        <a href="#" class="bg-light-green" wire:click.prevent="setActiveTab('ebooks')">
                            <div class="title">
                                <i class="light-green"></i>
                                <h3>eBooks</h3>
                            </div>
                        </a>
                    </li>
                    <li class="{{ $activeTab == 'dvds' ? 'active' : '' }}">
                        <a href="#" class="bg-blue" wire:click.prevent="setActiveTab('dvds')">
                            <div class="title">
                                <i class="blue"></i>
                                <h3>DVDS</h3>
                            </div>
                        </a>
                    </li>
                    <li class="{{ $activeTab == 'magazines' ? 'active' : '' }}">
                        <a href="#" class="bg-red" wire:click.prevent="setActiveTab('magazines')">
                            <div class="title">
                                <i class="red"></i>
                                <h3>Magazines</h3>
                            </div>
                        </a>
                    </li>
                    <li class="{{ $activeTab == 'audio' ? 'active' : '' }}">
                        <a href="#" class="bg-violet" wire:click.prevent="setActiveTab('audio')">
                            <div class="title">
                                <i class="violet"></i>
                                <h3>Audio</h3>
                            </div>
                        </a>
                    </li>
                    <li class="{{ $activeTab == 'eaudio' ? 'active' : '' }}">
                        <a href="#" class="bg-green" wire:click.prevent="setActiveTab('eaudio')">
                            <div class="title">
                                <i class="green"></i>
                                <h3>eAudio</h3>
                            </div>
                        </a>
                    </li>
                </ul>
            </div>
            <div class="tabs-list">
                {{-- Only show content for the active tab --}}
                @if (!empty($posts))
                    @foreach($posts as $post)
                        <div class="tab-content {{ $loop->first ? 'active' : '' }}"> {{-- Assuming only one post per tab for simplicity based on your original data --}}
                            <article>
                                <figure>
                                    <img src="{{ $post->image_src }}" alt="Latest Blog">
                                    <figcaption>
                                        <a href="#.">
                                            <span class="date">{{ $post->date }}</span>
                                            <span class="month">{{ $post->month }}</span>
                                        </a>
                                    </figcaption>
                                </figure>
                                <div class="post-detail">
                                    <div class="info-bar">
                                        <div class="comments"><a href="#"><i class="fa fa-comment"></i> {{ $post->comments }}</a></div>
                                        <div class="likes"><a href="#"><i class="fa fa-thumbs-o-up"></i> {{ $post->likes }}</a></div>
                                        <div class="viewed"><a href="#"><i class="fa fa-eye"></i> {{ $post->views }}</a></div>
                                        <div class="share"><a href="#"><i class="fa fa-share-alt"></i> Share</a></div>
                                    </div>
                                    <h4>{{ $post->title }}</h4>
                                    <div class="author"><a href="#"><i class="fa fa-user"></i> {{ $post->author }}</a></div>
                                    <p>{{ $post->description }}</p>
                                    <a class="btn btn-dark-gray">Read More</a>
                                </div>
                            </article>
                        </div>
                    @endforeach
                @else
                    <div class="tab-content active">
                        <p>No blog posts found for this category.</p>
                    </div>
                @endif
            </div>
        </div>
    </div>
</section>
