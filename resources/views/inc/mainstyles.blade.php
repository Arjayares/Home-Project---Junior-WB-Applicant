
<!-- MAIN -->
<style media="screen">
  body {
    font-family: 'Nunito Sans', sans-serif;
    font-size: 13px;
    font-weight: 400;
     line-height: 27px;
    overflow-y: auto;
    overflow-x: hidden;
    color: #4c4c4c;
    overflow-y: hidden;
    opacity: 1;
  }

  body.menu-open{
    overflow-y: scroll!important;
    /*position: fixed; */
  }

  /*body.menu-open header {
    width: 100%;
    position: fixed;
  }*/

  section {
    padding: 0;
  }

  .not-front {
  }

  .visually-hidden {
    position: absolute !important;
    overflow: hidden;
    clip: rect(1px,1px,1px,1px);
    width: 1px;
    height: 1px;
    word-wrap: normal;
  }

  a {
    color: #007bff;
    text-decoration: none;
    background-color: transparent;
  }

  .min-vh-100 {
    min-height: 100vh !important;
  }
  .flex-column {
    flex-direction: column !important;
  }
  .d-flex {
    display: flex !important;
  }

  div {
    max-width: 100%;
  }

  header.header {
    border-bottom: 1px solid #983738;
    background: #ffffff;
  }

  @media (min-width: 768px) {
    body {
      font-size: 15px;
      text-align: justify;
    }
  }
</style>

<!-- HEADER -->
<style media="screen">
  header.header {
    border-bottom: 1px solid #983738;
    background: #FFF;
  }

  .navbar {
    position: relative;
    display: flex;
    flex-wrap: wrap;
    align-items: center;
    justify-content: space-between;
    padding: 0.5rem 1rem;
  }

  header.header .container {
      max-width: 1600px;
  }

  .navbar > .container, .navbar > .container-fluid {
    display: flex;
    flex-wrap: wrap;
    align-items: center;
    justify-content: space-between;
  }

  header.header .navbar-brand-container {
    flex-grow: 1;
  }

  .navbar-brand {
    display: inline-block;
    padding-top: 0.3125rem;
    padding-bottom: 0.3125rem;
    margin-right: 1rem;
    font-size: 1.25rem;
    line-height: inherit;
    white-space: nowrap;
  }

  .navbar-light .navbar-brand {
    color: rgba(0,0,0,0.9);
  }

  header.header .navbar-brand {
    margin: 0;
    width: 100%;
    text-align: left;
  }

  .sr-only {
    position: absolute;
    width: 1px;
    height: 1px;
    padding: 0;
    margin: -1px;
    overflow: hidden;
    clip: rect(0, 0, 0, 0);
    border: 0;
  }

  .sr-only {
    position: absolute;
    width: 1px;
    height: 1px;
    padding: 0;
    overflow: hidden;
    clip: rect(0,0,0,0);
    white-space: nowrap;
    border: 0;
  }

  header.header .header-contacts {
    width: 100%;
  }

  header.header .header-contacts ul {
    padding: 0;
    display: block;
    margin: 0;
    text-align: center;
  }

  header.header .header-contacts li {
    display: block;
    margin-right: 0;
  }


  header.header .header-contacts li a {
    outline: none;
    text-decoration: none;
    color: #4c4c4c;
  }

  /* header.header .header-contacts li:hover a {
    text-decoration: underline;
    color: #4c4c4c;
  } */

  header.header .header-contacts li a:hover {
    text-decoration: underline;
    color: #4c4c4c;
  }

  header.header .header-contacts li i {
    color: #983738;
  }

  .navbar .site-header-menu-toggle {
    width: 100%;
    text-align: right;
  }

  .site-header-menu-toggle--button {
    padding-top: 10px;
    padding-bottom: 0;
    background-color: transparent;
    display: inline-block;
  }

  .navbar .site-header-menu-toggle .site-header-menu-toggle--button {
    padding: 8px;
  }

  .site-header-menu-toggle--button .toggle-icon--bar {
    display: block;
    width: 40px;
    height: 5px;
    border-radius: 4px;
    background-color: #983738;
    -webkit-transition: -webkit-transform 0.2s;
    transition: -webkit-transform 0.2s;
    transition: transform 0.2s;
    transition: transform 0.2s,-webkit-transform 0.2s;
    -webkit-transform-origin: 1px;
    -ms-transform-origin: 1px;
    transform-origin: 1px;
  }

  .site-header-menu-toggle--button .toggle-icon--bar-middle {
    width: 25px!important;
  }

  .site-header-menu-toggle--button .toggle-icon--bar.toggle-icon--bar-middle {
    -webkit-transition: opacity 0.2s;
    transition: opacity 0.2s;
  }

  .site-header-menu-toggle--button .toggle-icon--bar + .toggle-icon--bar {
    margin: 7px auto 0;
  }

  .site-header-menu-toggle--button .show-for-sr {
    position: absolute !important;
    width: 1px;
    height: 1px;
    padding: 0;
    margin: -1px;
    overflow: hidden;
    clip: rect(0 0 0 0);
    border: 0;
  }


  .site-header-menu-toggle--button.active .toggle-icon--bar-top {
    -webkit-transform: rotate(45deg);
    -ms-transform: rotate(45deg);
    transform: rotate(45deg);
  }

  .site-header-menu-toggle--button.active .toggle-icon--bar {
    width: 35px !important;
    -webkit-transform-origin: 0;
    -ms-transform-origin: 0;
    transform-origin: 0;
  }

  .site-header-menu-toggle--button.active .toggle-icon--bar {
    width: 35px !important;
    -webkit-transform-origin: 0;
    -ms-transform-origin: 0;
    transform-origin: 0;
  }

  .site-header-menu-toggle--button.active .toggle-icon--bar:nth-child(2) {
    opacity: 0;
  }

  .site-header-menu-toggle--button.active .toggle-icon--bar-bottom {
    -webkit-transform: rotate(-45deg);
    -ms-transform: rotate(-45deg);
    transform: rotate(-45deg);
  }



  @media (min-width: 768px) {
    header.header {
      position: -webkit-sticky;
      position: sticky;
      top: 0;
      z-index: 40;
      -webkit-transition: all 0.3s ease-in-out;
      -o-transition: all 0.3s ease-in-out;
      transition: all 0.3s ease-in-out;
    }

    header.header .header-contacts {
      width: auto;
    }

    header.header .header-contacts ul {
      margin: 0 30px 0 0;
      text-align: left;
    }

    header.header .header-contacts li {
      margin-right: 30px;
      display: inline-block;
    }

    .navbar .site-header-menu-toggle {
      width: 40px;
    }

    .site-header-menu-toggle--button {
      padding-top: 15px;
      padding-bottom: 15px;
    }
  }

  @media (min-width: 992px) {
    .navbar-expand-lg {
      flex-flow: row nowrap;
      justify-content: flex-start;
    }

    .navbar-expand-lg > .container, .navbar-expand-lg > .container-fluid {
      flex-wrap: nowrap;
    }

    header.header .navbar-brand {
      margin-right: 1rem;
      width: auto;
    }
  }

  @media (min-width: 1024px) {
    header.header .header-contacts ul {
      margin: 0 50px 0 0;
    }
  }

  /* @media (max-width: 1366px) {
    header.header .header-contacts {
      display: none;
    }
  } */

