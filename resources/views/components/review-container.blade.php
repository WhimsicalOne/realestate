<div class="container relative mt-16 lg:mt-24">
    <div class="grid grid-cols-1 pb-8 text-center">
        <h3 class="mb-4 text-2xl font-semibold leading-normal md:text-3xl md:leading-normal">What Our Client Say ?</h3>
        <p class="max-w-xl mx-auto text-slate-400">A great plateform to buy, sell and rent your properties without any agent or commisions.</p>
    </div>

    <div class="relative flex justify-center mt-16">
        <div class="relative w-full lg:w-1/3 md:w-1/2">
            <div class="absolute -top-20 md:-start-24 -start-0">
                <i class="mdi mdi-format-quote-open text-9xl opacity-5"></i>
            </div>

            <div class="absolute bottom-28 md:-end-24 -end-0">
                <i class="mdi mdi-format-quote-close text-9xl opacity-5"></i>
            </div>

            @foreach ($reviews as $review)
                <livewire:review-item />
            @endforeach

        </div>
    </div>
</div>
