<?php

// TEMPLATE GENERIC

include("_header.php"); ?>

    <div id="page-content">
        <div id="slides-container">

            <div id="slides"

                data-0="transform: translate(0%, 0%)"
                data-150p="transform: translate(0%, -50%)"
                data-200p=""
                data-300p="transform: translate(0%, -100%)"
                data-350p=""
                data-450p="transform: translate(0%, -150%)"
            >

                <div id="slides-1" class="slide">

                     <!--data-bottom-top="transform: translate(0, 0)"-->
                     <!--data-top-bottom="transform: translate(0, -100%)"-->
                    <!--&gt;-->

                    <div class="caption">
                        <h1>BMW DISCOVERY TOUR</h1>
                    </div>
                </div>
                <div id="slides-2" class="slide"

                     data-bottom-top="transform: translate(0, -100%)"
                     data-top-bottom="transform: translate(0, 100%)"
                >

                     <!--data-center="transform: translate(0, 100%)"-->
                     <!--data-top-bottom="transform: translate(0, -50%)"-->
                <!--&gt;-->
                    <div class="caption">
                        <h1>Image 2 Title</h1>
                        <p>Image description goes here..</p>
                    </div>
                </div>
                <div id="slides-3" class="slide"

                     data-bottom-top="transform: translate(0, -200%)"
                     data-top-bottom="transform: translate(0, 200%)"
                >
                    <div class="caption">
                        <h1>Image 3 Title</h1>
                        <p>Image description goes here..</p>
                    </div>
                </div>
                <div id="slides-4" class="slide">

                     <!--data-bottom-top="transform: translate(0, -200%)"-->
                     <!--data-top-bottom="transform: translate(0, 0)"-->
                     <!--data-anchor-target=".caption"-->
                <!--&gt;-->
                    <div class="caption">
                        <h1>Image 4 Title</h1>
                        <p>Image description goes here..</p>
                    </div>
                </div>
            </div>

        </div>

        <div id="helper" class="dot-navigation">
            <div class="marker red"></div>
            <div class="marker green"></div>
            <div class="marker blue"></div>
            <div class="marker yellow"></div>
        </div>

    </div>

<?php include("_footer.php"); ?>