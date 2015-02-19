

-- MySQL Workbench Forward Engineering

SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='TRADITIONAL,ALLOW_INVALID_DATES';

-- -----------------------------------------------------
-- Schema portal_daw
-- -----------------------------------------------------

-- -----------------------------------------------------
-- Schema portal_daw
-- -----------------------------------------------------
CREATE SCHEMA IF NOT EXISTS `portal_daw` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci ;
USE `portal_daw` ;

-- -----------------------------------------------------
-- Table `portal_daw`.`categoria`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `portal_daw`.`categoria` (
  `id_categoria` INT NOT NULL AUTO_INCREMENT,
  `nombre_categoria` VARCHAR(100) NULL,
  PRIMARY KEY (`id_categoria`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `portal_daw`.`noticia`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `portal_daw`.`noticia` (
  `id_noticia` INT NOT NULL AUTO_INCREMENT,
  `titular_noticia` LONGTEXT NOT NULL,
  `subtitulo_noticia` LONGTEXT NOT NULL,
  `body_noticia` LONGTEXT NOT NULL,
  `portada_noticia` LONGTEXT NOT NULL,
  `autor_noticia` VARCHAR(100) NOT NULL,
  `fecha_noticia` DATE NOT NULL,
  `categoria_id_categoria` INT NOT NULL,
  PRIMARY KEY (`id_noticia`, `categoria_id_categoria`),
  INDEX `fk_noticia_categoria_idx` (`categoria_id_categoria` ASC),
  CONSTRAINT `fk_noticia_categoria`
    FOREIGN KEY (`categoria_id_categoria`)
    REFERENCES `portal_daw`.`categoria` (`id_categoria`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `portal_daw`.`usuario`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `portal_daw`.`usuario` (
  `id_usuario` INT NOT NULL AUTO_INCREMENT,
  `nombre_usuario` VARCHAR(45) NOT NULL,
  `edad_usuario` INT NOT NULL,
  `pass_usuario` VARCHAR(45) NOT NULL,
  PRIMARY KEY (`id_usuario`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `portal_daw`.`concurso_foto`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `portal_daw`.`concurso_foto` (
  `id_foto` INT NOT NULL AUTO_INCREMENT,
  `url_foto` LONGTEXT NOT NULL,
  `titulo_foto` VARCHAR(100) NOT NULL,
  `body_foto` LONGTEXT NULL,
  `puntuacion_foto` DECIMAL(2,1) NOT NULL,
  `autor_foto` VARCHAR(60) NOT NULL,
  PRIMARY KEY (`id_foto`))
ENGINE = InnoDB;


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;






INSERT INTO `portal_daw`.`usuario` (`id_usuario`, `nombre_usuario`, `edad_usuario`, `pass_usuario`) VALUES ('NULL', 'jorgea', '26', 'jorgea');
INSERT INTO `portal_daw`.`usuario` (`id_usuario`, `nombre_usuario`, `edad_usuario`, `pass_usuario`) VALUES ('NULL', 'reyesm', '27', 'reyesm'), ('NULL', 'alejandrom', '25', 'alejandrom');


INSERT INTO `portal_daw`.`categoria` (`id_categoria`, `nombre_categoria`) VALUES ('NULL', 'Hardware');
INSERT INTO `portal_daw`.`categoria` (`id_categoria`, `nombre_categoria`) VALUES ('NULL', 'Apps');
INSERT INTO `portal_daw`.`categoria` (`id_categoria`, `nombre_categoria`) VALUES ('NULL', 'Videojuegos');



INSERT INTO `portal_daw`.`noticia` (`id_noticia`, `titular_noticia`, `subtitulo_noticia`, `body_noticia`, `portada_noticia`, `autor_noticia`, `fecha_noticia`, `categoria_id_categoria`) VALUES ('NULL', 'Google «congela» sus gafas mágicas', 'La compañía dará por finiquitado el lunes el programa de desarrolladores. El gigante de Mountain View creará una división específica para repensar el dispositivo y recuperar el interés inicial con un nuevo modelo.', 'Es probable que entre tanto rumor, noticia y comunicado algún que otro usuario haya sentido un ligero mareo similar al que uno experimenta cuando «calza» unas lentes que no son de su graduación. Google jubila este lunes a sus «exploradores», ese grupo de personas que han podido trabajar con sus gafas de realidad virtual Google Glass desde que las pusiese en juego en 2012. Tras cerrar las cuatro tiendas físicas que tenían repartidas entre Estados Unidos y Londres, el gigante de Mountain View ha anunciado que el próximo lunes pone punto y final al programa de desarrolladores así como la venta de este «gadget».

A pesar de que la decisión podría emborronar aún más el futuro de este proyecto, desde el corazón del buscador más utilizado de internet afirman que se trata de un paso atrás para coger impulso y repensar algunos aspectos de esta primera versión. Según recoge «The Wall Street Journal», la multinacional pretende reinventarlo y lanzar una nueva versión a lo largo de este año o a principios del que viene.

Y para reafirmar esta voluntad, creará un equipo dedicado en exclusiva a este dispositivo, apartándolo así de la lista de tareas de la conocida como División «X», un departamento responsable, entre otras cosas, de la red de globos con los que llevar internet a lugares remotos. El trabajo realizado deberá contar, en último término, con la bendición de Tony Fadell, rector de la sección dedicada a los termostatos inteligentes Nest, que controlará los avances del equipo dirigido por Ivy Rosse.

Esta noticia llega tras un largo rosario de episodios que han tenido como resultado que la enorme expectación que se generó con su presentación haya ido menguando progresivamente e incluso el invento corrió peligro de caer en el ostracismo tecnológico.', 'http://www.abc.es/Media/201501/19/Glass--644x200.jpg', 'jorgea', '2015-01-08', '1');




INSERT INTO `portal_daw`.`noticia` (`id_noticia`, `titular_noticia`, `subtitulo_noticia`, `body_noticia`, `portada_noticia`, `autor_noticia`, `fecha_noticia`, `categoria_id_categoria`) VALUES ('NULL', 'España se pone las pilas en los videojuegos', 'Los estudios independientes lanzan originales títulos con poco presupuesto y mucho talento', 'España es gran cosumidor de videojuegos, en concreto, el cuarto país europeo con mayor gasto en ocio interactivo digital; pero un pequeño productor. La dinámica habitual es que el talento español es comprado para cumplir encargos de grandes compañías extranjeras. No hay industria, solo algunas empresas con éxito, como Novarama, Tequila Works, Digital Legends o Mercury Steam. Este año no hay un título de tan gran presupuesto como «Castlevania Lords of Shadows 2», de Mercury Steam, lanzado el año pasado; pero sí hay expectación por juegos llenos de talento.', 'http://www.abc.es/Media/201501/18/rime-imagen--644x362.jpg', 'reyesm', '2014-12-16', '3');




INSERT INTO `portal_daw`.`noticia` (`id_noticia`, `titular_noticia`, `subtitulo_noticia`, `body_noticia`, `portada_noticia`, `autor_noticia`, `fecha_noticia`, `categoria_id_categoria`) VALUES ('NULL', 'Objetivo: devolver un móvil que alguien se ha dejado olvidado', 'Una «app» moderniza las oficinas de objetos perdidos y ofrece recompensa por devolver las pertenencias a sus dueños', 'Imagine que esta noche, en los aseos de un restaurante, encuentra casualmente uno de los últimos «smartphones» disponibles en el mercado. ¿Qué haría? ¿Se compadecería de su dueño y lo devolvería o, por el contrario, lo guardaría en su bolsillo sin más, como si nada hubiera ocurrido?

Hoy son escasas las facetas de nuestra vida que todavía no han sucumbido a la «inmersión tecnológica» que todo quiere acapararlo. Las oficinas de objetos perdidos, esos lugares que tantos objetos e historias atesoran en sus polvorientas estanterías, podrían pasar pronto a la historia para dar paso a otros espacios virtuales y en los que personas de todas partes contactan entre sí para localizar y devolver aquello que han encontrado en un cuarto de baño o una estación de tren. Esta es precisamente la esencia de Ouner.com, un proyecto ideado por David Martín Calvo y al que ya respaldan varios premios. Para empezar, el concurso «Tunegocioenuntweet», que otorgaba 25.000 euros al emprendedor que mejor explicara su idea de negocio en 140 caracteres y que este joven de 28 años se llevó sin despeinarse.

La idea de David Martín Calvo es sencilla: incentivar la devolución de objetos a sus dueños ofreciendo un premio a cambio. El funcionamiento, además, es de lo más simple. Solo tiene que registrar su objeto en Ouner.com y proporcionar tanta información como le sea posible: modelo, número de serie... Si un día lo pierde, o se lo roban, aquel que lo encuentre solo tendrá que acceder a la web de Ouner.com y contactar con usted. La recompensa para el buen samaritano variará dependiendo del objeto localizado y el estado en que este sea devuelto a su dueño.

«Estuve un tiempo en Inglaterra y descubrí que contaban con un sistema muy similar. Da mucha rabia perder un ''smartphone'' o una tableta, por eso pensé que estaría bien buscar una forma de incentivar a la gente a devolver este tipo de objetos a cambio de un ''premio''». Por el momento, David y su socio no han invertido un solo euro en publicidad y las buenas palabras que hoy día respaldan a Ouner.com son solo fruto del poderoso «boca a boca».

«Nos gustaría colaborar con la Policía»
Pero el proyecto de estos jóvenes emprendedores va más allá de lo que a priori parece. Ouner.com no pretende ser tan solo una «app» de contacto entre particulares para localizar objetos perdidos sino que sus creadores pretenden colaborar con distintas entidades públicas para que de este modo, y a través de los datos que los ciudadanos registren en su web, sea más sencillo para las autoridades aclarar un caso de robo u otro delito. «Es una pena, por ejemplo, que una persona no pueda recuperar su televisión robada. Muchas veces, por no saber quién es el dueño o por no haber hecho bien la denuncia al carecer de factura, este tipo de objetos acaba en subastas públicas en lugar de regresar a manos del propietario».', 'http://www.abc.es/Media/201501/17/moviles--644x362.jpg', 'alejandroma', '2014-10-21', '2');





INSERT INTO `portal_daw`.`concurso_foto` (`id_foto`, `url_foto`, `titulo_foto`, `body_foto`, `puntuacion_foto`, `autor_foto`) VALUES ('NULL', 'http://i.kinja-img.com/gawker-media/image/upload/s--i4PLnyMb--/c_fit,fl_progressive,q_80,w_636/763812645816285610.jpg', 'Cazadores de auroras', 'Fotógrafos retratando la aurora boreal en Rystad, Islas Lofoten (Noruega).', '7.6', 'Marc Gee ');

INSERT INTO `portal_daw`.`concurso_foto` (`id_foto`, `url_foto`, `titulo_foto`, `body_foto`, `puntuacion_foto`, `autor_foto`) VALUES ('NULL', 'http://i.kinja-img.com/gawker-media/image/upload/s--qWThMqfo--/c_fit,fl_progressive,q_80,w_636/763812646167315114.jpg', 'Amanecer en Seoraksan', 'Viendo amanecer después de 19 horas de caminata en el Parque Nacional Seoraksan (Corea del Sur).', '8.2', 'Ka Shim');

INSERT INTO `portal_daw`.`concurso_foto` (`id_foto`, `url_foto`, `titulo_foto`, `body_foto`, `puntuacion_foto`, `autor_foto`) VALUES ('NULL', 'http://i.kinja-img.com/gawker-media/image/upload/s--Fy4cTFLi--/c_fit,fl_progressive,q_80,w_636/763812645167343018.jpg', 'A través del ojo del antílope', 'Reflejo del Parque Nacional de Yellowstone en el ojo de un antílope americano. Se aprecia la propia sombra del animal y el fotógrafo al fondo. Parque Nacional de Yellowstone, Estados Unidos.', '6.3', 'Joshua Savage');

INSERT INTO `portal_daw`.`concurso_foto` (`id_foto`, `url_foto`, `titulo_foto`, `body_foto`, `puntuacion_foto`, `autor_foto`) VALUES (NULL, 'http://img01.quesabesde.com/media/img/concurso/79000/442232-357c16aeef258931ee3a88cef6358c07.jpg', 'Sedación en Tanzania', 'Este niño ha sido sedado y está a la espera de una operación en el hospital de Chake-Chake, Penba, Tanzania', '4', 'Leonardo Saenz');

INSERT INTO `portal_daw`.`concurso_foto` (`id_foto`, `url_foto`, `titulo_foto`, `body_foto`, `puntuacion_foto`, `autor_foto`) VALUES (NULL, 'http://img01.quesabesde.com/media/img/concurso/79000/446553-1a98953c04884fdee6169f3f66b6bdaf.jpg', 'Peluqueria en Xi''an', 'Fotografía tomada a un peluquero chino en una aldea cerca de Xi''an.', '3', 'Rubén Chon');

INSERT INTO `portal_daw`.`concurso_foto` (`id_foto`, `url_foto`, `titulo_foto`, `body_foto`, `puntuacion_foto`, `autor_foto`) VALUES (NULL, 'http://img01.quesabesde.com/media/img/concurso/79000/438208-a786584068e8f781b770a664762f4098.jpg', 'Track Repair', 'Fotografía tomada en Merzouga de un niño reparando un camión.', '6', 'Victor Ruiz');

INSERT INTO `portal_daw`.`concurso_foto` (`id_foto`, `url_foto`, `titulo_foto`, `body_foto`, `puntuacion_foto`, `autor_foto`) VALUES (NULL, 'http://img01.quesabesde.com/media/img/concurso/79000/776489-ab8bca166e894cf6ec767e4c4d7e8849.jpg', 'Soledad inerida al hombre', 'Hombre sentado en la iglesia de San Breñon', '2', 'Gustavo Mendoza');

INSERT INTO `portal_daw`.`concurso_foto` (`id_foto`, `url_foto`, `titulo_foto`, `body_foto`, `puntuacion_foto`, `autor_foto`) VALUES (NULL, 'http://img01.quesabesde.com/media/img/concurso/80000/071608-5d7096e76f96fb91cfe4329dabf277b1.jpg', 'Infancia regresiva', 'Me encanta ver a mi hija jugando con juguetes sencillos que potencien su imaginación ! Aquí nosotros vemos cuatro muñecos solamente, pero ella está viendo todo Neverland al completo !', '8', 'Jorgi Cruz Santos');

INSERT INTO `portal_daw`.`concurso_foto` (`id_foto`, `url_foto`, `titulo_foto`, `body_foto`, `puntuacion_foto`, `autor_foto`) VALUES (NULL, 'http://img01.quesabesde.com/media/img/concurso/80000/594223-b91270bafc15bacbd0b84e5a8127687c.jpg', 'Obejas Power', 'Regreso de las obejas al establo con sus crias en la Finca de Dehesa de Calstilseras_Minas de Almaden y su recelo al encontrar personal extraño en su espacio', '5', 'Emmanuel Santos');








INSERT INTO `portal_daw`.`noticia` (`id_noticia`, `titular_noticia`, `subtitulo_noticia`, `body_noticia`, `portada_noticia`, `autor_noticia`, `fecha_noticia`, `categoria_id_categoria`) VALUES ('NULL', 'WhatsApp Plus sucumbe a las presiones de WhatsApp y anuncia su cierre', 'WhatsApp Plus sucumbe a las presiones de WhatsApp y anuncia su cierre', 'Con más de 700 millones de usuarios, WhatsApp es una de las aplicaciones de mensajería instantánea más populares del mundo. Sin embargo, no todos sus fans utilizan la app oficial. WhatsApp Plus, una modificación no autorizada creada por un programador español, ha logrado alcanzar una gran popularidad al ofrecer funciones inéditas no disponibles en el software original. Hoy ha tenido que cerrar sus puertas.
Esta mañana miles de usuarios de WhatsApp Plus de todo el mundo se despertaban con la sorpresa de que WhatsApp había suspendido temporalmente sus cuentas bajo la sospecha de que habían infringido los términos del servicio al usar una aplicación no oficial.
La filial de Facebook informa de ello en su página de preguntas frecuentes: "WhatsApp Plus no es una aplicación autorizada por parte de WhatsApp. WhatsApp Plus no está asociada con WhatsApp y no apoyamos a WhatsApp Plus. WhatsApp no puede garantizar la seguridad de WhatsApp Plus y su uso puede poner en riesgo los datos personales y privados en tu teléfono móvil. [...] Debes desinstalar esta aplicación y descargar una versión autorizada de WhatsApp desde nuestro sitio web o desde Google Play. Luego podrás usar WhatsApp."
WhatsApp Plus se hizo popular por características como el uso de los emoticonos de Google Hangouts y numerosos temas de personalización. El programa sigue usando los servidores de WhatsApp para enviar los mensajes a sus destinatarios, por lo que la compañía puede identificar fácilmente los dispositivos que utilizan WhatsApp Plus y bloquear sus perfiles como ha sucedido hoy.
A consecuencia de la suspensión de perfiles de hoy y de una carta remitida por WhatsApp al desarrollador de la aplicación, WhatsApp Plus dejará de estar disponible. "Lo siento profundamente, pero esto no está en nuestras manos y WhatsApp nos ha acorralado esta vez", ha señalado en Google+ el responsable de la comunidad de WhatsApp Plus.', 'http://wasap.ninja/wp-content/uploads/2014/10/whatsapp-vs-whatsapp-plus.png', 'jorgea', '2015-01-21', '2');

