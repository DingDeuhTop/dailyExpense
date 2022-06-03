<x-app>
    <section>
        <div class="container">
            <div class="row">
                <div class="col-12 pt-2">
                    <a href="/index" class="btn btn-outline-primary btn-sm">Go Back</a>
                    <div class="pl-4 pr-4 pt-4 pb-4">Create New user</div>
                    <hr>
                    <form action="" method="POST">
                        @csrf
                        <div class="row">
                            <div class="control-group col-12">
                                <label for="name">Name</label>
                                <input type="text" id='name' class="form-control" name="name"
                                    placeholder="Enter Your Name" value="{{ old('name') }}" required>
                                <label for="email">Email</label>
                                <input type="email" id='email' class="form-control" name="email"
                                    placeholder="Enter Your email" value="{{ old('email') }}" required>
                                <label for="email">Password</label>
                                <input type="password" id='password' class="form-control" name="password"
                                    placeholder="Enter Your Password" required>
                            </div>
                        </div>
                        <div class="row">
                            <div class="control-group col-12 text-center mt-5">
                                <button class="btn btn-primary">Create New User</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
</x-app>
