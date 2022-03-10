<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Agenda de contactos</title>
</head>

<body onload="mostrarContactos()">
    <h1>Agenda de contactos</h1>

    <table class="table">
        <thead>
            <th>Id</th>
            <th>Nombre</th>
            <th>Teléfono</th>
            <th>Número de Libros</th>
            <th>Fecha de nacimiento</th>
        </thead>
        <tbody id="contactos-list"></tbody>
    </table>

    <div class="row">
        <div class="col">
            <h2>Crear Contacto</h2>
            <form id="formulario">
                <div class="m-2">
                    <label for="nombre">Nombre</label>
                    <input id="nombre" name="nombre" type="text">
                </div>

                <div class="m-2">
                    <label for="tel">Teléfono</label>
                    <input id="tel" name="tel" type="text">
                </div>

                <div class="m-2">
                    <label for="num_libros">Numero de libros</label>
                    <input id="num_libro" name="num_libro" type="number">
                </div>

                <div class="m-2">
                    <label for="fec_nac">Fecha de nacimiento</label>
                    <input id="fec_nac" name="fec_nac" type="fec_nac">
                </div>

                <input onclick="postContacto()" class="btn btn-success" value="Agregar Contacto" />

            </form>
        </div>

        <div class="col">
            <h2>Modificar Contacto</h2>

            <form id="formularioPut">

                <div class="m-2">
                    <label for="idPut">ID</label>
                    <input id="idPut" name="idPut" type="number">
                </div>


                <div class="m-2">
                    <label for="nombrePut">Nombre</label>
                    <input id="nombrePut" name="nombrePut" type="text">
                </div>

                <div class="m-2">
                    <label for="telPut">Teléfono</label>
                    <input id="telPut" name="telPut" type="text">
                </div>

                <div class="m-2">
                    <label for="num_libroPut">Número de libros</label>
                    <input id="num_libroPut" name="num_libroPut" type="number">
                </div>

                <div class="m-2">
                    <label for="fec_nacPut">Fecha de nacimiento</label>
                    <input id="fec_nacPut" name="fec_nacPut" type="fec_nacPut">
                </div>

                <input onclick="putContacto()" class="btn btn-primary" value="Modificar Contacto" />

            </form>
        </div>
    </div>

    <script src="api.js"></script>
</body>

</html>
