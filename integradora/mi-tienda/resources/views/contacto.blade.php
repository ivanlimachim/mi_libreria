
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Contacto - Librería Página 10</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            background: #f5f1e8;
            color: #2e2a24;
        }
        header {
            background: #17324d;
            color: white;
            text-align: center;
            padding: 30px;
        }
        nav {
            background: #244b6b;
            padding: 15px;
            text-align: center;
        }
        nav a {
            color: white;
            margin: 0 15px;
            text-decoration: none;
            font-weight: bold;
        }
        main {
            max-width: 700px;
            margin: 30px auto;
            padding: 20px;
            background: white;
            border-radius: 8px;
        }
        label {
            display: block;
            margin-top: 15px;
        }
        input, textarea {
            width: 95%;
            padding: 10px;
            margin-top: 5px;
        }
        textarea {
            min-height: 100px;
        }
    </style>
</head>
<body>
    <header>
        <h1>Contacto</h1>
        <p>Librería Página 10</p>
    </header>

    <nav>
        <a href="/inicio">Inicio</a>
        <a href="/contacto">Contacto</a>
    </nav>

    <main>
        <h2>¿En qué podemos ayudarte?</h2>
        <p>Escríbenos para consultar por nuestros libros y ofertas.</p>

        <form>
            <label for="nombre">Nombre completo</label>
            <input type="text" id="nombre" name="nombre"
                   placeholder="Tu nombre">

            <label for="correo">Correo electrónico</label>
            <input type="email" id="correo" name="correo"
                   placeholder="ejemplo@correo.com">

            <label for="mensaje">Mensaje</label>
            <textarea id="mensaje" name="mensaje"
                      placeholder="Escribe tu consulta"></textarea>

            <p>
                <button type="button"
                    style="background:#244b6b;color:white;padding:10px 20px;border:0">
                    Enviar consulta
                </button>
            </p>
        </form>

        <p>Dirección: Av. Ecuador #3011</p>
    </main>
</body>
</html>
