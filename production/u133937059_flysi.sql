
-- phpMyAdmin SQL Dump
-- version 3.5.2.2
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tiempo de generación: 28-12-2014 a las 13:32:40
-- Versión del servidor: 5.1.69
-- Versión de PHP: 5.2.17

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `u133937059_flysi`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `dishes`
--

CREATE TABLE IF NOT EXISTS `dishes` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(250) NOT NULL DEFAULT '',
  `description` text NOT NULL,
  `prize` varchar(10) NOT NULL DEFAULT '',
  `type` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=63 ;

--
-- Volcado de datos para la tabla `dishes`
--

INSERT INTO `dishes` (`id`, `name`, `description`, `prize`, `type`) VALUES
(61, '', 'Los simuladores de vuelo no están exentos de la actualización inherente a los elementos electrónicos de última generación. Igualmente, según aumenta nuestra afición y conocimientos, también deseamos ampliar la ergonomía y funcionalidad de nuestras réplicas aéreas.<br/><br/>En cualquiera de los dos casos los técnicos de FlySim-NG le asesoraran en la elección del equipo informático necesario y de los componentes adecuados a sus deseos, tanto si se trata de un sencillo puesto instalado en su domicilio, como de los simuladores más sofisticados.\r\n\r\n', '', 28),
(62, '', 'A partir de ahora, vamos a disponer de distintas partes reales del avión B737, como:<br/><br/>   \r\nYokes, throttles, pedales, asientos, fuselaje, cockpit, etc.<br/>  \r\nFlysim-ng, se encargara de la transformación y/o adaptación electrónica y mecánica para dichas partes.', '', 29),
(43, 'Lenguaje de signos para chimpances', 'nivel básico y medio para la comunicación no verbal en la selva con hominidos de tamaño medio', '', 10),
(44, 'x', 'x', '', 11),
(45, 'x', 'x', '', 12),
(46, 'x', 'x', '', 13),
(47, '', 'La preparación para un “Assessment” de aerolínea es nuestra principal actividad. En los últimos años se ha visto mermado el número de plazas en la mayoría de compañías aéreas, provocando el aumento de los estándares requeridos para la incorporación a las mismas. Por lo tanto, se hace imprescindible preparar a fondo tanto la entrevista personal como la prueba en el simulador.\r\n<br/><br/>  \r\n \r\nEn FLYSIM-NG tenemos a disposición de aquellos pilotos que deseen preparar su “Assessment” con nosotros, los distintos Briefing Packs; manuales, SOP´s,... de compañías como:<br/><br/>  \r\n\r\n', '', 14),
(48, '', 'Disponemos de los medios y el capital humano adecuados para aquellos pilotos profesionales que necesiten adquirir o refrescar sus conocimientos técnicos sobre procedimientos en la aviación comercial. Configure la formación que crea más adecuada combinando nuestros simuladores de instrucción, Boeing 737 NG, Cessna 206 Garmin 1000 o (próximamente) Airbus A320, con uno de nuestros instructores asistentes (por si no está familiarizado con el cockpit), o bien con un instructor IFR. También existe la posibilidad de que sea un instructor habilitado en tipo. Igualmente puede asistir con su propio instructor a nuestras instalaciones.<br/><br/> \r\nLos diferentes tipos de formación son:<br/>  \r\n- Preparación deassessment de compañías.<br/> \r\n- Refresco para renovaciones de tipo.<br/> \r\n- Refresco de reglas de vuelo instrumental (IFR).<br/> \r\n- Refresco de consolidación CRM.<br/> \r\n- MCC.<br/> \r\n- Etc... \r\n\r\n\r\n \r\n', '', 15),
(49, '', 'Los técnicos de mantenimiento aeronáutico (TMA) y estudiantes de carreras superiores relacionadas con la aviación, también pueden beneficiarse de nuestras instalaciones. Tanto si van a asistir en tierra las aeronaves como si van a diseñarlas, esta es una forma fácil y económica de familiarizarse con los diferentes sistemas y operaciones.\r\n', '', 16),
(50, '4 Horas ', 'La toma de contacto con el simulador y la dinámica de vuelo.<br/>\r\n- Configuración Flight Simulator<br/> - Controles Básicos<br/> - Instrumentos y Aviónica<br/> - Procedimientos de Vuelo<br/> - Maniobras ', '', 17),
(51, '8 Horas ', 'Imprescindible antes de cualquier vuelo: conocer con exactitud los distintos espacios aéreos, el pronóstico meteorológico, los procedimientos de salida y aproximación, además de los límites y configuraciones de nuestra aeronave con respecto a las pistas en las que vamos a operar.<br/> - Procedimientos Operacionales<br/> - Performance<br/> - Meteorologí­a<br/> - Descifrado Metar & Tafor<br/> - Planificación del vuelo.<br/> - Cartas y Mapas ', '', 18),
(52, ' 8 horas', 'El vuelo instrumental nos permite volar por la noche o en condiciones meteorológicas adversas.<br/>Es el estándar de todos los vuelos comerciales.\r\n<br/>- Instrumentación IFR<br/> - SID, STAR y ENROUTE<br/> - Aproximación, Esperas y Frustradas<br/> - Arco DME, Gota e Hipódromos ', '', 19),
(53, '4 Horas', 'El vuelo virtual on-line nos permite realizar vuelos simulados en espacios aéreos replicados de la realidad y  controlados por ATC''s virtuales.<br/>- Instalación y configuración de software<br/> - Instalación y configuración de hardware<br/> - Meteorologí­a on-line<br/> - Planes de Vuelo<br/> - Comunicaciones ', '', 20),
(60, 'Ensamblado y configuración de equipos para simulación aérea', 'La base del buen funcionamiento de un simulador de vuelo es la elección adecuada del equipo informático que \r\ndebe soportarlo. No sirve cualquier PC.<br/><br/> \r\nLos técnicos de FlySim-NG están cualificados para asesorarle en la elección del equipo necesario para mover \r\ncon soltura su simulador, tanto si se trata de un sencillo puesto instalado en su domicilio, como si se trata de un \r\nsimulador más sofisticado.<br/><br/> \r\nFlySim-NG se encargará de todo lo necesario para que usted pueda dedicarse plenamente al desarrollo de su \r\nafición sin ninguna preocupación técnica, diseñando, ensamblando, instalando el software necesario y \r\nprobando su equipo informático para que llegue a su domicilio libre de problemas.<br/> \r\nFlySim-NG confía en el software de la compañía Microsoft, saga Microsoft Flight Simulator como software base \r\nde sus simuladores de vuelo.<br/><br/> \r\nEstructuras, chasis y plataformas realizadas con la ultima tecnología del sector y con materiales de calidad, lo \r\nque nos otorga una gran precisión en nuestros trabajos.<br/><br/> \r\nAquí podrá ver tanto ejemplos de simuladores ya construidos, como de los proyectos nuevos en que estamos \r\ntrabajando. ', '', 27),
(54, '8 Horas ', 'Curso de familiarización con la instrumentación electrónica.<br/>Este tipo de aviónica es el presente y futuro de la aviación.<br/>- Listas de Chequeo y Performance.<br/>- PFD & MFD.<br/>- Instrumentación electrónica.<br/>- COM, NAV, SSR y configuración.<br/>- GPS y MAP.', '', 21),
(55, '4 Horas ', 'En este curso profundizaremos en las extensas caracterí­sticas y posibilidades del GARMIN.<br/> - NEAREST<br/>- DIRECT-TO<br/>- FPL- WAYPOINTS<br/>- AutoPilo', '', 22),
(56, '4 Horas ', 'El vuelo instrumental con este tipo de aviónica mejora la interpretación, por parte del piloto, de la información  proporcionada, aumentando la seguridad en vuelo.<br/> - PROCEDURES<br/>- VOR, ADF, GPS<br/>- GS y LOC<br/>- Configuración PFD IFR<br/>- Autopilot IFR', '', 23),
(57, '', 'Pilotos comerciales, pilotos privados, pilotos virtuales, aficionados,... todos tienen un sitio en Flysim-Ng. Aquellos que deseen probar la sesión de vuelo en nuestro simulador Boeing 737-800 NG tienen una estupenda oportunidad a un precio reducido.\r\n', '', 24),
(58, '', '¿Le gustaría aprender a volar uno de los aviones más comerciales del mundo? \r\nInstrucción a medida de experiencia y conocimientos. Hasta donde quiera llegar...\r\n', '', 25),
(59, 'La formación se divide en tres fases: ', '<span>Instrucción Aeronáutica</span><br/>\r\n5 horas<br/>\r\n- Principios de Vuelo y Aerodinámica.<br/> \r\n- Construcción, Estructura, sistemas y mantenimiento de la aeronave.<br/> \r\n- Factores humanos (Instrucción y entrenamiento de las tripulaciones y los técnicos de mantenimiento). <br/>\r\n- Planificación de Vuelo y Principios Operacionales.<br/> \r\n- Legislación Aérea, Control del Tráfico Aéreo y Comunicaciones.<br/> \r\n- Meteorología Aeronáutica.<br/> \r\n- Navegación Aérea.<br/><br/>   \r\n\r\n<span>Refuerzo Psicológico</span><br/>\r\n1 hora<br/>\r\n- Estadísticas. <br/>\r\n- Información → Seguridad. <br/>\r\n- El estrés y la ansiedad: fisiología natural.  <br/>\r\n- Visualización y anticipación. <br/>\r\n- Técnicas de respiración. <br/><br/>  \r\n\r\n<span>Simulador de Vuelo</span><br/>\r\n4 horas<br/>\r\n- Ejemplo de vuelo rutinario en línea regular. <br/>\r\n- Vuelo sin visibilidad. <br/>\r\n- Auto-land (aterrizaje con Piloto Automático). <br/>\r\n- Tcas. Sistema de alerta de tráfico y evasión de colisión.<br/>\r\n- Emergencias (Despresurización de cabina, fallo de moto, fallo de comunicaciones, etc.) ', '', 26);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `types`
--

