<?php
session_start();

class Cola {
    public $tipo;
    public $elementos;

    public function __construct($tipo = 'Normal') {
        $this->tipo = $tipo;
        $this->elementos = [];
    }

    public function insertardelante($valor) {
        if ($this->tipo == 'dobleentrada') {
            array_unshift($this->elementos, $valor);
        } else {
            echo "<p>ERROR: No se puede insertar por delante en cola de tipo 'Normal'.</p>";
        }
    }

    public function insertardetras($valor) {
        $this->elementos[] = $valor;
    }

    public function eliminar() {
        if (!empty($this->elementos)) {
            array_shift($this->elementos);
        } else {
            echo "<p>La cola está vacía.</p>";
        }
    }

    public function mostrar() {
        return $this->elementos;
    }
}


if (!isset($_SESSION['cola'])) {
    $_SESSION['cola'] = serialize(new Cola('Normal')); 
}

$cola = unserialize($_SESSION['cola']);


if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $accion = $_POST['accion'];

    if ($accion == 'insertardelante') {
        $valor = $_POST['valor'];
        $cola->insertardelante($valor);
    } elseif ($accion == 'insertardetras') {
        $valor = $_POST['valor'];
        $cola->insertardetras($valor);
    } elseif ($accion == 'eliminar') {
        $cola->eliminar();
    } elseif ($accion == 'cambiar_tipo') {
        $tipo = $_POST['tipo'];
        $cola = new Cola($tipo); 
    }

    $_SESSION['cola'] = serialize($cola);
}
?>


<!DOCTYPE html>
<html>
<head>
    <title>Cola con Sesiones</title>
</head>
<body>
    <h2>Cola tipo: <?php echo $cola->tipo; ?></h2>

    <form method="post">
        <label>Valor: </label>
        <input type="text" name="valor" required>
        <button type="submit" name="accion" value="insertardelante">Insertar delante</button>
        <button type="submit" name="accion" value="insertardetras">Insertar detrás</button>
    </form>

    <form method="post">
        <button type="submit" name="accion" value="eliminar">Eliminar del frente</button>
    </form>

    <form method="post">
        <label>Tipo de cola:</label>
        <select name="tipo">
            <option value="Normal" <?php if($cola->tipo == 'Normal') echo 'selected'; ?>>Normal</option>
            <option value="dobleentrada" <?php if($cola->tipo == 'dobleentrada') echo 'selected'; ?>>Doble Entrada</option>
        </select>
        <button type="submit" name="accion" value="cambiar_tipo">Cambiar tipo</button>
    </form>

    <h3>Contenido de la Cola:</h3>
    <ul>
        <?php foreach ($cola->mostrar() as $item): ?>
            <li><?php echo htmlspecialchars($item); ?></li>
        <?php endforeach; ?>
    </ul>
</body>
</html>
