<?php
**Solución**:

- **Global $db**: Uso de variable global para BD en vez de inyección de dependencia.
- **God Class**: La clase Usuarios tiene diferentes responsabilidades: obtener, crear, validar usuarios.
- **Duplicated Code**: Validaciones duplicadas en distintos métodos.
- **SQL Injection**: Interpolación directa de variables en querys.

**Mejoras**:

- Inyectar BD en constructor
- Separar en clases más pequeñas y enfocadas
- Centralizar validaciones en una clase Validator
- Usar consultas preparadas para prevenir inyección SQL

<ul></ul>