CREATE TABLE IF NOT EXISTS `types` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=30 ;

--
-- Volcado de datos para la tabla `types`
--

INSERT INTO `types` (`id`, `name`) VALUES
(12, 'Assessment'),
(11, 'JOC'),
(10, 'monografico'),
(2, 'monograficos'),
(9, 'cursos'),
(14, 'descripcion'),
(15, 'alquilerSimulador_pilotos'),
(16, 'alquilerSimulador_profesionales'),
(17, 'iniciacion_vueloVirtual'),
(18, 'planificacion_vueloNav'),
(19, 'vueloInstrumental'),
(20, 'vuelo_Online'),
(21, 'adaptacion_avionica_garmin'),
(22, 'instruccion_avanzada_garmin'),
(23, 'vuelo_instrumental_garmin'),
(24, 'bautismoB737_800NG'),
(25, 'instruccion_basicaB737'),
(26, 'superar_miedoVolar'),
(27, 'sim_personaliz'),
(28, 'mantenimiento_ampliacion'),
(29, 'componentes_reales');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `email` varchar(250) NOT NULL DEFAULT '',
  `pass` varchar(250) NOT NULL DEFAULT '',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- Volcado de datos para la tabla `users`
--

INSERT INTO `users` (`id`, `email`, `pass`) VALUES
(1, 'jochins@gmail.com', 'tennor');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
