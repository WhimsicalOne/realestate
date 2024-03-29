<section class="relative md:pt-44 pt-36 bg-gradient-to-b from-slate-50 dark:from-slate-800 to-transparent hero">
    <div class="container relative">
        <div class="grid grid-cols-1">
            <div class="text-center">
                <h1 class="mb-6 text-4xl font-bold leading-normal lg:leading-normal lg:text-5xl">Are you ready to find your dream home</h1>
                <p class="max-w-xl mx-auto text-xl text-slate-400">A great plateform to buy, sell and rent your properties without any agent or commisions.</p>

                <div class="relative mt-8 subcribe-form z-1">
                    <form class="relative max-w-2xl mx-auto" action="{{ route('search') }}">
                        @csrf
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-search w-5 h-5 absolute top-[47%] -translate-y-1/2 start-4"><circle cx="11" cy="11" r="8"></circle><line x1="21" y1="21" x2="16.65" y2="16.65"></line></svg>
                        <input type="name" id="term" name="term" class="bg-white rounded-full shadow dark:bg-slate-900 dark:shadow-gray-700 ps-12" placeholder="City, Address, Zip:">
                        <button type="submit" class="text-white bg-green-600 rounded-full cursor-pointer btn hover:bg-green-700">Search</button>
                    </form>
                </div>
            </div>
            <div class="relative -mt-[25px]">
                <img src="{{ asset('images/05.jpg') }}" class="shadow-md rounded-xl dark:shadow-gray-700" alt="">
                <div class="absolute text-center bottom-2/4 translate-y-2/4 start-0 end-0">
                    <a href="#!" data-type="youtube" data-id="yba7hPeTSjk" class="inline-flex items-center justify-center w-20 h-20 text-green-600 bg-white rounded-full shadow-md lightbox dark:shadow-gray-800 dark:bg-slate-900">
                        <svg class="inline-flex items-center justify-center w-3 h-3 text-2xl" xmlns="http://www.w3.org/2000/svg" height="16" width="12" viewBox="0 0 384 512"><!--!Font Awesome Free 6.5.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2023 Fonticons, Inc.--><path fill="#15803d" d="M73 39c-14.8-9.1-33.4-9.4-48.5-.9S0 62.6 0 80V432c0 17.4 9.4 33.4 24.5 41.9s33.7 8.1 48.5-.9L361 297c14.3-8.7 23-24.2 23-41s-8.7-32.2-23-41L73 39z"/></svg>
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>
