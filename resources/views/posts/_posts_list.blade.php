@if (count($posts))
    @foreach ($posts as $post)
        <div class="blog-post">
            <h2 class="blog-post-title"><a href="/posts/62" >{{ $post->title }}</a></h2>
            <p class="blog-post-meta">May 14, 2017 by <a href="{{ route('users.show', $post->user_id) }}">{{ $post->user->name }}</a></p>

            <p>{{ str_limit($post->body, $limit = 100, $end = '...') }}
            <p class="blog-post-meta">赞 0  | 评论 0</p>
        </div>
        @if ( ! $loop->last)
            <hr>
        @endif
    @endforeach
@else
   <div class="empty-block">暂无数据 ~_~ </div>
@endif    