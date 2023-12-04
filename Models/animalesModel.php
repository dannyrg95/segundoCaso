<?php
    include_once MODELS_PATH . '/database.php';
    class AnimalesModel {
        
        public static function getAll($especie)
        {
            $sql = "SELECT a.nombre, a.imagen, e.especie FROM Animales a INNER JOIN Especie e ON a.especie = e.id WHERE e.especie ='" . $especie . "'";
    
            try
            {
                $recordset = executeQuery($sql);
            
                $response = '[';

                $i = 0;
                while ($animales = mysqli_fetch_assoc($recordset)) {
                    $comma = $i == 0 ? '' : ',';
                    $response .= '
                     ' . $comma . '
                   
                    {
                        "nombre": "' . $animales["nombre"] .'",
                        "imagen": "' . $animales["imagen"] . '",
                        "especie": "' . $animales["especie"] . '"  
                    }
                    ';
                    $i++;
                }
                
                echo $response;
                return $response . ']';
            }
            catch(Exception $e)
            {
                // Implementacion del codigo que maneja el error
            }
    
            return NULL;
        }

    }
?>