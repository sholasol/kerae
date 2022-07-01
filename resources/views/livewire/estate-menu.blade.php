
    <ul class="dropdown-menu">
        @foreach ($estate as $est )
            <li><a href="{{route('estates', ['code'=>$est->code])}}"><?php echo $est->name?></a></li>
        @endforeach
    </ul>
