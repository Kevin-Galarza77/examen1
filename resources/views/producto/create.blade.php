<x-app-layout>
<h3 class="text-center display-5 my-3">Agregar Producto</h3>
<div class="container">
    <div class="modal-dialog">
        <div class="modal-content">
            <form method="POST" action="{{ route('producto.store') }}" enctype="multipart/form-data">
                @csrf
                <div class="modal-header">
                    <h5 class="modal-title text-center w-100" id="exampleModalLabel">Datos del nuevo producto</h5>
                </div>
                <div class="modal-body">
                    <input type="text" name="nombre" class="form-control" placeholder="Nombre del producto" required>
                    <textarea name="descripcion" rows="4" class="form-control  my-3" placeholder="Descripción sobre el producto..." required></textarea>
                    <input type="file" name="imagen" class="form-control" required>
                </div>
                <div class="modal-footer d-flex justify-content-center align-items-center m-3">
                    <button type="submit" class="btn btn-primary text-primary link-light">Agregar</button>
                </div>
            </form>
        </div>
    </div>
</div>
</x-app-layout>
