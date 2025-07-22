<section class="newsletter section-padding">
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="center-content">
                    <h2 class="section-title">Subscribe to our Newsletters</h2>
                    <span class="underline center"></span>
                    <p class="lead">The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested.</p>
                </div>
                <div class="form-group">
                    {{-- Contoh wire:model untuk input email --}}
                    <input class="form-control" placeholder="Enter your Email!" id="newsletter" name="newsletter" type="email" wire:model.live="email">
                    {{-- Contoh wire:click untuk submit form --}}
                    <input class="form-control" value="Subscribe" type="submit" wire:click.prevent="subscribe">
                </div>
            </div>
        </div>
    </div>
</section>
