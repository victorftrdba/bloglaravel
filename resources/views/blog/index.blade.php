@forelse($posts as $items)

<div>
    Post de número {{$items->id}}
</div>
<div>
    {{$items->title}}
</div>
<div>
    {{$items->body}}
</div>
<div>
    {{$items->created_at}}
</div>

<a href="{{route('blog.edit', $items->id)}}">Editar post</a>
<form action="{{route('blog.delete', $items->id)}}" method="post">
    @csrf
    @method('delete')
    <button type="submit">Deletar post</button>
</form><br>

@empty

Nenhum post encontrado!

@endforelse

<a href="{{route('blog.add')}}">Adicionar novo post</a>
