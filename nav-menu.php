
  <!-- Always shows a header, even in smaller screens. -->
  <div class="mdl-layout mdl-js-layout mdl-layout--fixed-header">
    <header class="mdl-layout__header">
      <div class="mdl-layout__header-row">
        <!-- Title -->
        <span class="mdl-layout-title"><a class="menu-title no-underline" href="index.php"><img src="img/budgetpedia-favicon.png" style="width:35%" alt="budgetpedia logo"></a></span>
        <!-- Add spacer, to align navigation to the right -->
        <div class="mdl-layout-spacer"></div>
        <!-- Navigation. We hide it in small screens. -->
        <nav class="mdl-navigation mdl-layout--large-screen-only">
          <a class="mdl-navigation__link" href="about.php">ABOUT US</a>
          <a class="mdl-navigation__link" href="about-the-budget.php">ABOUT THE BUDGET</a>
        </nav>
      </div>
    </header>
    <div class="mdl-layout__drawer">
      <span class="mdl-layout-title">Budgetpedia</span>
      <nav class="mdl-navigation">
        <span class="nav-section-title">Data Stories</span><br>
        <a class="mdl-navigation__link" href="datastory-surpluses-deficits.php">Surpluses & Deficits Backgrounder</a>
        <a class="mdl-navigation__link" href="datastory-city-staffing.php">Staff Numbers & Salaries</a>
        <br>
        <span class="nav-section-title">Further Exploration</span><br>
        <a class="mdl-navigation__link" href="http://budgetpedia.ca/explorer">Data Explorer (BETA)</a>
        <a class="mdl-navigation__link" href="budgetpedia-api.php">Budgetpedia API (BETA)</a>
        <a class="mdl-navigation__link" href="about.php">About Budgetpedia</a>
        <a class="mdl-navigation__link" href="about-the-budget.php">About the Toronto Budget</a>
        <!-- <a class="mdl-navigation__link" href="">Link</a> -->
      </nav>
    </div>
    <main class="mdl-layout__content">