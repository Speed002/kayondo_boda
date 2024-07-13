<div class="row py-4 mb-3">
    <div class="col-sm-8">
        @if (session('status'))
        <p class="text-success">Successfully created new client.</p>
    @endif
    <p class="slate">Creating New client</p>
    <p class="slate-light">Personal information</p>
        <form wire:submit.prevent='submit'>
            <div class="mb-3 row g-3">
            <div class="col-md-4 ">
                <label for="exampleFormControlInput1" class="form-label">Name</label>
                <input type="text" wire:model.live="name" class="form-control" name="name" id="name" value="{{old('name')}}" placeholder="eg. John Doe">
                @error('name')
                    <small class="text-danger text-xs">{{$message}}</small>
                @enderror
            </div>

            <div class="col-md-4">
                <label for="exampleFormControlInput1" class="form-label">NIN Number</label>
                <input type="text" wire:model="nin" class="form-control" name="nin" id="nin" value="{{old('nin')}}" placeholder="eg. CM...">
                @error('nin')
                    <small class="text-danger text-xs">{{$message}}</small>
                @enderror
            </div>

            <div class="col-md-4">
                <label for="exampleFormControlInput1" class="form-label">Date of birth</label>
                <input type="date" wire:model="dob" class="form-control" name="dob" id="dob" value="{{old('dob')}}">
                @error('dob')
                    <small class="text-danger text-xs">{{$message}}</small>
                @enderror
            </div>

            <div class="col-md-4">
                <label for="exampleFormControlInput1" class="form-label">Contact</label>
                <input type="text" wire:model="contact" class="form-control" name="contact" id="contact" value="{{old('contact')}}" placeholder="eg. 07...">
                @error('contact')
                    <small class="text-danger text-xs">{{$message}}</small>
                @enderror
            </div>

            <div class="col-md-4">
                <label for="exampleFormControlInput1" class="form-label">Occupation</label>
                <input type="text" wire:model="occupation" class="form-control" name="occupation" id="occupation" value="{{old('occupation')}}" placeholder="eg. Boda boda">
                @error('occupation')
                    <small class="text-danger text-xs">{{$message}}</small>
                @enderror
            </div>

            <div class="col-md-4">
                <label for="exampleFormControlInput1" class="form-label">Residence</label>
                <input type="text" wire:model="residence" class="form-control" name="residence" id="residence" value="{{old('residence')}}" placeholder="eg. Kireka">
                @error('residence')
                    <small class="text-danger text-xs">{{$message}}</small>
                @enderror
            </div>

            <div class="col-md-4">
                <label for="exampleFormControlInput1" class="form-label">Stage name</label>
                <input type="text" wire:model="stage" class="form-control" name="stage" id="stage" value="{{old('stage')}}" placeholder="eg. stage name">
                @error('stage')
                    <small class="text-danger text-xs">{{$message}}</small>
                @enderror
            </div>

            <div class="col-md-4">
                <label for="exampleFormControlInput1" class="form-label">Date of agreement</label>
                <input type="date" wire:model="doa" class="form-control" name="doa" id="doa" value="{{old('doa')}}" placeholder="eg. Date of agreement">
                @error('doa')
                    <small class="text-danger text-xs">{{$message}}</small>
                @enderror
            </div>
            </div>
            <hr>
            <div class="mb-3 row g-3">
                <div class="col-md-4 ">
                <label for="exampleFormControlInput1" class="form-label">Father's name</label>
                <input type="text" wire:model="father" class="form-control" name="father" id="father" value="{{old('father')}}" placeholder="eg. John Doe">
                @error('father')
                    <small class="text-danger text-xs">{{$message}}</small>
                @enderror
                </div>

                <div class="col-md-4 ">
                    <label for="exampleFormControlInput1" class="form-label">Father's contact</label>
                    <input type="text" wire:model="father_contact" class="form-control" name="father_contact" id="father_contact" value="{{old('father_contact')}}" placeholder="eg. 07...">
                    @error('father_contact')
                        <small class="text-danger text-xs">{{$message}}</small>
                    @enderror
                </div>
            </div>

            <div class="mb-3 row g-3">
                <div class="col-md-4 ">
                <label for="exampleFormControlInput1" class="form-label">Mother's name</label>
                <input type="text" wire:model="mother" class="form-control" name="mother" id="mother" value="{{old('mother')}}" placeholder="eg. Jane Doe">
                @error('mother')
                    <small class="text-danger text-xs">{{$message}}</small>
                @enderror
                </div>

                <div class="col-md-4 ">
                    <label for="exampleFormControlInput1" class="form-label">Mother's contact</label>
                    <input type="text" wire:model="mother_contact" class="form-control" name="mother_contact" id="mother_contact" value="{{old('mother_contact')}}" placeholder="eg. 07...">
                    @error('mother_contact')
                        <small class="text-danger text-xs">{{$message}}</small>
                    @enderror
                </div>
            </div>

            <div class="mb-3">
                <button class="btn btn-dark" type="submit">
                    <span wire:loading.delay.long>
                        Loading ...
                    </span>
                    <span wire:loading.remove.delay.long>
                        Next
                    </span>
                </button>
            </div>
        </form>
    </div>
    <div class="col-sm-4">
        ...
    </div>

</div>

