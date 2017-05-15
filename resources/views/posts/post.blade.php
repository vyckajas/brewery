<a href="/posts/{{ $post->id }}" class="text-muted" >
    <div class="card">
        {{--<img data-src="holder.js/100px280/thumb" alt="Card image cap">--}}
        <h4>{{ $post->title }}</h4>
        <p class="card-text">{{ str_limit($post->body, $limit = 200, $end = '...') }}</p>
    </div>
</a>
