<?php get_header(); ?>

<main>

    <!-- Hero section -->
    <section class="hero">
        <div class="container hero-content">

            <span class="hero-label">IT DEVELOPMENT COMPANY</span>

            <h1>
                Создаём цифровые решения
                <span>для вашего бизнеса</span>
            </h1>

            <p>
                Разрабатываем веб-приложения, мобильные сервисы
                и автоматизируем бизнес-процессы.
            </p>

            <a href="<?php echo esc_url(home_url('/contacts/')); ?>"
               class="primary-button">
                Обсудить проект
            </a>

        </div>
    </section>

    <!-- Services section -->
    <section class="services">
        <div class="container">

            <div class="section-heading">
                <span class="section-label">ЧТО МЫ ДЕЛАЕМ</span>
                <h2>Наши услуги</h2>
                <p>
                    Помогаем компаниям решать задачи
                    с помощью современных технологий.
                </p>
            </div>

            <div class="services-grid">

                <article class="service-card">
                    <div class="service-icon">01</div>
                    <h3>Веб-разработка</h3>
                    <p>
                        Создание современных сайтов,
                        корпоративных порталов и веб-приложений.
                    </p>
                    <a href="<?php echo esc_url(home_url('/services/')); ?>">
                        Подробнее →
                    </a>
                </article>

                <article class="service-card">
                    <div class="service-icon">02</div>
                    <h3>Мобильные приложения</h3>
                    <p>
                        Разработка мобильных приложений
                        для Android и iOS.
                    </p>
                    <a href="<?php echo esc_url(home_url('/services/')); ?>">
                        Подробнее →
                    </a>
                </article>

                <article class="service-card">
                    <div class="service-icon">03</div>
                    <h3>Автоматизация бизнеса</h3>
                    <p>
                        Оптимизация процессов, интеграции
                        и разработка внутренних систем.
                    </p>
                    <a href="<?php echo esc_url(home_url('/services/')); ?>">
                        Подробнее →
                    </a>
                </article>

            </div>
        </div>
    </section>

    <!-- About section -->
    <section class="about">
        <div class="container about-content">

            <div>
                <span class="section-label">О КОМПАНИИ</span>
                <h2>Технологии, которые работают на результат</h2>
            </div>

            <p>
                Мы создаём программные решения,
                которые помогают бизнесу развиваться,
                повышать эффективность и автоматизировать
                повседневные задачи.
            </p>

        </div>
    </section>

</main>

<?php get_footer(); ?>