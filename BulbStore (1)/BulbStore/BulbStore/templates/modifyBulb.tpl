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
    td {
      border: none ! important;
    }
    textarea {
      resize: vertical;
    }
  </style>
{/block}

{block name="main"}
  <h2>Modify Bulb</h2>

  <form action="modifyBulb.php" method="post">
    <input type="hidden" name="bulb_id" value="{$bulb_id}" />
    <table class="table table-condensed borderless">
      <tr>
        <td>name: </td>
        <td>
          {$name|escape:'html'}
        </td>
      </tr>
      <tr>
        <td>type: </td>
        <td>
            {$type|escape:'html'}
        </td>
      </tr>
      <tr>
        <td>price ($): </td>
        <td>
          <input class="form-control" type="text" name="price" 
                 value="{number_format($price|escape:'html',2)}" />
        </td>
      </tr>
      <tr>
        <td>in stock: </td>
        <td>
          <input class="form-control" type="text" name="in_stock" 
                 value="{$in_stock|escape:'html'}" />
        </td>
      </tr>
      <tr>
        <td>description: </td>
        <td>
          <textarea class="form-control" name="description"
                    >{$description|escape:'html'}</textarea>
        </td>
      </tr>
      <tr>
        <td>image: </td>
        <td>
          <select class="form-control" name="image">
            {html_options options=$images selected=$image}
          </select>
        </td>
      </tr>
      <tr>
        <td></td>
        <td>  
          <button type="submit" name="doit">Modify</button>
          <button type="submit" name="cancel">Cancel</button>
        </td>
      </tr>
    </table>

  </form>
        
  <h4 class="message">{$message|default}</h4>
  
  
{/block}
