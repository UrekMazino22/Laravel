<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Sistema de Ventas</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <style>
        body { font-family: Arial, sans-serif; margin:0; padding:0; background:#f5f5f5; }
        header { background:#2c3e50; color:#fff; padding:15px; }
        nav a { color:white; margin-right:15px; text-decoration:none; }
        nav a:hover { text-decoration:underline; }
        .container { width:90%; margin:20px auto; background:#fff; padding:20px; border-radius:8px; box-shadow:0 2px 6px rgba(0,0,0,0.2); }
        table { width:100%; border-collapse:collapse; margin-top:15px; }
        th, td { padding:10px; border:1px solid #ddd; text-align:center; }
        th { background:#34495e; color:white; }
        .btn { padding:6px 12px; border:none; border-radius:4px; cursor:pointer; text-decoration:none; }
        .btn-primary { background:#3498db; color:#fff; }
        .btn-danger { background:#e74c3c; color:#fff; }
        .btn-success { background:#2ecc71; color:#fff; }
        .btn-warning { background:#f39c12; color:#fff; }
        form { display:inline; }
        .alert { padding:10px; margin:10px 0; border-radius:4px; }
        .alert-success { background:#2ecc71; color:white; }
        .alert-error { background:#e74c3c; color:white; }
    </style>
</head>
<body>
    <header>
        <h1>Sistema de Ventas de Empanadas</h1>
        <nav>
            <a href="{{ route('pos.index') }}">POS</a>
            <a href="{{ route('admin.index') }}">Administración</a>
        </nav>
    </header>
    <div class="container">
        @if(session('success'))
            <div class="alert alert-success">{{ session('success') }}</div>
        @endif
        @if(session('error'))
            <div class="alert alert-error">{{ session('error') }}</div>
        @endif

        @yield('content')
    </div>
</body>
</html>
