<h2>League Standings</h2>
{league}
<table class="table table-hover table-striped">
    

    <header class="panel-heading danger"> {conference} </header>
    
    {region}
    <tr>
        <td class = "success">{division}</td>
        <td class = "success"></td>
        <td class = "success">W</td>
        <td class = "success">L</td>
        <td class = "success">T</td>
    <tr/>
    
    {teams}
    <tr>
        <td><img class="league-table-img" src="/img/logos/{filename}" title="{name}"/></td>
        <td><span title="{code}">{name}</span></td>
        <td>{wins}</td>
        <td>{losses}</td>
        <td>{ties}</td>
    </tr>

    {/teams}
    <tr>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>       
    </tr>   
    {/region}
    <tr>
        
    </tr>
</table>
{/league} 
