<x-layouts.auth>
    <div class="h-100 p-3">
        <x-slot name="header">
            <h4 class="slate p-3">Register</h4>
        </x-slot>
        <form action="{{route('register')}}" method="post">
            @csrf
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label slate-light">Name</label>
                <input type="text" class="form-control" name="name" id="name" value="{{old('name')}}" placeholder="eg. John Doe">
                @error('name')
                    <small class="text-danger text-xs">{{$message}}</small>
                @enderror
            </div>
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label slate-light">Email address</label>
                <input type="email" class="form-control" name="email" id="email" value="{{old('email')}}" placeholder="eg. name@example.com">
                @error('email')
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
                <button class="btn btn-light slate-light btn-grey" type="submit">Sign up</button>
            </div>
            </div>
        </form>
</x-layouts.auth>
