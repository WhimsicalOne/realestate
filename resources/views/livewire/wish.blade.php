<div class="absolute top-4 end-4" wire:click.prevent="addToWishlist({{ $listing->id }})">
    <?php
        $user_wish = auth()->user()->wishes()->where('listing_id', $listing->id)->get();

        if(count($user_wish) === 0) {
            $classes = 'text-slate-100 dark:text-slate-700 focus:text-red-600 dark:focus:text-red-600 hover:text-red-600 dark:hover:text-red-600';
        } else {
            $classes = 'text-red-600';
        }
    ?>
    <a
        href="#"
        class="bg-white rounded-full shadow btn btn-icon dark:bg-slate-900 dark:shadow-gray-700 duration-300 ease-in-out {{ $classes }}">
        <i class="mdi mdi-heart text-[20px]"></i>
    </a>
</div>



