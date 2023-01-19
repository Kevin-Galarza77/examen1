<x-app-layout>
    <h3 class="text-center display-5 my-3">Productos Disponibles</h3>
    <hr>
    <div class="m-2">
        <a href="{{route('producto.create')}}" class="btn btn-success px-4 my-4">Crear Producto</a>
        <table id='articulos' class="table table-dark table-striped">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Producto</th>
                    <th scope="col">Foto</th>
                    <th scope="col">Descripción</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($productos as $key => $producto)
                <tr>
                    <td>{{ $key + 1 }}</td>
                    <td>{{ $producto->nombre }}</td>
                    <td><img width="100px;" src="{{ $producto->url }}"></td>
                    <td>{{ $producto->descripcion }}</td>
                    <td>

                        <form method="POST" id="deleteProducto{{$key}}" action="{{route('producto.destroy',[$producto->id])}}">

                            <a data-bs-toggle="modal" data-bs-target="#exampleModal2{{$key}}" class="btn btn-secondary">Editar</a>
                            @csrf
                            @method('delete')
                            <button type="submit" class="btn btn-danger bg-danger text-light link-dark">Eliminar</button>

                        </form>

                    </td>
                </tr>





                {{-- MODAL EDITAR PRODUCTO --}}
                <div class="modal fade" id="exampleModal2{{$key}}" tabindex="-1" aria-labelledby="exampleModalLabel2" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <form method="POST" action="{{ route('producto.update', $producto->id) }}" enctype="multipart/form-data">
                                @csrf
                                @method('patch')
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel2">Editar producto {{$producto->nombre}}</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <input type="text" name="nombre" class="form-control" value="{{ $producto->nombre }}" required>
                                    <textarea name="descripcion" rows="4" class="form-control  my-3" placeholder="Descripción sobre el producto..." required>{{ $producto->descripcion }}</textarea>
                                    <label>Imagen actual</label>
                                    <img width="100px;" src="{{ $producto->url }}">
                                    <br />
                                    <label>Agregar nueva imagen</label>
                                    <input type="file" name="imagen" class="form-control">
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary bg-secondary link-dark text-light" data-bs-dismiss="modal">Cerrar</button>
                                    <button type="submit" class="btn btn-primary bg-primary text-light link-dark">Agregar</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                @endforeach
            </tbody>
        </table>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-p34f1UUtsS3wqzfto5wAAmdvj+osOnFyQFpp4Ua3gs/ZVWx6oOypYoCJhGGScy+8" crossorigin="anonymous">
</script>
<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
<script src="https://cdn.datatables.net/1.13.1/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.13.1/js/dataTables.bootstrap5.min.js"></script>


<script>
    $(document).ready(function() {
        $('#articulos').DataTable();
    });
</script>
</x-app-layout>