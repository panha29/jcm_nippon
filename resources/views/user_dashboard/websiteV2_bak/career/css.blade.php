<style>

    @media screen and (max-width:430px){
        .mobile-lineheight{
            line-height: 21px !important;
            padding: 0px;
        }
        .modal{
        display: none; /* Hidden by default */
        position: fixed; /* Stay in place front is invalid - may break your css so removed */
        padding-top: 100px; /* Location of the box - don't know what this does?  If it is to move your modal down by 100px, then just change top below to 100px and remove this*/
        left: 0;
        right:0; /* Full width (left and right 0) */
        top: 0;
        bottom: 0; /* Full height top and bottom 0 */
        overflow: auto; /* Enable scroll if needed */
        background-color: rgb(0,0,0); /* Fallback color */
        background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
        z-index: 9999; /* Sit on top - higher than any other z-index in your site*/
        }


    }
    @media screen and (max-width: 879px){
        .modal {
            display: none; /* Hidden by default */
            position: fixed; /* Stay in place */
            z-index: 9999; /* Sit on top */
            padding-top: 100px; /* Location of the box */
            left: 0;
            top: 0;
            width: 100%; /* Full width */
            height: 100%; /* Full height */
            overflow: auto; /* Enable scroll if needed */
            background-color: rgb(0,0,0); /* Fallback color */
            background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
        }

        /* Modal Content */
        .modal-content {
            background-color: #fefefe;
            margin: auto;
            padding: 40px;
            width: 100%;
            border-radius: 30px;
        }

        .btn-modal{
            background-color: red;
            border: 0;
            border-radius: 15px;
            width: 100px;
            float: right;
            height: 50px;
            font-weight: 600;
            color: white;
            font-size: 16px;
        }

        /* The Close Button */
        .close {
            color: #aaaaaa;
            float: right;
            font-size: 28px;
            font-weight: bold;
        }

        .close:hover,
        .close:focus {
            color: #000;
            text-decoration: none;
            cursor: pointer;
        }
    }

@media screen and (min-width: 1920px){
    body {
         padding-right: 0 !important;
    }

    .modal {
    display: none; /* Hidden by default */
    position: fixed; /* Stay in place */
    z-index: 9999; /* Sit on top */
    padding-top: 100px; /* Location of the box */
    left: 0;
    top: 0;
    width: 100%; /* Full width */
    height: 100%; /* Full height */
    overflow: auto; /* Enable scroll if needed */
    background-color: rgb(0,0,0); /* Fallback color */
    background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
    }

    /* Modal Content */
    .modal-content {
    background-color: #fefefe;
    margin: auto;
    padding: 40px;
    width: 50%;
    border-radius: 30px;
    }

    .btn-modal{
    background-color: red;
    border: 0;
    border-radius: 15px;
    width: 100px;
    float: right;
    height: 50px;
    font-weight: 600;
    color: white;
    font-size: 16px;
    }



    /* The Close Button
    .close {
    color: #aaaaaa;
    float: right;
    font-size: 28px;
    font-weight: bold;
    }

    .close:hover,
    .close:focus {
    color: #000;
    text-decoration: none;
    cursor: pointer;
    } */
    }
</style>

<script>
    // Get the modal
    var modal = document.getElementById("career{{$item->id}}");
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
