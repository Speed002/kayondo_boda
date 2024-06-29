<div class="row py-4 mb-3">
    <div class="col-sm-8">
        <p class="slate">Clients</p>
        <div class="mb-3">
            <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Enter search ...">
        </div>
        <ul class="list-group">
            @foreach ($clients as $client)
                <livewire:clients.client-item :client="$client"/>
            @endforeach
        </ul> 
    </div>
    <div class="col-sm-4">
        ...
    </div>
</div>
