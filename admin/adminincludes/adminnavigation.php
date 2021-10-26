



        <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
   
   <div class="navbar-header">
       <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
           <span class="sr-only">Toggle navigation</span>
           <span class="icon-bar"></span>
           <span class="icon-bar"></span>
           <span class="icon-bar"></span>
       </button>
       <a class="navbar-brand" href="index.html"></a>
   </div>
   <!-- Top Menu Items -->
   <ul class="nav navbar-right top-nav">


   <li class="dropdown">
       <a href="#" class="dropdown-toggle" data-toggle="dropdown"><span class="label label-pill label-danger count" style="border-radius:10px;"></span> <span class="glyphicon glyphicon-envelope" style="font-size:18px;"></span></a>
       <ul class="dropdown-menu"></ul>
      </li>



    <li> <a>Home</a> </li>


       
       <li class="dropdown">
           <a href="#" class="dropdown-toggle a" data-toggle="dropdown a"><i class="fa fa-user"></i> <?php echo $_SESSION['Username']; ?> <b class="caret"></b></a>
           <ul class="dropdown-menu a">
               <li>
                   <a href="#"><i class="fa fa-fw fa-user"></i> Profile</a>
               </li>
           
               <li>
                   <a href="../includes/logout.php"><i class="fa fa-fw fa-power-off"></i> Log Out</a>
               </li>
           </ul>
       </li>
   </ul>

   <div class="collapse navbar-collapse navbar-ex1-collapse">
       <ul class="nav navbar-nav side-nav"  >
           <li>
               <a href="index.php"><i class="fa fa-fw fa-dashboard"></i> Dashboard</a>
           </li>
          
           <li>
               <a href="#" data-toggle="collapse" data-target="#posts_dropdown"><i class="fa fa-fw fa-arrows-v"></i> Transactions <i class="fa fa-fw fa-caret-down"></i></a>
               <ul id="posts_dropdown" class="collapse">
                   <li>
                       <a href="./transaction.php">View All Transactions</a>
                   </li>
                   <li>
                       <a href="transaction.php?source=add_transaction">Add New Transactions</a>
                   </li>
               </ul>
           </li>
 
           <li>
               <a href="#" data-toggle="collapse" data-target="#clients_dropdown"><i class="fa fa-fw fa-arrows-v"></i> Clients <i class="fa fa-fw fa-caret-down"></i></a>
               <ul id="clients_dropdown" class="collapse">
                   <li>
                       <a href="./clients.php">View All Clients</a>
                   </li>
                   <li>
                       <a href="clients.php?source=add_clients">Add New Clients</a>
                   </li>
               </ul>
           </li>
         
          
          
       </ul>
   </div>

</nav>
