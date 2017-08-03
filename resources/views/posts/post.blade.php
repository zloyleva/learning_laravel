<!-- Blog post / -->

    <div class="blog-post">
        <h2 class="blog-post-title"><a href="/posts/{{$post->id}}">{{$post->title}}</a></h2>
        <p class="blog-post-meta">{{date('F j, Y',strtotime($post->created_at))}} by <a href="#">Jacob</a></p>

        <p>{{$post->body}}</p>
    </div>

<!-- /.blog-post -->