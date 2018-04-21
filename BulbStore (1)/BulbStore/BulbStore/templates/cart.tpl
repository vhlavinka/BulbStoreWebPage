{*
Valerie Hlavinka
417 - User Interfaces
Program 2
*}

{extends file="layout.tpl"}

{block name="localstyle"}
   <style type="text/css">
    .top { 
      margin-bottom: 20px; 
    }
    .top h2 { 
      display: inline-block;
      margin: 0 30px 0 0;
      vertical-align: bottom;
    }
    .top form {
      display: inline-block;
      vertical-align: bottom;
    }
    .top .order {
      font-size: 70%;
      font-weight: normal;
    }
  </style>
{/block}

{block name="main"}

<div class ='top'>    
    <h2>My Cart</h2>
</div>
    
  <table class="table table-hover table-condensed">
       <tr> 
        <th>name</th>
        <th>id</th>
        <th>type</th>
        <th>price</th>
        <th>amount</th>
        <th></th>
      </tr>
    
    {foreach $session->cart_info as $ci}
    <tr> 
        <td><a href="/default/BulbStore/BulbStore/showBulb.php?bulb_id={$ci['bulb_id']}&amount={$ci['amount']}">{$ci['name']}</a></td>
        <td>{$ci['bulb_id']}</td>
        <td>{$ci['type']}</td>
        <td>${number_format($ci['price'],2)}</td>
        <td>
            {$ci['amount']}
        </td>
        <td>${number_format($ci['sub_total'],2)}</td>       
    </tr>
    {/foreach}

    <tr>
        <th>Total:</th>
        <th></th>
        <th></th>
        <th></th>
        <th></th>
        <th>${number_format($total_price,2)}</th>
    </tr>
   
  </table>
    <br/>
  {if $session->login && ($session->cart != [])}
  <form action="createBagFromCart.php" method="post">
    <table>   
      <input type='hidden' name='cart' value="{$cart_query}" />
      <button type="submit" name='makebag'>Make a Bag from Cart</button> 
     </table>
   </form>
   {/if}   




{*"\$session = $session"*}

{/block}
