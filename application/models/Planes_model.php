<?php

class Planes_model extends CI_Model {

    function __construct() {
        parent::__construct();
    }

    function detail() {
        try {
            $this->db->where("est_id", 1);
            $planes = $this->db->get("planes");
            return $planes->result();
        } catch (exception $e) {
            
        }
    }

    function create($data) {
        try {
            $this->db->insert("planes", $data);
            return $this->db->insert_id();
        } catch (exception $e) {
            
        }
    }

    function filtrobusqueda($nombre, $responsable, $estado, $tareaspropias) {
        try {
            if (!empty($nombre))
                $this->db->where('pla_nombre', $nombre);
            if (!empty($responsable))
                $this->db->where('planes.emp_id', $responsable);
            if (!empty($estado))
                $this->db->where("planes.est_id", $estado);
            if (!empty($tareaspropias))
                $this->db->where("planes.emp_id", $tareaspropias);
            $this->db->select("planes.*");
            $this->db->select("empleado.Emp_Nombre");
            $this->db->select("empleado.Emp_Apellidos");
            $this->db->select("(select COUNT(emp_id) i
                            from tarea
                            where pla_id = planes.pla_id and emp_id=" . $this->session->userdata('usu_id') . "
                            ) as num_tareas ");
            $this->db->select("count(avance_tarea.avaTar_progreso) as count_progreso ,"
                    . "sum(avance_tarea.avaTar_progreso) as sum_progreso", false);
            $this->db->join("empleado", "empleado.Emp_id = planes.emp_id", "LEFT");
            $this->db->join("tarea", "tarea.pla_id = planes.pla_id and tarea.est_id=1 ", "LEFT");
            $this->db->join("avance_tarea", "avance_tarea.tar_id = tarea.tar_id ", "LEFT");
            $this->db->group_by('planes.pla_id');
            $planes = $this->db->get("planes");
            return $planes->result();
        } catch (exception $e) {
            
        }
    }

    function delete($id) {
        try {
            $this->db->where('pla_id', $id);
            $this->db->delete('planes');
        } catch (exception $e) {
            
        }
    }

    function planxid($pla_id) {
        try {
            $query = "SELECT `planes` . * , sum( replace( tar_costopresupuestado, ',', '' ) ) AS tar_costopresupuestado
                    FROM `planes`
                    LEFT JOIN `tarea` ON `tarea`.`pla_id` = `planes`.`pla_id`
                    WHERE `planes`.`pla_id` = '28'";
//            $this->db->select("planes.*,sum(replace(tar_costopresupuestado,',','')) as tar_costopresupuestado",false);
//            $this->db->where('planes.pla_id', $pla_id);
//            $this->db->join("tarea","tarea.pla_id = planes.pla_id","LEFT");
            $planes = $this->db->query($query);
//            echo $this->db->last_query();die;
            return $planes->result();
        } catch (exception $e) {
            
        }
    }

    function responsables() {
        try {
            $this->db->select("empleado.Emp_Id");
            $this->db->select("empleado.Emp_Nombre");
            $this->db->select("empleado.Emp_Apellidos");
            $this->db->distinct("empleado.Emp_Id");
            $this->db->distinct("empleado.Emp_Nombre");
            $this->db->distinct("empleado.Emp_Apellidos");
            $this->db->join("empleado", "empleado.Emp_Id = planes.emp_id");
            $planes = $this->db->get("planes");
            return $planes->result();
        } catch (exception $e) {
            
        }
    }

    function actualizar($data, $pla_id) {
        try {
            $this->db->where('pla_id', $pla_id);
            $this->db->update("planes", $data);
        } catch (exception $e) {
            
        }
    }

