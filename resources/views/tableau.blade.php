@extends ('layouts.admin')
@section('menu')


@if(session()->get('success'))
    <div class="alert alert-success">
      {{ session()->get('success') }}  
    </div><br />
  @endif
  
        <div class="content-wrapper">
          <div class="row ">
            <div class="col-12 grid-margin">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title"></h4>
                  <div class="table-responsive">
                    <table class="table text-secondary table-hover">
                      <thead>
                        <tr >
                          <th> Titre </th>
                          <th> Date de redaction</th>

                          <th> Modifier </th>
                          <th>  Supprimer </th>
                        </tr>
                      </thead>
                      <tbody>

                        @forelse ($listes as $liste)
                        <tr >

                          <td>
                            <span class="pl-2">{{$liste->titre}}</span>
                          </td>
                          <td>{{$liste->created_at}}</td>
                          <td><a href="{{ route('edit', ['id'=>$liste->id])}}" class="btn btn-primary">Modifier</a></td>

                          <td>
                             <form action="{{ route('destroy')}}" method="post">
                  @csrf
               <input type="hidden" name="id" value="{{ $liste->id }}">
                  <button class="btn btn-danger" type="submit">Supprimer</button>
                </form>
                          </td>
                        </tr>
                        @empty

                        @endforelse

                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>






@endsection