</style>

<!-- SIDEBAR -->
<style media="screen">
  .menu-fixed {
    background: #983738;
    max-width: 100%;
    min-height: 100%;
    overflow: hidden;
    padding: 25px 35px;
    position: fixed;
    right: 0;
    width: 100%;
    z-index: 3000;
    opacity: 0;
    top: 0;
    transform: translateX(380px);
    -webkit-transition: all 300ms ease-out 0s;
    -moz-transition: all 300ms ease-out 0s;
    -o-transition: all 300ms ease-out 0s;
    -ms-transition: all 300ms ease-out 0s;
    transition: all 300ms ease-out 0s;
  }

  .menu-fixed.active {
    transform: translateX(0);
    opacity: 1;
  }

  .site-header-menu-toggle.mobile-menu {
    position: absolute;
    right: 15px;
    top: 0;
  }

  .block h2 {
    font-size: 18px;
    font-weight: 400;
    text-align: center;
    margin-bottom: 15px;
    text-transform: uppercase;
    letter-spacing: normal;
    color: #983738;
    font-weight: 800;
    letter-spacing: 3px;
  }

  .sr-only {
    position: absolute;
    width: 1px;
    height: 1px;
    padding: 0;
    margin: -1px;
    overflow: hidden;
    clip: rect(0, 0, 0, 0);
    border: 0;
  }

  .sr-only {
    position: absolute;
    width: 1px;
    height: 1px;
    padding: 0;
    overflow: hidden;
    clip: rect(0,0,0,0);
    white-space: nowrap;
    border: 0;
  }

  .nav {
    display: flex;
    flex-wrap: wrap;
    padding-left: 0;
    margin-bottom: 0;
    list-style: none;
  }

  .navbar-nav {
    display: flex;
    flex-direction: column;
    padding-left: 0;
    margin-bottom: 0;
    list-style: none;
  }

  .menu-fixed ul {
    text-align: left;
    list-style: none;
  }

  .menu-fixed li {
    -webkit-transition: all 0.3s ease-in-out;
    -o-transition: all 0.3s ease-in-out;
    transition: all 0.3s ease-in-out;
  }

  .navbar-nav .nav-link {
    padding-right: 0;
    padding-left: 0;
  }

  .nav-link {
    display: block;
    padding: 0.5rem 1rem;
  }


  .menu-fixed a {
    text-transform: uppercase;
    outline: none;
    text-decoration: none;
    color: #ffffff!important;
    font-size: 18px;
    font-weight: 600;
  }


  .menu-fixed a:hover,
  .menu-fixed a.active {
    text-decoration: underline;
  }

  .mt-3, .my-3 {
    margin-top: 1rem !important;
  }

  .menu-fixed .header-contacts {
    margin-top: 10px;
    padding-top: 10px;
    border-top: 1px solid #bc4647;
  }

  .menu-fixed ul {
    text-align: left;
    list-style: none;
  }

  .menu-fixed .header-contacts ul {
    padding: 0;
  }

  .menu-fixed li {
    -webkit-transition: all 0.3s ease-in-out;
    -o-transition: all 0.3s ease-in-out;
    transition: all 0.3s ease-in-out;
  }

  .menu-fixed .header-contacts a {
    outline: none;
    text-decoration: none;
    font-size: 14px;
  }

  .menu-fixed .header-contacts a:hover {
    text-decoration: underline;
    font-size: 14px;
  }

  @media (min-width: 560px) {
    .block h2 {
      font-size: 25px;
      line-height: 33px;
    }
  }


  @media (min-width: 768px) {
    .menu-fixed {
      max-width: 295px;
      top: auto;
    }

    .site-header-menu-toggle.mobile-menu {
      display: none;
    }

    .block h2 {
      margin-bottom: 30px;
      letter-spacing: 5px;
      font-weight: 400;
    }
  }

  @media (min-width: 1200px) {
    .block h2 {
      font-size: 36px;
      line-height: 45px;
    }
  }