    function actividadhijoxplan($id) {
        try {
            $this->db->select("tarea.tar_fechaInicio as fechainicio");
            $this->db->select("tarea.tar_fechaFinalizacion as fechafin");
            $this->db->select("actividad_padre.actPad_id");
            $this->db->select("CONCAT(actividad_padre.actPad_nombre,' - ',actividad_padre.actPad_codigo) as nombre", false);
            $this->db->select("actividad_hijo.actHij_nombre");
            $this->db->select("actividad_hijo.actHij_padreid");
            $this->db->select("actividad_hijo.actHij_fechaInicio");
            $this->db->select("actividad_hijo.actHij_fechaFinalizacion");
            $this->db->select("actividad_hijo.actHij_presupuestoTotal");
            $this->db->select("actividad_hijo.actHij_descripcion");
            $this->db->select("actividad_hijo.actHij_id");
            $this->db->order_by("actividad_padre.actPad_nombre");
            $this->db->where("actividad_padre.pla_id", $id);
            $this->db->join("actividad_hijo", "actividad_hijo.actHij_padreid = actividad_padre.actPad_id", "LEFT");
            $this->db->join("tarea", "tarea.actHij_id = actividad_hijo.actHij_id", "LEFT");
            $planes = $this->db->get("actividad_padre");
            return $planes->result();
        } catch (exception $e) {
            
        }
    }

    function actividadhijoxplancount($id, $cantidad = null, $orden, $inicia = null) {
        try {
            $this->db->select("actividad_hijo.actHij_padreid");
            $this->db->select("actividad_hijo.actHij_fechaInicio");
            $this->db->select("actividad_hijo.actHij_fechaFinalizacion");
            $this->db->select("actividad_hijo.actHij_presupuestoTotal");
            $this->db->select("actividad_hijo.actHij_descripcion");
            $this->db->where("planes.pla_id", $id);
            $this->db->join("actividad_hijo", "actividad_hijo.pla_id = planes.pla_id");
            $planes = $this->db->get("planes");
            return $planes->result();
        } catch (exception $e) {
            
        }
    }

    function tareaxplan($id) {
        try {
            $sql = "
            select avaTar_id,tar_fechaInicio,Emp_Nombre,tip_tipo,tar_nombre,diferencia,tar_fechaFinalizacion
            ,MAX(avaTar_fechaCreacion) as ultimafechacreacion,tar_id,progreso from (
                    SELECT 
                    avance_tarea.avaTar_fechaCreacion as avaTar_fechaCreacion,
                    tarea.tar_id,
                    avance_tarea.avaTar_id,
                    `avance_tarea`.`avaTar_progreso` as `progreso`, `tarea`.`car_id`, 
                    `tipo`.`tip_tipo`, `tar_nombre`, `tarea`.`tar_fechaInicio`, 
                    `tarea`.`tar_fechaFinalizacion`, 
                    timestampdiff(HOUR, (tar_fechaInicio),(tar_fechaFinalizacion)) as diferencia, 
                    `empleado`.`Emp_Nombre` 
                    FROM `planes` 
                    JOIN `tarea` ON `tarea`.`pla_id` = `planes`.`pla_id` 
                    LEFT JOIN `avance_tarea` ON `avance_tarea`.`tar_id` = `tarea`.`tar_id` 
                    LEFT JOIN `empleado` ON `empleado`.`emp_id` = `tarea`.`emp_id` 
                    LEFT JOIN `tipo` ON `tipo`.`tip_id` = `tarea`.`tip_id` 
                    WHERE `planes`.`pla_id` = '" . $id . "' AND `tarea`.`est_id` = 1
                    ORDER BY avance_tarea.avaTar_fechaCreacion desc
                    ) tabla
                    GROUP BY tar_id
                    ";
            $planes = $this->db->query($sql);
            return $planes->result();
        } catch (exception $e) {
            
        }
    }

    function tareaxplanriesgo($id) {
        try {
            $planes = $this->db->query("select avaTar_id,tar_fechaInicio,Emp_Nombre,tip_tipo,tar_nombre,diferencia,tar_fechaFinalizacion,MAX(avaTar_fechaCreacion) as ultimafechacreacion,tar_id,progreso from (
                    SELECT 
                    avance_tarea.avaTar_fechaCreacion as avaTar_fechaCreacion,
                    tarea.tar_id,
                    avance_tarea.avaTar_id,
                    `avance_tarea`.`avaTar_progreso` as `progreso`, `tarea`.`car_id`, 
                    `tipo`.`tip_tipo`, `tar_nombre`, `tarea`.`tar_fechaInicio`, 
                    `tarea`.`tar_fechaFinalizacion`, 
                    timestampdiff(HOUR, (tar_fechaInicio),(tar_fechaFinalizacion)) as diferencia, 
                    `empleado`.`Emp_Nombre` 
                    FROM `planes` 
                    JOIN `tarea` ON `tarea`.`pla_id` = `planes`.`pla_id` 
                    LEFT JOIN `avance_tarea` ON `avance_tarea`.`tar_id` = `tarea`.`tar_id` 
                    LEFT JOIN `empleado` ON `empleado`.`emp_id` = `tarea`.`emp_id` 
                    LEFT JOIN `tipo` ON `tipo`.`tip_id` = `tarea`.`tip_id` 
                    WHERE `tarea`.`rieCla_id` = '" . $id . "' AND `tarea`.`est_id` = 1
                    ORDER BY avance_tarea.avaTar_fechaCreacion desc
                    ) tabla
                    GROUP BY tar_id
                    ");
            return $planes->result();
        } catch (exception $e) {
            
        }
    }

