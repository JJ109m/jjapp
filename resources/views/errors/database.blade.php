<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Error 500</title>
    <link rel="stylesheet" href="{{ asset('backendprin/assets/css/main.css') }}">
</head>

<body>
    <div class="error-area">
        <div class="d-table">
            <div class="d-table-cell">
                <div class="container">
                    <div class="error-content">
                        <h1>500</h1>
                        <h2>¡Ups! ¡Página no encontrada!</h2>
                        <p>La página que buscas no existe. Es posible que se haya movido o eliminado.</p>
                        <div class="button">
                            <a class="btn" href="#" onclick="reloadPage()">Recargar Página</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
        function reloadPage() {
            location.reload();
        }
    </script>
</body>

</html>
