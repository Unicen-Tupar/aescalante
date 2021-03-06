{include file="templateEngine/templates/header_adm.tpl"}

<main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-md-4">
    <div
        class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Gestion de Posiciones</h1>
        <div class="btn-toolbar mb-2 mb-md-0">
            <div class="btn-group mr-2">
            </div>
            <a href="index" class="btn btn-success" role="button" aria-pressed="true">Vista usuario</a>
        </div>
    </div>
    <h2>Agregar nueva posición</h2>

    <form action="addPosition" method="GET">
        <div class="form-row">
            <div class="form-group col-md-5">
                <label for="nombre">Nombre posición</label>
                <input type="text" class="form-control" name="name" id="name">
                <p id="note">El campo Nombre tiene que ser de tipo 'string'. </p>
            </div>
        </div>
        <div class="form-group">
            <input class="btn btn-primary" type="submit" value="Agregar Posicion">
        </div>
    </form>

    <h2>Posiciones</h2>
    <div class="table-responsive" >
        <table class="table table-striped table-sm">
            <thead>
                <tr>
                    <th>Nombre</th>
                    <th>Acción</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                   
                    {foreach from=$positions item=position}
                    <td> 
                        <div class="list-group">
                            <a href="position/{$position['id_position']}" class="list-group-item list-group-item-action active">
                                <p>{$position['name']}</p>
                            </a>
                        <div><a href="" class="list-group-item list-group-item-action"><p> 
                            {foreach from=$players item=player}
                            {if $player['id_position'] eq $position['id_position']}
                            <p>{$player['name']} {$player['surname']} </p>
                            {/if} 
                            {/foreach}

                            <!-- {$players[$player['id_position']-2]['name']} -->
                        </p></a>
                        </div>      
                    </div>
                    </td>
                    <td>
                        <a href="deletePosition/{$position['id_position']}"><span data-feather="trash"></span>Elimitar</a>
                </tr>
                {/foreach}
                
            </tbody>
        </table>
    </div>
</main>
{include file="templateEngine/templates/footer_adm.tpl"}