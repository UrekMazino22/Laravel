<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <title>Sistema de Ventas</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;800&display=swap" rel="stylesheet">

  <style>
:root{
  --bg:#fafafa;
  --ink:#1f2937;
  --muted:#6b7280;
  --card:#ffffff;
  --accent:#16a34a;
  --accent-d:#15803d;
  --warn:#dc2626;
  --ring:#e5e7eb;
  --shadow:0 12px 32px rgba(0,0,0,.06);
  --radius:24px;
  --radius-sm:12px;
}

*{box-sizing:border-box}
html,body{margin:0;padding:0;font-family:'Poppins',sans-serif;background:var(--bg);color:var(--ink);line-height:1.5}

header{
  background:#fff;
  padding:20px 40px;
  display:flex;
  justify-content:space-between;
  align-items:center;
  box-shadow:0 4px 12px rgba(0,0,0,.05);
}
header h1{
  margin:0; font-size:22px; font-weight:800;
  background:linear-gradient(90deg,var(--accent),#f59e0b);
  -webkit-background-clip:text; -webkit-text-fill-color:transparent;
}
nav a{
  margin-left:24px; text-decoration:none; color:#374151; font-weight:600; transition:.2s;
}
nav a:hover{ color:var(--accent); }

.container{
  max-width:900px;
  margin:40px auto;
  background:var(--card);
  border-radius:var(--radius);
  padding:32px;
  box-shadow:var(--shadow);
}

.alert{padding:14px 20px;border-radius:var(--radius-sm);margin-bottom:16px;font-weight:600}
.alert-success{background:#dcfce7;color:#166534}
.alert-error{background:#fee2e2;color:#991b1b}

.input,.select{
  width:100%;
  padding:12px 16px;
  border:1px solid var(--ring);
  border-radius:var(--radius-sm);
  font-size:14px;
  transition:border-color .2s, box-shadow .2s;
  background:#fff; color:var(--ink);
}
.input:focus,.select:focus{
  border-color:var(--accent);
  box-shadow:0 0 0 3px rgba(22,163,74,.25);
  outline:none;
}

.container input:not([type=checkbox]):not([type=radio]),
.container select,
.container textarea{
  width:100%;
  padding:12px 16px;
  border:1px solid var(--ring);
  border-radius:var(--radius-sm);
  font-size:14px;
  transition:border-color .2s, box-shadow .2s;
  background:#fff; color:var(--ink);
}
.container input:focus,
.container select:focus,
.container textarea:focus{
  border-color:var(--accent);
  box-shadow:0 0 0 3px rgba(22,163,74,.25);
  outline:none;
}

.btn{
  display:inline-block;
  padding:12px 28px;
  border:none;
  border-radius:999px;
  cursor:pointer;
  font-weight:600;
  font-size:14px;
  transition:transform .15s, box-shadow .15s, opacity .2s;
}
.btn-success{
  background:var(--accent); color:#fff;
  box-shadow:0 6px 12px rgba(22,163,74,.3);
}
.btn-success:hover{ background:var(--accent-d); transform:translateY(-1px) }
.btn-success:active{ transform:none; opacity:.95 }

.container button,
.container input[type=submit]{
  padding:12px 28px; border:none; border-radius:999px; font-weight:600;
  background:var(--accent); color:#fff; cursor:pointer;
}

.badge{
  display:inline-block;
  padding:4px 12px;
  font-size:12px;
  border-radius:999px;
  font-weight:600;
}
.badge.ok{ background:#dcfce7; color:#166534 }
.badge.low{ background:#fee2e2; color:#991b1b }

.producto{
  display:flex; justify-content:space-between; align-items:center; gap:12px;
  background:#f9fafb; padding:14px 18px; margin-top:12px;
  border-radius:16px; box-shadow:0 2px 6px rgba(0,0,0,.05);
}
.producto span{ font-weight:600; font-size:14px; color:#374151 }
.producto input{ width:110px }

table{ width:100%; border-collapse:collapse; margin-top:16px; background:#fff; border-radius:16px; overflow:hidden }
th,td{ padding:12px 14px; text-align:left; border-bottom:1px solid #f3f4f6; font-size:14px }
thead th{ background:#111827; color:#fff; letter-spacing:.2px }
tbody tr:hover{ background:#fafafa }

@media (max-width:700px){
  .container{ padding:22px }
  .producto{ flex-direction:column; align-items:stretch }
  .producto input{ width:100% }
}

.productos-list{
  display: grid;
  grid-template-columns: 1fr;
  gap: 14px;
  margin-top: 10px;
}
@media (min-width: 720px){
  .productos-list{ grid-template-columns: 1fr 1fr; }
}

.product-card{
  display: flex;
  align-items: center;
  justify-content: space-between;
  gap: 14px;
  background: #f9fafb;
  border: 1px solid #eef2f7;
  border-radius: 16px;
  padding: 14px 16px;
  box-shadow: 0 2px 6px rgba(0,0,0,.04);
}

.product-info{ min-width: 0; }
.product-title{ font-size: 15px; font-weight: 700; color: #1f2937; margin: 0; }
.product-meta{ margin-top: 4px; font-size: 13px; color: #6b7280; display: flex; gap: 10px; align-items: center; flex-wrap: wrap; }

.product-qty{ display: flex; align-items: center; gap: 8px; flex-shrink: 0; }
.product-qty label{ font-size: 12px; color: #6b7280; font-weight: 600; }
.product-qty .input{ width: 110px; }

.product-qty input[type="number"]{ -moz-appearance: textfield; }
.product-qty input::-webkit-outer-spin-button,
.product-qty input::-webkit-inner-spin-button{ -webkit-appearance: none; margin: 0; }

.product-card:hover{
  border-color: #e5e7eb;
  box-shadow: 0 6px 14px rgba(0,0,0,.06);
  background: #ffffff;
  transition: box-shadow .2s, background .2s, border-color .2s;
}

.admin-links{
  display: grid;
  gap: 18px;
  margin-top: 20px;
}

.admin-card{
  display: block;
  padding: 20px 24px;
  border-radius: 16px;
  background: #f9fafb;
  border: 1px solid #e5e7eb;
  box-shadow: 0 2px 6px rgba(0,0,0,.05);
  font-weight: 600;
  color: #111827;
  text-decoration: none;
  transition: transform .15s, box-shadow .2s, background .2s;
}
.admin-card:hover{
  background: #ffffff;
  transform: translateY(-2px);
  box-shadow: 0 6px 14px rgba(0,0,0,.08);
  color: #16a34a;
}

  </style>
</head>
<body>
  <header>
    <h1>Sistema de Ventas</h1>
    <nav>
      <a href="<?php echo e(route('pos.index')); ?>">POS</a>
      <a href="<?php echo e(route('admin.index')); ?>">Administración</a>
    </nav>
  </header>

  <div class="container">
    
    <?php if(session('success')): ?>
      <div class="alert alert-success"><?php echo e(session('success')); ?></div>
    <?php endif; ?>
    <?php if(session('error')): ?>
      <div class="alert alert-error"><?php echo e(session('error')); ?></div>
    <?php endif; ?>

    <?php echo $__env->yieldContent('content'); ?>
  </div>
</body>
</html>
<?php /**PATH /workspace/Laravel/resources/views/layouts/app.blade.php ENDPATH**/ ?>