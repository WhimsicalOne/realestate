<div class="subcribe-form z-1">
    <form class="relative max-w-lg md:ms-auto" wire:submit='save'>
        <input type="email" wire:model="email" class="bg-white rounded-full shadow dark:bg-slate-900 dark:shadow-gray-700" placeholder="Enter your email">
        <div>@error('email') {{ $message }} @enderror</div>
        <button type="submit" class="text-white bg-green-600 rounded-full btn hover:bg-green-700">Subscribe</button>
    </form><!--end form-->
</div>
