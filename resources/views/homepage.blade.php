<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <style>
        html,
        body {
            height: 100vh;
        }

        #root {
            height: 100%;
            display: flex;
            align-items: center;
            flex-direction: column;
            font-size: 16px;
            font-family: Verdana, Geneva, Tahoma, sans-serif;
        }

        #root h1 {
            font-family:'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;
        }

        #root q {
            font-style: italic;
            width: 50%;
            opacity: 70%;
        }

        #root p {
            margin-top: 5rem;
            width: 80%;
        }

        #root section {
            width: 80%;
        }

        #root table {
            width: 60%;
            border: 1px solid black;
            border-collapse: collapse;
        }

        #root table td {
            padding: 10px;
            border: 1px solid black;
        }

    </style>
    <title>CIdadão de olho | API</title>
</head>
<body>
    <div id="root">
        <h1>API - Cidadão de Olho</h1>
        <q>
            Nós, cidadãos do estado de Minas Gerais, estamos muito interessados em monitorar 
            como nosso dinheiro está sendo gasto. Especificamente, gostaríamos de poder acompanhar 
            quem são os deputados mais "gastadores". Além disso, como maneira de divulgação destes dados, 
            queríamos também saber qual mídia social tem mais impacto para divulgar tal ranking. Queremos ser ouvidos!
        </q>
        <p>
            Pensando nisso, desenvolvemos a API - Cidadão de Olho, que ranqueia as redes sociais mais utilizadas pelos deputados
            da ALMG e também ranqueia os deputados de acordo com a quantidade de verbas indenizatórias reembolsadas a cada mês (no ano de 2019).
        </p>
        <section>
            <h3>Rank de redes sociais</h3>
            <table>
                <tr>
                    <td><strong>URL<strong></td>
                    <td>/api/redes_sociais</td>
                </tr>
                <tr>
                    <td><strong>Método<strong></td>
                    <td>GET</td>
                </tr>
                <tr>
                    <td><strong>Tipo de retorno<strong></td>
                    <td>JSON</td>
                </tr>
            </table>
        </section>

        <section>
            <h3>Rank de deputados por quantidade de verbas indenizatórias reembolsadas</h3>
            <table>
                <tr>
                    <td><strong>URL<strong></td>
                    <td>/api/verbas_ind/2019/{mês}</td>
                </tr>
                <tr>
                    <td><strong>Método<strong></td>
                    <td>GET</td>
                </tr>
                <tr>
                    <td><strong>Tipo de retorno<strong></td>
                    <td>JSON</td>
                </tr>
            </table>
        </section>
    </div>
</body>
</html>