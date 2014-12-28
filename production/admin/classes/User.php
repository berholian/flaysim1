<?php
/*
* User.php
* Clase Usuario
*/
class User{

    private $id;
    private $email;
    private $pass;

    function User($id = null){
        if(is_numeric($id)){
            $this->id = $id;
            $this->loadData();
        }
    }


    //carga los datos del usuario de la bbdd
    private function loadData(){

        //conecta con la bbdd mediante el objeto de conexión
        $db = $this->conectarBD();

        //genera la consulta
        $sql = 'SELECT * FROM users WHERE id='.$this->id;

        //el objeto de conexión ejecuta la sentencia
        if($result = $db->query($sql)){
            
            //pasa el resultado a la variable row en forma de array asociativo
            $row = $result->fetch_assoc();
            
            //libera la memoria de los resultados sql (ya no los necesita porque están en $row en forma de array)
            $result->free();

            //actualiza la propiedades del usuario con los resultados de la consulta
            $this->email = $row["email"];
            $this->pass = $row["pass"];

            $return = true;

        }else{//si la consulta falla

            $this->writeErrorLog($db->error);
            $return = false;

        }

        //cierra la conexión con la bbdd
        $db->close();

        return $return;
    }


    public function login($email, $pass){//echo $email.$pass;

            //conecta con la bbdd mediante el objeto de conexión
            $db = $this->conectarBD();

            //genera la consulta para buscar el usuario que tenga el email igual al recibido
            $sql = 'SELECT * FROM users WHERE email="'.$email.'"';

            //el objeto de conexión ejecuta la sentencia
            if($result = $db->query($sql)){
                
                //compruebo el numero de resultados
                if($result->num_rows>0){

                    //pasa el resultado a la variable row en forma de array asociativo
                    $row = $result->fetch_assoc();
                    
                    //libera la memoria de los resultados sql (ya no los necesita porque están en $row en forma de array)
                    $result->free();

                    //comprueba si coincide la contraseña recibido con la de la bbdd
                    if($pass == $row["pass"]){//echo $row['email'].$row["pass"];

                        //actualiza la propiedades del usuario con los resultados de la consulta
                        $this->id = $row["id"];
                        $this->email = $row["email"];
                        $this->pass = $row["pass"];

                        $return = $this->iniciarSesion();

                    //si la contraseña no coincide
                    }else{
                        $this->writeErrorLog("User trying to log in with wrong pass");
                        $return = false;
                    }

                //si no encuentra ningún resultado en la consulta
                //puede ser que no exista
                }else{
                    $this->writeErrorLog("Unexisting user trying to log in");
                    $return = false;
                }

            }else{//si la consulta falla
                
                $this->writeErrorLog($db->error);
                $return = false;
            }


        //cierra la conexión con la bbdd
        $db->close();

        return $return;
    }


    //crea un objeto de conexion a la base de datos
    private function conectarBD(){

        //utiliza una variable que no pertenece al espacio de nombres de variable de la función
        global $db_params;

        //instancia el objeto de la clase mysqli con los datos de la variable externa
        $db = new mysqli($db_params['host'], $db_params['user'], $db_params['pass'], $db_params['db']);
//        $db = new mysqli('mysql.hostinger.es', 'u133937059_flysi', 'uilleann', 'u133937059_flysi');

        if($db->connect_errno > 0){
            //si hay error de conexión lo guarda en el log
            $this->writeErrorLog($db->connect_error);
        }else{
            //si no hay error devuelve el objeto de conexión
            return $db;
        }
    }


    private function iniciarSesion(){
        @session_start();
        $_SESSION["id"] = $this->id;
        $_SESSION["email"] = $this->email;
        $_SESSION["pass"] = $this->pass;
        $_SESSION["login"] = 'ok';
        return true;
    }


    public function logout(){
        @session_start();
        unset($_SESSION);
        session_destroy();
        return true;
    }


    public function getMenu($type){
        //conecta con la bbdd mediante el objeto de conexión
        $db = $this->conectarBD();

        //genera la consulta para buscar el usuario que tenga el email igual al recibido
        $sql = 'SELECT d.id, d.name, d.description, d.prize, t.name as type FROM dishes d LEFT JOIN types t ON d.type = t.id WHERE t.name="'.$type.'"';

        //el objeto de conexión ejecuta la sentencia
        if($result = $db->query($sql)){
            
            //compruebo el numero de resultados
            if($result->num_rows>0){
                
                $dishes = array();
                //pasa el resultado a la variable row en forma de array asociativo
                while($rows = $result->fetch_assoc()){
                    $dishes[] = $rows;
                }
                
                //libera la memoria de los resultados sql (ya no los necesita porque están en $row en forma de array)
                $result->free();

                return $dishes;

            //si no encuentra ningún resultado en la consulta
            }else{
                $return = false;
            }

        }else{//si la consulta falla
            $this->writeErrorLog($db->error);
            $return = false;
        }

        //cierra la conexión con la bbdd
        $db->close();

        return $return;
    }


