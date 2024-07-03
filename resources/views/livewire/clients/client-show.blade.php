<div>
    <div class="row py-4 mb-3">
        <div class="col-sm-8">
            <div id="personal-info">
                <livewire:clients.update.personal :client="$client"/>
            </div>
            <div id="motor-info" style="display: none;">
                <livewire:clients.update.motor :client="$client"/>
            </div>
            <div id="payment-info" style="display: none;">
                <livewire:clients.update.payment :client="$client"/>
            </div>
            <div id="referee-info" style="display: none;">
                <livewire:clients.update.referee :client="$client"/>
            </div>

            <div class="accordion accordion-flush mt-3 bg-secondary" id="accordionFlushExample">
                <div class="accordion-item">
                  <h2 class="accordion-header">
                    <button class="accordion-button collapsed bg-warning text-white" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
                      Click to remove client
                    </button>
                  </h2>
                  <div id="flush-collapseOne" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
                    <div class="accordion-body">
                        You are about to remove {{$client->name}} and all the data... please confirm decision by <span>
                            <form action="{{route('remove-client', $client)}}" method="POST">
                                @csrf
                                <button type="submit" class="btn btn-danger btn-sm">clicking here</button>
                            </form>
                        </span>.
                    </div>
                  </div>
                </div>
              </div>
        </div>
        <div class="col-sm-4">
            <p>{{$client->name}}'s profile</p>
            <small>User Information (click to check)</small>
            <div class="btn-group col-md-12 mb-3" role="group" aria-label="Basic example">
                <button type="button" style="font-size: 14px !important;" class="btn btn-outline-secondary" onclick="showComponent('personal-info')">Personal</button>
                <button type="button" style="font-size: 14px !important;" class="btn btn-outline-secondary" onclick="showComponent('motor-info')">Motor</button>
                <button type="button" style="font-size: 14px !important;" class="btn btn-outline-secondary" onclick="showComponent('payment-info')">Payment</button>
                <button type="button" style="font-size: 14px !important;" class="btn btn-outline-secondary" onclick="showComponent('referee-info')">Referee</button>
            </div>
            <small>Click on file to download</small>
            <div class="list-group">
                {{-- <a href="#" class="list-group-item list-group-item-action bg-light" onclick="showComponent('personal-info')">Personal Info</a>
                <a href="#" class="list-group-item list-group-item-action bg-light" onclick="showComponent('motor-info')">Motor Info</a>
                <a href="#" class="list-group-item list-group-item-action bg-light" onclick="showComponent('payment-info')">Payment Info</a>
                <a href="#" class="list-group-item list-group-item-action bg-light" onclick="showComponent('referee-info')">Referee Info</a> --}}
                <a href="{{route('take-over.document', $client)}}" class="list-group-item list-group-item-action">Take-Over Form</a>
                <a href="{{route('online-hirer-form.document', $client)}}" class="list-group-item list-group-item-action">Online Hirer Form</a>
                <a href="{{route('luganda.document', $client)}}" class="list-group-item list-group-item-action">Luganda Agreement</a>
                <a href="{{route('english.document', $client)}}" class="list-group-item list-group-item-action">English Agreement</a>
            </div>
            {{-- File uploader --}}
            <livewire:clients.uploader :client="$client"/>
            <livewire:clients.uploaded-files :client="$client"/>
        </div>
    </div>
</div>
<script>
    function showComponent(componentId) {
        const components = ['personal-info', 'motor-info', 'payment-info', 'referee-info'];
        components.forEach(id => {
            document.getElementById(id).style.display = (id === componentId) ? 'block' : 'none';
        });
    }
</script>
