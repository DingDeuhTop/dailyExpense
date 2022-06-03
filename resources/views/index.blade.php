<x-app>
    <section>
        <div class="container">
            <div class="row mt-3">
                <div class="col-12 pt-2">
                    <div class="row">
                        <div class="col-8">
                            <h1 class="display-one">Welcome to, {{ config('app.name') }}</h1>
                            <p>Here is the user's data</p>
                        </div>
                        @guest
                            <div class="col-4">
                                <p>Create New User</p>
                                <a href="/register" class="btn btn-primary btn-sm">New User</a>
                            </div>
                        @endguest
                    </div>
                    @foreach ($posts as $post)
                        <ul>
                            <li><a href="index/{{ $post->id }}">{{ ucfirst($post->name) }}</a></li>
                        </ul>
                    @endforeach
                </div>
            </div>
        </div>
    </section>
</x-app>
