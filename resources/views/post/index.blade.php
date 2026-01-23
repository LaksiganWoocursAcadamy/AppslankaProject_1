@extends('layouts.app')

@section('title', 'posts')

@section('content')



<div class="container mt-4">
    <div class="row">
        <h1 class="text-center">Our Posts</h1>
        @if($message = Session::get('success'))
<div class="alert alert-success">{{ $message }}</div>
@endif
        @foreach($post as $posts)

            <!-- ONE CARD (this is the only card) -->
            <div class="col-md-4 mb-4">
                <!-- 3 cards per row -->

                <div class="card h-100">
                    <img src="https://www.investopedia.com/thmb/ejUMpcr5pOzEIkw5FekHv4E5-f0=/1500x0/filters:no_upscale():max_bytes(150000):strip_icc()/GettyImages-1210536688-f8aa4c9c1ace4e348e2bcd5e267fdbb3.jpg"
                        class="card-img-top" alt="Card image">

                    <div class="card-body">
                        <h5 class="card-title">{{ $posts->title }}</h5>
                        <p class="card-text">{{ $truncated = Str::limit($posts->desc, 80) }}</p>
                        <small class="text-muted">{{ $posts->content }}</small>
                    </div>
                </div>

            </div>
            <!-- END ONE CARD -->

        @endforeach

    </div>

    <!-- Pagination -->
    <div>
        {{ $post->links() }}
    </div>
</div>

@endsection



