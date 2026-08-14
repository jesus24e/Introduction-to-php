# Introducción a PHP

![PHP](https://img.shields.io/badge/PHP-777BB4?style=for-the-badge&logo=php&logoColor=white)

Repositorio personal de ejercicios prácticos para aprender PHP desde los fundamentos hasta conceptos de uso frecuente en aplicaciones web. Cada archivo está pensado como un ejemplo pequeño e independiente: se puede abrir, ejecutar y modificar para observar el resultado.

## Tabla de contenidos

- [Temas cubiertos](#temas-cubiertos)
- [Estructura del proyecto](#estructura-del-proyecto)
- [Requisitos](#requisitos)
- [Instalación y uso](#instalación-y-uso)
- [Aprendizajes destacados](#aprendizajes-destacados)
- [Notas de uso](#notas-de-uso)

## Temas cubiertos

| Carpeta | Contenido | Ejercicios representativos |
| --- | --- | --- |
| [`introduccion_php`](introduccion_php) | Primeros pasos: salida con `echo`, comentarios, variables, sensibilidad a mayúsculas y constantes. | `script1.php` |
| [`syntaxis_tipos_de_datos`](syntaxis_tipos_de_datos) | Tipos escalares, cadenas, números, `null`, arreglos, conversiones y operadores aritméticos/comparativos. | `strings.php`, `array.php`, `conversion_tipos_datos.php`, `operadores.php` |
| [`estructuras_de_control`](estructuras_de_control) | Decisiones y flujo de ejecución con `if`, `switch`, operadores lógicos, ciclos `while`, `for` y `foreach`, además de `break` y `continue`. | `condicional_if.php`, `switch.php`, `for_each.php` |
| [`funciones_php`](funciones_php) | Declaración de funciones, parámetros, respuesta a formularios y alcance de variables con `global`. | `definiendo_funciones.php`, `global_scope.php` |
| [`formularios_php`](formularios_php) | PHP embebido en HTML, envío de datos, validación y saneamiento de entradas, reutilización con `include`/`require` y lectura de archivos. | `get_post/`, `validacion_datos/`, `include_require/`, `manejo_de_archivos.php` |
| [`bases_de_datos_php`](bases_de_datos_php) | Acceso a MySQL con MySQLi y PDO, además de MongoDB: conexión, CRUD, sentencias preparadas, transacciones y generación de respaldos SQL. | `mysqli/`, `pdo/`, `mongodb/`, `transacciones_sql.php` |
| [`conceptos_avanzados`](conceptos_avanzados) | Callbacks, funciones anónimas, `traits`, tipado, filtros, fecha y hora, JSON y operaciones FTP. | `callback.php`, `traits.php`, `type_hint.php`, `json_encode_decode.php` |
| [`POO_php`](POO_php) | Programación orientada a objetos: clases, objetos, interfaces, clases abstractas y anónimas, clonación y miembros estáticos. | `claseObjeto.php`, `interfaces.php`, `claseAbstracta.php`, `clonar_objetos.php` |
| [`namespaces`](namespaces) | Organización lógica de clases mediante namespaces, subnamespaces y referencias de nombres completamente calificadas. | `namespaces.php` |
| [`sesiones`](sesiones) | Inicio, almacenamiento, lectura y destrucción de datos de sesión con `$_SESSION`. | `sesion.php`, `sesionVariables.php` |
| [`ciberseguridad_php`](ciberseguridad_php) | Seguridad práctica: hashes de contraseñas, cookies, filtros, validación de nombres de archivo, operaciones de archivos y caché básica de salida. | `codigo_asegurado.php`, `hash.php`, `cookies.php`, `filtros/` |
| [`estructuras_avanzadas`](estructuras_avanzadas) | Referencias, generadores con `yield` y estructuras SPL de pila (LIFO) y cola (FIFO). | `referencias.php`, `generadores.php`, `estructura_de_pila.php` |
| [`expresioes_regulares`](expresioes_regulares) | Uso de expresiones regulares con `preg_match` para buscar y validar texto, correos, URLs, fechas y otros patrones. | `exp_reg.php` |
| [`manejo_errores`](manejo_errores) | Manejo de excepciones, códigos y mensajes de error, tipos de errores de PHP y configuración de visibilidad según el entorno. | `get_message_code.php`, `forma_de_mostrar_errores.php`, `errores/` |
| [`tabla_dinamica_php`](tabla_dinamica_php) | Consulta MySQLi y presentación dinámica de registros en una tabla HTML. | `tabla_dinamica.php` |

## Estructura del proyecto

```text
Introduction-to-php/
├── bases_de_datos_php/
│   ├── mongodb/
│   │   ├── consulta_mongo.php
│   │   ├── funciones_mongo_crud.php
│   │   └── nosql.php
│   ├── mysqli/
│   │   ├── actualizar_registros.php
│   │   ├── borrar_registros.php
│   │   ├── creacion_db.php
│   │   ├── ejemplo_conexion.php
│   │   └── leer_db.php
│   ├── pdo/
│       ├── conexion_prepare.php
│       ├── conexion_pdo.php
│       └── creacion_tabla_registro.php
│   ├── backup.php
│   └── transacciones_sql.php
├── ciberseguridad_php/
│   ├── archivos/
│   │   ├── archivo.txt
│   │   ├── fopen.php
│   │   └── manipulacion_archivos.php
│   ├── cache/
│   │   ├── bottomcache.php
│   │   └── topcache.php
│   ├── filtros/
│   │   ├── filter_id.php
│   │   ├── filter_input.php
│   │   ├── filter_sanitize.php
│   │   └── filter_var.php
│   ├── codigo_asegurado.php
│   ├── cookies.php
│   └── hash.php
├── composer.json
├── conceptos_avanzados/
│   ├── callback.php
│   ├── fecha_hora.php
│   ├── filtros.php
│   ├── ftp.php
│   ├── funciones_closures_o_anonimas.php
│   ├── json_encode_decode.php
│   ├── traits.php
│   └── type_hint.php
├── estructuras_de_control/
│   ├── break_continue.php
│   ├── condicional_if.php
│   ├── for.php
│   ├── for_each.php
│   ├── operadores_logicos.php
│   ├── switch.php
│   └── while.php
├── estructuras_avanzadas/
│   ├── estructura_de_pila.php
│   ├── estructuras_de_cola.php
│   ├── generadores.php
│   └── referencias.php
├── expresioes_regulares/
│   └── exp_reg.php
├── formularios_php/
│   ├── get_post/
│   │   ├── formulario.php
│   │   └── post.php
│   ├── include_require/
│   │   ├── footer.php
│   │   ├── header.php
│   │   └── index.php
│   ├── validacion_datos/
│   │   ├── formulario_validacion.php
│   │   └── funciones_validacion.php
│   ├── manejo_de_archivos.php
│   ├── miarchivo.txt
│   └── php_embedido.php
├── funciones_php/
│   ├── definiendo_funciones.php
│   └── global_scope.php
├── introduccion_php/
│   └── script1.php
├── manejo_errores/
│   ├── errores/
│   │   ├── errores.php
│   │   └── parse_error.php
│   ├── forma_de_mostrar_errores.php
│   └── get_message_code.php
├── namespaces/
│   └── namespaces.php
├── POO_php/
│   ├── claseAbstracta.php
│   ├── claseAnonima.php
│   ├── claseObjeto.php
│   ├── clonar_objetos.php
│   ├── interfaces.php
│   └── operador_resolucion_ambitos.php
├── sesiones/
│   ├── sesion.php
│   └── sesionVariables.php
├── syntaxis_tipos_de_datos/
│   ├── array.php
│   ├── conversion_tipos_datos.php
│   ├── enteros.php
│   ├── flotantes.php
│   ├── null.php
│   ├── operadores.php
│   ├── otros_num.php
│   └── strings.php
└── tabla_dinamica_php/
    └── tabla_dinamica.php
```

## Requisitos

| Herramienta | Uso |
| --- | --- |
| PHP 8.0 o superior | Ejecutar los ejercicios. Las funciones de validación incluyen `str_contains`, `str_starts_with` y `str_ends_with`, disponibles desde PHP 8. |
| XAMPP, Laragon, WampServer o equivalente | Servidor web local con PHP; XAMPP también facilita el uso de Apache y MySQL. |
| MySQL/MariaDB | Necesario únicamente para los ejercicios de `bases_de_datos_php`. |
| Extensiones `mysqli`, `pdo_mysql` y `ftp` | `mysqli` y `pdo_mysql` se requieren para sus respectivos ejemplos de base de datos; `ftp` se usa solo en `conceptos_avanzados/ftp.php`. |
| Composer, MongoDB y extensión `mongodb` | Necesarios únicamente para `bases_de_datos_php/mongodb/`; la dependencia `mongodb/mongodb` está declarada en `composer.json`. |

## Instalación y uso

1. Clona el repositorio:

   ```bash
   git clone https://github.com/jesus24e/Introduction-to-php.git
   ```

2. Si utilizas XAMPP, deja el proyecto dentro de `htdocs` y enciende Apache desde el panel de control. Para los ejercicios de base de datos, enciende también MySQL.

3. Abre en el navegador el archivo que deseas estudiar. Por ejemplo:

   ```text
   http://localhost/Introduction-to-php/formularios_php/validacion_datos/formulario_validacion.php
   ```

   No hay un punto de entrada único: los ejercicios son independientes y se recorren directamente por carpeta y archivo.

4. Alternativamente, con PHP instalado puedes iniciar el servidor integrado desde la raíz del proyecto:

   ```bash
   php -S localhost:8000
   ```

   Después visita, por ejemplo, `http://localhost:8000/introduccion_php/script1.php`.

5. Para los ejemplos MySQLi, ejecuta primero `bases_de_datos_php/mysqli/creacion_db.php`. Este crea la base `test_php`, la tabla `empleados` y un registro de muestra; después puedes probar la lectura, actualización y eliminación. Los ejemplos de `bases_de_datos_php/pdo/` usan esa base y muestran consultas y registros con PDO.

6. Para los ejemplos de MongoDB, instala las dependencias con `composer install`, habilita la extensión `mongodb` de PHP y asegúrate de tener el servidor MongoDB en ejecución. El archivo `bases_de_datos_php/mongodb/nosql.php` incluye una guía de instalación para XAMPP en Windows.

## Aprendizajes destacados

Los propios comentarios de los ejercicios recogen estas ideas importantes:

| Tema | Idea para recordar |
| --- | --- |
| Variables y comparaciones | PHP distingue mayúsculas de minúsculas en los nombres de variables. Para comparar valor y tipo, usa el operador estricto `===`. |
| Alcance | Una función no accede directamente a variables externas; el ejemplo `global_scope.php` muestra el uso de `global` para hacerlo. |
| Datos de formularios | `formulario_validacion.php` aplica `trim`, `stripslashes` y `htmlspecialchars` antes de mostrar las entradas. |
| Archivos | `manejo_de_archivos.php` documenta los modos de `fopen`, incluidos los que leen, escriben, agregan o truncan contenido. |
| MySQLi | Para conectarse con MySQLi, debe estar habilitada la extensión `mysqli` en el archivo `php.ini`. |
| Resultados SQL | Las funciones `mysqli_fetch_*` avanzan el cursor del resultado: combinar lecturas consecutivas afecta el registro que se obtiene después. |
| Fecha y hora | La zona horaria puede definirse con `date_default_timezone_set()` o configurarse en `php.ini`. |
| JSON | El segundo argumento de `json_decode` determina si el resultado se trabaja como objeto o arreglo asociativo. |
| PDO | PDO admite distintos motores de base de datos y facilita el uso de excepciones y sentencias preparadas con parámetros. |
| Sesiones y cookies | Ambos mecanismos deben iniciarse o enviarse antes de producir salida HTML; las cookies se reflejan a partir de la siguiente solicitud. |
| Contraseñas y archivos | Usa `password_hash` para hashes y valida tanto el usuario como el nombre de archivo para reducir riesgos de rutas maliciosas. |
| Generadores y SPL | `yield` pausa y reanuda una función para iterar eficientemente; `SplStack` implementa LIFO y `SplQueue`, FIFO. |
| Errores | Los ejemplos diferencian avisos, advertencias, excepciones, errores de parseo y errores fatales para entender su efecto en la ejecución. |
| Expresiones regulares | `preg_match` permite buscar y validar patrones; las anclas, modificadores, cuantificadores y clases de caracteres definen reglas precisas. |
| Transacciones y respaldos | Desactiva el autocommit para agrupar operaciones y usa `commit` o `rollback` según el resultado; un respaldo puede generar sentencias SQL descargables. |
| MongoDB | La biblioteca se instala con Composer y sus colecciones permiten CRUD, filtros con operadores, conteos y valores distintos. |
| Entornos | La visualización de errores debe habilitarse en desarrollo y desactivarse en producción para no exponer información sensible. |

## Notas de uso

- Las credenciales y los datos de FTP o MySQL incluidos son valores de demostración para un entorno local. No publiques credenciales reales en un repositorio.
- Algunos ejemplos se concentran en explicar una instrucción concreta, no en constituir una aplicación completa. Experimenta cambiando los valores y revisa el resultado paso a paso.
- Si utilizas una versión reciente de PHP, consulta la documentación oficial ante avisos de obsolescencia y adapta los ejemplos como parte del aprendizaje.

---

Hecho solo para practicar entender PHP.