    public function getTypes(){
        //conecta con la bbdd mediante el objeto de conexión
        $db = $this->conectarBD();

        //genera la consulta para buscar el usuario que tenga el email igual al recibido
        $sql = 'SELECT DISTINCT * FROM types';

        //el objeto de conexión ejecuta la sentencia
        if($result = $db->query($sql)){
            
            //compruebo el numero de resultados
            if($result->num_rows>0){
                
                $types = array();
                //pasa el resultado a la variable row en forma de array asociativo
                while($rows = $result->fetch_assoc()){
                    $types[] = $rows;
                }
                
                //libera la memoria de los resultados sql (ya no los necesita porque están en $row en forma de array)
                $result->free();

                $return = $types;

            //si no encuentra ningún resultado en la consulta
            }else{
                $return = false;
            }

        }else{//si la consulta falla
            $this->writeErrorLog($db->error);
            $return = false;
        }

        //cierra la conexión con la bbdd
        $db->close();

        return $return;
    }


    public function updateDish($parameters, $new = false){

        //conecta con la bbdd mediante el objeto de conexión
        $db = $this->conectarBD();

        if($new == false){
            //sentencia sql
            $sql = 'UPDATE dishes SET name="'.$parameters["name"].'", description="'.$parameters["description"].'" WHERE id='.$parameters["id"];
        }else{
            $sql = 'INSERT INTO dishes (name, type, description) VALUES("'.$parameters["name"].'", "'.$parameters["type"].'", "'.$parameters["description"].'")';
        }

        //ejecución de la sentencia
        if($db->query($sql)){
            $return = true;
        }else{
            $this->writeErrorLog($db->error);
            $return = false;
        }

        //cierra la conexión con la bbdd
        $db->close();

        return $return;
    }


    public function deleteDish($id){

        //conecta con la bbdd mediante el objeto de conexión
        $db = $this->conectarBD();

        //sentencia sql para borrar
        $sql = 'DELETE FROM dishes WHERE id='.$id;

        //ejecuta la sentencia sql
        if($db->query($sql)){
            $return = true;
        }else{
            $this->writeErrorLog($db->error);
            $return = false;

        }

        //cierra la conexión con la bbdd
        $db->close();

        return $return;
    }


    private function writeErrorLog($text){
        $file = 'logs/error_log.txt';
        $log = file_get_contents($file);
        $log .= date("Y/m/d H:i:s").": ".$text."\n\r";
        file_put_contents($file, $log);
    }

    public function storeReserve($data){
        $fichero = 'database.txt';
        $database = file_get_contents($fichero);
        $database .= date("Y/m/d H:i:s")."reserva: ".$data."\n\r";
        file_put_contents($fichero, $database);
    }


    public function sendEmail($param){

        //para el envío en formato HTML
        $headers = "MIME-Version: 1.0\r\n";
        $headers .= "Content-type: text/html;  charset=utf-8\r\n";

        //dirección del remitente
        $headers .= "From: $data['email']\r\n";
       
        //dirección de respuesta, si queremos  que sea distinta que la del remitente
        //$headers .= "Reply-To: info@remitente.com\r\n";

        //ruta del mensaje desde origen a destino
        //$headers .= "Return-path: holahola@loquesea.com\r\n";

        //direcciones que recibirán copia
        $headers .= "Cc: j.a.esteveza1@gmail.com\r\n";

        //direcciones que recibirán copia oculta
        //$headers .= "Bcc: pepe@pepe.com,juan@juan.com\r\n";
       
        mail($param["destinatario"],$param["asunto"],$param["cuerpo"],$headers);
        //cambios
        //primero probar con:
        
        //mail('berholiann@gmail.com','prueba','contenido_prueba');
    }

    public function switchCss(){

        global $alt_css;
        global $default_css;

        if($_COOKIE['css'] == $alt_css){
            setcookie("css", null, time()-3600);    
            setcookie("css", $default_css, time()+3600000);
        }else{
            setcookie("css", null, time()-3600);
            setcookie("css", $alt_css, time()+3600000);
        }

    }

}
?>