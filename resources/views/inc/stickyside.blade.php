

<style media="screen">
  #sticky_side_button {
    color: #007bff;
    text-decoration: none;
    background-color: transparent;
  }

  .sticky-side-button {
    position: fixed;
    bottom: 25%;
    right: -84px!important;
    background-color: #b64243!important;
    color: #ffffff!important;
    padding: 10px 30px;
    font-weight: 700;
    -ms-transform: rotate(-90deg);
    transform: rotate(-90deg);
    z-index: 10;
    border-top-left-radius: 8px;
    border-top-right-radius: 8px;
    display: none;
    -webkit-transition: all 0.3s ease-in-out;
    -o-transition: all 0.3s ease-in-out;
    transition: all 0.3s ease-in-out;
  }

  .sticky-side-button i {
    font-size: 16px;
    margin-right: 10px;
  }


  @media (min-width: 1200px) {
    .sticky-side-button {
      padding: 10px 30px;
      right: -50px;
      display: block;
    }

    .sticky-side-button i {
      font-size: 12px;
    }
  }
  @media (min-width: 768px) {
    .sticky-side-button {
      bottom: 50%;
    }
  }


</style>



<a id="sticky_side_button" href="#block-views-send-us-message" class="sticky-side-button">
  <!-- <i class="far fa-comment-dots"></i> -->
  Book an Appointment
</a>
