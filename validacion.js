function validar() {

    var nombrem, tipo;

    try {
        nombrem = document.getElementById("nombrem").value;
        if (nombrem === "") {
            alert('Por favor llene el campo del nombre de la mascota.');
            return false;
        }
    } catch (err) {}

    try {
        tipo = document.getElementById("tipo").value;
        if (tipo === "") {
            alert('Por favor llene el campo del tipo de la mascota.');
            return false;
        }
    } catch (err) {}

    try {
        raza = document.getElementById("raza").value;
        if (raza === "") {
            alert('Por favor llene el campo de la raza de la mascota.');
            return false;
        }
    } catch (err) {}

    try {
        genero = document.getElementById("genero").value;
        if (genero === "") {
            alert('Por favor llene el campo del genero de la mascota.');
            return false;
        }
    } catch (err) {}

    try {
        color = document.getElementById("color").value;
        if (color === "") {
            alert('Por favor llene el campo del color de la mascota.');
            return false;
        }
    } catch (err) {}

    try {
        lugarp = document.getElementById("lugarp").value;
        if (lugarp === "") {
            alert('Por favor llene el campo del lugar en donde se perdió la mascota.');
            return false;
        }
    } catch (err) {}

    try {
        lugare = document.getElementById("lugare").value;
        if (lugare === "") {
            alert('Por favor llene el campo del lugar en donde fue encontrada la mascota.');
            return false;
        }
    } catch (err) {}

    try {
        descripcion = document.getElementById("descripcion").value;
        if (descripcion === "") {
            alert('Por favor llene el campo de alguna descripcion de la mascota.');
            return false;
        }
    } catch (err) {}

    try {
        estado = document.getElementById("estado").value;
        if (estado === "") {
            alert('Por favor llene el campo del estado de la mascota.');
            return false;
        }
    } catch (err) {}

    try {
        documento = document.getElementById("documento").value;
        if (documento === "") {
            alert('Por favor llene el campo del documento de identidad.');
            return false;
        }
    } catch (err) {}

    try {
        fecha = document.getElementById("fecha").value;
        if (fecha === "") {
            alert('Por favor llene el campo de la fecha de registro.');
            return false;
        }
    } catch (err) {}

    try {
        nombre = document.getElementById("nombre").value;
        if (nombre === "") {
            alert('Por favor llene el campo del nombre.');
            return false;
        }
    } catch (err) {}

    try {
        apellido = document.getElementById("apellido").value;
        if (apellido === "") {
            alert('Por favor llene el campo del apellido.');
            return false;
        }
    } catch (err) {}

    try {
        celular = document.getElementById("celular").value;
        if (celular === "") {
            alert('Por favor llene el campo del celular.');
            return false;
        }
    } catch (err) {}

    try {
        correo = document.getElementById("correo").value;
        if (correo === "") {
            alert('Por favor llene el campo del correo.');
            return false;
        }
    } catch (err) {}

    try {
        usuario = document.getElementById("usuario").value;
        if (usuario === "") {
            alert('Por favor llene el campo del usuario.');
            return false;
        }
    } catch (err) {}

    try {
        contrasena = document.getElementById("contrasena").value;
        if (contrasena === "") {
            alert('Por favor llene el campo del contrasena.');
            return false;
        }
    } catch (err) {}

    try {
        idmascota = document.getElementById("idmascota").value;
        if (idmascota === "") {
            alert('Por favor llene el campo del identificación de la mascota.');
            return false;
        }
    } catch (err) {}
}