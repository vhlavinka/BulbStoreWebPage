{*
Valerie Hlavinka
417 - User Interfaces
Program 2
*}

{extends file="layout.tpl"}

{block name="localstyle"}
  <style type="text/css">
    .content {
      padding: 0 3px;
    }
    button {
      white-space: nowrap;
    }
    img {
      max-height: 250px;
      max-width: 250px;
    }
    input[name=amount] {
      width: 50px;
    }
    #err_msg {
      color: red;
    }
  </style>
{/block}

{block name="localscript"}
  <script  type="text/javascript">
    $(function() {
      $("input[name='amount']").keypress(function (e) {
        //if key is not backspace, not an arrow, or not a digit, ignore it
        if (e.which !== 8 && e.which !== 0 && (e.which < 48 || e.which > 57)) {
          $("#err_msg").html("(digits only)").show().fadeOut(2000);
          return false;
        }
      });
    });
  </script>
{/block}

{block name="main"}

  <div class="content">
    <p>
      <b>{$bulb->name|escape: 'html'} (#{$bulb->id})</b>
      <br />
      price: ${number_format($bulb->price,2)}      
      <br />
      type: {$bulb->type->name}      
    </p>

    <p>
      {$bulb->description}  
    </p>
  </div>
  

  <table class='table table-condensed borderless'>
    <tr>
      <td>       
        <img class='img-responsive' src="{$image}" />
      </td>
      <td>         
      {if isset($session->login->is_admin) and $session->login->is_admin}
        <form action="modifyBulbInitial.php" method="GET">  
          <input type='hidden' name='bulb_id' value="{$bulb->id}" />
          <button type="submit">Modify Bulb</button> 
        </form>
      {else}
        <form action="cart.php" method="POST">
          <b>Amount</b> <span id="err_msg"></span>
          <br />
          <input type='hidden' name='bulb_id' value="{$bulb->id}" />
          <input class="form-control" type="text" name="amount" value="{$amount}"/>
          <button type="submit" name="doit">Change Amount</button>
        </form>
      {/if} 
      </td>
    </tr>
  </table>

  
          

{/block}
