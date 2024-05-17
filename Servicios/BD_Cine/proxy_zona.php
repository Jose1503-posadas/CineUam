
<?php
// proxy_sucursal_zona.php
class ProxySucursalZona {
    private static $instancia;
    private $conexion;

    private function __construct() {
        // Aquí estableces la conexión a la base de datos
        $this->conexion = new PDO("mysql:host=localhost;dbname=CINE", "root", "21635085Jpg");
        $this->conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    }

    public static function obtenerProxy() {
        if (!self::$instancia) {
            self::$instancia = new self();
        }
        return self::$instancia;
    }

    public function obtenerDatosDeZonas(){
        // Obtener datos de la tabla de zonas
        $query = "SELECT * FROM zona";
        $statement = $this->conexion->prepare($query);
        $statement->execute();
        return $statement->fetchAll(PDO::FETCH_ASSOC);
    }

    public function obtenerDatosDeSucursales(){
        // Obtener datos de la tabla de sucursales
        $query = "SELECT * FROM sucursal";
        $statement = $this->conexion->prepare($query);
        $statement->execute();
        return $statement->fetchAll(PDO::FETCH_ASSOC);
    }
}
?>
