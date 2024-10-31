<header class="header" role="banner">
  <h1 class="logo">
    <a href="#">Terence <span>Devine</span></a>
  </h1>
  <div class="nav-wrap">
    <nav class="main-nav" role="navigation">
      <ul class="unstyled list-hover-slide">
        <li><a href="#">About</a></li>
        <li><a href="#">Work</a></li>
        <li><a href="#">Contact</a></li>
        <li><a href="#">Blog</a></li>
      </ul>
    </nav>
  </div>
</header>

<style>
*, :before, :after {
  box-sizing: border-box;
}

/* FONTS */
.sans {
  font-family: 'Source Sans Pro', Helvetica, Arial, sans-serif;
}

/* COLORS */
.orange { color: #DF4500; }
.gray { color: #35302D; }
.gray-shine { color: #3C3735; }
.white-off { color: #DFDBD9; }

/* REUSABLE STYLES */
.unstyled {
  list-style: none;
  padding: 0;
  margin: 0;
}
.unstyled a {
  text-decoration: none;
}

.list-inline {
  overflow: hidden;
}
.list-inline li {
  float: left;
}

/* HEADER STYLES */
.header {
  position: fixed;
  left: 0;
  top: 0;
  bottom: 0;
  width: 17.5em;
  background: #FFFFFF; /* Sidebar background to white */
  border-right: 2px solid #DFDBD9; /* Added border to the sidebar */
}

.logo {
  font-weight: 300;
  font-size: 2em;
  font-family: 'Source Sans Pro', Helvetica, Arial, sans-serif;
  text-align: center;
  padding: 0;
  margin: 0;
}
.logo a {
  display: block;
  padding: 1em 0;
  color: #000000; /* Logo font color to black */
  text-decoration: none;
}
.logo span {
  font-weight: 700;
}

/* MAIN NAV */
.main-nav ul {
  border-top: solid 1px #DFDBD9;
}
.main-nav li {
  border-bottom: solid 1px #DFDBD9;
}
.main-nav a {
  padding: 1.1em 0;
  color: #000000; /* Main nav font color to black */
  font-weight: 400;
  font-size: 1.125em;
  font-family: 'Source Sans Pro', Helvetica, Arial, sans-serif;
  text-align: center;
}

/* REMOVE HOVER SLIDE EFFECT */
.list-hover-slide li {
  position: relative;
  overflow: hidden;
}
.list-hover-slide a {
  display: block;
  position: relative;
  z-index: 1;
}
.list-hover-slide a:before {
  content: '';
  display: none; /* Disabled the hover slide effect */
}
</style>