@props(['listing'])

<div class="bg-gray-50 border border-gray-200 rounded p-6 m-2">
    <div class="flex">
        <img src="" alt="">
        <div>
            <h3 class="text-2xl">
                <a href="/listings/{{ $listing->id }}">{{ $listing->title }}</a>
            </h3>
            <div class="text-xl font-bold mb-4">{{ $listing->company }}</div>
            <x-tags :tagsCsv="$listing->tags" />
            <div class="text-lg mt-4">
                <i class="fa-solid fa-location-dot">{{ $listing->location }}</i>
            </div>
        </div>
    </div>
</div>
