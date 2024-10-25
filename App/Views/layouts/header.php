<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= isset($metaTitle) ? $metaTitle : 'TP FRAMEWORK'; ?></title>
</head>
<body class="body-bg">
<header class="header">
    <div class="header-content">
        <span class="header-title">
            <a href="/" class="header-link">Blog TP</a>
        </span>
        <nav class="header-nav">
            <a href="/" class="nav-link">tout-savoir</a>
            <a href="#" class="nav-link">contact</a>
            <a href="#" class="nav-link">pourquoi?</a>
        </nav>
    </div>
</header>

<style>
   
   .body-bg {
    background-color: #f3f4f6;
    margin: 0;
    font-family: Arial, sans-serif;
}

.header {
    background-color: #87CEEB;
    color: #fff;
  
   
    padding: 1rem 0;
    box-shadow: 0 4px 20px rgba(0, 0, 0, 0.25);
    position: relative;
    z-index: 1;
}

.header::before {
    content: '';
    position: absolute;
    top: -15px;
    left: 0;
    right: 0;
    height: 15px;
    background: linear-gradient(to bottom, rgba(255, 255, 255, 0.3), transparent);
    z-index: -1;
}

.header-content {
    max-width: 1200px;
    margin: 0 auto;
    display: flex;
    align-items: center;
    justify-content: space-between;
    padding: 0 1rem;
}

.header-title {
    font-size: 1.5rem;
    font-family: "Avenir Black", sans-serif;
    letter-spacing: 1px;
}

.header-link {
    color: #fff;
    text-decoration: none;
    font-weight: bold;
    transition: color 0.3s ease;
}

.header-link:hover {
    color: rgba(255, 255, 255, 0.8);
}

.header-nav {
    display: flex;
    gap: 2rem;
}

.nav-link {
    color: #fff;
    text-decoration: none;
    font-size: 1rem;
    transition: color 0.3s;
}

.nav-link:hover {
    color: rgba(255, 255, 255, 0.8);
}

</style>
