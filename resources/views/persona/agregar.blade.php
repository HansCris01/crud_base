
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-6">
        
                <h6 class="alert alert-success">Agregar Persona</h6>
           
            <div class="card">
                <div class="card-header">
                    <h4>Agregar Persona</h4>
                </div>
                <div class="card-body">

                    <form action="{{ url('/persona/'.'store') }}" method="POST">
                        @csrf

                        <div class="form-group mb-3">
                            <label for="">Nombre</label>
                            <input type="text" name="nombre" class="form-control">
                        </div>
                        <div class="form-group mb-3">
                            <label for="">Apellido paterno</label>
                            <input type="text" name="apellido_paterno" class="form-control">
                        </div>
                        <div class="form-group mb-3">
                            <label for="">Apellido materno</label>
                            <input type="text" name="apellido_materno" class="form-control">
                        </div>
                        <div class="form-group mb-3">
                            <label for="">Dni</label>
                            <input type="text" name="dni" class="form-control">
                        </div>
                        <div class="form-group mb-3">
                            <button type="submit" class="btn btn-primary">Agregar</button>
                        </div>

                    </form>

                </div>
            </div>
        </div>
    </div>
</div>

