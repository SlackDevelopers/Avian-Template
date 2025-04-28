# CLAUDE.md

This file provides guidance to Claude Code (claude.ai/code) when working with code in this repository.

## Commands

- **Development server**: `yarn dev`
- **Build project**: `yarn build`
- **Type check**: `vue-tsc --noEmit`
- **Preview build**: `yarn preview`

## Code Style Guidelines

- **Formatting**: Follow Vue 3 + TypeScript conventions with Prettier formatting
- **Component structure**: Script setup pattern `<script setup lang="ts">`, followed by template, then styles
- **CSS**: Use CSS variables from theme files with classes in component scoped styles
- **Theming**: Apply `dark` and `light` classes at root level; use theme CSS variables
- **Naming**: PascalCase for component files and camelCase for variables/properties
- **Imports**: Group imports by: Vue core, store/utils, components (@src path aliases)
- **Types**: Define explicit types for props, emits, and function parameters using TypeScript
- **Error handling**: Use try/catch blocks for async operations

## CSS Variables & Theming

Use the variables defined in:
- `src/assets/sizes.css`: Dimensions and spacing
- `src/assets/theme-dark.css`: Dark theme colors
- `src/assets/themes-light.css`: Light theme colors