<?php
session_start();

class Pila {
    public $elementos = [];
    public $tope = -1;

    public function insertar($elemento) {
        $this->tope++;
        $this->elementos[$this->tope] = $elemento;
    }

    public function eliminar() {
        if ($this->tope >= 0) {
            $elementoEliminado = $this->elementos[$this->tope];
            unset($this->elementos[$this->tope]);
            $this->tope--;
            return $elementoEliminado;
        }
        return null;
    }

    public function mostrar() {
        return array_reverse($this->elementos);
    }
}

// Inicializar la pila en la sesión si no existe
if (!isset($_SESSION['pila'])) {
    $_SESSION['pila'] = new Pila();
}

$pila = $_SESSION['pila'];

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (isset($_POST['insertar'])) {
        $elemento = $_POST['elemento'];
        $pila->insertar($elemento);
    } elseif (isset($_POST['eliminar'])) {
        $elementoEliminado = $pila->eliminar();
        if ($elementoEliminado !== null) {
            $mensaje = "Elemento eliminado: " . $elementoEliminado;
        } else {
            $mensaje = "La pila está vacía.";
        }
    }
}

if (isset($_GET['accion']) && $_GET['accion'] === 'salir') {
    session_destroy();
    header("Location: " . $_SERVER['PHP_SELF']);
    exit;
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Pila PHP</title>
</head>
<body>
    <h1>Pila</h1>

    <form method="post">
        <input type="text" name="elemento" placeholder="Elemento a insertar">
        <button type="submit" name="insertar">Insertar</button>
        <button type="submit" name="eliminar">Eliminar</button>
    </form>

    <?php if (isset($mensaje)) : ?>
        <p><?php echo $mensaje; ?></p>
    <?php endif; ?>

    <h2>Elementos de la pila:</h2>
    <ul>
        <?php foreach ($pila->mostrar() as $elemento) : ?>
            <li><?php echo $elemento; ?></li>
        <?php endforeach; ?>
    </ul>

    <a href="?accion=salir">Salir</a>
</body>
</html>