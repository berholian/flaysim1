-- phpMyAdmin SQL Dump
-- version 4.1.8
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tiempo de generación: 21-01-2015 a las 16:40:28
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
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=87 ;

--
-- Volcado de datos para la tabla `dishes`
--

INSERT INTO `dishes` (`id`, `name`, `description`, `prize`, `type`) VALUES
(61, '', 'Los simuladores de vuelo no estÃ¡n exentos de la actualizaciÃ³n inherente a los elementos electrÃ³nicos de Ãºltima generaciÃ³n. Igualmente, segÃºn aumenta nuestra aficiÃ³n y conocimientos, tambiÃ©n deseamos ampliar la ergonomÃ­a y funcionalidad de nuestras rÃ©plicas aÃ©reas.<br/><br/>En cualquiera de los dos casos los tÃ©cnicos de FlySim-NG le asesoraran en la elecciÃ³n del equipo informÃ¡tico necesario y de los componentes adecuados a sus deseos, tanto si se trata de un sencillo puesto instalado en su domicilio, como de los simuladores mÃ¡s sofisticados.\n\n', '', 28),
(62, '', 'A partir de ahora, vamos a disponer de distintas partes reales del aviÃ³n B737, como:<br/><br/>   \nYokes, throttles, pedales, asientos, fuselaje, cockpit, etc.<br/>  \nFlysim-ng, se encargara de la transformaciÃ³n y/o adaptaciÃ³n electrÃ³nica y mecÃ¡nica para dichas partes.', '', 29),
(65, '4 hours', 'Simulator initial contact and flight status:</br></br>\r\n- Flight Simulator configuration,</br>\r\n- Basic settings and controls,</br>\r\n- Flight instruments and avionics,</br>\r\n- Flight procedures,</br>\r\n- Flight manoeuvres.\r\n', '', 30),
(85, 'Tenemos diseÃ±ados hasta 3 Packs distintos de horas para configurar las sesiones  cÃ³modamente en varios dÃ­as y su precio sea mÃ¡s atractivo.', 'PACK 5H: A realizar en 1 dÃ­a, 2.30h en la maÃ±ana/ 2.30h en la tarde.   Precio = 400â‚¬+21% IVA.</br></br>\r\n\r\nPACK 10H: A realizar en 2 dÃ­as, +1h por cortesÃ­a de Flysim-ng.               Precio = 700â‚¬+21% IVA.</br></br>\r\n\r\nPACK 15H: A realizar en 3 dÃ­as, +1h por cortesÃ­a de Flysim-ng.               Precio = 900â‚¬+21% IVA.</br></br>\r\n\r\nDIA DEL SIM: (SOLO PARA AFICIONADOS) los sÃ¡bados de cada mes.     Precio =   50â‚¬+21% IVA.</br></br></br>\r\n\r\nHORA SIMULADOR: Para cualquier tipo de entrenamiento.                    Precio =   90â‚¬+21% IVA.</br></br>\r\n\r\nLa reserva del simulador quedara formalizada una vez hecho el previo pago del 50% del total \r\n\r\ncontratado mediante transferencia bancaria.</br>\r\n\r\nFlysim-ng ofrece la posibilidad de recogida en aeropuerto o estaciÃ³n de Renfe y vuelta al \r\n\r\nmismo, incluido al hotel que tenemos concertado para clientes de Flysim, sin coste adicional.</br></br>\r\n\r\nTambiÃ©n disponemos de servicio de cafÃ©, refrescos, etc, totalmente gratuito para el cliente.</br></br>\r\n\r\nNOTA:</br>\r\n\r\nLas sesiones reservadas y canceladas por el cliente, quedaran pendientes de programar para \r\n\r\notra fecha sin posibilidad de devoluciÃ³n de la misma.', '', 50),
(86, 'x', 'x', '', 12),
(46, 'x', 'x', '', 13),
(64, '', 'La preparaciÃ³n para un "Assessment" de aerolÃ­nea es nuestra principal actividad. En los Ãºltimos aÃ±os se ha visto mermado el nÃºmero de plazas en la mayorÃ­a de compaÃ±Ã­as aÃ©reas, provocando el aumento de los estÃ¡ndares requeridos para la incorporaciÃ³n a las mismas. Por lo tanto, se hace imprescindible preparar a fondo tanto la entrevista personal como la prueba en el simulador.\n<br/><br/>  \n \nEn FLYSIM-NG tenemos a disposiciÃ³n de aquellos pilotos que deseen preparar su "Assessment" con nosotros, los distintos Briefing Packs; manuales, SOP''s,... de compaÃ±Ã­as como:<br/><br/>  ', '', 14),
(48, '', 'Disponemos de los medios y el capital humano adecuados para aquellos pilotos profesionales que necesiten adquirir o refrescar sus conocimientos tÃ©cnicos sobre procedimientos en la aviaciÃ³n comercial. Configure la formaciÃ³n que crea mÃ¡s adecuada combinando nuestros simuladores de instrucciÃ³n, Boeing 737 NG, Cessna 206 Garmin 1000 o (prÃ³ximamente) Airbus A320, con uno de nuestros instructores asistentes (por si no estÃ¡ familiarizado con el cockpit), o bien con un instructor IFR. TambiÃ©n existe la posibilidad de que sea un instructor habilitado en tipo. Igualmente puede asistir con su propio instructor a nuestras instalaciones.<br/><br/> \r\nLos diferentes tipos de formaciÃ³n son:<br/>  \r\n- PreparaciÃ³n de assessment de compaÃ±Ã­as.<br/> \r\n- Refresco para renovaciones de tipo.<br/> \r\n- Refresco de reglas de vuelo instrumental (IFR).<br/> \r\n- Refresco de consolidaciÃ³n CRM.<br/> \r\n- MCC.<br/> \r\n- Etc... \r\n\r\n\r\n \r\n', '', 15),
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
(59, 'La formaciÃ³n se divide en tres fases: ', '<span>InstrucciÃ³n AeronÃ¡utica</span><br/>\r\n5 horas<br/>\r\n- Principios de Vuelo y AerodinÃ¡mica.<br/> \r\n- ConstrucciÃ³n, Estructura, sistemas y mantenimiento de la aeronave.<br/> \r\n- Factores humanos (InstrucciÃ³n y entrenamiento de las tripulaciones y los tÃ©cnicos de mantenimiento). <br/>\r\n- PlanificaciÃ³n de Vuelo y Principios Operacionales.<br/> \r\n- LegislaciÃ³n AÃ©rea, Control del TrÃ¡fico AÃ©reo y Comunicaciones.<br/> \r\n- MeteorologÃ­a AeronÃ¡utica.<br/> \r\n- NavegaciÃ³n AÃ©rea.<br/><br/>   \r\n\r\n<span>Refuerzo PsicolÃ³gico</span><br/>\r\n1 hora<br/>\r\n- EstadÃ­sticas. <br/>\r\n- InformaciÃ³n ? Seguridad. <br/>\r\n- El estrÃ©s y la ansiedad: fisiologÃ­a natural.  <br/>\r\n- VisualizaciÃ³n y anticipaciÃ³n. <br/>\r\n- TÃ©cnicas de respiraciÃ³n. <br/><br/>  \r\n\r\n<span>Simulador de Vuelo</span><br/>\r\n4 horas<br/>\r\n- Ejemplo de vuelo rutinario en lÃ­nea regular. <br/>\r\n- Vuelo sin visibilidad. <br/>\r\n- Auto-land (aterrizaje con Piloto AutomÃ¡tico). <br/>\r\n- Tcas. Sistema de alerta de trÃ¡fico y evasiÃ³n de colisiÃ³n.<br/>\r\n- Emergencias (DespresurizaciÃ³n de cabina, fallo de moto, fallo de comunicaciones, etc.) ', '', 26),
(66, '8 hours', 'You have to know before flying: airspace classification, weather forecast, standard departure and approach procedures, airplane limitations and airplane configuration for available runways at the airports where we are planning to operate:</br></br>\r\n- Operational procedures,</br>\r\n- Performance,</br>\r\n- Weather,</br>\r\n- Metar and Tafor decode,</br>\r\n- Fligh planning,\r\n- Aeronautical maps and airports charts.\r\n', '', 31),
(67, '8 hours', 'Flying under instrumental rules let us to fly during night or within bad weather conditions and poor visibility.</br>\r\nIR is the standard for commercial aviation.</br></br>\r\n- IR equipment,</br>\r\n- SID, STAR, ENROUTE,</br>\r\n- Approach, holding, missed approach,</br>\r\n- DME arc, tear drop, procedure turn.\r\n', '', 34),
(68, '4 hours', 'Virtual ON-LINE flight lead us into virtual airspace controlled by virtual air traffic controllers (ATC).</br></br>\r\n- Software installation and configuration,</br>\r\n- Hardware installation and configuration,</br>\r\n- ON-LINE weather,</br>\r\n- Flight plan,</br>\r\n- Communications.\r\n', '', 35),
(69, '8 hours', 'Initial training for â€œglass cockpitâ€ or electronic flight instrument system (EFIS).</br>\r\nThis avionic system is the most used in aviation now and leading the future aviation also.</br></br>\r\n- Checklist and performance,</br>\r\n- PFD and MFD,</br>\r\n- Electronic instruments,</br>\r\n- COM, NAV, SSR and configuration,</br>\r\n- GPS and MAP.\r\n', '', 36),
(70, '4 hours', 'Advanced training for users willing to use all GARMIN capabilities.</br></br>\r\n- NEAREST,</br>\r\n- DIRECT-TO,</br>\r\n- FPL,</br>\r\n- WAYPOINTS,</br>\r\n- Autopilot.\r\n', '', 37),
(71, '4 hours', 'Garmin is considered one of the safest system for flying under instrumental rules because his interface shows up all the information clear and easily for the pilot to improve and maintain his situational awareness.</br></br>\r\n- PROCEDURES,</br>\r\n- VOR, ADF, GPS,</br>\r\n- GS and LOC,</br>\r\n- PFD instrumental (IR) configuration,</br>\r\n- Instrumental (IR) autopilot.\r\n', '', 38),
(72, '', 'Airline pilots, general aviation pilots, virtual pilots, fans, â€¦ everyone is welcome anytime into FLYSIM-NG facilities.</br>\r\nEveryone willing to ride into our B737-800 NG can make it at a really cheap price.\r\n', '', 39),
(73, '', 'Would you like to learn to fly the best commercial airplane in the aviation history?.</br>\r\nOur team will develop the training than better suits your needs, experience and knowledge.</br>\r\nThere are no limits for us, you will set yours.\r\n', '', 41),
(74, 'The course consist of 3 stages:', 'Aeronautical training: (5 hours)</br></br>\r\n- Flight principles and aerodynamics,</br>\r\n- Airplane design, setting-up, frame, systems and maintenance,</br> \r\n- Human Factors (flight crew training and maintenance technicians training),</br> \r\n- Flight planning and operational principles,</br>\r\n- Air law, air traffic control and communications,</br>\r\n- Aeronautical weather,</br>\r\n- Air navigation.</br></br>\r\n\r\nPsychological reinforcement: ( 1 hour)</br></br>\r\n- Statistics,</br>\r\n- Information, Security and safety,</br>\r\n- Stress and anxiety: human physiology,</br>\r\n- Visualization and anticipation,</br>\r\n- Breathing technique.</br></br>\r\n\r\nFlight simulator: ( 4 hours)</br></br>\r\n- Sample flight as a regular company flight,</br>\r\n- Low visibility flight,</br>\r\n- Auto-land (landing with both autopilots engaged),</br>\r\n- Traffic and Collision Alert System (TCAS II), automatic report and  suggested actions to avoid collision with another airplane.</br>\r\n- Ground Proximity Warning System (GPWS), automatic report to avoid collision flight into terrain (CFIT).</br>\r\n- Emergencies: Cabin decompression, engine failure, engine fire,  communications failure, â€¦\r\n', '', 40),
(75, '', 'At FlySim-NG we will take care of everything so you only need to pay attention to enjoy flying the simulator you would like to.</br>\r\nDesign, frame, building, components, hardware, software, settings, everything maybe customized following your request.</br>\r\nStructure, chassis, platform are developed by last technology devices and the best quality materials so it makes our projects really accurate to customers requirements. \r\n', '', 42),
(76, '', 'Flight simulators are running under last generation hardware and software and it is improved monthly.</br>\r\nAs soon as your knowledge and experience on the simulator improves, you most probably would like to update your device.</br>\r\nOur team will provide you the best update available which suits you and the best price for you also.</br>\r\nNo matter about a small simulator for home or a professional one for a TRTO we will give you all the support you would like to have.\r\n', '', 43),
(77, '', 'From now on we are going to get on stock real Boeing 737 spare parts as:</br> yokes, throttles, pedals, seats, cockpits,â€¦</br></br>\r\nFlySim-NG will transform them under your request to fit into your simulator.\r\n', '', 44),
(78, 'x', 'x', '', 10),
(79, 'x', 'x', '', 2),
(80, 'x', 'x', '', 9),
(81, '', 'Our main task consists of assist to our customers in order to successfully go through airlines screenings.</br></br>\r\n\r\nLately companies are not requiring pilots so most of the screening process conducted nowadays are really difficult in order to select only the pilots showing their best flight skills.</br></br>\r\n\r\nSo it looks like the best investment is to prepare yourself for the interview and for the simulator test.</br></br>\r\n\r\nAt FLYSIM-NG we have available for our customers to afford every company assesment:  briefing pack, SOP, QRH, FCTM, FCOM, â€¦</br></br>\r\n\r\nOur customers are flying worldwide in international airlines as: Ryanair, Lion air, Alba star, Copa airlines, Skymark, Sun express, Vueling, Volotea, Emirates, Air Europa, â€¦\r\n', '', 45),
(82, '', 'We have the proper facilities and qualified professional team in order to offer to our customers the best training for beginners before conducting their type rating, or to that ones just type rated facing their first screening or even recurrent training for experienced type rated customers planning to go through an assessment soon.</br></br>\r\n\r\nYou may choose the best type for you: B737NG, C206 G1000 and coming soon A320.</br></br> \r\n\r\nYou may be assisted by our team: instructor, IR instructor, TR instructor or you may bring your own instructor into our facilities.</br></br>\r\n\r\nOur training offer consists of:</br></br>\r\n- Airlines assessment preparation,</br>\r\n- Recurrent training before your type rating revalidation or renewal,</br>\r\n- IR training,</br>\r\n- CRM training,</br>\r\n- MCC training,</br>\r\n- Any other one on request.\r\n', '', 46),
(83, '', 'All Aircraft Maintenance technicians and Aeronautical Engineers are highly recommended to visit our facilities in the event they are going to perform line maintenance, heavy maintenance or engineering duties.</br>\r\nThis is a really easy and the cheapest way of being familiar with the airplane systems and operations.\r\n', '', 47),
(84, '', 'JOC es el siguiente paso para los estudiantes con un certificado de MCC pero sin experiencia en aviones a reacciÃ³n. Ha sido diseÃ±ado para ponerlos al mismo nivel de enseÃ±anza que un  estudiante de  MCC y debe ser visto como un curso de preparaciÃ³n para un assessment de  acceso a una aerolÃ­nea. Para muchas compaÃ±Ã­as aÃ©reas la finalizaciÃ³n de un JOC es un requisito previo obligatorio para el proceso de selecciÃ³n del piloto.</br></br>\r\n\r\n Fechas del curso</br></br>\r\n\r\nTenemos cursos que comienzan cada semana, por favor pÃ³ngase en contacto en flysim-ng@flysim-ng.com para ver la disponibilidad.</br></br>\r\n\r\n Requisitos para el Curso</br></br>\r\n\r\nPara llevar a cabo el curso, se debe poseer una licencia comercial EASA vÃ¡lida y actualizada con Multi Engine Instrumental y un certificado de MCC.</br></br>\r\n\r\nMÃ©todo de entrenamiento</br></br>\r\n Clases teoricas y 4 sesiones en simulador; B737-800NG</br></br>\r\n\r\nTotal del curso</br></br>\r\n- 2 dÃ­as de teorÃ­a (12h)</br>\r\n- 12 horas (4 sesiones) de entrenamiento en simulador.</br></br>\r\n\r\n DuraciÃ³n del curso:</br></br>\r\n\r\nAproximadamente 3 dÃ­as hÃ¡biles, fines de semana y en funciÃ³n de la disponibilidad del simulador.</br></br>\r\nÂ \r\n\r\nCÃ³mo reservar un curso</br></br>\r\n\r\nEl JOC sale regularmente todos los meses y aconsejamos ponerse en contacto con nosotros para hacer una reserva o discutir sus necesidades.. Para mÃ¡s informaciÃ³n, pÃ³ngase en contacto con <a></a> flysim-ng@flysim-ng.com o llamando al +36 669 024 288.\r\n', '', 11);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `types`
--

CREATE TABLE IF NOT EXISTS `types` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=51 ;

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
(29, 'componentes_reales'),
(30, 'virtual_flight_beginners'),
(31, 'flight_planning_navigation'),
(32, 'virtual_flight_beginners'),
(33, 'flight_planning_navigation'),
(34, 'instrumental_flight'),
(35, 'Online_flight'),
(36, 'garmin_avionics_beginners'),
(37, 'garmin_avionics_advanced'),
(38, 'garmin_instrumental_flight'),
(39, 'B737800NG_baptism'),
(40, 'overcome_fair_flying'),
(41, 'B737800NG_basic_training'),
(42, 'custom_simulators'),
(43, 'maintenance_updates'),
(44, 'real_hardware'),
(45, 'overview'),
(46, 'cpl_atpl'),
(47, 'AEAMT'),
(48, 'JOC'),
(49, 'JOC'),
(50, 'sim_paks');

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
