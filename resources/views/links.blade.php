@foreach ($links as $key => $value)
  <a href="{{ $key }}">
    {{ $value }}
  </a>
@endforeach
