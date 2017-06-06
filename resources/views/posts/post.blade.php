<a href="/posts/{{ $post->id }}" class="text-muted">
    <div class="card">
        <h4>{{ $post->title }}</h4>
        <p class="card-text">{{ str_limit($post->body, $limit = 200, $end = '...') }}</p>
    </div>
</a>
