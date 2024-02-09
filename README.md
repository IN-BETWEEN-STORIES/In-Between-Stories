<br />
<div align="center">
  <a href="https://www.instagram.com/in_betweenstories">
    <img src="./public/in_betweenstories.jpg" alt="Logo" width="130" height="130">
  </a>

  <h3 align="center">IN_BETWEEN STORIES</h3>

</div>

<details>
  <summary>Table of Contents</summary>
  <ol>
    <li><a href="#getting-started">Getting Started</a></li>
    <ul>
      <li><a href="#prerequisites">Prerequisites</a></li>
      <li><a href="#project-setup">Project Setup</a></li>
      <li><a href="#project-setup">Running Project Locally</a></li>
    </ul>
    <li><a href="#contributors-guide">Contributors Guide</a></li>

  </ol>
</details>

## Getting Started

### Prerequisites

Make sure you have these installed:

-   PHP 8.1 - 8.3
-   composer
-   npm

### Project Setup

Duplicate `.env.example` file and rename it to `.env`

Generate APP key

```bash
php artisan key:generate
```

Install dependencies

```bash
composer install
```

```bash
npm install
```

### Running Project Locally

run these two commands in separate terminal

```bash
php artisan serve
```

```bash
npm run dev
```

## Contributors Guide

put all assets inside resources folder

Below are examples of using assets within resources folder

if you have image within `resources/images` folder named `code.png`, here's how you use it

```html
<img src="{{ Vite::asset('resources/images/logo.png') }}" />
```

```html
<style>
    .bg {
        background: url("{{ Vite::asset('resources/images/logo.png') }}");
    }
</style>
```
