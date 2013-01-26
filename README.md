# IXA FrameWork

Esta es la versión dos de IXA FrameWork

Después de trabajar con Grails, y conocer Rails y Laravel, volver a diseñar temas para WordPress parece un retroceso. Por esta raz+ón creo que podemos incorporar técnicas de dichos frameworks para agilizar el proceso,


## Objetivos

Los puntos básicos que IXA FrameWork deberá contener son los siguientes:

- Capcidad de Configuración via wp-admin de las configuraciones básicas
- Generar un tema desde cero, a partir de un comando en la terminal, tipo php ixa new nombre-tema [-v VERSION_WORDPRESS]
- Permitir el uso de _layouts_ y si se pudiera una integración son SiteMesh- Los layout deberían basarse en la manera en que WordPress determina el template. Sería recomendable el uso de layouts en tres niveles.
- Permitir instalar plugins dentro de un directorio, estos plugins o bundles propios del tema, y limitar el uso de plugins de WordPress a los aspectos que no tengan que ver con la presentacion. Incluirá Composer.
- Permitir la personalizacion de los temas a través de variables configurables dentro del nuevo deitor de WP 3.4+
- Permitir el desarrollo en dos o mas ambientes: localhost, produccion, pruebas, etc.
- Integración con Git, para control de Versiones y despliegue.
- Imágenes Responsive.
- Mejora en la utilización de assets y de ser posible incorporación con SASS, CoffeeScript.
- Utilizar bower o algún otro sistema, para poder incoporar plugins o frameworkd CSS o JavaScript

## Lineamientos

- Utilizara acciones y filtros nativos de WordPress, para permitir una integración total.
- Los plugins o bundles, exclusivamente utilizarán los hooks de WordPress e IXA Framework.
- Separación completa de presentación, contenido y funcionalidad.
- Utilizaremos los estándares web HTML5, CSS3.