<!DOCTYPE html>
<html>
<header>
  <link rel="stylesheet" href="style_phone.css" media="sceeen and (max-width: 479px)" />
  <link rel="stylesheet" href="style_tablet.css" media="screen and (min-width: 480px) and (max-width: 768px)" />
  <link rel="stylesheet" href="style_desktop.css" media="screen and (min-width: 481px)" />
</header>

<body>
  <nav class="navbar navbar-expand-sm bg-light">
    <div class="container">
      <div class="collapse navbar-collapse" id="collapsibleNavId">
        <ul class="navbar-nav me-auto mt-2 mt-lg-0">
          <li class="nav-item">
            <a class="nav-link" href="home.html" aria-current="page">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="transition.html">Transition</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="animation.html" aria-haspopup="true" aria-expanded="false">Animation</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="table.html" aria-haspopup="true" aria-expanded="false">Table</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="forms.html" aria-haspopup="true" aria-expanded="false">Forms</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>

  <center>
    <div class="card welcome">
      <h2 class="card-title">Welcome <?php echo $_SESSION['username']?></h2>
      <p class="card-text">Please choose which html/css element you would like to see</p>
      <div class="card-body flex-container">
        <div class="card inner-card">
          <div class="card-body inner-card flex-fill">
            <h4 class="card-title">Table</h4>
            <a href="table.html" class="card-link"></a>
          </div>
        </div>
        <div class="card inner-card">
          <div class="card-body col-sm">
            <h4 class="card-title">Transition</h4>
            <a href="transition.html" class="card-link"></a>
          </div>
        </div>
        <div class="card inner-card">
          <div class="card-body col-sm">
            <h4 class="card-title">Forms</h4>
            <a href="forms.html" class="card-link"></a>
          </div>
        </div>
      </div>
    </div>
  </center>
  <!--
  <table>
    <tr>
      <th>Name</th>
      <th>Class</th>
      <th>Major</th>
      <th>Minor</th>
    </tr>
    <tr>
      <td>Temp 1</td>
      <td>Freshman</td>
      <td>Computer Science</td>
      <td>Math</td>
    </tr>
    <tr>
      <td>Temp 2</td>
      <td>Sophemore</td>
      <td>Biology</td>
      <td>None</td>
    </tr>
    <tr>
      <td>Temp 3</td>
      <td>Junior</td>
      <td>Music</td>
      <td>Biology</td>
    </tr>
  </table>

-->
</body>
<footer>

</footer>

</html>