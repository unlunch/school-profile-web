@extends('layouts.app')

@section('content')
    <!-- Main Content -->
    <main class="mb-5 p-5 lg:p-10">
        <div class="container mx-auto px-4">
            <div class="border-t-2 border-gray-300 my-4 py-4 text-center">
            </div>
            <div class="grid grid-cols-1 sm:grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                @foreach ($teachers as $index => $teacher)
                    <div class="bg-white shadow-lg rounded-lg p-4 text-center">
                        @php
                            $image = $teacher->image;
                            $imageUrl = $image
                                ? route('image.stream', [
                                    'id' => $image->id,
                                    'v' => $image->updated_at->timestamp
                                ])
                                : asset('images/default-image.png');
                        @endphp

                        <img alt="{{ $teacher->title }}"
                            class="mx-auto mb-4" height="200" width="150"
                            src="{{ $imageUrl }}" />
                        <h2 class="text-base lg:text-lg font-normal font-open-sans">
                            {{ $teacher->name }}
                        </h2>
                        <p class="font-bold text-sm lg:text-base font-open-sans">
                            {{ $teacher->position }}
                        </p>
                    </div>
                @endforeach
            </div>
        </div>
    </main>
@endsection