    function tareaxplancount($id, $cantidad = null, $orden, $inicia = null) {
        try {
            $this->db->select("'falta'");
            $this->db->select("'falta'");
            $this->db->select("tipo.tip_tipo");
            $this->db->select("tar_nombre");
            $this->db->select("tarea.tar_fechaInicio");
            $this->db->select("tarea.tar_fechaFinalizacion");
            $this->db->select("DATEDIFF((tar_fechaFinalizacion),(tar_fechaInicio)) as diferencia");
            $this->db->select("empleado.Emp_Nombre");
            $this->db->where("planes.pla_id", $id);
            $this->db->join("tarea", "tarea.pla_id = planes.pla_id");
            $this->db->join("empleado", "empleado.emp_id = tarea.emp_id", "LEFT");
            $this->db->join("tipo", "tipo.tip_id = tarea.tip_id", "LEFT");
            $planes = $this->db->get("planes");
            return $planes->num_rows();
        } catch (exception $e) {
            
        }
    }

    function tareaxplaninactivas($id) {
        try {
            $planes = $this->db->query("select avaTar_id,tar_fechaInicio,Emp_Nombre,tip_tipo,tar_nombre,diferencia,tar_fechaFinalizacion,MAX(avaTar_fechaCreacion) as ultimafechacreacion,tar_id,progreso from (
                    SELECT 
                    avance_tarea.avaTar_fechaCreacion as avaTar_fechaCreacion,
                    tarea.tar_id,
                    avance_tarea.avaTar_id,
                    `avance_tarea`.`avaTar_progreso` as `progreso`, `tarea`.`car_id`, 
                    `tipo`.`tip_tipo`, `tar_nombre`, `tarea`.`tar_fechaInicio`, 
                    `tarea`.`tar_fechaFinalizacion`, 
                    timestampdiff(HOUR, (tar_fechaInicio),(tar_fechaFinalizacion)) as diferencia, 
                    `empleado`.`Emp_Nombre` 
                    FROM `planes` 
                    JOIN `tarea` ON `tarea`.`pla_id` = `planes`.`pla_id` 
                    LEFT JOIN `avance_tarea` ON `avance_tarea`.`tar_id` = `tarea`.`tar_id` 
                    LEFT JOIN `empleado` ON `empleado`.`emp_id` = `tarea`.`emp_id` 
                    LEFT JOIN `tipo` ON `tipo`.`tip_id` = `tarea`.`tip_id` 
                    WHERE `planes`.`pla_id` = '" . $id . "' AND `tarea`.`est_id` = 2
                    ORDER BY avance_tarea.avaTar_fechaCreacion desc
                    ) tabla
                    GROUP BY tar_id
                    ");
            return $planes->result();
        } catch (exception $e) {
            
        }
    }

    function tareaxplaninactivasriesgo($id) {
        try {
            $planes = $this->db->query("select avaTar_id,tar_fechaInicio,Emp_Nombre,tip_tipo,tar_nombre,diferencia,tar_fechaFinalizacion,MAX(avaTar_fechaCreacion) as ultimafechacreacion,tar_id,progreso from (
                    SELECT 
                    avance_tarea.avaTar_fechaCreacion as avaTar_fechaCreacion,
                    tarea.tar_id,
                    avance_tarea.avaTar_id,
                    `avance_tarea`.`avaTar_progreso` as `progreso`, `tarea`.`car_id`, 
                    `tipo`.`tip_tipo`, `tar_nombre`, `tarea`.`tar_fechaInicio`, 
                    `tarea`.`tar_fechaFinalizacion`, 
                    timestampdiff(HOUR, (tar_fechaInicio),(tar_fechaFinalizacion)) as diferencia, 
                    `empleado`.`Emp_Nombre` 
                    FROM `planes` 
                    JOIN `tarea` ON `tarea`.`pla_id` = `planes`.`pla_id` 
                    LEFT JOIN `avance_tarea` ON `avance_tarea`.`tar_id` = `tarea`.`tar_id` 
                    LEFT JOIN `empleado` ON `empleado`.`emp_id` = `tarea`.`emp_id` 
                    LEFT JOIN `tipo` ON `tipo`.`tip_id` = `tarea`.`tip_id` 
                    WHERE `tarea`.`rieCla_id` = '" . $id . "' AND `tarea`.`est_id` = 2
                    ORDER BY avance_tarea.avaTar_fechaCreacion desc
                    ) tabla
                    GROUP BY tar_id
                    ");
            return $planes->result();
        } catch (exception $e) {
            
        }
    }

