<section class="relative md:py-24 py-16 categories">
    <div class="container relative">
        <div class="grid grid-cols-1 pb-8">
            <h3 class="mb-4 md:text-3xl md:leading-normal text-2xl leading-normal font-semibold">Listing Categories</h3>
            <p class="text-slate-400 max-w-xl">A great plateform to buy, sell and rent your properties without any agent or commisions.</p>
        </div>

        <div class="grid lg:grid-cols-5 md:grid-cols-3 grid-cols-2 mt-8 md:gap-[30px] gap-3">
            @foreach ($categories as $category)
                <div class="group rounded-xl bg-white dark:bg-slate-900 shadow hover:shadow-xl dark:hover:shadow-xl dark:shadow-gray-700 dark:hover:shadow-gray-700 overflow-hidden ease-in-out duration-500">
                    <a href="/category/{{ strtolower($category->name) }}">
                        @if($category->image_url == 'images/categories/default.png')
                            <img src="{{ asset('images/categories') . '/' . strtolower($category->name) . '.jpg' }}" alt="{{ strtolower($category->name) }}">
                        @else
                            <img src="{{ asset($category->image_url) }}" alt="{{ strtolower($category->name) }}">
                        @endif
                        <div class="p-4">
                            <span class="text-xl font-medium hover:text-green-600">{{ $category->name }}</span>
                            <p class="text-slate-400 text-sm mt-1">{{ $category->listings->count() }} Listings</p>
                        </div>
                    </a>
                </div>
            @endforeach
        </div>
    </div>
</section>
