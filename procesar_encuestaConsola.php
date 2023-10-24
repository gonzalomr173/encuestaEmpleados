<?php

// Verifica si se ha enviado el formulario
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Captura los datos del formulario
    $animosidad = $_POST["animosidad"];
    $estres_preocupacion = $_POST["estres_preocupacion"];
    $valorado_reconocido = $_POST["valorado_reconocido"];
    $aspectos_motivacion = $_POST["aspectos_motivacion"];

    // Pregunta 2
    $identificacion_valores = $_POST["identificacion_valores"];
    $compromiso_organizacion = $_POST["compromiso_organizacion"];
    $lealtad_organizacion = $_POST["lealtad_organizacion"];
    $sugerencias_mejora = $_POST["sugerencias_mejora"];

    // Pregunta 3
    $metas_objetivos = $_POST["metas_objetivos"];
    $obstaculos_desafios = $_POST["obstaculos_desafios"];
    $apoyo_desempeno = $_POST["apoyo_desempeno"];
    $ayuda_mejora = $_POST["ayuda_mejora"];

    // Pregunta 4
    $motivacion = isset($_POST["motivacion"]) ? $_POST["motivacion"] : [];
    $motivacion_otro = $_POST["motivacion_otro"];
    $oportunidad_habilidades = $_POST["oportunidad_habilidades"];
    $cambios_entorno_motivacion = $_POST["cambios_entorno_motivacion"];
    $aspecto_desmotivacion = $_POST["aspecto_desmotivacion"];

    // Pregunta 5
    $emocion_trabajo = $_POST["emocion_trabajo"];
    $estres_ansiedad = $_POST["estres_ansiedad"];
    $equilibrio_vida = $_POST["equilibrio_vida"];
    $apoyo_emocional = $_POST["apoyo_emocional"];

    // Pregunta 6
    $descripcion_relaciones = $_POST["descripcion_relaciones"];
    $parte_equipo = $_POST["parte_equipo"];
    $socializar_fuera_trabajo = $_POST["socializar_fuera_trabajo"];

    // Pregunta 7
    $oportunidades_crecimiento = $_POST["oportunidades_crecimiento"];
    $flexibilidad_horario = $_POST["flexibilidad_horario"];
    $habilidades_valoradas = $_POST["habilidades_valoradas"];

    // Pregunta 8
    $afectacion_vida_personal = $_POST["afectacion_vida_personal"];
    $flexibilidad_horario = $_POST["flexibilidad_horario"];

	// Pregunta 9
    $oportunidades_crecimiento = $_POST["oportunidades_crecimiento"];
    $participacion_capacitacion = $_POST["participacion_capacitacion"];
    $habilidades_valoradas = $_POST["habilidades_valoradas"];

  
    var_dump($_POST);die();
    // Redirige a una página de confirmación
   // header("Location: confirmacion.html");
    exit();
}
?>