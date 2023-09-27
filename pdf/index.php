<?php
  require 'plantilla.php';
  require 'conexion.php';
  //require '../metodosCrud.php';
  
    
  $pdf = new PDF();
  $pdf->AliasNbPages();
  $pdf->AddPage();

  $pdf->SetFillColor(232,232,232);
  $pdf->SetFont('Arial','B',15);
  $pdf->Cell(14,6,'id',1,0,'C',1);
  $pdf->Cell(29,6,'Nombre',1,0,'C',1);
  $pdf->Cell(125,6,'Descripcion',1,0,'C',1);
  $pdf->Cell(25,6,'Precio',1,0,'C',1);
  $pdf->Ln();

  //$obj = new metodos();
  $sql = "SELECT id_producto,nombre_p,descripcion_p,precio_p FROM productos";
  $consulta = mysqli_query($con,$sql);
  $resultado = mysqli_fetch_all($consulta,MYSQLI_ASSOC);
  
  $pdf->SetFont('Arial','',15);
  foreach ($resultado as $key) {
  $pdf->Cell(14,6,$key['id_producto'],1,0,'C');
  $pdf->Cell(29,6,$key['nombre_p'],1,0,'C');
  $pdf->Cell(125,6,$key['descripcion_p'],1,0,'L');
  $pdf->Cell(25,6,$key['precio_p'],1,0,'C');
  $pdf->Ln();
}
  $pdf->Output();
?>