<form action="{{route('blog.store')}}" method="POST">
    @csrf
    <label for="title"> Título*
        <input type="text" name="title" />
    </label>
    <label for="body"> Corpo*
        <textarea type="text" name="body" rows="8"></textarea>
    </label>
    <label>
        <input type="submit" />
    </label>
</form>

<a href="{{route('blog.index')}}">Voltar para postagens</a>
