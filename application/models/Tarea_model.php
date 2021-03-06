<?php

class Tarea_model extends CI_Model {

    function __construct() {
        parent::__construct();
    }

    function create($data) {
        try {
            $this->db->insert("tarea", $data);
            return $this->db->insert_id();
        } catch (exception $e) {
            
        }
    }

    function tareanorma($data,$idtarea) {
        try {
            $this->db->where("tar_id",$idtarea);
            $this->db->delete("norma_tarea");
            
            $this->db->insert_batch("norma_tarea", $data);
        } catch (exception $e) {
            
        }
    }

    function traer_tarea_registro($data) {
        try {
            $this->db->where("pla_id", $data['pla_id']);
            $this->db->where("tar_id", $data['tar_id']);
            $this->db->join("user", "user.usu_id=tarea_registro.usu_id");
            $datos = $this->db->get("tarea_registro");
            return $datos->result();
        } catch (exception $e) {
            
        }
    }

    function update($data, $idtarea) {
        try {
            $this->db->where("tar_id", $idtarea);
            $this->db->update("tarea", $data);
        } catch (exception $e) {
            
        }
    }

    function eliminartarea($tar_id) {
        try {
            $this->db->where("tar_id", $tar_id);
            $this->db->delete("tarea");
        } catch (exception $e) {
            
        }
    }

    function detail() {
        try {
            $this->db->order_by("tar_nombre");
            $tarea = $this->db->get("tarea");
            return $tarea->result();
        } catch (exception $e) {
            
        }
    }

    function detailxid($id) {
        try {
            $this->db->where("tar_id", $id);
            $tarea = $this->db->get("tarea");
            return $tarea->result();
        } catch (exception $e) {
            
        }
    }

    function tarea_norma($id) {
        try {
            $this->db->where("tar_id", $id);
            $tarea = $this->db->get("norma_tarea");
            return $tarea->result();
        } catch (exception $e) {
            
        }
    }

    function detailxidplan($id) {
        try {
            $this->db->where("pla_id", $id);
            $tarea = $this->db->get("tarea");
            return $tarea->result();
        } catch (exception $e) {
            
        }
    }

    function responsables() {
        try {
            $this->db->select("empleado.emp_id");
            $this->db->select("empleado.Emp_Nombre");
            $this->db->select("empleado.Emp_Apellidos");
            $this->db->distinct("empleado.emp_id,empleado.Emp_Nombre,empleado.Emp_Apellidos");
            $this->db->join("empleado", "empleado.Emp_id = tarea.emp_id");
            $tarea = $this->db->get("tarea");
            return $tarea->result();
        } catch (exception $e) {
            
        }
    }

    function filtrobusqueda($plan, $tarea, $responsable) {
        try {
            if (!empty($plan))
                $this->db->where("planes.pla_id", $plan);
            if (!empty($tarea))
                $this->db->where("tarea.tar_id", $tarea);
            if (!empty($responsable))
                $this->db->where("emp_id", $responsable);
            $this->db->select("tarea.tar_fechaInicio");
            $this->db->select("DATEDIFF((tar_fechaFinalizacion),(tar_fechaInicio)) diferencia");
            $this->db->select("tarea.tar_nombre");
            $this->db->select("tarea.tar_fechaFinalizacion");
            $this->db->select("empleado.Emp_Nombre");
            $this->db->select("tarea.tar_id");
            $this->db->select("tipo.tip_tipo");
            $this->db->select("planes.pla_nombre");
            $this->db->select("planes.pla_id");
            $this->db->select("(select count(rie_id) as cantidadriesgo from tarea_riesgos where tarea_riesgos.tar_id = tarea.tar_id) cantidadriesgo",false);
            $this->db->order_by("planes.pla_id");
            $this->db->order_by("tarea.tar_id");
            $this->db->join("tarea", "planes.pla_id = tarea.pla_id", "left");
            $this->db->join("avance_tarea", "avance_tarea.tar_id = tarea.tar_id ", "LEFT");
//            $this->db->join("tarea_riesgos","tarea_riesgos.tar_id = tarea.tar_id","LEFT");
            $this->db->join("tipo", "tipo.tip_id = tarea.tip_id", "left");
            $this->db->join("empleado", "empleado.Emp_id = tarea.emp_id", "left");
            $this->db->group_by('tarea.tar_id');
            $tarea = $this->db->get("planes");
            return $tarea->result();
        } catch (exception $e) {
            
        }
    }

    function consultaTareasFlechas($idTarea, $metodo) {
        try {
            switch ($metodo) {
                case "flechaIzquierdaDoble":
                    $this->db->where("tar_id = (select min(tar_id) from tarea)");
                    break;
                case "flechaIzquierda":
                    $this->db->where("tar_id < '" . $idTarea . "' ");
                    $this->db->order_by("tar_id desc");
                    break;
                case "flechaDerecha":
                    $this->db->where("tar_id > '" . $idTarea . "' ");
                    $this->db->order_by("tar_id asc");
                    break;
                case "flechaDerechaDoble":
                    $this->db->where("tar_id = (select max(tar_id) from tarea)");
                    break;
                default :
                    die;
                    break;
            }
            $usuario = $this->db->get("tarea", 1);
            return $usuario->result();
        } catch (exception $e) {
            
        }
    }

    function fechaFinalTareaxPlan($pla_id) {
        try {
            $this->db->select("MAX(tar_fechaFinalizacion) as fechafinalizacion", false);
            $this->db->where("pla_id", $pla_id);
            $fecha = $this->db->get("tarea");
            return $fecha->result();
        } catch (exception $e) {
            
        }
    }
    function lista_riesgos($clasificacionriesgo=null,$tiposriesgos=null) {
        try {
            if($clasificacionriesgo!=null && $tiposriesgos!=null){
            $this->db->where('rieCla_id',$clasificacionriesgo);
            $this->db->where('rieClaTip_id',$tiposriesgos);
            }
            $fecha = $this->db->get("riesgo");
            return $fecha->result();
        } catch (exception $e) {
            
        }
    }
    function lista_riesgos_guardados($id_tarea) {
        try {
            $this->db->where("tar_id",$id_tarea);
            $fecha = $this->db->get("tarea_riesgos");
            return $fecha->result();
        } catch (exception $e) {
            
        }
    }
    function lista_riesgos_guardados2($id_tarea) {
        try {
            $this->db->where("tar_id",$id_tarea);
            $this->db->join("riesgo",'riesgo.rie_id=tarea_riesgos.rie_id');
            $fecha = $this->db->get("tarea_riesgos");
            return $fecha->result();
        } catch (exception $e) {
            
        }
    }

    function tareaxRiesgo($id) {
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
                    WHERE `planes`.`pla_id` = '" . $id . "' AND `tarea`.`est_id` = 1
                    ORDER BY avance_tarea.avaTar_fechaCreacion desc
                    ) tabla
                    GROUP BY tar_id
                    ");
            return $planes->result();
        } catch (exception $e) {
            
        }
    }
    function guardar_lista_riesgos($idtarea,$lista_riesgos){
        $this->db->where('tar_id',$idtarea);
        $this->db->delete('tarea_riesgos');
        
        if(!empty($lista_riesgos)){
            foreach ($lista_riesgos as $value) {
                $this->db->set('tar_id',$idtarea);
                $this->db->set('rie_id',$value);
                $this->db->insert('tarea_riesgos');
            }
        }
    }

}

?>