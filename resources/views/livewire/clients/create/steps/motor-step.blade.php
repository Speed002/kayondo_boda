<div class="row py-4 mb-3">
    <div class="col-sm-8">
        <p class="slate">Creating New client</p>
        <p class="slate-light">Motor information</p>
        <form wire:submit.prevent='submit'>
            <div class="mb-3 row g-3">
                <div class="col-md-4 ">
                <label for="exampleFormControlInput1" class="form-label">Vehicle Type</label>
                <input type="text" wire:model="type" class="form-control" name="type" id="type" value="{{old('type')}}" placeholder="eg. Motorbike">
                @error('type')
                    <small class="text-danger text-xs">{{$message}}</small>
                @enderror
                </div>

                <div class="col-md-4">
                <label for="exampleFormControlInput1" class="form-label">Vehicle Make</label>
                <input type="text" wire:model="make" class="form-control" name="make" id="make" value="{{old('make')}}" placeholder="eg. Bajaj">
                @error('make')
                    <small class="text-danger text-xs">{{$message}}</small>
                @enderror
                </div>

                <div class="col-md-4">
                <label for="exampleFormControlInput1" class="form-label">Registration number</label>
                <input type="text" wire:model="registration" class="form-control" name="registration" id="registration" value="{{old('registration')}}">
                @error('registration')
                    <small class="text-danger text-xs">{{$message}}</small>
                @enderror
                </div>

                <div class="col-md-4">
                <label for="exampleFormControlInput1" class="form-label">Color</label>
                <input type="text" wire:model="color" class="form-control" name="color" id="color" value="{{old('color')}}" placeholder="eg. Red">
                @error('color')
                    <small class="text-danger text-xs">{{$message}}</small>
                @enderror
                </div>

                <div class="col-md-4">
                <label for="exampleFormControlInput1" class="form-label">Engine number</label>
                <input type="text" wire:model="engine" class="form-control" name="engine" id="engine" value="{{old('engine')}}" placeholder="eg. XSDF...">
                @error('engine')
                    <small class="text-danger text-xs">{{$message}}</small>
                @enderror
                </div>

                <div class="col-md-4">
                <label for="exampleFormControlInput1" class="form-label">Chasis number</label>
                <input type="text" wire:model="chasis" class="form-control" name="chasis" id="chasis" value="{{old('chasis')}}" placeholder="eg. DFGE">
                @error('chasis')
                    <small class="text-danger text-xs">{{$message}}</small>
                @enderror
                </div>

                <div class="col-md-4">
                <label for="exampleFormControlInput1" class="form-label">Condition (New or Old)</label>
                <input type="text" wire:model="condition" class="form-control" name="condition" id="condition" value="{{old('condition')}}" placeholder="eg. New">
                @error('condition')
                    <small class="text-danger text-xs">{{$message}}</small>
                @enderror
                </div>

                <div class="col-md-4">
                <label for="exampleFormControlInput1" class="form-label">Registered names</label>
                <input type="text" wire:model="registered_names" class="form-control" name="registered_names" id="registered_names" value="{{old('registered_names')}}" placeholder="eg. Registered names">
                @error('registered_names')
                    <small class="text-danger text-xs">{{$message}}</small>
                @enderror
                </div>
            </div>
            <div class="d-flex justify-content-between">
                <div class="mb-3">
                    <button wire:click="previousStep" class="btn btn-light small" type="button">Previous</button>
                </div>
                <div class="mb-3">
                    <button class="btn btn-light small" type="submit">
                        <span wire:loading.delay.long>
                            Loading ...
                        </span>
                        <span wire:loading.remove.delay.long>
                            Next
                        </span>
                    </button>
                </div>
            </div>
        </form>
    </div>
    <div class="col-sm-4">
    
    </div>
</div>
