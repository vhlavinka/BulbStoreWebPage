{*
Valerie Hlavinka
417 - User Interfaces
Program 2
*}

{extends file="layout.tpl"}

{block name="main"}

<h2>Bag #{$bag_id}</h2>

  {if $session->login and $session->login->is_admin}
    User: {$user->name}
    <br/>
    Email: {$user->email}
  {/if}
  
   <table class="table table-hover table-condensed">
    <tr> 
        <th>name</th>
        <th>id</th>
        <th>type</th>
        <th>price</th>
        <th>amount</th>
        {if $session->login and $session->login->is_admin}
          <th>stock</th>
        {/if}
        <th>sub-total</th>
    </tr>   
{foreach $items as $item}
    <tr> 
        <td>{$item->bulb->name}</a></td>
        <td>{$item->bulb_id}</td>
        <td>{$item->bulb->type->name}</td>
        <td>${number_format($item->bulb->price,2)}</td>
        <td>{$item->amount}</td>
        {if $session->login and $session->login->is_admin}
            <td>{$item->bulb->in_stock}</td>
        {/if}
        <td>${number_format($item->amount*$item->bulb->price,2)}</td>       
    </tr>
{/foreach}

    <tr>
        <th>Total:</th>
        <th>{*tab*}</th>
        <th>{*tab*}</th>
        <th>{*tab*}</th>
        <th>{*tab*}</th>
        {if $session->login and $session->login->is_admin}
          <th>{*tab*}</th>
        {/if}
        <th>${number_format($total,2)}</th>
    </tr>
  </table>
  <br/>
  
  {if $session->login and $session->login->is_admin}
  <form action="processBag.php" method="get"> 
      <input type='hidden' name='bag_id' value="{$bag_id}" />
      <button type="submit">{$button_title}</button>
      <input type='hidden' name='confirm' 
        value='{session_get_flash var='confirm'}' />
  </form>
  {/if}

  <h4 class="message">{session_get_flash var='message'}</h4>
{/block}

