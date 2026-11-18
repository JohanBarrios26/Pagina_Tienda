# Tienda en línea (PHP + MySQL)

Tienda virtual con catálogo, carrito de compras, pago con PayPal y panel de administración. Está hecha con **PHP puro y una arquitectura MVC propia** (sin framework), sobre una base de datos **MySQL**.

> Proyecto de 2023. Es mi primer desarrollo de comercio electrónico completo: del catálogo al pedido.

## Qué incluye

**Para el cliente**
- Catálogo de productos organizado por categorías.
- Búsqueda de productos.
- Carrito de compras que calcula subtotales y total.
- Pago con PayPal en pesos colombianos (COP).
- Correo de confirmación con PHPMailer.

**Para el administrador**
- Panel con acceso por usuario y contraseña.
- Gestión de productos, categorías, clientes, pedidos y usuarios.
- Tablas con búsqueda y paginación (DataTables).

## Cómo está organizado

```text
Controllers/   Lógica de cada pantalla (Principal, Productos, Pedidos, Admin...)
Models/        Consultas a la base de datos, una clase por entidad
Views/         Plantillas HTML/PHP (tienda pública y panel admin)
config/        Configuración, conexión y utilidades
assets/        CSS, JavaScript e imágenes
admin/         Módulos del panel de administración
tienda-online.sql   Estructura de la base de datos y datos de ejemplo
```

Base de datos: `categorias`, `productos`, `clientes`, `pedidos`, `detalle_pedidos` y `usuarios`.

## Tecnologías

PHP · MySQL · JavaScript · HTML y CSS · PayPal Checkout · PHPMailer (Composer) · DataTables · Font Awesome

## Cómo ejecutarlo en tu equipo

Necesitas XAMPP (o cualquier servidor con PHP 8 y MySQL) y Composer.

1. Copia el proyecto en `htdocs/tienda-online`.
2. Importa `tienda-online.sql` en MySQL (phpMyAdmin) con el nombre `tienda-online`.
3. Instala las dependencias:
   ```bash
   composer install
   ```
4. Copia `config/config.example.php` como `config/config.php` y completa tus datos: base de datos, `CLIENT_ID` de PayPal (modo sandbox) y credenciales SMTP.
5. Abre `http://localhost/tienda-online/`.

> **Importante:** `config/config.php` contiene claves privadas y **no debe subirse a GitHub**. Está en `.gitignore`.

## Qué aprendí

- Separar un proyecto en controladores, modelos y vistas.
- Diseñar una base de datos relacional para ventas.
- Integrar un pago en línea y el envío de correos.
- Proteger credenciales: este proyecto me enseñó a no publicar claves en el repositorio.
