# Proyecto PuntoFácil

PuntoFácil es una plataforma diseñada para pequeños y medianos negocios que implementa programas de fidelización de clientes usando puntos, siendo el RUT un identificador clave.

---

## Tecnologías utilizadas

- **Backend:** Laravel 11
- **Frontend:** Vue.js 3
- **Base de datos:** MySQL
- **ORM:** Eloquent
- **Frontend-Bundler:** Vite.js
- **Servidor local:** Ubuntu 24.04 LTS
- **Autenticación:** Laravel Sanctum
- **Despliegue:** GitHub

---

## Instalación

### 1. Requisitos previos

Asegúrate de tener instalado lo siguiente:

- PHP >= 8.2
- Composer
- Node.js >= 20
- MySQL
- NPM 
- Git

### 2. Clonar el repositorio

```bash
git clone https://github.com/fmendezy/PuntoFacil.git
cd PuntoFacil
```

### 3. Configuración del proyecto

1. Copiar el archivo de entorno:

   ```bash
   cp .env.example .env
   ```

2. Configurar las variables de entorno en `.env`:

   ```plaintext
   DB_CONNECTION=mysql
   DB_HOST=127.0.0.1
   DB_PORT=3306
   DB_DATABASE=puntofacil
   DB_USERNAME=root
   DB_PASSWORD=
   ```

3. Instalar las dependencias:

   ```bash
   composer install
   npm install
   ```

4. Generar la clave de la aplicación:

   ```bash
   php artisan key:generate
   ```

5. Ejecutar migraciones y seeders:

   ```bash
   php artisan migrate --seed
   ```

6. Compilar los assets de Vue.js:

   ```bash
   npm run dev
   ```

### 4. Levantar el servidor

```bash
php artisan serve
```

La aplicación estará disponible en: [http://127.0.0.1:8000](http://127.0.0.1:8000)

---

## Estructura del proyecto

```
PuntoFacil/
├── app/
│   ├── Console/
│   ├── Http/
│   ├── Models/
│   ├── Providers/
├── bootstrap/
├── config/
├── database/
│   ├── migrations/
│   ├── seeders/
├── public/
├── resources/
│   ├── js/
│   ├── views/
├── routes/
│   ├── web.php
│   ├── api.php
├── storage/
├── tests/
├── .env.example
├── package.json
├── composer.json
├── README.md
```

---

## Características principales

- Registro y autenticación de usuarios mediante Laravel Sanctum.
- Administración de puntos de clientes basada en transacciones.
- Panel de administración para negocios con reportes y visualización de datos.
- Interfaz responsiva y accesible con Vue.js.
- Sistema de roles y permisos.
- Generación de reportes en PDF/Excel.
- Seguridad optimizada con validaciones y protecciones CSRF.

---

## Comandos útiles

- Ejecutar pruebas:

  ```bash
  php artisan test
  ```

- Compilar assets en producción:

  ```bash
  npm run build
  ```

- Limpiar caché de la aplicación:

  ```bash
  php artisan cache:clear
  php artisan config:clear
  ```

---

## Despliegue

1. Configurar las variables de entorno en el servidor.
2. Subir los archivos al servidor remoto.
3. Instalar dependencias de backend:
   ```bash
   composer install --no-dev --optimize-autoloader
   ```
4. Instalar dependencias de frontend:
   ```bash
   npm install --production
   npm run build
   ```
5. Ejecutar migraciones:
   ```bash
   php artisan migrate --force
   ```
6. Configurar un servidor web (Nginx/Apache) apuntando a la carpeta `public`.

---

## Contribución

Si deseas contribuir al proyecto:

1. Realiza un fork del repositorio.
2. Crea una rama para tu nueva funcionalidad:
   ```bash
   git checkout -b feature/nueva-funcionalidad
   ```
3. Realiza cambios y envía un pull request.

---

## Licencia

Este proyecto está licenciado bajo la MIT License - ver el archivo [LICENSE](LICENSE) para detalles.

