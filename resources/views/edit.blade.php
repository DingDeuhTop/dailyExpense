<x-app>
    <section>
        <div class="container">
            <form action="" method="POST">
                @csrf
                @method('PUT')
                <button class="btn btn-light btn-sm">
                    <a href="/index">Back</a>
                </button>
                <div class="row mt-4">
                    <div class="col-12">
                        <input type="text" id="item" class="form-control" name="item" placeholder="Enter Item"
                            value="{{ $post->item }}" required>
                    </div>
                    <div class="col-12 mt-4">
                        <input type="text" id="price" class="form-control" name="price" placeholder="Enter price"
                            value="{{ $post->price }}" required>
                    </div>
                    <div class="col-2 mt-4">
                        <input type="submit" value="update" class="btn btn-primary btn-sm">
                        <button class="btn btn-info btn-sm">
                            <a href="/index">cancel</a>
                        </button>
                    </div>
            </form>
        </div>
        </div>
    </section>
</x-app>
