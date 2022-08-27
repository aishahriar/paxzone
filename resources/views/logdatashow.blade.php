<table>
    <tr>
      <th>ID</th>
      <th>First In</th>
      <th>last Out</th>
    </tr>
    @php
            $i=1;
        @endphp
        @foreach ($logs as $log)
    <tr>
      <td>{{ $i++ }}</td>
      <td>{{ $log->fin }}</td>
      <td>{{ $log->lout }}</td>
    </tr>                            
    @endforeach
  </table>
