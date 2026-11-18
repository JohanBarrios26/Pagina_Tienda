<?php
class PrincipalModel extends Query{
 
    public function __construct()
    {
        parent::__construct();
    }
    public function getProducto($id_producto)
    {
        $sql = "SELECT p.*, c.categoria FROM productos p INNER JOIN categorias c ON p.id_categoria = c.id WHERE p.id = ?";
        return $this->select($sql, [$id_producto]);
    }
    //busqueda de productos
    public function getBusqueda($valor)
    {
        $sql = "SELECT * FROM productos WHERE nombre LIKE ? OR descripcion LIKE ? LIMIT 5";
        return $this->selectAll($sql, ["%$valor%", "%$valor%"]);
    }

}
 
?>