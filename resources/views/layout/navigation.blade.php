<nav class="navbar navbar-expand-sm bg-dark navbar-dark">
    <div class="container-fluid">
        <ul class="navbar-nav nav-pills">
          <li class="nav-item">
                <a class="nav-link {{ ($title == "Home") ? 'active' : '' }}" href="/">Home</a>
            </li>
            <li class="nav_item">
                <a class="nav-link {{($title == 'Teams') ? 'active' : '' }}" href="/team">Teams</a> 
            </li>
            <li class="nav_item">
                <a class="nav-link {{ ($title == 'Players') ? 'active' : '' }}" href="/player">Players</a>
            </li>
        </ul>
    </div>
</nav>
<nav class="navbar navbar-expand-sm bg-dark navbar-dark fixed-bottom">         
    <div class="container-fluid">           
            <a class="navbar-brand" href="#">Copyright by JoWi @2021</a>         
      </div>       
</nav> 
