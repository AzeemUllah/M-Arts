<div class="sidebar" data-color="rose" data-background-color="black" data-image="assets/img/sidebar-1.jpg">
      <div class="logo">
        <a href="#" class="simple-text logo-mini">
          MA
        </a>
        <a href="#" class="simple-text logo-normal">
          Martial Arts
        </a>
      </div>
      <div class="sidebar-wrapper">
        <div class="user">
          <div class="photo">
            <img src="assets/img/default-avatar.png" />
          </div>
          <div class="user-info">
            <a data-toggle="collapse" href="#collapseExample" class="username">
              <span>
                <?php echo $_SESSION['name']; ?>
              </span>
            </a>
          </div>
        </div>
        <ul class="nav">
          <li class="nav-item ">
            <a class="nav-link" data-toggle="collapse" href="#tablesExamples">
              <i class="material-icons">grid_on</i>
              <p> Members
                <b class="caret"></b>
              </p>
            </a>
            <div class="collapse" id="tablesExamples">
              <ul class="nav">
                <li class="nav-item ">
                  <a class="nav-link" href="members_list.php">
                    <span class="sidebar-mini"> RT </span>
                    <span class="sidebar-normal"> Members List </span>
                  </a>
                </li>
                <li class="nav-item ">
                  <a class="nav-link" href="add_member.php">
                    <span class="sidebar-mini"> ET </span>
                    <span class="sidebar-normal"> Add Members </span>
                  </a>
                </li>
              </ul>
            </div>
          </li>
        </ul>
      </div>
    </div>