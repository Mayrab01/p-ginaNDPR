-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Versión del servidor:         5.7.28-log - MySQL Community Server (GPL)
-- SO del servidor:              Win64
-- HeidiSQL Versión:             10.3.0.5771
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;


-- Volcando estructura de base de datos para ndpr
CREATE DATABASE IF NOT EXISTS `ndpr` /*!40100 DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci */;
USE `ndpr`;

-- Volcando estructura para tabla ndpr.actividades
CREATE TABLE IF NOT EXISTS `actividades` (
  `Id_AC` int(11) NOT NULL AUTO_INCREMENT,
  `Encabezado_AC` text,
  `url_AC` text,
  PRIMARY KEY (`Id_AC`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;

-- Volcando datos para la tabla ndpr.actividades: ~5 rows (aproximadamente)
/*!40000 ALTER TABLE `actividades` DISABLE KEYS */;
INSERT INTO `actividades` (`Id_AC`, `Encabezado_AC`, `url_AC`) VALUES
	(2, 'VULNERABILIDADES DE DATOS EN LAS REDES SOCIALES.', '                                <iframe src=\'https://wordwall.net/play/15712/955/116\' width=\'900\' height=\'580\' frameborder=\'0\' allowfullscreen></iframe>'),
	(4, 'ESTADÍSTICAS DEL USO DE LAS REDES SOCIALES EN LA ACTUALIDAD', 'https://wordwall.net/es/embed/ab64ecabbd82447d963f8c3f815831d6?themeId=1&templateId=3'),
	(6, 'VULNERABILIDADES MÁS ALTAS.', '<div class="container-wrapper-genially" style="position: relative; min-height: 400px; max-width: 100%;"><video class="loader-genially" autoplay="autoplay" loop="loop" playsinline="playsInline" muted="muted" style="position: absolute;top: 45%;left: 50%;transform: translate(-50%, -50%);width: 80px;height: 80px;margin-bottom: 10%"><source src="https://static.genial.ly/resources/panel-loader-low.mp4" type="video/mp4" />Your browser does not support the video tag.</video><div id="60918d7ab9e0100d6e30ab13" class="genially-embed" style="margin: 0px auto; position: relative; height: auto; width: 100%;"></div></div><script>(function (d) { var js, id = "genially-embed-js", ref = d.getElementsByTagName("script")[0]; if (d.getElementById(id)) { return; } js = d.createElement("script"); js.id = id; js.async = true; js.src = "https://view.genial.ly/static/embed/embed.js"; ref.parentNode.insertBefore(js, ref); }(document));</script>'),
	(8, 'DATOS PERSONALES EN LAS REDES SOCIALES', 'https://wordwall.net/play/15711/290/256'),
	(10, 'LEYES MEXICANAS QUE PROTEGEN LA PRIVACIDAD DE LOS DATOS EN REDES SOCIALES', 'https://wordwall.net/play/15713/690/357');
/*!40000 ALTER TABLE `actividades` ENABLE KEYS */;

-- Volcando estructura para tabla ndpr.imagen
CREATE TABLE IF NOT EXISTS `imagen` (
  `Id_media` tinyint(3) NOT NULL,
  `archivo_img` varchar(100) NOT NULL,
  KEY `Id_media` (`Id_media`),
  CONSTRAINT `imagen_ibfk_1` FOREIGN KEY (`Id_media`) REFERENCES `media` (`Id_media`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Volcando datos para la tabla ndpr.imagen: ~19 rows (aproximadamente)
/*!40000 ALTER TABLE `imagen` DISABLE KEYS */;
INSERT INTO `imagen` (`Id_media`, `archivo_img`) VALUES
	(4, 'imagenes/p.jpg'),
	(2, 'imagenes/redes-sociales.png'),
	(6, 'imagenes/p2.jpg'),
	(8, 'imagenes/p3.jpg'),
	(10, 'imagenes/p4.jpg'),
	(12, 'imagenes/p5.png'),
	(16, 'imagenes/social.gif'),
	(14, 'null'),
	(18, 'imagenes/portada.gif'),
	(20, 'imagenes/source.gif'),
	(22, 'null'),
	(24, 'imagenes/vulnerability.jpg'),
	(26, 'imagenes/vulnerabilidades.jpg'),
	(28, 'imagenes/inai.png'),
	(30, 'video 3'),
	(32, 'imagenes/Redes_Mundo.png'),
	(34, 'imagenes/Tiempo_redes.png'),
	(36, 'imagenes/Redes mas utilizadas.png'),
	(38, 'imagenes/Tiempo_redes.png');
/*!40000 ALTER TABLE `imagen` ENABLE KEYS */;

-- Volcando estructura para tabla ndpr.informacion
CREATE TABLE IF NOT EXISTS `informacion` (
  `Id_info` tinyint(3) NOT NULL AUTO_INCREMENT,
  `Encabezado` varchar(100) DEFAULT '',
  `pagina` varchar(100) DEFAULT 'NOT NULL',
  `contenido` text,
  PRIMARY KEY (`Id_info`)
) ENGINE=InnoDB AUTO_INCREMENT=59 DEFAULT CHARSET=utf8;

-- Volcando datos para la tabla ndpr.informacion: ~29 rows (aproximadamente)
/*!40000 ALTER TABLE `informacion` DISABLE KEYS */;
INSERT INTO `informacion` (`Id_info`, `Encabezado`, `pagina`, `contenido`) VALUES
	(2, 'Introducción:', 'inicio', '	          Las redes sociales son una de las industrias de más rápido crecimiento en el mundo, \r\n                            con un crecimiento anual proyectado del 25% durante los próximos 5 años. El marketing \r\n                            en redes sociales aumenta el conocimiento de su marca. El 63% de los compradores que buscan \r\n                            casas en línea tienen más probabilidades de usar casas con presencia informativa en las \r\n                            redes sociales. Muchos de los usuarios piensan que lo peor que les puede pasar es que entren \r\n                            a sus redes sociales, pero la realidad va mucho más allá. La llamada “Internet profunda”,  \r\n                            como se denomina coloquialmente, es un lugar donde se mercadea todo tipo de información \r\n                            y de forma ilegal.\r\n'),
	(4, 'Ciberdelincuentes:', 'inicio', '    <p class="p1" style="text-align: justify;"><span class="s1">Los \r\n    <a href="https://www.seguridadpc.net/conceptos/los-ciberdelincuentes.html">\r\n    <strong>Ciberdelincuentes</strong></a> cada día tienen nuevos métodos para poder cometer actos delictivos y a \r\n    través de varias capas de seguridad, y lamentablemente ellos pueden mantener su IP de forma anónima. \r\n    Entre estas inventivas, está tomando mucha fuerza el llamado <strong>Phishing</strong>, que al traducirlo \r\n    al español significa &#8220;<strong>suplantación de identidad</strong>&#8220;, y es una \r\n    <a href="https://www.iniseg.es/blog/ciberseguridad/sera-eficaz-la-nueva-ley-de-ciberseguridad-europea/">\r\n    <strong>técnica delictual</strong></a> para robar a los usuarios información confidencial\r\n    <span class="Apple-converted-space"> llegando</span> incluso a obtener las contraseñas de las \r\n    propias tarjetas de crédito. Lo hacen a través del nombre de una entidad fiable dónde utilizan\r\n     mayormente los emails y mensajes instantáneos para engañar a la gente, solicitando datos confidenciales \r\n     del usuario. Lo peor de todo, es que mucha gente aún cae en esta trampa, ocasionando muchos problemas al\r\n      usuario afectado. </span></p>\r\n'),
	(6, 'Desarrollo:', 'inicio', '    Una vez leído toda la información, te proporcionamos un \r\n    enlace de actividades interactivas para mejorar tu conocimiento \r\n    con respecto a la información anteriormente proporcionada. '),
	(8, 'Datos personales:', 'DATOS PERSONALES EN LAS REDES SOCIALES', 'Es toda aquella información que se asocia con la persona la cual los identifica, \r\n                  da identidad, y describe. (Instituto de Transparencia, Acceso a la Información Pública, Protección de Datos Personales y Rendición de Cuentas de la Ciudad de México).'),
	(10, '¿Como proteger nuestros datos personales?', 'DATOS PERSONALES EN LAS REDES SOCIALES', ' A continuación un video sobre consejos para proteger nuestros datos en redes sociales.'),
	(12, 'Tipos de datos personales:', 'DATOS PERSONALES EN LAS REDES SOCIALES', '        <h5> <b>Datos personales sensibles:</b></h5> \r\n        <p>consideran sensibles aquellos que puedan revelar diferentes aspectos.(Pastorino, 2018).</p>  \r\n        <br>\r\n        <p> <b>1. Identificativos </b> \r\n              <br><b> 2. Electrónicos </b> \r\n              <br><b> 3. Laborales </b> \r\n              <br> <b> 4.	Patrimoniales </b> \r\n              <br> <b> 5.	Sobre procedimientos administrativos y/o jurisdiccionales.</b>\r\n              <br> <b> 6.	Académicos </b> \r\n              <br> <b> 7.	De tránsito y movimientos migratorios </b>\r\n              <br> <b> 8.	Sobre la salud </b>\r\n              <br> <b> 9.	Biométricos </b>\r\n              <br> <b> 10. Sensibles, especialmente protegidos </b> \r\n              <br> <b> 11. Personales de naturaleza pública </b> \r\n        </p>'),
	(14, 'Datos de carácter personal proporcionados en esferas de internet:', 'DATOS PERSONALES EN LAS REDES SOCIALES', '<p style= text-align:justify; > \r\n                                Se entienden todos aquellos que tengan incidencia en el derecho personal, sea derechos constitucionales, relativos al honor, ideología o no. (Lagarraña, 2018).\r\n                                <br>\r\n                                <br>\r\n                                    En donde se encuentran los siguientes:\r\n                                <br>\r\n                                <br>\r\n                                    <b>1. Nombre </b>\r\n                                    <br><b> 2. Imagen </b> \r\n                                    <br><b> 3. Grabaciones </b> \r\n                                    <br> <b> 4.	Dirección de correo </b> \r\n                                    <br> <b> 5.	Datos bancarios</b>\r\n                                    <br> <b> 6.	Información númerica </b> \r\n                                    <br> <b> 7.	Alfabética</b>\r\n                                    <br> <b> 8.	Gráfica </b>\r\n                                    <br> <b> 9.	Fotográfica </b>\r\n                                    <br> <b> 10. Acústica </b> \r\n                                    <br>\r\n                                    <br>\r\n                                    Los datos en la web tienen una difusión mundial y en la que los usuarios pueden cometer la imprudencia \r\n                                    de realizar un uso desmesurado, en muchos casos por falta de concienciación, y una vez estén integrados \r\n                                    los datos en la red, debido a su alcance global, la eliminación de la información puede ser muy laboriosa, \r\n                                    puesto que, aunque la fuente de origen elimine la información, el control de quién ha dispuesto y ha podido \r\n                                    almacenar en sus dispositivos dicha información es incontrolable. (Lagarraña, 2018).\r\n                                </p>'),
	(16, 'Datos de carácter personal proporcionados en esferas de internet:', 'DATOS PERSONALES EN LAS REDES SOCIALES', 'aplicación de origen chino para compartir vídeos similares a Instagram o Snapchat. Esta cuenta con 316 millones de usuarios.'),
	(18, '', 'VULNERABILIDADES DE DATOS EN LAS REDES SOCIALES', 'Virtualmente estamos vulnerables ante una oleada de personas mal \r\n                    intencionadas y hackers que están al acecho de encontrar los puntos \r\n                    vulnerables de nuestras redes para accesar a ellas y utilizar nuestra \r\n                    información con distintos fines. <br/> Sin embargo, estos sitios \r\n                    sociales tienen altos índices de vulnerabilidad en donde los \r\n                    ciberdelincuentes pueden obtener fácilmente acceso a las cuentas de \r\n                    los usuarios. Una vez que el hacker obtiene entrada a una cuenta, \r\n                    puede extraer más información e infiltrarse en otras cuentas. \r\n                    El gran problema es que el 87% de las pequeñas y medianas empresas \r\n                    no cuentan con políticas formales para el uso de internet y 70% de \r\n                    éstas carecen de políticas para empleados sobre el uso de las redes sociales.'),
	(20, '', 'VULNERABILIDADES DE DATOS EN LAS REDES SOCIALES', 'Actualmente ninguna de las redes sociales más visitadas, como Facebook y \r\n                    Twitter, tienen un fuerte puntaje de privacidad, por lo que las empresas \r\n                    deberían revisar sus políticas de seguridad en la utilización de internet \r\n                    por parte de sus empleados. Aunado a esto, los empleados utilizan cada vez \r\n                    más sus propios dispositivos móviles para uso de la empresa, por lo que la \r\n                    utilización de las redes sociales queda totalmente vulnerable, así como la \r\n                    información de la empresa.'),
	(22, '¿Cómo afectan las redes sociales la seguridad e integridad de las personas?', 'VULNERABILIDADES DE DATOS EN LAS REDES SOCIALES', 'Desde el momento en que la persona se anexa a una red social cualquiera,\r\n                        el individuo renuncia a la privacidad, esa información  se vuelve publica de \r\n                        acceso e interés general, por lo que cualquier compañía pasa a ser propietario\r\n                        de la información, es así como, por ejemplo, Facebook proporciona información a \r\n                        cualquier autoridad del mundo; los casos que se han demostrado que los \r\n                        mismos líderes venden nuestra información, en donde se supone que nuestros datos \r\n                        deberían ser solo nuestros, sin embargo, pasan a posesión de personas\r\n                        que ni siquiera conocemos.'),
	(24, 'Algunas de las vulnerabilidades para la obtención de datos en las redes sociales son:', 'VULNERABILIDADES DE DATOS EN LAS REDES SOCIALES', '                            1. <b>Contraseñas:</b> Crear una cuenta en una red social con nivel alto de seguridad es la principal \r\n                            forma de evitar ataques cibernéticos. La contraseña es la principal barrera entre los piratas \r\n                            informáticos ilegales y tu información personal. Cualquiera puede hackear cuentas online \r\n                            cuando el usuario asigna una contraseña muy común. <br/><br/>\r\n            \r\n                            2. <b>Amistades peligrosas:</b> Aceptar la solicitud de personas desconocidas puede ser un \r\n                            arma de doble filo para tu seguridad y privacidad. Hacerlo puede atraer a personas \r\n                            que se dedican por ejemplo a espiar un WhatsApp. Estos espías estarán pendientes de \r\n                            tus movimientos y sacarán provecho de la información que reveles. <br/><br/>\r\n            \r\n                            3. <b>Dominios seguros:</b> Algunas url no son tan seguras y pueden aumentar la posibilidad \r\n                            de ataques de piratas informáticos. Por colocar un caso, hackear una cuenta en \r\n                            Instagram es muy fácil cuando se accede a un dominio que no posee las señales de seguridad. <br/><br/>\r\n            \r\n                            4. <b>Abreviación de enlaces:</b> Los servicios que ayudan a abreviar enlaces (ej. Bit.ly y Tinyur) \r\n                            para que quepan en lugares más pequeños, también hacen un buen trabajo escondiendo los enlaces\r\n                            malware permitiendo que las víctimas no se den cuenta que están haciendo clic para instalarlo. <br/><br/>\r\n            \r\n                            5. <b>Trojanos:</b> La zona URL es similar a un banco Trojan, pero más astuto. Puede calcular el valor en \r\n                            la cuenta de su víctima y ayudar a decidir la prioridad para el ladrón. <br/><br/>\r\n            \r\n                            6. <b>Infiltración de información:</b> Los usuarios comparten demasiada información acerca de la \r\n                            organización, proyectos, productos, finanzas, cambios organizacionales, escándalos y \r\n                            otra información sensible en las redes. <br/><br/>\r\n            \r\n                            7. <b>Amenazas avanzadas persistentes (ATP):</b> Ésta es la inteligencia que recopila los datos \r\n                            de personas de alto nivel (ej. Ejecutivos, oficiales, individuos de alto poder adquisitivo) \r\n                            para quienes las redes sociales pueden ser una fuente importante de información. <br/><br/>\r\n            \r\n                            8. <b>Cruce de páginas web para falsificación de solicitudes (CSRF):</b> Este tipo de ataques aprovechan \r\n                            la confianza que brindan las aplicaciones de las redes sociales, al ingresar en el buscador de los\r\n                            usuarios. Siempre y cuando la aplicación de las redes sociales no refleje el encabezado del sitio \r\n                            referido, será más fácil iniciar un ataque. En el momento en el que un usuario comparte una imagen\r\n                            en una secuencia de eventos, otros usuarios podrán hacer clic para difundirla. <br/><br/>\r\n            \r\n                            9. <b>Impostores:</b> Muchos impostores han colectado cientos y miles de seguidores en Twitter. \r\n                            Los personificados se han avergonzado cuando los impostores se han hecho pasar por ellos. <br/><br/>\r\n            \r\n                            10. <b>Confianza:</b> Cuando un correo electrónico se vuelve popular o un mensaje instantáneo \r\n                            se convierte ubicuo, las personas confían en los enlaces, las fotos, los videos y \r\n                            ejecutables cuando vienen de parte de “amigos”.'),
	(26, '¿Cómo prevenir riesgos en redes sociales? ', 'VULNERABILIDADES DE DATOS EN LAS REDES SOCIALES', 'A continuación, se muestra un video donde menciana los siete consejos para prevenir riesgos en redes sociales.'),
	(28, '', 'VULNERABILIDADES MÁS ALTAS.', '            En la actualidad el tema de los sitios inseguros y sus vulnerabilidades toma fuerza con respecto a los distintos ciberataques que se realizan a estos, los cuales incrementa al mismo ritmo que va avanzando la tecnología y las redes sociales no son la excepción, Actualmente ninguna de las redes sociales más visitadas, como Facebook y Twitter, tienen un fuerte puntaje de privacidad, ya que estas no están exentas de ser vulneradas y para ello hay un sin fín de maneras. '),
	(30, 'Vulnerabilidades recurrentes.', 'VULNERABILIDADES MÁS ALTAS.', 'A lo largo de la existencia de las redes sociales tras su crecimiento tan avanzado y popularidad han llamado la atención de millones de personas también incluidos ciberdelincuentes, estos han tratado de explotar vulnerabilidades a lo largo del crecimiento de estos medios sociales, esto por medio de distintos ataques para obtener alguna información importante con la que puedan delinquir, por lo cual es importante conocer los tipos de ataques más recurrentes que estos emplean como los siguientes.'),
	(32, 'Vulnerabilidades recurrentes.', 'VULNERABILIDADES MÁS ALTAS.', '<b>Phishing:</b> es uno de los ataques mas comunes y recurrentes en los últimos tiempos, Jiménez. J (2020) menciona que este ataque consiste en mandar links falsos el cual su intención es que la víctima accedas a ellos, los cuales por lo regular nos piden algún método de autentificación de inicio de sesión, el cual al ser un link falso cualquier información que proporcionemos ira a parar a un servidor, el cual es controlado por esos piratas informáticos. \r\n                                                    <br>\r\n                                                    <br> <b>\r\n                                                    Phishing Bait:</b> Este tipo de ataque conocido como fishingBaith o mordiendo el anzuela es un tipo de ataque se realizado por ciber delincuentes por medio de un correo o en caso de las redes sociales una petición de autenticación, Según Forbes (2020) estas cuentan con la característica de tener argumentos ingeniosos siempre relacionados con la seguridad y la identidad o algún otro trámite donde sean requeridos datos de autenticación, en este tipo de ataques se pide que el usuario atacado introduzca las credenciales,\r\n                                                    espera a que esta página no se identifique en el buscador obteniendo así las credenciales del usuario.\r\n                                                    <br>\r\n                                                    <br><b>\r\n                                                    Fake News:</b> “Son todas aquellas noticias falsas, mensajes erróneos y cualquier publicación que solo busca desinformar o llamar la atención de los usuarios, pero en realidad es todo falso.\r\n                                                    De esta forma logran que la víctima haga clic en esos enlaces y vaya a parar a una página fraudulenta. También puede que nos lleven a la descarga de software malicioso”. (“Jiménez. J, 2020”)\r\n                                                    <br>\r\n                                                    <br><b>\r\n                                                    Complementos falsos:</b> Estas son herramientas de software malicioso que ofrecen una supuesta mejora para la aplicación, la cual su objetivo es infectar nuestro dispositivo para así robar nuestra información.\r\n                                                    <br>\r\n                                                    <br><b>\r\n                                                    Oversharing:</b> Este tipo de vulnerabilidad es meramente del usuario ya que esta ya que como explica Ramón. J (2019) consiste en que el usuario proporciona más información a sus redes de las que debería, haciendo así que sea un blanco perfecto para los ciberdelincuentes que quieran su información, este tipo no es tanto una vulnerabilidad en el sistema si no un conjunto de malos hábitos que conllevan a ser víctimas de distintos tipos de crímenes ya no tanto cibernéticos, esto por la sobreexposición social que tiene tu información en estos medios sociales.\r\n                                                    <br>\r\n                                                    <br><b>\r\n                                                    Vulnerabilidades existentes:</b> esto son vulnerabilidades que se generan dentro de la misma red social a causa de fallos que pueden llegar a ocurrir de los cuales explotan al máximo los ciber delincuentes para poder robar información, una de las recomendaciones que da a estos incidentes Jiménez. J (2020) “siempre tengamos las últimas versiones instaladas. Necesitamos contar con los parches y actualizaciones que haya disponibles y de esta forma evitar que nos afecten las vulnerabilidades”. \r\n                                                    <br>\r\n                                                    <br><b>\r\n                                                    Malware en los sistemas:</b> Es un problema de usuario el cual sucede que tengamos troyanos o keyloggers instalados ya en la maquina sin conocer de la existencia de estos. Estos malwares pueden ser utilizados para a través de este software malicioso, comprometer nuestras redes sociales.\r\n                                                    <br>\r\n                                                    <br><b>\r\n                                                    Fuerza bruta:</b> Consiste en probar contraseñas hasta que den con la correcta. Incluso podrían simplemente probar claves básicas y muy utilizadas.\r\n                                                    <br>\r\n                                                    <br><b>\r\n                                                    Botnets:</b> Los botnets son esos perfiles falsos que parecen colarse por todos lados para enviar spam e intentar “pescar” a alguien para que haga clic en sus enlaces. Para un usuario habitual de redes sociales resulta evidente cuándo un perfil está compartiendo contenido de forma masiva, y es precisamente el componente de masividad lo que los hace peligrosos, ya que estas botnets crean unas redes de perfiles falsos, en ocasiones, inmensas (“Arsenio. P,2019”).'),
	(34, 'Malas prácticas de los usuarios.', 'VULNERABILIDADES MÁS ALTAS.', 'Dentro de todas las vulnerabilidades de los sistemas la mas alta es la del usuario ya que pueden existir sistemas muy seguros pero estos estos están no se protegen de los actos mismos del usuario, ya que muchas veces el usuario es el causante de muchos de los posibles hackeos, esto debido a malas prácticas, por ello es de vital importancia para estar seguro no solamente contar con sistemas impenetrables sino con una buena higiene digital por parte del usuario.'),
	(36, 'Malas prácticas de los usuarios.', 'VULNERABILIDADES MÁS ALTAS.', '                                <b>\r\n                                Vulnerabilidad en las contraseñas:</b> crear una cuenta en una red social con grados altos de seguridad es una forma de evitar ataques cibernéticos. La contraseña es la defensa entre los piratas informáticos ilegales y tú información personal, cualquier sujeto puede hackear cuentas online cuando el usuario asigna una contraseña muy común. (“Ramón. J, 2019”)\r\n                                <br>\r\n                                <br><b>\r\n                                Amigos peligrosos:</b> Estos actos son un problema que compromete la seguridad personal y privacidad. Realizar estos actos puede traer personas peligrosas dedicadas al espionaje los cuales aprovecharán cualquier oportunidad de recolectar información valiosa.\r\n                                <br>\r\n                                <br><b>\r\n                                Dominios inseguros:</b> Algunas url no son tan seguras y puede crecer la posibilidad de ataques de hackers. Por ejemplo, hackear una cuenta en Instagram es muy legible cuando se accede a una condición que no posee una buena seguridad.'),
	(38, '', 'LEYES MEXICANAS QUE PROTEGEN LA PRIVACIDAD DE LOS DATOS EN REDES SOCIALES', 'Ley Federal de Protección de Datos Personales en Posesión a los Particulares, regula en específico,\r\n                            un Derecho Humano (DH) que consiste en la facultad de un individuo de controlar el tratamiento que se le da a su información personal. (Code, 2016).'),
	(40, '', 'LEYES MEXICANAS QUE PROTEGEN LA PRIVACIDAD DE LOS DATOS EN REDES SOCIALES', 'En México el derecho a la protección de datos personales tal como hoy lo conocemos, se reconoce por primera vez a nivel federal el 11 de julio de 2002, \r\n                  cuando fue publicada en el Diario Oficial de la Federación la Ley Federal de Transparencia y Acceso a la Información Pública Gubernamental.'),
	(42, '¿En qué consiste el derecho a la protección de datos personales?', 'LEYES MEXICANAS QUE PROTEGEN LA PRIVACIDAD DE LOS DATOS EN REDES SOCIALES', '<li> Poder controlar la información personal.</li>\r\n                          <li> Decidir con quién la compartes.</li>\r\n                          <li> Saber para que se utiliza.</li>\r\n                          <li> Exigir que se trate de forma adecuada.</li>\r\n                          <li> Evitar el mal uso de la misma.</li>\r\n                          <li> Permitir el ejercicio de otros derechos.</li>'),
	(44, 'Estudio AMIPCI en materia de redes sociales:', 'LEYES MEXICANAS QUE PROTEGEN LA PRIVACIDAD DE LOS DATOS EN REDES SOCIALES', 'De conformidad con el 10° Estudio sobre Hábitos de los Usuarios de Internet en México, elaborado por la AMIPCI, ya son más de 50 millones de \r\n                            usuarios de Internet en el país, en donde el 24% son personas de 13 a 18 años. (AsociaciónI, 2019). '),
	(46, '', 'ESTADÍSTICAS DEL USO DE LAS REDES SOCIALES EN LA ACTUALIDAD.', '                    En la actualidad el uso de las redes sociales va en aumento ya que según Paige Cooper (2020) se siguen registrando crecimientos bastante sustanciales lo cual es del 2019 al 2020 se registró un aumento en estas del 9.2%, lo cual equivale a 3.8 mil millones de personas. En la población actual el 84% de la población con acceso a internet lo emplea en las redes sociales.'),
	(48, 'Uso de las redes sociales en el mundo.', 'ESTADÍSTICAS DEL USO DE LAS REDES SOCIALES EN LA ACTUALIDAD.', 'En el mundo ocupan una parte importante en el consumo de internet, ya que este se ocupa la mayoría en redes sociales, se muestra en la imagen el consumo de estas de acuerdo al área demográfica del planeta. '),
	(50, '', 'ESTADÍSTICAS DEL USO DE LAS REDES SOCIALES EN LA ACTUALIDAD.', '<li>América Central y Asia Oriental (84%).</li>\r\n                                            <li>Sudamérica (83%).</li>\r\n                                            <li>Norte América (82%).</li>\r\n                                            <li>Sudeste de Asia (80%).</li>\r\n                                            <li>Norte de Europa (79%).</li>\r\n                                            <li>Asia Occidental (74%).</li>\r\n                                            <li>Oceanía (71%).</li>\r\n                                            <li>Europa del Sur (66%).</li>\r\n                                            <li>Europa Oriental (62%).</li>\r\n                                            <li>Europa del Este (57%).</li>\r\n                                            <li>Norte de África (55%).</li>\r\n                                            <li>África del Sur (49%).</li>\r\n                                            <li>Asia del Sur (36%).</li>\r\n                                            <li>Asia Central (30%).</li>\r\n                                            <li>África Occidental (21%).</li>\r\n                                            <li>África Oriental (13%).</li>\r\n                                            <li>África Media (10%).</li>'),
	(52, 'Tiempo dedicado a las redes sociales.', 'ESTADÍSTICAS DEL USO DE LAS REDES SOCIALES EN LA ACTUALIDAD.', 'De acuerdo a la investigación desarrollada por Pew. P (2019) las personas que utilizan internet en la actualidad 1h de cada 3h que la ocupan en redes sociales, este ha ido en incremento a lo largo de los años mostrándonos crecimientos de hasta el 15% en un año, pero esto se ve más en los jóvenes de entre 16 y 24 años los cuales pasan tres horas diarias en estos medios sociales.'),
	(54, 'Redes sociales más utilizadas en el mundo.', 'ESTADÍSTICAS DEL USO DE LAS REDES SOCIALES EN LA ACTUALIDAD.', 'Con el paso del tiempo las personas que acceden a internet incrementa ya que cada vez más hay más internautas navegando en este mundo, 4500 millones de personas son las que actualmente en 2020 tienen acceso a internet esto es un equivalente al 60% de la población mundial, casi la gran mayoría de estos internautas acceden a redes sociales ya que según el estudio realizado por  de Digital in 2020  son 3800 millones de usuarios en estos medios sociales equivalente al 84.44% de internautas en el mundo asiéndose notar así el impacto de estas que tienen en el uso de internet de estos, según Rafael Lucca. (2020) se registra una media de 6 horas y 43 minutos pasamos en internet de las cuales 2 horas y 24 minutos lo dedicamos a redes sociales, estas son accedidas en un 99 % desde el celular siendo este un factor muy importante para el fácil acceso a estas. A continuación, en la figura (##) se muestra un estudio estadístico realizado por Digital in 2020 en colaboración con Hootsuite, este de los usuarios de redes sociales desglosado por red social con más usuarios.'),
	(56, '', 'ESTADÍSTICAS DEL USO DE LAS REDES SOCIALES EN LA ACTUALIDAD.', '                                <b><li>Facebook</li></b>\r\n                                La red social que ostenta el primer lugar es Facebook con 2449 millones de usuarios el cual ha tenido un incremento de 178 millones con respecto al año anterior.\r\n                                <b><li>YouTube</li></b>\r\n                                El segundo lugar de una de las plataformas de entretenimiento en video con 2000 millones de usuarios, el cual obtuvo un crecimiento de 100 millones al año pasado.\r\n                                <b><li>WhatsApp</li></b>\r\n                                El tercer lugar es de WhatsApp una app de mensajería de donde puedes compartir diferentes contenidos como fotos, videos, esta cuenta 1600 millones de usuarios que con un aumento de 100 millones al año pasado. \r\n                                <b><li>Facebook Messenger</li></b>\r\n                                Messenger una herramienta de Facebook para mensajería directa casi como WhatsApp, esta cuenta con 1300 millones de usuarios. \r\n                                <b><li>Weixin/WeChat</li></b>\r\n                                App de mensajería creada en china la cual se puede toar como una aplicación contenedora de otras apps como Facebook, Instagram, Skye, Tinder, Amazon y Uber. Esta cuenta con 1151 millones de usuarios con un incremento de 68 millones con respecto al año anterior.\r\n                                <b><li>Instagram</li></b>\r\n                                Esta aplicación centrada en la publicación de lifeStyle por medio de fotos y video de la cotidianidad del usuario, cuenta con 1000 millones de usuarios esta cifra dada en 2018, ya que esta no a actualizado su información.\r\n                                <b><li>Douyin/TikTok</li></b>\r\n                                Aplicación enfocada al compartir videos cortos de 3 a 60 segundos, que estos mismos se repiten en bucle. Esta misma cuenta con 800 millones de usuarios con un incremento de 300 millones con respecto al año anterior así siendo la red social con mayor crecimiento en este este año. \r\n                                <b><li>QQ</li></b>\r\n                                Aplicación de mensajería instantánea que ofrece juegos online, música, películas y chat de voz. Esta cuenta con 731 millones de usuarios con un incremento de 72 millones de usuarios con respeto al año anterior.\r\n                                <b><li>QZone</li></b>\r\n                                Red social china que cuenta con 517 millones de usuarios el cual tuvo una pérdida de 17 millones en el año pasado.\r\n                                <b><li>Sina Weibo</li></b>\r\n                                Es una aplicación china creada como alternativa a la censura de redes social como Facebook y Twitter, la cual toma muchas características de estas. Esta cuenta con 497 millones de usuarios con un incremento de 51 millones con respecto al año anterior.\r\n                                <b><li>Reddit</li></b>\r\n                                Cuenta con 430 millones de usuarios la cual cuenta con un incremento de 100 millones de usuarios en el año pasado. \r\n                                <b><li>Snapchat</li></b>\r\n                                aplicación de mensajería instantánea que te permite enviar fotos y vídeos, parecida a otras que hemos comentado anteriormente. Esta cuenta con 382 millones de usuarios con un incremento de 95 millones con respeto al año anterior.\r\n                                <b><li>Twitter</li></b>\r\n                                Aplicación que permite compartir mensajes cortos de 280 caracteres. Esta cuenta con 340 millones de usuarios con un incremento de 14 millones con respecto del año anterior. \r\n                                <b><li>Pinterest</li></b>\r\n                                Red social centrada en compartir imágenes donde atravesó de tableros puedes crear y administrar imágenes y videos. Esta cuenta con 322 millones de usuarios con un incremento de 52 millones con respecto al año anterior.\r\n                                <b><li>Kuaishou</li></b>\r\n                                aplicación de origen chino para compartir vídeos similares a Instagram o Snapchat. Esta cuenta con 316 millones de usuarios.'),
	(58, 'Redes sociales más utilizadas en México.', 'ESTADÍSTICAS DEL USO DE LAS REDES SOCIALES EN LA ACTUALIDAD.', 'En México según el informe estadístico de Digital in 2020 apoyado por hootsuite nos muestra el ranking de medios sociales más utilizados, siendo YouTube como el líder en plataformas de social media, esta con un 96%, en segundo lugar tenemos a Facebook esta con 94%, así en tercer lugar a WhatsApp con un 89%, estas siendo las Redes sociales más utilizadas por los mexicanos, sin embargo hay un medio social que esta tomando fuerza rápidamente, esta es TikTok aun que esta esté aún muy por debajo de estas esta va avanzando rápido con su nivel de popularidad, esta es un medio digital originario de china  originalmente llamada Douyin el cual cambio su nombre para lanzamientos internacionales.');
/*!40000 ALTER TABLE `informacion` ENABLE KEYS */;

-- Volcando estructura para tabla ndpr.media
CREATE TABLE IF NOT EXISTS `media` (
  `Id_media` tinyint(3) NOT NULL AUTO_INCREMENT,
  `descripcion` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`Id_media`)
) ENGINE=InnoDB AUTO_INCREMENT=39 DEFAULT CHARSET=latin1;

-- Volcando datos para la tabla ndpr.media: ~19 rows (aproximadamente)
/*!40000 ALTER TABLE `media` DISABLE KEYS */;
INSERT INTO `media` (`Id_media`, `descripcion`) VALUES
	(2, 'imagen de Redes Sociales'),
	(4, 'Datos personales en las redes sociales'),
	(6, 'Vulnerabilidades de datos en las redes sociales'),
	(8, 'Vulnerabilidades más altas'),
	(10, 'Leyes mexicanas que protegen la privacidad de los datos en redes sociales'),
	(12, 'Estadisticas del uso de las redes sociales en la actualidad'),
	(14, '¿Como proteger nuestros datos personales?'),
	(16, 'DATOS PERSONALES EN LAS REDES SOCIALES imagen gif'),
	(18, 'imagen de las redes'),
	(20, 'fraudes'),
	(22, 'video 2'),
	(24, 'Vulnerabilidades recurrentes'),
	(26, 'Malas prácticas de los usuarios'),
	(28, 'inai'),
	(30, 'video 3'),
	(32, 'Uso de Redes Sociales en el mundo'),
	(34, 'Tiempo dedicado a las redes sociales.'),
	(36, 'Redes Sociales más utilizadas en el mundo'),
	(38, 'Redes sociales más utilizadas en México.');
/*!40000 ALTER TABLE `media` ENABLE KEYS */;

-- Volcando estructura para tabla ndpr.registro1
CREATE TABLE IF NOT EXISTS `registro1` (
  `id_com` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(50) DEFAULT NULL,
  `mensaje` text,
  `FH` datetime DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id_com`) USING BTREE
) ENGINE=InnoDB AUTO_INCREMENT=79 DEFAULT CHARSET=utf8mb4;

-- Volcando datos para la tabla ndpr.registro1: ~9 rows (aproximadamente)
/*!40000 ALTER TABLE `registro1` DISABLE KEYS */;
INSERT INTO `registro1` (`id_com`, `nombre`, `mensaje`, `FH`) VALUES
	(10, 'Andres', 'Muy buena página e información presentada', '2021-05-19 23:28:54'),
	(14, 'Elias Barrón', 'Merecen un 10, esta increible', '2021-05-20 00:26:03'),
	(16, 'Marcos', 'Muy buena la página y la información proporcionada', '2021-05-20 00:41:54'),
	(30, 'Fernanda', 'MUY BIEN', '2021-05-20 14:43:09'),
	(42, 'Oscar', 'Excelente', '2021-05-20 14:57:37'),
	(46, 'Elizabeth', 'Muy buena página, merecen que el Profe les ponga 100 jajaja', '2021-05-20 14:59:55'),
	(48, 'Jacqueline', 'Increible', '2021-05-20 15:02:34'),
	(76, 'Ana Karen', 'muy buena', '2021-05-24 17:16:39'),
	(78, 'edgar', 'Esta chida men \r\n', '2021-05-24 17:18:59');
/*!40000 ALTER TABLE `registro1` ENABLE KEYS */;

-- Volcando estructura para tabla ndpr.solicita
CREATE TABLE IF NOT EXISTS `solicita` (
  `Id_info` tinyint(3) NOT NULL,
  `Id_media` tinyint(3) NOT NULL,
  KEY `Id_info` (`Id_info`),
  KEY `Id_media` (`Id_media`),
  CONSTRAINT `solicita_ibfk_1` FOREIGN KEY (`Id_info`) REFERENCES `informacion` (`Id_info`),
  CONSTRAINT `solicita_ibfk_2` FOREIGN KEY (`Id_media`) REFERENCES `media` (`Id_media`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Volcando datos para la tabla ndpr.solicita: ~0 rows (aproximadamente)
/*!40000 ALTER TABLE `solicita` DISABLE KEYS */;
/*!40000 ALTER TABLE `solicita` ENABLE KEYS */;

-- Volcando estructura para tabla ndpr.usuarios
CREATE TABLE IF NOT EXISTS `usuarios` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `Nombre` varchar(50) DEFAULT NULL,
  `Correo` varchar(50) DEFAULT NULL,
  `Contrasena` varchar(200) DEFAULT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB AUTO_INCREMENT=41 DEFAULT CHARSET=latin1;

-- Volcando datos para la tabla ndpr.usuarios: ~18 rows (aproximadamente)
/*!40000 ALTER TABLE `usuarios` DISABLE KEYS */;
INSERT INTO `usuarios` (`Id`, `Nombre`, `Correo`, `Contrasena`) VALUES
	(3, 'Jacqueline', 'jacke.almaraz001@gmail.com', '12345678'),
	(4, 'Raul', 'raul.nn001@gmail.com', '1477852'),
	(5, 'Raul', 'raul.nn001@gmail.com', '1477852'),
	(11, 'me equivoque', 'lolo.al1@gmail.com', '147852'),
	(12, 'jose', 'leonel', '1234'),
	(13, 'jose', 'leonel', '147'),
	(14, 'mane', 'jac.almar1@gmail.com', 'jhi'),
	(15, 'Pablo', 'Pablo.loc@gmail.com', 'Luis'),
	(16, 'Mony', 'mmm.reno@gmail.com', 'jaja'),
	(17, 'Juan Diego', 'Diego198@gmail.com', '1234'),
	(22, 'Emmanuel', 'emmanuel.vegaledezma@gmail.com', '897758482'),
	(24, 'Angel', 'Angel@gmail.com', '1234567890'),
	(26, 'Alvero', 'emmanuel.vegaledezma@gmail.com', '1234567890'),
	(28, 'el cacas', 'pito@g', '1'),
	(32, 'EL MAIC', 'ELMAIC@gmail.com', '1234567890'),
	(34, 'EL CACAS', 'cacas@gmail.com', ''),
	(38, 'lo que sea', 'emmanuel.vegaledezma@gmail.com', '$2y$10$4UyG3Zm4ivnNWnwdaOkmwuPasv6bPwkQPFfPDu157zqfLWKNzKwyy'),
	(40, 'admin', 'prueba@gmail.com', '$2y$10$xTV0LI8xEPU2RrntdCUqCu99xRlt8DLIFLMNveUF/nOenYSwTyC5S');
/*!40000 ALTER TABLE `usuarios` ENABLE KEYS */;

-- Volcando estructura para tabla ndpr.video
CREATE TABLE IF NOT EXISTS `video` (
  `Id_media` tinyint(3) NOT NULL,
  `archivo_video` varchar(100) NOT NULL,
  KEY `Id_media` (`Id_media`),
  CONSTRAINT `video_ibfk_1` FOREIGN KEY (`Id_media`) REFERENCES `media` (`Id_media`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Volcando datos para la tabla ndpr.video: ~19 rows (aproximadamente)
/*!40000 ALTER TABLE `video` DISABLE KEYS */;
INSERT INTO `video` (`Id_media`, `archivo_video`) VALUES
	(14, 'videos/1.mp4'),
	(4, 'Datos personales en las redes sociales'),
	(2, 'imagen de Redes Sociales'),
	(6, 'Vulnerabilidades de datos en las redes sociales'),
	(8, 'Vulnerabilidades más altas'),
	(10, 'Leyes mexicanas que protegen la privacidad de los datos en redes sociales'),
	(12, 'Estadisticas del uso de las redes sociales en la actualidad'),
	(16, 'DATOS PERSONALES EN LAS REDES SOCIALES imagen gif'),
	(18, 'imagen de las redes'),
	(20, 'fraudes'),
	(22, 'videos/Cómo prevenir riesgos en redes sociales _ Seguridad en internet.mp4'),
	(24, 'Vulnerabilidades recurrentes'),
	(26, 'Malas prácticas de los usuarios'),
	(28, 'inai'),
	(30, 'videos/2.mp4'),
	(32, 'Uso de Redes Sociales en el mundo'),
	(34, 'Tiempo dedicado a las redes sociales.'),
	(36, 'Redes Sociales más utilizadas en el mundo'),
	(38, 'Redes sociales más utilizadas en México.');
/*!40000 ALTER TABLE `video` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
