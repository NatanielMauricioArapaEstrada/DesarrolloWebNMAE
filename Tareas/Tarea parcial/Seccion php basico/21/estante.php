<?php
class Estante {
    public $fila1 = [], $fila2 = [], $fila3 = [];
    public $tope1 = 0, $tope2 = 0, $tope3 = 0;

    public function insertarLibro($fila, $libro) {
        switch ($fila) {
            case 1:
                $this->fila1[] = $libro;
                $this->tope1++;
                break;
            case 2:
                $this->fila2[] = $libro;
                $this->tope2++;
                break;
            case 3:
                $this->fila3[] = $libro;
                $this->tope3++;
                break;
        }
    }

    public function mostrar($fila) {
        switch ($fila) {
            case 1: return $this->fila1;
            case 2: return $this->fila2;
            case 3: return $this->fila3;
            default: return [];
        }
    }

    public function mostrarArmario() {
        return [
            'Fila 1' => $this->fila1,
            'Fila 2' => $this->fila2,
            'Fila 3' => $this->fila3
        ];
    }
}
?>
