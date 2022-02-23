
    <form action="{{route('layouts._locale',['locale'=>$lang])}}" method="POST">
    @csrf
        <button type="submit" class="nav-link fs-4" style="border:none;background-color:transparent">
        <span class="fi fi-{{$nation}}"></span>
        </button>
    </form>
