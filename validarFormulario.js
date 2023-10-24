function validarFormulario() {
    var animosidad = document.querySelector('input[name="animosidad"]:checked');
    var compromiso = document.querySelector('input[name="compromiso_lealtad"]:checked');
    var rendimiento = document.querySelector('input[name="rendimiento"]:checked');
    var motivacion = document.querySelector('input[name="motivacion"]:checked');
    var emocional = document.querySelector('input[name="estado_emocional"]:checked');
    var relacion = document.querySelector('input[name="relaciones_companeros"]:checked');
    var desarrolloprofesional = document.querySelector('input[name="desarrollo_profesional"]:checked');
    var equilibriovida = document.querySelector('input[name="equilibrio_vida"]:checked');
    var comunicacion = document.querySelector('input[name="comunicacion"]:checked');

    var comentarios = document.querySelector('textarea[name="comentarios"]').value.trim();

    if (!animosidad) {
        alert("Por favor, responda la pregunta de animosidad.");
        return false;
    }

    if (!compromiso) {
        alert("Por favor, responda la pregunta de compromiso y lealtad.");
        return false;
    }

    if (!rendimiento) {
        alert("Por favor, responda la pregunta de rendimiento.");
        return false;
    }

    if (!motivacion) {
        alert("Por favor, responda la pregunta de motivación.");
        return false;
    } else if (motivacion.value === "Otro" && !comentarios) {
        alert("Si eligió 'Otro' en la pregunta de motivación, debe proporcionar comentarios adicionales.");
        return false;
    }

    if (!emocional) {
        alert("Por favor, responda la pregunta de estado emocional.");
        return false;
    }

    return true;
}
