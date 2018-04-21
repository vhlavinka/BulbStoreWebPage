{*
Valerie Hlavinka
417 - User Interfaces
Program 2
*}

{*FOR DEBUGGING PURPOSES ONLY*}

{extends file="layout.tpl"}

{block name="localstyle"}
{/block}

{block name="main"}
    
   {*var_export($)*}
   {*var_export($)*}
<h2>Sample</h2>

<pre>
{var_export($items,true)}
{$bag}
</pre>

{/block}