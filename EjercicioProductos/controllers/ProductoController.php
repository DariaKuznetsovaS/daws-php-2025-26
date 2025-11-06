<?php
require_once __DIR__ . '/BaseController.php';
require_once __DIR__ . '/../models/ProductoModel.php';

class ProductoController extends BaseController {
    
     public function index() {
        $accion = $_GET["accion"] ?? "index";

        switch ($accion) {
            case "detalle":
                $this->detalle();
                break;

            case "borrar":
                $this->borrar();
                break;

            case "index":
            default:
                $this->listar();
                break;
        }
     }    
    
    public function listar(){
        $productos = ProductoModel::getAll();
        $this->render("index.view.php",["listaProductos"=> $productos]);
    }

    public function detalle() {
        $id = $_GET["id"] ?? null;
                if (!$id) {
                    $this->redirect("index.php");
                } else {
                    $producto = ProductoModel::getById($id);
                    $this->render("detalle.view.php", ["producto" => $producto]);
                }
    }
    
    public function borrar() {
        $id=$_GET["id"]??null;
        if($id){
            ProductoModel::DeleteById($id);
        }
        $this->redirect("index.php");
        
    }
    
    public function destroy() {
        
    }
    
    public function destroyAll() {
        
    }
}