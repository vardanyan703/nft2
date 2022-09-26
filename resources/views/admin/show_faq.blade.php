@foreach($list as $item)
<h3>{{ $item['question'] }}</h3>
<p>{{ $item['answer'] }}</p>
@endforeach