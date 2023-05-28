@extends('layouts.app')
@section('content')
  <div class="container">
    <table class="table table-responsive table-bordered table-hover align-middle">
      <tbody>
        @foreach ($champions as $champion)
        <tr>
          <td><img src="http://ddragon.leagueoflegends.com/cdn/{{ $version }}/img/champion/{{ $champion['id'] }}.png" alt="" width="50"></td>
          <td>{{ $champion['name'] }}</td>
          <td>
            @foreach ($champion['tags'] as $tag)
                {{ $tag }}
            @endforeach
          </td>
        </tr>
        @endforeach
      </tbody>
    </table>
  </div>
@endsection