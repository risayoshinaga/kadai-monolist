{"filter":false,"title":"favorites.blade.php","tooltip":"/microposts/resources/views/users/favorites.blade.php","undoManager":{"mark":17,"position":17,"stack":[[{"start":{"row":0,"column":0},"end":{"row":35,"column":11},"action":"insert","lines":["@extends('layouts.app')","","@section('content')","    <div class=\"row\">","        <aside class=\"col-xs-4\">","            <div class=\"panel panel-default\">","                <div class=\"panel-heading\">","                    <h3 class=\"panel-title\">{{ $user->name }}</h3>","                </div>","                <div class=\"panel-body\">","                    <img class=\"media-object img-rounded img-responsive\" src=\"{{ Gravatar::src($user->email, 500) }}\" alt=\"\">","                </div>","            </div>","            @include('favorite.favorite_button', ['micropost' => $micropost])","        </aside>","        <div class=\"col-xs-8\">","            <ul class=\"nav nav-tabs nav-justified\">","                <li role=\"presentation\" class=\"{{ Request::is('users/' . $user->id) ? 'active' : '' }}\"><a href=\"{{ route('users.show', ['id' => $user->id]) }}\">TimeLine <span class=\"badge\">{{ $count_microposts }}</span></a></li>","                <li role=\"presentation\" class=\"{{ Request::is('users/*/followings') ? 'active' : '' }}\"><a href=\"{{ route('users.followings', ['id' => $user->id]) }}\">Followings <span class=\"badge\">{{ $count_followings }}</span></a></li>","                <li role=\"presentation\" class=\"{{ Request::is('users/*/followers') ? 'active' : '' }}\"><a href=\"{{ route('users.followers', ['id' => $user->id]) }}\">Followers <span class=\"badge\">{{ $count_followers }}</span></a></li>","                <li role=\"presentation\" class=\"{{ Request::is('users/*/favorites') ? 'active' : '' }}\"><a href=\"{{ route('users.favoritings', ['id' => $micropost->id]) }}\">Favorites <span class=\"badge\">{{ $count_favorites }}</span></a></li>","            </ul>","            @if (Auth::id() == $user->id)","                  {!! Form::open(['route' => 'microposts.store']) !!}","                      <div class=\"form-group\">","                          {!! Form::textarea('content', old('content'), ['class' => 'form-control', 'rows' => '2']) !!}","                          {!! Form::submit('Post', ['class' => 'btn btn-primary btn-block']) !!}","                      </div>","                  {!! Form::close() !!}","            @endif","            @if (count($microposts) > 0)","                @include('microposts.microposts', ['microposts' => $microposts])","            @endif","        </div>","    </div>","@endsection"],"id":1}],[{"start":{"row":20,"column":160},"end":{"row":20,"column":161},"action":"remove","lines":["t"],"id":2},{"start":{"row":20,"column":159},"end":{"row":20,"column":160},"action":"remove","lines":["s"]},{"start":{"row":20,"column":158},"end":{"row":20,"column":159},"action":"remove","lines":["o"]},{"start":{"row":20,"column":157},"end":{"row":20,"column":158},"action":"remove","lines":["p"]},{"start":{"row":20,"column":156},"end":{"row":20,"column":157},"action":"remove","lines":["o"]},{"start":{"row":20,"column":155},"end":{"row":20,"column":156},"action":"remove","lines":["r"]},{"start":{"row":20,"column":154},"end":{"row":20,"column":155},"action":"remove","lines":["c"]},{"start":{"row":20,"column":153},"end":{"row":20,"column":154},"action":"remove","lines":["i"]},{"start":{"row":20,"column":152},"end":{"row":20,"column":153},"action":"remove","lines":["m"]}],[{"start":{"row":20,"column":152},"end":{"row":20,"column":153},"action":"insert","lines":["u"],"id":3},{"start":{"row":20,"column":153},"end":{"row":20,"column":154},"action":"insert","lines":["s"]},{"start":{"row":20,"column":154},"end":{"row":20,"column":155},"action":"insert","lines":["e"]},{"start":{"row":20,"column":155},"end":{"row":20,"column":156},"action":"insert","lines":["r"]}],[{"start":{"row":20,"column":78},"end":{"row":20,"column":79},"action":"remove","lines":["e"],"id":4}],[{"start":{"row":20,"column":78},"end":{"row":20,"column":79},"action":"insert","lines":["i"],"id":5},{"start":{"row":20,"column":79},"end":{"row":20,"column":80},"action":"insert","lines":["n"]},{"start":{"row":20,"column":80},"end":{"row":20,"column":81},"action":"insert","lines":["g"]}],[{"start":{"row":13,"column":59},"end":{"row":13,"column":60},"action":"remove","lines":["t"],"id":6},{"start":{"row":13,"column":58},"end":{"row":13,"column":59},"action":"remove","lines":["s"]},{"start":{"row":13,"column":57},"end":{"row":13,"column":58},"action":"remove","lines":["o"]},{"start":{"row":13,"column":56},"end":{"row":13,"column":57},"action":"remove","lines":["p"]},{"start":{"row":13,"column":55},"end":{"row":13,"column":56},"action":"remove","lines":["o"]},{"start":{"row":13,"column":54},"end":{"row":13,"column":55},"action":"remove","lines":["r"]},{"start":{"row":13,"column":53},"end":{"row":13,"column":54},"action":"remove","lines":["c"]},{"start":{"row":13,"column":52},"end":{"row":13,"column":53},"action":"remove","lines":["i"]},{"start":{"row":13,"column":51},"end":{"row":13,"column":52},"action":"remove","lines":["m"]}],[{"start":{"row":13,"column":51},"end":{"row":13,"column":52},"action":"insert","lines":["u"],"id":7},{"start":{"row":13,"column":52},"end":{"row":13,"column":53},"action":"insert","lines":["s"]},{"start":{"row":13,"column":53},"end":{"row":13,"column":54},"action":"insert","lines":["e"]},{"start":{"row":13,"column":54},"end":{"row":13,"column":55},"action":"insert","lines":["r"]}],[{"start":{"row":13,"column":69},"end":{"row":13,"column":70},"action":"remove","lines":["t"],"id":8},{"start":{"row":13,"column":68},"end":{"row":13,"column":69},"action":"remove","lines":["s"]},{"start":{"row":13,"column":67},"end":{"row":13,"column":68},"action":"remove","lines":["o"]},{"start":{"row":13,"column":66},"end":{"row":13,"column":67},"action":"remove","lines":["p"]},{"start":{"row":13,"column":65},"end":{"row":13,"column":66},"action":"remove","lines":["o"]},{"start":{"row":13,"column":64},"end":{"row":13,"column":65},"action":"remove","lines":["r"]},{"start":{"row":13,"column":63},"end":{"row":13,"column":64},"action":"remove","lines":["c"]},{"start":{"row":13,"column":62},"end":{"row":13,"column":63},"action":"remove","lines":["i"]},{"start":{"row":13,"column":61},"end":{"row":13,"column":62},"action":"remove","lines":["m"]}],[{"start":{"row":13,"column":61},"end":{"row":13,"column":62},"action":"insert","lines":["u"],"id":9},{"start":{"row":13,"column":62},"end":{"row":13,"column":63},"action":"insert","lines":["s"]},{"start":{"row":13,"column":63},"end":{"row":13,"column":64},"action":"insert","lines":["e"]},{"start":{"row":13,"column":64},"end":{"row":13,"column":65},"action":"insert","lines":["r"]}],[{"start":{"row":13,"column":38},"end":{"row":13,"column":39},"action":"remove","lines":["e"],"id":10},{"start":{"row":13,"column":37},"end":{"row":13,"column":38},"action":"remove","lines":["t"]},{"start":{"row":13,"column":36},"end":{"row":13,"column":37},"action":"remove","lines":["i"]},{"start":{"row":13,"column":35},"end":{"row":13,"column":36},"action":"remove","lines":["r"]},{"start":{"row":13,"column":34},"end":{"row":13,"column":35},"action":"remove","lines":["o"]},{"start":{"row":13,"column":33},"end":{"row":13,"column":34},"action":"remove","lines":["v"]},{"start":{"row":13,"column":32},"end":{"row":13,"column":33},"action":"remove","lines":["a"]}],[{"start":{"row":13,"column":32},"end":{"row":13,"column":33},"action":"insert","lines":["o"],"id":11},{"start":{"row":13,"column":33},"end":{"row":13,"column":34},"action":"insert","lines":["l"]},{"start":{"row":13,"column":34},"end":{"row":13,"column":35},"action":"insert","lines":["l"]},{"start":{"row":13,"column":35},"end":{"row":13,"column":36},"action":"insert","lines":["o"]},{"start":{"row":13,"column":36},"end":{"row":13,"column":37},"action":"insert","lines":["w"]}],[{"start":{"row":13,"column":29},"end":{"row":13,"column":30},"action":"remove","lines":["e"],"id":12},{"start":{"row":13,"column":28},"end":{"row":13,"column":29},"action":"remove","lines":["t"]},{"start":{"row":13,"column":27},"end":{"row":13,"column":28},"action":"remove","lines":["i"]},{"start":{"row":13,"column":26},"end":{"row":13,"column":27},"action":"remove","lines":["r"]},{"start":{"row":13,"column":25},"end":{"row":13,"column":26},"action":"remove","lines":["o"]},{"start":{"row":13,"column":24},"end":{"row":13,"column":25},"action":"remove","lines":["v"]},{"start":{"row":13,"column":23},"end":{"row":13,"column":24},"action":"remove","lines":["a"]}],[{"start":{"row":13,"column":23},"end":{"row":13,"column":24},"action":"insert","lines":["o"],"id":13},{"start":{"row":13,"column":24},"end":{"row":13,"column":25},"action":"insert","lines":["l"]},{"start":{"row":13,"column":25},"end":{"row":13,"column":26},"action":"insert","lines":["l"]},{"start":{"row":13,"column":26},"end":{"row":13,"column":27},"action":"insert","lines":["o"]},{"start":{"row":13,"column":27},"end":{"row":13,"column":28},"action":"insert","lines":["w"]}],[{"start":{"row":13,"column":22},"end":{"row":13,"column":23},"action":"insert","lines":["u"],"id":14},{"start":{"row":13,"column":23},"end":{"row":13,"column":24},"action":"insert","lines":["s"]},{"start":{"row":13,"column":24},"end":{"row":13,"column":25},"action":"insert","lines":["e"]},{"start":{"row":13,"column":25},"end":{"row":13,"column":26},"action":"insert","lines":["r"]},{"start":{"row":13,"column":26},"end":{"row":13,"column":27},"action":"insert","lines":["s"]},{"start":{"row":13,"column":27},"end":{"row":13,"column":28},"action":"insert","lines":["_"]}],[{"start":{"row":13,"column":26},"end":{"row":13,"column":27},"action":"remove","lines":["s"],"id":15}],[{"start":{"row":22,"column":12},"end":{"row":29,"column":18},"action":"remove","lines":["@if (Auth::id() == $user->id)","                  {!! Form::open(['route' => 'microposts.store']) !!}","                      <div class=\"form-group\">","                          {!! Form::textarea('content', old('content'), ['class' => 'form-control', 'rows' => '2']) !!}","                          {!! Form::submit('Post', ['class' => 'btn btn-primary btn-block']) !!}","                      </div>","                  {!! Form::close() !!}","            @endif"],"id":16}],[{"start":{"row":23,"column":13},"end":{"row":25,"column":18},"action":"remove","lines":["if (count($microposts) > 0)","                @include('microposts.microposts', ['microposts' => $microposts])","            @endif"],"id":17},{"start":{"row":23,"column":12},"end":{"row":23,"column":13},"action":"remove","lines":["@"]},{"start":{"row":23,"column":8},"end":{"row":23,"column":12},"action":"remove","lines":["    "]},{"start":{"row":23,"column":4},"end":{"row":23,"column":8},"action":"remove","lines":["    "]},{"start":{"row":23,"column":0},"end":{"row":23,"column":4},"action":"remove","lines":["    "]},{"start":{"row":22,"column":12},"end":{"row":23,"column":0},"action":"remove","lines":["",""]}],[{"start":{"row":22,"column":12},"end":{"row":24,"column":18},"action":"insert","lines":["@if (count($microposts) > 0)","                @include('microposts.microposts', ['microposts' => $microposts])","            @endif"],"id":18}]]},"ace":{"folds":[],"scrolltop":0,"scrollleft":0,"selection":{"start":{"row":13,"column":31},"end":{"row":13,"column":31},"isBackwards":false},"options":{"guessTabSize":true,"useWrapMode":false,"wrapToView":true},"firstLineState":0},"timestamp":1529285670770,"hash":"162583b7f4a98b3c15a4a7246063648a369c5b93"}