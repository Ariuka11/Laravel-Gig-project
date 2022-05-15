<x-layout>
    @include('partials._search')
    <a href="/" class="inline-block text-black ml-4 mb-4"><i class="fa-solid fa-arrow-left"></i> Back</a>
    <div class="mx-4">
        <div class="bg-gray-50 border border-gray-200 rounded">
            <div class="flex flex-col items-center justify-center text-center">
                <img src="" alt="">
                <h3 class="text-2xl mb-2">
                    <a href="">{{ $listing->title }}</a>
                </h3>
                <div class="text-xl font-bold mb-4">{{ $listing->company }}</div>
                <x-tags :tagsCsv="$listing->tags" />
                <div class="text-lg my-4">
                    <i class="fa-solid fa-location-dot">{{ $listing->location }}</i>
                </div>
                <div class="border border-gray-200 w-full mb-6"></div>
                <div>
                    <h3 class="text-3xl font-bold mb-4">Job Description</h3>
                    <div class="text-lg space-y-6">
                        <p>
                            {{ $listing->description }}
                        </p>
                        <a href="" class="block bg-laravel text-white mt-6 py-2 rounded-xl hover:opacity-80">Contact
                            Employer</a>
                        <a href="" class="block bg-black text-white py-2 rounded-xl hover:opacity-80">Website</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-layout>
