# Sistema de Inventario de Equipos Informáticos para la Institución H. Gobierno Provincial de Tungurahua

Este proyecto es un sistema de inventario de equipos informáticos desarrollado para la Institución H. Gobierno Provincial de Tungurahua. El sistema ha sido construido utilizando el framework Laravel y la librería Livewire para facilitar la interacción en tiempo real con los datos. A continuación, se detallan los aspectos clave del desarrollo.

## Descripción del Proyecto

El objetivo principal de este proyecto es proporcionar a la Institución H. Gobierno Provincial de Tungurahua una herramienta eficiente para gestionar su inventario de equipos informáticos. El sistema permite llevar un registro detallado de los equipos, gestionar su asignación y mantenimiento, así como generar informes para facilitar la toma de decisiones.

## Tecnologías Utilizadas

- **Laravel**: Se ha utilizado el framework de desarrollo web PHP Laravel para la construcción del backend del sistema. Laravel proporciona una estructura sólida y herramientas poderosas que facilitan el desarrollo rápido y eficiente de aplicaciones web.

- **Livewire**: Livewire se ha empleado para la construcción de componentes interactivos en tiempo real. Esta librería permite crear interfaces de usuario dinámicas sin necesidad de escribir código JavaScript, lo que simplifica el desarrollo y mejora la experiencia del usuario.

## Requerimientos del Sistema

El desarrollo del sistema se basó en los siguientes requerimientos:

- **Gestión de Usuarios**: El sistema debe permitir la creación, edición y eliminación de usuarios con diferentes niveles de acceso, como administradores, técnicos y personal de mantenimiento.

- **Gestión de Equipos**: Debe ser posible agregar, editar y eliminar equipos informáticos del inventario, así como llevar un registro detallado de su estado, especificaciones técnicas y ubicación.

- **Asignación de Equipos**: Se requiere la capacidad de asignar equipos a usuarios específicos, registrar el historial de asignaciones y gestionar la disponibilidad de los equipos.

- **Mantenimiento de Equipos**: Debe ser posible registrar las actividades de mantenimiento realizadas en cada equipo, incluyendo reparaciones, actualizaciones y revisiones periódicas.

## Diseño de la Base de Datos

El diseño de la base de datos del sistema sigue una estructura relacional que incluye las siguientes tablas principales:

- **Usuarios**: Almacena la información de los usuarios del sistema, incluyendo su nombre, correo electrónico y rol.

- **Equipos**: Contiene los detalles de los equipos informáticos en el inventario, como número de serie, modelo, estado, etc.

- **Asignaciones**: Registra las asignaciones de equipos a usuarios específicos, junto con información relevante como la fecha de asignación y el estado del equipo.

- **Mantenimientos**: Almacena el historial de actividades de mantenimiento realizadas en cada equipo, incluyendo la fecha, tipo de mantenimiento y observaciones.

Para obtener más detalles sobre la estructura de la base de datos, consultar el archivo `database_schema.sql` incluido en el repositorio.

## Contribución

- Ludwing Barriga
- Javier Jiménez
