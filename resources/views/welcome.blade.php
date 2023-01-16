@extends("layout.structure")
@section('main')
<table class="table">
    <caption>List of users</caption>
    <thead>
      <tr class="bg-slate-500">
          
          <th>ID</th>
          <th>TITLE</th>
          <th>ORIGINAL_TITLE</th>
          <th>NATIONALITY</th>
          <th>DATE</th>
          <th>VOTE</th>
          
      </tr>
    </thead>
    <tbody>
        @foreach ($all_movies as $elem)
        
        <tr>
        <td class="px-5">{{$elem["id"]}}</td>
        <td class="px-5">{{$elem["title"]}}</td>
        <td class="px-5">{{$elem["original_title"]}}</td>
        <td class="px-5">{{$elem["nationality"]}}</td>
        <td class="px-5">{{$elem["date"]}}</td>
        <td class="px-5">{{$elem["vote"]}}</td>
      </tr>
    
    
    
        
    
    </tbody>
      @endforeach
      
      
    </tbody>
  </table>

@endsection