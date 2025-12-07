<!DOCTYPE html>
<?php wp_head(); ?>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <title>Nobara Linux | The Nobara Project</title>
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <meta name="description" content="Nobara is a Fedora-based experience tuned for gaming, streaming, and content creation — with everything ready out of the box." />
  <link rel="stylesheet" href="styles.css" />
  <link rel="icon" type="image/png" href="img/nobara-icon.png" />
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link href="https://fonts.googleapis.com/css2?family=Google+Sans:wght@400;500;700&family=Roboto:wght@400;500;700&display=swap" rel="stylesheet" />
</head>
<body>
  <header class="top-app-bar">
    <div class="top-app-bar__left">
      <button class="icon-button nav-menu-button" aria-label="Open navigation menu">
        <span class="nav-menu-icon"></span>
      </button>
      <a href="index.html#hero" class="brand">
        <img src="img/nobara-icon.png" alt="Nobara logo" class="brand__logo-img" />
        <span class="brand__text">Nobara Project</span>
      </a>
    </div>
    <nav class="top-app-bar__nav" aria-label="Primary navigation">
      <a href="index.html#hero" class="nav-link nav-link--active">Overview</a>
      <a href="download.html" class="nav-link">Downloads</a>
      <a href="https://wiki.nobaraproject.org" class="nav-link" target="_blank" rel="noreferrer">Wiki</a>
      <a href="https://wiki.nobaraproject.org/FAQ/FAQ" class="nav-link" target="_blank" rel="noreferrer">FAQ</a>
      <a href="https://wiki.nobaraproject.org/en/new-user-guide-general-guidelines" class="nav-link" target="_blank" rel="noreferrer">Getting started</a>
      <a href="https://discord.gg/6y3BdzC" class="nav-link" target="_blank" rel="noreferrer">Community</a>
      <a href="https://nobara-project-merch-store.printify.me" class="nav-link" target="_blank" rel="noreferrer">Store</a>
    </nav>
    <div class="top-app-bar__right">
      <button class="theme-toggle" aria-label="Toggle dark mode">
        <span class="theme-toggle__track"></span>
        <span class="theme-toggle__thumb"></span>
      </button>
    </div>
  </header>

  <div class="nav-drawer" aria-hidden="true">
    <div class="nav-drawer__header">
      <span>Nobara Project</span>
      <button class="icon-button nav-drawer__close" aria-label="Close menu">
        ✕
      </button>
    </div>
    <nav class="nav-drawer__nav">
      <a href="index.html#hero" class="nav-link nav-drawer__link nav-link--active">Overview</a>
      <a href="download.html" class="nav-link nav-drawer__link">Downloads</a>
      <a href="https://wiki.nobaraproject.org" class="nav-link nav-drawer__link" target="_blank" rel="noreferrer">Wiki</a>
      <a href="https://wiki.nobaraproject.org/FAQ/FAQ" class="nav-link nav-drawer__link" target="_blank" rel="noreferrer">FAQ</a>
      <a href="https://wiki.nobaraproject.org/en/new-user-guide-general-guidelines" class="nav-link nav-drawer__link" target="_blank" rel="noreferrer">Getting started</a>
      <a href="https://discord.gg/6y3BdzC" class="nav-link nav-drawer__link" target="_blank" rel="noreferrer">Community</a>
      <a href="https://nobara-project-merch-store.printify.me" class="nav-link nav-drawer__link" target="_blank" rel="noreferrer">Store</a>
    </nav>
  </div>
  <div class="nav-drawer__backdrop"></div>

  
<body <?php body_class(); ?>>