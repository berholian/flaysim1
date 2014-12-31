-- phpMyAdmin SQL Dump
-- version 4.1.8
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tiempo de generación: 30-12-2014 a las 18:36:02
-- Versión del servidor: 5.5.40-36.1-log
-- Versión de PHP: 5.4.23

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `flysimng_flysi`
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
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=65 ;

--
-- Volcado de datos para la tabla `dishes`
--

INSERT INTO `dishes` (`id`, `name`, `description`, `prize`, `type`) VALUES
(61, '', 'Los simuladores de vuelo no estÃ¡n exentos de la actualizaciÃ³n inherente a los elementos electrÃ³nicos de Ãºltima generaciÃ³n. Igualmente, segÃºn aumenta nuestra aficiÃ³n y conocimientos, tambiÃ©n deseamos ampliar la ergonomÃ­a y funcionalidad de nuestras rÃ©plicas aÃ©reas.<br/><br/>En cualquiera de los dos casos los tÃ©cnicos de FlySim-NG le asesoraran en la elecciÃ³n del equipo informÃ¡tico necesario y de los componentes adecuados a sus deseos, tanto si se trata de un sencillo puesto instalado en su domicilio, como de los simuladores mÃ¡s sofisticados.\n\n', '', 28),
(62, '', 'A partir de ahora, vamos a disponer de distintas partes reales del aviÃ³n B737, como:<br/><br/>   \nYokes, throttles, pedales, asientos, fuselaje, cockpit, etc.<br/>  \nFlysim-ng, se encargara de la transformaciÃ³n y/o adaptaciÃ³n electrÃ³nica y mecÃ¡nica para dichas partes.', '', 29),
(44, 'x', 'x', '', 11),
(45, 'x', 'x', '', 12),
(46, 'x', 'x', '', 13),
(64, '', 'La preparaciÃ³n para un "Assessment" de aerolÃ­nea es nuestra principal actividad. En los Ãºltimos aÃ±os se ha visto mermado el nÃºmero de plazas en la mayorÃ­a de compaÃ±Ã­as aÃ©reas, provocando el aumento de los estÃ¡ndares requeridos para la incorporaciÃ³n a las mismas. Por lo tanto, se hace imprescindible preparar a fondo tanto la entrevista personal como la prueba en el simulador.\n<br/><br/>  \n \nEn FLYSIM-NG tenemos a disposiciÃ³n de aquellos pilotos que deseen preparar su "Assessment" con nosotros, los distintos Briefing Packs; manuales, SOP''s,... de compaÃ±Ã­as como:<br/><br/>  ', '', 14),
(48, '', 'Disponemos de los medios y el capital humano adecuados para aquellos pilotos profesionales que necesiten adquirir o refrescar sus conocimientos tÃ©cnicos sobre procedimientos en la aviaciÃ³n comercial. Configure la formaciÃ³n que crea mÃ¡s adecuada combinando nuestros simuladores de instrucciÃ³n, Boeing 737 NG, Cessna 206 Garmin 1000 o (prÃ³ximamente) Airbus A320, con uno de nuestros instructores asistentes (por si no estÃ¡ familiarizado con el cockpit), o bien con un instructor IFR. TambiÃ©n existe la posibilidad de que sea un instructor habilitado en tipo. Igualmente puede asistir con su propio instructor a nuestras instalaciones.<br/><br/> \nLos diferentes tipos de formaciÃ³n son:<br/>  \n- PreparaciÃ³n deassessment de compaÃ±Ã­as.<br/> \n- Refresco para renovaciones de tipo.<br/> \n- Refresco de reglas de vuelo instrumental (IFR).<br/> \n- Refresco de consolidaciÃ³n CRM.<br/> \n- MCC.<br/> \n- Etc... \n\n\n \n', '', 15),
(49, '', 'Los tÃ©cnicos de mantenimiento aeronÃ¡utico (TMA) y estudiantes de carreras superiores relacionadas con la aviaciÃ³n, tambiÃ©n pueden beneficiarse de nuestras instalaciones. Tanto si van a asistir en tierra las aeronaves como si van a diseÃ±arlas, esta es una forma fÃ¡cil y econÃ³mica de familiarizarse con los diferentes sistemas y operaciones.\n', '', 16),
(50, '4 Horas ', 'La toma de contacto con el simulador y la dinÃ¡mica de vuelo.<br/>\r\n- ConfiguraciÃ³n Flight Simulator<br/> - Controles BÃ¡sicos<br/> - Instrumentos y AviÃ³nica<br/> - Procedimientos de Vuelo<br/> - Maniobras ', '', 17),
(51, '8 Horas ', 'Imprescindible antes de cualquier vuelo: conocer con exactitud los distintos espacios aÃ©reos, el pronÃ³stico meteorolÃ³gico, los procedimientos de salida y aproximaciÃ³n, ademÃ¡s de los lÃ­mites y configuraciones de nuestra aeronave con respecto a las pistas en las que vamos a operar.<br/> - Procedimientos Operacionales<br/> - Performance<br/> - MeteorologÃ­a<br/> - Descifrado Metar & Tafor<br/> - PlanificaciÃ³n del vuelo.<br/> - Cartas y Mapas ', '', 18),
(52, ' 8 horas', 'El vuelo instrumental nos permite volar por la noche o en condiciones meteorolÃ³gicas adversas.<br/>Es el estÃ¡ndar de todos los vuelos comerciales.\n<br/>- InstrumentaciÃ³n IFR<br/> - SID, STAR y ENROUTE<br/> - AproximaciÃ³n, Esperas y Frustradas<br/> - Arco DME, Gota e HipÃ³dromos ', '', 19),
(53, '4 Horas', 'El vuelo virtual on-line nos permite realizar vuelos simulados en espacios aÃ©reos replicados de la realidad y controlados por ATC''s virtuales.<br/>- InstalaciÃ³n y configuraciÃ³n de software<br/> - InstalaciÃ³n y configuraciÃ³n de hardware<br/> - MeteorologÃ­a on-line<br/> - Planes de Vuelo<br/> - Comunicaciones ', '', 20),
(60, 'Ensamblado y configuraciÃ³n de equipos para simulaciÃ³n aÃ©rea', 'La base del buen funcionamiento de un simulador de vuelo es la elecciÃ³n adecuada del equipo informÃ¡tico que \r\ndebe soportarlo. No sirve cualquier PC.<br/><br/> \r\nLos tÃ©cnicos de FlySim-NG estÃ¡n cualificados para asesorarle en la elecciÃ³n del equipo necesario para mover \r\ncon soltura su simulador, tanto si se trata de un sencillo puesto instalado en su domicilio, como si se trata de un \r\nsimulador mÃ¡s sofisticado.<br/><br/> \r\nFlySim-NG se encargarÃ¡ de todo lo necesario para que usted pueda dedicarse plenamente al desarrollo de su \r\naficiÃ³n sin ninguna preocupaciÃ³n tÃ©cnica, diseÃ±ando, ensamblando, instalando el software necesario y \r\nprobando su equipo informÃ¡tico para que llegue a su domicilio libre de problemas.<br/> \r\nFlySim-NG confÃ­a en el software de la compaÃ±Ã­a Microsoft, saga Microsoft Flight Simulator como software base \r\nde sus simuladores de vuelo.<br/><br/> \r\nEstructuras, chasis y plataformas realizadas con la ultima tecnologÃ­a del sector y con materiales de calidad, lo \r\nque nos otorga una gran precisiÃ³n en nuestros trabajos.<br/><br/> \r\nAquÃ­ podrÃ¡ ver tanto ejemplos de simuladores ya construidos, como de los proyectos nuevos en que estamos \r\ntrabajando. ', '', 27),
(54, '8 Horas ', 'Curso de familiarizaciÃ³n con la instrumentaciÃ³n electrÃ³nica.<br/>Este tipo de aviÃ³nica es el presente y futuro de la aviaciÃ³n.<br/>- Listas de Chequeo y Performance.<br/>- PFD & MFD.<br/>- InstrumentaciÃ³n electrÃ³nica.<br/>- COM, NAV, SSR y configuraciÃ³n.<br/>- GPS y MAP.', '', 21),
(55, '4 Horas ', 'En este curso profundizaremos en las extensas caracterÃ­sticas y posibilidades del GARMIN.<br/> - NEAREST<br/>- DIRECT-TO<br/>- FPL- WAYPOINTS<br/>- AutoPilo', '', 22),
(56, '4 Horas ', 'El vuelo instrumental con este tipo de aviÃ³nica mejora la interpretaciÃ³n, por parte del piloto, de la informaciÃ³n  proporcionada, aumentando la seguridad en vuelo.<br/> - PROCEDURES<br/>- VOR, ADF, GPS<br/>- GS y LOC<br/>- ConfiguraciÃ³n PFD IFR<br/>- Autopilot IFR', '', 23),
(57, '', 'Pilotos comerciales, pilotos privados, pilotos virtuales, aficionados,... todos tienen un sitio en Flysim-Ng. Aquellos que deseen probar la sesiÃ³n de vuelo en nuestro simulador Boeing 737-800 NG tienen una estupenda oportunidad a un precio reducido.\n', '', 24),
(58, '', 'Â¿Le gustarÃ­a aprender a volar uno de los aviones mÃ¡s comerciales del mundo? \nInstrucciÃ³n a medida de experiencia y conocimientos. Hasta donde quiera llegar...\n', '', 25),
(59, 'La formaciÃ³n se divide en tres fases: ', '<span>InstrucciÃ³n AeronÃ¡utica</span><br/>\r\n5 horas<br/>\r\n- Principios de Vuelo y AerodinÃ¡mica.<br/> \r\n- ConstrucciÃ³n, Estructura, sistemas y mantenimiento de la aeronave.<br/> \r\n- Factores humanos (InstrucciÃ³n y entrenamiento de las tripulaciones y los tÃ©cnicos de mantenimiento). <br/>\r\n- PlanificaciÃ³n de Vuelo y Principios Operacionales.<br/> \r\n- LegislaciÃ³n AÃ©rea, Control del TrÃ¡fico AÃ©reo y Comunicaciones.<br/> \r\n- MeteorologÃ­a AeronÃ¡utica.<br/> \r\n- NavegaciÃ³n AÃ©rea.<br/><br/>   \r\n\r\n<span>Refuerzo PsicolÃ³gico</span><br/>\r\n1 hora<br/>\r\n- EstadÃ­sticas. <br/>\r\n- InformaciÃ³n ? Seguridad. <br/>\r\n- El estrÃ©s y la ansiedad: fisiologÃ­a natural.  <br/>\r\n- VisualizaciÃ³n y anticipaciÃ³n. <br/>\r\n- TÃ©cnicas de respiraciÃ³n. <br/><br/>  \r\n\r\n<span>Simulador de Vuelo</span><br/>\r\n4 horas<br/>\r\n- Ejemplo de vuelo rutinario en lÃ­nea regular. <br/>\r\n- Vuelo sin visibilidad. <br/>\r\n- Auto-land (aterrizaje con Piloto AutomÃ¡tico). <br/>\r\n- Tcas. Sistema de alerta de trÃ¡fico y evasiÃ³n de colisiÃ³n.<br/>\r\n- Emergencias (DespresurizaciÃ³n de cabina, fallo de moto, fallo de comunicaciones, etc.) ', '', 26);

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
