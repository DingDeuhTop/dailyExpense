<x-app>
    <section>
        <div class="container">
            <div class="row">
                <div class="col-12 pt-2">
                    <a href="/index" class="btn btn-outline-primary btn-sm">Go Back</a>
                    <div class="pl-4 pr-4 pt-4 pb-4">Login user</div>
                    <hr>
                    <form action="" method="POST">
                        @csrf
                        <div class="row">
                            <div class="control-group col-12">
                                <label for="email">Email</label>
                                <input type="email" id='email' class="form-control" name="email"
                                    placeholder="Enter Your email" value="{{ old('email') }}" required>

                                @error('email')
                                    <p class="text-danger mt-1">{{ $message }}</p>
                                @enderror
                                <label for="email">Password</label>
                                <input type="password" id='password' class="form-control" name="password"
                                    placeholder="Enter Your Password" required>
                                @error('password')
                                    <p class="text-danger mt-1">{{ $message }}</p>
                                @enderror
                            </div>
                        </div>
                        <div class="row">
                            <div class="control-group col-12 text-center mt-5">
                                <button class="btn btn-primary">Login User</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
</x-app>
