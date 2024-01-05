<main>
    <x-sub-hero :title="$category->name" :background="$background"/>
    <livewire:listings :category="$category->id"/>
</main>
