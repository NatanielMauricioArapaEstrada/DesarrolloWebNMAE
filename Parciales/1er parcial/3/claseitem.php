<?php
class ItemVisual {
    private $item;
    private $color;
    private $color_fondo;
    private $imagen;

    public function __construct($item, $color, $color_fondo, $imagen) {
        $this->item = $item;
        $this->color = $color;
        $this->color_fondo = $color_fondo;
        $this->imagen = $imagen;
    }

    public function mostrarCuadrado() {
        echo "<div style='
            width: 200px; height: 200px;
            background-color: $this->color_fondo;
            color: $this->color;
            display: flex;
            justify-content: center;
            align-items: center;
            flex-direction: column;
            border: 2px solid $this->color; 
            margin-top: 20px;
        '>
            
            <img src='$this->imagen' style='width:50px; height:50px;'>
            <p>$this->item</p>
        </div>";
    }

    public function mostrarDiagonal() {
        echo "<table style='margin-top: 20px; border-collapse: collapse;'>";
        $letras = str_split($this->item);
        $n = count($letras);
        for ($i = 0; $i < $n; $i++) {
            echo "<tr>";
            for ($j = 0; $j < $n; $j++) {
                if ($i == $j) {
                    echo "<td style='padding:10px; background:$this->color_fondo; color:$this->color; border:1px solid #000; text-align:center;'>" . $letras[$i] . "</td>";
                } else {
                    echo "<td style='padding:10px;'></td>";
                }
            }
            echo "</tr>";
        }
        echo "</table>";
    }
}
?>
