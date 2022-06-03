<x-app>
    <section>
        <div class="container mt-2">
            <button class="btn btn-success btn-sm">
                <a href="/index">Back</a>
            </button>

            @auth
                <h1 class="mt-2">{{ ucfirst(auth()->user()->name) }}</h1>
                <form action={{ "/index/create/{$user->id}" }} method="POST">
                    @csrf
                    <div class="row mt-4">
                        <div class="col-5">
                            <input type="text" id="item" class="form-control" name="item" placeholder="Enter Item"
                                required>
                        </div>
                        <div class="col-5">
                            <input type="number" id="price" class="form-control" name="price" placeholder="Enter price"
                                required>
                        </div>
                        <div class="col-2">
                            <input type="submit" value="Add" class="btn btn-primary btn-sm">
                        </div>
                    </div>
                </form>
            @else
                <p class="text-danger mt-2">Login to make action's</p>
            @endauth
        </div>
        <div class="container max-w-screen-sm">
            <table class="table table-success table-striped mt-5 text-left">
                <thead>
                    <tr>
                        <th>Item</th>
                        <th>Price (in &#8377; )</th>
                        @auth
                            <th>Action</th>
                        @endauth
                    </tr>
                </thead>
                <tbody>
                    @foreach ($dailyExpenses as $dailyExpense)
                        <tr>
                            <td>{{ ucfirst($dailyExpense->item) }}</td>
                            <td>{{ $dailyExpense->price }}</td>
                            @auth
                                <td class="">
                                    <button class="btn btn-light btn-sm mb-2 col-6">
                                        <a href="/index/{{ $dailyExpense->id }}/edit">Edit</a>
                                    </button>
                                    <form action="/index/{{ $dailyExpense->id }}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <button class="btn btn-light btn-sm col-6 ">
                                            Delete
                                        </button>
                                    </form>
                                @endauth
                        </tr>
                    @endforeach
                    <tr>
                        <td>Total</td>
                        <td>{{ $total }}</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </section>
</x-app>
