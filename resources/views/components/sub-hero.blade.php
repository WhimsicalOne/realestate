<section class="hero hero--sub">
    <div class="relative table w-full py-32 bg-center bg-no-repeat bg-cover lg:py-36" style="background: url({{ $background }});">
        <div class="absolute inset-0 bg-black opacity-80"></div>
        <div class="container relative">
            <div class="grid grid-cols-1 mt-10 text-center">
                <h1 class="text-3xl font-medium leading-normal text-white md:text-4xl md:leading-normal">{{ $title }}</h1>

                @if(request()->term)
                    <p class="m-0 mt-0 text-lg text-white searched-for">Searched for: <span class="underline">{{ request()->term }}</span></p>
                @endif
            </div>
        </div>
    </div>

    <div class="relative">
        <div class="overflow-hidden text-white shape z-1 dark:text-slate-900">
            <svg viewBox="0 0 2880 48" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M0 48H1437.5H2880V0H2160C1442.5 52 720 0 720 0H0V48Z" fill="currentColor"></path>
            </svg>
        </div>
    </div>

    <livewire:search-results-listings />

</section>
