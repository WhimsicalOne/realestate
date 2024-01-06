<section class="relative py-16 md:py-24 categories">
    <div class="container relative mt-16 lg:mt-24">
        <div class="grid grid-cols-1 pb-8 text-center">
            <h3 class="mb-4 text-2xl font-semibold leading-normal md:text-3xl md:leading-normal">Featured Properties</h3>

            <p class="max-w-xl mx-auto text-slate-400">A great plateform to buy, sell and rent your properties without any agent or commisions.</p>
        </div>

        <div class="grid lg:grid-cols-3 md:grid-cols-2 grid-cols-1 mt-8 gap-[30px]">
            @foreach($listings as $listing)
                <x-listing :listing="$listing" />
            @endforeach
        </div>
    </div>
</section>
