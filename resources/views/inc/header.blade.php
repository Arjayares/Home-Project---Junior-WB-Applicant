<link href='https://fonts.googleapis.com/css?family=Karla' rel='stylesheet'>

<style>
  .header.header .header-contacts {
    width: auto;
    font-family: 'karla';
    font-size: 14px;
  }

  .navbar-brand img {
    margin-right: -0.75rem;
    
  }
</style>
<header id="header" class="header" role="banner" aria-label="Site header">
  <nav class="navbar navbar-expand-lg navbar-light">
    <div class="container">
     
      <div class="navbar-brand-container">
        <a class="navbar-brand" href="/">
          <img src="{{ URL::asset('/storage/header_logo/logo_img.png') }}" alt="">
          <h1 class="sr-only"></h1>
        </a>
      </div>

      <div class="header-contacts">
        <ul>
         
          <li>
          	<a href="/">
          		<span>MEET THE TEAM</span>
            </a>
          </li>
          <li>
          	<a href="/">
          		<span>SEARCH FOR THE HOME</span>
            </a>
          </li>
          <li>
            <a href="/">
              <span>OUR COMMUNITIES</span>
            </a>
          </li>
          <li>
            <a href="/">
              <span>HOME VALUATION</span>
            </a>
          </li>
          <li>
            <a href="/">
              <span>SERVICES</span>
            </a>
          </li>
          <li>
            <a href="/">
              <span>HOME ACROSS AMERICA</span>
            </a>
          </li>
          <li>
            <a href="/">
              <span>TESTIMONIALS</span>
            </a>
          </li>
        </ul>
      </div>

      <div class="site-header-menu-toggle">
        <a id="side_icon" class="site-header-menu-toggle--button" role="button">
          <span class="toggle-icon--bar toggle-icon--bar-top"></span>
          <span class="toggle-icon--bar toggle-icon--bar-middle"></span>
          <span class="toggle-icon--bar toggle-icon--bar-bottom"></span>
          <span class="show-for-sr">Menu</span>
        </a>
      </div>

    </div>

  </nav>

  

  <div class="loader"></div>
</header>
