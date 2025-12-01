<!DOCTYPE html>
<html lang="ro">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Silvia Shiatsu - Terapie Shiatsu profesională în Italia. Masaj terapeutic japonez pentru relaxare și echilibru energetic.">
    <meta name="keywords" content="shiatsu, masaj, terapie, relaxare, Moldova, România, wellness, sănătate">
    <title>Silvia Shiatsu - Terapie Shiatsu Profesională</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@400;600;700&family=Lato:wght@300;400;700&display=swap" rel="stylesheet">
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        :root {
            --primary-color: #2c5f2d;
            --secondary-color: #97bf0d;
            --accent-color: #d4a574;
            --text-dark: #333;
            --text-light: #666;
            --bg-light: #f8f9f5;
            --white: #ffffff;
        }

        body {
            font-family: 'Lato', sans-serif;
            color: var(--text-dark);
            line-height: 1.6;
            overflow-x: hidden;
        }

        h1, h2, h3 {
            font-family: 'Playfair Display', serif;
            font-weight: 600;
        }

        /* Header */
        header {
            background: linear-gradient(135deg, var(--primary-color) 0%, #1a3a1b 100%);
            color: var(--white);
            padding: 2rem 0;
            text-align: center;
            box-shadow: 0 4px 20px rgba(0,0,0,0.1);
        }

        header h1 {
            font-size: 3rem;
            margin-bottom: 0.5rem;
            font-weight: 700;
            letter-spacing: 2px;
        }

        header p {
            font-size: 1.2rem;
            font-weight: 300;
            opacity: 0.95;
        }

        /* Container */
        .container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 2rem;
        }

        /* Hero Section */
        .hero {
            background: linear-gradient(rgba(44, 95, 45, 0.85), rgba(44, 95, 45, 0.85)), 
                        url('data:image/svg+xml,<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1200 600"><rect fill="%23d4a574" width="1200" height="600"/><path fill="%232c5f2d" opacity="0.1" d="M0 300 Q300 150 600 300 T1200 300 V600 H0 Z"/></svg>');
            background-size: cover;
            background-position: center;
            color: var(--white);
            padding: 5rem 0;
            text-align: center;
        }

        .hero h2 {
            font-size: 2.5rem;
            margin-bottom: 1.5rem;
            font-weight: 600;
        }

        .hero p {
            font-size: 1.3rem;
            max-width: 800px;
            margin: 0 auto;
            line-height: 1.8;
            font-weight: 300;
        }

        /* Section */
        section {
            padding: 4rem 0;
        }

        section:nth-child(even) {
            background-color: var(--bg-light);
        }

        section h2 {
            font-size: 2.5rem;
            margin-bottom: 2rem;
            text-align: center;
            color: var(--primary-color);
        }

        /* About Section */
        .about-content {
            max-width: 900px;
            margin: 0 auto;
            font-size: 1.1rem;
            line-height: 1.9;
            color: var(--text-light);
        }

        .about-content p {
            margin-bottom: 1.5rem;
        }

        .highlight {
            background-color: rgba(151, 191, 13, 0.1);
            padding: 2rem;
            border-left: 4px solid var(--secondary-color);
            margin: 2rem 0;
            border-radius: 4px;
        }

        /* Benefits Grid */
        .benefits-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
            gap: 2rem;
            margin-top: 3rem;
        }

        .benefit-card {
            background: var(--white);
            padding: 2rem;
            border-radius: 12px;
            box-shadow: 0 4px 15px rgba(0,0,0,0.08);
            transition: transform 0.3s ease, box-shadow 0.3s ease;
            border-top: 4px solid var(--secondary-color);
        }

        .benefit-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 8px 25px rgba(0,0,0,0.15);
        }

        .benefit-card h3 {
            color: var(--primary-color);
            margin-bottom: 1rem;
            font-size: 1.5rem;
        }

        .benefit-card p {
            color: var(--text-light);
            line-height: 1.7;
        }

        .benefit-icon {
            font-size: 3rem;
            margin-bottom: 1rem;
        }

        /* Contact Section */
        .contact {
            background: linear-gradient(135deg, var(--primary-color) 0%, #1a3a1b 100%);
            color: var(--white);
            padding: 5rem 0;
        }

        .contact h2 {
            color: var(--white);
            margin-bottom: 3rem;
        }

        .contact-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 2rem;
            max-width: 1000px;
            margin: 0 auto;
        }

        .contact-item {
            background: rgba(255, 255, 255, 0.1);
            padding: 2rem;
            border-radius: 12px;
            text-align: center;
            backdrop-filter: blur(10px);
            border: 1px solid rgba(255, 255, 255, 0.2);
            transition: background 0.3s ease, transform 0.3s ease;
        }

        .contact-item:hover {
            background: rgba(255, 255, 255, 0.15);
            transform: scale(1.05);
        }

        .contact-item h3 {
            margin-bottom: 1rem;
            font-size: 1.3rem;
            color: var(--accent-color);
        }

        .contact-item a {
            color: var(--white);
            text-decoration: none;
            font-size: 1.1rem;
            display: inline-block;
            transition: color 0.3s ease;
        }

        .contact-item a:hover {
            color: var(--secondary-color);
        }

        .contact-icon {
            font-size: 2.5rem;
            margin-bottom: 1rem;
            display: block;
        }

        /* Footer */
        footer {
            background-color: #1a3a1b;
            color: var(--white);
            text-align: center;
            padding: 2rem 0;
        }

        footer p {
            opacity: 0.8;
        }

        /* Responsive */
        @media (max-width: 768px) {
            header h1 {
                font-size: 2rem;
            }

            header p {
                font-size: 1rem;
            }

            .hero h2 {
                font-size: 1.8rem;
            }

            .hero p {
                font-size: 1.1rem;
            }

            section h2 {
                font-size: 2rem;
            }

            .container {
                padding: 0 1.5rem;
            }

            .benefits-grid,
            .contact-grid {
                grid-template-columns: 1fr;
            }
        }

        /* Smooth Scroll */
        html {
            scroll-behavior: smooth;
        }

        /* Animation */
        @keyframes fadeInUp {
            from {
                opacity: 0;
                transform: translateY(30px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        .fade-in {
            animation: fadeInUp 0.8s ease-out;
        }
    </style>
</head>
<body>
    <header>
        <div class="container">
            <h1 class="fade-in">SILVIA SHIATSU</h1>
            <p class="fade-in">Terapie Shiatsu Profesională</p>
        </div>
    </header>

    <section class="hero">
        <div class="container">
            <h2 class="fade-in">Descoperă Echilibrul și Armonia Interioară</h2>
            <p class="fade-in">Masaj terapeutic japonez pentru sănătate, relaxare și bunăstare</p>
        </div>
    </section>

    <section id="despre">
        <div class="container">
            <h2>Ce este Shiatsu?</h2>
            <div class="about-content">
                <p>
                    <strong>Shiatsu</strong> este o formă tradițională de terapie japoneză care combină presiunea digitală cu tehnici de masaj pentru a restabili echilibrul energetic al corpului. Prin stimularea punctelor specifice de-a lungul meridianelor energetice, Shiatsu ajută la deblocarea fluxului de energie vitală (Ki) și promovează vindecarea naturală.
                </p>
                <div class="highlight">
                    <p>
                        <strong>Silvia</strong> este o practicantă certificată cu experiență vastă în arta Shiatsu, dedicată să ofere tratamente personalizate care să răspundă nevoilor unice ale fiecărui client. Cu o abordare holistică și atentă, fiecare sesiune este concepută pentru a aduce echilibru fizic, mental și emoțional.
                    </p>
                </div>
                <p>
                    Shiatsu nu este doar un masaj - este o călătorie spre autodezvoltare, relaxare profundă și regenerare completă. Fie că suferi de stress, dureri cronice, tensiune musculară sau pur și simplu dorești să îți îmbunătățești starea generală de sănătate, Shiatsu poate fi soluția ta.
                </p>
            </div>
        </div>
    </section>

    <section id="beneficii">
        <div class="container">
            <h2>Beneficiile Terapiei Shiatsu</h2>
            <div class="benefits-grid">
                <div class="benefit-card fade-in">
                    <div class="benefit-icon">🧘</div>
                    <h3>Reducerea Stresului</h3>
                    <p>Tehnicile Shiatsu ajută la eliberarea tensiunii acumulate și promovează o stare profundă de relaxare și calm interior.</p>
                </div>
                <div class="benefit-card fade-in">
                    <div class="benefit-icon">💪</div>
                    <h3>Ameliorarea Durerii</h3>
                    <p>Eficient în tratarea durerii cronice, a tensiunii musculare și a problemelor articulare prin stimularea punctelor terapeutice.</p>
                </div>
                <div class="benefit-card fade-in">
                    <div class="benefit-icon">⚡</div>
                    <h3>Creșterea Energiei</h3>
                    <p>Reechilibrează fluxul energetic al corpului, oferindu-ți mai multă vitalitate și energie pentru viața de zi cu zi.</p>
                </div>
                <div class="benefit-card fade-in">
                    <div class="benefit-icon">🌸</div>
                    <h3>Îmbunătățirea Circulației</h3>
                    <p>Stimulează circulația sanguină și limfatică, contribuind la detoxifierea organismului și îmbunătățirea funcțiilor vitale.</p>
                </div>
                <div class="benefit-card fade-in">
                    <div class="benefit-icon">😌</div>
                    <h3>Echilibru Emoțional</h3>
                    <p>Ajută la gestionarea anxietății și a emoțiilor negative, promovând un sentiment de pace și echilibru interior.</p>
                </div>
                <div class="benefit-card fade-in">
                    <div class="benefit-icon">🌟</div>
                    <h3>Îmbunătățirea Somnului</h3>
                    <p>Sesiunile regulate de Shiatsu pot ameliora calitatea somnului și pot ajuta la combaterea insomniei.</p>
                </div>
            </div>
        </div>
    </section>

    <section id="contact" class="contact">
        <div class="container">
            <h2>Programează o Sesiune</h2>
            <p style="text-align: center; font-size: 1.2rem; margin-bottom: 3rem; max-width: 700px; margin-left: auto; margin-right: auto;">
                Contactează-mă pentru o consultație sau pentru a programa o sesiune de terapie Shiatsu. Sunt aici să te ajut în călătoria ta spre bunăstare.
            </p>
            <div class="contact-grid">
                <div class="contact-item">
                    <span class="contact-icon">📱</span>
                    <h3>Telefon</h3>
                    <a href="tel:+393291427321">(+39) 3291 427 321</a>
                </div>
                <div class="contact-item">
                    <span class="contact-icon">💬</span>
                    <h3>WhatsApp</h3>
                    <a href="https://wa.me/393291427321" target="_blank">Trimite mesaj</a>
                </div>
                <div class="contact-item">
                    <span class="contact-icon">📘</span>
                    <h3>Facebook</h3>
                    <a href="https://facebook.com/silviashiatsu" target="_blank">Vizitează pagina</a>
                </div>
                <div class="contact-item">
                    <span class="contact-icon">✉️</span>
                    <h3>Email</h3>
                    <a href="mailto:studio@silvia-shiatsu.com">studio@silvia-shiatsu.com</a>
                </div>
            </div>
        </div>
    </section>

    <footer>
        <div class="container">
            <p>&copy; <?php echo date('Y'); ?> Silvia Shiatsu. Toate drepturile rezervate.</p>
            <p style="margin-top: 0.5rem; font-size: 0.9rem;">Terapie Shiatsu Profesională | Italia</p>
        </div>
    </footer>

    <script>
        // Simple scroll animation
        document.addEventListener('DOMContentLoaded', function() {
            const observerOptions = {
                threshold: 0.1,
                rootMargin: '0px 0px -50px 0px'
            };

            const observer = new IntersectionObserver(function(entries) {
                entries.forEach(entry => {
                    if (entry.isIntersecting) {
                        entry.target.style.animation = 'fadeInUp 0.8s ease-out';
                        entry.target.style.opacity = '1';
                    }
                });
            }, observerOptions);

            document.querySelectorAll('.benefit-card').forEach(card => {
                card.style.opacity = '0';
                observer.observe(card);
            });
        });
    </script>
</body>
</html>

