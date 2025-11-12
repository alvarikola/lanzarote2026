<?php


class Portada
{

    static function pintar()
    {
        return "
        <main class=\"main\">

        <!-- Hero Section -->
    <section id=\"hero\" class=\"hero section accent-background\">

      <div class=\"container position-relative\" data-aos=\"fade-up\" data-aos-delay=\"100\">
        <div class=\"row gy-5 justify-content-between\">
          <div class=\"col-lg-6 order-2 order-lg-1 d-flex flex-column justify-content-center\">
            <h2><span>Welcome to </span><span class=\"accent\">Impact</span></h2>
            <p>Sed autem laudantium dolores. Voluptatem itaque ea consequatur eveniet. Eum quas beatae cumque eum quaerat.</p>
            <div class=\"d-flex\">
              <a href=\"#about\" class=\"btn-get-started\">Get Started</a>
              <a href=\"https://www.youtube.com/watch?v=Y7f98aduVJ8\" class=\"glightbox btn-watch-video d-flex align-items-center\"><i class=\"bi bi-play-circle\"></i><span>Watch Video</span></a>
            </div>
          </div>
          <div class=\"col-lg-5 order-1 order-lg-2\">
            <img src=\"assets/img/hero-img.svg\" class=\"img-fluid\" alt=\"\">
          </div>
        </div>
      </div>

      <div class=\"icon-boxes position-relative\" data-aos=\"fade-up\" data-aos-delay=\"200\">
        <div class=\"container position-relative\">
          <div class=\"row gy-4 mt-5\">

            <div class=\"col-xl-3 col-md-6\">
              <div class=\"icon-box\">
                <div class=\"icon\"><i class=\"bi bi-easel\"></i></div>
                <h4 class=\"title\"><a href=\"\" class=\"stretched-link\">Lorem Ipsum</a></h4>
              </div>
            </div><!--End Icon Box -->

            <div class=\"col-xl-3 col-md-6\">
              <div class=\"icon-box\">
                <div class=\"icon\"><i class=\"bi bi-gem\"></i></div>
                <h4 class=\"title\"><a href=\"\" class=\"stretched-link\">Sed ut perspiciatis</a></h4>
              </div>
            </div><!--End Icon Box -->

            <div class=\"col-xl-3 col-md-6\">
              <div class=\"icon-box\">
                <div class=\"icon\"><i class=\"bi bi-geo-alt\"></i></div>
                <h4 class=\"title\"><a href=\"\" class=\"stretched-link\">Magni Dolores</a></h4>
              </div>
            </div><!--End Icon Box -->

            <div class=\"col-xl-3 col-md-6\">
              <div class=\"icon-box\">
                <div class=\"icon\"><i class=\"bi bi-command\"></i></div>
                <h4 class=\"title\"><a href=\"\" class=\"stretched-link\">Nemo Enim</a></h4>
              </div>
            </div><!--End Icon Box -->

          </div>
        </div>
      </div>

    </section><!-- /Hero Section -->

    <!-- About Section -->
    <section id=\"about\" class=\"about section\">

      <!-- Section Title -->
      <div class=\"container section-title\" data-aos=\"fade-up\">
        <h2>About Us<br></h2>
        <p>Necessitatibus eius consequatur ex aliquid fuga eum quidem sint consectetur velit</p>
      </div><!-- End Section Title -->

      <div class=\"container\">

        <div class=\"row gy-4\">
          <div class=\"col-lg-6\" data-aos=\"fade-up\" data-aos-delay=\"100\">
            <h3>Voluptatem dignissimos provident laboris nisi ut aliquip ex ea commodo</h3>
            <img src=\"assets/Impact-1.0.0/assets/img/about.jpg\" class=\"img-fluid rounded-4 mb-4\" alt=\"\">
            <p>Ut fugiat ut sunt quia veniam. Voluptate perferendis perspiciatis quod nisi et. Placeat debitis quia recusandae odit et consequatur voluptatem. Dignissimos pariatur consectetur fugiat voluptas ea.</p>
            <p>Temporibus nihil enim deserunt sed ea. Provident sit expedita aut cupiditate nihil vitae quo officia vel. Blanditiis eligendi possimus et in cum. Quidem eos ut sint rem veniam qui. Ut ut repellendus nobis tempore doloribus debitis explicabo similique sit. Accusantium sed ut omnis beatae neque deleniti repellendus.</p>
          </div>
          <div class=\"col-lg-6\" data-aos=\"fade-up\" data-aos-delay=\"250\">
            <div class=\"content ps-0 ps-lg-5\">
              <p class=\"fst-italic\">
                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore
                magna aliqua.
              </p>
              <ul>
                <li><i class=\"bi bi-check-circle-fill\"></i> <span>Ullamco laboris nisi ut aliquip ex ea commodo consequat.</span></li>
                <li><i class=\"bi bi-check-circle-fill\"></i> <span>Duis aute irure dolor in reprehenderit in voluptate velit.</span></li>
                <li><i class=\"bi bi-check-circle-fill\"></i> <span>Ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate trideta storacalaperda mastiro dolore eu fugiat nulla pariatur.</span></li>
              </ul>
              <p>
                Ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate
                velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident
              </p>

              <div class=\"position-relative mt-4\">
                <img src=\"assets/Impact-1.0.0/assets/img/about-2.jpg\" class=\"img-fluid rounded-4\" alt=\"\">
                <a href=\"https://www.youtube.com/watch?v=Y7f98aduVJ8\" class=\"glightbox pulsating-play-btn\"></a>
              </div>
            </div>
          </div>
        </div>

      </div>

    </section><!-- /About Section -->


    <!-- Portfolio Section -->
    <section id=\"portfolio\" class=\"portfolio section\">

      <!-- Section Title -->
      <div class=\"container section-title\" data-aos=\"fade-up\">
        <h2>Portfolio</h2>
        <p>Necessitatibus eius consequatur ex aliquid fuga eum quidem sint consectetur velit</p>
      </div><!-- End Section Title -->

      <div class=\"container\">

        <div class=\"isotope-layout\" data-default-filter=\"*\" data-layout=\"masonry\" data-sort=\"original-order\">

          <ul class=\"portfolio-filters isotope-filters\" data-aos=\"fade-up\" data-aos-delay=\"100\">
            <li data-filter=\"*\" class=\"filter-active\">All</li>
            <li data-filter=\".filter-app\">App</li>
            <li data-filter=\".filter-product\">Product</li>
            <li data-filter=\".filter-branding\">Branding</li>
            <li data-filter=\".filter-books\">Books</li>
          </ul><!-- End Portfolio Filters -->

          <div class=\"row gy-4 isotope-container\" data-aos=\"fade-up\" data-aos-delay=\"200\">

            <div class=\"col-lg-4 col-md-6 portfolio-item isotope-item filter-app\">
              <div class=\"portfolio-content h-100\">
                <a href=\"assets/Impact-1.0.0/assets/img/portfolio/app-1.jpg\" data-gallery=\"portfolio-gallery-app\" class=\"glightbox\"><img src=\"assets/Impact-1.0.0/assets/img/portfolio/app-1.jpg\" class=\"img-fluid\" alt=\"\"></a>
                <div class=\"portfolio-info\">
                  <h4><a href=\"portfolio-details.html\" title=\"More Details\">App 1</a></h4>
                  <p>Lorem ipsum, dolor sit amet consectetur</p>
                </div>
              </div>
            </div><!-- End Portfolio Item -->

            <div class=\"col-lg-4 col-md-6 portfolio-item isotope-item filter-product\">
              <div class=\"portfolio-content h-100\">
                <a href=\"assets/Impact-1.0.0/assets/img/portfolio/product-1.jpg\" data-gallery=\"portfolio-gallery-app\" class=\"glightbox\"><img src=\"assets/Impact-1.0.0/assets/img/portfolio/product-1.jpg\" class=\"img-fluid\" alt=\"\"></a>
                <div class=\"portfolio-info\">
                  <h4><a href=\"portfolio-details.html\" title=\"More Details\">Product 1</a></h4>
                  <p>Lorem ipsum, dolor sit amet consectetur</p>
                </div>
              </div>
            </div><!-- End Portfolio Item -->

            <div class=\"col-lg-4 col-md-6 portfolio-item isotope-item filter-branding\">
              <div class=\"portfolio-content h-100\">
                <a href=\"assets/Impact-1.0.0/assets/img/portfolio/branding-1.jpg\" data-gallery=\"portfolio-gallery-app\" class=\"glightbox\"><img src=\"assets/Impact-1.0.0/assets/img/portfolio/branding-1.jpg\" class=\"img-fluid\" alt=\"\"></a>
                <div class=\"portfolio-info\">
                  <h4><a href=\"portfolio-details.html\" title=\"More Details\">Branding 1</a></h4>
                  <p>Lorem ipsum, dolor sit amet consectetur</p>
                </div>
              </div>
            </div><!-- End Portfolio Item -->

            <div class=\"col-lg-4 col-md-6 portfolio-item isotope-item filter-books\">
              <div class=\"portfolio-content h-100\">
                <a href=\"assets/Impact-1.0.0/assets/img/portfolio/books-1.jpg\" data-gallery=\"portfolio-gallery-app\" class=\"glightbox\"><img src=\"assets/Impact-1.0.0/assets/img/portfolio/books-1.jpg\" class=\"img-fluid\" alt=\"\"></a>
                <div class=\"portfolio-info\">
                  <h4><a href=\"portfolio-details.html\" title=\"More Details\">Books 1</a></h4>
                  <p>Lorem ipsum, dolor sit amet consectetur</p>
                </div>
              </div>
            </div><!-- End Portfolio Item -->

            <div class=\"col-lg-4 col-md-6 portfolio-item isotope-item filter-app\">
              <div class=\"portfolio-content h-100\">
                <a href=\"assets/Impact-1.0.0/assets/img/portfolio/app-2.jpg\" data-gallery=\"portfolio-gallery-app\" class=\"glightbox\"><img src=\"assets/Impact-1.0.0/assets/img/portfolio/app-2.jpg\" class=\"img-fluid\" alt=\"\"></a>
                <div class=\"portfolio-info\">
                  <h4><a href=\"portfolio-details.html\" title=\"More Details\">App 2</a></h4>
                  <p>Lorem ipsum, dolor sit amet consectetur</p>
                </div>
              </div>
            </div><!-- End Portfolio Item -->

            <div class=\"col-lg-4 col-md-6 portfolio-item isotope-item filter-product\">
              <div class=\"portfolio-content h-100\">
                <a href=\"assets/Impact-1.0.0/assets/img/portfolio/product-2.jpg\" data-gallery=\"portfolio-gallery-app\" class=\"glightbox\"><img src=\"assets/Impact-1.0.0/assets/img/portfolio/product-2.jpg\" class=\"img-fluid\" alt=\"\"></a>
                <div class=\"portfolio-info\">
                  <h4><a href=\"portfolio-details.html\" title=\"More Details\">Product 2</a></h4>
                  <p>Lorem ipsum, dolor sit amet consectetur</p>
                </div>
              </div>
            </div><!-- End Portfolio Item -->

            <div class=\"col-lg-4 col-md-6 portfolio-item isotope-item filter-branding\">
              <div class=\"portfolio-content h-100\">
                <a href=\"assets/Impact-1.0.0/assets/img/portfolio/branding-2.jpg\" data-gallery=\"portfolio-gallery-app\" class=\"glightbox\"><img src=\"assets/Impact-1.0.0/assets/img/portfolio/branding-2.jpg\" class=\"img-fluid\" alt=\"\"></a>
                <div class=\"portfolio-info\">
                  <h4><a href=\"portfolio-details.html\" title=\"More Details\">Branding 2</a></h4>
                  <p>Lorem ipsum, dolor sit amet consectetur</p>
                </div>
              </div>
            </div><!-- End Portfolio Item -->

            <div class=\"col-lg-4 col-md-6 portfolio-item isotope-item filter-books\">
              <div class=\"portfolio-content h-100\">
                <a href=\"assets/Impact-1.0.0/assets/img/portfolio/books-2.jpg\" data-gallery=\"portfolio-gallery-app\" class=\"glightbox\"><img src=\"assets/Impact-1.0.0/assets/img/portfolio/books-2.jpg\" class=\"img-fluid\" alt=\"\"></a>
                <div class=\"portfolio-info\">
                  <h4><a href=\"portfolio-details.html\" title=\"More Details\">Books 2</a></h4>
                  <p>Lorem ipsum, dolor sit amet consectetur</p>
                </div>
              </div>
            </div><!-- End Portfolio Item -->

            <div class=\"col-lg-4 col-md-6 portfolio-item isotope-item filter-app\">
              <div class=\"portfolio-content h-100\">
                <a href=\"assets/Impact-1.0.0/assets/img/portfolio/app-3.jpg\" data-gallery=\"portfolio-gallery-app\" class=\"glightbox\"><img src=\"assets/Impact-1.0.0/assets/img/portfolio/app-3.jpg\" class=\"img-fluid\" alt=\"\"></a>
                <div class=\"portfolio-info\">
                  <h4><a href=\"portfolio-details.html\" title=\"More Details\">App 3</a></h4>
                  <p>Lorem ipsum, dolor sit amet consectetur</p>
                </div>
              </div>
            </div><!-- End Portfolio Item -->

            <div class=\"col-lg-4 col-md-6 portfolio-item isotope-item filter-product\">
              <div class=\"portfolio-content h-100\">
                <a href=\"assets/Impact-1.0.0/assets/img/portfolio/product-3.jpg\" data-gallery=\"portfolio-gallery-app\" class=\"glightbox\"><img src=\"assets/Impact-1.0.0/assets/img/portfolio/product-3.jpg\" class=\"img-fluid\" alt=\"\"></a>
                <div class=\"portfolio-info\">
                  <h4><a href=\"portfolio-details.html\" title=\"More Details\">Product 3</a></h4>
                  <p>Lorem ipsum, dolor sit amet consectetur</p>
                </div>
              </div>
            </div><!-- End Portfolio Item -->

            <div class=\"col-lg-4 col-md-6 portfolio-item isotope-item filter-branding\">
              <div class=\"portfolio-content h-100\">
                <a href=\"assets/Impact-1.0.0/assets/img/portfolio/branding-3.jpg\" data-gallery=\"portfolio-gallery-app\" class=\"glightbox\"><img src=\"assets/Impact-1.0.0/assets/img/portfolio/branding-3.jpg\" class=\"img-fluid\" alt=\"\"></a>
                <div class=\"portfolio-info\">
                  <h4><a href=\"portfolio-details.html\" title=\"More Details\">Branding 3</a></h4>
                  <p>Lorem ipsum, dolor sit amet consectetur</p>
                </div>
              </div>
            </div><!-- End Portfolio Item -->

            <div class=\"col-lg-4 col-md-6 portfolio-item isotope-item filter-books\">
              <div class=\"portfolio-content h-100\">
                <a href=\"assets/Impact-1.0.0/assets/img/portfolio/books-3.jpg\" data-gallery=\"portfolio-gallery-app\" class=\"glightbox\"><img src=\"assets/Impact-1.0.0/assets/img/portfolio/books-3.jpg\" class=\"img-fluid\" alt=\"\"></a>
                <div class=\"portfolio-info\">
                  <h4><a href=\"portfolio-details.html\" title=\"More Details\">Books 3</a></h4>
                  <p>Lorem ipsum, dolor sit amet consectetur</p>
                </div>
              </div>
            </div><!-- End Portfolio Item -->

          </div><!-- End Portfolio Container -->

        </div>

      </div>

    </section><!-- /Portfolio Section -->


    <!-- Contact Section -->
    <section id=\"contact\" class=\"contact section\">

      <!-- Section Title -->
      <div class=\"container section-title\" data-aos=\"fade-up\">
        <h2>Contact</h2>
        <p>Necessitatibus eius consequatur ex aliquid fuga eum quidem sint consectetur velit</p>
      </div><!-- End Section Title -->

      <div class=\"container\" data-aos=\"fade-up\" data-aos-delay=\"100\">

        <div class=\"row gx-lg-0 gy-4\">

          <div class=\"col-lg-4\">
            <div class=\"info-container d-flex flex-column align-items-center justify-content-center\">
              <div class=\"info-item d-flex\" data-aos=\"fade-up\" data-aos-delay=\"200\">
                <i class=\"bi bi-geo-alt flex-shrink-0\"></i>
                <div>
                  <h3>Address</h3>
                  <p>A108 Adam Street, New York, NY 535022</p>
                </div>
              </div><!-- End Info Item -->

              <div class=\"info-item d-flex\" data-aos=\"fade-up\" data-aos-delay=\"300\">
                <i class=\"bi bi-telephone flex-shrink-0\"></i>
                <div>
                  <h3>Call Us</h3>
                  <p>+1 5589 55488 55</p>
                </div>
              </div><!-- End Info Item -->

              <div class=\"info-item d-flex\" data-aos=\"fade-up\" data-aos-delay=\"400\">
                <i class=\"bi bi-envelope flex-shrink-0\"></i>
                <div>
                  <h3>Email Us</h3>
                  <p>info@example.com</p>
                </div>
              </div><!-- End Info Item -->

              <div class=\"info-item d-flex\" data-aos=\"fade-up\" data-aos-delay=\"500\">
                <i class=\"bi bi-clock flex-shrink-0\"></i>
                <div>
                  <h3>Open Hours:</h3>
                  <p>Mon-Sat: 11AM - 23PM</p>
                </div>
              </div><!-- End Info Item -->

            </div>

          </div>

          <div class=\"col-lg-8\">
            <form action=\"forms/contact.php\" method=\"post\" class=\"php-email-form\" data-aos=\"fade\" data-aos-delay=\"100\">
              <div class=\"row gy-4\">

                <div class=\"col-md-6\">
                  <input type=\"text\" name=\"name\" class=\"form-control\" placeholder=\"Your Name\" required=\"\">
                </div>

                <div class=\"col-md-6 \">
                  <input type=\"email\" class=\"form-control\" name=\"email\" placeholder=\"Your Email\" required=\"\">
                </div>

                <div class=\"col-md-12\">
                  <input type=\"text\" class=\"form-control\" name=\"subject\" placeholder=\"Subject\" required=\"\">
                </div>

                <div class=\"col-md-12\">
                  <textarea class=\"form-control\" name=\"message\" rows=\"8\" placeholder=\"Message\" required=\"\"></textarea>
                </div>

                <div class=\"col-md-12 text-center\">
                  <div class=\"loading\">Loading</div>
                  <div class=\"error-message\"></div>
                  <div class=\"sent-message\">Your message has been sent. Thank you!</div>

                  <button type=\"submit\">Send Message</button>
                </div>

              </div>
            </form>
          </div><!-- End Contact Form -->

        </div>

      </div>

    </section><!-- /Contact Section -->

  </main>
        ";




    }

}
