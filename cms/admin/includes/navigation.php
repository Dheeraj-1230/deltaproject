<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.html">CMS</a>
            </div>
            <!-- Top Menu Items -->
            <ul class="nav navbar-right top-nav">
            <li><a href="../index.php">HOME SITE</a></li>
            <li class='dropdown'>
     <a href='#' class='dropdown-toggle' data-toggle='dropdown'><i class='fa fa-user'></i> <?php echo $_SESSION['username'] ?><b class='caret'></b></a>
     <ul class='dropdown-menu'>
         <li class='divider'></li>
         <li>
             <a href='../index.php'><i class='fa fa-fw fa-power-off'></i> Log Out</a>
         </li>
     </ul>
 </li>      
            </ul>
            <div class="collapse navbar-collapse navbar-ex1-collapse">
                <ul class="nav navbar-nav side-nav">
                    <li>
                        <a href="index.php"><i class="fa fa-fw fa-dashboard"></i> Dashboard</a>
                    </li>
                  
                    <li>
                        <a href="javascript:;" data-toggle="collapse" data-target="#posts_dropdown"><i class="fa fa-fw fa-arrows-v"></i> Events <i class="fa fa-fw fa-caret-down"></i></a>
                        <ul id="posts_dropdown" class="collapse">
                            <li>
                                <a href="./posts.php">View all Events </a>
                            </li>
                            <li>
                                <a href="./posts.php?source=add_post">Add Events </a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="./categories.php"><i class="fa fa-fw fa-wrench"></i>Events Categories</a>
                    </li>
                    <li>
                        <a href="javascript:;" data-toggle="collapse" data-target="#dropdown"><i class="fa fa-fw fa-arrows-v"></i> Invitations <i class="fa fa-fw fa-caret-down"></i></a>
                        <ul id="dropdown" class="collapse">
                            <li>
                                <a href="./invitation.php?source=add_post">Send Invitation </a>
                            </li>
                            <li>
                                <a href="./invitation.php?source=view_invitations"> Invitations </a>
                            </li>
                            <li>
                                <a href="./invitation.php?source=send_invitations">Send Invitations via Email</a>
                            </li>
                        </ul>
                    </li>
                </ul>
            </div>
        </nav>