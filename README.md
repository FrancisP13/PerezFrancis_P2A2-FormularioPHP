# Formulario para la Entrega de Tareas con Inputs HTML5 y Procesamiento en PHP

## 📋 Descripción
Este proyecto consiste en un formulario web creado con HTML5 y Bootstrap que permite a los estudiantes entregar trabajos o tareas.  
El formulario incluye todos los tipos de inputs HTML5 para capturar diversa información sobre el estudiante y el trabajo entregado, además de permitir la carga de archivos.
El backend está implementado en PHP para recibir los datos enviados y mostrar un resumen, además de manejar la subida del archivo adjunto.

## Tecnologías utilizadas
- HTML5  
- CSS (Bootstrap 5.3.7 via CDN)  
- PHP (para procesamiento del formulario y gestión de archivos)  

## Funcionalidades principales
- Captura de datos personales: nombre, correo, teléfono.  
- Selección y búsqueda de asignaturas y temas.  
- Elección del tipo de trabajo mediante radio buttons.  
- Entrada para número de páginas, URLs, y comentarios adicionales.  
- Soporte para subida de archivos (con almacenamiento en carpeta `uploads`).  
- Uso de múltiples inputs HTML5: email, tel, search, select, radio, number, url, file, month, week, date, datetime-local, textarea, password, range, time, color, hidden, checkbox.  
- Validaciones básicas con atributos HTML (`required`).  
- Presentación responsiva y estilizada con Bootstrap.

## Archivo principal
- `index.html`: Formulario con todos los campos mencionados y diseño Bootstrap.  
- `server.php`: Script PHP que procesa la información recibida, muestra todos los campos enviados y guarda el archivo subido en la carpeta `uploads`.

## Notas importantes
- La carpeta `uploads` debe tener permisos de escritura para que PHP pueda almacenar los archivos.  
- El archivo `server.php` debe ejecutarse en un servidor con PHP configurado (XAMPP, WAMP, LAMP, etc.).  
- No se ha implementado validación o sanitización avanzada, por lo que no es apto para producción sin mejoras en seguridad.

## 👤 Autor
**Francis Pérez**  