    function plan_grant($ID) {
        try {
            $datos = $this->db->query("SELECT max(tar_fechaFinalizacion) as fecha_maxima,
            min(tarea.tar_fechaInicio) as fecha_minima
            FROM planes 
            JOIN tarea ON tarea.pla_id = planes.pla_id 
            LEFT JOIN avance_tarea ON avance_tarea.tar_id = tarea.tar_id 
            LEFT JOIN empleado ON empleado.emp_id = tarea.emp_id 
            LEFT JOIN tipo ON tipo.tip_id = tarea.tip_id 
            WHERE planes.pla_id = '" . $ID . "' AND tarea.est_id = 1
            ORDER BY avance_tarea.avaTar_fechaCreacion desc");

            $sql = "select 
                tar_fechaInicio,
                tar_nombre,diferencia,
                tar_fechaFinalizacion,MAX(avaTar_fechaCreacion) as ultimafechacreacion,
                tar_id,progreso from (
                    SELECT 
                    avance_tarea.avaTar_fechaCreacion as avaTar_fechaCreacion,
                    tarea.tar_id,
                    avance_tarea.avaTar_id,
                    avance_tarea.avaTar_progreso as progreso, tarea.car_id, 
                    tipo.tip_tipo, tar_nombre, tarea.tar_fechaInicio, 
                    tarea.tar_fechaFinalizacion, 
                    DATEDIFF((tar_fechaFinalizacion), (tar_fechaInicio)) as diferencia, 
                    empleado.Emp_Nombre 
                    FROM planes 
                    JOIN tarea ON tarea.pla_id = planes.pla_id 
                    LEFT JOIN avance_tarea ON avance_tarea.tar_id = tarea.tar_id 
                    LEFT JOIN empleado ON empleado.emp_id = tarea.emp_id 
                    LEFT JOIN tipo ON tipo.tip_id = tarea.tip_id 
                    WHERE planes.pla_id = '" . $ID . "' AND tarea.est_id = 1
                    ORDER BY avance_tarea.avaTar_fechaCreacion desc
                    ) tabla
                GROUP BY tar_id";
            $datos2 = $this->db->query($sql);

            return array($datos->result(), $datos2->result());
        } catch (exception $e) {
            
        }
    }

    function max_id() {
        try {
            $this->db->select_max('pla_id');
            $datos = $this->db->get('planes');
            $datos = $datos->result();
            if (count($datos) > 0)
                return $datos[0]->pla_id;
            else
                return '';
        } catch (exception $e) {
            
        }
    }

    function min_id() {
        try {
            $this->db->select_min('pla_id');
            $datos = $this->db->get('planes');
            $datos = $datos->result();
//        echo $this->db->last_query();
            if (count($datos) > 0)
                return $datos[0]->pla_id;
            else
                return '';
        } catch (exception $e) {
            
        }
    }

    function select_id() {
        try {
            $this->db->select('pla_id');
            $datos = $this->db->get('planes', 1, 1);
            $datos = $datos->result();
            if (count($datos) > 0)
                return $datos[0]->pla_id;
            else
                return '';
        } catch (exception $e) {
            
        }
    }

    function max_id_next($id) {
        try {
            $this->db->select('pla_id');
            $datos = $this->db->get('planes', 1, 1);
            $datos = $datos->result();
            if (count($datos) > 0)
                return $datos[0]->pla_id;
            else
                return '';
        } catch (exception $e) {
            
        }
    }

}

?>