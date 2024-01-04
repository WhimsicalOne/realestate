<form class="p-6 bg-white shadow-md dark:bg-slate-900 rounded-xl dark:shadow-gray-700" wire.submit="filterListings">
    @csrf
    <div class="registration-form text-dark text-start">
        <div class="grid grid-cols-1 gap-6 lg:grid-cols-4 md:grid-cols-2 lg:gap-0">
            <div>
                <label class="font-medium form-label text-slate-900 dark:text-white">Search: <span class="text-red-600">*</span></label>

                <div class="relative mt-2 filter-search-form filter-border">
                    <i class="uil uil-search icons"></i>
                    <input wire.model="term" name="term" type="text" id="term" class="border-0 form-input filter-input-box bg-gray-50 dark:bg-slate-800" placeholder="Search your keywords" value="{{ request()->term ? request()->term : '' }}">
                </div>
            </div>

            <div>
                <label for="buy-properties" class="font-medium form-label text-slate-900 dark:text-white">Select Categories:</label>
                <div class="relative mt-2 filter-search-form filter-border">
                    <i class="uil uil-estate icons"></i>
                    <div class="border-0 form-input filter-input-box bg-gray-50 dark:bg-slate-800">
                        <select wire.model="category" id="categories" name="categories" class="w-full bg-transparent border-0 focus:ring-0 focus:border-0">
                            <option value="" selected>Houses</option>
                            @foreach ($categories as $cat)
                                <option value="{{ $cat->id }}" {{ (int)$cat->id === old('id') ? 'selected' : '' }}>{{ $cat->name }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
            </div>

            <div>
                <label for="buy-min-price" class="font-medium form-label text-slate-900 dark:text-white">Min Price:</label>
                <div class="relative mt-2 filter-search-form filter-border">
                    <i class="uil uil-usd-circle icons"></i>
                    <div class="border-0 form-input filter-input-box bg-gray-50 dark:bg-slate-800">
                        <select wire.model="min_price" id="minprice" name="minprice" class="w-full bg-transparent border-0 focus:ring-0 focus:border-0">
                            <option value="" selected>Min Price</option>
                            @foreach ($amounts as $amount)
                                <option value="{{ $amount->id }}" {{ (int)$amount->id === old('id') ? 'selected' : '' }}>{{ $amount->price }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
            </div>

            <div>
                <label for="buy-max-price" class="font-medium form-label text-slate-900 dark:text-white">Max Price:</label>
                <div class="relative mt-2 filter-search-form">
                    <i class="uil uil-usd-circle icons"></i>
                    <div class="border-0 form-input filter-input-box bg-gray-50 dark:bg-slate-800">
                        <select wire.model="max_price id="maxprice" name="maxprice" class="w-full bg-transparent border-0 focus:ring-0 focus:border-0">
                            <option value="" selected>Max Price</option>
                            @foreach ($amounts as $amount)
                                <option value="{{ $amount->id }}" {{ (int)$amount->id === old('id') ? 'selected' : '' }}>{{ $amount->price }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
            </div>

            <div class="lg:mt-6">
                <button type="submit" class="btn bg-green-600 hover:bg-green-700 border-green-600 hover:border-green-700 text-white searchbtn submit-btn w-full !h-12 rounded">Search</button>
            </div>
        </div>
    </div>
</form>
