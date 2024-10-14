<table class="table table-striped table-hover border">
    <thead class="yable-dark">
        <tr>
            <th scope="">#</th>
            <th scope="">Nome Tag</th>
            <th scope="">Q.ta articoli collegati</th>
            <th scope="">Aggiorna</th>
            <th scope="">Cancella</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($metaInfos as $metaInfo)
        <tr>
            <th scope="row">{{ $metaInfo-> id}}</th>
            <td>{{ $metaInfo->name}}</td>
            <td>{{ count ($metaInfo->articles) }}</td>
            @if ($metaType == 'tags')
            <td>
              <form action="{{ route('admin.editTag' , ['tag' => $metaInfo])}}" method="POST">
                @csrf
                @method('put')
                <input type="text" name="name" placeholder="Nuovo nome tag" class="form-control w-50 d-inline">
                <button type="submit" class="btn btn-info">Aggiornami</button>
            </form>   
            </td>
            <td>
                <form action="{{ route('admin.deleteTag' , ['tag' => $metaInfo])}}" method="POST" method="">
                  @csrf
                  @method('delete')
                  <button type="submit" class="btn btn-danger">Aggiornami</button>
              </form>   
              </td>
              @else
              <td>
                <form action="" method="">
                  @csrf
                  @method('put')
                  <input type="text" name="name" placeholder="NUovo nome categoria" class="form-control w-50 d-inline">
                  <button type="submit" class="btn btn-info">Aggiornami</button>
              </form>   
              </td>
              <td>
                  <form action="" method="">
                    @csrf
                    @method('delete')
                    <button type="submit" class="btn btn-danger">Aggiornami</button>
                </form>   
                </td>
            @endif
        </tr>
            
        @endforeach
    </tbody>
</table>