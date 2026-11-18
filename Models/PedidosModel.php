<?php
class PedidosModel extends Query{
 
    public function __construct()
    {
        parent::__construct();
    }
    public function getPedidos($proceso)
    {
        $sql = "SELECT * FROM pedidos WHERE proceso = ?";
        return $this->selectAll($sql, [$proceso]);
    }
    public function actualizarEstado($proceso, $idPedido)
    {
        $sql = "UPDATE pedidos SET proceso=? WHERE id = ?";
        $array = array($proceso, $idPedido);
        return $this->save($sql, $array);
    }

    
}
 
?>