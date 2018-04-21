{*
login.tpl: login form
*}
 
{extends file="layout.tpl"}
 
{block name="localstyle"}
  <style>
    th {
      width: 10px;
    }
  </style>
{/block}
 
{block name="main"}
<h2>Login</h2>
 
<p>Please enter access information</p>
<form action="validate.php" method="post" autocomplete="off">
  <table class="table table-condensed borderless">
    <tr>
      <th>user:</th>
      <td><input class="form-control" type="text" name="username"
                 value="{$username|escape:'html'}" /></td>
    </tr>
    <tr>
      <th>password:</th>
      <td><input class="form-control" type="password" name="password" /></td>
    </tr>
    <tr>
      <td></td>
      <td><button type="submit">Access</button></td>
    </tr>
  </table>
 
  <h4 class="message">{session_get_flash var='message'}</h4>
</form>
{/block}