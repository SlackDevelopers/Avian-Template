# Avian UI - Guía de Estilos

Este documento proporciona una guía para la implementación y uso del nuevo sistema de estilos basado en variables CSS de Avian.

## Sistema de Temas

El proyecto utiliza un sistema de temas claro/oscuro basado en variables CSS, compuesto por tres archivos principales:

- `sizes.css`: Define variables para dimensiones, espaciados y tamaños
- `theme-dark.css`: Define las variables de color para el tema oscuro
- `themes-light.css`: Define las variables de color para el tema claro

## Implementación

Los archivos de temas se importan en `main.ts` y se aplican automáticamente a través de las clases `.light` y `.dark` en el elemento raíz de la aplicación.

```js
// En main.ts
import "@src/assets/sizes.css";
import "@src/assets/theme-dark.css";
import "@src/assets/themes-light.css";
```

```html
<!-- En App.vue -->
<div :class="{ dark: store.settings.darkMode, light: !store.settings.darkMode }">
  <!-- contenido de la aplicación -->
</div>
```

## Uso de Variables CSS

### Colores y Temas

Las variables de color están definidas para ambos temas y se pueden usar directamente en los estilos de los componentes:

```css
.mi-componente {
  color: var(--text-primary);
  background-color: var(--background-default);
  border: 1px solid var(--border-default);
}
```

### Dimensiones y Espaciado

Las dimensiones y espaciados se definen en `sizes.css` y proporcionan consistencia en toda la aplicación:

```css
.mi-componente {
  border-radius: var(--radius-app);
  padding: var(--chat-spacing);
  transition: var(--t-normal);
}
```

## Componentes Adaptados

Hemos comenzado a adaptar los siguientes componentes para usar el nuevo sistema de variables CSS:

1. **Button.vue**
   - Usa variables como `--button-primary-background` y `--button-primary`
   - Soporta variantes: primary, success, danger

2. **TextInput.vue**
   - Usa variables como `--text-primary` y `--input-placeholder`
   - Soporta estilos bordered y ringed

3. **ScrollBox.vue**
   - Implementa barras de desplazamiento personalizadas usando `--scrollbar-width`
   - Aplica colores de tema para barras de desplazamiento

## Migración Progresiva

La migración a las nuevas variables CSS se puede hacer de forma progresiva:

1. Añadir estilos scoped a los componentes
2. Reemplazar las clases de Tailwind con estilos basados en variables CSS
3. Mantener la compatibilidad durante la transición

## Variables Disponibles

### Colores Principales (Tema Claro)

- `--text-primary`: Color de texto principal
- `--background-default`: Color de fondo por defecto
- `--border-default`: Color de borde por defecto

### Colores Principales (Tema Oscuro)

- `--text-primary`: Color de texto principal (en modo oscuro)
- `--background-default`: Color de fondo por defecto (en modo oscuro)
- `--border-default`: Color de borde por defecto (en modo oscuro)

### Dimensiones

- `--radius-app`: Radio de bordes para elementos de la aplicación
- `--scrollbar-width`: Ancho de las barras de desplazamiento
- `--chat-spacing`: Espaciado estándar para chat

## Ejemplos de Implementación

### Botón Primario

```css
.button-primary {
  background-color: var(--button-primary-background);
  color: var(--button-primary);
  border-radius: var(--radius-app);
  transition: var(--t-normal);
}

.button-primary:hover {
  background-color: var(--button-primary-background-hover);
}
```

### Entrada de Texto

```css
.input-text {
  color: var(--text-primary);
  background-color: var(--background-default);
  border: 1px solid var(--border-default);
  border-radius: var(--radius-app);
}

.input-text:focus {
  border-color: var(--input-border-active);
}
```

---

Esta guía será actualizada a medida que más componentes sean adaptados al nuevo sistema de variables CSS.