</style>

<!-- PRE-FOOTER -->
<style media="screen">

  .block-views-send-us-message {
    padding: 70px 15px;
    background-image: url('/storage/send_a_message//smart-4168483.jpg');
    background-size: cover;
    background-position: center;
    background-repeat: no-repeat;
    background-attachment: fixed;
    position: relative;
    color: #FFF;
    /* z-index: -1; */
  }

  .block-views-send-us-message:before {
    content: "";
    position: absolute;
    width: 100%;
    height: 100%;
    top: 0;
    left: 0;
    z-index: 0;
    background-image: linear-gradient(to right,rgba(39,36,68,0.7),rgba(152,55,56,0.7));
  }

  .block-views-send-us-message .content {
    z-index: 9999;
    margin: auto;
  }


  #block-views-send-us-message.block h2 {
    font-size: 18px;
    font-weight: 400;
    text-align: center;
    margin-bottom: 15px;
    text-transform: uppercase;
    letter-spacing: normal;
    color: #983738;
    font-weight: 800;
    letter-spacing: 3px;
  }

  .block-views-send-us-message h2 {
    color: #ffffff!important;
    position: relative;
    max-width: 1200px;
    margin: 0 auto 30px;
    padding: 0 15px;
  }


  .block-views-send-us-message ._webform-subtext {
    font-weight: 800;
    font-size: 31px;
    line-height: 40px;
    margin-bottom: 10px;
  }

  .block-views-send-us-message ._webform-body {
    font-size: 21px;
    line-height: 30px;
    text-align: center;
  }


  .block-views-send-us-message ._webform-body p {
    color: #ffffff!important;
  }

  fieldset {
    display: block;
    margin-inline-start: 2px;
    margin-inline-end: 2px;
    padding-block-start: 0.35em;
    padding-inline-start: 0.75em;
    padding-inline-end: 0.75em;
    padding-block-end: 0.625em;
    min-inline-size: min-content;
    border-width: 2px;
    border-style: groove;
    border-color: threedface;
    border-image: initial;
  }

  .form-group {
    margin-bottom: 1rem;
  }


  .row>* {
    -ms-flex-negative: 0;
    flex-shrink: 0;
    /* width: 100%; */
    max-width: 100%;
    padding-right: calc(var(--bs-gutter-x)/2);
    padding-left: calc(var(--bs-gutter-x)/2);
    margin-top: var(--bs-gutter-y);
  }

  .col-1, .col-2, .col-3, .col-4, .col-5, .col-6, .col-7, .col-8, .col-9, .col-10,
  .col-11, .col-12, .col, .col-auto, .col-sm-1, .col-sm-2, .col-sm-3, .col-sm-4,
  .col-sm-5, .col-sm-6, .col-sm-7, .col-sm-8, .col-sm-9, .col-sm-10, .col-sm-11,
  .col-sm-12, .col-sm, .col-sm-auto, .col-md-1, .col-md-2, .col-md-3, .col-md-4,
  .col-md-5, .col-md-6, .col-md-7, .col-md-8, .col-md-9, .col-md-10, .col-md-11,
  .col-md-12, .col-md, .col-md-auto, .col-lg-1, .col-lg-2, .col-lg-3, .col-lg-4,
  .col-lg-5, .col-lg-6, .col-lg-7, .col-lg-8, .col-lg-9, .col-lg-10, .col-lg-11,
  .col-lg-12, .col-lg, .col-lg-auto, .col-xl-1, .col-xl-2, .col-xl-3, .col-xl-4,
  .col-xl-5, .col-xl-6, .col-xl-7, .col-xl-8, .col-xl-9, .col-xl-10, .col-xl-11,
  .col-xl-12, .col-xl, .col-xl-auto {
    position: relative;
    max-width: 100%;
    padding-right: 10px;
    padding-left: 10px;
  }

  fieldset {
    min-width: 0;
    padding: 0;
    margin: 0;
    border: 0;
  }

  a:not([href]):not([class]),
  a:not([href]):not([class]):hover {
    color: inherit;
    text-decoration: none;
  }

  .block-views-send-us-message ._webform-form {
    margin-top: 30px;
  }

  button, input {
    overflow: visible;
  }

  input, button, select, optgroup, textarea {
    margin: 0;
    font-family: inherit;
    font-size: inherit;
    line-height: inherit;
  }

  textarea {
    overflow: auto;
    resize: vertical;
  }

  textarea {
    resize: none !important;
  }

  ::-webkit-input-placeholder { /* Edge */
    color: #ffffff!important;
  }

  :-ms-input-placeholder { /* Internet Explorer 10-11 */
    color: #ffffff!important;
  }

  ::placeholder {
    color: #ffffff!important;
  }


  label {
    display: inline-block;
    margin-bottom: 0.5rem;
  }

  .sr-only {
    position: absolute;
    width: 1px;
    height: 1px;
    padding: 0;
    margin: -1px;
    overflow: hidden;
    clip: rect(0, 0, 0, 0);
    border: 0;
  }

  .sr-only {
    position: absolute;
    width: 1px;
    height: 1px;
    padding: 0;
    overflow: hidden;
    clip: rect(0,0,0,0);
    white-space: nowrap;
    border: 0;
    color: #ffffff;
  }




  .form-text {
    display: block;
    margin-top: 0.25rem;
  }

  .form-control {
    display: block;
    width: 100%;
    height: calc(1.5em + 0.75rem + 2px);
    padding: 0.375rem 0.75rem;
    font-size: 1rem;
    font-weight: 400;
    line-height: 1.5;
    color: #495057;
    background-color: #fff;
    background-clip: padding-box;
    border: 1px solid #ced4da;
    border-radius: 0.25rem;
    transition: border-color 0.15s ease-in-out,box-shadow 0.15s ease-in-out;
  }


  .block-views-send-us-message input.form-control,
  .block-views-send-us-message textarea {
    background: transparent;
    border-radius: 0;
    color: #ffffff!important;
    border: 1px solid rgba(255,255,255,0.5);
    border-top: 0;
    border-right: 0;
    -webkit-transition: all 0.3s ease-in-out;
    -o-transition: all 0.3s ease-in-out;
    transition: all 0.3s ease-in-out;
  }





  /* .block-views-send-us-message input.form-control,
  .block-views-send-us-message textarea {
    background: transparent;
    border-radius: 0;
    color: #FFF;
    border: 1px solid rgba(255,255,255,0.5);
    border-top: 0;
    border-right: 0;
    -webkit-transition: all 0.3s ease-in-out;
    -o-transition: all 0.3s ease-in-out;
    transition: all 0.3s ease-in-out;
  } */

  .resize-vertical {
    min-height: 2em;
    resize: vertical;
  }

  textarea.form-control {
    height: auto;
  }


  .block-views-send-us-message input.form-control:focus,
  .block-views-send-us-message textarea:focus {
    background: transparent;
    outline: none;
    box-shadow: none;
    border-left: 1px solid white;
    border-bottom: 1px solid white;
    color: #ffffff;
  }

  .form-control {
    color: #495057;
    background-color: #fff;
    background-clip: padding-box;
    border: 1px solid #ced4da;
    border-radius: 0.25rem;
    /* box-shadow: 0 0 0 0.2rem rgb(0, 123, 255, 25); */
  }

  .block-views-send-us-message .form-item-captcha-response {
    text-align: left;
    margin-bottom: 0;
  }

  .block-views-send-us-message .form-item-captcha-response label {
    font-size: 12px;
    margin-bottom: 0;
  }

  .block-views-send-us-message .form-item-captcha-response input {
    height: 25px;
    padding: 5px;
    font-size: 12px;
  }

  .block-views-send-us-message .form-item-captcha-response small.text-muted {
    color: #FFF !important;
  }

  .text-muted {
    color: #ffffff !important;
    /* color: #6c757d !important; */
  }

  small, .small {
    font-size: 80%;
    font-weight: 400;
  }


  button:not(:disabled),
  [type="button"]:not(:disabled),[t
  ype="reset"]:not(:disabled),
  [type="submit"]:not(:disabled) {
    cursor: pointer;
  }

  .btn:hover {
    color: #212529;
    text-decoration: none;
  }

  .btn-primary:hover {
    color: #fff;
    background-color: #0069d9;
    border-color: #0062cc;
  }

  .block-views-send-us-message input.button {
    font-size: 12px;
    min-width: 150px;
    border: 1px solid #983738;
    background-color: #983738;
    color: #FFF;
    text-transform: uppercase;
    font-weight: 800;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    -webkit-transition: all 0.3s ease-in-out;
    -o-transition: all 0.3s ease-in-out;
    transition: all 0.3s ease-in-out;
    padding: 12px;
    border-radius: 0;
  }

  .block-views-send-us-message input.button:hover {
    background-color: transparent;
    color: #983738;
  }

  .block-views-send-us-message input.button:hover {
    border-color: #983738;
  }

  .btn-primary:not(:disabled):not(.disabled):active,
  .btn-primary:not(:disabled):not(.disabled).active,
  .show > .btn-primary.dropdown-toggle {
    color: #fff;
    background-color: #0062cc;
    border-color: #005cbf;
  }


  @media (min-width: 560px) {
    #block-views-send-us-message.block h2 {
      font-size: 25px;
      line-height: 33px;
    }
  }

  @media (min-width: 576px) {
    .col-sm-12 {
      flex: 0 0 100%;
      max-width: 100%;
    }

    .col-sm-6 {
      flex: 0 0 50%;
      max-width: 50%;
    }
  }

  @media (min-width: 768px) {
    #block-views-send-us-message.block h2 {
      margin-bottom: 30px;
      letter-spacing: 5px;
      font-weight: 400;
    }

    .block-views-send-us-message input.button {
      font-size: 14px;
      min-width: 198px;
    }
  }

  @media (min-width: 992px) {
    .block-views-send-us-message h2 {
      text-align: left !important;
    }

    .col-lg-5, .col-lg-6 {
      -webkit-box-flex: 0;
      -ms-flex: 0 0 auto;
      flex: 0 0 auto;
    }

    .col-lg-6 {
      flex: 0 0 50%;
      max-width: 50%;
    }

    .block-views-send-us-message ._webform-body {
      text-align: justify;
    }

    .block-views-send-us-message ._webform-subtext,
    .block-views-send-us-message ._webform-body {
      max-width: 450px;
    }

    .block-views-send-us-message ._webform-subtext,
    .block-views-send-us-message ._webform-body {
      max-width: 450px;
    }

    .block-views-send-us-message ._webform-subtext,
    .block-views-send-us-message ._webform-body {
      max-width: 450px;
    }

    .block-views-send-us-message ._webform-body {
      text-align: justify;
    }

    .block-views-send-us-message ._webform-body p {
      color: #ffffff!important;
    }

    .block-views-send-us-message ._webform-form {
      margin-top: 0;
    }

  }

  @media (min-width: 1024px) {
    .block-views-send-us-message .captcha,
    .block-views-send-us-message .form-actions {
      width: 50%;
      float: left;
      text-align: right;
    }

  }

  @media (min-width: 1200px) {
    #block-views-send-us-message.block h2 {
      font-size: 36px;
      line-height: 45px;
    }

    .block-views-send-us-message {
      padding: 150px 15px;
    }
  }



</style>

<!-- FOOTER -->
