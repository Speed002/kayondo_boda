<div class="container">
    <div class="row py-4 mb-3">
        <div class="col-md-8 col-sm-12">
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
                            You are about to remove {{$client->name}} and all the data... please confirm decision by
                            <form action="{{route('remove-client', $client)}}" method="POST">
                                @csrf
                                <button type="submit" class="btn btn-danger btn-sm">clicking here</button>
                            </form>
                            .
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-4 col-sm-12 mt-3 mt-md-0">
            <p>{{$client->name}}'s profile</p>
            <small>Navigation (click to switch)</small>
            <br>
            <div class="btn-group col-12 mb-3" role="group" aria-label="Basic example">
                <button type="button" class="btn btn-outline-primary" onclick="showComponent('personal-info')">Personal</button>
                <button type="button" class="btn btn-outline-primary" onclick="showComponent('motor-info')">Motor</button>
                <button type="button" class="btn btn-outline-primary" onclick="showComponent('payment-info')">Payment</button>
                <button type="button" class="btn btn-outline-primary" onclick="showComponent('referee-info')">Referee</button>
            </div>
            <br>
            <small>Click on file to download</small>
            <div class="">
                <a href="{{route('take-over.document', $client)}}" class="btn btn-primary btn-sm p-1">Take-Over Form</a>
                <a href="{{route('online-hirer-form.document', $client)}}" class="btn btn-primary btn-sm p-1">Online Hirer Form</a>
                <a href="{{route('luganda.document', $client)}}" class="btn btn-primary btn-sm p-1">Luganda Agreement</a>
                <a href="{{route('english.document', $client)}}" class="btn btn-primary btn-sm p-1">English Agreement</a>
            </div>
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
