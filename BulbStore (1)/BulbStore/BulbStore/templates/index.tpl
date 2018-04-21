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
  {* add these for debugging *}
  {*var_export($session->dd,true)*}
  {*var_export($doit,true)*}
  
  <div class='top'>

    <h2>Bulb Selection <span class="order">(by {$order})</span></h2>

    <form action="{$smarty.server.PHP_SELF}" method="post">
      <button type="submit" name="doit">Show by Type:</button>
      <select name="dd">
          {html_options options=$types selected=$session->dd}
      </select>
    </form>
  </div>

  <table class="table table-hover table-condensed">
    <tr>
      <th><a href="/default/BulbStore/BulbStore/setBulbOrder.php?field=name">name</a></th>
      <th class="price"><a href="/default/BulbStore/BulbStore/setBulbOrder.php?field=price">price</a></th>
      <th>type</th>
    </tr>
    {foreach $bulbs as $bulb}
      <tr>
        <td>
          <a href="showBulb.php?bulb_id={$bulb->id}">
            {$bulb->name|escape:'html'}
          </a>
        </td>
        <td class="price">${number_format($bulb->price,2)}</td>
        <td>{$bulb->type->name}</td>
      </tr>
    {/foreach}
  </table>
{/block}
