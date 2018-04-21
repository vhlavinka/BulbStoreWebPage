{*
Valerie Hlavinka
417 - User Interfaces
Program 2
*}

{extends file="layout.tpl"}

{block name="localstyle"}
  <style type="text/css">
    td:first-child {
      width: 10px;
    }
  </style>
{/block}

{block name="main"}
<h2>My Bags</h2>
  <table style="width:100%">
    {foreach $bags as $bag}  
      <tr>
        <th><a href="showBag.php?bag_id={$bag->id}">BagID #{$bag->id}</a></th>
        <th>ordered: {$bag->made_on} </th>
        <th>by: {$bag->user->name}</th>
      </tr> 
    {/foreach}  
  </table>
<h4 class="message">{session_get_flash var='message'}</h4>
{/block}