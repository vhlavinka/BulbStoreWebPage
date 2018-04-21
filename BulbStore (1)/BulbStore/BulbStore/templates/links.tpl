{*
Valerie Hlavinka
417 - User Interfaces
Program 2
*}

{if $session->login and $session->login->is_admin}
    <li><a href="allBags.php">All Bags</a></li>
    <li><a href="addBulbInitial.php">Add Bulb</a></li>
    <li><a href="addTypeInitial.php">Add Type</a></li>
{else}
    <li><a href="cart.php">Cart</a></li>
{/if}

{if $session->login and not $session->login->is_admin}
  <li><a href="myBags.php">My Bags</a></li>
{/if}

{if $session->login} 
  <li><a href="logout.php">Logout</a></li>
{else}
  <li><a href="login.php">Login</a></li>
{/if}



