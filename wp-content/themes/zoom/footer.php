<footer>

    <div class="links">
        <?php wp_nav_menu([
                            'menu'              => 'footer-menu',
                            'container'         => false,
                            'menu_class'        => 'footer-links'

                    ]); ?>
    </div>
    <div class="copyrights">
        <h5><?php _e('ALL RIGHTS RESERVED © 2020', 'footer'); ?></h5>
    </div>

    </div>

    <?php wp_footer(); ?>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"
        integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/@splidejs/splide@latest/dist/js/splide.min.js"></script>
    <script
        src="https://cdn.jsdelivr.net/npm/@splidejs/splide-extension-grid@0.1.2/dist/js/splide-extension-grid.min.js">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/tiny-slider/2.9.2/min/tiny-slider.js"></script>


    <script>
    /* Portfolio section slider */
    document.addEventListener('DOMContentLoaded', function() {
        let splideElement = document.querySelector(".splide1");
        if (sliderElement) {
            new Splide('.splide1', {
                grid: {
                    rows: 2,
                    cols: 3,
                    gap: {
                        row: '20px',
                        col: '50px',
                    }
                },
                breakpoints: {
                    900: {
                        height: '8rem',
                        grid: {
                            rows: 1,
                            cols: 2,
                            gap: {
                                row: '40px',
                                col: '10px',
                            }
                        }
                    },
                    600: {
                        grid: {
                            rows: 1,
                            cols: 2,
                            gap: {
                                row: '40px',
                                col: '1px',
                            }
                        }
                    }
                }
            }).mount(window.splide.Extensions);
        }
    });

    /* Solutions section slider */
    // forEach function
    var forEach = function(array, callback, scope) {
        for (var i = 0; i < array.length; i++) {
            callback.call(scope, i, array[i]); // passes back stuff we need
        }
    }

    // select all slider parent div.tartist-tiny-slider
    var sliders = document.querySelectorAll('.tartist-tiny-slider');

    // chunk function to make groups for every slider's childrens
    var chunk = function(array, size) {
        let arr = [];
        for (let i = 0; i < array.length; i += size) {
            let newSlicedArray = Array.prototype.slice.call(array, i, i + size);
            arr.push(newSlicedArray);
        }
        return arr;
    }

    // applying foreach function to the sliders
    forEach(sliders, function(index, value) {

        //selecting childrens
        let childrens = value.querySelectorAll(".tartist-tiny-slider__item");

        //getting chunksize from the parent
        let chunkSize = value.dataset.chunksize;

        //making final arrays for the children with chunk size
        let final = chunk(childrens, parseInt(chunkSize));

        //wrapping the chunks with div.wrap
        let newHTML = final.map(towrap => towrap.reduce((acc, el) => (acc.appendChild(el), acc), document
            .createElement('div'))).forEach(el => {
            el.className = "wrap";
            value.appendChild(el)
        })

        //initialize tiny slider    
        let slider = tns({
            container: value,
            items: 1,
            slideBy: "page",
            autoplay: true,
            autoplayButtonOutput: false,
            loop: true,
            mouseDrag: true,
            gutter: 0,
            controls: false,
            navPosition: "bottom",
            nav: true,
            arrowKeys: true,
        });

    });

    let sliderElement = document.querySelector(".my-slider");
    if (sliderElement) {
        var slider = tns({
            container: '.my-slider',
            items: 2,
            center: true,
            autoplay: true,
            autoplayButtonOutput: false,
            loop: true,
            swipeAngle: false,
            speed: 200,
            startIndex: 5,
            mouseDrag: true,
            controls: false,
            nav: false,
        });
    }


    /* Hero homepage slider */
    jQuery(document).ready(() => {

        jQuery('#myCarousel2').carousel({
            pause: 'false',

        });

        jQuery('#myCarousel2').on('slid', function() {
            jQuery('#myCarousel').carousel('next');
        });

        jQuery(".carousel-control-prev").click(() => {
            jQuery("#myCarousel2").carousel('prev');
        });
        jQuery(".carousel-control-next").click(() => {
            jQuery("#myCarousel2").carousel('next');
        });

    });

    /* Team slider */
    document.addEventListener('DOMContentLoaded', function() {
        let sliderElement = document.querySelector(".team_members_list");
        if (sliderElement) {
            var slider2 = tns({
                container: '.team_members_list',
                items: 1,
                autoplay: true,
                autoplayButtonOutput: false,
                loop: false,
                speed: 200,
                mouseDrag: true,
                gutter: 13,
                controlsPosition: "bottom",
                navPosition: "bottom",
                controlsContainer: "#customize-controls",
                responsive: {
                    1025: {
                        items: 4,
                        center: false,
                        loop: false,
                    },
                    1024: {
                        items: 3,
                        center: false,
                        loop: false,
                    },
                    599: {
                        items: 2,
                        gutter: 5,
                        center: true,
                        loop: true,
                    },
                },
            });
        }
    });


    let form = document.querySelector("#mc-embedded-subscribe-form");
    let error = document.querySelector("#mce-error-response");

    error.style.display = 'none';
    form.addEventListener('submit', (e) => {

        let email = document.querySelector("#mce-EMAIL").value;
        mailformat = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;

        if (email.match(mailformat)) {
            error.style.display = 'none';

            return true;
        } else {
            e.preventDefault();
            error.style.display = 'block';


            return false;
        }


    });
    </script>
</footer>
</body>

</html>