
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Librería Página 10 - Inicio</title>
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
            padding: 30px;
            text-align: center;
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
            max-width: 900px;
            margin: 30px auto;
            padding: 20px;
        }
        section {
            background: white;
            padding: 20px;
            border-radius: 8px;
            margin-bottom: 20px;
        }
    </style>
</head>
<body>
    <header>
        <h1>LIBRERÍA PÁGINA 10</h1>
        <p>La librería más completa de la ciudad</p>
    </header>

    <nav>
        <a href="/inicio">Inicio</a>
        <a href="/contacto">Contacto</a>
        <a href="{{ url('/libros') }}" class="btn btn-outline-primary ms-2">Ver Librería</a>
    </nav>

    <main>
        <section>
            <h2>Destacados de la semana</h2>
            <ul>
                <li>La última noche del Titanic</li>
                <li>Hasta el último instante</li>
                <li>Mafalda</li>
            </ul>
        </section>

        <section>
            <h2>Próximas novedades</h2>
            <ul>
                <li>Poemas</li>
                <li>La Ilíada</li>
                <li>Libros nacionales</li>
            </ul>
        </section>

        <section>
            <h2>Oferta del día</h2>
            <h3>Historia de Bolivia</h3>
            <p>Antes: Bs. 356 | Ahora: Bs. 299</p>
        </section>
    </main>

    <footer style="background:#17324d;color:white;text-align:center;padding:20px">
        Librería Página 10 - Av. Ecuador #3011
    </footer>
</body>
</html>
