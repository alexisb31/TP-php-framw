<footer class="footer">
    <div class="footer-content">
        <span> TP FRAMEWORK </span>
    </div>
</footer>

</body>
</html>

<style>
 
    body, html {
        display: flex;
        flex-direction: column;
        min-height: 100vh;
        margin: 0;
    }

    main {
        flex: 1;
    }

    .footer {
    background-color: #87CEEB; 
    color: #ffffff;
    padding: 60px 20px;
    font-family: "Avenir Black", sans-serif;
    text-align: center;
    box-shadow: 0px -5px 15px rgba(0, 0, 0, 0.2);
    position: relative;
    z-index: 1;
}

.footer::before {
    content: '';
    position: absolute;
    top: -10px;
    left: 0;
    right: 0;
    height: 10px;
    background: linear-gradient(to bottom, rgba(255, 255, 255, 0.2), transparent);
    z-index: -1;
}

.footer-content {
    max-width: 200px;
    margin: 0 auto;
    padding: 0 1rem;
}

.footer-logo {
    font-size: 2.8rem;
    font-weight: bold;
    margin-bottom: 30px;
    letter-spacing: 1px;
}

.footer-links {
    display: flex;
    justify-content: center;
    gap: 2rem;
    margin-bottom: 20px;
}

.footer-link {
    color: #ffffff;
    font-size: 1rem;
    text-decoration: none;
    transition: color 0.3s ease;
}

.footer-link:hover {
    color: rgba(255, 255, 255, 0.8); 
}

.footer-credits {
    font-size: 0.85rem;
    color: #ffffff;
    opacity: 0.8;
    margin-top: 20px;
}

.footer-credits span {
    font-weight: bold;
}

.footer-socials {
    display: flex;
    gap: 20px;
    justify-content: center;
    margin-top: 15px;
}

.footer-socials a {
    color: #ffffff;
    font-size: 1.5rem;
    transition: transform 0.3s ease, color 0.3s ease;
}

.footer-socials a:hover {
    color: rgba(255, 255, 255, 0.8);
    transform: translateY(-3px); 
}

@media (max-width: 768px) {
    .footer-links {
        flex-direction: column;
        gap: 1rem;
    }
}


</style>
