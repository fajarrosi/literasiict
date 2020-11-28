@section('nav')
@guest
<nav class="nav-menu d-none d-lg-block">
  <ul>
    <li><a href="/result">Hasil Literasi</a></li>

    <li><a href="{{ route('login') }}">Masuk<i class="bx bx-chevron-right"></i></a></li>
  </ul>
</nav><!-- .nav-menu -->

<a href="/survey" class="get-started-btn ">Isi Kuesioner</a>

@elseif(auth()->user()->role_id == '1')

<nav class="nav-menu d-none d-lg-block">
  <ul>
    <li><a href="/result">Hasil Literasi</a></li>

    <li><a href="/dashboard">Dashboard</a></li>
    <li class="drop-down"><a href="">{{ Auth::user()->name }}</a>
      <ul>
        <li><a href="{{ route('logout') }}" onclick="event.preventDefault();
        document.getElementById('logout-form').submit();">Logout</a></li>
        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
          @csrf
        </form>
      </ul>
    </li>
  </ul>
</nav><!-- .nav-menu -->
@else
<nav class="nav-menu d-none d-lg-block">
  <ul>
    <li><a href="/result">Hasil Literasi</a></li>
    
    <li class="drop-down"><a href="">Pelatihan</a>
      <ul>
        <li><a href="#">Pelatihan Internet</a></li>
        <li><a href="#">Pelatihan Digital</a></li>
        <li><a href="#">Pelatihan Komputer</a></li>
      </ul>
    </li>
        <li><a href="#">Dashboard</a></li>
    <li class="drop-down"><a href="">{{ Auth::user()->name }}</a>
      <ul>
        <li><a href="{{ route('logout') }}" onclick="event.preventDefault();
        document.getElementById('logout-form').submit();">Logout</a></li>
        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
          @csrf
        </form>
      </ul>
    </li>
  </ul>
</nav><!-- .nav-menu -->
@endguest


@endsection