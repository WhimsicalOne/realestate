<section class="relative py-16 lg:py-24">

    <div class="container relative">
        @if($listings->isNotEmpty())
            <div class="grid lg:grid-cols-3 md:grid-cols-2 grid-cols-1 gap-[30px]">
                @foreach ($listings as $listing)
                    <x-listing :listing="$listing" />
                @endforeach
            </div>

            {{-- Pagination --}}
            {{ $listings->links() }}
        @else
            <p class="text-center">There are no currently search term, please return to <a href="/" class="underline">home page</a> and do a search from there.</p>
        @endif
    </div>
</section>
