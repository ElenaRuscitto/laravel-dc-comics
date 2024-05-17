



    <form
        action="{{route('comics.destroy', $comic)}}" method="POST" class="d-inline-block"
        onsubmit=" return confirm('Sei sicuro di voler eliminare {{$comic->title}} ?')">
        @csrf
        @method('DELETE')
        <button type="submit" class="btn"> <i class="fa-solid fa-trash text-danger"></i> </button>
    </form>




