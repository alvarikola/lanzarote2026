<?php
class CalendarioController
{

    static $oper,$id,$paso, $dia, $hora_inicio, $hora_fin, $nombre_modulo, $siglas_modulo, $color_modulo, $nombre_profesor, $curso_numero, $nombre_grado, $letra;

    static function pintar()
    {
        $contenido = '';



        self::inicializacion_campos();

        switch(Campo::val('oper'))
        {
            default:
                $contenido = self::listado();
                $volver = '';
            break;
        }

      
        

      
        if (Campo::val('modo') != 'ajax')
        {
            $h1cabecera = "<h1>". Idioma::lit('titulo'.Campo::val('oper'))." ". Idioma::lit(Campo::val('seccion')) ."</h1>";
        }

      
        return "
        <div class=\"container contenido\">
        <section class=\"page-section usuarios\" id=\"usuarios\">
            {$h1cabecera}
            {$contenido}
        </section>
        </div>
        
        ";


    }

    static function inicializacion_campos()
    {
        self::$paso      = new Hidden(['nombre' => 'paso']);
        self::$oper      = new Hidden(['nombre' => 'oper']);
        self::$id        = new Hidden(['nombre' => 'id']);
        self::$dia      = new Text(['nombre' => 'dia']);
        self::$hora_inicio    = new Text(['nombre' => 'hora_inicio']);
        self::$hora_fin = new Text(['nombre' => 'hora_fin']);
        self::$nombre_modulo  = new Text(['nombre' => 'nombre_modulo']);
        self::$siglas_modulo     = new Text(['nombre' => 'siglas_modulo']);
        self::$color_modulo     = new Text(['nombre' => 'color_modulo']);
        self::$nombre_profesor     = new Text(['nombre' => 'nombre_profesor']);
        self::$curso_numero     = new Text(['nombre' => 'curso_numero']);
        self::$nombre_grado     = new Text(['nombre' => 'nombre_grado']);
        self::$letra     = new Text(['nombre' => 'letra']);

        Formulario::cargar_elemento(self::$paso);
        Formulario::cargar_elemento(self::$oper);
        Formulario::cargar_elemento(self::$id);
        Formulario::cargar_elemento(self::$dia);
        Formulario::cargar_elemento(self::$hora_inicio);
        Formulario::cargar_elemento(self::$hora_fin);
        Formulario::cargar_elemento(self::$nombre_modulo);
        Formulario::cargar_elemento(self::$siglas_modulo);
        Formulario::cargar_elemento(self::$color_modulo);
        Formulario::cargar_elemento(self::$nombre_profesor);
        Formulario::cargar_elemento(self::$curso_numero);
        Formulario::cargar_elemento(self::$nombre_grado);
        Formulario::cargar_elemento(self::$letra);

    }

    static function listado()
    {


        $horario = new Horario();

        $sql = "
        SELECT 
            h.dia,
            h.hora_inicio,
            h.hora_fin,
            m.nombre AS nombre_modulo,
            m.siglas AS siglas_modulo,
            m.color AS color_modulo,
            CONCAT(p.nombre, ' ', p.apellidos) AS nombre_profesor,
            c.curso_numero,
            c.nombre_grado,
            c.letra
        FROM 
            horarios h
            JOIN modulos m ON h.id_modulo = m.id
            JOIN personas p ON h.id_profesor = p.id
            JOIN cursos c ON m.curso_asignado = c.id
        ORDER BY 
            h.dia, h.hora_inicio
        ";

        $datos_consulta = $horario->query_custom($sql);


        $listado_horarios = '';
        foreach($datos_consulta as $indice => $registro)
        {

            $listado_horarios .= "
                <tr>
                    <td>{$registro['hora_inicio']}</td>
                    <td>{$registro['hora_fin']}</td>
                    <td>{$registro['nombre_modulo']}</td>
                    <td>{$registro['siglas_modulo']}</td>
                    <td>{$registro['color_modulo']}</td>
                    <td>{$registro['nombre_profesor']}</td>
                    <td>{$registro['curso_numero']}</td>
                    <td>{$registro['nombre_grado']}</td>
                    <td>{$registro['letra']}</td>
                </tr>
            ";

        }


        return "
            <table class=\"table\">
            <thead>
                <tr>
                <th scope=\"col\">hora_inicio</th>
                <th scope=\"col\">hora_fin</th>
                <th scope=\"col\">nombre_modulo</th>
                <th scope=\"col\">siglas_modulo</th>
                <th scope=\"col\">color_modulo</th>
                <th scope=\"col\">nombre_profesor</th>
                <th scope=\"col\">curso_numero</th>
                <th scope=\"col\">nombre_grado</th>
                <th scope=\"col\">letra</th>
                </tr>
            </thead>
            <tbody>
            {$listado_horarios}
            </tbody>
            </table>
            ";

    }

}