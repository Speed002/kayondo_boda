<div>
        @if (session()->has('personal_message'))
            <div class="alert alert-primary alert-dismissible fade show small" role="alert">
                {{ session('personal_message') }}.
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @endif
        <ol class="list-group">
            @foreach ($editing as $field => $isEditing)
                <li class="list-group-item d-flex justify-content-between align-items-start">
                    <div class="ms-2 me-auto">
                        <div class="fw-normal slate">{{ ucfirst(str_replace('_', ' ', $field)) }}</div>
                        <span class="slate-light small">{{$client->$field}}</span>
                        @if ($isEditing)
                            <form wire:submit.prevent="update('{{ $field }}')" class="row g-3">
                                <div class="col-auto">
                                    @if ($field == 'dob' || $field == 'doa')
                                        <input type="date" class="form-control" wire:model.defer="{{ $field }}">
                                    @else
                                        <input type="text" class="form-control" wire:model.defer="{{ $field }}">
                                    @endif
                                </div>
                                <div class="col-auto">
                                    <button type="submit" class="btn btn-sm mb-3 text-primary small">Update</button>
                                </div>
                                <div class="col-auto">
                                    <button type="button" wire:click="toggleEditing('{{ $field }}')" class="btn btn-sm mb-3 text-secondary small">Cancel</button>
                                </div>
                            </form>
                        @endif
                    </div>
                    <button class="btn btn-light btn-sm small" wire:click="toggleEditing('{{ $field }}')">Edit</button>
                </li>
            @endforeach
        </ol>
        <script>
            document.addEventListener('field-updated', event => {
                console.log(`${event.detail.field} updated successfully.`);
                // To refresh the Livewire component
                Livewire.emit('refreshComponent');
            });

            Livewire.on('refreshComponent', () => {
                window.location.reload();
            });
        </script>
</div>
