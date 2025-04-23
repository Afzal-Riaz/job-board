<x-layout>
    @foreach ($jobs as $job)
        <h1 class="text-2xl">
            Job Name:{{ $job->title }}
        </h1>
    @endforeach
</x-layout>