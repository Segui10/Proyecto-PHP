create database blog;
use blog;

CREATE TABLE IF NOT EXISTS `posts` (
  `id_post` int(11) NOT NULL AUTO_INCREMENT,
  `titulo` varchar(100) DEFAULT NULL,
  `autor` varchar(100) DEFAULT NULL,
  `cuerpo` text,
  `fecha` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id_post`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Volcado de datos para la tabla `posts`
--

INSERT INTO `posts` (`id_post`, `titulo`, `autor`, `cuerpo`, `fecha`) VALUES
(1, 'Post de codeigniter', 'Juan', 'Este es un post sobre el framework de codeIgniter', '2012-05-28 08:54:59'),
(2, 'Post de php orientado a objetos', 'Manuel Perez', 'Este es un post sobre php orientado a objetos', '2012-05-28 08:56:20'),
(3, 'Registro de usuarios con php', 'Jose Luís', 'En este post haremos un registro de usuarios con php orientado a objetos', '2012-05-28 08:57:29'),
(4, 'Login de usuarios con php', 'Manuel', 'Esta vez crearemos un login de usuarios con php', '2012-05-28 09:22:42'),
(5, 'Contar las visitas que tiene mi web', 'Jose Luís', 'En este post haremos un contador de visitas que tiene nuestra web', '2012-05-28 09:22:50');
