<x-layouts.app>
    <div class="row py-4 mb-3">
        <div class="col-sm-8">
            <p class="slate">Clients</p>
            <div class="mb-3">
                <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="Enter search ...">
            </div>
            <livewire:clients.client-list/>
        </div>
        {{-- Empty space --}}
        <div class="col-sm-4">
            ...
        </div>
    </div>
</x-layouts.app>

