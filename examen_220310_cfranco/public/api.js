const URL = "http://127.0.0.1:8000/api/contactos";

/* FETCH POST */
const postContacto = async () => {
    try {
        await fetch(URL, {
            method: "POST",
            body: JSON.stringify({
                nombre: document.getElementById("nombre").value,
                tel: document.getElementById("tel").value,
                num_libro: document.getElementById("num_libro").value,
                fecha_nacimiento: document.getElementById("fec_nac").value,
            }),
            headers: {
                "Content-Type": "application/json",
            },
        });

        location.reload();
    } catch (error) {
        console.log(error);
    }
};

/* FETCH PUT */
const putContacto = async () => {
    const id = document.getElementById("idPut").value;
    const nombre = document.getElementById("nombrePut").value;
    const tel = document.getElementById("telPut").value;
    const num_libr = document.getElementById("num_libroPut").value;
    const fecha_nacimiento = document.getElementById("fec_nac").value;

    const contacto = { nombre, tel, num_libr, fecha_nacimiento };

    try {
        var raw = JSON.stringify(contacto);

        var requestOptions = {
            method: "PUT",
            headers: { "Content-Type": "application/json" },
            body: raw,
            redirect: "follow",
        };

        await fetch(`${URL}/${id}`, requestOptions);
        location.reload();
    } catch (error) {
        console.log(error);
    }
};

/* FETCH DELETE */
const dropContact = async (id) => {
    var requestOptions = {
        method: "DELETE",
        headers: { "Content-Type": "application/json" },
        redirect: "follow",
    };

    try {
        await fetch(`${URL}/${id}`, requestOptions);
        location.reload();
    } catch (error) {
        console.log(error);
    }
};

/* FETCH GET ALL */
const getAllContactos = async () => {
    try {
        const resultado = await fetch(URL);
        const contactos = await resultado.json();
        return contactos;
    } catch (error) {
        console.log(error);
    }
};

/* MOSTRAR CONTACTOS */
async function mostrarContactos() {
    const list = document.querySelector("#contactos-list");
    const contacts = await getAllContactos();

    contacts.forEach((contacto) => {
        const { nombre, tel, num_libro, fecha_nacimiento, id } = contacto;

        console.log(contacto);
        const row = document.createElement("tr");
        row.setAttribute("id", id);

        row.innerHTML += `
        <td class="id">
            ${id}
        </td>
        <td class="nombre">
            ${nombre}
        </td>
        <td class="telefono">
            ${tel}
        </td>
        <td class="Libros">
            ${num_libro}
        </td>
        <td class="Fec_nac">
            ${fecha_nacimiento}
        </td>
        <td>
            <a onclick="dropContact(${id})" data-contacto="${id}" class="btn btn-danger eliminar">Eliminar</a>
        </td>`;

        list.appendChild(row);
    });
}
