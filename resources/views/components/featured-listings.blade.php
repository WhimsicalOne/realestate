<section class="relative py-16 md:py-24 categories">
    <div class="container relative mt-16 lg:mt-24">
        <div class="grid grid-cols-1 pb-8 text-center">
            <h3 class="mb-4 text-2xl font-semibold leading-normal md:text-3xl md:leading-normal">Featured Properties</h3>

            <p class="max-w-xl mx-auto text-slate-400">A great plateform to buy, sell and rent your properties without any agent or commisions.</p>
        </div>

        <div class="grid lg:grid-cols-3 md:grid-cols-2 grid-cols-1 mt-8 gap-[30px]">
            @foreach($listings as $listing)
                <div class="overflow-hidden duration-500 ease-in-out bg-white shadow group rounded-xl dark:bg-slate-900 hover:shadow-xl dark:hover:shadow-xl dark:shadow-gray-700 dark:hover:shadow-gray-700">
                    <div class="relative">
                        <img src="{{ asset('images/05.jpg') }}" alt="{{ $listing->name }}">
                        <div class="absolute top-4 end-4">
                            <a href="javascript:void(0)" class="bg-white rounded-full shadow btn btn-icon dark:bg-slate-900 dark:shadow-gray-700 text-slate-100 dark:text-slate-700 focus:text-red-600 dark:focus:text-red-600 hover:text-red-600 dark:hover:text-red-600"><i class="mdi mdi-heart text-[20px]"></i></a>
                        </div>
                    </div>

                    <div class="p-6">
                        <div class="pb-6">
                            <a href="property-detail.html" class="text-lg font-medium duration-500 ease-in-out hover:text-green-600">{{ $listing->title }}</a>
                        </div>

                        <ul class="flex items-center py-6 list-none border-y border-slate-100 dark:border-gray-800">
                            <li class="flex items-center me-4">
                                <i class="text-2xl text-green-600 uil uil-compress-arrows me-2"></i>
                                <span>{{ $listing->sqf }}sqf</span>
                            </li>

                            <li class="flex items-center me-4">
                                <i class="text-2xl text-green-600 uil uil-bed-double me-2"></i>
                                <span>{{ $listing->rooms }} Beds</span>
                            </li>

                            <li class="flex items-center">
                                <i class="text-2xl text-green-600 uil uil-bath me-2"></i>
                                <span>{{ $listing->bathrooms }} Baths</span>
                            </li>
                        </ul>

                        <ul class="flex items-center justify-between pt-6 list-none">
                            <li>
                                <span class="text-slate-400">Price</span>
                                <p class="text-lg font-medium">${{ $listing->price }}</p>
                            </li>
                        </ul>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>
