<!DOCTYPE html>
<html>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <style>
        body {
            font-family: Arial, Helvetica, sans-serif;
        }

        /* The Modal (background) */
        .modal {
            display: none;
            /* Hidden by default */
            position: fixed;
            /* Stay in place */
            z-index: 1;
            /* Sit on top */
            padding-top: 100px;
            /* Location of the box */
            left: 0;
            top: 0;
            width: 100%;
            /* Full width */
            height: 100%;
            /* Full height */
            overflow: auto;
            /* Enable scroll if needed */
            background-color: rgb(0, 0, 0);
            /* Fallback color */
            background-color: rgba(0, 0, 0, 0.4);
            /* Black w/ opacity */
        }


    </style>
</head>

<body>

    <h2>Modal Example</h2>

    <!-- Trigger/Open The Modal -->
    <button id="myBtn">Open Modal</button>

    <!-- The Modal -->
    <div id="myModal" class="modal">

        <!-- Modal content -->
        <div class="modal-content">

            <div class="product-box">
                <div class="left-box">
                    <img src="./images/sapphire1.jpg" alt="product image" style="display: block;">
                </div>
                <div class="right-box">
                    <div class="product-name">Product name</div>
                    <div class="right-top-box"> Lorem ipsum dolor sit amet consectetur adipisicing elit. Fugiat veniam facere reiciendis quisquam itaque maiores nobis! Unde, ipsam iste doloremque animi asperiores minus facere est odit enim. Ex provident repellat perspiciatis consequuntur corrupti veniam quod odit, enim eius reprehenderit ducimus?
                    </div>
                    <div class="right-bottom-box">
                        <div class="current-price-txt">Preis</div>
                        <div class="before-price-txt">Alter Preis</div>
                        <div class="current-price">999.99</div>
                        <div class="before-price">1000.99</div>
                    </div>
                    <div class="product-detail-link">
                        <a class="button" href="#" alt="product name">Zum Shop</a>
                    </div>
                </div>
            </div>
        </div>

    </div>

    <script>
        // Get the modal
        var modal = document.getElementById("myModal");

        // Get the button that opens the modal
        var btn = document.getElementById("myBtn");

        // Get the <span> element that closes the modal
        var span = document.getElementsByClassName("close")[0];

        // When the user clicks the button, open the modal 
        btn.onclick = function() {
            modal.style.display = "block";
        }

        // When the user clicks on <span> (x), close the modal
        span.onclick = function() {
            modal.style.display = "none";
        }

        // When the user clicks anywhere outside of the modal, close it
        window.onclick = function(event) {
            if (event.target == modal) {
                modal.style.display = "none";
            }
        }
    </script>

</body>

</html>