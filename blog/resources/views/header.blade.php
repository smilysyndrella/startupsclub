 @extends('layouts.profileMaster')
 @section('header')
 
<nav class="navbar navbar-white navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="index.html"><b>DayDay</b></a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
          <ul class="nav navbar-nav navbar-right">
            <li class="actives"><a href="profile.html">Profile</a></li>
            <li><a href="home.html">Home</a></li>
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                Pages <span class="caret"></span>
              </a>
              <ul class="dropdown-menu">
                <li><a href="profile2.html">Profile 2</a></li>
                <li><a href="profile3.html">Profile 3</a></li>
                <li><a href="profile4.html">Profile 4</a></li>
                <li><a href="sidebar_profile.html">Sidebar profile</a></li>
                <li><a href="user_detail.html">User detail</a></li>
                <li><a href="edit_profile.html">Edit profile</a></li>
                <li><a href="about.html">About</a></li>
                <li><a href="friends.html">Friends</a></li>
                <li><a href="friends2.html">Friends 2</a></li>
                <li><a href="profile_wall.html">Profile wall</a></li>
                <li><a href="photos1.html">Photos 1</a></li>
                <li><a href="photos2.html">Photos 2</a></li>
                <li><a href="view_photo.html">View photo</a></li>
                <li><a href="messages1.html">Messages 1</a></li>
                <li><a href="messages2.html">Messages 2</a></li>
                <li><a href="group.html">Group</a></li>
                <li><a href="list_users.html">List users</a></li>
                <li><a href="file_manager.html">File manager</a></li>
                <li><a href="people_directory.html">People directory</a></li>
                <li><a href="list_posts.html">List posts</a></li>
                <li><a href="grid_posts.html">Grid posts</a></li>
                <li><a href="forms.html">Forms</a></li>
                <li><a href="buttons.html">Buttons</a></li>
                <li><a href="error404.html">Error 404</a></li>
                <li><a href="error500.html">Error 500</a></li>
                <li><a href="recover_password.html">Recover password</a></li>
                <li><a href="registration_mail.html">Registration mail</a></li>
              </ul>
            </li>
            <li><a href="#" class="nav-controller"><i class="fa fa-user"></i></a></li>
          </ul>
        </div>
      </div>
    </nav>

    @stop