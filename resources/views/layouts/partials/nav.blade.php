<nav class="container" id="main-sidenav">
    <div class="row">
        <div class="nav-edition">
            <h4>édition</h4>
            <ul class="nav-edition-liste">
                    @foreach($editions as $edition)
                        <li class="nav-edition-circle" id="cercle">
                          <div class="nav-edition-container-year">
                            <a href="/nozon/{{$edition->annee}}" class="nav-edition-year">{{$edition->annee}}</a>
                          </div>
                        </li>
                    @endforeach

                {{--<li class="nav-edition-circle circle-activ" id="cercle">--}}
                    {{--<div class="nav-edition-container-year">--}}
                        {{--<a href="/" class="nav-edition-year year-activ">2017</a>--}}
                    {{--</div>--}}
                {{--</li>--}}

                {{--<li class="nav-edition-circle" id="cercle">--}}
                    {{--<div class="nav-edition-container-year">--}}
                        {{--<a href="/" class="nav-edition-year">2016</a>--}}
                    {{--</div>--}}
                {{--</li>--}}

            </ul>
        </div>
    </div>
</nav>