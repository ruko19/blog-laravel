<div class="card">



    <div class="card-header">
        <input wire:model.live="search" type="text" class="form-control" placeholder="Escribe el nombre de post">
    </div>



    @if ($posts->count())

    <div class="car-body">
        <table class="table table-striped">
            <th>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th colspan="2">

                    </th>
                </tr>
            </th>
            <tbody>
                @foreach ($posts as $post)

                <tr>
                    <td>{{$post->id}}</td>
                    <td>{{$post->name}}</td>
                    <td width='2px'>
                        <a class="btn btn-primary btn-sm" href="{{route('admin.posts.edit',$post)}}">Editar</a>
                    </td>
                    <td width='2px'>
                        <form action="{{route('admin.posts.destroy',$post)}}" method="POST">
                               @method('DELETE')
                               @csrf
                               <button class="btn btn-danger btn-sm" type="submit">Eliminar</button>
                        </form>
                    </td>
                </tr>

                @endforeach
            </tbody>

        </table>


    </div>

    <div class="card-footer">
        {{ $posts->links() }}
    </div>

    @else
   <div class="card-body">
     <strong>No hay ningun resgistro....</strong>
   </div>
    @endif



</div>
