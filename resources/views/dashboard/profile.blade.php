<x-layouts.app>
    <div class="row py-4 mb-3">
        <div class="col-sm-8">
            <p class="slate">Update profile</p>
            <div class="bg-transparent p-3 rounded-2 mb-3">
                <p class="slate-light">Personal information</p>
                {{-- {{json_encode(session()->all())}} --}}
                @if (session('status') === 'profile-information-updated')
                    <p class="text-primary small">profile information updated.</p>
                @endif
                <form action="{{route('user-profile-information.update')}}" method="post">
                    @csrf
                    @method('PUT')
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label slate-light">Name</label>
                        <input type="text" class="form-control" name="name" id="name" value="{{auth()->user()->name}}" placeholder="eg. John Doe">
                        @error('name')
                            <small class="text-danger text-xs">Name is required.</small>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label slate-light">Email address</label>
                        <input type="email" class="form-control" name="email" id="email" value="{{auth()->user()->email}}" placeholder="eg. name@example.com">
                        @error('email')
                            <small class="text-danger text-xs">Valid email is required.</small>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <button class="btn btn-light small" type="submit">Update</button>
                    </div>
                </form>
            </div>
            <div class="bg-transparent p-3 rounded-2">
                <p class="slate">Update Password</p>
                @if(session('password_status'))
                    <p class="text-primary small">{{session('password_status')}}</p>
                @endif

                <form action="{{route('update.password')}}" method="post">
                    @csrf
                    @method('PUT')
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label slate-light">Current password</label>
                        <input type="password" class="form-control" name="current_password" id="current_password" >
                        @error('current_password')
                            <small class="text-danger text-xs">{{$message}}</small>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label slate-light">Password</label>
                        <input type="password" class="form-control" name="password" id="password" >
                        @error('password')
                            <small class="text-danger text-xs">{{$message}}</small>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label slate-light">Password confirmation</label>
                        <input type="password" class="form-control" name="password_confirmation" id="password_confirmation">
                        @error('password_confirmation')
                            <small class="text-danger text-xs">{{$message}}</small>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <button class="btn btn-light small" type="submit">Update password</button>
                    </div>
                </form>
            </div>
        </div>
        {{-- Empty space --}}
        <div class="col-sm-4">
            ...
        </div>
    </div>
</x-layouts.app>
