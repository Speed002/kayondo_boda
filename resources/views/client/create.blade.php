<x-layouts.app>
    <div class="row py-4 mb-3">
        <div class="col-sm-8">
            @if (session('client-created'))
                <small class="text-success">
                    {{session('client-created')}}
                </small>
            @endif
            <livewire:clients.create.create/>
        </div>
        <div class="col-sm-4">
            ...
        </div>
    </div>
</x-layouts.app>
