<div>
        @if (session()->has('message'))
            <div class="alert alert-primary small">
                {{ session('message') }}
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
                                        <input type="date" class="form-control small" wire:model.defer="{{ $field }}">
                                    @else
                                        <input type="text" class="form-control small" wire:model.defer="{{ $field }}">
                                    @endif
                                </div>
                                <div class="col-auto">
                                    <button type="submit" class="btn btn-sm mb-3 text-primary">Update</button>
                                </div>
                                <div class="col-auto">
                                    <button type="button" wire:click="toggleEditing('{{ $field }}')" class="btn btn-sm mb-3 text-secondary">Cancel</button>
                                </div>
                            </form>
                        @endif
                    </div>
                    <button class="btn bg-transparent btn-sm" wire:click="toggleEditing('{{ $field }}')">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil" viewBox="0 0 16 16">
                            <path d="M12.146.146a.5.5 0 0 1 .708 0l3 3a.5.5 0 0 1 0 .708l-10 10a.5.5 0 0 1-.168.11l-5 2a.5.5 0 0 1-.65-.65l2-5a.5.5 0 0 1 .11-.168zM11.207 2.5 13.5 4.793 14.793 3.5 12.5 1.207zm1.586 3L10.5 3.207 4 9.707V10h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.293zm-9.761 5.175-.106.106-1.528 3.821 3.821-1.528.106-.106A.5.5 0 0 1 5 12.5V12h-.5a.5.5 0 0 1-.5-.5V11h-.5a.5.5 0 0 1-.468-.325"/>
                        </svg>
                    </button>
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
