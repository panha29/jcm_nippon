<style>
@media only screen and (max-width: 600px) {
    .main{
        padding-left: 0px !important;
    }
    .main-slide-responsive{
        margin-top:60px;
        padding-left: 0px !important;
    }
    .brand-responsive{
        width: 100% !important;
        padding: 5%;
        margin-top: 2%;
    }

    .brand-responsive .card-body{
        padding: 12px;
    }

    .img-card{
        width: 100% !important;
    }
    .product-responsive{
        padding: 5%;
    }

    .glide__slide{
        width: 125px !important;
    }

    .card-responsive{
        height: 220px !important;
    }

    .img-responsive{
        width: 105px !important;
    }

    .service-responsive{
        width: 100%;
        padding: 5%;
    }
    .service-responsive img{
        border: initial;
        border-top-left-radius: var(--border-radius-lg);
        border-top-right-radius: var(--border-radius-lg);
    }
    .service-responsive .row{
        --bs-gutter-x: 0.5rem;
    }
    .bigger-screen{
        display: none;
    }
    .span-text-responsive{
        font-size: 12px;
        text-align: left;
    }
    .professional-responsive{
        padding: 15px;
        width: 100%;
    }
    .professional-responsive .row{
        display: list-item;
    }
    .professional-responsive .col{
        margin-top: 15px;
    }
    .professional-responsive img{
        border: initial;
        border-top-left-radius: var(--border-radius-lg);
        border-top-right-radius: var(--border-radius-lg);
    }
    .prof-span{
        font-size: 13px;
        padding: 17px !important;
        text-transform:uppercase;
    }
    .footer-responsive{
        width:100%;
        margin-top: 2%;
        margin-right:auto;
        margin-left:auto;
    }
    .footer-responsive .container{
        width: 140px !important;
    }
    .footer-responsive i{
        font-size: 25px !important;
    }

    .footer-responsive img{
        width: 300px;
    }

    .footer-responsive .footer-detail{
        font-size: 9px;
        padding: 15px;
    }

    .footer-img{
        padding: 0;
        width: 100%;
        height: 90px;
    }
}


@media only screen and (min-width:800px){

    .brand-responsive, .product-responsive, .service-responsive, .professional-responsive{
        margin-top: 4%;
    }

    .brand-responsive, .product-responsive, .service-responsive, .professional-responsive, h3{
        font-weight: bolder;
        text-align: center;
    }

    .brand-responsive .container-divider{
        width: 50%;
        margin-left: auto;
        margin-right: auto;
    }

    .brand-responsive .divider{
        text-align: center;
        width: 100%;
        height: 1px;
        background-color: rgb(212, 212, 212);
        margin-top: 12px;
        /* float: right; */
    }

    .img-card{
        width: 50% !important;
    }
    .product-slide{
        /* margin-left:auto !important; */
        margin-right:auto;
        display:block;
        width:50% !important;
    }
    .img-responsive{
        width: 170px !important;
    }
    .service-responsive{
        width: 50%;
        margin-left: auto;
        margin-right: auto;

    }

    .product-responsive{
        font-weight: bolder;
        text-align: center;
    }

    .product-responsive h3{
        font-weight: bolder;
        text-align: center;
    }


    .service-responsive img{
        border: initial;
        border-top-left-radius: var(--border-radius-lg);
        border-top-right-radius: var(--border-radius-lg);
    }
    .smaller-screen{
        display: none;
    }
    .span-text-responsive{
        font-size: 12px;
        font-weight: bold;
        text-align: center;
    }
    .professional-responsive{
        /* padding: 15px; */
        width: 50%;
        margin-left: auto;
        margin-right: auto;
        margin-top: 2%;
    }
    .professional-responsive img{
        border: initial;
        border-top-left-radius: var(--border-radius-lg);
        border-top-right-radius: var(--border-radius-lg);
    }
    .prof-span{
        font-size: 15px;
    }

    .footer-responsive{
        width:50%;
        margin-top: 2%;
        margin-right:auto;
        margin-left:auto;
    }

    .footer-responsive .container{
        width: 300px !important;
    }
    .footer-responsive footer{
        background-image: url(../img/footer.png);
    }

}
</style>
