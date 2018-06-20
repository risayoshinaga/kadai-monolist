{"changed":true,"filter":false,"title":"index.blade.php","tooltip":"/tasklist/resources/views/tasks/index.blade.php","value":"@extends('layouts.app')\n\n@section('content')\n<h1>タスク一覧</h1>\n\n @if (count($tasks) > 0)\n        <table class=\"table table-striped\">\n            <thead>\n                <tr>\n                    <th>id</th>\n                    <th>ステータス</th>\n                    <th>タスク</th>\n                </tr>\n            </thead>\n            <tbody>\n                @foreach ($tasks as $task)\n                    <tr>\n                        <td>{!! link_to_route('tasks.show', $task->id, ['id' => $task->id]) !!}</td>\n                        <td>{{ $task->status }}</td>\n                        <td>{{ $task->content }}</td>\n                    </tr>\n                @endforeach\n            </tbody>\n        </table>\n    @endif\n    {!! link_to_route('tasks.create', '新規タスクの投稿', null, ['class' => 'btn btn-primary']) !!}\n    @endsection","undoManager":{"mark":10,"position":10,"stack":[[{"start":{"row":0,"column":23},"end":{"row":1,"column":0},"action":"insert","lines":["",""],"id":57},{"start":{"row":1,"column":0},"end":{"row":2,"column":0},"action":"insert","lines":["",""]},{"start":{"row":2,"column":0},"end":{"row":2,"column":1},"action":"insert","lines":["<"]}],[{"start":{"row":2,"column":1},"end":{"row":2,"column":2},"action":"insert","lines":["h"],"id":58},{"start":{"row":2,"column":2},"end":{"row":2,"column":3},"action":"insert","lines":["1"]}],[{"start":{"row":2,"column":3},"end":{"row":2,"column":9},"action":"insert","lines":["></h1>"],"id":59}],[{"start":{"row":2,"column":4},"end":{"row":2,"column":7},"action":"insert","lines":["タスク"],"id":71}],[{"start":{"row":2,"column":7},"end":{"row":2,"column":9},"action":"insert","lines":["一覧"],"id":79}],[{"start":{"row":1,"column":0},"end":{"row":2,"column":0},"action":"insert","lines":["",""],"id":80},{"start":{"row":2,"column":0},"end":{"row":2,"column":1},"action":"insert","lines":["@"]},{"start":{"row":2,"column":1},"end":{"row":2,"column":2},"action":"insert","lines":["s"]},{"start":{"row":2,"column":2},"end":{"row":2,"column":3},"action":"insert","lines":["e"]}],[{"start":{"row":2,"column":3},"end":{"row":2,"column":4},"action":"insert","lines":["c"],"id":81},{"start":{"row":2,"column":4},"end":{"row":2,"column":5},"action":"insert","lines":["t"]},{"start":{"row":2,"column":5},"end":{"row":2,"column":6},"action":"insert","lines":["i"]},{"start":{"row":2,"column":6},"end":{"row":2,"column":7},"action":"insert","lines":["o"]},{"start":{"row":2,"column":7},"end":{"row":2,"column":8},"action":"insert","lines":["n"]},{"start":{"row":2,"column":8},"end":{"row":2,"column":9},"action":"insert","lines":["("]}],[{"start":{"row":2,"column":9},"end":{"row":2,"column":10},"action":"insert","lines":["'"],"id":82},{"start":{"row":2,"column":10},"end":{"row":2,"column":11},"action":"insert","lines":["c"]},{"start":{"row":2,"column":11},"end":{"row":2,"column":12},"action":"insert","lines":["o"]},{"start":{"row":2,"column":12},"end":{"row":2,"column":13},"action":"insert","lines":["n"]},{"start":{"row":2,"column":13},"end":{"row":2,"column":14},"action":"insert","lines":["t"]},{"start":{"row":2,"column":14},"end":{"row":2,"column":15},"action":"insert","lines":["e"]},{"start":{"row":2,"column":15},"end":{"row":2,"column":16},"action":"insert","lines":["n"]},{"start":{"row":2,"column":16},"end":{"row":2,"column":17},"action":"insert","lines":["t"]}],[{"start":{"row":2,"column":17},"end":{"row":2,"column":18},"action":"insert","lines":["'"],"id":83},{"start":{"row":2,"column":18},"end":{"row":2,"column":19},"action":"insert","lines":[")"]}],[{"start":{"row":25,"column":91},"end":{"row":26,"column":0},"action":"insert","lines":["",""],"id":84},{"start":{"row":26,"column":0},"end":{"row":26,"column":4},"action":"insert","lines":["    "]},{"start":{"row":26,"column":4},"end":{"row":26,"column":5},"action":"insert","lines":["@"]}],[{"start":{"row":26,"column":5},"end":{"row":26,"column":6},"action":"insert","lines":["e"],"id":85},{"start":{"row":26,"column":6},"end":{"row":26,"column":7},"action":"insert","lines":["n"]},{"start":{"row":26,"column":7},"end":{"row":26,"column":8},"action":"insert","lines":["d"]},{"start":{"row":26,"column":8},"end":{"row":26,"column":9},"action":"insert","lines":["s"]},{"start":{"row":26,"column":9},"end":{"row":26,"column":10},"action":"insert","lines":["e"]},{"start":{"row":26,"column":10},"end":{"row":26,"column":11},"action":"insert","lines":["c"]},{"start":{"row":26,"column":11},"end":{"row":26,"column":12},"action":"insert","lines":["t"]},{"start":{"row":26,"column":12},"end":{"row":26,"column":13},"action":"insert","lines":["i"]},{"start":{"row":26,"column":13},"end":{"row":26,"column":14},"action":"insert","lines":["o"]},{"start":{"row":26,"column":14},"end":{"row":26,"column":15},"action":"insert","lines":["n"]}],[{"start":{"row":25,"column":0},"end":{"row":26,"column":0},"action":"remove","lines":["    {!! link_to_route('tasks.create', '新規タスクの投稿', null, ['class' => 'btn btn-primary']) !!}",""],"id":87}]]},"ace":{"folds":[],"scrolltop":0,"scrollleft":0,"selection":{"start":{"row":0,"column":0},"end":{"row":0,"column":0},"isBackwards":true},"options":{"guessTabSize":true,"useWrapMode":false,"wrapToView":true},"firstLineState":0},"timestamp":1528437758850}