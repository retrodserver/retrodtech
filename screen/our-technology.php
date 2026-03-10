<style>
    @import url('https://fonts.googleapis.com/css?family=Josefin+Sans:700&display=swap');

    :root {
        --purple: #4c3b4d;
        --green: #61c9a8;
        --red: #a53860;
        --creme: #ffeedb;
        --silver: #ada8b6;
    }

    .mainheading {
        margin: 0 auto 50px;
        text-align: center;
        width: 100%;
        z-index: 5;
        position: relative;
    }

    .productsInner ul {
        position: relative;
        z-index: 10;
        margin: 0;
        list-style: none;
        display: flex;
        justify-content: center;
        align-items: start;
        flex-wrap: wrap;
        gap: 30px;
        padding: 0;
        text-align: center;

    }

    .productImg {
        width: 130px;
        height: 130px;
        display: flex;
        justify-content: center;
        align-items: center;
        background: #fff;
        box-shadow: 0 14px 40px rgba(103, 122, 146, 0.2);
        border-radius: 100%;
        margin: 0 auto 20px;
        transition: 0.5s ease-in-out;
    }

    .productImg:hover {
        transform: scale(1.2);
        cursor: pointer;
    }

    /* .productImg:hover img {
    transform: scale(1.5);
    } */

    .productsInner ul li img {
        max-height: 55px;
        width: auto;
    }

    .productsInner ul li {
        width: 12%;
    }

    .productList li a {
        font-size: 16px;
        font-weight: 600;
        color: var(--secondaryColor);
        padding-top: 0;
        text-align: center;
        display: flex;
        justify-content: center;
        align-items: center;
        flex-wrap: wrap;
        text-decoration: none;
        /* filter: grayscale(1); */

    }

    .productList li a:hover {
        filter: grayscale(0);
    }

    .productList li a span {
        margin: 0 40px;
        text-align: center;
    }

    @media (max-width: 1200px) {
        .productsInner ul li {
            width: 18%;
        }

        .productImg {
            width: 110px;
            height: 110px;
        }
    }

    @media (max-width: 768px) {
        .productsInner ul {
            gap: 20px;
        }

        .productsInner ul li {
            width: 30%;
        }

        .productImg {
            width: 100px;
            height: 100px;
        }

        .productList li a {
            font-size: 14px;
        }
    }

    @media screen and (max-width: 480px) {
        .productsInner ul li {
            width: 40%;
            max-width: 200px;
        }

        .productImg {
            width: 90px;
            height: 90px;
        }

        .productList li a {
            font-size: 12px;
        }
    }

    .allAminities::before {

        background-color: #3498db;



    }

    .productWithArrow {
        position: relative;
    }

    .productWithArrow .arrowIcon {
        position: absolute;
        left: -20px;
        /* Adjust spacing from the product */
        top: 50%;
        transform: translateY(-50%);
        width: 10px;
        height: 10px;
        border-left: 2px solid #333;
        border-bottom: 2px solid #333;
        transform: rotate(45deg) translateY(-50%);
    }

    @media screen and (max-width: 1000px) {
        .arrow_icon img {
            display: none;
        }
    }

    /* .ourProducts {
        background-color: #f8f9fa;
        height: calc(100vh - 70px) !important;
        display: flex;
        align-items: center;
    } */
    .ourProducts {
        background-color: #f8f9fa;
        min-height: calc(70vh - 70px);

        display: flex;
        align-items: center;
        padding: 20px;

        box-sizing: border-box;

    }

    @media (max-width: 768px) {
        .ourProducts {
            flex-direction: column;

            justify-content: center;

            text-align: center;

        }
    }

    @media (max-width: 576px) {
        .ourProducts {
            padding: 15px;

        }
    }

    @media screen and (max-width: 1000px) {
        .ourProducts {
            padding: 20px 0px 20px 0px;

        }
    }
</style>


<section class="ourProducts">
    <div class="container">
        <div class="mainheading text-centre">
            <h2 class="about-title" style="font-size: 45px !important;">Our End-to-End Technology Solutions</h2>
        </div>
        <div class="text-box mb-4 pt-2" style="text-align: center; padding: 0 15px;">
            <p style="font-weight: 600; margin: 0 auto; font-size: 1.2rem; line-height: 1.5;">Retrod Technology
                offers
                end-to-end solutions,
                empowering businesses with innovative tools, seamless integration, and scalable systems for
                future-ready
                growth.
            </p>
        </div>
        <div class="productsInner" style="position: relative;">
            <div class="arrow_icon"
                style="width: 95px;height: auto;position: absolute;bottom: 72px;left: -37px;opacity: .3;">
                <img src="img/arrow_symbol_bottom.png" loading="lazy" decoding="async" alt="">
            </div>
            <ul class="productList py-5">

                <li>
                    <div data-aos="fade-right" class="productWithArrow">
                        <a href="https://retrodtech.com/pms" target="_blank">

                            <!-- <div class="arrowIcon"></div>  -->
                            <div class="productImg">
                                <img class="allAminities" src="img/hotel.png" loading="lazy" decoding="async" alt="Retrod products">
                            </div>
                            <span>Hotel PMS</span>
                        </a>
                    </div>
                </li>

                <li>
                    <div data-aos="fade-right">
                        <a href="https://retrodtech.com/restaurant-pos" target="_blank">
                            <div class="productImg"><img src="img/food.png" loading="lazy" decoding="async" alt="Retrod products"></div>
                            <span>Restaurant POS</span>
                        </a>
                    </div>
                </li>

                <!-- Remaining Products -->
                <li>
                    <div data-aos="fade-right">
                        <a href="https://retrodtech.com/product?id=web-master" target="_blank">
                            <div class="productImg"><img src="img/link-building.png" loading="lazy" decoding="async" alt="Retrod products"></div>
                            <span>Website Builder</span>
                        </a>
                    </div>
                </li>

                <li>
                    <div data-aos="fade-right">
                        <a href="https://retrodtech.com/product?id=booking-engine" target="_blank">
                            <div class="productImg"><img src="img/calendar.png" loading="lazy" decoding="async" alt="Retrod products"></div>
                            <span>Booking Engine</span>
                        </a>
                    </div>
                </li>

                <li>
                    <div data-aos="fade-right">
                        <a href="https://retrodtech.com/payment-solution" target="_blank">
                            <div class="productImg"><img src="img/integration.png" loading="lazy" decoding="async" alt="Retrod products"></div>
                            <span>Payment Solution</span>
                        </a>
                    </div>
                </li>

                <li>
                    <div data-aos="fade-right">
                        <a href="https://retrodtech.com/Revenue" target="_blank">
                            <div class="productImg"><img src="img/business.png" loading="lazy" decoding="async" alt="Retrod products"></div>
                            <span>Revenue Management</span>
                        </a>
                    </div>
                </li>
            </ul>
        </div>
    </div>
</section>