<?php
		// Incluye el archivo de conexión a la base de datos
		include('conexion.php');

		// Verifica si se enviaron datos mediante POST
		if ($_SERVER["REQUEST_METHOD"] == "POST") {
		    // Obtén los valores del formulario
		    $nombre = $_POST['nombre_p'];
		    $descripcion = $_POST['descripcion_p'];
		    $precio = $_POST['precio'];
		    
		    // Obtiene los datos de la imagen y la convierte en datos binarios
		    $imagen = file_get_contents($_FILES['imagen']['tmp_name']);
		    $nombreImagen = $_FILES['imagen']['name']; 
		    $tipoImagen = strtolower(pathinfo($nombreImagen,PATHINFO_EXTENSION));
		    
		    // Prepara y ejecuta la consulta SQL para insertar el producto

		    if ($tipoImagen == "jpg" OR $tipoImagen == "jpeg" OR $tipoImagen == "png") {
		    $sql = "INSERT INTO productos (nombre_p, descripcion_p, precio_p, imagen_p) VALUES (?, ?, ?, ?)";
		    $stmt = $conexion->prepare($sql);
		    $stmt->bind_param("ssds", $nombre, $descripcion, $precio, $imagen);
		    if ($stmt->execute()) {
		        header('location:../html/admin_productos.php');
		    } else {
		        echo "Error al guardar el producto: " . $stmt->error;
		    }
		    
		    $stmt->close();
		}
		else{
			header('location:../html/admin_productos.php?error=Formato no admitido');
		}
		    
		    
		    
		    
		} else {
		    echo "No se enviaron datos del formulario.";
		}

		$conexion->close();
		?>