<div>
    Post de número {{$post->id}}
</div>
<form action="/blog/editar/{{$post->id}}" method='POST'>
    @csrf
    @method('PUT')
    <div>
        <input type="text" name="title" value="{{$post->title}}"/>
    </div>
    <div>
        <input type="text" name="body" value="{{$post->body}}"/>
    </div>
    <input type="submit" />
</form>

<a href="{{route('blog.index')}}">Voltar para postagens</a>
